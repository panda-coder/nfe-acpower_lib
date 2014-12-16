<?php
	require_once('NfeSylogEmailH.class.php');
	
	
		
	$dataset = $db_nfe->lookup("SELECT id_nfesyslog FROM t_nfesyslog WHERE protocolo is null");
	
	foreach($dataset as $nfemail){
	
	
		list($id) = $nfemail;
		
		$db_nfe->debugOn();
		
		$nfesyslog = new NfeSyslog_x_bd($db_nfe, $id);
		
		try{
			$nfesyslog->WriteRazao();
			$nfesyslog->WriteProtocol();
		}catch(Exception $e){
			echo $e->getMessage();
		}
		
	}

	
	echo "</pre>";
	echo "email enviado";

?>