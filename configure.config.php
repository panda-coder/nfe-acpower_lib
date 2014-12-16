<?php
	require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>:: Configurador Emissor de NFe ::</title>

<style>

html, body{
	margin: 0;
	padding: 0;
}

body{
	background-color: #EEEEEE;
}

#form_config{
	background-color: rgba(230,230,250,0.3);
	border: 2px solid #000000;
	border-radius: 10px;
	width: 1100px;
	margin-left: auto;
	margin-right: auto;
	margin-top: 15px;
	padding: 15px;
	
}

#form_config label{
	width: 300px;
	text-align: right;
	background-color: rgba(176,196,222,0.4);
	display: block;
	float: left;
	border: 1px solid rgba(176,196,222,0.6);
	border-radius: 1px;
	margin-right: 5px;
}

#form_config span{
	color: #000000;
	font-weight: bold;
}
.infadd{
	font-style:italic;
	font-weight:normal;
	font-size: 10px;
}
input[type="text"]{
	background-color: rgba(176,196,222,0.2);
	border: 1px solid rgba(176,196,222,0.4);
	border-radius: 3px;
	display: block;
	
}
input[type="text"]:focus{
	background-color: rgba(0,0,0,0);
}

input[type="submit"]{
	background-color: rgba(176,196,222,0.2);
	border: 1px solid rgba(176,196,222,0.4);
	border-radius: 5px;
}
input[type="submit"]:hover{
	background-color: rgba(176,196,222,0.9);
	border: 1px solid rgba(176,196,222,1);
	border-radius: 5px;
}

</style>

</head>

<body>
	<hr/>
	<div id="form_config">
		<form action="save.config.php" method="POST">
		
			<center><span>:: Configuração do Acpowerlib ::</span></center><br/>
			<label>String de conexão</label><input type="text" name="STR_CONN" value="<?php echo $STR_CONN?>" size="80"/><br/>
			<label>Usuario de conexão</label><input type="text" name="USER_CONN" value="<?php echo $USER_CONN?>"  /><br/>
			<label>Senha de conexão</label><input type="text" name="PASS_CONN" value="<?php echo $PASS_CONN?>" /><br/>
			<label>Cnpj Emitente</label><input type="text" name="CNPJ_EMITENTE" value="<?php echo $CNPJ_EMITENTE?>" /><br/>
			<label>Path dos Serviços</label><input type="text" name="SERVICE_PHP_PATH" value="<?php echo $SERVICE_PHP_PATH?>" /><br/>
			<label>Arquivo de Servi&ccedil;o</label><input type="text" name="SERVICE_PHP_FILE" value="<?php echo $SERVICE_PHP_FILE?>" /><br/>
			<label>Arquivo de Servi&ccedil;o de impressao</label><input type="text" name="SERVICE_PHP_PRINT" value="<?php echo $SERVICE_PHP_PRINT?>" /><br/>
			<label>Arquivo de Servi&ccedil;o interno</label><input type="text" name="SERVICE_PHP_INTERNAL" value="<?php echo $SERVICE_PHP_INTERNAL?>"/><span class="infadd">(validação, envio de email e assinatura)</span><br/>
			<label>Pasta do programa de impressao</label><input type="text" name="PRINTER_PROGRAM_PATH" value="<?php echo $PRINTER_PROGRAM_PATH?>"  size="80"/><br/>
			<label>Arquivo do programa de impressao</label><input type="text" name="PRINTER_PROGRAM_FILE" value="<?php echo $PRINTER_PROGRAM_FILE?>"/><br/>
			<label>Pasta monitorada de PostScript</label><input type="text" name="PRINTER_WATCH" value="<?php echo $PRINTER_WATCH?>"/><span class="infadd">(normalmente c:\temp\*.ps)</span><br/>
			<label>URL do servico</label><input type="text" name="HTTP_SERVICE" value="<?php echo $HTTP_SERVICE?>" size="80" /><br/>
			<label>URL do servico(novo)</label><input type="text" name="HTTP_SERVICE_NEW" value="<?php echo $HTTP_SERVICE_NEW?>"   size="80"/><br/>
			<label>Url do processo interno</label><input type="text" name="HTTP_INTERNAL_SERVICE" value="<?php echo $HTTP_INTERNAL_SERVICE?>"   size="80" /><br/>
			<label>Url do processo email</label><input type="text" name="HTTP_EMAIL_SERVICE" value="<?php echo $HTTP_EMAIL_SERVICE?>"  size="80" /><br/>
			<label>Url do processo impressao</label><input type="text" name="HTTP_PRINT_SERVICE" value="<?php echo $HTTP_PRINT_SERVICE?>"  size="80" /><br/>
			<label>Caminho completo do PDFtoPS</label><input type="text" name="PDFTOPS_PROGRAM" value="<?php echo $PDFTOPS_PROGRAM?>"  size="80"/><br/>
			<label>Caminho completo do Foxit</label><input type="text" name="FOXIT_PROGRAM" value="<?php echo $FOXIT_PROGRAM?>"  size="80"/><br/>
			
			<br/>
			<center>
			<input type="submit" value="Salvar" name="Submit" />
			</center>
		</form>
	</div>
	<hr/>
</body>

</html>