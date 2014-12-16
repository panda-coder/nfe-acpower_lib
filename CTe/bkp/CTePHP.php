<?php

require_once("CTePHPRules.php");
require_once("CTePHPItem.php");
require_once("CTePHPMod.php");

class CTePHP extends CTeRules { 
	private $dom;
	private $dom_Finalized;
	private $CTe;
	private $CTe_Finalized;
	private $key;
	private $DV;
	
	private $arr_nodes = array();

	function __construct($skip_validation=null) {
		parent::__construct($skip_validation);
		$generator_name="http://www.portalfiscal.inf.br/cte";
		$this->dom = new DOMDocument('1.0', 'UTF-8');
		$this->dom->formatOutput = true;
		$this->dom->preserveWhiteSpace = false;

		$this->CTe = $this->dom->createElement("CTe");
		$this->CTe->setAttribute("xmlns", $generator_name);
		$this->dom->appendChild($this->CTe);
	}
	
	private function generateKeyMXL() {
		$dom 	= $this->dom;
		$cUF	= $this->arr_nodes[5][0]->get_value();
		$dhEmi	= $this->arr_nodes[13][0]->get_value();
		$CNPJ 	= $this->arr_nodes[98][0]->get_value();
		$mod 	= $this->arr_nodes[10][0]->get_value();
		$serie 	= $this->arr_nodes[11][0]->get_value();
		$nCT 	= $this->arr_nodes[12][0]->get_value();
		$tpEmis	= $this->arr_nodes[15][0]->get_value();
		$cCT	= $this->arr_nodes[6][0]->get_value();
		$tempData = $dt = explode("-", $dhEmi);
		$forma = "%02d%02d%02d%s%02d%03d%09d%01d%08d"; //%01d";
		$tempKey = sprintf($forma, $cUF, $tempData[0] - 2000, $tempData[1], $CNPJ, $mod, $serie, $nCT, $tpEmis, $cCT);
		$this->DV = $this->calculateDV($tempKey);
		$this->key = $tempKey .= $this->DV;
	}
	
	private function calculateDV($key){
		$cDV  = '';
		$multiplicadores = array(2, 3, 4, 5, 6, 7, 8, 9);
		$i = 42;
		$soma_ponderada = 0;
		while ($i >= 0)
		{
			for ($m = 0; $m < count($multiplicadores) && $i >= 0; $m++)
			{
				$soma_ponderada += $key[$i] * $multiplicadores[$m];
				$i--;
			}
		}
		$resto = $soma_ponderada % 11;
		if ($resto == '0' || $resto == '1')
		{
			$cDV = 0;
		} else
		{
			$cDV = 11 - $resto;
		}
		return $cDV;
	}
	
	public function get_dom() { return $this->dom; }
	public function get_key() { return $this->key; }
	public function get_DV() { return $this->DV; }
	
	public function set_1_infCte ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_1_infCte($param,$ix) );
		return $ret;
	}
	public function set_2_versao ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_2_versao",$param,"ER40")) { 								// ER40
			$ret = $this->addNodes( new CTePHP_2_versao($param,$ix) );
		}
		return $ret;
	}
	private function set_3_Id ($param=null,$ix=0) { 
		$ret = '';
		$this->generateKeyMXL();
		$id = "CTe" . $this->key;
		if ($this->validateRegExp("set_3_Id",$id,"ER44")) { 									// ER44
			$ret = $this->addNodes( new CTePHP_3_Id($id,$ix) );
		}
		return $ret;
	}
	public function set_4_ide ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_4_ide($param,$ix) );
		return $ret;
	}
	public function set_5_cUF ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_5_cUF",$param,"D2")) {									// D2
			$ret = $this->addNodes( new CTePHP_5_cUF($param,$ix) );
		}
		return $ret;
	}
	public function set_6_cCT ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_6_cCT",$param," ER33")) { 								// ER33
			$ret = $this->addNodes( new CTePHP_6_cCT($param,$ix) );
		}
	}
	public function set_7_CFOP ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_7_CFOP",$param,"ER46")) { 								// ER46
			$ret = $this->addNodes( new CTePHP_7_CFOP($param,$ix) );
		}
		return $ret;
	}
	public function set_8_natOp ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_8_natOp",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_8_natOp($param,$ix) );
		}
		return $ret;
	}
	public function set_9_forPag ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_9_forPag",$param,"D7")) {								// D7
			$ret = $this->addNodes( new CTePHP_9_forPag($param,$ix) );
		}
		return $ret;
	}
	public function set_10_mod ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_10_mod",$param,"D3")) {									// D3
			$ret = $this->addNodes( new CTePHP_10_mod($param,$ix) );
		}
		return $ret;
	}
	public function set_11_serie ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_11_serie",$param,"ER30")) { 								// ER30
			$ret = $this->addNodes( new CTePHP_11_serie($param,$ix) );
		}
		return $ret;
	}
	public function set_12_nCT ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_12_nCT",$param,"ER28")) { 								// ER28
			$ret = $this->addNodes( new CTePHP_12_nCT($param,$ix) );
		}
		return $ret;
	}
	public function set_13_dhEmi ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_13_dhEmi",$param,"ER34")) { 								// ER34
			$ret = $this->addNodes( new CTePHP_13_dhEmi($param,$ix) );
		}
		return $ret;
	}
	public function set_14_tpImp ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_14_tpImp",$param,"D1")) {								// D1
			$ret = $this->addNodes( new CTePHP_14_tpImp($param,$ix) );
		}
		return $ret;
	}
	public function set_15_tpEmis ($param=null,$ix=0) {
		$ret = '';
		if ($this->validateDomain("set_15_tpEmis",$param,"D8")) {								// D8
			$ret = $this->addNodes( new CTePHP_15_tpEmis($param,$ix) );
		}
		return $ret;
	}
	private function set_16_cDV ($param=null,$ix=0) { 
		$ret = '';
		$param = $this->DV;
		if ($this->validateRegExp("set_16_cDV",$param,"ER35")) { 								// ER35
			$ret = $this->addNodes( new CTePHP_16_cDV($param,$ix) );
		}
		return $ret;
	}
	public function set_17_tpAmb ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_17_tpAmb",$param,"D1")) {								// D1
			$ret = $this->addNodes( new CTePHP_17_tpAmb($param,$ix) );
		}
		return $ret;
	}
	public function set_18_tpCTe ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_18_tpCTe",$param,"D9")) {								// D9
			$ret = $this->addNodes( new CTePHP_18_tpCTe($param,$ix) );
		}
		return $ret;
	}
	public function set_19_procEmi ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_19_procEmi",$param,"D9")) {								// D9
			$ret = $this->addNodes( new CTePHP_19_procEmi($param,$ix) );
		}
		return $ret;
	}
	public function set_20_verProc ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_20_verProc",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_20_verProc($param,$ix) );
		}
		return $ret;
	}
	public function set_21_refCTE ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_21_refCTE",$param,"ER3")) { 								// ER3
			$ret = $this->addNodes( new CTePHP_21_refCTE($param,$ix) );
		}
		return $ret;
	}
	public function set_22_cMunEnv ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_22_cMunEnv",$param,"ER2")) { 							// ER2
			$ret = $this->addNodes( new CTePHP_22_cMunEnv($param,$ix) );
		}
		return $ret;
	}
	public function set_23_xMunEnv ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_23_xMunEnv",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_23_xMunEnv($param,$ix) );
		}
		return $ret;
	}
	public function set_24_UFEnv ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_24_UFEnv",$param,"D5")) {								// D5
			$ret = $this->addNodes( new CTePHP_24_UFEnv($param,$ix) );
		}
		return $ret;
	}
	public function set_25_modal ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_25_modal",$param,"D26")) {								// D26
			$ret = $this->addNodes( new CTePHP_25_modal($param,$ix) );
		}
		return $ret;
	}
	public function set_26_tpServ ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_26_tpServ",$param,"D9")) {								// D9
			$ret = $this->addNodes( new CTePHP_26_tpServ($param,$ix) );
		}
		return $ret;
	}
	public function set_27_cMunIni ($param=null,$ix=0) {
		$ret = '';
		if ($this->validateRegExp("set_27_cMunIni",$param,"ER2")) { 							// ER2
			$ret = $this->addNodes( new CTePHP_27_cMunIni($param,$ix) );
		}
		return $ret;
	}
	public function set_28_xMunIni ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_28_xMunIni",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_28_xMunIni($param,$ix) );
		}
		return $ret;
	}
	public function set_29_UFIni ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_29_UFIni",$param,"D5")) {								// D5
			$ret = $this->addNodes( new CTePHP_29_UFIni($param,$ix) );
		}
		return $ret;
	}
	public function set_30_cMunFim ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_30_cMunFim",$param,"ER2")) { 							// ER2
			$ret = $this->addNodes( new CTePHP_30_cMunFim($param,$ix) );
		}
		return $ret;
	}
	public function set_31_xMunFim ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_31_xMunFim",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_31_xMunFim($param,$ix) );
		}
		return $ret;
	}
	public function set_32_UFFim ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_32_UFFim",$param,"D5")) {								// D5
			$ret = $this->addNodes( new CTePHP_32_UFFim($param,$ix) );
		}
		return $ret;
	}
	public function set_33_retira ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_33_retira",$param,"D10")) {								// D10
			$ret = $this->addNodes( new CTePHP_33_retira($param,$ix) );
		}
		return $ret;
	}
	public function set_34_xDetRetira ($param=null,$ix=0) {
		$ret = '';
		if ($this->validateRegExp("set_34_xDetRetira",$param,"ER32")) { 						// ER32
			$ret = $this->addNodes( new CTePHP_34_xDetRetira($param,$ix) );
		}
		return $ret;
	}
	public function set_35_toma03 ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_35_toma03($param,$ix) );
		return $ret;
	}
	public function set_36_toma ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_36_toma",$param,"D9")) {									// D9
			$ret = $this->addNodes( new CTePHP_36_toma($param,$ix) );
		}
		return $ret;
	}
	public function set_37_toma4 ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_37_toma4($param,$ix) );
		return $ret;
	}
	public function set_38_toma ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_38_toma",$param,"D11")) {								// D11
			$ret = $this->addNodes( new CTePHP_38_toma($param,$ix) );
		}
		return $ret;
	}
	public function set_39_CNPJ ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_39_CNPJ",$param,"ER6")) { 								// ER6
			$ret = $this->addNodes( new CTePHP_39_CNPJ($param,$ix) );
		}
		return $ret;
	}
	public function set_40_CPF ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_40_CPF",$param,"ER7")) { 								// ER7
			$ret = $this->addNodes( new CTePHP_40_CPF($param,$ix) );
		}
		return $ret;
	}
	public function set_41_IE ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_41_IE",$param,"ER26")) { 								// ER26
			$ret = $this->addNodes( new CTePHP_41_IE($param,$ix) );
		}
		return $ret;
	}
	public function set_42_xNome ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_42_xNome",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_42_xNome($param,$ix) );
		}
		return $ret;
	}
	public function set_43_xFant ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_43_xFant",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_43_xFant($param,$ix) );
		}
		return $ret;
	}
	public function set_44_fone ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_44_fone",$param,"ER36")) { 								// ER36
			$ret = $this->addNodes( new CTePHP_44_fone($param,$ix) );
		}
		return $ret;
	}
	public function set_45_enderToma ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_45_enderToma($param,$ix) );
		return $ret;
	}
	public function set_46_xLgr ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_46_xLgr",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_46_xLgr($param,$ix) );
		}
		return $ret;
	}
	public function set_47_nro ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_47_nro",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_47_nro($param,$ix) );
		}
		return $ret;
	}
	public function set_48_xCpl ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_48_xCpl",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_48_xCpl($param,$ix) );
		}
		return $ret;
	}
	public function set_49_xBairro ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_49_xBairro",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_49_xBairro($param,$ix) );
		}
		return $ret;
	}
	public function set_50_cMun ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_50_cMun",$param,"ER2")) { 								// ER2
			$ret = $this->addNodes( new CTePHP_50_cMun($param,$ix) );
		}
		return $ret;
	}
	public function set_51_xMun ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_51_xMun",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_51_xMun($param,$ix) );
		}
		return $ret;
	}
	public function set_52_CEP ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_52_CEP",$param," ER33")) { 								// ER33
			$ret = $this->addNodes( new CTePHP_52_CEP($param,$ix) );
		}
		return $ret;
	}
	public function set_53_UF ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_53_UF",$param,"D5")) {									// D5
			$ret = $this->addNodes( new CTePHP_53_UF($param,$ix) );
		}
		return $ret;
	}
	public function set_54_cPais ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_54_cPais",$param,"ER27")) { 								// ER27
			$ret = $this->addNodes( new CTePHP_54_cPais($param,$ix) );
		}
		return $ret;
	}
	public function set_55_xPais ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_55_xPais",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_55_xPais($param,$ix) );
		}
		return $ret;
	}
	public function set_56_email ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_56_email",$param,"ER47")) { 								// ER47
			$ret = $this->addNodes( new CTePHP_56_email($param,$ix) );
		}
		return $ret;
	}
	public function set_57_dhCont ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_57_dhCont",$param,"ER34")) { 							// ER34
			$ret = $this->addNodes( new CTePHP_57_dhCont($param,$ix) );
		}
		return $ret;
	}
	public function set_58_xJust ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_58_xJust",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_58_xJust($param,$ix) );
		}
		return $ret;
	}
	public function set_59_compl ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_59_compl($param,$ix) );
		return $ret;
	}
	public function set_60_xCaracAd ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_60_xCaracAd",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_60_xCaracAd($param,$ix) );
		}
		return $ret;
	}
	public function set_61_xCaracSer ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_61_xCaracSer",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_61_xCaracSer($param,$ix) );
		}
		return $ret;
	}
	public function set_62_xEmi ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_62_xEmi",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_62_xEmi($param,$ix) );
		}
		return $ret;
	}
	public function set_63_fluxo ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_63_fluxo($param,$ix) );
		return $ret;
	}
	public function set_64_xOrig ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_64_xOrig",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_64_xOrig($param,$ix) );
		}
		return $ret;
	}
	public function set_65_pass ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_65_pass($param,$ix) );
		return $ret;
	}
	public function set_66_xPass ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_66_xPass",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_66_xPass($param,$ix) );
		}
		return $ret;
	}
	public function set_67_xDest ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_67_xDest",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_67_xDest($param,$ix) );
		}
		return $ret;
	}
	public function set_68_xRota ($param=null,$ix=0) {
		$ret = '';
		if ($this->validateRegExp("set_68_xRota",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_68_xRota($param,$ix) );
		}
		return $ret;
	}
	public function set_69_Entrega ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_69_Entrega($param,$ix) );
		return $ret;
	}
	public function set_70_semData ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_70_semData($param,$ix) );
		return $ret;
	}
	public function set_71_tpPer ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_71_tpPer",$param,"D12")) {								// D12
			$ret = $this->addNodes( new CTePHP_71_tpPer($param,$ix) );
		}
		return $ret;
	}
	public function set_72_comData ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_72_comData($param,$ix) );
		return $ret;
	}
	public function set_73_tpPer ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_73_tpPer",$param,"D13")) {								// D13
			$ret = $this->addNodes( new CTePHP_73_tpPer($param,$ix) );
		}
		return $ret;
	}
	public function set_74_dProg ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_74_dProg",$param,"ER9")) { 								// ER9
			$ret = $this->addNodes( new CTePHP_74_dProg($param,$ix) );
		}
		return $ret;
	}
	public function set_75_noPeriodo ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_75_noPeriodo($param,$ix) );
		return $ret;
	}
	public function set_76_tpPer ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_76_tpPer",$param,"D11")) {								// D11
			$ret = $this->addNodes( new CTePHP_76_tpPer($param,$ix) );
		}
		return $ret;
	}
	public function set_77_dIni ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_77_dIni",$param,"ER9")) { 								// ER9
			$ret = $this->addNodes( new CTePHP_77_dIni($param,$ix) );
		}
		return $ret;
	}
	public function set_78_dFim ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_78_dFim",$param,"ER9")) { 								// ER9
			$ret = $this->addNodes( new CTePHP_78_dFim($param,$ix) );
		}
		return $ret;
	}
	public function set_79_semHora ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_79_semHora($param,$ix) );
		return $ret;
	}
	public function set_80_tpHor ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_80_tpHor",$param,"D12")) {								// D12
			$ret = $this->addNodes( new CTePHP_80_tpHor($param,$ix) );
		}
		return $ret;
	}
	public function set_81_comHora ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_81_comHora($param,$ix) );
		return $ret;
	}
	public function set_82_tpHor ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_82_tpHor",$param,"D13")) {								// D13
			$ret = $this->addNodes( new CTePHP_82_tpHor($param,$ix) );
		}
		return $ret;
	}
	public function set_83_hProg ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_83_hProg",$param,"ER49")) { 								// ER49
			$ret = $this->addNodes( new CTePHP_83_hProg($param,$ix) );
		}
		return $ret;
	}
	public function set_84_noInter ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_84_noInter($param,$ix) );
		return $ret;
	}
	public function set_85_tpHor ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_85_tpHor",$param,"D11")) {								// D11
			$ret = $this->addNodes( new CTePHP_85_tpHor($param,$ix) );
		}
		return $ret;
	}
	public function set_86_hIni ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_86_hIni",$param,"ER49")) { 								// ER49
			$ret = $this->addNodes( new CTePHP_86_hIni($param,$ix) );
		}
		return $ret;
	}
	public function set_87_hFim ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_87_hFim",$param,"ER49")) { 								// ER49
			$ret = $this->addNodes( new CTePHP_87_hFim($param,$ix) );
		}
		return $ret;
	}
	public function set_88_origCalc ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_88_origCalc",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_88_origCalc($param,$ix) );
		}
		return $ret;
	}
	public function set_89_destCalc ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_89_destCalc",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_89_destCalc($param,$ix) );
		}
		return $ret;
	}
	public function set_90_xObs ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_90_xObs",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_90_xObs($param,$ix) );
		}
		return $ret;
	}
	public function set_91_ObsCont ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_91_ObsCont($param,$ix) );
		return $ret;
	}
	public function set_92_xCampo ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_92_xCampo",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_92_xCampo($param,$ix) );
		}
		return $ret;
	}
	public function set_93_xTexto ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_93_xTexto",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_93_xTexto($param,$ix) );
		}
		return $ret;
	}
	public function set_94_ObsFisco ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_94_ObsFisco($param,$ix) );
		return $ret;
	}
	public function set_95_xCampo ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_95_xCampo",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_95_xCampo($param,$ix) );
		}
		return $ret;
	}
	public function set_96_xTexto ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_96_xTexto",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_96_xTexto($param,$ix) );
		}
		return $ret;
	}
	public function set_97_emit ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_97_emit($param,$ix) );
		return $ret;
	}
	public function set_98_CNPJ ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_98_CNPJ",$param,"ER4")) { 								// ER4
			$ret = $this->addNodes( new CTePHP_98_CNPJ($param,$ix) );
		}
		return $ret;
	}
	public function set_99_IE ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_99_IE",$param,"ER25")) { 								// ER25
			$ret = $this->addNodes( new CTePHP_99_IE($param,$ix) );
		}
		return $ret;
	}
	public function set_100_xNome ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_100_xNome",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_100_xNome($param,$ix) );
		}
		return $ret;
	}
	public function set_101_xFant ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_101_xFant",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_101_xFant($param,$ix) );
		}
		return $ret;
	}
	public function set_102_enderEmit ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_102_enderEmit($param,$ix) );
		return $ret;
	}
	public function set_103_xLgr ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_103_xLgr",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_103_xLgr($param,$ix) );
		}
		return $ret;
	}
	public function set_104_nro ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_104_nro",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_104_nro($param,$ix) );
		}
		return $ret;
	}
	public function set_105_xCpl ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_105_xCpl",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_105_xCpl($param,$ix) );
		}
		return $ret;
	}
	public function set_106_xBairro ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_106_xBairro",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_106_xBairro($param,$ix) );
		}
		return $ret;
	}
	public function set_107_cMun ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_107_cMun",$param,"ER2")) { 								// ER2
			$ret = $this->addNodes( new CTePHP_107_cMun($param,$ix) );
		}
		return $ret;
	}
	public function set_108_xMun ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_108_xMun",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_108_xMun($param,$ix) );
		}
		return $ret;
	}
	public function set_109_CEP ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_109_CEP",$param," ER33")) { 								// ER33
			$ret = $this->addNodes( new CTePHP_109_CEP($param,$ix) );
		}
		return $ret;
	}
	public function set_110_UF ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_110_UF",$param,"D6")) {									// D6
			$ret = $this->addNodes( new CTePHP_110_UF($param,$ix) );
		}
		return $ret;
	}
	public function set_111_fone ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_111_fone",$param,"ER36")) { 								// ER36
			$ret = $this->addNodes( new CTePHP_111_fone($param,$ix) );
		}
		return $ret;
	}
	public function set_112_rem ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_112_rem($param,$ix) );
		return $ret;
	}
	public function set_113_CNPJ ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_113_CNPJ",$param,"ER6")) { 								// ER6
			$ret = $this->addNodes( new CTePHP_113_CNPJ($param,$ix) );
		}
		return $ret;
	}
	public function set_114_CPF ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_114_CPF",$param,"ER7")) { 								// ER7
			$ret = $this->addNodes( new CTePHP_114_CPF($param,$ix) );
		}
		return $ret;
	}
	public function set_115_IE ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_115_IE",$param,"ER26")) { 								// ER26
			$ret = $this->addNodes( new CTePHP_115_IE($param,$ix) );
		}
		return $ret;
	}
	public function set_116_xNome ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_116_xNome",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_116_xNome($param,$ix) );
		}
		return $ret;
	}
	public function set_117_xFant ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_117_xFant",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_117_xFant($param,$ix) );
		}
		return $ret;
	}
	public function set_118_fone ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_118_fone",$param,"ER36")) { 								// ER36
			$ret = $this->addNodes( new CTePHP_118_fone($param,$ix) );
		}
		return $ret;
	}
	public function set_119_enderReme ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_119_enderReme($param,$ix) );
		return $ret;
	}
	public function set_120_xLgr ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_120_xLgr",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_120_xLgr($param,$ix) );
		}
		return $ret;
	}
	public function set_121_nro ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_121_nro",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_121_nro($param,$ix) );
		}
		return $ret;
	}
	public function set_122_xCpl ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_122_xCpl",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_122_xCpl($param,$ix) );
		}
		return $ret;
	}
	public function set_123_xBairro ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_123_xBairro",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_123_xBairro($param,$ix) );
		}
		return $ret;
	}
	public function set_124_cMun ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_124_cMun",$param,"ER2")) { 								// ER2
			$ret = $this->addNodes( new CTePHP_124_cMun($param,$ix) );
		}
		return $ret;
	}
	public function set_125_xMun ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_125_xMun",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_125_xMun($param,$ix) );
		}
		return $ret;
	}
	public function set_126_CEP ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_126_CEP",$param," ER33")) { 								// ER33
			$ret = $this->addNodes( new CTePHP_126_CEP($param,$ix) );
		}
	}
	public function set_127_UF ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_127_UF",$param,"D5")) {									// D5
			$ret = $this->addNodes( new CTePHP_127_UF($param,$ix) );
		}
		return $ret;
	}
	public function set_128_cPais ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_128_cPais",$param,"ER27")) { 							// ER27
			$ret = $this->addNodes( new CTePHP_128_cPais($param,$ix) );
		}
		return $ret;
	}
	public function set_129_xPais ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_129_xPais",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_129_xPais($param,$ix) );
		}
		return $ret;
	}
	public function set_130_email ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_130_email",$param,"ER47")) { 							// ER47
			$ret = $this->addNodes( new CTePHP_130_email($param,$ix) );
		}
		return $ret;
	}
	public function set_131_infNF ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_131_infNF($param,$ix) );
		return $ret;
	}
	public function set_132_nRoma ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_132_nRoma",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_132_nRoma($param,$ix) );
		}
		return $ret;
	}
	public function set_133_nPed ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_133_nPed",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_133_nPed($param,$ix) );
		}
		return $ret;
	}
	public function set_134_mod ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_134_mod",$param,"D4")) {									// D4
			$ret = $this->addNodes( new CTePHP_134_mod($param,$ix) );
		}
		return $ret;
	}
	public function set_135_serie ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_135_serie",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_135_serie($param,$ix) );
		}
		return $ret;
	}
	public function set_136_nDoc ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_136_nDoc",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_136_nDoc($param,$ix) );
		}
		return $ret;
	}
	public function set_137_dEmi ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_137_dEmi",$param,"ER9")) { 								// ER9
			$ret = $this->addNodes( new CTePHP_137_dEmi($param,$ix) );
		}
		return $ret;
	}
	public function set_138_vBC ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_138_vBC",$param,"ER23")) { 								// ER23
			$ret = $this->addNodes( new CTePHP_138_vBC($param,$ix) );
		}
		return $ret;
	}
	public function set_139_vICMS ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_139_vICMS",$param,"ER23")) { 							// ER23
			$ret = $this->addNodes( new CTePHP_139_vICMS($param,$ix) );
		}
		return $ret;
	}
	public function set_140_vBCST ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_140_vBCST",$param,"ER23")) { 							// ER23
			$ret = $this->addNodes( new CTePHP_140_vBCST($param,$ix) );
		}
		return $ret;
	}
	public function set_141_vST ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_141_vST",$param,"ER23")) { 								// ER23
			$ret = $this->addNodes( new CTePHP_141_vST($param,$ix) );
		}
		return $ret;
	}
	public function set_142_vProd ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_142_vProd",$param,"ER23")) { 							// ER23
			$ret = $this->addNodes( new CTePHP_142_vProd($param,$ix) );
		}
		return $ret;
	}
	public function set_143_vNF ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_143_vNF",$param,"ER23")) { 								// ER23
			$ret = $this->addNodes( new CTePHP_143_vNF($param,$ix) );
		}
		return $ret;
	}
	public function set_144_nCFOP ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_144_nCFOP",$param,"ER46")) { 							// ER46
			$ret = $this->addNodes( new CTePHP_144_nCFOP($param,$ix) );
		}
		return $ret;
	}
	public function set_145_nPeso ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_145_nPeso",$param,"ER20")) { 							// ER20
			$ret = $this->addNodes( new CTePHP_145_nPeso($param,$ix) );
		}
		return $ret;
	}
	public function set_146_PIN ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_146_PIN",$param,"ER37")) { 								// ER37
			$ret = $this->addNodes( new CTePHP_146_PIN($param,$ix) );
		}
		return $ret;
	}
	public function set_147_locRet ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_147_locRet($param,$ix) );
		return $ret;
	}
	public function set_148_CNPJ ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_148_CNPJ",$param,"ER4")) { 								// ER4
			$ret = $this->addNodes( new CTePHP_148_CNPJ($param,$ix) );
		}
		return $ret;
	}
	public function set_149_CPF ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_149_CPF",$param,"ER7")) { 								// ER7
			$ret = $this->addNodes( new CTePHP_149_CPF($param,$ix) );
		}
		return $ret;
	}
	public function set_150_xNome ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_150_xNome",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_150_xNome($param,$ix) );
		}
		return $ret;
	}
	public function set_151_xLgr ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_151_xLgr",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_151_xLgr($param,$ix) );
		}
		return $ret;
	}
	public function set_152_Nro ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_152_Nro",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_152_Nro($param,$ix) );
		}
		return $ret;
	}
	public function set_153_xCpl ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_153_xCpl",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_153_xCpl($param,$ix) );
		}
		return $ret;
	}
	public function set_154_xBairro ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_154_xBairro",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_154_xBairro($param,$ix) );
		}
		return $ret;
	}
	public function set_155_cMun ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_155_cMun",$param,"ER2")) { 								// ER2
			$ret = $this->addNodes( new CTePHP_155_cMun($param,$ix) );
		}
		return $ret;
	}
	public function set_156_xMun ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_156_xMun",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_156_xMun($param,$ix) );
		}
		return $ret;
	}
	public function set_157_UF ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_157_UF",$param,"D5")) {									// D5
			$ret = $this->addNodes( new CTePHP_157_UF($param,$ix) );
		}
		return $ret;
	}
	public function set_158_infNFe ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_158_infNFe($param,$ix) );
	}
	public function set_159_Chave ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_159_Chave",$param,"ER3")) { 								// ER3
			$ret = $this->addNodes( new CTePHP_159_Chave($param,$ix) );
		}
		return $ret;
	}
	public function set_160_PIN ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_160_PIN",$param,"ER37")) { 								// ER37
			$ret = $this->addNodes( new CTePHP_160_PIN($param,$ix) );
		}
		return $ret;
	}
	public function set_161_infOutros ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_161_infOutros($param,$ix) );
		return $ret;
	}
	public function set_162_tpDoc ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_162_tpDoc",$param,"D14")) {								// D14
			$ret = $this->addNodes( new CTePHP_162_tpDoc($param,$ix) );
		}
		return $ret;
	}
	public function set_163_descOutros ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_163_descOutros",$param,"ER32")) { 						// ER32
			$ret = $this->addNodes( new CTePHP_163_descOutros($param,$ix) );
		}
		return $ret;
	}
	public function set_164_nDoc ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_164_nDoc",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_164_nDoc($param,$ix) );
		}
		return $ret;
	}
	public function set_165_dEmi ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_165_dEmi",$param,"ER9")) { 								// ER9
			$ret = $this->addNodes( new CTePHP_165_dEmi($param,$ix) );
		}
		return $ret;
	}
	public function set_166_vDocFisc ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_166_vDocFisc",$param,"ER24")) { 							// ER24
			$ret = $this->addNodes( new CTePHP_166_vDocFisc($param,$ix) );
		}
		return $ret;
	}
	public function set_167_exped ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_167_exped($param,$ix) );
		return $ret;
	}
	public function set_168_CNPJ ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_168_CNPJ",$param,"ER6")) { 								// ER6
			$ret = $this->addNodes( new CTePHP_168_CNPJ($param,$ix) );
		}
		return $ret;
	}
	public function set_169_CPF ($param=null,$ix=0) {
		$ret = '';
		if ($this->validateRegExp("set_169_CPF",$param,"ER7")) { 								// ER7
			$ret = $this->addNodes( new CTePHP_169_CPF($param,$ix) );
		}
		return $ret;
	}
	public function set_170_IE ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_170_IE",$param,"ER26")) { 								// ER26
			$ret = $this->addNodes( new CTePHP_170_IE($param,$ix) );
		}
		return $ret;
	}
	public function set_171_xNome ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_171_xNome",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_171_xNome($param,$ix) );
		}
		return $ret;
	}
	public function set_172_fone ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_172_fone",$param,"ER36")) { 								// ER36
			$ret = $this->addNodes( new CTePHP_172_fone($param,$ix) );
		}
		return $ret;
	}
	public function set_173_enderExped ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_173_enderExped($param,$ix) );
		return $ret;
	}
	public function set_174_xLgr ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_174_xLgr",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_174_xLgr($param,$ix) );
		}
		return $ret;
	}
	public function set_175_nro ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_175_nro",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_175_nro($param,$ix) );
		}
		return $ret;
	}
	public function set_176_xCpl ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_176_xCpl",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_176_xCpl($param,$ix) );
		}
		return $ret;
	}
	public function set_177_xBairro ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_177_xBairro",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_177_xBairro($param,$ix) );
		}
		return $ret;
	}
	public function set_178_cMun ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_178_cMun",$param,"ER2")) { 								// ER2
			$ret = $this->addNodes( new CTePHP_178_cMun($param,$ix) );
		}
		return $ret;
	}
	public function set_179_xMun ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_179_xMun",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_179_xMun($param,$ix) );
		}
		return $ret;
	}
	public function set_180_CEP ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_180_CEP",$param," ER33")) { 								// ER33
			$ret = $this->addNodes( new CTePHP_180_CEP($param,$ix) );
		}
		return $ret;
	}
	public function set_181_UF ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_181_UF",$param,"D5")) {									// D5
			$ret = $this->addNodes( new CTePHP_181_UF($param,$ix) );
		}
		return $ret;
	}
	public function set_182_cPais ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_182_cPais",$param,"ER27")) { 							// ER27
			$ret = $this->addNodes( new CTePHP_182_cPais($param,$ix) );
		}
		return $ret;
	}
	public function set_183_xPais ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_183_xPais",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_183_xPais($param,$ix) );
		}
		return $ret;
	}
	public function set_184_email ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_184_email",$param,"ER47")) { 							// ER47
			$ret = $this->addNodes( new CTePHP_184_email($param,$ix) );
		}
		return $ret;
	}
	public function set_185_receb ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_185_receb($param,$ix) );
		return $ret;
	}
	public function set_186_CNPJ ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_186_CNPJ",$param,"ER6")) { 								// ER6
			$ret = $this->addNodes( new CTePHP_186_CNPJ($param,$ix) );
		}
		return $ret;
	}
	public function set_187_CPF ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_187_CPF",$param,"ER7")) { 								// ER7
			$ret = $this->addNodes( new CTePHP_187_CPF($param,$ix) );
		}
		return $ret;
	}
	public function set_188_IE ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_188_IE",$param,"ER26")) { 								// ER26
			$ret = $this->addNodes( new CTePHP_188_IE($param,$ix) );
		}
		return $ret;
	}
	public function set_189_xNome ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_189_xNome",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_189_xNome($param,$ix) );
		}
		return $ret;
	}
	public function set_190_fone ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_190_fone",$param,"ER36")) { 								// ER36
			$ret = $this->addNodes( new CTePHP_190_fone($param,$ix) );
		}
		return $ret;
	}
	public function set_191_enderReceb ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_191_enderReceb($param,$ix) );
		return $ret;
	}
	public function set_192_xLgr ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_192_xLgr",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_192_xLgr($param,$ix) );
		}
		return $ret;
	}
	public function set_193_nro ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_193_nro",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_193_nro($param,$ix) );
		}
		return $ret;
	}
	public function set_194_xCpl ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_194_xCpl",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_194_xCpl($param,$ix) );
		}
		return $ret;
	}
	public function set_195_xBairro ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_195_xBairro",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_195_xBairro($param,$ix) );
		}
		return $ret;
	}
	public function set_196_cMun ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_196_cMun",$param,"ER2")) { 								// ER2
			$ret = $this->addNodes( new CTePHP_196_cMun($param,$ix) );
		}
		return $ret;
	}
	public function set_197_xMun ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_197_xMun",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_197_xMun($param,$ix) );
		}
		return $ret;
	}
	public function set_198_CEP ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_198_CEP",$param," ER33")) { 								// ER33
			$ret = $this->addNodes( new CTePHP_198_CEP($param,$ix) );
		}
		return $ret;
	}
	public function set_199_UF ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_199_UF",$param,"D5")) {									// D5
			$ret = $this->addNodes( new CTePHP_199_UF($param,$ix) );
		}
		return $ret;
	}
	public function set_200_cPais ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_200_cPais",$param,"ER27")) { 							// ER27
			$ret = $this->addNodes( new CTePHP_200_cPais($param,$ix) );
		}
		return $ret;
	}
	public function set_201_xPais ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_201_xPais",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_201_xPais($param,$ix) );
		}
		return $ret;
	}
	public function set_202_email ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_202_email",$param,"ER47")) { 							// ER47
			$ret = $this->addNodes( new CTePHP_202_email($param,$ix) );
		}
		return $ret;
	}
	public function set_203_dest ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_203_dest($param,$ix) );
		return $ret;
	}
	public function set_204_CNPJ ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_204_CNPJ",$param,"ER6")) { 								// ER6
			$ret = $this->addNodes( new CTePHP_204_CNPJ($param,$ix) );
		}
		return $ret;
	}
	public function set_205_CPF ($param=null,$ix=0) {
		$ret = '';
		if ($this->validateRegExp("set_205_CPF",$param,"ER7")) { 								// ER7
			$ret = $this->addNodes( new CTePHP_205_CPF($param,$ix) );
		}
		return $ret;
	}
	public function set_206_IE ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_206_IE",$param,"ER26")) { 								// ER26
			$ret = $this->addNodes( new CTePHP_206_IE($param,$ix) );
		}
		return $ret;
	}
	public function set_207_xNome ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_207_xNome",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_207_xNome($param,$ix) );
		}
		return $ret;
	}
	public function set_208_fone ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_208_fone",$param,"ER36")) { 								// ER36
			$ret = $this->addNodes( new CTePHP_208_fone($param,$ix) );
		}
		return $ret;
	}
	public function set_209_ISUF ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_209_ISUF",$param,"ER38")) { 								// ER38
			$ret = $this->addNodes( new CTePHP_209_ISUF($param,$ix) );
		}
		return $ret;
	}
	public function set_210_enderDest ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_210_enderDest($param,$ix) );
		return $ret;
	}
	public function set_211_xLgr ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_211_xLgr",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_211_xLgr($param,$ix) );
		}
		return $ret;
	}
	public function set_212_nro ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_212_nro",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_212_nro($param,$ix) );
		}
		return $ret;
	}
	public function set_213_xCpl ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_213_xCpl",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_213_xCpl($param,$ix) );
		}
		return $ret;
	}
	public function set_214_xBairro ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_214_xBairro",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_214_xBairro($param,$ix) );
		}
		return $ret;
	}
	public function set_215_cMun ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_215_cMun",$param,"ER2")) { 								// ER2
			$ret = $this->addNodes( new CTePHP_215_cMun($param,$ix) );
		}
		return $ret;
	}
	public function set_216_xMun ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_216_xMun",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_216_xMun($param,$ix) );
		}
		return $ret;
	}
	public function set_217_CEP ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_217_CEP",$param," ER33")) { 								// ER33
			$ret = $this->addNodes( new CTePHP_217_CEP($param,$ix) );
		}
		return $ret;
	}
	public function set_218_UF ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_218_UF",$param,"D5")) {									// D5
			$ret = $this->addNodes( new CTePHP_218_UF($param,$ix) );
		}
		return $ret;
	}
	public function set_219_cPais ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_219_cPais",$param,"ER27")) { 							// ER27
			$ret = $this->addNodes( new CTePHP_219_cPais($param,$ix) );
		}
		return $ret;
	}
	public function set_220_xPais ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_220_xPais",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_220_xPais($param,$ix) );
		}
		return $ret;
	}
	public function set_221_email ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_221_email",$param,"ER47")) { 							// ER47
			$ret = $this->addNodes( new CTePHP_221_email($param,$ix) );
		}
		return $ret;
	}
	public function set_222_locEnt ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_222_locEnt($param,$ix) );
		return $ret;
	}
	public function set_223_CNPJ ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_223_CNPJ",$param,"ER4")) { 								// ER4
			$ret = $this->addNodes( new CTePHP_223_CNPJ($param,$ix) );
		}
		return $ret;
	}
	public function set_224_CPF ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_224_CPF",$param,"ER7")) { 								// ER7
			$ret = $this->addNodes( new CTePHP_224_CPF($param,$ix) );
		}
		return $ret;
	}
	public function set_225_xNome ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_225_xNome",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_225_xNome($param,$ix) );
		}
		return $ret;
	}
	public function set_226_xLgr ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_226_xLgr",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_226_xLgr($param,$ix) );
		}
		return $ret;
	}
	public function set_227_nro ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_227_nro",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_227_nro($param,$ix) );
		}
		return $ret;
	}
	public function set_228_xCpl ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_228_xCpl",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_228_xCpl($param,$ix) );
		}
		return $ret;
	}
	public function set_229_xBairro ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_229_xBairro",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_229_xBairro($param,$ix) );
		}
		return $ret;
	}
	public function set_230_cMun ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_230_cMun",$param,"ER2")) { 								// ER2
			$ret = $this->addNodes( new CTePHP_230_cMun($param,$ix) );
		}
		return $ret;
	}
	public function set_231_xMun ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_231_xMun",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_231_xMun($param,$ix) );
		}
		return $ret;
	}
	public function set_232_UF ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_232_UF",$param,"D5")) {									// D5
			$ret = $this->addNodes( new CTePHP_232_UF($param,$ix) );
		}
		return $ret;
	}
	public function set_233_vPrest ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_233_vPrest($param,$ix) );
		return $ret;
	}
	public function set_234_vTPrest ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_234_vTPrest",$param,"ER23")) { 							// ER23
			$ret = $this->addNodes( new CTePHP_234_vTPrest($param,$ix) );
		}
		return $ret;
	}
	public function set_235_vRec ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_235_vRec",$param,"ER23")) { 								// ER23
			$ret = $this->addNodes( new CTePHP_235_vRec($param,$ix) );
		}
		return $ret;
	}
	public function set_236_Comp ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_236_Comp($param,$ix) );
		return $ret;
	}
	public function set_237_xNome ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_237_xNome",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_237_xNome($param,$ix) );
		}
		return $ret;
	}
	public function set_238_vComp ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_238_vComp",$param,"ER23")) { 							// ER23
			$ret = $this->addNodes( new CTePHP_238_vComp($param,$ix) );
		}
		return $ret;
	}
	public function set_239_imp ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_239_imp($param,$ix) );
		return $ret;
	}
	public function set_240_ICMS ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_240_ICMS($param,$ix) );
		return $ret;
	}
	public function set_241_ICMS00 ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_241_ICMS00($param,$ix) );
		return $ret;
	}
	public function set_242_CST ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_242_CST",$param,"D17")) {								// D17
			$ret = $this->addNodes( new CTePHP_242_CST($param,$ix) );
		}
		return $ret;
	}
	public function set_243_vBC ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_243_vBC",$param,"ER23")) { 								// ER23
			$ret = $this->addNodes( new CTePHP_243_vBC($param,$ix) );
		}
		return $ret;
	}
	public function set_244_pICMS ($param=null,$ix=0) {
		$ret = '';
		if ($this->validateRegExp("set_244_pICMS",$param,"ER10")) {								// ER10
			$ret = $this->addNodes( new CTePHP_244_pICMS($param,$ix) );
		}
		return $ret;
	}
	public function set_245_vICMS ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_245_vICMS",$param,"ER23")) { 							// ER23
			$ret = $this->addNodes( new CTePHP_245_vICMS($param,$ix) );
		}
		return $ret;
	}
	public function set_246_ICMS20 ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_246_ICMS20($param,$ix) );
		return $ret;
	}
	public function set_247_CST ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_247_CST",$param,"D18")) {								// D18
			$ret = $this->addNodes( new CTePHP_247_CST($param,$ix) );
		}
		return $ret;
	}
	public function set_248_pRedBC ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_248_pRedBC",$param,"ER11")) { 							// ER11
			$ret = $this->addNodes( new CTePHP_248_pRedBC($param,$ix) );
		}
		return $ret;
	}
	public function set_249_vBC ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_249_vBC",$param,"ER23")) { 								// ER23
			$ret = $this->addNodes( new CTePHP_249_vBC($param,$ix) );
		}
		return $ret;
	}
	public function set_250_pICMS ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_250_pICMS",$param,"ER10")) {								// ER10
			$ret = $this->addNodes( new CTePHP_250_pICMS($param,$ix) );
		}
		return $ret;
	}
	public function set_251_vICMS ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_251_vICMS",$param,"ER23")) { 							// ER23
			$ret = $this->addNodes( new CTePHP_251_vICMS($param,$ix) );
		}
		return $ret;
	}
	public function set_252_ICMS45 ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_252_ICMS45($param,$ix) );
		return $ret;
	}
	public function set_253_CST ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_253_CST",$param,"D19")) {								// D19
			$ret = $this->addNodes( new CTePHP_253_CST($param,$ix) );
		}
		return $ret;
	}
	public function set_254_ICMS60 ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_254_ICMS60($param,$ix) );
		return $ret;
	}
	public function set_255_CST ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_255_CST",$param,"D20")) {								// D20
			$ret = $this->addNodes( new CTePHP_255_CST($param,$ix) );
		}
		return $ret;
	}
	public function set_256_vBCSTRet ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_256_vBCSTRet",$param,"ER23")) { 							// ER23
			$ret = $this->addNodes( new CTePHP_256_vBCSTRet($param,$ix) );
		}
		return $ret;
	}
	public function set_257_vICMSSTRet ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_257_vICMSSTRet",$param,"ER23")) { 						// ER23
			$ret = $this->addNodes( new CTePHP_257_vICMSSTRet($param,$ix) );
		}
		return $ret;
	}
	public function set_258_pICMSSTRet ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_258_pICMSSTRet",$param,"ER10")) {						// ER10
			$ret = $this->addNodes( new CTePHP_258_pICMSSTRet($param,$ix) );
		}
		return $ret;
	}
	public function set_259_vCred ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_259_vCred",$param,"ER23")) { 							// ER23
			$ret = $this->addNodes( new CTePHP_259_vCred($param,$ix) );
		}
		return $ret;
	}
	public function set_260_ICMS90 ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_260_ICMS90($param,$ix) );
		return $ret;
	}
	public function set_261_CST ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_261_CST",$param,"D21")) {								// D21
			$ret = $this->addNodes( new CTePHP_261_CST($param,$ix) );
		}
		return $ret;
	}
	public function set_262_pRedBC ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_262_pRedBC",$param,"ER11")) { 							// ER11
			$ret = $this->addNodes( new CTePHP_262_pRedBC($param,$ix) );
		}
		return $ret;
	}
	public function set_263_vBC ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_263_vBC",$param,"ER23")) { 								// ER23
			$ret = $this->addNodes( new CTePHP_263_vBC($param,$ix) );
		}
		return $ret;
	}
	public function set_264_pICMS ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_264_pICMS",$param,"ER10")) {								// ER10
			$ret = $this->addNodes( new CTePHP_264_pICMS($param,$ix) );
		}
		return $ret;
	}
	public function set_265_vICMS ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_265_vICMS",$param,"ER23")) { 							// ER23
			$ret = $this->addNodes( new CTePHP_265_vICMS($param,$ix) );
		}
		return $ret;
	}
	public function set_266_vCred ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_266_vCred",$param,"ER23")) { 							// ER23
			$ret = $this->addNodes( new CTePHP_266_vCred($param,$ix) );
		}
		return $ret;
	}
	public function set_267_ICMSOutraUF ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_267_ICMSOutraUF($param,$ix) );
		return $ret;
	}
	public function set_268_CST ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_268_CST",$param,"D21")) {								// D21
			$ret = $this->addNodes( new CTePHP_268_CST($param,$ix) );
		}
		return $ret;
	}
	public function set_269_pRedBCOutraUF ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_269_pRedBCOutraUF",$param,"ER11")) { 					// ER11
			$ret = $this->addNodes( new CTePHP_269_pRedBCOutraUF($param,$ix) );
		}
		return $ret;
	}
	public function set_270_vBCOutraUF ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_270_vBCOutraUF",$param,"ER23")) { 						// ER23
			$ret = $this->addNodes( new CTePHP_270_vBCOutraUF($param,$ix) );
		}
		return $ret;
	}
	public function set_271_pICMSOutraUF ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_271_pICMSOutraUF",$param,"ER10")) {						// ER10
			$ret = $this->addNodes( new CTePHP_271_pICMSOutraUF($param,$ix) );
		}
		return $ret;
	}
	public function set_272_vICMSOutraUF ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_272_vICMSOutraUF",$param,"ER23")) { 						// ER23
			$ret = $this->addNodes( new CTePHP_272_vICMSOutraUF($param,$ix) );
		}
		return $ret;
	}
	public function set_273_ICMSSN ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_273_ICMSSN($param,$ix) );
		return $ret;
	}
	public function set_274_indSN ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_274_indSN",$param,"D22")) {								// D22
			$ret = $this->addNodes( new CTePHP_274_indSN($param,$ix) );
		}
		return $ret;
	}
	public function set_275_infAdFisco ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_275_infAdFisco",$param,"ER32")) { 						// ER32
			$ret = $this->addNodes( new CTePHP_275_infAdFisco($param,$ix) );
		}
		return $ret;
	}
	public function set_276_infCTeNorm ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_276_infCTeNorm($param,$ix) );
		return $ret;
	}
	public function set_277_infCarga ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_277_infCarga($param,$ix) );
		return $ret;
	}
	public function set_278_vCarga ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_278_vCarga",$param,"ER23")) { 							// ER23
			$ret = $this->addNodes( new CTePHP_278_vCarga($param,$ix) );
		}
		return $ret;
	}
	public function set_279_proPred ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_279_proPred",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_279_proPred($param,$ix) );
		}
		return $ret;
	}
	public function set_280_xOutCat ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_280_xOutCat",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_280_xOutCat($param,$ix) );
		}
		return $ret;
	}
	public function set_281_infQ ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_281_infQ($param,$ix) );
		return $ret;
	}
	public function set_282_cUnid ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_282_cUnid",$param,"D15")) {								// D15
			$ret = $this->addNodes( new CTePHP_282_cUnid($param,$ix) );
		}
		return $ret;
	}
	public function set_283_tpMed ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_283_tpMed",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_283_tpMed($param,$ix) );
		}
		return $ret;
	}
	public function set_284_qCarga ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_284_qCarga",$param,"ER17")) { 							// ER17
			$ret = $this->addNodes( new CTePHP_284_qCarga($param,$ix) );
		}
		return $ret;
	}
	public function set_285_contQt ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_285_contQt($param,$ix) );
		return $ret;
	}
	public function set_286_nCont ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_286_nCont",$param,"ER42")) { 							// ER42
			$ret = $this->addNodes( new CTePHP_286_nCont($param,$ix) );
		}
		return $ret;
	}
	public function set_287_lacContQt ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_287_lacContQt($param,$ix) );
		return $ret;
	}
	public function set_288_nLacre ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_288_nLacre",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_288_nLacre($param,$ix) );
		}
		return $ret;
	}
	public function set_289_dPrev ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_289_dPrev",$param,"ER9")) { 								// ER9
			$ret = $this->addNodes( new CTePHP_289_dPrev($param,$ix) );
		}
		return $ret;
	}
	public function set_290_docAnt ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_290_docAnt($param,$ix) );
		return $ret;
	}
	public function set_291_emiDocAnt ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_291_emiDocAnt($param,$ix) );
		return $ret;
	}
	public function set_292_CNPJ ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_292_CNPJ",$param,"ER6")) { 								// ER6
			$ret = $this->addNodes( new CTePHP_292_CNPJ($param,$ix) );
		}
		return $ret;
	}
	public function set_293_CPF ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_293_CPF",$param,"ER7")) { 								// ER7
			$ret = $this->addNodes( new CTePHP_293_CPF($param,$ix) );
		}
		return $ret;
	}
	public function set_294_IE ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_294_IE",$param,"ER25")) { 								// ER25
			$ret = $this->addNodes( new CTePHP_294_IE($param,$ix) );
		}
		return $ret;
	}
	public function set_295_UF ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_295_UF",$param,"D5")) {									// D5
			$ret = $this->addNodes( new CTePHP_295_UF($param,$ix) );
		}
		return $ret;
	}
	public function set_296_xNome ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_296_xNome",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_296_xNome($param,$ix) );
		}
		return $ret;
	}
	public function set_297_idDocAnt ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_297_idDocAnt($param,$ix) );
		return $ret;
	}
	public function set_298_idDocAntPap ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_298_idDocAntPap($param,$ix) );
		return $ret;
	}
	public function set_299_tpDoc ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_299_tpDoc",$param,"D24")) {								// D24
			$ret = $this->addNodes( new CTePHP_299_tpDoc($param,$ix) );
		}
		return $ret;
	}
	public function set_300_serie ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_300_serie",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_300_serie($param,$ix) );
		}
		return $ret;
	}
	public function set_301_subser ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_301_subser",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_301_subser($param,$ix) );
		}
		return $ret;
	}
	public function set_302_nDoc ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_302_nDoc",$param,"ER39")) { 								// ER39
			$ret = $this->addNodes( new CTePHP_302_nDoc($param,$ix) );
		}
		return $ret;
	}
	public function set_303_dEmi ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_303_dEmi",$param,"ER9")) { 								// ER9
			$ret = $this->addNodes( new CTePHP_303_dEmi($param,$ix) );
		}
		return $ret;
	}
	public function set_304_idDocAntEle ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_304_idDocAntEle($param,$ix) );
		return $ret;
	}
	public function set_305_chave ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_305_chave",$param,"ER3")) { 								// ER3
			$ret = $this->addNodes( new CTePHP_305_chave($param,$ix) );
		}
		return $ret;
	}
	public function set_306_seg ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_306_seg($param,$ix) );
		return $ret;
	}
	public function set_307_respSeg ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_307_respSeg",$param,"D16")) {							// D16
			$ret = $this->addNodes( new CTePHP_307_respSeg($param,$ix) );
		}
		return $ret;
	}
	public function set_308_xSeg ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_308_xSeg",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_308_xSeg($param,$ix) );
		}
		return $ret;
	}
	public function set_309_nApol ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_309_nApol",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_309_nApol($param,$ix) );
		}
		return $ret;
	}
	public function set_310_nAver ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_310_nAver",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_310_nAver($param,$ix) );
		}
		return $ret;
	}
	public function set_311_vCarga ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_311_vCarga",$param,"ER24")) { 							// ER24
			$ret = $this->addNodes( new CTePHP_311_vCarga($param,$ix) );
		}
		return $ret;
	}
	public function set_312_infModal ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_312_infModal($param,$ix) );
		return $ret;
	}
	public function set_313_versaoModal ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_313_versaoModal",$param,"ER40")) { 						// ER40
			$ret = $this->addNodes( new CTePHP_313_versaoModal($param,$ix) );
		}
		return $ret;
	}
	public function set_314_xs ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_314_xs($param,$ix) );
		return $ret;
	}
	
	// ******************************************** MODAL ******************************************
	public function append_314_modal($fragment,$ix) {
		if(!empty($this->arr_nodes[314][$ix]->element)) {
			$this->arr_nodes[314][$ix]->element->appendChild($fragment);
		}
	}
	// ******************************************** MODAL ******************************************
	
	public function set_315_peri ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_315_peri($param,$ix) );
		return $ret;
	}
	public function set_316_nONU ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_316_nONU",$param,"ER41")) { 								// ER41
			$ret = $this->addNodes( new CTePHP_316_nONU($param,$ix) );
		}
		return $ret;
	}
	public function set_317_xNomeAE ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_317_xNomeAE",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_317_xNomeAE($param,$ix) );
		}
		return $ret;
	}
	public function set_318_xClaRisco ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_318_xClaRisco",$param,"ER32")) { 						// ER32
			$ret = $this->addNodes( new CTePHP_318_xClaRisco($param,$ix) );
		}
		return $ret;
	}
	public function set_319_grEmb ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_319_grEmb",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_319_grEmb($param,$ix) );
		}
		return $ret;
	}
	public function set_320_qTotProd ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_320_qTotProd",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_320_qTotProd($param,$ix) );
		}
		return $ret;
	}
	public function set_321_qVolTipo ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_321_qVolTipo",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_321_qVolTipo($param,$ix) );
		}
		return $ret;
	}
	public function set_322_pontoFulgor ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_322_pontoFulgor",$param,"ER32")) { 						// ER32
			$ret = $this->addNodes( new CTePHP_322_pontoFulgor($param,$ix) );
		}
		return $ret;
	}
	public function set_323_veicNovos ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_323_veicNovos($param,$ix) );
		return $ret;
	}
	public function set_324_chassi ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_324_chassi",$param,"ER42")) { 							// ER42
			$ret = $this->addNodes( new CTePHP_324_chassi($param,$ix) );
		}
		return $ret;
	}
	public function set_325_cCor ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_325_cCor",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_325_cCor($param,$ix) );
		}
		return $ret;
	}
	public function set_326_xCor ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_326_xCor",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_326_xCor($param,$ix) );
		}
		return $ret;
	}
	public function set_327_cMod ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_327_cMod",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_327_cMod($param,$ix) );
		}
		return $ret;
	}
	public function set_328_vUnit ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_328_vUnit",$param,"ER23")) { 							// ER23
			$ret = $this->addNodes( new CTePHP_328_vUnit($param,$ix) );
		}
		return $ret;
	}
	public function set_329_vFrete ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_329_vFrete",$param,"ER23")) { 							// ER23
			$ret = $this->addNodes( new CTePHP_329_vFrete($param,$ix) );
		}
	}
	public function set_330_cobr ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_330_cobr($param,$ix) );
		return $ret;
	}
	public function set_331_fat ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_331_fat($param,$ix) );
		return $ret;
	}
	public function set_332_nFat ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_332_nFat",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_332_nFat($param,$ix) );
		}
		return $ret;
	}
	public function set_333_vOrig ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_333_vOrig",$param,"ER24")) { 							// ER24
			$ret = $this->addNodes( new CTePHP_333_vOrig($param,$ix) );
		}
		return $ret;
	}
	public function set_334_vDesc ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_334_vDesc",$param,"ER24")) { 							// ER24
			$ret = $this->addNodes( new CTePHP_334_vDesc($param,$ix) );
		}
		return $ret;
	}
	public function set_335_vLiq ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_335_vLiq",$param,"ER24")) { 								// ER24
			$ret = $this->addNodes( new CTePHP_335_vLiq($param,$ix) );
		}
		return $ret;
	}
	public function set_336_dup ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_336_dup($param,$ix) );
		return $ret;
	}
	public function set_337_nDup ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_337_nDup",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_337_nDup($param,$ix) );
		}
		return $ret;
	}
	public function set_338_dVenc ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_338_dVenc",$param,"ER9")) { 								// ER9
			$ret = $this->addNodes( new CTePHP_338_dVenc($param,$ix) );
		}
		return $ret;
	}
	public function set_339_vDup ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_339_vDup",$param,"ER24")) { 								// ER24
			$ret = $this->addNodes( new CTePHP_339_vDup($param,$ix) );
		}
		return $ret;
	}
	public function set_340_infCteSub ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_340_infCteSub($param,$ix) );
		return $ret;
	}
	public function set_341_chCte ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_341_chCte",$param,"ER3")) { 								// ER3
			$ret = $this->addNodes( new CTePHP_341_chCte($param,$ix) );
		}
		return $ret;
	}
	public function set_342_tomaICMS ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_342_tomaICMS($param,$ix) );
		return $ret;
	}
	public function set_343_refNFe ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_343_refNFe",$param,"ER3")) { 							// ER3
			$ret = $this->addNodes( new CTePHP_343_refNFe($param,$ix) );
		}
		return $ret;
	}
	public function set_344_refNF ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_344_refNF($param,$ix) );
		return $ret;
	}
	public function set_345_CNPJ ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_345_CNPJ",$param,"ER4")) { 								// ER4
			$ret = $this->addNodes( new CTePHP_345_CNPJ($param,$ix) );
		}
		return $ret;
	}
	public function set_346_mod ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_346_mod",$param,"D25")) {								// D25
			$ret = $this->addNodes( new CTePHP_346_mod($param,$ix) );
		}
		return $ret;
	}
	public function set_347_serie ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_347_serie",$param,"ER30")) { 							// ER30
			$ret = $this->addNodes( new CTePHP_347_serie($param,$ix) );
		}
		return $ret;
	}
	public function set_348_subserie ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_348_subserie",$param,"ER30")) { 							// ER30
			$ret = $this->addNodes( new CTePHP_348_subserie($param,$ix) );
		}
		return $ret;
	}
	public function set_349_nro ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_349_nro",$param,"ER43")) { 								// ER43
			$ret = $this->addNodes( new CTePHP_349_nro($param,$ix) );
		}
		return $ret;
	}
	public function set_350_valor ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_350_valor",$param,"ER23")) { 							// ER23
			$ret = $this->addNodes( new CTePHP_350_valor($param,$ix) );
		}
		return $ret;
	}
	public function set_351_dEmi ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_351_dEmi",$param,"ER9")) { 								// ER9
			$ret = $this->addNodes( new CTePHP_351_dEmi($param,$ix) );
		}
		return $ret;
	}
	public function set_352_refCte ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_352_refCte",$param,"ER3")) { 							// ER3
			$ret = $this->addNodes( new CTePHP_352_refCte($param,$ix) );
		}
		return $ret;
	}
	public function set_353_tomaNaoICMS ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_353_tomaNaoICMS($param,$ix) );
		return $ret;
	}
	public function set_354_refCteAnu ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_354_refCteAnu",$param,"ER3")) { 							// ER3
			$ret = $this->addNodes( new CTePHP_354_refCteAnu($param,$ix) );
		}
		return $ret;
	}
	public function set_355_infCteComp ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_355_infCteComp($param,$ix) );
		return $ret;
	}
	public function set_356_chave ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateRegExp("set_356_chave",$param,"ER3")) { 								// ER3
			$ret = $this->addNodes( new CTePHP_356_chave($param,$ix) );
		}
		return $ret;
	}
	public function set_357_vPresComp ($param=null,$ix=0) { 	
		$ret = '';
		$ret = $this->addNodes( new CTePHP_357_vPresComp($param,$ix) );
		return $ret;
	}
	public function set_358_vTPrest ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateRegExp("set_358_vTPrest",$param,"ER23")) { 							// ER23
			$ret = $this->addNodes( new CTePHP_358_vTPrest($param,$ix) );
		}
		return $ret;
	}
	public function set_359_compComp ($param=null,$ix=0) { 	
		$ret = '';
		$ret = $this->addNodes( new CTePHP_359_compComp($param,$ix) );
		return $ret;
	}
	public function set_360_xNome ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateRegExp("set_360_xNome",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_360_xNome($param,$ix) );
		}
		return $ret;
	}
	public function set_361_vComp ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateRegExp("set_361_vComp",$param,"ER23")) { 							// ER23
			$ret = $this->addNodes( new CTePHP_361_vComp($param,$ix) );
		}
		return $ret;
	}
	public function set_362_impComp ($param=null,$ix=0) { 	
		$ret = '';
		$ret = $this->addNodes( new CTePHP_362_impComp($param,$ix) );
		return $ret;
	}
	public function set_363_ICMSComp ($param=null,$ix=0) { 	
		$ret = '';
		$ret = $this->addNodes( new CTePHP_363_ICMSComp($param,$ix) );
		return $ret;
	}
	public function set_364_ICMS00 ($param=null,$ix=0) { 	
		$ret = '';
		$ret = $this->addNodes( new CTePHP_364_ICMS00($param,$ix) );
		return $ret;
	}
	public function set_365_CST ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateDomain("set_365_CST",$param,"D17")) {								// D17
			$ret = $this->addNodes( new CTePHP_365_CST($param,$ix) );
		}
		return $ret;
	}
	public function set_366_vBC ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateRegExp("set_366_vBC",$param,"ER23")) { 								// ER23
			$ret = $this->addNodes( new CTePHP_366_vBC($param,$ix) );
		}
		return $ret;
	}
	public function set_367_pICMS ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateRegExp("set_367_pICMS",$param,"ER10")) {								// ER10
			$ret = $this->addNodes( new CTePHP_367_pICMS($param,$ix) );
		}
		return $ret;
	}
	public function set_368_vICMS ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateRegExp("set_368_vICMS",$param,"ER23")) { 							// ER23
			$ret = $this->addNodes( new CTePHP_368_vICMS($param,$ix) );
		}
		return $ret;
	}
	public function set_369_ICMS20 ($param=null,$ix=0) { 	
		$ret = '';
		$ret = $this->addNodes( new CTePHP_369_ICMS20($param,$ix) );
		return $ret;
	}
	public function set_370_CST ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateDomain("set_370_CST",$param,"D18")) {								// D18
			$ret = $this->addNodes( new CTePHP_370_CST($param,$ix) );
		}
		return $ret;
	}
	public function set_371_pRedBC ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateRegExp("set_371_pRedBC",$param,"ER11")) { 							// ER11
			$ret = $this->addNodes( new CTePHP_371_pRedBC($param,$ix) );
		}
		return $ret;
	}
	public function set_372_vBC ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateRegExp("set_372_vBC",$param,"ER23")) { 								// ER23
			$ret = $this->addNodes( new CTePHP_372_vBC($param,$ix) );
		}
		return $ret;
	}
	public function set_373_pICMS ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateRegExp("set_373_pICMS",$param,"ER10")) {								// ER10
			$ret = $this->addNodes( new CTePHP_373_pICMS($param,$ix) );
		}
		return $ret;
	}
	public function set_374_vICMS ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateRegExp("set_374_vICMS",$param,"ER23")) { 							// ER23
			$ret = $this->addNodes( new CTePHP_374_vICMS($param,$ix) );
		}
		return $ret;
	}
	public function set_375_ICMS45 ($param=null,$ix=0) { 	
		$ret = '';
		$ret = $this->addNodes( new CTePHP_375_ICMS45($param,$ix) );
		return $ret;
	}
	public function set_376_CST ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_376_CST",$param,"D19")) {								// D19
			$ret = $this->addNodes( new CTePHP_376_CST($param,$ix) );
		}
		return $ret;
	}
	public function set_377_ICMS60 ($param=null,$ix=0) { 	
		$ret = '';
		$ret = $this->addNodes( new CTePHP_377_ICMS60($param,$ix) );
		return $ret;
	}
	public function set_378_CST ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateDomain("set_378_CST",$param,"D20")) {								// D20
			$ret = $this->addNodes( new CTePHP_378_CST($param,$ix) );
		}
		return $ret;
	}
	public function set_379_vBCSTRet ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateRegExp("set_379_vBCSTRet",$param,"ER23")) { 							// ER23
			$ret = $this->addNodes( new CTePHP_379_vBCSTRet($param,$ix) );
		}
		return $ret;
	}
	public function set_380_vICMSSTRet ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateRegExp("set_380_vICMSSTRet",$param,"ER23")) { 						// ER23
			$ret = $this->addNodes( new CTePHP_380_vICMSSTRet($param,$ix) );
		}
		return $ret;
	}
	public function set_381_pICMSSTRet ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateRegExp("set_381_pICMSSTRet",$param,"ER10")) {						// ER10
			$ret = $this->addNodes( new CTePHP_381_pICMSSTRet($param,$ix) );
		}
		return $ret;
	}
	public function set_382_vCred ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateRegExp("set_382_vCred",$param,"ER23")) { 							// ER23
			$ret = $this->addNodes( new CTePHP_382_vCred($param,$ix) );
		}
		return $ret;
	}
	public function set_383_ICMS90 ($param=null,$ix=0) { 	
		$ret = '';
		$ret = $this->addNodes( new CTePHP_383_ICMS90($param,$ix) );
		return $ret;
	}
	public function set_384_CST ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateDomain("set_384_CST",$param,"D21")) {								// D21
			$ret = $this->addNodes( new CTePHP_384_CST($param,$ix) );
		}
		return $ret;
	}
	public function set_385_pRedBC ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateRegExp("set_385_pRedBC",$param,"ER11")) { 							// ER11
			$ret = $this->addNodes( new CTePHP_385_pRedBC($param,$ix) );
		}
		return $ret;
	}
	public function set_386_vBC ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_386_vBC",$param,"ER23")) { 								// ER23
			$ret = $this->addNodes( new CTePHP_386_vBC($param,$ix) );
		}
		return $ret;
	}
	public function set_387_pICMS ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateRegExp("set_387_pICMS",$param,"ER10")) {								// ER10
			$ret = $this->addNodes( new CTePHP_387_pICMS($param,$ix) );
		}
		return $ret;
	}
	public function set_388_vICMS ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateRegExp("set_388_vICMS",$param,"ER23")) { 							// ER23
			$ret = $this->addNodes( new CTePHP_388_vICMS($param,$ix) );
		}
		return $ret;
	}
	public function set_389_vCred ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateRegExp("set_389_vCred",$param,"ER23")) { 							// ER23
			$ret = $this->addNodes( new CTePHP_389_vCred($param,$ix) );
		}
		return $ret;
	}
	public function set_390_ICMSOutraUF ($param=null,$ix=0) { 	
		$ret = '';
		$ret = $this->addNodes( new CTePHP_390_ICMSOutraUF($param,$ix) );
		return $ret;
	}
	public function set_391_CST ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateDomain("set_391_CST",$param,"D21")) {								// D21
			$ret = $this->addNodes( new CTePHP_391_CST($param,$ix) );
		}			
		return $ret;
	}
	public function set_392_pRedBCOutraUF ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateRegExp("set_392_pRedBCOutraUF",$param,"ER11")) { 					// ER11
			$ret = $this->addNodes( new CTePHP_392_pRedBCOutraUF($param,$ix) );
		}
		return $ret;
	}
	public function set_393_vBCOutraUF ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateRegExp("set_393_vBCOutraUF",$param,"ER23")) { 						// ER23
			$ret = $this->addNodes( new CTePHP_393_vBCOutraUF($param,$ix) );
		}
		return $ret;
	}
	public function set_394_pICMSOutraUF ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateRegExp("set_394_pICMSOutraUF",$param,"ER10")) {						// ER10
			$ret = $this->addNodes( new CTePHP_394_pICMSOutraUF($param,$ix) );
		}
		return $ret;
	}
	public function set_395_vICMSOutraUF ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateRegExp("set_395_vICMSOutraUF",$param,"ER23")) { 						// ER23
			$ret = $this->addNodes( new CTePHP_395_vICMSOutraUF($param,$ix) );
		}
		return $ret;
	}
	public function set_396_ICMSSN ($param=null,$ix=0) { 	
		$ret = '';
		$ret = $this->addNodes( new CTePHP_396_ICMSSN($param,$ix) );
		return $ret;
	}
	public function set_397_indSN ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateDomain("set_397_indSN",$param,"D22")) {								// D22
			$ret = $this->addNodes( new CTePHP_397_indSN($param,$ix) );
		}
		return $ret;
	}
	public function set_398_infAdFisco ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateRegExp("set_398_infAdFisco",$param,"ER32")) { 						// ER32
			$ret = $this->addNodes( new CTePHP_398_infAdFisco($param,$ix) );
		}
		return $ret;
	}
	public function set_399_infCteAnu ($param=null,$ix=0) { 	
		$ret = '';
		$ret = $this->addNodes( new CTePHP_399_infCteAnu($param,$ix) );
		return $ret;
	}
	public function set_400_chCte ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_400_chCte",$param,"ER3")) { 								// ER3
			$ret = $this->addNodes( new CTePHP_400_chCte($param,$ix) );
		}
		return $ret;
	}
	public function set_401_dEmi ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_401_dEmi",$param,"ER9")) { 								// ER9
			$ret = $this->addNodes( new CTePHP_401_dEmi($param,$ix) );
		}
		return $ret;
	}
	
	private function addNodes($obj) {
		if ($obj->get_tipo()=="G") { $obj->set_element($this->dom->createElement($obj->get_name())); }
		if ($obj->get_tipo()=="E") { $obj->set_element($this->dom->createElement($obj->get_name(),$obj->get_value())); }
		if ($obj->get_tipo()=="A") { $obj->set_element($this->dom->createElement($obj->get_name(),$obj->get_value())); }
		if ($obj->get_tipo()=="M") { $obj->set_element($this->dom->createDocumentFragment()); }
		$this->arr_nodes[$obj->get_id()][] = $obj;
		return (count($this->arr_nodes[$obj->get_id()])-1);
	}
	
	private function generateTree() {
		$this->set_3_Id();
		$this->set_16_cDV();
		$aux = $this->arr_nodes;
		ksort($aux);
		foreach ($aux as $k => $v) {
			foreach ($v as $value) {
				if (isset($aux[$value->get_pai()][$value->get_index()])) {
					switch ($value->get_tipo()) {
						case 'G':
							if($value->get_element()!='') $aux[$value->get_pai()][$value->get_index()]->element->appendChild($value->get_element());
							break;
						case 'A':
							$aux[$value->get_pai()][$value->get_index()]->element->setAttribute($value->get_name(),$value->get_value());
							break;
						case 'E':
							if($value->get_element()!='') $aux[$value->get_pai()][$value->get_index()]->element->appendChild($value->get_element());
							break;
						case 'M':
							if($value->get_element()!='') $aux[$value->get_pai()][$value->get_index()]->element->appendChild($value->get_element());
							break;
					}
				}
			}
		}
		$this->CTe_Finalized = $this->CTe;
		$this->CTe_Finalized->appendChild($aux[1][0]->get_element());
	}
	
	public function viewErrors() { 
		if (count($this->arr_erro)>0) {
			echo "<pre>"; 
			print_r($this->arr_erro);
			echo "</pre>";
			die();
		} else {
			die("Nenhum erro encontrado.");
		}
	}

	public function drawXML($mode=null,$file_name=null) {
		if (count($this->arr_erro)>0) {
			echo "An error occurred attempting to save the file ".strtoupper($file_name)." using the method of the generic object.<br>";
			echo "<pre>";
			print_r($this->arr_erro);
			echo "</pre>";
		} else {
			$this->generateTree();
			$this->dom_Finalized = $this->dom;
			$this->dom_Finalized->appendChild($this->CTe_Finalized);
			$erro = $this->dom_Finalized->getElementsByTagName("erro")->length;
			if ($mode&&$erro==0) {
				switch ($mode) {
					case 'object':
						echo "<pre>"; print_r($this->arr_nodes); echo "</pre>";
						break;
					case 'tree':
						echo "<pre>"; echo htmlentities($this->dom_Finalized->saveXML()); echo "</pre>";
						break;
					case 'file':
						if ($file_name) {
							$this->dom_Finalized->saveXML();
							$this->dom_Finalized->save($file_name); 
						} else { echo "Expected file name parameter."; }
						break;
				}
			} else { if($erro==0) { echo "Expected mode parameter."; } }
		}
	}
}

$xml = new CTePHP(1);

$var_1_infCte = $xml->set_1_infCte("valor");
$var_2_versao = $xml->set_2_versao("1.04");
//$var_3_Id = $xml->set_3_Id("valor");
$var_4_ide = $xml->set_4_ide("valor");
$var_5_cUF = $xml->set_5_cUF("valor");
$var_6_cCT = $xml->set_6_cCT("00001234");
$var_7_CFOP = $xml->set_7_CFOP("valor");
$var_8_natOp = $xml->set_8_natOp("valor");
$var_9_forPag = $xml->set_9_forPag("valor");
$var_10_mod = $xml->set_10_mod("valor");
$var_11_serie = $xml->set_11_serie("valor");
$var_12_nCT = $xml->set_12_nCT("000001234");
$var_13_dhEmi = $xml->set_13_dhEmi("2013-07-02T16:00:00");
$var_14_tpImp = $xml->set_14_tpImp("valor");
$var_15_tpEmis = $xml->set_15_tpEmis("valor");
//$var_16_cDV = $xml->set_16_cDV("valor");
$var_17_tpAmb = $xml->set_17_tpAmb("valor");
$var_18_tpCTe = $xml->set_18_tpCTe("valor");
$var_19_procEmi = $xml->set_19_procEmi("valor");
$var_20_verProc = $xml->set_20_verProc("valor");
$var_21_refCTE = $xml->set_21_refCTE("valor");
$var_22_cMunEnv = $xml->set_22_cMunEnv("valor");
$var_23_xMunEnv = $xml->set_23_xMunEnv("valor");
$var_24_UFEnv = $xml->set_24_UFEnv("valor");
$var_25_modal = $xml->set_25_modal("valor");
$var_26_tpServ = $xml->set_26_tpServ("valor");
$var_27_cMunIni = $xml->set_27_cMunIni("valor");
$var_28_xMunIni = $xml->set_28_xMunIni("valor");
$var_29_UFIni = $xml->set_29_UFIni("valor");
$var_30_cMunFim = $xml->set_30_cMunFim("valor");
$var_31_xMunFim = $xml->set_31_xMunFim("valor");
$var_32_UFFim = $xml->set_32_UFFim("valor");
$var_33_retira = $xml->set_33_retira("valor");
$var_34_xDetRetira = $xml->set_34_xDetRetira("valor");
$var_35_toma03 = $xml->set_35_toma03("valor");
$var_36_toma = $xml->set_36_toma("valor");
$var_37_toma4 = $xml->set_37_toma4("valor");
$var_38_toma = $xml->set_38_toma("valor");
$var_39_CNPJ = $xml->set_39_CNPJ("valor");
$var_40_CPF = $xml->set_40_CPF("valor");
$var_41_IE = $xml->set_41_IE("valor");
$var_42_xNome = $xml->set_42_xNome("valor");
$var_43_xFant = $xml->set_43_xFant("valor");
$var_44_fone = $xml->set_44_fone("valor");
$var_45_enderToma = $xml->set_45_enderToma("valor");
$var_46_xLgr = $xml->set_46_xLgr("valor");
$var_47_nro = $xml->set_47_nro("valor");
$var_48_xCpl = $xml->set_48_xCpl("valor");
$var_49_xBairro = $xml->set_49_xBairro("valor");
$var_50_cMun = $xml->set_50_cMun("valor");
$var_51_xMun = $xml->set_51_xMun("valor");
$var_52_CEP = $xml->set_52_CEP("valor");
$var_53_UF = $xml->set_53_UF("valor");
$var_54_cPais = $xml->set_54_cPais("valor");
$var_55_xPais = $xml->set_55_xPais("valor");
$var_56_email = $xml->set_56_email("valor");
$var_57_dhCont = $xml->set_57_dhCont("valor");
$var_58_xJust = $xml->set_58_xJust("valor");
$var_59_compl = $xml->set_59_compl("valor");
$var_60_xCaracAd = $xml->set_60_xCaracAd("valor");
$var_61_xCaracSer = $xml->set_61_xCaracSer("valor");
$var_62_xEmi = $xml->set_62_xEmi("valor");
$var_63_fluxo = $xml->set_63_fluxo("valor");
$var_64_xOrig = $xml->set_64_xOrig("valor");
$var_65_pass = $xml->set_65_pass("valor");
$var_66_xPass = $xml->set_66_xPass("valor");
$var_67_xDest = $xml->set_67_xDest("valor");
$var_68_xRota = $xml->set_68_xRota("valor");
$var_69_Entrega = $xml->set_69_Entrega("valor");
$var_70_semData = $xml->set_70_semData("valor");
$var_71_tpPer = $xml->set_71_tpPer("valor");
$var_72_comData = $xml->set_72_comData("valor");
$var_73_tpPer = $xml->set_73_tpPer("valor");
$var_74_dProg = $xml->set_74_dProg("valor");
$var_75_noPeriodo = $xml->set_75_noPeriodo("valor");
$var_76_tpPer = $xml->set_76_tpPer("valor");
$var_77_dIni = $xml->set_77_dIni("valor");
$var_78_dFim = $xml->set_78_dFim("valor");
$var_79_semHora = $xml->set_79_semHora("valor");
$var_80_tpHor = $xml->set_80_tpHor("valor");
$var_81_comHora = $xml->set_81_comHora("valor");
$var_82_tpHor = $xml->set_82_tpHor("valor");
$var_83_hProg = $xml->set_83_hProg("valor");
$var_84_noInter = $xml->set_84_noInter("valor");
$var_85_tpHor = $xml->set_85_tpHor("valor");
$var_86_hIni = $xml->set_86_hIni("valor");
$var_87_hFim = $xml->set_87_hFim("valor");
$var_88_origCalc = $xml->set_88_origCalc("valor");
$var_89_destCalc = $xml->set_89_destCalc("valor");
$var_90_xObs = $xml->set_90_xObs("valor");

for($i=0;$i<10;$i++) {
	$var_91_ObsCont = $xml->set_91_ObsCont("valor",$var_84_noInter);
	$var_92_xCampo = $xml->set_92_xCampo("valor",$var_91_ObsCont);
	$var_93_xTexto = $xml->set_93_xTexto("valor",$var_91_ObsCont);
}

$var_94_ObsFisco = $xml->set_94_ObsFisco("valor");
$var_95_xCampo = $xml->set_95_xCampo("valor");
$var_96_xTexto = $xml->set_96_xTexto("valor");
$var_97_emit = $xml->set_97_emit("valor");
$var_98_CNPJ = $xml->set_98_CNPJ("06239190000180");
$var_99_IE = $xml->set_99_IE("valor");
$var_100_xNome = $xml->set_100_xNome("valor");
$var_101_xFant = $xml->set_101_xFant("valor");
$var_102_enderEmit = $xml->set_102_enderEmit("valor");
$var_103_xLgr = $xml->set_103_xLgr("valor");
$var_104_nro = $xml->set_104_nro("valor");
$var_105_xCpl = $xml->set_105_xCpl("valor");
$var_106_xBairro = $xml->set_106_xBairro("valor");
$var_107_cMun = $xml->set_107_cMun("valor");
$var_108_xMun = $xml->set_108_xMun("valor");
$var_109_CEP = $xml->set_109_CEP("valor");
$var_110_UF = $xml->set_110_UF("valor");
$var_111_fone = $xml->set_111_fone("valor");
$var_112_rem = $xml->set_112_rem("valor");
$var_113_CNPJ = $xml->set_113_CNPJ("valor");
$var_114_CPF = $xml->set_114_CPF("valor");
$var_115_IE = $xml->set_115_IE("valor");
$var_116_xNome = $xml->set_116_xNome("valor");
$var_117_xFant = $xml->set_117_xFant("valor");
$var_118_fone = $xml->set_118_fone("valor");
$var_119_enderReme = $xml->set_119_enderReme("valor");
$var_120_xLgr = $xml->set_120_xLgr("valor");
$var_121_nro = $xml->set_121_nro("valor");
$var_122_xCpl = $xml->set_122_xCpl("valor");
$var_123_xBairro = $xml->set_123_xBairro("valor");
$var_124_cMun = $xml->set_124_cMun("valor");
$var_125_xMun = $xml->set_125_xMun("valor");
$var_126_CEP = $xml->set_126_CEP("valor");
$var_127_UF = $xml->set_127_UF("valor");
$var_128_cPais = $xml->set_128_cPais("valor");
$var_129_xPais = $xml->set_129_xPais("valor");
$var_130_email = $xml->set_130_email("valor");
$var_131_infNF = $xml->set_131_infNF("valor");
$var_132_nRoma = $xml->set_132_nRoma("valor");
$var_133_nPed = $xml->set_133_nPed("valor");
$var_134_mod = $xml->set_134_mod("valor");
$var_135_serie = $xml->set_135_serie("valor");
$var_136_nDoc = $xml->set_136_nDoc("valor");
$var_137_dEmi = $xml->set_137_dEmi("valor");
$var_138_vBC = $xml->set_138_vBC("valor");
$var_139_vICMS = $xml->set_139_vICMS("valor");
$var_140_vBCST = $xml->set_140_vBCST("valor");
$var_141_vST = $xml->set_141_vST("valor");
$var_142_vProd = $xml->set_142_vProd("valor");
$var_143_vNF = $xml->set_143_vNF("valor");
$var_144_nCFOP = $xml->set_144_nCFOP("valor");
$var_145_nPeso = $xml->set_145_nPeso("valor");
$var_146_PIN = $xml->set_146_PIN("valor");
$var_147_locRet = $xml->set_147_locRet("valor");
$var_148_CNPJ = $xml->set_148_CNPJ("valor");
$var_149_CPF = $xml->set_149_CPF("valor");
$var_150_xNome = $xml->set_150_xNome("valor");
$var_151_xLgr = $xml->set_151_xLgr("valor");
$var_152_Nro = $xml->set_152_Nro("valor");
$var_153_xCpl = $xml->set_153_xCpl("valor");
$var_154_xBairro = $xml->set_154_xBairro("valor");
$var_155_cMun = $xml->set_155_cMun("valor");
$var_156_xMun = $xml->set_156_xMun("valor");
$var_157_UF = $xml->set_157_UF("valor");
$var_158_infNFe = $xml->set_158_infNFe("valor");
$var_159_Chave = $xml->set_159_Chave("valor");
$var_160_PIN = $xml->set_160_PIN("valor");
$var_161_infOutros = $xml->set_161_infOutros("valor");
$var_162_tpDoc = $xml->set_162_tpDoc("valor");
$var_163_descOutros = $xml->set_163_descOutros("valor");
$var_164_nDoc = $xml->set_164_nDoc("valor");
$var_165_dEmi = $xml->set_165_dEmi("valor");
$var_166_vDocFisc = $xml->set_166_vDocFisc("valor");
$var_167_exped = $xml->set_167_exped("valor");
$var_168_CNPJ = $xml->set_168_CNPJ("valor");
$var_169_CPF = $xml->set_169_CPF("valor");
$var_170_IE = $xml->set_170_IE("valor");
$var_171_xNome = $xml->set_171_xNome("valor");
$var_172_fone = $xml->set_172_fone("valor");
$var_173_enderExped = $xml->set_173_enderExped("valor");
$var_174_xLgr = $xml->set_174_xLgr("valor");
$var_175_nro = $xml->set_175_nro("valor");
$var_176_xCpl = $xml->set_176_xCpl("valor");
$var_177_xBairro = $xml->set_177_xBairro("valor");
$var_178_cMun = $xml->set_178_cMun("valor");
$var_179_xMun = $xml->set_179_xMun("valor");
$var_180_CEP = $xml->set_180_CEP("valor");
$var_181_UF = $xml->set_181_UF("valor");
$var_182_cPais = $xml->set_182_cPais("valor");
$var_183_xPais = $xml->set_183_xPais("valor");
$var_184_email = $xml->set_184_email("valor");
$var_185_receb = $xml->set_185_receb("valor");
$var_186_CNPJ = $xml->set_186_CNPJ("valor");
$var_187_CPF = $xml->set_187_CPF("valor");
$var_188_IE = $xml->set_188_IE("valor");
$var_189_xNome = $xml->set_189_xNome("valor");
$var_190_fone = $xml->set_190_fone("valor");
$var_191_enderReceb = $xml->set_191_enderReceb("valor");
$var_192_xLgr = $xml->set_192_xLgr("valor");
$var_193_nro = $xml->set_193_nro("valor");
$var_194_xCpl = $xml->set_194_xCpl("valor");
$var_195_xBairro = $xml->set_195_xBairro("valor");
$var_196_cMun = $xml->set_196_cMun("valor");
$var_197_xMun = $xml->set_197_xMun("valor");
$var_198_CEP = $xml->set_198_CEP("valor");
$var_199_UF = $xml->set_199_UF("valor");
$var_200_cPais = $xml->set_200_cPais("valor");
$var_201_xPais = $xml->set_201_xPais("valor");
$var_202_email = $xml->set_202_email("valor");
$var_203_dest = $xml->set_203_dest("valor");
$var_204_CNPJ = $xml->set_204_CNPJ("valor");
$var_205_CPF = $xml->set_205_CPF("valor");
$var_206_IE = $xml->set_206_IE("valor");
$var_207_xNome = $xml->set_207_xNome("valor");
$var_208_fone = $xml->set_208_fone("valor");
$var_209_ISUF = $xml->set_209_ISUF("valor");
$var_210_enderDest = $xml->set_210_enderDest("valor");
$var_211_xLgr = $xml->set_211_xLgr("valor");
$var_212_nro = $xml->set_212_nro("valor");
$var_213_xCpl = $xml->set_213_xCpl("valor");
$var_214_xBairro = $xml->set_214_xBairro("valor");
$var_215_cMun = $xml->set_215_cMun("valor");
$var_216_xMun = $xml->set_216_xMun("valor");
$var_217_CEP = $xml->set_217_CEP("valor");
$var_218_UF = $xml->set_218_UF("valor");
$var_219_cPais = $xml->set_219_cPais("valor");
$var_220_xPais = $xml->set_220_xPais("valor");
$var_221_email = $xml->set_221_email("valor");
$var_222_locEnt = $xml->set_222_locEnt("valor");
$var_223_CNPJ = $xml->set_223_CNPJ("valor");
$var_224_CPF = $xml->set_224_CPF("valor");
$var_225_xNome = $xml->set_225_xNome("valor");
$var_226_xLgr = $xml->set_226_xLgr("valor");
$var_227_nro = $xml->set_227_nro("valor");
$var_228_xCpl = $xml->set_228_xCpl("valor");
$var_229_xBairro = $xml->set_229_xBairro("valor");
$var_230_cMun = $xml->set_230_cMun("valor");
$var_231_xMun = $xml->set_231_xMun("valor");
$var_232_UF = $xml->set_232_UF("valor");
$var_233_vPrest = $xml->set_233_vPrest("valor");
$var_234_vTPrest = $xml->set_234_vTPrest("valor");
$var_235_vRec = $xml->set_235_vRec("valor");
$var_236_Comp = $xml->set_236_Comp("valor");
$var_237_xNome = $xml->set_237_xNome("valor");
$var_238_vComp = $xml->set_238_vComp("valor");
$var_239_imp = $xml->set_239_imp("valor");
$var_240_ICMS = $xml->set_240_ICMS("valor");
$var_241_ICMS00 = $xml->set_241_ICMS00("valor");
$var_242_CST = $xml->set_242_CST("valor");
$var_243_vBC = $xml->set_243_vBC("valor");
$var_244_pICMS = $xml->set_244_pICMS("valor");
$var_245_vICMS = $xml->set_245_vICMS("valor");
$var_246_ICMS20 = $xml->set_246_ICMS20("valor");
$var_247_CST = $xml->set_247_CST("valor");
$var_248_pRedBC = $xml->set_248_pRedBC("valor");
$var_249_vBC = $xml->set_249_vBC("valor");
$var_250_pICMS = $xml->set_250_pICMS("valor");
$var_251_vICMS = $xml->set_251_vICMS("valor");
$var_252_ICMS45 = $xml->set_252_ICMS45("valor");
$var_253_CST = $xml->set_253_CST("valor");
$var_254_ICMS60 = $xml->set_254_ICMS60("valor");
$var_255_CST = $xml->set_255_CST("valor");
$var_256_vBCSTRet = $xml->set_256_vBCSTRet("valor");
$var_257_vICMSSTRet = $xml->set_257_vICMSSTRet("valor");
$var_258_pICMSSTRet = $xml->set_258_pICMSSTRet("valor");
$var_259_vCred = $xml->set_259_vCred("valor");
$var_260_ICMS90 = $xml->set_260_ICMS90("valor");
$var_261_CST = $xml->set_261_CST("valor");
$var_262_pRedBC = $xml->set_262_pRedBC("valor");
$var_263_vBC = $xml->set_263_vBC("valor");
$var_264_pICMS = $xml->set_264_pICMS("valor");
$var_265_vICMS = $xml->set_265_vICMS("valor");
$var_266_vCred = $xml->set_266_vCred("valor");
$var_267_ICMSOutraUF = $xml->set_267_ICMSOutraUF("valor");
$var_268_CST = $xml->set_268_CST("valor");
$var_269_pRedBCOutraUF = $xml->set_269_pRedBCOutraUF("valor");
$var_270_vBCOutraUF = $xml->set_270_vBCOutraUF("valor");
$var_271_pICMSOutraUF = $xml->set_271_pICMSOutraUF("valor");
$var_272_vICMSOutraUF = $xml->set_272_vICMSOutraUF("valor");
$var_273_ICMSSN = $xml->set_273_ICMSSN("valor");
$var_274_indSN = $xml->set_274_indSN("valor");
$var_275_infAdFisco = $xml->set_275_infAdFisco("valor");
$var_276_infCTeNorm = $xml->set_276_infCTeNorm("valor");
$var_277_infCarga = $xml->set_277_infCarga("valor");
$var_278_vCarga = $xml->set_278_vCarga("valor");
$var_279_proPred = $xml->set_279_proPred("valor");
$var_280_xOutCat = $xml->set_280_xOutCat("valor");
$var_281_infQ = $xml->set_281_infQ("valor");
$var_282_cUnid = $xml->set_282_cUnid("valor");
$var_283_tpMed = $xml->set_283_tpMed("valor");
$var_284_qCarga = $xml->set_284_qCarga("valor");
$var_285_contQt = $xml->set_285_contQt("valor");
$var_286_nCont = $xml->set_286_nCont("valor");
$var_287_lacContQt = $xml->set_287_lacContQt("valor");
$var_288_nLacre = $xml->set_288_nLacre("valor");
$var_289_dPrev = $xml->set_289_dPrev("valor");
$var_290_docAnt = $xml->set_290_docAnt("valor");
$var_291_emiDocAnt = $xml->set_291_emiDocAnt("valor");
$var_292_CNPJ = $xml->set_292_CNPJ("valor");
$var_293_CPF = $xml->set_293_CPF("valor");
$var_294_IE = $xml->set_294_IE("valor");
$var_295_UF = $xml->set_295_UF("valor");
$var_296_xNome = $xml->set_296_xNome("valor");
$var_297_idDocAnt = $xml->set_297_idDocAnt("valor");
$var_298_idDocAntPap = $xml->set_298_idDocAntPap("valor");
$var_299_tpDoc = $xml->set_299_tpDoc("valor");
$var_300_serie = $xml->set_300_serie("valor");
$var_301_subser = $xml->set_301_subser("valor");
$var_302_nDoc = $xml->set_302_nDoc("valor");
$var_303_dEmi = $xml->set_303_dEmi("valor");
$var_304_idDocAntEle = $xml->set_304_idDocAntEle("valor");
$var_305_chave = $xml->set_305_chave("valor");
$var_306_seg = $xml->set_306_seg("valor");
$var_307_respSeg = $xml->set_307_respSeg("valor");
$var_308_xSeg = $xml->set_308_xSeg("valor");
$var_309_nApol = $xml->set_309_nApol("valor");
$var_310_nAver = $xml->set_310_nAver("valor");
$var_311_vCarga = $xml->set_311_vCarga("valor");
$var_312_infModal = $xml->set_312_infModal("valor");
$var_313_versaoModal = $xml->set_313_versaoModal("valor");


for($i=0;$i<3;$i++) {
	$var_314_xs = $xml->set_314_xs("valor");
	$modal = new CTePHPRodoviario($var_314_xs,$xml->get_dom(),1);
	$vMod_1_rodo = $modal->setMod_1_rodo("modal");
	$vMod_2_RNTRC = $modal->setMod_2_RNTRC("modal");
	$vMod_3_dPrev = $modal->setMod_3_dPrev("modal");
	$vMod_4_lota = $modal->setMod_4_lota("modal");
	$vMod_5_CIOT = $modal->setMod_5_CIOT("modal");
	$vMod_6_occ = $modal->setMod_6_occ("modal");
	$vMod_7_serie = $modal->setMod_7_serie("modal");
	$vMod_8_nOcc = $modal->setMod_8_nOcc("modal");
	$vMod_9_dEmi = $modal->setMod_9_dEmi("modal");
	$vMod_10_emiOcc = $modal->setMod_10_emiOcc("modal");
	$vMod_11_CNPJ = $modal->setMod_11_CNPJ("modal");
	$vMod_12_cInt = $modal->setMod_12_cInt("modal");
	$vMod_13_IE = $modal->setMod_13_IE("modal");
	$vMod_14_UF = $modal->setMod_14_UF("modal");
	$vMod_15_fone = $modal->setMod_15_fone("modal");
	$vMod_16_valePed = $modal->setMod_16_valePed("modal");
	$vMod_17_CNPJForn = $modal->setMod_17_CNPJForn("modal");
	$vMod_18_nCompra = $modal->setMod_18_nCompra("modal");
	$vMod_19_CNPJPg = $modal->setMod_19_CNPJPg("modal");
	$vMod_20_veic = $modal->setMod_20_veic("modal");
	$vMod_21_cInt = $modal->setMod_21_cInt("modal");
	$vMod_22_RENAVAM = $modal->setMod_22_RENAVAM("modal");
	$vMod_23_placa = $modal->setMod_23_placa("modal");
	$vMod_24_tara = $modal->setMod_24_tara("modal");
	$vMod_25_capKG = $modal->setMod_25_capKG("modal");
	$vMod_26_capM3 = $modal->setMod_26_capM3("modal");
	$vMod_27_tpProp = $modal->setMod_27_tpProp("modal");
	$vMod_28_tpVeic = $modal->setMod_28_tpVeic("modal");
	$vMod_29_tpRod = $modal->setMod_29_tpRod("modal");
	$vMod_30_tpCar = $modal->setMod_30_tpCar("modal");
	$vMod_31_UF = $modal->setMod_31_UF("modal");
	$vMod_32_prop = $modal->setMod_32_prop("modal");
	$vMod_33_CPF = $modal->setMod_33_CPF("modal");
	$vMod_34_CNPJ = $modal->setMod_34_CNPJ("modal");
	$vMod_35_RNTRC = $modal->setMod_35_RNTRC("modal");
	$vMod_36_xNome = $modal->setMod_36_xNome("modal");
	$vMod_37_IE = $modal->setMod_37_IE("modal");
	$vMod_38_UF = $modal->setMod_38_UF("modal");
	$vMod_39_tpProp = $modal->setMod_39_tpProp("modal");
	$vMod_40_lacRodo = $modal->setMod_40_lacRodo("modal");
	$vMod_41_nLacre = $modal->setMod_41_nLacre("modal");
	$vMod_42_moto = $modal->setMod_42_moto("modal");
	$vMod_43_xNome = $modal->setMod_43_xNome("modal");
	$vMod_44_CPF = $modal->setMod_44_CPF("modal");
	$xml->append_314_modal($modal->drawXMLMod(),$var_314_xs);
}


$var_315_peri = $xml->set_315_peri("valor");
$var_316_nONU = $xml->set_316_nONU("valor");
$var_317_xNomeAE = $xml->set_317_xNomeAE("valor");
$var_318_xClaRisco = $xml->set_318_xClaRisco("valor");
$var_319_grEmb = $xml->set_319_grEmb("valor");
$var_320_qTotProd = $xml->set_320_qTotProd("valor");
$var_321_qVolTipo = $xml->set_321_qVolTipo("valor");
$var_322_pontoFulgor = $xml->set_322_pontoFulgor("valor");
$var_323_veicNovos = $xml->set_323_veicNovos("valor");
$var_324_chassi = $xml->set_324_chassi("valor");
$var_325_cCor = $xml->set_325_cCor("valor");
$var_326_xCor = $xml->set_326_xCor("valor");
$var_327_cMod = $xml->set_327_cMod("valor");
$var_328_vUnit = $xml->set_328_vUnit("valor");
$var_329_vFrete = $xml->set_329_vFrete("valor");
$var_330_cobr = $xml->set_330_cobr("valor");
$var_331_fat = $xml->set_331_fat("valor");
$var_332_nFat = $xml->set_332_nFat("valor");
$var_333_vOrig = $xml->set_333_vOrig("valor");
$var_334_vDesc = $xml->set_334_vDesc("valor");
$var_335_vLiq = $xml->set_335_vLiq("valor");
$var_336_dup = $xml->set_336_dup("valor");
$var_337_nDup = $xml->set_337_nDup("valor");
$var_338_dVenc = $xml->set_338_dVenc("valor");
$var_339_vDup = $xml->set_339_vDup("valor");
$var_340_infCteSub = $xml->set_340_infCteSub("valor");
$var_341_chCte = $xml->set_341_chCte("valor");
$var_342_tomaICMS = $xml->set_342_tomaICMS("valor");
$var_343_refNFe = $xml->set_343_refNFe("valor");
$var_344_refNF = $xml->set_344_refNF("valor");
$var_345_CNPJ = $xml->set_345_CNPJ("valor");
$var_346_mod = $xml->set_346_mod("valor");
$var_347_serie = $xml->set_347_serie("valor");
$var_348_subserie = $xml->set_348_subserie("valor");
$var_349_nro = $xml->set_349_nro("valor");
$var_350_valor = $xml->set_350_valor("valor");
$var_351_dEmi = $xml->set_351_dEmi("valor");
$var_352_refCte = $xml->set_352_refCte("valor");
$var_353_tomaNaoICMS = $xml->set_353_tomaNaoICMS("valor");
$var_354_refCteAnu = $xml->set_354_refCteAnu("valor");
$var_355_infCteComp = $xml->set_355_infCteComp("valor");
$var_356_chave = $xml->set_356_chave("valor");
$var_357_vPresComp = $xml->set_357_vPresComp("valor");
$var_358_vTPrest = $xml->set_358_vTPrest("valor");
$var_359_compComp = $xml->set_359_compComp("valor");
$var_360_xNome = $xml->set_360_xNome("valor");
$var_361_vComp = $xml->set_361_vComp("valor");
$var_362_impComp = $xml->set_362_impComp("valor");
$var_363_ICMSComp = $xml->set_363_ICMSComp("valor");
$var_364_ICMS00 = $xml->set_364_ICMS00("valor");
$var_365_CST = $xml->set_365_CST("valor");
$var_366_vBC = $xml->set_366_vBC("valor");
$var_367_pICMS = $xml->set_367_pICMS("valor");
$var_368_vICMS = $xml->set_368_vICMS("valor");
$var_369_ICMS20 = $xml->set_369_ICMS20("valor");
$var_370_CST = $xml->set_370_CST("valor");
$var_371_pRedBC = $xml->set_371_pRedBC("valor");
$var_372_vBC = $xml->set_372_vBC("valor");
$var_373_pICMS = $xml->set_373_pICMS("valor");
$var_374_vICMS = $xml->set_374_vICMS("valor");
$var_375_ICMS45 = $xml->set_375_ICMS45("valor");
$var_376_CST = $xml->set_376_CST("valor");
$var_377_ICMS60 = $xml->set_377_ICMS60("valor");
$var_378_CST = $xml->set_378_CST("valor");
$var_379_vBCSTRet = $xml->set_379_vBCSTRet("valor");
$var_380_vICMSSTRet = $xml->set_380_vICMSSTRet("valor");
$var_381_pICMSSTRet = $xml->set_381_pICMSSTRet("valor");
$var_382_vCred = $xml->set_382_vCred("valor");
$var_383_ICMS90 = $xml->set_383_ICMS90("valor");
$var_384_CST = $xml->set_384_CST("valor");
$var_385_pRedBC = $xml->set_385_pRedBC("valor");
$var_386_vBC = $xml->set_386_vBC("valor");
$var_387_pICMS = $xml->set_387_pICMS("valor");
$var_388_vICMS = $xml->set_388_vICMS("valor");
$var_389_vCred = $xml->set_389_vCred("valor");
$var_390_ICMSOutraUF = $xml->set_390_ICMSOutraUF("valor");
$var_391_CST = $xml->set_391_CST("valor");
$var_392_pRedBCOutraUF = $xml->set_392_pRedBCOutraUF("valor");
$var_393_vBCOutraUF = $xml->set_393_vBCOutraUF("valor");
$var_394_pICMSOutraUF = $xml->set_394_pICMSOutraUF("valor");
$var_395_vICMSOutraUF = $xml->set_395_vICMSOutraUF("valor");
$var_396_ICMSSN = $xml->set_396_ICMSSN("valor");
$var_397_indSN = $xml->set_397_indSN("valor");
$var_398_infAdFisco = $xml->set_398_infAdFisco("valor");
$var_399_infCteAnu = $xml->set_399_infCteAnu("valor");
$var_400_chCte = $xml->set_400_chCte("valor");
$var_401_dEmi = $xml->set_401_dEmi("valor");
$xml->drawXML("file","teste.xml");

?>