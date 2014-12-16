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
	
	/*****
	 	Changlog:
	 		12/08/2013  - Conexão no construct... tentativa de 3 vezes...
	 		12/08/2013b - Implementado função isConnected.. retorna se está conectado
	 *****/
	
	define('TIME_TO_WRITE', 1);
	define('TIME_TO_CONSULT', 1);
	

	class DBConn{
		private $host, $user, $password, $sgdb, $debug;
		
		private $conn;
		private $connected;
		private $onDemmand;
		private $querys;
		private $save_name;
		private $write_xml;
		
		
		function __construct($host = 'mysql:dbname=nfesyslog;host=192.168.16.5', $user = 'nfesyslog', $password = 'syslognfe', $start_con = 'S', $on_demmand= 'S', $debug = 0){
			
			$this->host = $host;
			$this->user = $user;
			$this->password = $password;
			$this->connected = false;
			
			$this->debug = $debug;
			
			if ( $start_con == 'S' ){
				//Tenta conectar com o banco 3 vezes... dando pausa entre elas..
				for ($i=0; $i<3; $i++){
					if ( $this->connect() ){
						break;
					}
					sleep(3);
				}
				
			}
			
			$write_xml = false;
			
			$this->querys = array();
			$this->querys["consults"] = array();
			$this->querys["execution"] = array();
			$this->save_name = date("Ymd_hmi");
		}
		
		public function connect(){
			$ret = false;
		
			try {
			    $this->conn = new PDO($this->host, $this->user, $this->password);
			    $this->connected = true;
			    $ret = true;
			} catch (PDOException $e) {
			    echo 'Connection failed: ' . $e->getMessage();
			}
			
			return $ret; //Retorna resultado de conexão sucedida
		}
		
		public function isConnected(){
			return $this->connected;
		}
		
		
		public function lookup($sql){
			
			$query_data = array();
			$query_data["init"] = date("Y-m-d H:m:i");
			
			$mtime = microtime();
   			$mtime = explode(" ",$mtime);
   			$mtime = $mtime[1] + $mtime[0];
   			$starttime = $mtime; 
		
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
			
			$mtime = microtime();
			$mtime = explode(" ",$mtime);
			$mtime = $mtime[1] + $mtime[0];
			$endtime = $mtime;
			$totaltime = ($endtime - $starttime);
			
			$query_data["time_spent"] = $totaltime." seconds";
			$query_data["finish"] = date("Y-m-d H:m:i");
			
			if ( $totaltime > TIME_TO_CONSULT ){
			
				$query_data["query_executed"] = $sql;
				$this->querys["consults"][] = $query_data;
				$this->write_xml = true;
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
				
				$query_data = array();
				$query_data["init"] = date("Y-m-d H:m:i");
					
				$mtime = microtime();
				$mtime = explode(" ",$mtime);
				$mtime = $mtime[1] + $mtime[0];
				$starttime = $mtime;
			
			
				$result = $this->conn->exec($sql);
				
				$mtime = microtime();
				$mtime = explode(" ",$mtime);
				$mtime = $mtime[1] + $mtime[0];
				$endtime = $mtime;
				$totaltime = ($endtime - $starttime);
					
				$query_data["time_spent"] = $totaltime." seconds";
				$query_data["finish"] = date("Y-m-d H:m:i");
				
				if ( $totaltime > TIME_TO_WRITE ){
					$query_data["query_executed"] = $sql;
					$this->querys["consults"][] = $query_data;
					$this->write_xml = true;
				}
				
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
		
		function __destruct(){
			
			if ( $this->write_xml ){
			
				$xml = new SimpleXMLElement('<DataBaseData/>');
				$this->array_to_xml($this->querys, $xml);
				
				$xml_content = $xml->asXML();
	
				$PATH = dirname(__FILE__) . DIRECTORY_SEPARATOR . "nfe_logs" . DIRECTORY_SEPARATOR;
				$filename = $this->save_name . '.xml';
				
				$n = 0;
				
				while(1){
					$filename = $this->save_name . "{$n}.xml";
					if ( is_file($PATH . $filename) ){
						$n++;
					}else{
						file_put_contents($PATH . $filename, $xml_content);
						break;
					}
				}
			}
			
			
		}
		
		private function array_to_xml($array, &$xml) {
			foreach($array as $key => $value) {
				
				if(is_array($value)) {
					if(!is_numeric($key)){
						$subnode = $xml->addChild("$key");
						$this->array_to_xml($value, $subnode);
					}else{
						$subnode = $xml->addChild("Item");
						$subnode->addAttribute("id", "$key");
						$this->array_to_xml($value, $subnode);
					}
				}else {
					$xml->addChild("$key","$value");
				}
				
			}
		}
		
	}

?>