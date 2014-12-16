<?php
header('Content-Type: text/html; charset=utf-8');

if (!defined('PATH_ROOT')) {
   define('PATH_ROOT', dirname($API_DIR) . DIRECTORY_SEPARATOR);
}

//carrega a classe principal da API 
require_once('..\\..' . DIRECTORY_SEPARATOR . 'libs' . DIRECTORY_SEPARATOR . 'CTeNFePHP.class.php');

//carrega a classe de impressao da DANFE
require_once('Auto.DacteNFePHP.class.php');

//carrega a classe de envio de emails
//require_once('..\\..' . DIRECTORY_SEPARATOR . 'libs' . DIRECTORY_SEPARATOR . 'MailNFePHP.class.php');



class AutoCTeSyslog extends CTeNFePHP {
	
	private $DbConnection;
	private $PDFTOPS_PROGRAM;
	private $FOXIT_PROGRAM;
	
	function __construct($aConfig='') {
       parent::__construct($aConfig);
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
	
	private function replaceChars ($file) {
		//remove linefeed, carriage return, tabs e multiplos espaços
		$file = str_replace("\n","", $file);
		$file = str_replace("\r","", $file);
		$file = preg_replace('/\s\s+/',' ', $file);
		$file = str_replace("> <","><", $file);
		$file = trim( preg_replace( '/\s+/', ' ', $file ) );  
		$file = str_replace("\r\n","", $file);
		return $file;
	}
	
	public function localizaSchema() {
		$filexsd = $this->listDir($this->xsdDir . $this->cteSchemeVer. DIRECTORY_SEPARATOR,'cte_v*.xsd',true);
		if (!$filexsd[0]) {
			$this->errMsg = "Método: autoValidaCTe - Erro na localização do schema xsd.\n";
			$this->errStatus = true;
			return false;
		} else {
			return $filexsd;
		}
	}
	
	private function checkFile ($file_name) {
		if(file_exists($file_name)){
			if (filesize($file_name)) {
				return true;
			} else { 
				unlink($file_name); 
				return false; 
			}
		}
		return false;
	}
	
	public function autoAssinaCTe() {
		$xml_files = $this->listDir($this->entDir,'*-cte.xml',false);
		$n = count($xml_files);
        if ( $n > 0 ) {
			for ( $x=0; $x < $n; $x++ ) {
				if($this->checkFile($this->entDir.$xml_files[$x])) {
					if ($file = file_get_contents($this->entDir.$xml_files[$x])) {
						$file = $this->replaceChars($file);
						if ( $signn = $this->signXML($file, $tagid='infCte') ) {
							$signn = $this->replaceChars($signn);
							if (!file_put_contents($this->assDir.$xml_files[$x], $signn)) {
								$this->errStatus = true;
								$this->errMsg .=  "Método: autoAssinaCTe - Erro ao gravar arquivo assinado.";
								continue;
							} else {
							
								$syslogXML = new CTeSyslog_xml($this->DbConnection , $signn);
								if ( $syslogXML->getSit() == 'A' ){
									unlink($this->assDir.$xml_files[$x]);
								} else {
									$syslogXML->SaveCTE();
								}
								unlink($this->entDir.$xml_files[$x]);
								continue;
							}
						}
					} else {
						$this->errStatus = true;
						$this->errMsg .=  "Método: autoAssinaCTe - Erro na leitura de arquivo.";
						continue;
					}
				}
			}
		} else { return true; }
	}
	
	public function autoValidaCTe() {
		if ($filexsd = $this->localizaSchema()) {
			$aErr = array();
			$xml_files = $this->listDir($this->assDir,'*-cte.xml',false);
			$n = count($xml_files);
			if ( $n > 0 ) {
				for ( $x=0; $x < $n; $x++ ) {
					if($this->checkFile($this->assDir.$xml_files[$x])) {
						$file = file_get_contents($this->assDir.$xml_files[$x]);
						$retorno = $this->validXML($file,$filexsd[0],$aErr);
						if ( $retorno ) {
							if(!file_put_contents($this->valDir.$xml_files[$x],$file)) {
								$this->errStatus = true;
								$this->errMsg .=  "Método: autoValidaCTe - Erro ao gravar arquivo validado.";
								return false;
							} else {
							
								unset($syslogXML);
								$syslogXML = new CTeSyslog_xml($this->DbConnection , $file);
								$syslogXML->saveValidade();
							
								unlink($this->assDir.$xml_files[$x]);
								continue;
							}
						} else {
							$this->errStatus = true;
							foreach ($aErr as $e){
								$this->errMsg .= $e . "\n";
							}
							$txt = implode(" - ",$aErr);
							unset($syslogXML);
							$syslogXML = new CTeSyslog_xml($this->DbConnection , $file);
							
							//NFe com erros transferir de pasta rejeitadas
							$r_file = $this->rejDir . $xml_files[$x];
							$this->errStatus = true;
							$this->errMsg .= $xml_files[$x].' ... '.$aErr."\n";
							if ( !file_put_contents($r_file, $file) ) {
								$this->errStatus = true;
							} else {
								echo $file;
								$syslogXML->saveErrorValidade($txt);
								unlink($this->assDir.$xml_files[$x]);
							}						
							return false;
						}
					}
				}
			} else {
				return true;
			}
		} else {
			$this->errStatus = true;
			return false;
		}
	}
	
	public function autoEnviaCTeImproved($maxLoop=4,$minSec=4) {
		$aResp = array();
        $aName = $this->listDir($this->valDir,'*-cte.xml',false);
        $n = count($aName);
        if ( $n > 0 ) {
			for ( $x=0 ; $x<$n ; $x++ ){
				if($this->checkFile($this->valDir.$aName[$x])) {
					$aCTe = null;
					$filename = $this->valDir.$aName[$x];
					$chaveCTe = substr($filename, strripos($filename, DIRECTORY_SEPARATOR) + 1, 44);
					$ctefile = file_get_contents($filename);
						
					$aCTe[] = $ctefile;
					$num = $this->__getNumLot();
					$num++;
					if ($ret = $this->sendLot($aCTe,$num,$this->modSOAP)){
						
						
						unset($syslogXML);
						$syslogXML = new CTeSyslog_xml($this->DbConnection , $ctefile);
						$syslogXML->saveEnvio();
						$syslogXML->newXML($ctefile); // ADICIONEI ESTA LINHA #############################
						
						
						if ($ret['bStat'] == true && $ret['cStat'] == 103){
							$recibo = $ret['nRec'];
							
							if ($this->__putNumLot($num)){
								$this->errStatus = true;
								$this->errMsg .= "Método: autoEnviaCTeImproved - Falha na Gravação do numero do lote de envio!!\n";
								return false;
							}
							
							$loop = 0;
							
							while ($loop < $maxLoop){
								//echo "$chaveCTe esperando\n";
								$loop++;
								// atrasar a consulta para permitir processamento da SEFAZ
								sleep($minSec);		
								// 'bStat' => false,'cStat' => '','xMotivo' => '','aProt' => '','aCanc'=>''
								if($retProt = $this->getProtocol($recibo,'', $this->tpAmb, $this->modSOAP)){
									
									echo "$chaveCTe protocolo veio...\n";
									
									if ($retProt['bStat'] == true){
										if ($retProt['cStat'] == 225){
											$this->errStatus = true;
											$this->errMsg .= "Método: autoEnviaCTeImproved - TAG não localizada. Arquivo incompleto!\n";
											$syslogXML->saveErrorValidade($retProt['cStat'].' - '.$retProt['xMotivo']);
											$syslogXML->voltaRejeicao();
											rename($filename, $this->rejDir.$chaveCTe.'-cte.xml');
											break;
										}
										if ($retProt['cStat'] == 106){
											$this->errStatus = true;
											$this->errMsg .= "Método: autoEnviaCTeImproved - Lote não localizado!\n";
											$syslogXML->saveErrorValidade($retProt['cStat'].' - '.$retProt['xMotivo']);
											$syslogXML->voltaRejeicao();
											rename($filename, $this->rejDir.$chaveCTe.'-cte.xml');
											break;
										}
										if ($retProt['cStat'] > 106){
											$this->errStatus = true;
											echo "<br><br><br>".$chaveCTe."<br><br><br>";
											$this->errMsg .= "Método: autoEnviaCTeImproved - Erro na consulta do lote!\n" . $retProt['cStat'];
											$syslogXML->saveErrorValidade($retProt['cStat'].' - '.$retProt['xMotivo']);
											$syslogXML->voltaRejeicao();
											rename($filename, $this->rejDir.$chaveCTe.'-cte.xml');
											break;
										}
										if ($retProt['cStat'] == 104){
											$aprovada = FALSE;
											
											// o protocolo foi retornado
											$aProt = $retProt['aProt'][0];
											$protFile = $this->temDir.$chaveCTe.'-prot.xml';
											$loop = $maxLoop+1; //sair do laço
											$aResp[$x] = array();
											$aResp[$x]['chave'] = $chaveCTe;
											$aResp[$x]['cStat'] = $aProt['cStat'];
											$aResp[$x]['xMotivo'] = $aProt['xMotivo'];
											
											// pegar o cStat
											if ($aProt['cStat'] == 100){
												// aprovado
												$dirDest = $this->aprDir;
												
												$aprovada = TRUE;
												$syslogXML->saveAprovada();
												
											}
											if ($aProt['cStat'] == 110){
												// denegado
												$dirDest = $this->denDir;
												
												$syslogXML->saveDenegada();
											}
											if ($aProt['cStat'] > 110){
												echo "CTE REPROVADO! ".utf8_decode($aProt['xMotivo']);
												// reprovado
												$dirDest = $this->repDir;
												// mover a cte para reprovadas
												rename($filename, $dirDest.$chaveCTe.'-cte.xml');
												
												$syslogXML->saveReprovada($aProt['xMotivo']);
											} else {
												if (!$aprovada){
													echo "PROBLEMA DETECTADO! ".utf8_decode($aProt['xMotivo']);
												}
											
												// não reprovado
												if (file_exists($protFile)){
													$proccte = $this->addProt($filename,$protFile);
													// salvar o CTe com o protocolo na pasta destino
													if ( file_put_contents($dirDest.$chaveCTe.'-cte.xml', $proccte) ) {
														// remover o arquivo antigo sem o protocolo
														unlink($filename);
													}
												}
											}    
										}
									} else {
										$this->errStatus = true;
										$this->errMsg .= "Método: autoEnviaCTeImproved - Falha na consulta do protocolo!!\n";
										return false;
									} // fim bStat
								} else {
									echo "Não veio protocolo";
									$this->errStatus = true;
									$this->errMsg .= "Método: autoEnviaCTeImproved - Falha na consulta do protocolo!!\n";
									return false;
								} // fim consulta protocolo
							} // fim do loop de consulta do status da cte
						} else {
							$this->errStatus = true;
							$this->errMsg .= "Método: autoEnviaCTeImproved - Erro no envio do lote de CTe!!\n";
							return false;
						} // fim if verifica retorno envio lote
					} else {
						$this->errStatus = true;
						$this->errMsg .= "Método: autoEnviaCTeImproved - Erro no envio do lote de CTe!!\n";
						return false;
					} // fim envio lote
				}
			} // fim for das cte
		}
        return $aResp;
	}
	
	private function PrintFile($path, $file, $program, $debug = "0"){
		//echo "Iniciando impressão... $file <br/>";
	
		switch($program){
			case "1": //PostScript Convertion
				$WshShell = new COM("WScript.Shell");
				$command = '"C:\Arquivos de programas\gs\gs9.07\lib\pdf2ps" "' . "$path$file\" \"c:\\temp\\$file.ps\"";
				$oExec = $WshShell->Run($command, 0,false);
				break;
			case "2": //Foxit Printing
				$WshShell = new COM("WScript.Shell");
				$command =  "\"$FOXIT_PROGRAM\" /p"  . "  \"$path$file\" \"$this->dacteprinter\"";
				$oExec = $WshShell->Run($command, 0,false);
				break;
			case "3": //Foxit Printing 
				$WshShell = new COM("WScript.Shell");
				$command =  "\"$FOXIT_PROGRAM\" /t"  . "  \"$path$file\" \"$this->dacteprinter\"";
				$oExec = $WshShell->Run($command, 0,false);
				break;
			case "4": //JavaPrinting
				$WshShell = new COM("WScript.Shell");
				$command =  "C:\Arquivos de programas\Java\jre7\bin\java\" -classpath " . PATH_ROOT . "acpower_lib\pdfbox-app-1.8.2.jar\" org.apache.pdfbox.PrintPDF -silentPrint -printerName \"$this->dacteprinter\" $path$file\"";
				$oExec = $WshShell->Run($command, 0,false);
				
				break;
			case "5": //PostScript Convertion by: pdftops
				$WshShell = new COM("WScript.Shell");  
				$command = $this->PDFTOPS_PROGRAM . "\"$path$file\" \"c:\\temp\\$file.ps\"";
				//echo $command;
				$oExec = $WshShell->Run($command, 0,false);
				while(1) { if (is_file("c:\\temp\\".$file.".ps")) { sleep(1); } else { break; } }
				break;
			case "6": //Acrobat
				$WshShell = new COM("WScript.Shell");
				$command = '"C:\Arquivos de programas\Adobe\Reader 10.0\Reader\AcroRd32.exe" /t "' . "$path$file\" \"$this->dacteprinter\"";
				$oExec = $WshShell->Run($command, 0,false);
				break;
			case "7": //lpr
				$command = "lpr -P \"$this->dacteprinter\" $this->pdfDir$pdfName";
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
	
	public function autoPrintSend($fixpdf=false, $structure_pdf=true){
		//$structure_pdf só é valido com o $fixpdf true
		
		$fileAprov = $this->listDir($this->aprDir,'*-cte.xml',false);
		if ( count($fileAprov) > 0 ) {
			foreach ( $fileAprov as $file ) {	
				$anomes = '20'.substr($file,2,4);
				$docxml = file_get_contents($this->aprDir.$file);
				
				$syslogXML = new CTeSyslog_xml($this->DbConnection , $docxml );
				$syslogXML->savePrinting();
				$syslogXML->newXML($docxml);
				$syslogXML->WriteProtocol();
	
				$dacte = new DacteNFePHP($docxml,"P","A4","C:\\Arquivos de programas\\NetMake\\v7\\wwwroot\\nfephp\\images\\logoinfoco.jpg",'S',$auto->pdfDir,"Times");
				$id = (string) $dacte->monta('P');
				$pdfName = $id.'.pdf';
				//carrega a DACTE como uma string para gravação no diretorio escolhido
				$pdfFile = (string) $dacte->printDocument($this->pdfDir.$pdfName,'S');
				if ($pdfFile != ''){
					//grava a DACTE como pdf no diretorio
					if (!file_put_contents($this->pdfDir.$pdfName,$pdfFile)){
						//houve falha na gravação
						$this->errMsg = "Falha na gravação do pdf.\n";
						$this->errStatus = true;
					} else {
						//em caso de sucesso, verificar se foi definida a printer se sim imprimir
						//este comando de impressão funciona tanto em linux como em wndows se o 
						//ambiente estiver corretaente preparado
						if ( $this->dacteprinter != '' ) {
							//$command = "lpr -S 192.168.16.154 -P $this->dacteprinter $this->pdfDir$pdfName";
							$this->PrintFile($this->pdfDir, $pdfName, "5", 0);
						} else {
							echo "erro da impressora";
						}
					}
				} else {
					//houve falha na geração da DACTE
					$this->errMsg = "Falha na geração da DACTE.\n";
					$this->errStatus = true;
				}
				
				
				/*
				$xml = new xml2array($docxml);
				$arrXML = $xml->getResult();
				
				$emitente = $arrXML['cteProc']['CTe']['infCte']['emit']['xFant']['#text'];
				$email = "projetos@acpower.com.br";
				$razao = $arrXML['cteProc']['CTe']['infCte']['emit']['xNome']['#text'];
				$numero = $arrXML['cteProc']['CTe']['infCte']['ide']['nCT']['#text'];
				$serie = $arrXML['cteProc']['CTe']['infCte']['ide']['serie']['#text'];
				$vtotal = $arrXML['cteProc']['CTe']['infCte']['vPrest']['vTPrest']['#text'];
				
				if ($email != '' ) {
                    //montar a matriz de dados para envio do email
                    $aEMail = array('emitente'=>$emitente,'para'=>$email,'contato'=>'','razao'=>$razao,'numero'=>$numero,'serie'=>$serie,'vtotal'=>$vtotal);
                    //inicalizar a classe de envio
                    $cteMail = new MailNFePHP($this->aMail);
                    if ( !$cteMail->sendNFe($docxml,$pdfFile,$file,$pdfName,$aEMail) ){
                        $this->errMsg = "Falha no envio do email ao destinatário!!\n";
                        $this->errStatus = true;
                    }
                }
				*/
				
				//mover o arquivo xml para a pasta de arquivamento identificada com o ANOMES
                $diretorio = $this->aprDir.$anomes.DIRECTORY_SEPARATOR;
                if ( !is_dir($diretorio) ) {
                      mkdir($diretorio, 0777);
                }
                rename($this->aprDir.$file,$diretorio.$file);
				
				$arr_pdf[] = $pdfName;
			}
			sleep(1);
			foreach ($arr_pdf as $v_pdfName) {
				$anomes = '20'.substr($v_pdfName,2,4);
				//apagar o pdf criado para envio
				if (!$fixpdf) {
					if (is_file($this->pdfDir.$v_pdfName)) {
						unlink($this->pdfDir.$v_pdfName);
					}
				} else {
					if ($structure_pdf) {
						$diretorio_backup = $this->pdfDir.$anomes.DIRECTORY_SEPARATOR;
						if ( !is_dir($this->pdfDir.$anomes.DIRECTORY_SEPARATOR) ) {
							mkdir($this->pdfDir.$anomes.DIRECTORY_SEPARATOR, 0777);
						}
						rename($this->pdfDir.$v_pdfName, $diretorio_backup.$v_pdfName);
					}
				}
			}
		}
		return true;	
	}
	
	
	public function recuperaProtocol($id){
	
		
		$ctesyslog = new CteSyslog_x_bd($this->DbConnection, $id);
		
		
		$chave = $ctesyslog->getChave();
		$xml = $ctesyslog->getXML(); // #### ADICIONEI ESTA LINHA
		$ctesyslog->DbConnection->exec("INSERT INTO t_andamento_ctesyslog(id_ctesyslog, andamento_ctesyslog, data_hora) VALUES('".$id."', 'TENTATIVA DE REVALIDACAO', CURRENT_TIMESTAMP)");
		
		$aRetorno = array();
		
		
		try{
	
			$aRet = $this->getProtocol('',$chave,$this->tpAmb,$this->modSOAP);
			
			
			$idCTe = substr($chave.'-cte.xml',0,44);
			$cteFile = $this->envDir.$chave.'-cte.xml';
			$protFile = $this->temDir.$chave.'-prot.xml';
			
			file_put_contents( $cteFile , $xml ); // #### ADICIONEI ESTA LINHA
					
			
			
			if ( $aRet['cStat'] == 100) {
				$pasta = $this->aprDir;
				$ctesyslog->saveAprovada();
					
			}//endif
			
			if ( $aRet['cStat'] == 101) {
				$pasta = $this->canDir;
				$ctesyslog->saveCancelada();
					
			}//endif
			
			if ( $aRet['cStat'] == 110) {
				$pasta = $this->denDir;
				$ctesyslog->saveDenegada();
				
			}//endif
			
			if ( $aRet['cStat'] > 199 ) {
				$ctesyslog->saveReprovada($aRet['xMotivo']);
				$pasta = $this->repDir;
			}//endif
			
			if ( $aRet['bStat'] ) {
				if ( is_file($protFile) && is_file($cteFile) ) {
					//se aprovada ou denegada adicionar o protocolo e mover o arquivo
					if ($aRet['cStat'] == 100 || $aRet['cStat'] == 110 ) {
						$procnfe = $this->addProt($cteFile,$protFile);
						//salvar a CTe com o protocolo na pasta
						if ( file_put_contents($pasta.$chave.'-cte.xml', $procnfe) ) {
							//se o arquivo foi gravado na pasta destino com sucesso
							//remover os arquivos das outras pastas
							unlink($cteFile);
						} //endif
					}//endif cStat   
				} //endif is_file
			} //endif bStat
			
			$aRetorno[0]['cStat'] = $aRet['cStat'];
			$aRetorno[0]['xMotivo'] = $aRet['xMotivo'];
			$aRetorno[0]['ctepath'] = $pasta.$idCTe.'-cte.xml';
			
			return $aRetorno;
			
		}catch(Exception $e){
			echo "exception error";
		}
	}
	
}

class xml2array {
	function __construct($xml) {
		if (is_string($xml)) {
			$this->dom = new DOMDocument;
			$this->dom->loadXml($xml);
		}
		return FALSE;
	}
	function _process($node) {
		$occurance = array();
		if($node->hasChildNodes()){
			foreach($node->childNodes as $child) {
				$occurance[$child->nodeName]++;
			}
		}
		if($node->nodeType == XML_TEXT_NODE) {
			$result = html_entity_decode(htmlentities($node->nodeValue, ENT_COMPAT, 'UTF-8'),
			ENT_COMPAT,'ISO-8859-15');
		} else {
			if($node->hasChildNodes()){
				$children = $node->childNodes;
				for($i=0; $i<$children->length; $i++) {
					$child = $children->item($i);
					if($child->nodeName != '#text') {
						if($occurance[$child->nodeName] > 1) {
						$result[$child->nodeName][] = $this->_process($child);
						} else {
							$result[$child->nodeName] = $this->_process($child);
						}
					} else if ($child->nodeName == '#text') {
						$text = $this->_process($child);
						if (trim($text) != '') {
							$result[$child->nodeName] = $this->_process($child);
						}
					}
				}
			}
			if($node->hasAttributes()) {
				$attributes = $node->attributes;
				if(!is_null($attributes)) {
					foreach ($attributes as $key => $attr) {
						$result["@".$attr->name] = $attr->value;
					}
				}
			}
		}
		return $result;
	}
	function getResult() {
		return $this->_process($this->dom);
	}
}

?>