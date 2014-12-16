<?php
	require_once('core.php');

	//$dataset = $db_nfe->lookup("SELECT t_nfesyslog.id_nfesyslog FROM t_nfesyslog, t_xml_nfesyslog WHERE t_nfesyslog.tempo_gasto is null and t_nfesyslog.situacao='A' and t_nfesyslog.data_danfe is not null and t_xml_nfesyslog.id_nfesyslog=t_nfesyslog.id_nfesyslog");
	
	$dataset = $db_nfe->lookup("SELECT t_nfesyslog.id_nfesyslog FROM t_nfesyslog, t_xml_nfesyslog WHERE  t_xml_nfesyslog.id_nfesyslog=t_nfesyslog.id_nfesyslog and t_nfesyslog.data_inclusao is null");
	
	foreach($dataset as $nfeprot){
		
		list($id) = $nfeprot;
		$nfesyslog = new NfeSyslog_x_bd($db_nfe, $id);
		
		//$nfesyslog->recoverTempoGasto();
		$nfesyslog->recoverDataInclusao();
	}
?>