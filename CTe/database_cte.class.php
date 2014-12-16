<?php

	define('DATABASE_SYSNFE', 'TRUE');
	
	/*
	
		Old Code:
			$dsn = 'mysql:dbname=;host=127.0.0.1';
			$user = '';
			$password = '';
			
			
			try {
				$database_conn = new PDO($dsn, $user, $password);
			} catch (PDOException $e) {
				echo 'Connection failed: ' . $e->getMessage();
	}*/
	
	

	class DBConn{
		private $host, $user, $password, $sgdb, $debug;
		
		private $conn;
		
		
		function __construct($host = 'mysql:dbname=nfesyslog;host=127.0.0.1', $user = 'nfesyslog', $password = 'syslognfe', $start_con = 'S', $debug = 0){
			
			$this->host = $host;
			$this->user = $user;
			$this->password = $password;
			
			$this->debug = $debug;
			
			if ( $start_con == 'S' ){
				$this->connect();
			}
		}
		
		public function connect(){
		
			try {
			    $this->conn = new PDO($this->host, $this->user, $this->password);
			} catch (PDOException $e) {
			    echo 'Connection failed: ' . $e->getMessage();
			}
			
		}
		
		
		public function lookup($sql){
		
			if ($this->debug){
				echo $sql . PHP_EOL;
			}
		
			$dtset = $this->conn->query($sql);
			
			$result = NULL;
			
			if (!$dtset){
				throw new Exception('Error on the query!' . $sql);
			}else{
				$result = $dtset->fetchAll();
			}
			
		
			return $result;
			
		}
		
		public function debugOn(){
			$this->debug = TRUE;
		}
		
		
		public function exec($sql){
			
			try{
				if ($this->debug){
					echo $sql . PHP_EOL;
				}
			
			
				$result = $this->conn->exec($sql);
			} catch (PDOException $e) {
				echo $e->getCode(); 
				echo $e->getMessage(); 
				
				$nome_arquivo = dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'error_logs/' . date('Ymdhiu') . '.html';

				file_put_contents($nome_arquivo, $e->getCode() . $e->getMessage(), FILE_APPEND);
			} 
			
			if ( $result === FALSE ){ //Compara com 3 = para garantir que o retorno seja booleano
				$arr_err = $this->conn->errorInfo();
				array_push($arr_err, $sql);
				$error = print_r($arr_err);
				//throw new Exception("Error" . $error);
				echo $error;
			}
			
			return $result;
			
		}
		
		public function lastInsertId(){
			return $this->conn->lastInsertId();
		}
		
	}

?>