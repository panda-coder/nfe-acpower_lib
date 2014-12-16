<?php 
	require_once 'core.php';
	
	$dia = $_GET["day"];
	
	$FOLDER = "c:\\Arquivos de programas\\NetMake\\v7\\wwwroot\\nfe_infoco\\homologacao\\enviadas\\aprovadas\\201308\\{$dia}\\";
	
	$arquivos = scandir($FOLDER);
	
	if ( $arquivos === false ){
		echo "Erro ao listar o arquivo";
	}else{
		foreach($arquivos as $arq){
			//getNaturezaOperacao
			
			if ( $arq != "." && $arq != ".." ){
			
				$filename = $FOLDER . $arq;
				
				if ( !is_dir($filename) ){
				
					$xml = file_get_contents($filename);
					
					$nfeXML = new NfeSyslog_xml($db_nfe, $xml); 
					
					$natOp = $nfeXML->getNaturezaOperacao();
					
					$pasta = getNomePasta($natOp);
					$fullNewPath = $FOLDER . $pasta;
					
					
					if ( !is_dir($fullNewPath) ){
						mkdir($fullNewPath);
					}
					
					
					rename($filename, $fullNewPath . DIRECTORY_SEPARATOR . $arq);
					
					
					echo "Arquivo {$arq}: $natOp >> <b>" .  $pasta . "</b><br/>";
				}
				
			}
		}
	}
	
	function getNomePasta($natOp){
		$ret = "";
		switch($natOp){
			case "VENDA EXTERNA":
			case "VENDA DE MERCADORIA":
				$ret = "Vendas";
				break;
			case "BONIFICACAO DE VENDA":
				$ret = "Bonificacao";
				break;
			case "DEVOLUCAO DE COMPRA":
				$ret = "Devolucao_compra";
				break;
			case "DEVOLUCAO DE VENDA":
				$ret = "Devolucao_venda";
				break;
			default:
				$ret = "Outros";
		}
		
		return $ret;			
	}
	/*VENDA DE MERCADORIA
BONIFICACAO DE VENDA
DEVOLUCAO DE COMPRA
VENDA EXTERNA
REMESSA VENDA EXTERNA
REMESSA PARA VENDA EXTERNA
RETORNO DE VENDA EXTERNA
DEVOLUCAO DE VENDA
VENDA INTERESTADUAL
BONIFICACAO INTERESTADUAL

Venda
Devolução de Venda
Bonificação
Devolução de compra */
?>