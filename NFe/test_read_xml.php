<?php
	require('NfeSyslog_xml.class.php');
	require_once('config.php');
	
	$arq = '35130608564065000171550000005394571003165853-nfe.xml';
	$content = "";
	
	
	
	if ( $content = file_get_contents($arq) ){
		$nfeSys = new NfeSyslog_xml(&$db_nfe, $content);
		echo $nfeSys->getChave();
		echo $nfeSys->getEmitente();
		
		$nfeSys->InsertBd();
	}	
	
?>