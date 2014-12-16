<?php
	ob_implicit_flush(true);

	require_once('../config_cte.php');
	
	$ch_service = curl_init();
	$ch_email = curl_init();
	
	
	curl_setopt($ch_service, CURLOPT_URL, $HTTP_PRINT_SERVICE);
	curl_setopt($ch_service, CURLOPT_HEADER, 0);
	
	echo "Executing...";
	
	while(1){
		curl_exec($ch_service);
		echo "Executed after sleep...";
		sleep(1);
	}
	
	curl_close($ch_service);
?>

