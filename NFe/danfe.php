<?php

	ini_set('error_reporting', E_ALL);

	require_once('core.php');
	
	ini_set('error_reporting', E_ALL);
	
	$nfesyslog = new NfeSyslog_x_bd($db_nfe, $_GET["id_nfesyslog"] );
	
	$docxml = $nfesyslog->getXML();
	
	$danfe = new DanfeNFePHP($docxml,$auto->danfepaper,$auto->danfeform,$auto->danfelogopath,'I','',$auto->danfefont);
	
	//echo $docxml;
	
	$chave = $nfesyslog->getChave();
	$pdfName = $chave . ".pdf";
	
	
	
	//header("Content-disposition: attachment; filename=$chave.xml");
	//header('Content-type: application/pdf');
	
	//echo $docxml;
	
	//ob_start();
	ob_end_clean();
	
	$danfe->montaDANFE();
	
	
	try{
	
		
		$pdfFile = (string) $danfe->printDANFE();
		
		
	}catch(Exception $e){
		echo "erro " . $e->getMessage();
	}
	
	//ob_end_clean();
	
	echo $pdfFile;
?>