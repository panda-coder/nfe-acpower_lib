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

	echo "<pre>";


	$sql = "SELECT id_nfesyslog FROM t_nfesyslog WHERE cpfcnpj='{$CNPJ_EMITENTE}' and ifnull(email_enviado,'N')='N' and situacao='A' and protocolo is not null order by 1 desc limit 0,50";
	$dataset = $db_nfe->lookup($sql);
	

	foreach($dataset as $nfemail){
		try{

			list($id) = $nfemail;
			
			
			$somente_danfe = array();
			$somente_xml = array();
			$ambos = array();
			
			
			$nfesyslog = new NfeSyslog_x_bd($db_nfe, $id);
			$email_xml = $nfesyslog->getEmailDest();
			$razao_cliente = $nfesyslog->getDestinatario();
			$razao_emitente = $nfesyslog->getEmitente();
			$cnpj_cliente = $nfesyslog->getCNPJDest();
			$cnpj_emitente = $nfesyslog->getCNPJEmit();


			/*******************************************************
	
			*******************************************************/

			
			//id_tipo_destinatario 2 = cliente
			$sql = "select email1, email2, email3, email4, envia_danfe, envia_xml from t_email_nfesyslog where id_tipo_destinatario=2 and cpfcnpj='$cnpj_cliente'";
			$dataset2 = $db_nfe->lookup($sql);
			foreach($dataset2 as $email_cliente){
				list($email1, $email2, $email3, $email4, $envia_danfe, $envia_xml) = $email_cliente;

				if ( !empty($email1) ){
					if ( $envia_danfe == "S" && $envia_xml == "S"){
						array_push($ambos, $email1);
					}elseif ($envia_danfe == "S"){
						array_push($somente_danfe, $email1);
					}elseif ($envia_xml == "S"){
						array_push($somente_xml, $email1);
					}
				}

				if ( !empty($email2) ){
					if ( $envia_danfe == "S" && $envia_xml == "S"){
						array_push($ambos, $email2);
					}elseif ($envia_danfe == "S"){
						array_push($somente_danfe, $email2);
					}elseif ($envia_xml == "S"){
						array_push($somente_xml, $email2);
					}
				}

				if ( !empty($email3) ){
					if ( $envia_danfe == "S" && $envia_xml == "S"){
						array_push($ambos, $email3);
					}elseif ($envia_danfe == "S"){
						array_push($somente_danfe, $email3);
					}elseif ($envia_xml == "S"){
						array_push($somente_xml, $email3);
					}
				}

				if ( !empty($email4) ){
					if ( $envia_danfe == "S" && $envia_xml == "S"){
						array_push($ambos, $email4);
					}elseif ($envia_danfe == "S"){
						array_push($somente_danfe, $email4);
					}elseif ($envia_xml == "S"){
						array_push($somente_xml, $email4);
					}
				}
			}



			//id_tipo_destinatario 1 = emitente
			$sql = "select email1, email2, email3, email4, envia_danfe, envia_xml from t_email_nfesyslog where id_tipo_destinatario=1 and cpfcnpj='{$CNPJ_EMITENTE}'";
			$dataset2 = $db_nfe->lookup($sql);
			foreach($dataset2 as $email_cliente){
				list($email1, $email2, $email3, $email4, $envia_danfe, $envia_xml) = $email_cliente;
				
				if ( !empty($email1) ){
					if ( $envia_danfe == "S" && $envia_xml == "S"){
						array_push($ambos, $email1);
					}elseif ($envia_danfe == "S"){
						array_push($somente_danfe, $email1);
					}elseif ($envia_xml == "S"){
						array_push($somente_xml, $email1);
					}
				}

				if ( !empty($email2) ){
					if ( $envia_danfe == "S" && $envia_xml == "S"){
						array_push($ambos, $email2);
					}elseif ($envia_danfe == "S"){
						array_push($somente_danfe, $email2);
					}elseif ($envia_xml == "S"){
						array_push($somente_xml, $email2);
					}
				}

				if ( !empty($email3) ){
					if ( $envia_danfe == "S" && $envia_xml == "S"){
						array_push($ambos, $email3);
					}elseif ($envia_danfe == "S"){
						array_push($somente_danfe, $email3);
					}elseif ($envia_xml == "S"){
						array_push($somente_xml, $email3);
					}
				}

				if ( !empty($email4) ){
					if ( $envia_danfe == "S" && $envia_xml == "S"){
						array_push($ambos, $email4);
					}elseif ($envia_danfe == "S"){
						array_push($somente_danfe, $email4);
					}elseif ($envia_xml == "S"){
						array_push($somente_xml, $email4);
					}
				}
			}

			$chave = $nfesyslog->getChave();
			
			//Dados XML
			$docxml = $nfesyslog->getXML();
			$xmlName = $chave . "-nfe.xml";
			
			//Dados DANFE
			$danfe = new DanfeNFePHP($docxml,$auto->danfepaper,$auto->danfeform,$auto->danfelogopath,'S','',$auto->danfefont);
			$pdfName = $chave . ".pdf";
			$danfe->montaDANFE();
			try{
				$pdfFile = (string) $danfe->printDANFE('', 'S');
			}catch(Exception $e){
				echo "erro " . $e->getMessage();
			}
			
			
			/***
			 OLD
			 
			if ( !empty($email_xml) ){
					
				$emails_c = explode(";", $email_xml);
				foreach($emails_c as $add_mail){
						
					if (!empty($add_mail)){
						$emailH->addDestinatario($add_mail, $razao_cliente);
						//echo $add_mail."<br>";
					}
				}
					
			}
			*/
			if ( !empty($email_xml) ){
					
				$emails_c = explode(";", $email_xml);
				foreach($emails_c as $add_mail){
			
					if (!empty($add_mail)){
						//Verifica se o email no xml não está em nenhuma dos vetores
						if ( !in_array($add_mail, $somente_danfe) && !in_array($add_mail, $somente_xml) && !in_array($add_mail, $ambos)){
							array_push($ambos, $add_mail);
						}
					}
				}
					
			}
			
			if ( !empty($somente_danfe)){
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
				foreach($somente_danfe as $email_envia){
					//TODO
					$emailH->addDestinatario($email_envia, $razao_cliente);
				}
				$emailH->AddAnexoString($pdfFile, $pdfName, 'base64');
				$emailH->StartNSend();
				
				$contacts = $emailH->getTO();
				$emails = array_map(function($item) { return $item['email']; }, $contacts);
				$emails = implode(",", $emails);
				
				$nfesyslog->saveEnvioEmail($emails); //Grava no banco o envio de emails
			}
			
			
			if ( !empty($somente_xml)){
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
				foreach($somente_xml as $email_envia){
					//TODO
					$emailH->addDestinatario($email_envia, $razao_cliente);
					
				}
				$emailH->AddAnexoString($docxml, $xmlName, 'base64');
				$emailH->StartNSend();
				
				$contacts = $emailH->getTO();
				$emails = array_map(function($item) { return $item['email']; }, $contacts);
				$emails = implode(",", $emails);
				
				$nfesyslog->saveEnvioEmail($emails); //Grava no banco o envio de emails
			}
			
			if ( !empty($ambos)){
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
				foreach($somente_danfe as $email_envia){
					//TODO
					$emailH->addDestinatario($email_envia, $razao_cliente);
				}
				$emailH->AddAnexoString($pdfFile, $pdfName, 'base64');
				foreach($ambos as $email_envia){
					//TODO
					$emailH->addDestinatario($email_envia, $razao_cliente);
				}
				$emailH->AddAnexoString($pdfFile, $pdfName, 'base64');
				$emailH->AddAnexoString($docxml, $xmlName, 'base64');
				$emailH->StartNSend();
				
				$contacts = $emailH->getTO();
				$emails = array_map(function($item) { return $item['email']; }, $contacts);
				$emails = implode(",", $emails);
				
				$nfesyslog->saveEnvioEmail($emails); //Grava no banco o envio de emails
			}			

			//$emailH->ShowDataEmail();
			/*$emailH->StartNSend();

			$contacts = $emailH->getTO();

			$emails = array_map(function($item) { return $item['email']; }, $contacts);

			//$emails = var_dump( array_column( $contacts, "email" ) );

			$emails = implode(",", $emails);

			$nfesyslog->saveEnvioEmail($emails);*/

		}catch (Exception $e) {
		  echo $e->getMessage();
		}
	//}
	}

	/*$emailH = new NfeSylogEmailH();

	$emailH->setSmtpHost("smtp.acpower.com.br");
	$emailH->setSmtpPort("587");
	$emailH->setLogin("desenvolvimento@acpower.com.br");
	$emailH->setPassword("firedev001");
	$emailH->setEmailSender("desenvolvimento@acpower.com.br");

	$emailH->setAssunto("Teste Email NFE");
	$emailH->setMensagem("Este é um email teste com anexo de pdf com xml");

	$emailH->addDestinatario("fireball.vb@gmail.com", "Ercy Moreira Neto");
	$emailH->setRemetente("desenvolvimento@acpower.com.br", "Desenvolvimento");



	$nfesyslog = new NfeSyslog_x_bd($db_nfe, 1);*/







	//$emailH->StartNSend();
	echo "</pre>";
	echo "email enviado";

?>