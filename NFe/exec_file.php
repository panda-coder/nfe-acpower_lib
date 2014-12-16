<?php
	require_once('SefazProcess.class.php');

	$arquivo = $_GET["file"];
	$id_processo = $_GET["id_process"];
	
	ob_start();

	try{
		$processo = new SefazProcess($db_nfe, $CNPJ_EMITENTE);
		$processo->setProcesso($arquivo, $id_processo);
		$processo->Run();
	}catch(Exception $e){
		echo "Erro: " . $e->getMessage();
	}
	
	echo "Executado {$arquivo}\n";
	
	
	$text = ob_get_contents();
	
	$arquivo = dirname(__FILE__) . DIRECTORY_SEPARATOR . "nfe_logs" . DIRECTORY_SEPARATOR .  "exec{$arquivo}.log";
	
	file_put_contents($arquivo, $text, FILE_APPEND);
	
?>