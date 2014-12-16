<?php
	ob_implicit_flush(true);
	require_once('..' . DIRECTORY_SEPARATOR . 'config.php');
	
	$ch_service_entrada = curl_init();
	
	
	curl_setopt($ch_service_entrada, CURLOPT_URL, $HTTP_ENTRADA_SERVICE);
	curl_setopt($ch_service_entrada, CURLOPT_HEADER, 0);

	echo "Executing...";
	
	curl_exec($ch_service_entrada);	
	curl_close($ch_service_entrada);
?>

