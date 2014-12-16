<?php
	ob_implicit_flush(true);

	require_once('..' . DIRECTORY_SEPARATOR . 'config.php');
	
	$ch_service = curl_init();
	$ch_email = curl_init();
	
	
	curl_setopt($ch_service, CURLOPT_URL, $HTTP_INTERNAL_SERVICE);
	curl_setopt($ch_service, CURLOPT_HEADER, 0);
	
	curl_setopt($ch_email, CURLOPT_URL, $HTTP_EMAIL_SERVICE);
	curl_setopt($ch_email, CURLOPT_HEADER, 0);

	echo "Executing...";
	
	while(1){
		curl_exec($ch_service);
		curl_exec($ch_email);
		echo "Executed after sleep...";
	}
	
	curl_close($ch_service);
?>

