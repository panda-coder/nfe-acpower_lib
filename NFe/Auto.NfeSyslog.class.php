<?php

require_once('core.php');

if (!defined('PATH_ROOT')) {
   define('PATH_ROOT', dirname($API_NFE) . DIRECTORY_SEPARATOR);
}



//carrega a classe principal da API 
require_once($API_NFE_DIR . DIRECTORY_SEPARATOR . 'ToolsNFePHP.class.php');
//carrega a classe de convers�es de txt para xml e vice-versa
require_once($API_NFE_DIR .DIRECTORY_SEPARATOR .  'ConvertNFePHP.class.php');
//carrega a classe de impressao da DANFE
require_once($API_NFE_DIR . DIRECTORY_SEPARATOR . 'DanfeNFePHP.class.php');
//carrega a classe de envio de emails
//require_once($API_NFE_DIR . DIRECTORY_SEPARATOR . 'MailNFePHP.class.php');





class AutoNFeSyslog extends ToolsNFePHP {


	private $DbConnection;
	private $PDFTOPS_PROGRAM;
	private $FOXIT_PROGRAM;
	
	private $data_inicio;
	private $data_fim;
	private $qtd_inclusao;
	private $qtd_assinado;
	private $qtd_validado;
	private $qtd_enviado;
   
    /**
     * __construct
     * M�todo construtor da classe
     * Este m�todo utiliza o arquivo de configura��o localizado no diretorio config
     * para montar os diret�rios e v�rias propriedades internas da classe, permitindo
     * automatizar melhor o processo de comunica��o com o SEFAZ.
     * 
     * Este metodo pode estabelecer as configura��es a partir do arquivo config.php ou 
     * atrav�s de um array passado na instancia��o da classe.
     * 
     * @version 1.00
     * @package NFePHP
     * @author Roberto L. Machado <linux.rlm at gmail dot com>
     * @param array $aConfig Opcional dados de configura��o
     * @param number $mododebug Opcional 1-SIM ou 0-N�O (0 default)
     * @return  boolean true sucesso false Erro
     */
    function __construct($aConfig='',$mododebug=0) {
       //passa os par�metros para a classe base 
       parent::__construct($aConfig,$mododebug);
	   
	   $this->setDataInicio();
	   
	   $this->qtd_inclusao=0;
	   $this->qtd_assinado=0;
	   $this->qtd_validado=0;
	   $this->qtd_enviado=0;
	   
    }
	
	function __destruct() {
       $this->setDataTermino();
	   list($data_inicio,$data_fim,$qtd_inclusao,$qtd_assinado,$qtd_validado,$qtd_enviado) = $this->getArrProcesso();
	   if ($qtd_inclusao||$qtd_assinado||$qtd_validado||$qtd_enviado) {
		$this->DbConnection->exec("INSERT INTO t_processo_log(data_inicio,data_fim,qtd_inclusao,qtd_assinado,qtd_validado,qtd_enviado) VALUES('".$data_inicio."','".$data_fim."',".$qtd_inclusao.",".$qtd_assinado.",".$qtd_validado.",".$qtd_enviado.")");
	   }
	}
	
	public function getArrProcesso() {
		return array($this->data_inicio,$this->data_fim,$this->qtd_inclusao,$this->qtd_assinado,$this->qtd_validado,$this->qtd_enviado);
	}
	
	public function setDataInicio() {
		$this->data_inicio = date("Y-m-d H:i:s");
	}
	
	public function setDataTermino() {
		$this->data_fim = date("Y-m-d H:i:s");
	}
	
	public function setQtdInclusao($var) {
		$this->qtd_inclusao = $var;
	}
	
	public function setQtdAssinado($var) {
		$this->qtd_assinado = $var;
	}
	
	public function setQtdValidado($var) {
		$this->qtd_validado = $var;
	}
	
	public function setQtdEnviado($var) {
		$this->qtd_enviado = $var;
	}
	
	public function setDBConn($db){
		$this->DbConnection = $db;
	}
	
	public function setPDFTOPS_PROGRAM($var){
		$this->PDFTOPS_PROGRAM = $var;
	}
	
	public function setFOXIT_PROGRAM($var){
		$this->FOXIT_PROGRAM = $var;
	}
	
	private function PrintFile($path, $file, $program, $debug = "0"){
	
	
		echo "Iniciando impress�o... $file <br/>";
	
		switch($program){
			case "1": //PostScript Convertion
				$WshShell = new COM("WScript.Shell");
				$command = '"C:\Arquivos de programas\gs\gs9.07\lib\pdf2ps" "' . "$path$file\" \"c:\\temp\\$file.ps\"";
				$oExec = $WshShell->Run($command, 0,false);
				break;
			case "2": //Foxit Printing
				$WshShell = new COM("WScript.Shell");
				$command =  "\"$FOXIT_PROGRAM\" /p"  . "  \"$path$file\" \"$this->danfeprinter\"";
				$oExec = $WshShell->Run($command, 0,false);
				
				break;
			case "2": //Foxit Printing 
				$WshShell = new COM("WScript.Shell");
				$command =  "\"$FOXIT_PROGRAM\" /t"  . "  \"$path$file\" \"$this->danfeprinter\"";
				$oExec = $WshShell->Run($command, 0,false);
				break;
			case "4": //JavaPrinting
				$WshShell = new COM("WScript.Shell");
				$command =  "C:\Arquivos de programas\Java\jre7\bin\java\" -classpath " . PATH_ROOT . "acpower_lib\pdfbox-app-1.8.2.jar\" org.apache.pdfbox.PrintPDF -silentPrint -printerName \"$this->danfeprinter\" $path$file\"";
				$oExec = $WshShell->Run($command, 0,false);
				
				break;
			case "5": //PostScript Convertion by: pdftops
				$WshShell = new COM("WScript.Shell");  
				$command = $this->PDFTOPS_PROGRAM . "\"$path$file\" \"c:\\temp\\$file.ps\"";
				$oExec = $WshShell->Run($command, 0,false);
				break;
			case "6": //Acrobat
				$WshShell = new COM("WScript.Shell");
				$command = '"C:\Arquivos de programas\Adobe\Reader 10.0\Reader\AcroRd32.exe" /t "' . "$path$file\" \"$this->danfeprinter\"";
				$oExec = $WshShell->Run($command, 0,false);
				break;
			case "7": //lpr
				$command = "lpr -P \"$this->danfeprinter\" $this->pdfDir$pdfName";
				system("");
				break;
			case "T":
				$this->PrintFile($path, $file, 1);
				$this->PrintFile($path, $file, 2);
				$this->PrintFile($path, $file, 3);
				break;
				//C:\Arquivos de programas\Adobe\Reader 10.0\Reader
		}
		
		if ( $debug != "0" ){
			echo $command;
		}
		
		
		
	}
	
	
	/*
	public function genProtocolo($retProt){
	
		if ( $retProt['bStat'] == TRUE ){
		
			if ( $retProt['cStat'] == 106 ){
				$this->errStatus = true;
				$this->errMsg .= "Lote n�o localizado !!\n";
				
				return FALSE; //**************************************************************************** << return here
			}
			
			if ( $retProt['cStat'] > 106 ){
				$this->errStatus = true;
				$this->errMsg .= "Erro na consulta do lote !!\n" . $retProt['cStat'];
				
				return FALSE; //**************************************************************************** << return here
			}
			
			
			if ( $retProt['cStat'] == 104 ){
				$protocolo = 
			}
			
			
			
			
			
	

		}else{
			return FALSE; //**************************************************************************** << return here
		}
	}
	
	
	
	
	
	public function genRetorno($ret, $chave, $maxTentativa, $minSec){
	
		$n = 0;
		
		if ( $ret['bStat'] == true && $ret['cStat'] ==103 ){
		
			$numeroRecibo = $ret['nRec'];
			
			while(1){
				
				sleep($minSec);
				
				if ( $retProt = $this->getProtocol( $numeroRecibo, '', $this->tpAmb, $this->modSOAP ){
					
				}
				
				
				
				
				
				if ( $n++; >= $maxTentativa ){
					break;
				}
			}
		}
	
	}
	
	
	
	public function autoSefazEnvio($maxTentativa=10, $minSec=4){
	
		$retorno = array();
		
		
		$aquivosProcessar = $this->listDir($this->valDir, '*-nfe.xml', false);
		
		if ( count($aquivosProcessar) == 0 ){
			$this->errStatus = true;
			$this->errMsg = "N�o h� NFe validadas e prontas para envio!!\n";
			
			return false;  //**************************************************************************** << return here
		}
		
		foreach($aquivosProcessar as $idx => $arquivoNFE){
			
			//aNFe
			
			$nomeArquivo = $this->valDir . $arquivoNFE;
			$conteudoArquivo = file_get_contents($nomeArquivo);
			
			$syslogXML = new NfeSyslog_xml($this->DbConnection, $conteudoArquivo);
			
			
			$chaveNFE = $syslogXML->getChave();
			
			
			//Obter o n�mero de lote j� incrementando mais um numero de lote
			$numeroLote = $this->__getNumLot()+1;
			
			
			$ret = $this->sendLot( array($conteudoArquivo), $numeroLote, $this->modSOAP );
			
			
			$syslogXML->saveEnvio();
			
			if ( !( $protRecebido = $this->genRetorno($ret)) ){
				//Pula para proxima nota
				continue;
			}
			
			
			
			
			
			
			
		
		}
		
	
	}*/
	
    
    /**
     * autoTXTtoXML
     * M�todo para converter todas as nf em formato txt para o formato xml
     * localizadas na pasta "entradas". Os arquivos txt apos terem sido
     * convertidos com sucesso s�o removidos da pasta.
     * Os arquivos txt devem ser nomeados como "<qualquer coisa>-nfe.txt"
     * @version 2.02
     * @package NFePHP
     * @author Roberto L. Machado <linux.rlm at gmail dot com>
     * @param none
     * @return boolean true sucesso false Erro
     */
    public function autoTXTtoXML(){
        //varre pasta "entradas" a procura de NFes em txt
        $aName = $this->listDir($this->entDir,'*-nfe.txt',false);
		
        // se foi retornado algum arquivo
        $totTXT = count($aName);
		
		$this->setQtdInclusao($totTXT);
        if ( $totTXT > 0){
            for ( $x=0; $x < $totTXT; $x++ ) {
				
                //carrega nfe em txt para converter em xml
                $filename = $this->entDir.$aName[$x];
                $newname = $this->temDir.$aName[$x];
				
                //instancia a classe de convers�o
                $oXML = new ConvertNFePHP();
				
                //convere o arquivo
                $xml = $oXML->nfetxt2xml($filename);
                //salvar o xml
                $xmlname = $this->entDir.$oXML->chave.'-nfe.xml';
                if ( !file_put_contents($xmlname, $xml) ){
                    $this->errStatus = true;
                    $this->errMsg .= "FALHA na grava��o da NFe em xml.\n";
                    return false;
                } else {
                    //mover o txt para pasta temp
                    rename($filename,$newname);
                } //fim do teste de grava��o
            } // fim do for
        } //fim do teste de contagem
        return true;
    } //fim autoTXTtoXML
	
	
	
    
    /**
     * autoEnvNFe
     * Este m�todo procura por NFe's na pasta VALIDADAS, se houver alguma envia para a SEFAZ
     * e em saso de sucesso no envio move o arquivo para a pasta das enviadas
     * ATEN��O : Existe um limite para o tamanho do arquivo a ser enviado ao SEFAZ
     *
     * @version 2.04
     * @package NFePHP
     * @author Roberto L. Machado <linux.rlm at gmail dot com>
     * @param none
     * @return mixed false erro ou string $recibo
     */
    public function autoEnvNFe(){
        //estabelece condi��o inicial do retorno
        $recibo = '';
        //varre a pasta de validadas
        $aName = $this->listDir($this->valDir,'*-nfe.xml',false);
        //se houver algum arquivo *-nfe.xml continua, caso contrario sai
        $n = count($aName);
        if ( $n > 0 ) {
            //determina o numero de grupos de envio com 10 notas por grupo
            $k = ceil($n/10);
            // as notas localizadas na pasta validadas ser�o enviadas em
            // grupos de at� 10 notas de cada vez, sim este � um valor arbritrario eu quis at� 10
            for ($i = 0 ; $i < $k ; $i++) {
                //limpa a matriz com as notas fiscais
                $aNFe= null;
                for ( $x = $i*10 ; $x < (($i+1)*10) ;$x++ ){
                    if ($x < $n ){
                        $filename = $this->valDir.$aName[$x];
                        $nfefile = file_get_contents($filename);
						
						$syslogXML[] = new NfeSyslog_xml($this->DbConnection , $nfefile);
						
						
                        $aNFe[] = $nfefile;
                    }
                }
                //obter o numero do ultimo lote enviado
                $num = $this->__getNumLot();
                //incrementa o numero
                $num++;
                //enviar as notas
                if ($ret = $this->autoriza($aNFe,$num,$this->modSOAP)){
                    //incrementa o numero do lote no controle
                    if (!$this->__putNumLot($num)){ //_putNumLot($num)
                        $this->errStatus = true;
                        $this->errMsg .= "Falha na Grava��o do numero do lote de envio!!\n";
                        return false;
                    }
                    //['bStat'=>false,'cStat'=>'','xMotivo'=>'','dhRecbto'=>'','nRec'=>'']                    
                    //verificar o status do envio
                    if ($ret['bStat']){
                        //pegar o numero do recibo da SEFAZ
                        $recibo = $ret['nRec'];
                        //mover as notas do lote para o diretorio de enviadas
                        //para cada em $aNames[] mover para $this->envDir
                        for ( $x = $i*10 ; $x < (($i+1)*10) ;$x++ ){
                            if ($x < $n ){
                               if( !rename($this->valDir.$aName[$x],$this->envDir.$aName[$x]) ){
                                    $this->errStatus = true;
                                    $this->errMsg .= "Falha na movimenta��o da NFe das validadas para enviadas !!\n";
                                    return false;
                                }
                            }
                        } //fim for rename
                    } else {
                        $this->errStatus = true;
                        return false;
                    }
                 } else {
                    $this->errStatus = true;
                    $this->errMsg .= "Erro no envio do lote de NFe!!\n";
                    return false;
                 }
            }
        } else {
            //n�o h� notas para enviar
            $this->errStatus = true;
            $this->errMsg = "N�o existem notas prontas para envio na pasta das validadas!!\n";
            return false;
        }
		
		if ( !empty($recibo) ){
			foreach($syslogXML as $sLxml){
				$sLxml->saveEnvio();
				$sLxml->saveRecibo($recibo);
			}
		}
		
		
        return $recibo;
    } // fim autoEnvNFe
    
    /**
     * autoEnvNFeImproved
     * Este m�todo localiza as NFe validadas e efetua a montagem dos lotes de envio
     * envia esses lotes para a SEFAZ, move essas NFe para a pasta de enviadas, 
     * aguarda alguns segundos para permitir o processamento na SEFAZ e em seguida
     * requisita a situa��o das NFe pelo numero do recibo. Em caso de sucesso anexa o 
     * protocolo e coloca a NF na pasta de aprovadas, reprovadas ou denegadas, conforme o 
     * status de cada uma.
     *      
     * @version 1.03
     * @package NFePHP
     * @author Roberto L. Machado <linux.rlm at gmail dot com>
     * @param integer $maxLoop Numero maximo de tentativas para buscar o staus da NFe
     * @param integer $minSec Tempo de pausa entre cada consulta em segundos
     * @return mixed false se ocorrer erro ou array('chave','cStat','xMotivo')
     */
    public function autoEnvNFeImproved($maxLoop=3,$minSec=3, $skip=TRUE, $sleepRet){
        $aResp = array();
        //busca as NFe e monta o lote
        //varre a pasta de validadas
        $aName = $this->listDir($this->valDir,'*-nfe.xml',false);
        //se houver algum arquivo *-nfe.xml continua, caso contrario sai
        $n = count($aName);
		$this->setQtdEnviado($n);
        if ( $n == 0 ) {
            $this->errStatus = true;
            $this->errMsg .= "N�o h� NFe validadas e prontas para envio!!\n";
            return false;
        }
        //existem notas para enviar
        //iniciar o loop de envio para cada NFe encontrada
        for ( $x=0 ; $x<$n ; $x++ ){
            $aNFe = null;
            $filename = $this->valDir.$aName[$x];
            $chaveNFe = substr($filename, strripos($filename, DIRECTORY_SEPARATOR) + 1, 44);
            $nfefile = file_get_contents($filename);
			
				
            //$aNFe[] = $nfefile;
            //obter o numero do ultimo lote enviado
            $num = $this->pGetNumLot();
            //incrementa o numero
            $num++;
            //alternativamente pode ser usado o script abaixo para gera��o do numero de lote
            //$num = substr(str_replace(',','',number_format(microtime(true)*1000000,0)),0,15);
            //enviar as notas
			$ret = array();
            if ( $this->autoriza($nfefile,$num,$ret)){
			
				unset($syslogXML);
				$syslogXML = new NfeSyslog_xml($this->DbConnection , $nfefile);
			
				$syslogXML->saveEnvio();
				$syslogXML->newXML($nfefile); // ADICIONEI ESTA LINHA #############################
				
				
                //verificar o status do envio
                if ($ret['bStat'] == true && $ret['cStat'] == 103){
                    //pegar o numero do recibo da SEFAZ
                    $recibo = $ret['nRec'];
					
                    //incrementa o numero do lote no controle
                    //comentar caso n�o use o controle de lote por arquivo
					//echo "here";
                    if (!$this->__putNumLot($num)){
                        $this->errStatus = true;
                        $this->errMsg .= "Falha na Grava��o do numero do lote de envio!!\n";
                        return false;
                    }
                    //como temos o recibo iniciar o loop
                    $loop = 0;
					
                    while ($loop < $maxLoop){
						echo "$chaveNFe esperando\n";
					
					
                        //incrementar contagem
                        $loop++;
                        //atrasar a consulta para permitir processamento da SEFAZ
                        sleep($minSec);
                        //consultar o ststus da NFe
						
                        if($retProt = $this->getProtocol($recibo,'', $this->tpAmb, $this->modSOAP)){
							
							echo "$chaveNFe protocolo veio...\n";
													
                            if ($retProt['bStat'] == true){
                                if ($retProt['cStat'] == 106){
                                    $this->errStatus = true;
                                    $this->errMsg .= "Lote n�o localizado !!\n";
									// ################
									if ($loop==($maxLoop-1)) {  
										//$syslogXML->saveReprovada($retProt['xMotivo']);
										//rename($filename, $this->envDir.$chaveNFe.'-nfe.xml');
										return false; 
									} else { 
									
										if ( $skip ){
											continue;
										}
									}
									//return false;
                                }
                                if ($retProt['cStat'] > 106){
                                    $this->errStatus = true;
                                    $this->errMsg .= "Erro na consulta do lote !!\n" . $retProt['cStat'];
                                    // ################
									if ($loop==($maxLoop-1)) {  
										//$syslogXML->saveReprovada($retProt['xMotivo']);
										//rename($filename, $this->envDir.$chaveNFe.'-nfe.xml');
										return false; 
									} else { 
									
										if ( $skip ){
											continue;
										}
										
									}
									//return false;
                                }
                                if ($retProt['cStat'] == 104){
									$aprovada = FALSE;
									
                                    //o protocolo foi retornado
                                    $aProt = $retProt['aProt'][0];
                                    $protFile = $this->temDir.$chaveNFe.'-prot.xml';
                                    $loop = $maxLoop+1; //sair do la�o
                                    $aResp[$x] = array();
                                    $aResp[$x]['chave'] = $chaveNFe;
                                    $aResp[$x]['cStat'] = $aProt['cStat'];
                                    $aResp[$x]['xMotivo'] = $aProt['xMotivo'];
                                    //pegar o cStat
                                    if ($aProt['cStat'] == 100){
                                        //aprovado
                                        $dirDest = $this->aprDir;
										
										$aprovada = TRUE;
										$syslogXML->saveAprovada();
										
                                    }
                                    if ($aProt['cStat'] == 110){
                                        //denegado
                                        $dirDest = $this->denDir;
										
										$syslogXML->saveDenegada();
                                    }
                                    if ($aProt['cStat'] > 110){
										echo "NOTA REPROVADA!!";
                                        //reprovado
                                        $dirDest = $this->repDir;
                                        //mover a nota para reprovadas
                                        rename($filename, $dirDest.$chaveNFe.'-nfe.xml');
										
										$syslogXML->saveReprovada($aProt['xMotivo']);
                                    } else {
										if (!$aprovada){
											echo "PROBLEMA DETECTADO!!";
										}
									
                                        //n�o reprovado
                                        if (file_exists($protFile)){
                                            $procnfe = $this->addProt($filename,$protFile);
											$syslogXML->newXML($procnfe);
											
                                            //salvar a NFe com o protocolo na pasta destino
                                            if ( file_put_contents($dirDest.$chaveNFe.'-nfe.xml', $procnfe) ) {
                                                //remover o arquivo antigo sem o protocolo
                                                unlink($filename);
                                            }
                                        }
                                    }    
                                }
                            } else {
                                $this->errStatus = true;
                                $this->errMsg .= "Falha na consulta do protocolo!!\n";
                                // ################
								if ($loop==($maxLoop-1)) {  
									//$syslogXML->saveReprovada("ERRO DE PROTOCOLO");
									//rename($filename, $this->envDir.$chaveNFe.'-nfe.xml');
									return false; 
									
								} else { 
								
									if ( $skip ){
											continue;
										} 
										
								}
								
                            }//fim bStat
                        } else {
                            $this->errStatus = true;
                            $this->errMsg .= "Falha na consulta do protocolo!!\n";
                            // ################
							if ($loop==($maxLoop-1)) {  
								//$syslogXML->saveReprovada("N�O OBTEVE PROTOCOLO");
								//rename($filename, $this->envDir.$chaveNFe.'-nfe.xml');
								return false; 
							} else { 
							
								if ( $skip ){
									continue;
								}
							
							}
                        }//fim consulta protocolo
                    }//fim do loop de consulta do status da nfe
                } else {
                    $this->errStatus = true;
                    $this->errMsg .= "Erro no envio do lote de NFe!!\n";
                    return false;
                }//fim if verifica retorno envio lote
            } else {
                $this->errStatus = true;
                $this->errMsg .= "Erro no envio do lote de NFe!!\n";
				print_r($ret["infProt"]);
                return false;
            }//fim envio lote
        } //fim for das NFe
        return $aResp;
    } //fim autoEnvNFeImproved    

    /**
     * autoProtNFe
     * Este m�todo localiza as NFe enviadas na pasta ENVIADAS e solicita o prococolo
     * de autoriza��o destas NFe's
     *
     * Caso haja resposta (aprovando, denegando ou rejeitando) o m�todo usa os dados de
     * retorno para localizar a NFe em xml na pasta de ENVIADAS e inclui no XML a tag nfeProc com os dados
     * do protocolo de autoriza��o.
     *  - Em caso de aprova��o as coloca na subpasta APROVADAS e remove tanto o xml da NFe
     *    da pasta ENVIADAS como o retorno da consulta em TEMPORARIAS.
     *  - Em caso de rejei��o coloca as coloca na subpasta REJEITADAS e remove da pasta ENVIADAS e TEMPORARIAS.
     *  - Em caso de denega��o coloca as coloca na subpasta DENEGADAS e remove da pasta ENVIADAS e TEMPORARIAS.
     *
     * Caso n�o haja resposta ainda n�o faz nada.
     *
     * @version 2.04
     * @package NFePHP
     * @author Roberto L. Machado <linux.rlm at gmail dot com>
     * @param  none
     * @return array   [n]['cStat']['xMotivo']['nfepath']
     */
    public function autoProtNFe(){
		echo "autoProtNFE()";
	
        //condi��o inicial da vari�vel de retorno
        $aRetorno = array(0=>array('cStat'=>'','xMotivo'=>'','nfepath'=>''));
        $n = 0;
        //varre a pasta de enviadas
        $aName = $this->listDir($this->envDir,'*-nfe.xml',false);
        //se houver algum arquivo *-nfe.xml continua, caso contrario sai
        if ( count($aName) > 0 ) {
            //para cada arquivo nesta pasta solicitar o protocolo
            foreach ( $aName as $file ) {
                $idNFe = substr($file,0,44);
                $nfeFile = $this->envDir.$file;
				
				$syslogXML = new NfeSyslog_xml($this->DbConnection , file_get_contents($nfeFile) );
								
                //primeiro verificar se o protocolo existe na pasta temporarias
                $protFile = $this->temDir.$idNFe.'-prot.xml';
                if (file_exists($protFile)){
                    $docxml = file_get_contents($protFile);
                    $dom = new DOMDocument(); //cria objeto DOM
                    $dom->formatOutput = false;
                    $dom->preserveWhiteSpace = false;
                    $dom->loadXML($docxml);
                    //pagar o cStat e xMotivo do protocolo
                    $aRet['cStat'] = $dom->getElementsByTagName('cStat')->item(0)->nodeValue;
                    $aRet['xMotivo'] = $dom->getElementsByTagName('xMotivo')->item(0)->nodeValue;
                    $aRet['bStat'] = true;
                } else {
                    //caso n�o exista ent�o buscar pela chave da NFe
                    $aRet = $this->getProtocol('',$idNFe,$this->tpAmb,$this->modSOAP);
                }    
                if ( $aRet['cStat'] == 100) {
                    //NFe aprovada
                    $pasta = $this->aprDir;
					
					$syslogXML->saveAprovada();
					
                }//endif
                if ( $aRet['cStat'] == 110) {
                    //NFe denegada
                    $pasta = $this->denDir;
					
					$syslogXML->saveDenegada();
					
                }//endif
                if ( $aRet['cStat'] > 199 ) {
                    //NFe reprovada
					
					$syslogXML->saveReprovada($aRet['xMotivo']);
					
                    $pasta = $this->repDir;
                    //mover a NFe para a pasta repovadas
                    rename($nfeFile, $pasta.$idNFe.'-nfe.xml');
                    
                }//endif
                if ( $aRet['bStat'] ) {
                    //montar a NFe com o protocolo
                    if ( is_file($protFile) && is_file($nfeFile) ) {
                        //se aprovada ou denegada adicionar o protocolo e mover o arquivo
                        if ($aRet['cStat'] == 100 || $aRet['cStat'] == 110 ) {
                            $procnfe = $this->addProt($nfeFile,$protFile);
                            //salvar a NFe com o protocolo na pasta
                            if ( file_put_contents($pasta.$idNFe.'-nfe.xml', $procnfe) ) {
                                //se o arquivo foi gravado na pasta destino com sucesso
                                //remover os arquivos das outras pastas
                                unlink($nfeFile);
                            } //endif
                        }//endif cStat   
                    } //endif is_file
                } //endif bStat
                $aRetorno[$n]['cStat'] = $aRet['cStat'];
                $aRetorno[$n]['xMotivo'] = $aRet['xMotivo'];
                $aRetorno[$n]['nfepath'] = $pasta.$idNFe.'-nfe.xml';
                $n++;
            }//endforeach
        } else {
            //n�o h� notas para protocolar na pasta de enviadas
            $this->errStatus = true;
            $this->errMsg = "N�o existem notas prontas para protocolar na pasta enviadas!!\n";
        }//endif
        return $aRetorno;
    }//fim autoProtNFe

    /**
     * autoPrintSend
     * Este m�todo deve imprmir automaticamente as DANFEs de todas as
     * NFe localizadas na pasta aprovadas, enviar o email ao destinat�rio
     * com a DANFE em pdf e o arquivo xml e ainda mover a NFe em xml
     * para o diretorio de armazenamento com o ANOMES da nota para facilita��o
     * da adminstra��o e backup
     *
     * @version   2.07
     * @package NFePHP
     * @author Roberto L. Machado <linux.rlm at gmail dot com>
     * @param  boolean $fixpdf Indica de deve ser gravado ou n�o o pdf da NFe
     * @return boolean True se OK ou False se falha
    */
    public function autoPrintSend($fixpdf=false, $structure_pdf=true){
		//$structure_pdf s� � valido com o $fixpdf true
	
	
        //varre a pasta de enviadas/aprovadas
        $aNApr = $this->listDir($this->aprDir,'*-nfe.xml',false);
        //se houver algum arquivo *-nfe.xml continua, caso contrario sai
        if ( count($aNApr) > 0 ) {
            //para cada arquivo nesta pasta imprimir a DANFE em pdf
            // e enviar para a printer
            // S� FUNCIONA AT� 2099 !!!!!
            foreach ( $aNApr as $file ) {
                $anomes = date("Ym");
				$dias = date("d");
                $docxml = file_get_contents($this->aprDir.$file);
				
				if ( empty($docxml) ){
					continue;
				}
				
				$syslogXML = new NfeSyslog_xml($this->DbConnection , $docxml );
				$syslogXML->savePrinting();
				$syslogXML->newXML($docxml);
				$syslogXML->WriteProtocol();
				
                $danfe = new DanfeNFePHP($docxml,$this->danfepaper,$this->danfeform,$this->danfelogopath,'I','',$this->danfefont);
                $id = (string) $danfe->montaDANFE();
                $pdfName = $id.'.pdf';
  				//carrega a DANFE como uma string para grava��o no diretorio escolhido
                $pdfFile = (string) $danfe->printDANFE($this->pdfDir.$pdfName,'S');
                if ($pdfFile != ''){
                    //grava a DANFE como pdf no diretorio
                    if (!file_put_contents($this->pdfDir.$pdfName,$pdfFile)){
                        //houve falha na grava��o
                        $this->errMsg = "Falha na grava��o do pdf.\n";
                        $this->errStatus = true;
                    } else {
                        //em caso de sucesso, verificar se foi definida a printer se sim imprimir
                        //este comando de impress�o funciona tanto em linux como em wndows se o 
                        //ambiente estiver corretaente preparado
			if ( $this->danfeprinter != '' ) {
                            //$command = "lpr -S 192.168.16.154 -P $this->danfeprinter $this->pdfDir$pdfName";
							$natop = $syslogXML->getNaturezaOperacao();

							$arr_natop = array('DEVOLUCAO DE VENDA','VENDA EXTERNA','RETORNO DE VENDA EXTERNA');
							if(!in_array(strtoupper($natop),$arr_natop)) {
								$this->PrintFile($this->pdfDir, $pdfName, "5", 1);
							}
                        }
                    }
		} else {
                    //houve falha na gera��o da DANFE
                    $this->errMsg = "Falha na gera��o da DANFE.\n";
                    $this->errStatus = true;
		}
                //arquivo da NFe com o protocolo
                $dom = new DOMDocument(); //cria objeto DOM
                $dom->formatOutput = false;
                $dom->preserveWhiteSpace = false;
                $dom->loadXML($docxml);
                $ide        = $dom->getElementsByTagName("ide")->item(0);
                $emit       = $dom->getElementsByTagName("emit")->item(0);
                $dest       = $dom->getElementsByTagName("dest")->item(0);
                $ICMSTot    = $dom->getElementsByTagName("ICMSTot")->item(0);
                $obsCont    = $dom->getElementsByTagName("obsCont")->item(0);
                $infNFe     = $dom->getElementsByTagName('infNFe')->item(0);
                //obtem a vers�o do layout da NFe
                $ver = trim($infNFe->getAttribute("versao"));
                $razao = utf8_decode($dest->getElementsByTagName("xNome")->item(0)->nodeValue);
                $numero = str_pad($ide->getElementsByTagName('nNF')->item(0)->nodeValue, 9, "0", STR_PAD_LEFT);
                $serie = str_pad($ide->getElementsByTagName('serie')->item(0)->nodeValue, 3, "0", STR_PAD_LEFT);
                $emitente = utf8_decode($emit->getElementsByTagName("xNome")->item(0)->nodeValue);
                $vtotal = number_format($ICMSTot->getElementsByTagName("vNF")->item(0)->nodeValue, 2, ",", ".");
                $email = '';
                $contato = '';
                //NFe ver 1.10 - obter o email de envio
                //na proxima revis�o n�o ser� mais inclusa a verifica��o da
                //vers�o 1.10 que passar� a ser resconsiderada
                if($ver =='1.10'){
                    if (isset($obsCont)){
                        foreach ($obsCont as $obs){
                            $campo =  $obsCont->item($i)->getAttribute("xCampo");
                            $xTexto = !empty($obsCont->item($i)->getElementsByTagName("xTexto")->item(0)->nodeValue) ? $obsCont->item($i)->getElementsByTagName("xTexto")->item(0)->nodeValue : '';
                            if (substr($campo, 0, 5) == 'email' && $xTexto != '') {
                                $email .= $xTexto.',';
                            }
                            $i++;
                        }
                    }
                } else {
                    //NFe ver 2.00
                    $email = !empty($dest->getElementsByTagName("email")->item(0)->nodeValue) ? utf8_decode($dest->getElementsByTagName("email")->item(0)->nodeValue) : '';
                    if (isset($obsCont)){
                        foreach ($obsCont as $obs){
                            $campo =  $obsCont->item($i)->getAttribute("xCampo");
                            $xTexto = !empty($obsCont->item($i)->getElementsByTagName("xTexto")->item(0)->nodeValue) ? $obsCont->item($i)->getElementsByTagName("xTexto")->item(0)->nodeValue : '';
                            if (substr($campo, 0, 5) == 'email' && $xTexto != '') {
                                $email .= $xTexto.',';
                            }
                            $i++;
                        }
                    }
               } //endif
               //if ($email != '' ) {
                    //montar a matriz de dados para envio do email
                    $aEMail = array('emitente'=>$emitente,'para'=>$email,'contato'=>'','razao'=>$razao,'numero'=>$numero,'serie'=>$serie,'vtotal'=>$vtotal);
                    //inicalizar a classe de envio
                    //$nfeMail = new MailNFePHP($this->aMail);
                    //if ( !$nfeMail->sendNFe($docxml,$pdfFile,$file,$pdfName,$aEMail) ){
                    //    $this->errMsg = "Falha no envio do email ao destinat�rio!!\n";
                    //    $this->errStatus = true;
                    //}
                //}
                //mover o arquivo xml para a pasta de arquivamento identificada com o ANOMES
                $diretorio_base = $this->aprDir.$anomes.DIRECTORY_SEPARATOR;
                if ( !is_dir($diretorio_base) ) {
                      mkdir($diretorio_base, 0777);
                }
				$diretorio_dia = $diretorio_base . DIRECTORY_SEPARATOR . $dias . DIRECTORY_SEPARATOR;
                if ( !is_dir($diretorio_dia) ) {
                      mkdir($diretorio_dia, 0777);
                }
                rename($this->aprDir.$file,$diretorio_dia.$file);
                //apagar o pdf criado para envio
                if (!$fixpdf){
				
                    if (is_file($this->pdfDir.$pdfName)){
                        unlink($this->pdfDir.$pdfName);
                    }
					
                }else{
				
					if ($structure_pdf){
						$diretorio_backup = $this->pdfDir.$anomes.DIRECTORY_SEPARATOR;
					
						if ( !is_dir($this->pdfDir.$anomes.DIRECTORY_SEPARATOR) ){
							mkdir($this->pdfDir.$anomes.DIRECTORY_SEPARATOR, 0777);
						}
						
						rename($this->pdfDir.$pdfName, $diretorio_backup.$pdfName);
					}
					
				}
            } //end foreach
        } //endif
        return true;
    } //fim da fun��o autoPrintDANFE

    /**
     * autoSignNFe
     * M�todo para assinatura em lote das NFe em XML
     * Este m�todo verifica todas as NFe existentes na pasta de ENTRADAS e as assina
     * ap�s a assinatura ser feita com sucesso o arquivo XML assinado � movido para a pasta
     * ASSINADAS.
     * IMPORTANTE : Em ambiente Linux manter os nomes dos arquivos e termina��es em LowerCase.
     *
     * @version 2.11
     * @package NFePHP
     * @author Roberto L. Machado <linux.rlm at gmail dot com>
     * @param  none
     * @return boolean true sucesso false Erro
     */
    public function autoSignNFe() {
		echo "Iniciando Assinaturas...<br/>";
	
        //varre pasta "entradas" a procura de NFes
        $aName = $this->listDir($this->entDir,'*-nfe.xml',false);
        // se foi retornado algum arquivo
        $totXML = count($aName);
		$this->setQtdAssinado($totXML);
        if ( $totXML > 0){
            for ( $x=0; $x < $totXML; $x++ ) {
                //carrega nfe para assinar em uma strig
                $filename = $this->entDir.$aName[$x];
                //mantenha desse jeito mesmo com um unico =
                //a atribui��o da variavel e o teste s�o simult�neos
                if ( $nfefile = file_get_contents($filename) ) {
                    //assinador usando somente o PHP da classe classNFe
                    //mantenha desse jeito mesmo com um unico =
                    //a atribui��o da variavel e o teste s�o simult�neos
					
					
									
					
                    if ( $signn = $this->signXML($nfefile, 'infNFe') ) {
                        //xml retornado gravar
                        $file = $this->assDir . $aName[$x];
                        if ( !file_put_contents($file, $signn) ) {
                            $this->errStatus = true;
                            return false;
                        } else {
						
							$syslogXML = new NfeSyslog_xml($this->DbConnection , $signn);
							
							if ( $syslogXML->getSit() == 'A' ){
								unlink($file);
							}else{				
								$syslogXML->SaveNFE();
							}
							
							echo "Nota Assinada: " . $filename;
						
                            unlink($filename);
                        } //fim do teste de grava��o
                    } //fim do teste da assinatura
                } //fim do teste de leitura
            } //fim do for
        } //fim do teste de contagem
        return true;
    } //fim autoSignNFe
	
	

    /**
     * autoValidNFe
     * M�todo validador em lote das NFe em XML j� assinadas.
     * As NFe s�o validadas somente ap�s que a TAG assinatura seja postada no XML, caso contrario
     * gerar� um erro.
     *
     * As NFes, em principio podem ser assinadas sem grande perda de performance do sistema,
     * desde que o numero de NFe geradas seja relativamente pequeno.
     * Caso o numero seja muito grande (acima de 50 NFe de cada por minuto) talvez seja
     * interessante fazer altera��es no sistema para incluir a TAG de assinatura em branco
     * e validar antes de assinar.
     *
     * Este m�todo verifica todas as NFe que existem na pasta de ASSINADAS e processa a valida��o
     * com o shema XSD. Caso a NFe seja valida ser� movida para a pasta VALIDADAS, caso contrario
     * ser� movida para a pasta REPROVADAS.
     *
     * @version 2.0.3
     * @package NFePHP
     * @author Roberto L. Machado <linux.rlm at gmail dot com>
     * @param  none
     * @return boolean true sucesso false Erro
     */
    public function autoValidNFe() {
        //varre pasta "assinadas"
        $aName = $this->listDir($this->assDir,'*-nfe.xml',false);
        // se foi retornado algum arquivo
        $totXML = count($aName);
		$this->setQtdValidado($totXML);
        if ( $totXML > 0 ){
			
            for ( $x=0; $x < $totXML; $x++ ) {
				
                //carrega nfe para validar em uma string
                $filename = $this->assDir.$aName[$x];
				
                if ( $nfefile = file_get_contents($filename) ) {
					
                    //validar
                    //como os arquivos xsd s�o atualizados e tem sua ver��o alterada
                    //devemos burcar este arquivo da vers�o correta
                    //para isso temos que obter o numero da vers�o na pr�pria nfe
                    $xmldoc = new DOMDocument();
                    $xmldoc->preservWhiteSpace = false; //elimina espa�os em branco
                    $xmldoc->formatOutput = false;
                    $xmldoc->loadXML($nfefile,LIBXML_NOBLANKS | LIBXML_NOEMPTYTAG);
					
					
					$syslogXML = new NfeSyslog_xml($this->DbConnection , $nfefile);
					
					
					
                    $root = $xmldoc->documentElement;
                    //extrair a tag com o numero da vers�o da NFe
                    $node = $xmldoc->getElementsByTagName('infNFe')->item(0);
                    //obtem a vers�o do layout da NFe
                    $ver = trim($node->getAttribute("versao"));
                    //buscar o nome do scheme
                    $filexsd = $this->listDir($this->xsdDir . $this->schemeVer. DIRECTORY_SEPARATOR,'nfe_v*.xsd',true);
                    if (!$filexsd[0]) {
                        $this->errMsg = "Erro na localiza��o do shema xsd.\n";
                        $this->errStatus = true;
                        return false;
                    }
                    $aErr = array();
                    $bRet = $this->validXML($nfefile,$filexsd[0],$aErr);
                    if ( $bRet ) {
                        // validado => transferir para pasta validados
                        $file = $this->valDir . $aName[$x];
                        if ( !file_put_contents($file, $nfefile) ) {
                            $this->errStatus = false;
                        } else {
						
							$syslogXML->saveValidade();
						
                            unlink($filename);
                        }
                    } else {
                        $sErr = '';
                        foreach ($aErr as $e){
                            $sErr .= $e . "\n";
                        }
                        //NFe com erros transferir de pasta rejeitadas
                        $file = $this->rejDir . $aName[$x];
                        $this->errStatus = true;
                        $this->errMsg .= $aName[$x].' ... '.$sErr."\n";
						if ( !file_put_contents($file, $nfefile) ) {
                            $this->errStatus = true;
                        } else {
						
							
							$syslogXML->saveErrorValidade($sErr);
							
							
                            unlink($filename);
                        } //fim teste de grava��o
                        return false;
                    } //fim valida��o
                } //fim teste de leitura
            }//fim for
        } // fim do teste de contagem
        return true;
    } //fim autoValidNFe
	
	
	
	
	public function recuperaProtocol($id){
	
		
		$nfesyslog = new NfeSyslog_x_bd($this->DbConnection, $id);
		
		
		$chave = $nfesyslog->getChave();
		$xml = $nfesyslog->getXML(); // #### ADICIONEI ESTA LINHA
		$nfesyslog->DbConnection->exec("INSERT INTO t_andamento_nfesyslog(id_nfesyslog, andamento_nfesyslog, data_hora) VALUES('".$id."', 'TENTATIVA DE REVALIDACAO', CURRENT_TIMESTAMP)");
		
		$aRetorno = array();
		
		
		try{
	
			$aRet = $this->getProtocol('',$chave,$this->tpAmb,$this->modSOAP);
			
			
			
			$nfeFile = $this->envDir.$chave.'-nfe.xml';
			$protFile = $this->temDir.$chave.'-prot.xml';
			
			//file_put_contents( $nfeFile , $this->getNFe(true,$chave) );
			file_put_contents( $nfeFile , $xml ); // #### ADICIONEI ESTA LINHA
					
			
			
			if ( $aRet['cStat'] == 100) {
				//NFe aprovada
				$pasta = $this->aprDir;
				
				$nfesyslog->saveAprovada();
					
			}//endif
			
			if ( $aRet['cStat'] == 101) {
				//NFe aprovada
				$pasta = $this->canDir;
				
				$nfesyslog->saveCancelada();
					
			}//endif
			
			if ( $aRet['cStat'] == 110) {
				//NFe denegada
				$pasta = $this->denDir;
				
				$nfesyslog->saveDenegada();
				
			}//endif
			
			if ( $aRet['cStat'] > 199 ) {
				//NFe reprovada
				
				$nfesyslog->saveReprovada($aRet['xMotivo']);
				
				$pasta = $this->repDir;
				//mover a NFe para a pasta repovadas
			}//endif
			
			if ( $aRet['bStat'] ) {
				//montar a NFe com o protocolo
				if ( is_file($protFile) && is_file($nfeFile) ) {
					//se aprovada ou denegada adicionar o protocolo e mover o arquivo
					if ($aRet['cStat'] == 100 || $aRet['cStat'] == 110 ) {
						$procnfe = $this->addProt($nfeFile,$protFile);
						//salvar a NFe com o protocolo na pasta
						if ( file_put_contents($pasta.$chave.'-nfe.xml', $procnfe) ) {
							//se o arquivo foi gravado na pasta destino com sucesso
							//remover os arquivos das outras pastas
							unlink($nfeFile);
						} //endif
					}//endif cStat   
				} //endif is_file
			} //endif bStat
			
			$aRetorno[0]['cStat'] = $aRet['cStat'];
			$aRetorno[0]['xMotivo'] = $aRet['xMotivo'];
			$aRetorno[0]['nfepath'] = $pasta.$idNFe.'-nfe.xml';
			
			return $aRetorno;
			
		}catch(Exception $e){
			echo "exception error";
		}
	}

} //fim da classe Auxiliar

?>
