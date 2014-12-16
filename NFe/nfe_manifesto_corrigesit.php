<?php

require_once('core.php');
require_once('xml2array.php');

$lista = $db_nfe->lookup("select id_nfesyslog_entrada_lista, dados_gerais, tipo_retorno from t_nfesyslog_entrada_lista where situacao_conf <> 4");
foreach($lista as $value) {
	$obj = new xml2array($value[1]);
	$xml_arr = $obj->getArray();
	
	$value2 = '';
	$arr_ret = $xml_arr['soap:Envelope']['soap:Body']['nfeConsultaNFDestResult']['retConsNFeDest']['ret'];
	if(count($arr_ret)>1) {
		foreach ($arr_ret as $value2) {
			if($value2['resNFe']['chNFe']['#text']!=''&&$value[2]=='NFE') {
				$db_nfe->exec("update t_nfesyslog_entrada_lista set situacao_conf = '".$value2['resNFe']['cSitConf']['#text']."', situacao_nfe = '".$value2['resNFe']['cSitNFe']['#text']."' where id_nfesyslog_entrada_lista = '".$value[0]."'");
				//echo $value[0]." - ".$value2['resNFe']['chNFe']['#text']." - ".$value2['resNFe']['cSitConf']['#text']." - ".$value2['resNFe']['cSitNFe']['#text']."<br>";
			} 
			if ($value2['resCCe']['chNFe']['#text']!=''&&$value[2]=='CCE') {
				$db_nfe->exec("update t_nfesyslog_entrada_lista set situacao_conf = '".$value2['resCCe']['cSitConf']['#text']."', situacao_nfe = '".$value2['resCCe']['cSitNFe']['#text']."' where id_nfesyslog_entrada_lista = '".$value[0]."'");
			}
			if ($value2['resCanc']['chNFe']['#text']!=''&&$value[2]=='CAN') {
				$db_nfe->exec("update t_nfesyslog_entrada_lista set situacao_conf = '".$value2['resCanc']['cSitConf']['#text']."', situacao_nfe = '".$value2['resCanc']['cSitNFe']['#text']."' where id_nfesyslog_entrada_lista = '".$value[0]."'");
			}
			unset($value2);
		}
	} else {
		if ($arr_ret['resNFe']['chNFe']['#text']!=''&&$value[2]=='NFE') {
			$db_nfe->exec("update t_nfesyslog_entrada_lista set situacao_conf = '".$arr_ret['resNFe']['cSitConf']['#text']."', situacao_nfe = '".$arr_ret['resNFe']['cSitNFe']['#text']."' where id_nfesyslog_entrada_lista = '".$value[0]."'");
			//echo $value[0]." - ".$arr_ret['resNFe']['chNFe']['#text']." - ".$arr_ret['resNFe']['cSitConf']['#text']." - ".$arr_ret['resNFe']['cSitNFe']['#text']."<br>";
		} 
		if ($arr_ret['resCCe']['chNFe']['#text']!=''&&$value[2]=='CCE') {
			$db_nfe->exec("update t_nfesyslog_entrada_lista set situacao_conf = '".$arr_ret['resCCe']['cSitConf']['#text']."', situacao_nfe = '".$arr_ret['resCCe']['cSitNFe']['#text']."' where id_nfesyslog_entrada_lista = '".$value[0]."'");
		}
		if ($arr_ret['resCanc']['chNFe']['#text']!=''&&$value[2]=='CAN') {
			$db_nfe->exec("update t_nfesyslog_entrada_lista set situacao_conf = '".$arr_ret['resCanc']['cSitConf']['#text']."', situacao_nfe = '".$arr_ret['resCanc']['cSitNFe']['#text']."' where id_nfesyslog_entrada_lista = '".$value[0]."'");
		}
	}
	unset($arr_ret);
	unset($value2);
	//echo "<br><br>";
}



?>