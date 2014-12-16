<?php


require_once('core.php');
require_once('SefazGen.class.php');

define('MAX_NUM_LASTS', 2);


class ManagerSefaz extends SefazGen implements SefazProcInterface {
	
	private $Lasts;
	
	
	
	//Executar a classe
	public function Run(){
		ob_implicit_flush(true); //Parametro para enviar a saida direto
		ob_start('ob_logstdout', 2);
		
		$this->Lasts = array();
		
		echo "PID: {$this->pid}\n";
		
		$this->CheckDataBaseTables(); //Checagem de tabelas necessárias para o funcionamento do programa
		$this->checkTableProcessContent(); //Checa o conteúdo da tabela de processos
		
		
		//$aName = $this->listDir($this->valDir,'*-nfe.xml',false);
		
		//Laço infinito
		while(1){
			
			
			$old_process = $this->DbConnection->lookup( $this->getQuery('GET_OLD_PROCESS') );
			
			echo "Processos antigos rodando: " . count($old_process) . "\n";
			
			
			foreach( $old_process as $old_proc ){
				list($id_processo, $pid) = $old_proc;
				
				if ( NfeSyslog_Service::isRunningPid( $pid, 'php' ) ){
					NfeSyslog_Service::KillPid( $pid );
				}
				
				echo "Eliminando processo {$id_processo}";
				$this->setProcessFree($id_processo);
			}
			
			
			$processos_livre = $this->GetFreeProcess(); //Traz os processos livres teste
			
			if ( count($processos_livre)>0 ){//Verifica se exite algum processo livre
				
				
				$arquivos = $this->listDir($this->valDir,'*-nfe.xml',false);
				
				$this->Lasts[] = $arquivos;
				
				/***** OLD ******
				if ( count($arquivos)>0 ){//Caso exista arquivo na pasta de validados
					
					foreach($arquivos as $arq){
					
						$chave = explode("-", $arq);
						
						if ( ! $this->isThereKey($chave[0]) ){
							echo "\nProcesso\n";
							
							if ( count($processos_livre)>0 ){
							
								$free_process = array_shift($processos_livre);
							
								$this->NewProcess( $arq, $free_process["id_processo"] ); //Cria um novo processo com o arquivo de indice 0
							
							}
						}else{
							continue;
						}
						
						
					}
					
				}else{//Caso não exista arquivos na pasta validados
					//TODO
					echo "\nNão existe arquivos a serem enviados...\n";
					//$this->NewProcess( "test.xml", $processos_livre["0"]["id_processo"] );
				}
				
				*********************/
				
				
				while( true ){
					if (empty($processos_livre)){
						$processos_livre = $this->GetFreeProcess(); //Traz os processos livres teste
					}
					
					if ( empty($arquivos)){
						break;
					}
					
						
					if (!empty($processos_livre)){
						$arq = array_shift($arquivos);
						$free_process = array_shift($processos_livre);
						
						
						$chave = explode("-", $arq); //Pega a chave do arquivo
						
						$wait_lib = 0;
						
						if ( isset( $this->Lasts[1] ) ){
							if ( in_array( $arq, $this->Lasts[0] ) ){//Se o arquivo estiver dentro da lista dos ultimos arquivos
								echo "Liberando {$chave[0]}\n";
								$this->DbConnection->exec( $this->getQuery('SET_INC_NF', $chave[0] ) );
								echo $this->getQuery('SET_INC_NF', $chave[0] );
								$wait_lib = 65;
							}
						}
						
						if ( ! $this->isThereKey( $chave[0]) ){
							$this->NewProcess( $arq, $free_process["id_processo"] ); //Cria um novo processo com o arquivo de indice 0
							sleep($wait_lib);

						}
						
												
						if ( isset($this->Lasts[1]) ){
							array_shift( $this->Lasts );
						}
						
						ob_end_flush();
						sleep(1);
					}
				}
				
			//Fim do if de verificação de processo livre
			}else{//Caso não exista processos livres
				
				echo "Não há processos livres...\n";
				
			}//Fim do else de verificação de processo livre
			
			$this->checkTableProcessContent();
			
			echo "Fim de um ciclo...";
			ob_end_flush();
			//break; //Forcing break to test
		}//Fim do Laço
		
	}//Fim do Run
	
	
	
	
	
	
	public function SendKill($id_process){
		$this->DbConnection->exec( $this->getQuery('SEND_KILL_PROCESS', $id_process, KILL_SIGNAL) );
	}
	
	
	public function NewProcess($filename, $id_process){
		
		$filename = urlencode($filename); //Transformando o string filename para formato url
		$id_process = urlencode($id_process); //Transformando o string id_process para formato url
		$HTTP_PROCESS_PARAMS = "?file={$filename}&id_process={$id_process}"; //Construindo os parametros a serem passado via GET
		$HTTP_PROCESS = "{$this->http_path}{$this->process_file}{$HTTP_PROCESS_PARAMS}";
		
		$ch_process = curl_init();
		
		curl_setopt($ch_process, CURLOPT_URL, $HTTP_PROCESS);
		curl_setopt($ch_process, CURLOPT_HEADER, 0);
		curl_setopt($ch_process, CURLOPT_FRESH_CONNECT, true);
		curl_setopt($ch_process, CURLOPT_TIMEOUT_MS, 1); //CURLOPT_TIMEOUT_MS - milisec / CURLOPT_TIMEOUT -sec 
		
		echo "chamando processo... {$HTTP_PROCESS}\n";
		
		curl_exec($ch_process);	
		
	}//Fim da função NewProcess
	
	
	
	
	
}//Fim da classe ManagerSefaz

?>
