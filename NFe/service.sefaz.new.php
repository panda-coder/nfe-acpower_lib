<?php
	ob_implicit_flush(true);

	require_once('..' . DIRECTORY_SEPARATOR . 'config.php');
	
	$ch_service = curl_init();
	
	
	curl_setopt($ch_service, CURLOPT_URL, $HTTP_SERVICE_NEW);
	curl_setopt($ch_service, CURLOPT_HEADER, 0);
	
	while(1){
		curl_exec($ch_service);
	}
	
	
	curl_close($ch_service);
?>