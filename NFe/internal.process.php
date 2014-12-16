<?php
	
	require_once('core.php');
	
		
	echo "Iniciando conversao...<br/>\n";
	try{
		if ( $auto->autoTXTtoXML() ){
			echo "Ocorreu tudo ok";
		}else{
			echo $auto->errMsg;
		}
	}catch(Exception $e){
		echo "<b>Exception Erro: " . $e->getMessage() . "</b><br/>";
	}
	
	echo "Iniciando assinaturas...\n";
	try{
		if ( $auto->autoSignNFe() ){
			echo "Ocorreu tudo ok";
		}else{
			echo $auto->errMsg;
		}
	}catch(Exception $e){
		echo "<b>Exception Erro: " . $e->getMessage() . "</b><br/>";
	}
	
	echo "Iniciando validacao...\n";
	try{
		if ( $auto->autoValidNFe() ){
			echo "Ocorreu tudo ok";
		}else{
			echo $auto->errMsg;
		}
	}catch(Exception $e){
		echo "<b>Exception Erro: " . $e->getMessage() . "</b><br/>";
	}
	
	
	
	//OLD
	//echo "Iniciando envio e protolocacao...\n";
	//$auto->autoEnvNFeImproved();
	echo $auto->errMsg;
	
	
	sleep(1);
	
	$txt = ob_get_contents();
	ob_end_clean();
	
	$txt = nl2br($txt);
	
	echo $txt;
?>



