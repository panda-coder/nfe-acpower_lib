<?php
	
	require_once('core_cte.php');
	
	//ob_start();
	
	echo "Iniciando assinaturas...\n";
	$auto->autoAssinaCTe();
	echo "Iniciando validacao...\n";
	$auto->autoValidaCTe();
	echo "Iniciando envio e protolocacao...\n";
	$auto->autoEnviaCTeImproved();
	echo $auto->errMsg;
	
	
	sleep(1);
	
	$txt = ob_get_contents();
	//ob_end_clean();
	
	$txt = nl2br($txt);
	
	echo $txt;
?>



