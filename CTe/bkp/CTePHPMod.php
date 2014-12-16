<?php

require_once("CTePHPRules.php");
require_once("CTePHPModItem.php");

class CTePHPRodoviario extends CTeRules {

	private $dom;
	private $dom_Finalized;
	private $parent_node;
	public $mod_Finalized;
	private $arr_modnodes = array();

	function __construct($parent=null,$dom=null,$skip_validation=null) {
		$this->skip_validation = $skip_validation;
		$this->dom = $dom;
		$this->parent_node = $parent;
		$this->setRegExp();
		$this->setDomain();
	}

	public function setMod_1_rodo($param=null,$ix=0) { 
		if ($this->validateNotNull("setMod_1_rodo",$param)) {
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_1_rodo($param,$ix) );
			return $ret;
		}
	}
	public function setMod_2_RNTRC($param=null,$ix=0) { 
		if ($this->validateRegExp("setMod_2_RNTRC",$param,"ER33" )) { 								// ER33
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_2_RNTRC($param,$ix) );
			return $ret;
		}
	}
	public function setMod_3_dPrev($param=null,$ix=0) { 
		if ($this->validateRegExp("setMod_3_dPrev",$param,"ER9")) { 								// ER9
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_3_dPrev($param,$ix) );
			return $ret;
		}
	}
	public function setMod_4_lota($param=null,$ix=0) { 
		if ($this->validateDomain("setMod_4_lota",$param,"D10")) {									// D10
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_4_lota($param,$ix) );
			return $ret;
		}
	}
	public function setMod_5_CIOT($param=null,$ix=0) { 
		if ($this->validateRegExp("setMod_5_CIOT",$param,"ER51")) { 								// ER51
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_5_CIOT($param,$ix) );
			return $ret;
		}
	}
	public function setMod_6_occ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addModNodes( new CTePHPMod_Rodoviario_6_occ($param,$ix) );
		return $ret;
	}
	public function setMod_7_serie($param=null,$ix=0) { 
		if ($this->validateRegExp("setMod_7_serie",$param,"ER32")) { 								// ER32
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_7_serie($param,$ix) );
			return $ret;
		}
	}
	public function setMod_8_nOcc($param=null,$ix=0) { 
		if ($this->validateRegExp("setMod_8_nOcc",$param,"ER52")) { 								// ER52
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_8_nOcc($param,$ix) );
			return $ret;
		}
	}
	public function setMod_9_dEmi($param=null,$ix=0) { 
		if ($this->validateRegExp("setMod_9_dEmi",$param,"ER9")) { 									// ER9
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_9_dEmi($param,$ix) );
			return $ret;
		}
	}
	public function setMod_10_emiOcc($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addModNodes( new CTePHPMod_Rodoviario_10_emiOcc($param,$ix) );
		return $ret;
	}
	public function setMod_11_CNPJ($param=null,$ix=0) { 
		if ($this->validateRegExp("setMod_11_CNPJ",$param,"ER4")) { 								// ER4
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_11_CNPJ($param,$ix) );
			return $ret;
		}
	}
	public function setMod_12_cInt($param=null,$ix=0) { 
		if ($this->validateRegExp("setMod_12_cInt",$param,"ER32")) { 								// ER32
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_12_cInt($param,$ix) );
			return $ret;
		}
	}
	public function setMod_13_IE($param=null,$ix=0) { 
		if ($this->validateRegExp("setMod_13_IE",$param,"ER25")) { 									// ER25
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_13_IE($param,$ix) );
			return $ret;
		}
	}
	public function setMod_14_UF($param=null,$ix=0) { 
		if ($this->validateDomain("setMod_14_UF",$param,"D5")) {									// D5
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_14_UF($param,$ix) );
			return $ret;
		}
	}
	public function setMod_15_fone($param=null,$ix=0) { 
		if ($this->validateRegExp("setMod_15_fone",$param,"ER32")) { 								// ER32
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_15_fone($param,$ix) );
			return $ret;
		}
	}
	public function setMod_16_valePed($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addModNodes( new CTePHPMod_Rodoviario_16_valePed($param,$ix) );
		return $ret;
	}
	public function setMod_17_CNPJForn($param=null,$ix=0) { 
		if ($this->validateRegExp("setMod_17_CNPJForn",$param,"ER4")) { 							// ER4
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_17_CNPJForn($param,$ix) );
			return $ret;
		}
	}
	public function setMod_18_nCompra($param=null,$ix=0) { 
		if ($this->validateRegExp("setMod_18_nCompra",$param,"ER39")) { 							// ER39
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_18_nCompra($param,$ix) );
			return $ret;
		}
	}
	public function setMod_19_CNPJPg($param=null,$ix=0) { 
		if ($this->validateRegExp("setMod_19_CNPJPg",$param,"ER6")) { 								// ER6
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_19_CNPJPg($param,$ix) );
			return $ret;
		}
	}
	public function setMod_20_veic($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addModNodes( new CTePHPMod_Rodoviario_20_veic($param,$ix) );
		return $ret;
	}
	public function setMod_21_cInt($param=null,$ix=0) { 
		if ($this->validateRegExp("setMod_21_cInt",$param,"ER32")) { 								// ER32
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_21_cInt($param,$ix) );
			return $ret;
		}
	}
	public function setMod_22_RENAVAM($param=null,$ix=0) { 
		if ($this->validateRegExp("setMod_22_RENAVAM",$param,"ER32")) { 							// ER32
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_22_RENAVAM($param,$ix) );
			return $ret;
		}
	}
	public function setMod_23_placa($param=null,$ix=0) { 
		if ($this->validateRegExp("setMod_23_placa",$param,"ER50")) { 								// ER50
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_23_placa($param,$ix) );
			return $ret;
		}
	}
	public function setMod_24_tara($param=null,$ix=0) { 
		if ($this->validateRegExp("setMod_24_tara",$param,"ER53")) { 								// ER53
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_24_tara($param,$ix) );
			return $ret;
		}
	}
	public function setMod_25_capKG($param=null,$ix=0) { 
		if ($this->validateRegExp("setMod_25_capKG",$param,"ER53")) { 								// ER53
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_25_capKG($param,$ix) );
			return $ret;
		}
	}
	public function setMod_26_capM3($param=null,$ix=0) { 
		if ($this->validateRegExp("setMod_26_capM3",$param,"ER30")) { 								// ER30
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_26_capM3($param,$ix) );
			return $ret;
		}
	}
	public function setMod_27_tpProp($param=null,$ix=0) { 
		if ($this->validateDomain("setMod_27_tpProp",$param,"D27")) {								// D27
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_27_tpProp($param,$ix) );
			return $ret;
		}
	}
	public function setMod_28_tpVeic($param=null,$ix=0) { 
		if ($this->validateDomain("setMod_28_tpVeic",$param,"D10")) {								// D10
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_28_tpVeic($param,$ix) );
			return $ret;
		}
	}
	public function setMod_29_tpRod($param=null,$ix=0) { 
		if ($this->validateDomain("setMod_29_tpRod",$param,"D28")) {								// D28
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_29_tpRod($param,$ix) );
			return $ret;
		}
	}
	public function setMod_30_tpCar($param=null,$ix=0) { 
		if ($this->validateDomain("setMod_30_tpCar",$param,"D15")) {								// D15
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_30_tpCar($param,$ix) );
			return $ret;
		}
	}
	public function setMod_31_UF($param=null,$ix=0) { 
		if ($this->validateDomain("setMod_31_UF",$param,"D5")) {									// D5
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_31_UF($param,$ix) );
			return $ret;
		}
	}
	public function setMod_32_prop($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addModNodes( new CTePHPMod_Rodoviario_32_prop($param,$ix) );
		return $ret;
	}
	public function setMod_33_CPF($param=null,$ix=0) { 
		if ($this->validateRegExp("setMod_33_CPF",$param,"ER7")) { 									// ER7
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_33_CPF($param,$ix) );
			return $ret;
		}
	}
	public function setMod_34_CNPJ($param=null,$ix=0) { 
		if ($this->validateRegExp("setMod_34_CNPJ",$param,"ER6")) { 								// ER6
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_34_CNPJ($param,$ix) );
			return $ret;
		}
	}
	public function setMod_35_RNTRC($param=null,$ix=0) { 
		if ($this->validateRegExp("setMod_35_RNTRC",$param,"ER33")) { 								// ER33
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_35_RNTRC($param,$ix) );
			return $ret;
		}
	}
	public function setMod_36_xNome($param=null,$ix=0) { 
		if ($this->validateRegExp("setMod_36_xNome",$param,"ER32")) { 								// ER32
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_36_xNome($param,$ix) );
			return $ret;
		}
	}
	public function setMod_37_IE($param=null,$ix=0) { 
		if ($this->validateRegExp("setMod_37_IE",$param,"ER26")) { 									// ER26
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_37_IE($param,$ix) );
			return $ret;
		}
	}
	public function setMod_38_UF($param=null,$ix=0) { 
		if ($this->validateDomain("setMod_38_UF",$param,"D5")) {									// D5
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_38_UF($param,$ix) );
			return $ret;
		}
	}
	public function setMod_39_tpProp($param=null,$ix=0) { 
		if ($this->validateDomain("setMod_39_tpProp",$param,"D7")) {								// D7
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_39_tpProp($param,$ix) );
			return $ret;
		}
	}
	public function setMod_40_lacRodo($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addModNodes( new CTePHPMod_Rodoviario_40_lacRodo($param,$ix) );
		return $ret;
	}
	public function setMod_41_nLacre($param=null,$ix=0) { 
		if ($this->validateRegExp("setMod_41_nLacre",$param,"ER32")) { 								// ER32
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_41_nLacre($param,$ix) );
			return $ret;
		}
	}
	public function setMod_42_moto($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addModNodes( new CTePHPMod_Rodoviario_42_moto($param,$ix) );
		return $ret;
	}
	public function setMod_43_xNome($param=null,$ix=0) { 
		if ($this->validateRegExp("setMod_43_xNome",$param,"ER32")) { 								// ER32
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_43_xNome($param,$ix) );
			return $ret;
		}
	}
	public function setMod_44_CPF($param=null,$ix=0) { 
		if ($this->validateRegExp("setMod_44_CPF",$param,"ER7")) { 									// ER7
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_44_CPF($param,$ix) );
			return $ret;
		}
	}
	
	private function addModNodes($obj) {
		if ($obj->get_tipo()=="G") { $obj->set_element($this->dom->createElement($obj->get_name())); }
		if ($obj->get_tipo()=="E") { $obj->set_element($this->dom->createElement($obj->get_name(),$obj->get_value())); }
		if ($obj->get_tipo()=="A") { $obj->set_element($this->dom->createElement($obj->get_name(),$obj->get_value())); }
		$this->arr_modnodes[$obj->get_id()][] = $obj;
		return (count($this->arr_modnodes[$obj->get_id()])-1);
	}
	
	private function generateModTree() {
		$aux = $this->arr_modnodes;
		ksort($aux);
		foreach ($aux as $k => $v) {
			foreach ($v as $value) {
				if (isset($aux[$value->get_pai()][$value->get_index()])) {
					switch ($value->get_tipo()) {
						case 'G':
							$aux[$value->get_pai()][$value->get_index()]->element->appendChild($value->get_element());
							break;
						case 'A':
							$aux[$value->get_pai()][$value->get_index()]->element->setAttribute($value->get_name(),$value->get_value());
							break;
						case 'E':
							$aux[$value->get_pai()][$value->get_index()]->element->appendChild($value->get_element());
							break;
					}
				}
			}
		}
		$this->mod_Finalized = $aux[1][0]->get_element();
	}
	
	public function drawXMLMod() {
		if (count($this->arr_erro)>0) {
			echo "An error occurred attempting to save the file ".strtoupper($file_name)." using the method of the modal object.<br>";
			echo "<pre>";
			print_r($this->arr_erro);
			echo "</pre>";
			$this->mod_Finalized = $this->dom->createElement("erro","erro");
			return $this->mod_Finalized;
		} else {
			$this->generateModTree();
			if (!empty($this->mod_Finalized)) {
				return $this->mod_Finalized;
			} else { 
				echo "Expected mode parameter."; 
				return false; 
			}
		}
	}
}

?>