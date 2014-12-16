<?php

	require_once('core_cte.php');

	if($_REQUEST['id_ctesyslog']!=''&&$_REQUEST['justificativa']!='') {
		echo "Iniciando cancelamento...\n";
		$auto->autoCancel($_REQUEST['id_ctesyslog'], $_REQUEST['justificativa']);
		echo $auto->errMsg;
	}

?>