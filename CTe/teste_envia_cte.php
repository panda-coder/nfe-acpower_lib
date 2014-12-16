<?php
	
	require_once('core_cte.php');
	echo "Iniciando assinaturas...\n";
	$auto->autoAssinaCTe();
	echo "Iniciando validacao...\n";
	$auto->autoValidaCTe();
	echo "Iniciando envio...\n";
	$auto->autoEnviaCTeImproved();
	echo $auto->errMsg;

?>