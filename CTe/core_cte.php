<?php

	ob_start();
	require_once('..' . DIRECTORY_SEPARATOR . 'config_cte.php');
	require_once('database_cte.class.php');
	require_once('Auto.CTeSyslog.service.php');
	require_once('Auto.CTeSyslog.class.php');
	require_once('CTeSyslog_xml.class.php');
	
	
	$db_cte = new DBConn($STR_CONN, $USER_CONN, $PASS_CONN, 'S');
	
	$service = new CTeSyslog_Service($SERVICE_PHP_FILE, $SERVICE_PHP_PATH);
	$service->setPrinterProgram($PRINTER_PROGRAM_PATH, $PRINTER_PROGRAM_FILE, $PRINTER_WATCH);
	
	$service_print = new CTeSyslog_Service($SERVICE_PHP_PRINT, $SERVICE_PHP_PATH);
	
	$auto = new AutoCTeSyslog();
	$auto->setDBConn($db_cte);
	$auto->setPDFTOPS_PROGRAM($PDFTOPS_PARAM);

?>