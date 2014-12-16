<?php
	
	require_once('core.php');
	
	ob_start();
	
	//echo "Iniciando conversao...\n";
	//echo $auto->autoTXTtoXML();
	//echo "Iniciando assinaturas...\n";
	//echo $auto->autoSignNFe();
	//echo "Iniciando validacao...\n";
	//echo $auto->autoValidNFe();
	
	
	
	echo "Iniciando envio e protolocacao...\n";
	$auto->autoEnvNFeImproved();
	echo $auto->errMsg;
	
	
	sleep(1);
	
	$txt = ob_get_contents();
	ob_end_clean();
	
	$txt = nl2br($txt);
	
	echo $txt;
?>



