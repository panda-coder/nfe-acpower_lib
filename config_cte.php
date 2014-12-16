<?php
	
	$STR_CONN = 'mysql:dbname=nfesyslog;host=192.168.16.5';
	$USER_CONN = 'nfesyslog';
	$PASS_CONN = 'syslognfe';
	$PRINTER_PROGRAM_PATH = 'C:\Arquivos de programas\PrintFile';
	$PRINTER_PROGRAM_FILE = 'prfile32.exe';
	$PRINTER_WATCH = 'c:\temp\*.ps';
	
	$SERVICE_PHP_FILE = "service_cte.sefaz.php";
	$SERVICE_PHP_PRINT = "service_cte.print.php";
	$SERVICE_PHP_PATH = 'C:\Arquivos de programas\NetMake\v7\wwwroot\nfephp\acpower_lib\CTe';
	
	
	$HTTP_SERVICE = "http://127.0.0.1:97/nfephp/acpower_lib/CTe/sefaz_cte.process.php";
	$HTTP_EMAIL_SERVICE = "http://127.0.0.1:97/nfephp/acpower_lib/CTe/auto_cte.email.php";
	$HTTP_PRINT_SERVICE = "http://127.0.0.1:97/nfephp/acpower_lib/CTe/print_cte.process.php";
	
	$PDFTOPS_PROGRAM = 'C:\Arquivos de programas\NetMake\v7\wwwroot\nfephp\acpower_lib\xpdfbin\bin32\pdftops.exe';
	$FOXIT_PROGRAM = 'C:\Arquivos de Programas\Foxit Software\Foxit Reader\Foxit Reader.exe';
	
	
	$API_DIR = dirname( dirname( __FILE__ ) ) . DIRECTORY_SEPARATOR . 'libs';
	
	
	//Não alterar ****************************************************************************************
	$PDFTOPS_PARAM = "\"$PDFTOPS_PROGRAM\" -paper A4 ";
	
	//echo $PDFTOPS_PARAM;

?>