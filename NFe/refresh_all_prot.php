<?php
	require_once('core.php');
	
	$dataset = $db_nfe->lookup("SELECT id_nfesyslog FROM t_nfesyslog WHERE ifnull(protocolo,'N')='N' and situacao='A'");
	
	foreach($dataset as $nfeprot){
		
		list($id) = $nfeprot;
		
		$nfesyslog = new NfeSyslog_x_bd($db_nfe, $id);
		$nfesyslog->WriteProtocol();
	}
?>