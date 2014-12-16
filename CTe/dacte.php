<?php
	//ini_set('error_reporting', E_ALL);

	require_once('core_cte.php');
	
	//ini_set('error_reporting', E_ALL);
	ob_end_clean();
	
	$ctesyslog = new CteSyslog_x_bd($db_cte, $_GET["id_ctesyslog"] );
	
	$docxml	 = $ctesyslog->getXML();
	$chave	 = $ctesyslog->getChave();
	$pdfName = $chave . ".pdf";
	
	
	$dacte = new DacteNFePHP($docxml,"P","A4","C:\\Arquivos de programas\\NetMake\\v7\\wwwroot\\nfephp\\images\\logoinfoco.jpg",'S',$auto->pdfDir,"Times");
	
	$dacte->monta('P');
	
	$pdfFile = (string) $dacte->printdacte($pdfName,'D');
	
	/*
	try{
	
		
		$pdfFile = (string) $dacte->printdacte();
		
		
	}catch(Exception $e){
		echo "erro " . $e->getMessage();
	}
	
	
	*/
	echo $pdfFile;
?>