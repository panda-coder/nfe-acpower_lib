<?php

	require_once('core.php');
	
	
	
	class NfeSylogEmailH{ //NFE SYSLOG Email Handler
	
		private $SMTP_HOST;
		private $SMTP_PORT;
		private $LOGIN;
		private $PASSWORD;
		private $EMAIL_SENDER;
		
		
		private $TO_CONTACT;
		private $FROM_CONTACT;
		
		
		
		private $ANEXOS;
		private $ANEXOS_STRING;
		
		
		private $MAILER;
		
		private $ASSUNTO, $MENSAGEM;
		
		private $STARTED;
		
		
		function __construct(){
		
			//
			$this->MAILER = new PHPMailer(true); 
			
			
			$this->MAILER->IsSMTP();
			$this->MAILER->SMTPAuth   = true;                   // habilita autienticação SMTP
			
			
			$this->MAILER->SMTPDebug  = 1;
			
			$this->STARTED = false;
		}
		
		
		
		public function Start(){
		
		
			if ( empty($this->SMTP_HOST) ){
				echo "Servidor SMTP não configurado";
				return FALSE;
			}
			
			if ( empty($this->SMTP_PORT) ){
				echo "Porta SMTP não configurado";
				return FALSE;
			}
			
			if ( empty($this->LOGIN) ){
				echo "Login SMTP não configurado";
				return FALSE;
			}
			
			if ( empty($this->PASSWORD) ){
				echo "Password SMTP não configurado";
				return FALSE;
			}
			
			if ( empty($this->ASSUNTO) ){
				echo "Email sem assunto";
				return FALSE;
			}
			
			if ( empty($this->MENSAGEM) ){
				echo "Email sem mensagem";
				return FALSE;
			}
			
			if ( empty($this->TO_CONTACT) ){
				//var_dump($this->TO_CONTACT);
				echo "Email sem destinatario";
				return FALSE;
			}
			
			if ( empty($this->FROM_CONTACT) ){
				echo "Email sem remetente";
				return FALSE;
			}
			
			
			$this->MAILER->Host = $this->SMTP_HOST;
			$this->MAILER->Port = $this->SMTP_PORT;
			

			$this->MAILER->Username   = $this->LOGIN;			// Nome do usuários do SMTP
			$this->MAILER->Password   = $this->PASSWORD;		// Password do usuário SMPT
			
			
			$this->MAILER->AddReplyTo($this->FROM_CONTACT["email"],$this->FROM_CONTACT["nome"]); //Indicação do email de retorno
			
			
			
			foreach($this->TO_CONTACT as $contact){
			
				$this->MAILER->AddAddress($contact["email"],$contact["alias"]);            // nome do destinatário
			
			}
			
			
			
            $this->MAILER->SetFrom($this->FROM_CONTACT["email"], $this->FROM_CONTACT["nome"]); //identificação do emitente
            $this->MAILER->Subject = $this->ASSUNTO;                  // Assunto
            //$this->MAILER->AltBody = $this->MENSAGEM;                  // Corpo a mensagem em txt
            $this->MAILER->MsgHTML($this->MENSAGEM);               // Corpo da mensagem em HTML
			
			
			
			foreach($this->ANEXOS AS $anexo){
			
				 if (is_file($anexo)){
					$this->MAILER->AddAttachment($anexo);          // Anexo
				}
				
			}
			
			
			foreach($this->ANEXOS_STRING AS $anexo){
			
					$this->MAILER->AddStringAttachment($anexo["string"],$anexo["filename"],$anexo["encoding"]);          // Anexo
					
			}
			
			
				

			$this->STARTED = TRUE;
			
		}
		
		public function AddAnexoString($string, $nome_arquivo, $encode){
			
			if ( $this->ANEXOS_STRING === NULL ){
				$this->ANEXOS_STRING = array();
			}
			
			array_push($this->ANEXOS_STRING, array( "string" => $string, "filename" => $nome_arquivo, "encoding" => $encode) );
			
		}
		
		
		
		
		public function setSmtpHost($var){
			//
			$this->SMTP_HOST = $var;
		}
		
		public function setSmtpPort($var){
			//
			$this->SMTP_PORT = $var;
		}
		
		public function  setLogin($var){
			//
			$this->LOGIN = $var;
		}
		
		public function setPassword($var){
			//
			$this->PASSWORD = $var;
		}
		
		public function setEmailSender($var){
			//
			$this->EMAIL_SENDER = $var;
		}
		
		public function setRemetente($email, $name){
			
			$this->FROM_CONTACT["email"] = $email;
			
			$this->FROM_CONTACT["nome"] = $name;
			
		}
		
		public function addDestinatario($email, $name){
			
			$contact = array();
			$contact["email"] = $email;
			$contact["alias"] = $name;
			
			if ( $this->TO_CONTACT === NULL ){
				$this->TO_CONTACT = array();
			}
			
			array_push($this->TO_CONTACT,$contact);
			//var_dump($this->TO_CONTACT);
		}
		
		public function setMensagem($msg){
			$this->MENSAGEM = $msg;
		}
		
		public function addMensagem($msg){
			$this->MENSAGEM .= $msg;
		}
		
		public function setAssunto($msg){
			$this->ASSUNTO = $msg;
		}
		
		
		
		public function Send(){
		
			if ( !$this->STARTED ){
				return utf8_encode("Erro. Configurações não estão setadas");
			}
			
			echo "Sending mail...";
			
			try{
		
				$this->MAILER->Send();
				
			}catch(phpmailerException $e) {
			  echo $e->errorMessage(); //Pretty error messages from PHPMailer
			} catch (Exception $e) {
			  echo $e->getMessage(); //Boring error messages from anything else!
			}
			
			echo "mail sent...";
			
			return  TRUE;
		}
		
		
		public function StartNSend(){
			
			if ( !$this->Start() ){
				$this->Send();
			}else{
				echo "Não foi possivel enviar";
			}
			
			
		}
		
		public function getTO(){
			return $this->TO_CONTACT;
		}
		
		
		public function ShowDataEmail(){
			//echo "ShowDataEmail()";
			
			echo "<b>Assunto:</b> " . $this->ASSUNTO . "<br/>";
			echo "<b>de:</b> " . $this->FROM_CONTACT["email"] . '"' . $this->FROM_CONTACT["nome"] . '"' . "<br/>";
			
		
			foreach($this->TO_CONTACT as $contact){
				
				
				echo "<b>Email:</b> " . $contact["email"] . '"' . $contact["alias"] . '"' . "<br/>";            // nome do destinatário
			
			}
			
			echo "<b>Mensagem:</b> " . $this->MENSAGEM . "<br/>";
			
			echo "<br/><br/><br/><br/>" . PHP_EOL . PHP_EOL;
			
		}
		
		
		
	}
	
?>