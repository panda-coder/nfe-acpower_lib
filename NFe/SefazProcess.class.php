<?php 

	/********
	 * ChangeLog:
	 * 
	 * 
	 * 	22/08/2013 - Nome de função alterada de TrataProtocolo para TrataProtocoloLote
	 * 	22/08/2013 - Implementado gerenciamento do cStat 225(lote) - falha de esquema
	 * 	22/08/2013 - Implementado gerenciamento do cStat 656(lote) - consumo indevido
	 * 	22/08/2013 - Implementada função RemoveArquivo
	 */

	require_once('core.php');
	
	
	
	
	class SefazProcess extends SefazGen implements SefazProcInterface{
		
		private $file;
		private $id_processo;
		
		
		private $numero_recibo;
		private $filename;
		private $chave_nfe;
		private $retProt;
		private $aProt;
		private $syslogXML;
		private $protFile;
		private $dirDest;
		private $ret;
		
		
		function __destruct(){
			
			$this->SignalHandler();
			
			echo "Sou um processo morrendo... adeus vida cruel...\n";
			
			$this->WriteErrors();
			$this->setMeFree();
			NfeSyslog_Service::KillPid( $this->pid );
		}
		
		private function WriteErrors(){
			if ( $this->errStatus ){
				$txt = "\n{$this->errMsg}";
				$nome_arquivo = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'error_nfe' . DIRECTORY_SEPARATOR . $this->chave_nfe . '.log';
				
				file_put_contents($nome_arquivo, $txt, FILE_APPEND);
			}
		}
		
		
		private function SignalHandler(){
			
			$signals = $this->DbConnection->lookup( $this->getQuery( 'GET_SIGNAL', $this->id_processo ) ); 
			
			
			foreach($signals as $signal){
				$kill_after = false;
				
				list($id_signal, $sig) = $signal;
				
				switch($sig){
					case KILL_SIGNAL:
						$this->setMeFree();
						break;
					case DELETE_SIGNAL:
						$kill_after = true;
						break;
					default:
						echo "Unknown signal\n";
				}
				
				$this->DbConnection->exec( $this->getQuery('DESTROY_SIGNAL', $id_signal ) );
				echo "Signal killing: {$id_signal}";
			}
			
			
			if ( $kill_after ){
				$this->DeleteMe();
			}
			
		}
		
		
		
		private function setMeFree(){
			$this->setProcessFree( $this->id_processo );
			die("Finally - I'm free...\n");
		}
		
		
		
		
		private function DeleteMe(){
			$this->DbConnection->exec( $this->getQuery('DESTROY_PROCESS', $this->id_processo ) );
			die('Bye Bye...');
		}
		
		
		
		
		public function Run(){
			echo "PID: {$this->pid}\n";
			
			
			set_time_limit($this->tempo_max);
			$skip = true;
			
			if ( empty( $this->file ) ){
				throw new Exception("Arquivo a ser processado não configurado");
			}
			
			if ( empty( $this->id_processo ) ){
				throw new Exception("ID do pŕocesso não configurado");
			}
			
			
			
			$chave = explode("-", $this->file);
			$chave = $chave[0];
			
			
			
				
			
			echo "Running process... {$this->file}... ID: {$this->id_processo}... {$this->pid}\n";
			$this->SignalHandler();
			
			$aNFe = null;
			$this->filename = $this->valDir.$this->file; //Arquvio a ser processado
			
			
			$this->chave_nfe = substr($this->filename, strripos($this->filename, DIRECTORY_SEPARATOR) + 1, 44);
			
			
			$nfefile = file_get_contents($this->filename);
			
			
			//$aNFe[] = $nfefile;
			
			//obter o numero do ultimo lote enviado
			//$num = $this->__getNumLot();
			$num = $this->pGetNumLot();
			$num++;
			$this->pPutNumLot($num);
			
			//incrementa o numero
			//$num++;
			
			
			
			$this->syslogXML = new NfeSyslog_xml($this->DbConnection , $nfefile);
			
			
			
			$sitNF = $this->syslogXML->getSit();
			
			
			if ( $sitNF=="P" || $sitNF=="A" ){
				echo "situacao: {$sitNF}";
				$this->syslogXML->saveIncluido();
				die();
			}else{
				//echo "situacao: {$sitNF}";
			}
			
			
			$this->syslogXML->saveEnvio();
			$this->syslogXML->newXML($nfefile);
			
			$this->DbConnection->exec( $this->getQuery('SET_PROCESS_SITUATION', $this->id_processo, 'R') );
				
			$this->DbConnection->exec( $this->getQuery('SET_KEY_PROCESS', $this->id_processo, "$chave") );
			$x = 0;
			
			
			//$nfefile -- $ret = 
			//enviar as notas
			
			try{
				$ret = array();
				if ($this->autoriza($nfefile,$num,$ret, 0)){
					
					
					//if (!$this->__putNumLot($num)){
					//	$this->errStatus = true;
					//	$this->errMsg .= "Falha na Gravação do numero do lote de envio!!\n";
					//	die();
					//}
						
					
				
					//verificar o status do envio
					if ($ret['bStat'] == true && $ret['cStat'] == 103){
					
						$arquivo = dirname(__FILE__) . DIRECTORY_SEPARATOR . "nfe_logs" . DIRECTORY_SEPARATOR .  "prot{this->chave_nfe}.log";
						$text = var_export($ret, true);
						file_put_contents($arquivo, $text, FILE_APPEND);
					
						//pegar o numero do recibo da SEFAZ
						$this->numero_recibo = $ret['infRec']['nRec'];
								
						//incrementa o numero do lote no controle
						//comentar caso n�o use o controle de lote por arquivo
							
						//como temos o recibo iniciar o loop
						$loop = 0;
							
							
						$this->maxLoop =1;
						while ($loop < $this->maxLoop){
							echo "$this->chave_nfe esperando\n";
									
							
							$this->TrySefaz();
							//incrementar contagem
							$loop++;
							//atrasar a consulta para permitir processamento da SEFAZ
							sleep($this->intervalo*=2);
							
							//consultar o status da NFe
					
							
					}//fim do loop de consulta do status da nfe
						
						
						
							
					} else {
							
						$this->errStatus = true;
						$this->errMsg .= "Erro no envio do lote de NFe!!\n";
						$this->syslogXML->saveIncluido();
						die();
							
					}//fim if verifica retorno envio lote
				} else {
								
					$this->errStatus = true;
					$this->errMsg .= "Erro no envio do lote de NFe!!\n";
					
					$this->syslogXML->saveIncluido();
					die();
					
				}
			}catch (nfephpException $e) {
				echo $e->getMessage();
			}
				
			echo "Fim de um ciclo...\n";
				
				
			
				
		}
		
		
		public function setProcesso($arq, $id){
			$this->file = $arq;
			$this->id_processo = $id;
			
			$this->DbConnection->exec( $this->getQuery('SET_PROCESS_SITUATION', $this->id_processo, 'C') );
		}
		
		
		
		private function TrySefaz($type = '1'){
			
			
			
			if ( $type==1 ){//Tentar Pegar Protocolo por numero de recibo
				$this->syslogXML->saveConsulta();
				$aResp = array();
				if($aResp = $this->getProtocol($this->numero_recibo,'', $this->tpAmb, $this->retProt)){
					
						echo "{$this->chave_nfe} protocolo veio...\n";
						print_r($this->retProt);
						
						$arquivo = dirname(__FILE__) . DIRECTORY_SEPARATOR . "nfe_logs" . DIRECTORY_SEPARATOR .  "prot{this->chave_nfe}.log";
						$text = var_export($this->retProt, true);
						file_put_contents($arquivo, $text, FILE_APPEND);
				
				
						$this->TrataProtocoloLote();
				
				
				} else {
																	
					$this->errStatus = true;
					$this->errMsg .= "Falha na consulta do protocolo!!\n";														
					sleep($this->intervalo);
					
				}//fim consulta protocolo
				
			}
			
			if ( $type==2 ){//Tentar Pegar Protocolo por chave
				$this->syslogXML->saveConsultaChave();
				if ( $aResp = $this->getProtocol('',$this->chave_nfe, $this->tpAmb, $this->retProt)){
						
					echo "{$this->chave_nfe} protocolo veio...\n";
					//print_r($this->retProt);
					//$this->TrataProtocoloLote();
					
					$this->aProt = $this->retProt['aProt'];
					
					print_r($this->aProt);
					
					$this->TrataProtocoloNota();
				
				
				} else {
					
					$this->errStatus = true;
					$this->errMsg .= "Falha na consulta do protocolo!!\n";
				
						
				}//fim consulta protocolo
				
				
			}
			
		}
		
		private function TrataProtocoloLote(){
			
			
			if ($this->retProt['bStat'] == true){
			
				
				
					
				if ( $this->retProt['cStat'] == 106 ){
					$this->errStatus = true;
					$this->errMsg .= "Lote não localizado !!\n";
						
				}
				
				if (  $this->retProt['cStat'] == 225 ){
					$this->errStatus = true;
					$this->errMsg .= "Lote Com falha de esquema!!\n";
					
					$this->RemoveArquivo();
					
					die();
				}
				
				if (  $this->retProt['cStat'] == 656 ){
					$this->errStatus = true;
					$this->errMsg .= "Consumo indevido!!\n";
						
					$this->RemoveArquivo();
						
					die();
				}
				
					
				if ( $this->retProt['cStat'] > 106 ){
					$this->errStatus = true;
					$this->errMsg .= "Erro na consulta do lote !!\n" . $this->retProt['cStat'];
			
				}
			
					
				if ($this->retProt['cStat'] == 104){
					$aprovada = FALSE;
						
					//o protocolo foi retornado
					$this->aProt = $this->retProt['aProt'][0];
					$this->protFile = $this->temDir.$this->chave_nfe.'-prot.xml';
					
					
					
					$this->TrataProtocoloNota();
				}
				
				
			}
			
			
		}
		
		
		private function TrataProtocoloNota(){
			
			if ($this->aProt['cStat'] == 204){//Rejeitada por duplicidade
				$this->syslogXML->saveReprovada($this->aProt['cStat'].': '.$this->aProt['xMotivo']);
				$this->aProt = null;
				$this->TrySefaz(2); //Tenta pegar nota pela chave
				die();
			}
			
			
			//pegar o cStat
			if ($this->aProt['cStat'] == 100){
				//aprovado
				echo "<b>Nota Aprovada</b>";
				$this->dirDest = $this->aprDir;
				$aprovada = TRUE;
				$this->syslogXML->saveAprovada();
				
				
				$this->GravaProtocolo();
			}
			
			
			if ($this->aProt['cStat'] == 110){
				//denegado
				$this->dirDest = $this->denDir;
				$this->syslogXML->saveDenegada();
				
				$this->GravaProtocolo();
			}
				
			
			if ($this->aProt['cStat'] > 110){
				//reprovado
				$this->dirDest = $this->repDir;
				//mover a nota para reprovadas
				$this->syslogXML->saveReprovada($this->aProt['cStat'].': '.$this->aProt['xMotivo']);
					
				$this->MoveArquivo();
			}
			
			die();
		}
		
		
		
		
		private function GravaProtocolo(){
			
			if ( file_exists( $this->protFile ) ){
				$procnfe = $this->addProt($this->filename, $this->protFile);
				
				$this->syslogXML->newXML($procnfe);
			
				//salvar a NFe com o protocolo na pasta destino
				if ( file_put_contents($this->dirDest.$this->chave_nfe.'-nfe.xml', $procnfe) ) {
					//remover o arquivo antigo sem o protocolo
					$this->RemoveArquivo();
				}
			
			}
						
		}//Fim função de GravaProtocolo
		
		private function MoveArquivo(){
			
			rename($this->filename, $this->dirDest.$this->chave_nfe.'-nfe.xml');
			
		}
		
		private function RemoveArquivo(){
			unlink($this->filename);
		}
		
		
		
		
		
	}
	
?>