<?php
require_once('core.php');

function zeraUltNSU($obj) {
	$v_nsufile = $obj->raizDir . 'config/teste_numNSU.xml';
	$v_file = simplexml_load_file($v_nsufile);

	include($obj->raizDir . 'config' . DIRECTORY_SEPARATOR . 'config.php');
	//$ambiente;
	
	foreach( $v_file->xpath("UF[@sigla='AN' and @tpAmb='1']") as $element ) {
		$element->ultNSU = 0;
	}
	$v_file->asXML($v_nsufile);
}

?>