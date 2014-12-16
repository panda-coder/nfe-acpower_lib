<?php
	function __error_handle($errno, $errstr, $errfile, $errline, $errcontext){

		switch($errno){
					case E_WARNING:
						return;
						break;
					case E_NOTICE:
						return;
						break;
					case E_DEPRECATED:
						return;
						break;
					case E_USER_ERROR:
						break;
					case E_USER_WARNING:
						break;
					case E_USER_NOTICE:
						break;
					case E_RECOVERABLE_ERROR:
						break;
					case E_ALL:
						break;
		}


		$nome_arquivo = dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'error_logs/' . date('Ymdhiu') . '.html';

		ob_start();
		var_dump($errcontext);

		$content = ob_get_contents();

		ob_end_clean();

		$txt =  "
		----------------------------------------------------------------------------- <br/>ERRO NUMERO:  $errno <br/>
		DESCRICAO: $errstr <br/>
		Arquivo: $errfile <br/>
		Linha: $errline <br/>
		Conteudo: <pre>$content</pre> <br/>
		----------------------------------------------------------------------------- <br/>
		";

		file_put_contents($nome_arquivo, $txt, FILE_APPEND);






	}
	
	function exception_handler($exception) {
	
		$nome_arquivo = dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'error_logs/exc' . date('Ymdhiu') . '.html';
		
		$text = "Uncaught exception: " . $exception->getMessage() . "\n";
		
		file_put_contents($nome_arquivo, $txt, FILE_APPEND);
	}

	set_error_handler("__error_handle");
	set_exception_handler('exception_handler');
?>