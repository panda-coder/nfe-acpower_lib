<?php

	require_once('core.php');
	
	
	$just = $_GET['just'];
	
	
	
	//echo "teste";
	$nfesyslog = new NfeSyslog_x_bd($db_nfe, $_GET["id_nfesyslog"] );
	
	$chave = $nfesyslog->getChave();
	
	$protocolo = $nfesyslog->getProtocol();
	
	
	
	try{
		
		$auto->cancelEvent($chave, $protocolo, $just);
		
	}catch(Exception $e){
	
	}
	
	
?>	