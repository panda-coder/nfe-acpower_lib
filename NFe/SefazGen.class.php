<?php
	require_once ('core.php');

	
	define('KILL_SIGNAL', 1);
	define('DELETE_SIGNAL', 2);


	interface SefazProcInterface{
		public function Run();
	}



	class SefazGen extends ToolsNFePHP{

		protected $DbConnection, $cnpj_emitente;
		protected $http_path, $process_file;
		protected $pid;

		/********* ManagerData ***************/
		protected $nop; //nop = number of process
		protected $tempo_max; //Tempo maximo permitido de execução de um processo
		protected $intervalo; //Tempo de intervalo de espera
		protected $maxLoop;
		/*************************************/


		function __construct(DBConn $dbconn, $cnpj, $aConfig = '', $debug = 0){
			global $HTTP_SERVICE;
			ob_implicit_flush(true); //Parametro para enviar a saida direto


			if ( empty($dbconn) ){
				throw new Exception("Objeto precisa ser instanciado com uma conexão de banco");
			}

			if ( empty($cnpj) ){
				throw new Exception("Cnpj não pode sem vazio");
			}

			//$debug = 1;
			//parent::__construct($aConfig, 1); //Debug
			parent::__construct($aConfig, $debug);

			$this->DbConnection = $dbconn;
			$this->cnpj_emitente = $cnpj;

			echo $var_host =  dirname($HTTP_SERVICE);
			$this->http_path = "{$var_host}/"; //Configurando o path base chamada de outros processos
			$this->process_file = "exec_file.php"; //Configurando o arquivo que executará o processo de emissão de nfe
			$this->pid = getmypid(); //Configurando o pid do processo

			//echo "PID: {$this->pid}\n";

			$this->getParamData();
		}





		protected function checkTableProcessContent(){

			$this->getParamData(); //Configura os parametros do gerenciamento

			if ( empty( $this->nop ) ){
				echo "WARNING: quantidade de processos em branco\n";
			}

			if ( empty( $this->tempo_max ) ){
				echo "WARNING: tempo maximo de um processo em branco\n";
			}

			$processos = $this->GetAllProcess();
			$qt_processos = count( $processos );

			echo "Processos: {$qt_processos}\nParametrizado: {$this->nop}\n";

			if ( $qt_processos < $this->nop ){//Caso a quantidade de processos seja menor que a quantidade parametrizada
				//TODO
				echo "quantidade de processos parametrizados é menor que quantidade criada\n";
				$this->CreateProcessDB();
			}//Fim do if se a quantidade de processos for menor da parametrizada


			if ( $qt_processos > $this->nop ){//Caso a quantidade de processos seja maior que a quantidade parametrizada
				//TODO
				$this->MarkProcessToDelete();
			}//Fim do if se a quantidade de processos for maio da parametrizada


		}


		protected function CreateProcessDB(){

			$qt_processos = count( $this->GetAllProcess());

			for ($i=1; $i<=( $this->nop ); $i++){

				if ( !$this->exists($i) ){
					$this->DbConnection->exec( $this->getQuery('PUT_PROCESS', $i, 'F') );
					echo "Criando Processo $i\n";
				}else{
					continue;
				}
			}

		}

		public function SendDelete($id_process){
			$this->DbConnection->exec( $this->getQuery('SEND_SIGNAL_PROCESS', $id_process, DELETE_SIGNAL) );
			echo "Sending SIGNAL to process be deleted after execution\n";
		}

		protected function MarkProcessToDelete(){

			$qt_processos = count( $this->GetAllProcess() );
			$processos = $this->GetAllProcess();

			for ($i=$qt_processos; $i>( $this->nop ); $i--){
				$processo = $processos[$i-1];

				if ( $this->isKillable( $processo['id_processo'] ) ){
					echo "Esse processo ( {$processo['id_processo']} ) poder ir embora...\n";
					$this->GoOutProcess($processo['id_processo']);

				}else{
					echo "Esse processo ( {$processo['id_processo']} ) não poder ir embora...\n";
					$this->SendDelete( $processo['id_processo']);
				}

			}

		}



		protected function getParamData(){
			$data = $this->DbConnection->lookup( $this->getQuery('GET_PARAM_DATA') ); //Consulta o os parametros do gerenciamento
			list($this->nop, $this->tempo_max) = $data[0];

			$this->intervalo = "10";
			$this->maxLoop = "10";
		}



		protected function CheckDataBaseTables(){
			if ( !$this->checkTable('t_processo_nfe') ){
				throw new Exception(  utf8_encode("Tabela t_processo_nfe não existe!") );
			}

			if ( !$this->checkTable('t_signal') ){
					throw new Exception( utf8_encode("Tabela t_signal não existe!") );
			}

			if ( !$this->checkTable('t_parametros') ){
					throw new Exception("Tabela t_parametros não existe!");
			}
		}

		protected function checkTable($table_name){
			echo "Checking table {$table_name}...\n";
			$test_table = $this->DbConnection->lookup("show tables like '{$table_name}'");

			return count($test_table)>0;
		}



		protected function isKillable($id_process){
			$isFree = $this->DbConnection->lookup( $this->getQuery('CAN_I_KILL', $id_process) ); //Consulta o banco de processos livres

			return ($isFree["0"]["0"]>0);
		}

		protected function exists($id_process){
			$isFree = $this->DbConnection->lookup( $this->getQuery('THERE_THIS_ID', $id_process) ); //Consulta o banco de processos livres

			return ($isFree["0"]["0"]>0);
		}


		private function GoOutProcess($id_process){

			$this->DbConnection->exec( $this->getQuery('GO_OUT_PROCESS', $id_process) );
			echo "Process {$id_process} killed... RIP\n";

		}

		protected function setProcessFree($id_processo){

			$this->DbConnection->exec( $this->getQuery('SET_PROCESS_FREE', $id_processo ) );


		}


		//Funçõo para retorna processos livres
		protected function GetAllProcess(){
			$retorno = "";

			try{

				$retorno = $this->DbConnection->lookup( $this->getQuery('GET_ALL_PROCESS') ); //Consulta o banco de processos livres

			}catch (Exception $e){
				echo "Erro: " . $e->getMessage();
			}

			return $retorno; //Retorna a consulta do banco
		} //Fim da função GetFreeProcess


		//Funçõo para retorna processos livres
		protected function GetFreeProcess(){
			$retorno = "";

			try{

				$retorno = $this->DbConnection->lookup( $this->getQuery('GET_FREE_PROCESS') ); //Consulta o banco de processos livres

			}catch (Exception $e){
				echo "Erro: " . $e->getMessage();
			}

			return $retorno; //Retorna a consulta do banco
		} //Fim da função GetFreeProcess

		protected function isThereKey($key){
			$isThere = $this->DbConnection->lookup( $this->getQuery('GET_PROCESS_KEY', $key) ); //Consulta o banco de processos livres

			return (count($isThere)>0);
		}


		//Funcão para criar uma tabela de querys
		public function getQuery($name, $param1=null, $param2=null){
			$ret = "";


			switch($name){
				case "SET_INC_ALL":
					$ref = "update t_nfesyslog set situacao='I' WHERE situacao='P'";
					break;
				case "SET_INC_NF":
					$ret = "UPDATE t_nfesyslog SET situacao='I' WHERE chave_nfe='{$param1}'";
					break;
				case "GET_PROCESS_KEY":
					$ret = "SELECT id_processo FROM t_processo_nfe WHERE chave='{$param1}' AND cnpj='{$this->cnpj_emitente}' ";
					break;
				case "GET_OLD_PROCESS":
					$ret = "SELECT id_processo, pid from t_processo_nfe
 					WHERE timestampdiff(minute, data_hora, current_timestamp) > 5";
					break;
				case "DESTROY_SIGNAL":
					$ret = "DELETE FROM t_signal WHERE id_signal={$param1}";
					break;
				case "DESTROY_PROCESS":
					$ret = "DELETE FROM T_processo_nfe WHERE id_processo={$param1}";
					break;
				case "SET_PROCESS_FREE":
					$ret = "UPDATE t_processo_nfe SET situacao_processo='F', data_hora=null, chave=null, pid=null WHERE cnpj='{$this->cnpj_emitente}' AND id_processo={$param1}";
					break;
				case "SET_PROCESS_SITUATION";
					$ret = "UPDATE t_processo_nfe SET situacao_processo='{$param2}', data_hora=CURRENT_TIMESTAMP, pid={$this->pid} WHERE cnpj='{$this->cnpj_emitente}' AND id_processo={$param1}";
					break;
				case "SET_KEY_PROCESS";
					$ret = "UPDATE t_processo_nfe SET CHAVE='{$param2}' WHERE cnpj='{$this->cnpj_emitente}' AND id_processo={$param1}";
					break;
				case "THERE_THIS_ID":
					$ret = "SELECT COUNT(*) FROM t_processo_nfe WHERE id_processo={$param1} AND cnpj='{$this->cnpj_emitente}'";
					break;
				case "GO_OUT_PROCESS":
					$ret = "DELETE FROM t_processo_nfe WHERE cnpj='{$this->cnpj_emitente}' AND id_processo={$param1}";
					break;
				case "CAN_I_KILL":
					$ret = "SELECT COUNT(*) FROM t_processo_nfe WHERE id_processo={$param1} AND situacao_processo='F' AND cnpj='{$this->cnpj_emitente}'";
					break;
				case "PUT_PROCESS":
					$ret = "INSERT INTO t_processo_nfe(id_processo, situacao_processo, cnpj) VALUES('{$param1}', '{$param2}', '{$this->cnpj_emitente}')";
					break;
				case "GET_SIGNAL":
					$ret = "SELECT id_signal, signal FROM t_signal WHERE id_processo={$param1} AND cnpj='{$this->cnpj_emitente}' order by 1 desc";
					break;
				case "GET_PARAM_DATA":
					$ret = "SELECT num_processo, tempo_max FROM t_parametros WHERE id_empresa=(SELECT id_empresa FROM t_empresas WHERE cnpj='{$this->cnpj_emitente}')";
					break;
				case "GET_FREE_PROCESS":
					$ret = "SELECT id_processo FROM t_processo_nfe WHERE ifnull(situacao_processo,'F')='F'"; //Situacao Free
					break;
				case "GET_ALL_PROCESS":
					$ret = "SELECT id_processo, id_processo, chave FROM t_processo_nfe";
					break;
				case "SEND_SIGNAL_PROCESS":
					$ret = "INSERT INTO t_signal(id_processo, signal, cnpj) VALUES('$param1', '$param2', '{$this->cnpj_emitente}')";
					break;
				default: //caso não tenha sido informado nenhum nome de query retornar nulo
					$ret = "SELECT null FROM dual";
			}//Fim do switch/case (nome da query)

			return $ret;
		}//Fim da função getQuery

	}
?>