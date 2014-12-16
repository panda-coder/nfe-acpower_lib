<?php

	error_reporting(E_ALL);ini_set('display_errors', 'On');
	
	
	
	require_once('..' . DIRECTORY_SEPARATOR . 'config.php');
	
	require_once($EXTERNAL_DIR . DIRECTORY_SEPARATOR . 'PHPMailer' . DIRECTORY_SEPARATOR .  'class.phpmailer.php');
	require_once('database.class.php');
	require_once('NfeSyslog.class.php');
	require_once('Auto.NfeSyslog.class.php');
	require_once('NfeSyslog_xml.class.php');
	require_once('handling.error.php');
	require_once('SefazManager.class.php');
	

	
	
	$db_nfe = new DBConn($STR_CONN, $USER_CONN, $PASS_CONN);
	
	
	if ( !$db_nfe->isConnected() ){
		
		die("Não é possivel se conectar, pois houve falha na conexão");
		
	}
	
	
	$service = new NfeSyslog_Service($SERVICE_PHP_FILE, $SERVICE_PHP_PATH);
	$service->setPrinterProgram($PRINTER_PROGRAM_PATH, $PRINTER_PROGRAM_FILE, $PRINTER_WATCH);
	
	$service_print = new NfeSyslog_Service($SERVICE_PHP_PRINT, $SERVICE_PHP_PATH);
	$service_internal = new NfeSyslog_Service($SERVICE_PHP_INTERNAL, $SERVICE_PHP_PATH);
	$service_entrada = new NfeSyslog_Service($SERVICE_PHP_ENTRADA, $SERVICE_PHP_PATH);
	
	
	
	$auto = new AutoNFeSyslog();
	
	
	
	try{
		
		$auto_new = new ManagerSefaz($db_nfe, $CNPJ_EMITENTE);
		
	}catch(Exception $e){
		echo "Erro: " . $e->getMessage();
	}
	

	$auto->setDBConn($db_nfe);
	$auto->setPDFTOPS_PROGRAM($PDFTOPS_PARAM);

	error_reporting(E_ALL);ini_set('display_errors', 'On');

	

?>