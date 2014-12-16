<?php
require_once('core.php');
require_once('xml2array.php');

ob_end_flush();
set_time_limit(0); 

$db_nfe->debugOn();

$modSOAP = '2';
//$tpAmb = retornaAmbiente($auto); ?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
$tpAmb	 = '1'; 
$indNFe	 = '2';
$indEmi  = '0';
$AN 	 = true;


// RETORNA O AMBIENTE HOMOLOGAÇÃO OU PRODUÇÃO DO CONFIG
function retornaAmbiente($obj) {
	include($obj->raizDir . 'config' . DIRECTORY_SEPARATOR . 'config.php');
	return $ambiente;
}

// ZERA ULTIMO NSU NO ARQUIVO DE CONFIGURAÇÃO SOMENTE DO AMBIENTE CONFIGURADO
function zeraUltNSU($obj) {
	global $tpAmb;
	$v_nsufile = $obj->raizDir . 'config/numNSU.xml';
	$v_file = simplexml_load_file($v_nsufile);

	foreach( $v_file->xpath("UF[@sigla='AN' and @tpAmb='".$tpAmb."']") as $element ) {
		$element->ultNSU = 0;
	}
	//$v_file->asXML($v_nsufile); ?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
}

// RETORNA O ULTIMO NSU DO BANCO DE DADOS
function getNSU_Bd() {

	global $db_nfe;
	$max = $db_nfe->lookup("select count(id_nfesyslog_entrada_lista) from t_nfesyslog_entrada_lista where nsu is not null");
	
	if ($max[0][0]==0) {
		$nsu = "0";
	} else {
		$dtnsu = $db_nfe->lookup("select nsu from t_nfesyslog_entrada_lista order by data_autorizacao desc limit 0,1");
		$nsu = $dtnsu[0][0];
	}
	return $nsu;
}


// NFE - PROCESSO DE LEITURA DE XML E INSERÇÃO DE DADOS NA TABELA T_NFESYSLOG_ENTRADA_LISTA
function procNFe($v_NFe,$xml,$nfe) {
	global $db_nfe;
	global $CNPJ_EMITENTE;
	
	foreach ($v_NFe as $value) {
		$it_chNFe = $value['chNFe'];
		$it_NSU = $value['NSU'];
		$it_CNPJ = $value['CNPJ'];
		$it_xNome = strtoupper($value['xNome']);
		$it_dhRecbto = $value['dhRecbto'];
		$it_tpNF = $value['$tpNF'];
		$it_cSitConf = $value['cSitconf'];
		$it_cSitNFe = $value['cSitNFe'];
		
		$dataset = $db_nfe->lookup("select count(*) from t_nfesyslog_entrada_lista where chave='".$it_chNFe."' and tipo_retorno='NFE'");
		if ($dataset[0][0]=='0') {
			$db_nfe->exec("insert into t_nfesyslog_entrada_lista(nsu,tipo_retorno,chave,xnome,xcorrecao,data_inclusao,data_autorizacao,tipo_operacao,
			dados_gerais,cnpj_emitente,cnpj_destinatario,situacao_conf,situacao_nfe) values ('".$it_NSU."','NFE','".$it_chNFe."','".$it_xNome."','',NOW(),
			'".$it_dhRecbto."','".$it_tpNF."','".$xml."','".$it_CNPJ."','".$CNPJ_EMITENTE."','".$it_cSitConf."','".$it_cSitNFe."')");
			
			//initManifDest($nfe,array($it_chNFe),'210210','')); ????????????????????????????????????????????????????????????????????????????????????
		}
	}
	
	return true;
}



// CANCELADA - PROCESSO DE LEITURA DE XML E INSERÇÃO DE DADOS NA TABELA T_NFESYSLOG_ENTRADA_LISTA
function procCanc($v_Canc,$xml,$nfe) {
	global $db_nfe;
	global $CNPJ_EMITENTE;
	
	foreach ($v_Canc as $value) {
		$it_chNFe = $value['chNFe'];
		$it_NSU = $value['NSU'];
		$it_CNPJ = $value['CNPJ'];
		$it_xNome = strtoupper($value['xNome']);
		$it_dhRecbto = $value['dhRecbto'];
		$it_tpNF = $value['$tpNF'];
		$it_cSitConf = $value['cSitconf'];
		$it_cSitNFe = $value['cSitNFe'];
		
		$dataset = $db_nfe->lookup("select count(*) from t_nfesyslog_entrada_lista where chave='".$it_chNFe."' and tipo_retorno='CAN'");
		if ($dataset[0][0]=='0') {
			$db_nfe->exec("insert into t_nfesyslog_entrada_lista(nsu,tipo_retorno,chave,xnome,xcorrecao,data_inclusao,data_autorizacao,
			tipo_operacao,dados_gerais,cnpj_emitente,cnpj_destinatario,situacao_conf,situacao_nfe) values ('".$it_NSU."','CAN','".$it_chNFe."','".$it_xNome."','',NOW(),
			'".$it_dhRecbto."','".$it_tpNF."','".$xml."','".$it_CNPJ."','".$CNPJ_EMITENTE."','".$it_cSitConf."','".$it_cSitNFe."')");
			
			//initManifDest($nfe,array($it_chNFe),'210210','')); ????????????????????????????????????????????????????????????????????????????????????
		}
	}
	
	return true;
}


// CARTA DE CORREÇÃO - PROCESSO DE LEITURA DE XML E INSERÇÃO DE DADOS NA TABELA T_NFESYSLOG_ENTRADA_LISTA
function procCCe($v_CCE,$xml,$nfe) {
	global $db_nfe;
	global $CNPJ_EMITENTE;
	
	foreach ($v_CCE as $value) {
		$it_chNFe = $value['chNFe'];
		$it_NSU = $value['NSU'];
		$it_CNPJ = $value['CNPJ'];
		$it_xCorrecao = strtoupper($value['xCorrecao']);
		$it_dhRecbto = $value['dhRecbto'];
		$it_tpNF = $value['$tpNF'];
		
		$dataset = $db_nfe->lookup("select count(*) from t_nfesyslog_entrada_lista where chave='".$it_chNFe."' and xcorrecao='".$it_xCorrecao."'");
		if ($dataset[0][0]=='0') {
			$db_nfe->exec("insert into t_nfesyslog_entrada_lista(nsu,tipo_retorno,chave,xnome,xcorrecao,data_inclusao,data_autorizacao,tipo_operacao,
			dados_gerais,cnpj_emitente,cnpj_destinatario,situacao_conf) values ('".$it_NSU."','CCE','".$it_chNFe."','','".$it_xCorrecao."',NOW(),
			'".$it_dhRecbto."','".$it_tpNF."','".$xml."','".$it_CNPJ."','".$CNPJ_EMITENTE."','')");
			
			//initManifDest($nfe,array($it_chNFe),'210210','')); ????????????????????????????????????????????????????????????????????????????????????
		}
	}
	
	return true;
}



// LISTA AS NFES DA SEFAZ EMITIDAS CONTRA O CNPJ DA INFOCO
function getListNFe_Bd($nfe) {
	global $AN,$tpAmb,$modSOAP,$db_nfe;
	$arr_nt = array();
	if ($xml = $nfe->getListNFe($AN, $indNFe, $indEmi, '', $tpAmb, $modSOAP, $arr_nt)){
	
		print_r($xml);
		/*
		$dom = new DOMDocument();
		$dom->preserveWhiteSpace = false;
		$dom->loadXML($xml);
		$dom->formatOutput = true;
		printf ("<pre>%s</pre>", htmlentities ($dom->saveXML()));
		*/
	
		$v_indCont = $arr_nt['indCont'];
		$v_NFe = $arr_nt['NFe'];
		$v_Canc = $arr_nt['Canc'];
		$v_CCE = $arr_nt['CCe'];
		
		$it_NSU = '';
		if(count($v_NFe)>0)  { $it_NSU = procNFe($v_NFe,$xml,$nfe); }
		if(count($v_Canc)>0) { $it_NSU = procCanc($v_Canc,$xml,$nfe); }
		if(count($v_CCE)>0)  { $it_NSU = procCCe($v_CCE,$xml,$nfe); }		
	}
	
	if($v_indCont==0) {
		return false;
	} else {
		return true;
	}
}

// INICIA O PROCESSO EM LOOP PARA LISTAR AS NFES DA SEFAZ EMITIDAS CONTRA O CNPJ DA INFOCO
function initGetList($nfe) {
	global $db_nfe;
	
	$rs_cont = $db_nfe->lookup("select count(*) from t_nfesyslog_entrada_lista");
	if ($rs_cont[0][0]=='0') { 
		//zeraUltNSU($nfe); ????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
	}
	while(1) {
		if (!getListNFe_Bd($nfe)) { sleep(1000); } else { sleep(3); }
	}
}

// INICIA O PROCESSO PARA BAIXAR UMA NFE EMITIDA CONTRA O CNPJ DA INFOCO (SOMENTE COM MANIFESTAÇÃO)
function initGetNFe($nfe,$chNFe) {
	global $AN,$tpAmb,$modSOAP,$db_nfe;
	if($chNFe!='') {	
		if($xml_nfe = $nfe->getNFe($AN,$chNFe,$tpAmb,$modSOAP)){
			$obj = new xml2array($xml_nfe);
			$xml_arr = $obj->getArray();
			//echo "<pre>";
			//print_r($xml_arr);
			

			// DADOS PARA NFESYSLOG - MYSQL
			$v_natureza_operacao = $xml_arr['soap:Envelope']['soap:Body']['nfeDownloadNFResult']['retDownloadNFe']['retNFe']['procNFe']['nfeProc']['NFe']['infNFe']['ide']['natOp']['#text'];
			$v_numero_nota = $xml_arr['soap:Envelope']['soap:Body']['nfeDownloadNFResult']['retDownloadNFe']['retNFe']['procNFe']['nfeProc']['NFe']['infNFe']['ide']['nNF']['#text'];
			$v_serie_nota = $xml_arr['soap:Envelope']['soap:Body']['nfeDownloadNFResult']['retDownloadNFe']['retNFe']['procNFe']['nfeProc']['NFe']['infNFe']['ide']['serie']['#text'];
			$v_emitente = $xml_arr['soap:Envelope']['soap:Body']['nfeDownloadNFResult']['retDownloadNFe']['retNFe']['procNFe']['nfeProc']['NFe']['infNFe']['emit']['xNome']['#text'];
			$v_chave_nfe = $xml_arr['soap:Envelope']['soap:Body']['nfeDownloadNFResult']['retDownloadNFe']['retNFe']['procNFe']['nfeProc']['protNFe']['infProt']['chNFe']['#text'];
			$v_cpfcnpj_emitente = $xml_arr['soap:Envelope']['soap:Body']['nfeDownloadNFResult']['retDownloadNFe']['retNFe']['procNFe']['nfeProc']['NFe']['infNFe']['emit']['CNPJ']['#text'];
			$v_data_emissao = $xml_arr['soap:Envelope']['soap:Body']['nfeDownloadNFResult']['retDownloadNFe']['retNFe']['procNFe']['nfeProc']['NFe']['infNFe']['ide']['dEmi']['#text'];
			$v_cpfcnpj_destinatario = $xml_arr['soap:Envelope']['soap:Body']['nfeDownloadNFResult']['retDownloadNFe']['retNFe']['procNFe']['nfeProc']['NFe']['infNFe']['dest']['CNPJ']['#text'];
			$v_tipo_ambiente = $xml_arr['soap:Envelope']['soap:Body']['nfeDownloadNFResult']['retDownloadNFe']['retNFe']['procNFe']['nfeProc']['NFe']['infNFe']['ide']['tpAmb']['#text'];
			$v_protocolo = $xml_arr['soap:Envelope']['soap:Body']['nfeDownloadNFResult']['retDownloadNFe']['retNFe']['procNFe']['nfeProc']['protNFe']['infProt']['nProt']['#text'];
			


			$rs_check = $db_nfe->lookup("select id_nfesyslog_entrada from t_nfesyslog_entrada where chave_nfe='".$v_chave_nfe."'");
			if(!empty($rs_check)) {
				$db_nfe->exec("delete from t_xml_nfesyslog_entrada where id_nfesyslog_entrada='".$rs_check[0][0]."'");
				$db_nfe->exec("delete from t_nfesyslog_entrada where id_nfesyslog_entrada='".$rs_check[0][0]."'");
				unset($rs_check);
			}

			$db_nfe->exec("insert into t_nfesyslog_entrada (
			natureza_operacao,
			numero_nota,
			serie_nota,
			emitente,
			chave_nfe,
			cpfcnpj_emitente,
			data_emissao,
			cpfcnpj_destinatario,
			tipo_ambiente,
			protocolo,
			situacao,
			data_inclusao) values (
			upper('".$v_natureza_operacao."'),
			'".$v_numero_nota."',
			'".$v_serie_nota."',
			'".$v_emitente."',
			'".$v_chave_nfe."',
			'".$v_cpfcnpj_emitente."',
			'".$v_data_emissao."',
			'".$v_cpfcnpj_destinatario."',
			'".$v_tipo_ambiente."',
			'".$v_protocolo."',
			'I',
			NOW())");

			$rs = $db_nfe->lookup("select id_nfesyslog_entrada from t_nfesyslog_entrada where chave_nfe='".$v_chave_nfe."'");
			if (!empty($rs)) {
				$db_nfe->exec("insert into t_xml_nfesyslog_entrada (id_nfesyslog_entrada,xml) values ('".$rs[0][0]."','".addslashes($obj->getString())."')");
				$db_nfe->exec("update t_nfesyslog_entrada set situacao='A' where id_nfesyslog_entrada='".$rs[0][0]."'");
				unset($rs);
			}
		}
	}
}

// INICIA O PROCESSO PARA MANIFESTAR SOBRE A NFE EMITIDA CONTRA O CNPJ DA INFOCO
function initManifDest($nfe,$aChaves,$tpEvento,$xJust=null) {
	global $AN,$tpAmb,$modSOAP,$db_nfe;
	$resp = array();	
	
	/*
		Situação da Manifestação do Destinatário:
		0=Sem Manifestação do Destinatário;
		1=Confirmada Operação;
		2=Desconhecida;
		3=Operação não Realizada;
		4=Ciência;
	*/
	$arr_sit['210200'] = 1;
	$arr_sit['210210'] = 4;
	$arr_sit['210220'] = 2;
	$arr_sit['210240'] = 3;
	
	foreach($aChaves as $chNFe) {
		$resp = array();
		$rs_ch = $db_nfe->lookup("select id_nfesyslog_entrada_lista from t_nfesyslog_entrada_lista where chave = '".$chNFe."'");
		if($rs_ch[0][0]!='') {
			$id_nfesyslog_entrada_lista = $rs_ch[0][0];

			if ($nfe->manifDest($chNFe,$tpEvento,$xJust,$tpAmb,$modSOAP,$resp)) {
				if ($resp['bStat']) {
					$db_nfe->exec("insert into t_nfesyslog_manifestacao(id_nfesyslog_entrada_lista,data_hora,cstat,xmotivo,arquivo) values('".$id_nfesyslog_entrada_lista."',NOW(),'".$resp['cStat']."','".$resp['xMotivo']."','".addslashes(file_get_contents($resp['arquivo']))."')");
					$db_nfe->exec("update t_nfesyslog_entrada_lista set situacao_conf='".$arr_sit[$tpEvento]."' where id_nfesyslog_entrada_lista = '".$id_nfesyslog_entrada_lista."'");
					initGetNFe($nfe,$chNFe);
				}
			}
		}
	}
}

if($_GET['action']=='') { $_GET['action'] = 'LISTA'; } // ????????????????????????????????????????????????????????????????????????????????????????????????


// ACTION SUBMETIDO VIA GET PARA INICIAR PROCESSOS
switch ($_GET['action']) {
	case 'LISTA': 
		initGetList($auto); 
		break;
		
	case 'MANIFESTA': 
		/*
		* 	Manifestação do detinatário NT2012-002.
		*     210200 – Confirmação da Operação
		*     210210 – Ciência da Operação
		*     210220 – Desconhecimento da Operação
		*     210240 – Operação não Realizada
		*/
		initManifDest($auto,$_GET['arr_chaves'],$_GET['evento'],strtoupper($_GET['xjust']));
		break;
		
	case 'DOWNLOAD':
		initGetNFe($auto,$_GET['chave_nfe']);
		break;
}

?>