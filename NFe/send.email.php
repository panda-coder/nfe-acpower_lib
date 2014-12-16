<?php
	require_once('NfeSylogEmailH.class.php');


	function getEmailSender($cpfcnpj){

		global $db_nfe;

		$dataset = $db_nfe->lookup("select count(*) from t_email_origem WHERE cpfcnpj='$cpfcnpj'");
		if ( empty($dataset) ){
			throw new Exception('Erro. Conta inexistente' . PHP_EOL);
			return FALSE;
		}


		$dataset = $db_nfe->lookup("select id_email_origem, smtp, porta, usuario, senha, email, ordem from t_email_origem where proximo='S' and cpfcnpj='$cpfcnpj'");
		if ( empty($dataset) ){
			$dataset = $db_nfe->lookup("select id_email_origem, smtp, porta, usuario, senha, email, ordem from t_email_origem where ordem='1' and cpfcnpj='$cpfcnpj'");

			if ( empty($dataset) ){
				throw new Exception('Erro. Conta inexistente' . PHP_EOL);
				return FALSE;
			}

		}



		list($id_conta_email, $smtp, $porta, $login, $senha, $email, $ordem) = $dataset[0];


		$db_nfe->exec("update t_email_origem set proximo='N' WHERE id_email_origem=$id_conta_email");

		$ordem_m = $ordem+1;

		$dataset = $db_nfe->lookup("select id_email_origem from  t_email_origem where ordem=$ordem_m and cpfcnpj='$cpfcnpj'");


		if ( !empty($dataset) ){

			list($id_conta_email) = $dataset[0];
			$db_nfe->exec("update t_email_origem set proximo='S' WHERE id_email_origem=$id_conta_email");

		}else{

			$db_nfe->exec("update t_email_origem set proximo='S' WHERE ordem=1 and cpfcnpj='$cpfcnpj'");

		}



		return array($smtp, $porta, $login, $senha, $email);
	}


	$id = $_GET["id"];
	$email1 = $_GET["email"];


	$nfesyslog = new NfeSyslog_x_bd($db_nfe, $id);
	$email_xml = $nfesyslog->getEmailDest();
	$razao_cliente = $nfesyslog->getDestinatario();
	$razao_emitente = $nfesyslog->getEmitente();
	$cnpj_cliente = $nfesyslog->getCNPJDest();
	$cnpj_emitente = $nfesyslog->getCNPJEmit();



	/*******************************************************

	*******************************************************/

	$emailH = new NfeSylogEmailH();


	list($smtp, $porta, $login, $senha, $email) = getEmailSender($cnpj_emitente);



	$emailH->setSmtpHost($smtp);
	$emailH->setSmtpPort($porta);
	$emailH->setLogin($login);
	$emailH->setPassword($senha);
	$emailH->setEmailSender($email);

	$emailH->setAssunto("NFe da nota " . $nfesyslog->getNumeroNota() );
	$emailH->setMensagem("Em anexo a nota " . $nfesyslog->getNumeroNota() . " com a chave: " . $nfesyslog->getChave() );

	$emailH->setRemetente("$email", "$razao_emitente");




	if ( !empty($email1) ){
		$emailH->addDestinatario($email1, $razao_cliente);
	}






	$docxml = $nfesyslog->getXML();



	$danfe = new DanfeNFePHP($docxml,$auto->danfepaper,$auto->danfeform,$auto->danfelogopath,'S','',$auto->danfefont);


	$chave = $nfesyslog->getChave();
	$pdfName = $chave . ".pdf";
	$xmlName = $chave . "-nfe.xml";


	$danfe->montaDANFE();

	try{
		$pdfFile = (string) $danfe->printDANFE('', 'S');
	}catch(Exception $e){
		echo "erro " . $e->getMessage();
	}


	$emailH->AddAnexoString($pdfFile, $pdfName, 'base64');
	$emailH->AddAnexoString($docxml, $xmlName, 'base64');


	//$emailH->ShowDataEmail();
	$emailH->StartNSend();

	$contacts = $emailH->getTO();

	$emails = array_map(function($item) { return $item['email']; }, $contacts);

	//$emails = var_dump( array_column( $contacts, "email" ) );

	$emails = implode(",", $emails);

	$nfesyslog->saveEnvioEmail($emails);





	echo "email enviado";

?>