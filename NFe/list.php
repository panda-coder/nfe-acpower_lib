<?php
	require_once('Entrada.Nfesyslog.class.php');
	
	$entrada = new EntradaNfesyslog('', 1);

	echo $entrada->getProductionList();
	
?>