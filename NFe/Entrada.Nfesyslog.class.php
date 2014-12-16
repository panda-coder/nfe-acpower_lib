<?php

	require_once('core.php');

	class EntradaNfesyslog extends AutoNFeSyslog{
		private $DbConnection;
		
		
		
		function __construct($aConfig='',$mododebug=0) {
			//passa os parametros para a classe base 
			parent::__construct($aConfig,$mododebug);
			
			
			
		}
		
		private function getNSU_Bd() {

			$max = $this->DbConnection->lookup("select count(id_nfesyslog_entrada) from t_nfesyslog_entrada where nsu is not null");
			
			if ($max[0][0]==0) {
				$nsu = "0";
			} else {
				$dtnsu = $this->DbConnection->lookup("select nsu from t_nfesyslog_entrada order by data_autorizacao desc limit 0,1");
				$nsu = $dtnsu[0][0];
			}
			
			return $nsu;
		}
		
		
		public function getProductionList(){
			$r = array();
			try{
				$temp = $this->getListNFe(true, '0', '0', '8066242237', 1, $this->modSOAP, $r); 
			} catch (nfephpException $e){
				$e-errorMessage();
			}
			print_r($r);
			print_r($temp);
			
			return $temp;
		}
		
		
		

		
	}
	
	

?>