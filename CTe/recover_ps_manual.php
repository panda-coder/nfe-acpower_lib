<?php

$path1 = '"c:\\Arquivos de programas\\NetMake\\v7\\wwwroot\\nfephp\\acpower_lib\\CTe\\pdf-retroativo-2\\"';
$path = 'c:\\Arquivos de programas\\NetMake\\v7\\wwwroot\\nfephp\\acpower_lib\\CTe\\pdf-retroativo-2\\';
$pdftops_dir = '"C:\\Arquivos de programas\\NetMake\\v7\\wwwroot\\nfephp\\acpower_lib\\xpdfbin\\bin32\\pdftops.exe" -paper A4 ';

$d = dir($path);
while (false !== ($file = $d->read())) {
	if(is_file($path.$file)) {
		$WshShell = new COM("WScript.Shell");  
		$command = $pdftops_dir . "\"$path$file\" \"c:\\temp\\$file.ps\"";
		//echo $command."<br>";
		$oExec = $WshShell->Run($command, 0,false);
		//while(1) { if (is_file("c:\\temp\\".$file.".ps")) { sleep(1); } else { break; } } 
	}
}
$d->close();

?>