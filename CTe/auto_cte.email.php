<?php
	require_once('NfeSylogEmailH.class.php');


	function getEmailSender($cpfcnpj){

		global $db_cte;

		$dataset = $db_cte->lookup("select count(*) from t_email_origem WHERE cpfcnpj='$cpfcnpj'");
		if ( empty($dataset) ){
			throw new Exception('Erro. Conta inexistente' . PHP_EOL);
			return FALSE;
		}


		$dataset = $db_cte->lookup("select id_email_origem, smtp, porta, usuario, senha, email, ordem from t_email_origem where proximo='S' and cpfcnpj='$cpfcnpj'");
		if ( empty($dataset) ){
			$dataset = $db_cte->lookup("select id_email_origem, smtp, porta, usuario, senha, email, ordem from t_email_origem where ordem='1' and cpfcnpj='$cpfcnpj'");

			if ( empty($dataset) ){
				throw new Exception('Erro. Conta inexistente' . PHP_EOL);
				return FALSE;
			}

		}



		list($id_conta_email, $smtp, $porta, $login, $senha, $email, $ordem) = $dataset[0];


		$db_cte->exec("update t_email_origem set proximo='N' WHERE id_email_origem=$id_conta_email");

		$ordem_m = $ordem+1;

		$dataset = $db_cte->lookup("select id_email_origem from  t_email_origem where ordem=$ordem_m and cpfcnpj='$cpfcnpj'");


		if ( !empty($dataset) ){

			list($id_conta_email) = $dataset[0];
			$db_cte->exec("update t_email_origem set proximo='S' WHERE id_email_origem=$id_conta_email");

		}else{

			$db_cte->exec("update t_email_origem set proximo='S' WHERE ordem=1 and cpfcnpj='$cpfcnpj'");

		}



		return array($smtp, $porta, $login, $senha, $email);
	}

	echo "<pre>";


	$dataset = $db_cte->lookup("SELECT id_ctesyslog FROM t_ctesyslog WHERE data_email is null and situacao='A' and protocolo is not null and date_format(data_emissao,'%d/%m/%Y') = date_format(NOW(),'%d/%m/%Y')");

	foreach($dataset as $ctemail){


		list($id) = $ctemail;

		$ctesyslog = new CteSyslog_x_bd($db_cte, $id);
		//$email_xml = $ctesyslog->getEmailDest();
		//$razao_cliente = $ctesyslog->getDestinatario();
		//$cnpj_cliente = $ctesyslog->getCNPJDest();
		$razao_emitente = $ctesyslog->getEmitente();
		$cnpj_emitente = $ctesyslog->getCNPJEmit();
		$cnpj_tomador = $ctesyslog->getCNPJTomador();
		$razao_tomador = $ctesyslog->getTomador();



		/*******************************************************

		*******************************************************/

		$emailH = new NfeSylogEmailH();

		try{
			list($smtp, $porta, $login, $senha, $email) = getEmailSender($cnpj_emitente);



			$emailH->setSmtpHost($smtp);
			$emailH->setSmtpPort($porta);
			$emailH->setLogin($login);
			$emailH->setPassword($senha);
			$emailH->setEmailSender($email);

			$emailH->setAssunto("CTe da nota " . $ctesyslog->getNumeroNota() );
			$emailH->setMensagem("Em anexo a nota " . $ctesyslog->getNumeroNota() . " com a chave: " . $ctesyslog->getChave() );

			$emailH->setRemetente("$email", "$razao_emitente");
			/*

			if ( !empty($email_xml) ){

				$emails_c = explode(";", $email_xml);
				foreach($emails_c as $add_mail){

					if (!empty($add_mail)){
						$emailH->addDestinatario($add_mail, $razao_cliente);
						//echo $add_mail;
					}
				}

			}
			*/
			
			

			/*
			//id_tipo_destinatario 3 = tomador
			$sql = "select email1, email2, email3, email4 from t_email_nfesyslog where id_tipo_destinatario=3 and cpfcnpj='$cnpj_tomador'";
			$dataset2 = $db_cte->lookup($sql);
			foreach($dataset2 as $email_cliente){
				list($email1, $email2, $email3, $email4) = $email_cliente;
				//echo "Email cadastrado para envio: $email1, $email2, $email3, $email4... cliente";

				if ( !empty($email1) ){
					$emailH->addDestinatario($email1, $razao_cliente);
				}

				if ( !empty($email2) ){
					$emailH->addDestinatario($email1, $razao_cliente);
				}

				if ( !empty($email3) ){
					$emailH->addDestinatario($email1, $razao_cliente);
				}

				if ( !empty($email4) ){
					$emailH->addDestinatario($email1, $razao_cliente);
				}
			}
			
			//id_tipo_destinatario 1 = emitente
			$sql = "select email1, email2, email3, email4 from t_email_ctesyslog where id_tipo_destinatario=1 and cpfcnpj='$cnpj_emitente'";
			$dataset2 = $db_cte->lookup($sql);
			foreach($dataset2 as $email_cliente){
				list($email1, $email2, $email3, $email4) = $email_cliente;
				echo "Email cadastrado para envio: $email1, $email2, $email3, $email4... emitente";

				if ( !empty($email1) ){
					$emailH->addDestinatario($email1, $razao_cliente);
				}

				if ( !empty($email2) ){
					$emailH->addDestinatario($email1, $razao_cliente);
				}

				if ( !empty($email3) ){
					$emailH->addDestinatario($email1, $razao_cliente);
				}

				if ( !empty($email4) ){
					$emailH->addDestinatario($email1, $razao_cliente);
				}
			}
			*/

			$emailH->addDestinatario('lipe07@gmail.com', 'teste');
			$docxml = $ctesyslog->getXML();
			


			$dacte = new DacteNFePHP($docxml,"P","A4","C:\\Arquivos de programas\\NetMake\\v7\\wwwroot\\nfephp\\images\\logoinfoco.jpg",'S',$auto->pdfDir,"Times");
			
			$chave = $ctesyslog->getChave();
			$pdfName = $chave . ".pdf";
			$xmlName = $chave . "-cte.xml";


			$dacte->monta('P');

			try{
				$pdfFile = (string) $dacte->printDACTE('', 'S');
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

			$ctesyslog->saveEnvioEmail($emails);
			
		}catch (Exception $e) {
		  echo $e->getMessage();
		}

	}

	echo "</pre>";
	echo "email enviado";

?>