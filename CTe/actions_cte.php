<?php

	require('core_cte.php');
	
	$JSON_OUT = array();
	
	if (isset($_GET["action"])){
		$action = $_GET["action"];
		
		
		switch( $action ){
			case "start_service":
				$service->startService();
				break;
			case "stop_service":
				$service->stopService();
				break;
			case "start_printer":
				$service_print->startService();
				break;
			case "stop_printer":
				$service_print->stopService();
				break;	
			case "help":
				$JSON_OUT["help"] = "GET Commands: start_service / stop_service";
				break;
		}
		
		
	}else{
		$action = "none";
	}
	
	if ( $service->isRunning() ){
		$JSON_OUT["status_service"] = "on";
	} else {
	
		$JSON_OUT["status_service"] = "off";	
	}
	
	
	if ( $service_print->isRunning() ){
		$JSON_OUT["status_printer"] = "on";
	} else {
		$JSON_OUT["status_printer"] = "off";
	}
	
	
	
	
	$JSON_OUT["action_sended"] = $action;
	
	echo "action_sended" . "(" . json_encode($JSON_OUT) . ")";
	
	
?>