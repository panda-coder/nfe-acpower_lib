<?php

	require('../libs/AutoToolsNFePHP.class.php');

	$auto = new AutoToolsNFePHP();

	//$auto->autoTXTtoXML();
	//$auto->autoSignNFe();
	//$auto->autoValidNFe();
	//$auto->autoEnvNFeImproved();
//$auto->autoEnvNFe();
//echo "<BR>";
//$auto->autoProtNFe();
$auto->autoPrintSend(TRUE);
	?>