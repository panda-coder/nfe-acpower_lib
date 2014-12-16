<?php

	/*foreach($_POST as $key => $sentPost){
		$$key = $sentPost;
	}*/
	
	$ChangeParams = $_POST;
	
	$template_filename = dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'config.template';
	$target_filename = dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'config2.php';

	$template_contents = file_get_contents( $template_filename );
	
	
	
	
	foreach($ChangeParams as $key => $item){
		$template_contents = str_replace("[$key]", $item, $template_contents);
	}
	
	file_put_contents( $target_filename, $template_contents);
?>

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
		Gravado com sucesso <a href="configure.config.php">Voltar</a>
	</div>
	<hr/>
</body>

</html>