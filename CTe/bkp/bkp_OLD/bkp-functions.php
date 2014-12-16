	public function set_1_infCte  () { 
		$this->addNodes( new CTePHP_1_infCte() );
	}
	public function set_2_versao  ($param) { 
		if ($this->validateRegExp("set_2_versao",$param,"ER40")) { 								// ER40
			$this->addNodes( new CTePHP_set_2_versao($param) );
		}
	}
	public function set_3_Id  ($param) { 
		if ($this->validateRegExp("set_3_Id",$param,"ER44")) { 									// ER44
			$this->addNodes( new CTePHP_set_3_Id($param) );
		}
	}
	public function set_4_ide  () { 
		$this->addNodes( new CTePHP_4_ide() );
	}
	public function set_5_cUF  ($param) { 
		if ($this->validateDomain("set_5_cUF",$param,"D2")) {									// D2
			$this->addNodes( new CTePHP_set_5_cUF($param) );
		}
	}
	public function set_6_cCT  ($param) { 
		if ($this->validateRegExp("set_6_cCT",$param," ER33")) { 								// ER33
			$this->addNodes( new CTePHP_set_6_cCT($param) );
		}
	}
	public function set_7_CFOP  ($param) { 
		if ($this->validateRegExp("set_7_CFOP",$param,"ER46")) { 								// ER46
			$this->addNodes( new CTePHP_set_7_CFOP($param) );
		}
	}
	public function set_8_natOp  ($param) { 
		if ($this->validateRegExp("set_8_natOp",$param,"ER32")) { 								// ER32
			$this->addNodes( new CTePHP_set_8_natOp($param) );
		}
	}
	public function set_9_forPag  ($param) { 
		if ($this->validateDomain("set_9_forPag",$param,"D7")) {								// D7
			$this->addNodes( new CTePHP_set_9_forPag($param) );
		}
	}
	public function set_10_mod  ($param) { 
		if ($this->validateDomain("set_10_mod",$param,"D3")) {									// D3
			$this->addNodes( new CTePHP_set_10_mod($param) );
		}
	}
	public function set_11_serie  ($param) { 
		if ($this->validateRegExp("set_11_serie",$param,"ER30")) { 								// ER30
			$this->addNodes( new CTePHP_set_11_serie($param) );
		}
	}
	public function set_12_nCT  ($param) { 
		if ($this->validateRegExp("set_12_nCT",$param,"ER28")) { 								// ER28
			$this->addNodes( new CTePHP_set_12_nCT($param) );
		}
	}
	public function set_13_dhEmi  ($param) { 
		if ($this->validateRegExp("set_13_dhEmi",$param,"ER34")) { 								// ER34
			$this->addNodes( new CTePHP_set_13_dhEmi($param) );
		}
	}
	public function set_14_tpImp  ($param) { 
		if ($this->validateDomain("set_14_tpImp",$param,"D1")) {								// D1
			$this->addNodes( new CTePHP_set_14_tpImp($param) );
		}
	}
	public function set_15_tpEmis  ($param) {
		if ($this->validateDomain("set_15_tpEmis",$param,"D8")) {								// D8
			$this->addNodes( new CTePHP_set_15_tpEmis($param) );
		}
	}
	public function set_16_cDV  ($param) { 
		if ($this->validateRegExp("set_16_cDV",$param,"ER35")) { 								// ER35
			$this->addNodes( new CTePHP_set_16_cDV($param) );
		}
	}
	public function set_17_tpAmb  ($param) { 
		if ($this->validateDomain("set_17_tpAmb",$param,"D1")) {								// D1
			$this->addNodes( new CTePHP_set_17_tpAmb($param) );
		}
	}
	public function set_18_tpCTe  ($param) { 
		if ($this->validateDomain("set_18_tpCTe",$param,"D9")) {								// D9
			$this->addNodes( new CTePHP_set_18_tpCTe($param) );
		}
	}
	public function set_19_procEmi  ($param) { 
		if ($this->validateDomain("set_19_procEmi",$param,"D9")) {								// D9
			$this->addNodes( new CTePHP_set_19_procEmi($param) );
		}
	}
	public function set_20_verProc  ($param) { 
		if ($this->validateRegExp("set_20_verProc",$param,"ER32")) { 							// ER32
			$this->addNodes( new CTePHP_set_20_verProc($param) );
		}
	}
	public function set_21_refCTE  ($param) { 
		if ($this->validateRegExp("set_21_refCTE",$param,"ER3")) { 								// ER3
			$this->addNodes( new CTePHP_set_21_refCTE($param) );
		}
	}
	public function set_22_cMunEnv  ($param) { 
		if ($this->validateRegExp("set_22_cMunEnv",$param,"ER2")) { 							// ER2
			$this->addNodes( new CTePHP_set_22_cMunEnv($param) );
		}
	}
	public function set_23_xMunEnv  ($param) { 
		if ($this->validateRegExp("set_23_xMunEnv",$param,"ER32")) { 							// ER32
			$this->addNodes( new CTePHP_set_23_xMunEnv($param) );
		}
	}
	public function set_24_UFEnv  ($param) { 
		if ($this->validateDomain("set_24_UFEnv",$param,"D5")) {								// D5
			$this->addNodes( new CTePHP_set_24_UFEnv($param) );
		}
	}
	public function set_25_modal  ($param) { 
		if ($this->validateDomain("set_25_modal",$param,"D26")) {								// D26
			$this->addNodes( new CTePHP_set_25_modal($param) );
		}
	}
	public function set_26_tpServ  ($param) { 
		if ($this->validateDomain("set_26_tpServ",$param,"D9")) {								// D9
			$this->addNodes( new CTePHP_set_26_tpServ($param) );
		}
	}
	public function set_27_cMunIni  ($param) {
		if ($this->validateRegExp("set_27_cMunIni",$param,"ER2")) { 							// ER2
			$this->addNodes( new CTePHP_set_27_cMunIni($param) );
		}
	}
	public function set_28_xMunIni  ($param) { 
		if ($this->validateRegExp("set_28_xMunIni",$param,"ER32")) { 							// ER32
			$this->addNodes( new CTePHP_set_28_xMunIni($param) );
		}
	}
	public function set_29_UFIni  ($param) { 
		if ($this->validateDomain("set_29_UFIni",$param,"D5")) {								// D5
			$this->addNodes( new CTePHP_set_29_UFIni($param) );
		}
	}
	public function set_30_cMunFim  ($param) { 
		if ($this->validateRegExp("set_30_cMunFim",$param,"ER2")) { 							// ER2
			$this->addNodes( new CTePHP_set_30_cMunFim($param) );
		}
	}
	public function set_31_xMunFim  ($param) { 
		if ($this->validateRegExp("set_31_xMunFim",$param,"ER32")) { 							// ER32
			$this->addNodes( new CTePHP_set_31_xMunFim($param) );
		}
	}
	public function set_32_UFFim  ($param) { 
		if ($this->validateDomain("set_32_UFFim",$param,"D5")) {								// D5
			$this->addNodes( new CTePHP_set_32_UFFim($param) );
		}
	}
	public function set_33_retira  ($param) { 
		if ($this->validateDomain("set_33_retira",$param,"D10")) {								// D10
			$this->addNodes( new CTePHP_set_33_retira($param) );
		}
	}
	public function set_34_xDetRetira  ($param) {
		if ($this->validateRegExp("set_34_xDetRetira",$param,"ER32")) { 						// ER32
			$this->addNodes( new CTePHP_set_34_xDetRetira($param) );
		}
	}
	public function set_35_toma03  () { 
		$this->addNodes( new CTePHP_35_toma03() );
	}
	public function set_36_toma  ($param) { 
		if ($this->validateDomain("set_36_toma",$param,"D9")) {									// D9
			$this->addNodes( new CTePHP_set_36_toma($param) );
		}
	}
	public function set_37_toma4  () { 
		$this->addNodes( new CTePHP_37_toma4() );
	}
	public function set_38_toma  ($param) { 
		if ($this->validateDomain("set_38_toma",$param,"D11")) {								// D11
			$this->addNodes( new CTePHP_set_38_toma($param) );
		}
	}
	public function set_39_CNPJ  ($param) { 
		if ($this->validateRegExp("set_39_CNPJ",$param,"ER6")) { 								// ER6
			$this->addNodes( new CTePHP_set_39_CNPJ($param) );
		}
	}
	public function set_40_CPF  ($param) { 
		if ($this->validateRegExp("set_40_CPF",$param,"ER7")) { 								// ER7
			$this->addNodes( new CTePHP_set_40_CPF($param) );
		}
	}
	public function set_41_IE  ($param) { 
		if ($this->validateRegExp("set_41_IE",$param,"ER26")) { 								// ER26
			$this->addNodes( new CTePHP_set_41_IE($param) );
		}
	}
	public function set_42_xNome  ($param) { 
		if ($this->validateRegExp("set_42_xNome",$param,"ER32")) { 								// ER32
			$this->addNodes( new CTePHP_set_42_xNome($param) );
		}
	}
	public function set_43_xFant  ($param) { 
		if ($this->validateRegExp("set_43_xFant",$param,"ER32")) { 								// ER32
			$this->addNodes( new CTePHP_set_43_xFant($param) );
		}
	}
	public function set_44_fone  ($param) { 
		if ($this->validateRegExp("set_44_fone",$param,"ER36")) { 								// ER36
			$this->addNodes( new CTePHP_set_44_fone($param) );
		}
	}
	public function set_45_enderToma  () { 
		$this->addNodes( new CTePHP_45_enderToma() );
	}
	public function set_46_xLgr  ($param) { 
		if ($this->validateRegExp("set_46_xLgr",$param,"ER32")) { 								// ER32
			$this->addNodes( new CTePHP_set_46_xLgr($param) );
		}
	}
	public function set_47_nro  ($param) { 
		if ($this->validateRegExp("set_47_nro",$param,"ER32")) { 								// ER32
			$this->addNodes( new CTePHP_set_47_nro($param) );
		}
	}
	public function set_48_xCpl  ($param) { 
		if ($this->validateRegExp("set_48_xCpl",$param,"ER32")) { 								// ER32
			$this->addNodes( new CTePHP_set_48_xCpl($param) );
		}
	}
	public function set_49_xBairro  ($param) { 
		if ($this->validateRegExp("set_49_xBairro",$param,"ER32")) { 							// ER32
			$this->addNodes( new CTePHP_set_49_xBairro($param) );
		}
	}
	public function set_50_cMun  ($param) { 
		if ($this->validateRegExp("set_50_cMun",$param,"ER2")) { 								// ER2
			$this->addNodes( new CTePHP_set_50_cMun($param) );
		}
	}
	public function set_51_xMun  ($param) { 
		if ($this->validateRegExp("set_51_xMun",$param,"ER32")) { 								// ER32
			$this->addNodes( new CTePHP_set_51_xMun($param) );
		}
	}
	public function set_52_CEP  ($param) { 
		if ($this->validateRegExp("set_52_CEP",$param," ER33")) { 								// ER33
			$this->addNodes( new CTePHP_set_52_CEP($param) );
		}
	}
	public function set_53_UF  ($param) { 
		if ($this->validateDomain("set_53_UF",$param,"D5")) {									// D5
			$this->addNodes( new CTePHP_set_53_UF($param) );
		}
	}
	public function set_54_cPais  ($param) { 
		if ($this->validateRegExp("set_54_cPais",$param,"ER27")) { 								// ER27
			$this->addNodes( new CTePHP_set_54_cPais($param) );
		}
	}
	public function set_55_xPais  ($param) { 
		if ($this->validateRegExp("set_55_xPais",$param,"ER32")) { 								// ER32
			$this->addNodes( new CTePHP_set_55_xPais($param) );
		}
	}
	public function set_56_email  ($param) { 
		if ($this->validateRegExp("set_56_email",$param,"ER47")) { 								// ER47
			$this->addNodes( new CTePHP_set_56_email($param) );
		}
	}
	public function set_57_dhCont  ($param) { 
		if ($this->validateRegExp("set_57_dhCont",$param,"ER34")) { 							// ER34
			$this->addNodes( new CTePHP_set_57_dhCont($param) );
		}
	}
	public function set_58_xJust  ($param) { 
		if ($this->validateRegExp("set_58_xJust",$param,"ER32")) { 								// ER32
			$this->addNodes( new CTePHP_set_58_xJust($param) );
		}
	}
	public function set_59_compl  () { 
		$this->addNodes( new CTePHP_59_compl() );
	}
	public function set_60_xCaracAd  ($param) { 
		if ($this->validateRegExp("set_60_xCaracAd",$param,"ER32")) { 							// ER32
			$this->addNodes( new CTePHP_set_60_xCaracAd($param) );
		}
	}
	public function set_61_xCaracSer  ($param) { 
		if ($this->validateRegExp("set_61_xCaracSer",$param,"ER32")) { 							// ER32
			$this->addNodes( new CTePHP_set_61_xCaracSer($param) );
		}
	}
	public function set_62_xEmi  ($param) { 
		if ($this->validateRegExp("set_62_xEmi",$param,"ER32")) { 								// ER32
			$this->addNodes( new CTePHP_set_62_xEmi($param) );
		}
	}
	public function set_63_fluxo  () { 
		$this->addNodes( new CTePHP_63_fluxo() );
	}
	public function set_64_xOrig  ($param) { 
		if ($this->validateRegExp("set_64_xOrig",$param,"ER32")) { 								// ER32
			$this->addNodes( new CTePHP_set_64_xOrig($param) );
		}
	}
	public function set_65_pass  () { 
		$this->addNodes( new CTePHP_65_pass() );
	}
	public function set_66_xPass  ($param) { 
		if ($this->validateRegExp("set_66_xPass",$param,"ER32")) { 								// ER32
			$this->addNodes( new CTePHP_set_66_xPass($param) );
		}
	}
	public function set_67_xDest  ($param) { 
		if ($this->validateRegExp("set_67_xDest",$param,"ER32")) { 								// ER32
			$this->addNodes( new CTePHP_set_67_xDest($param) );
		}
	}
	public function set_68_xRota  ($param) {
		if ($this->validateRegExp("set_68_xRota",$param,"ER32")) { 								// ER32
			$this->addNodes( new CTePHP_set_68_xRota($param) );
		}
	}
	public function set_69_Entrega  () { 
$this->addNodes( new CTePHP_69_Entrega() );
	}
	public function set_70_semData  () { 
		$this->addNodes( new CTePHP_70_semData() );
	}
	public function set_71_tpPer  ($param) { 
		if ($this->validateDomain("set_71_tpPer",$param,"D12")) {								// D12
			$this->addNodes( new CTePHP_set_71_tpPer($param) );
		}
	}
	public function set_72_comData  () { 
		$this->addNodes( new CTePHP_72_comData() );
	}
	public function set_73_tpPer  ($param) { 
		if ($this->validateDomain("set_73_tpPer",$param,"D13")) {								// D13
			$this->addNodes( new CTePHP_set_73_tpPer($param) );
		}
	}
	public function set_74_dProg  ($param) { 
		if ($this->validateRegExp("set_74_dProg",$param,"ER9")) { 								// ER9
			$this->addNodes( new CTePHP_set_74_dProg($param) );
		}
	}
	public function set_75_noPeriodo  () { 
		$this->addNodes( new CTePHP_75_noPeriodo() );
	}
	public function set_76_tpPer  ($param) { 
		if ($this->validateDomain("set_76_tpPer",$param,"D11")) {								// D11
			$this->addNodes( new CTePHP_set_76_tpPer($param) );
		}
	}
	public function set_77_dIni  ($param) { 
		if ($this->validateRegExp("set_77_dIni",$param,"ER9")) { 								// ER9
			$this->addNodes( new CTePHP_set_77_dIni($param) );
		}
	}
	public function set_78_dFim  ($param) { 
		if ($this->validateRegExp("set_78_dFim",$param,"ER9")) { 								// ER9
			$this->addNodes( new CTePHP_set_78_dFim($param) );
		}
	}
	public function set_79_semHora  () { 
$this->addNodes( new CTePHP_79_semHora() );
	}
	public function set_80_tpHor  ($param) { 
		if ($this->validateDomain("set_80_tpHor",$param,"D12")) {								// D12
			$this->addNodes( new CTePHP_set_80_tpHor($param) );
		}
	}
	public function set_81_comHora  () { 
		$this->addNodes( new CTePHP_81_comHora() );
	}
	public function set_82_tpHor  ($param) { 
		if ($this->validateDomain("set_82_tpHor",$param,"D13")) {								// D13
			$this->addNodes( new CTePHP_set_82_tpHor($param) );
		}
	}
	public function set_83_hProg  ($param) { 
		if ($this->validateRegExp("set_83_hProg",$param,"ER49")) { 								// ER49
			$this->addNodes( new CTePHP_set_83_hProg($param) );
		}
	}
	public function set_84_noInter  () { 
		$this->addNodes( new CTePHP_84_noInter() );
	}
	public function set_85_tpHor  ($param) { 
		if ($this->validateDomain("set_85_tpHor",$param,"D11")) {								// D11
			$this->addNodes( new CTePHP_set_85_tpHor($param) );
		}
	}
	public function set_86_hIni  ($param) { 
		if ($this->validateRegExp("set_86_hIni",$param,"ER49")) { 								// ER49
			$this->addNodes( new CTePHP_set_86_hIni($param) );
		}
	}
	public function set_87_hFim  ($param) { 
		if ($this->validateRegExp("set_87_hFim",$param,"ER49")) { 								// ER49
			$this->addNodes( new CTePHP_set_87_hFim($param) );
		}
	}
	public function set_88_origCalc  ($param) { 
		if ($this->validateRegExp("set_88_origCalc",$param,"ER32")) { 							// ER32
			$this->addNodes( new CTePHP_set_88_origCalc($param) );
		}
	}
	public function set_89_destCalc  ($param) { 
		if ($this->validateRegExp("set_89_destCalc",$param,"ER32")) { 							// ER32
			$this->addNodes( new CTePHP_set_89_destCalc($param) );
		}
	}
	public function set_90_xObs  ($param) { 
		if ($this->validateRegExp("set_90_xObs",$param,"ER32")) { 								// ER32
			$this->addNodes( new CTePHP_set_90_xObs($param) );
		}
	}
	public function set_91_ObsCont  () { 
		$this->addNodes( new CTePHP_91_ObsCont() );
	}
	public function set_92_xCampo  ($param) { 
		if ($this->validateRegExp("set_92_xCampo",$param,"ER32")) { 							// ER32
			$this->addNodes( new CTePHP_set_92_xCampo() );
		}
	}
	public function set_93_xTexto  ($param) { 
		if ($this->validateRegExp("set_93_xTexto",$param,"ER32")) { 							// ER32
			$this->addNodes( new CTePHP_set_93_xTexto($param) );
		}
	}
	public function set_94_ObsFisco  () { 
		$this->addNodes( new CTePHP_94_ObsFisco() );
	}
	public function set_95_xCampo  ($param) { 
		if ($this->validateRegExp("set_95_xCampo",$param,"ER32")) { 							// ER32
			$this->addNodes( new CTePHP_set_95_xCampo($param) );
		}
	}
	public function set_96_xTexto  ($param) { 
		if ($this->validateRegExp("set_96_xTexto",$param,"ER32")) { 							// ER32
			$this->addNodes( new CTePHP_set_96_xTexto($param) );
		}
	}
	public function set_97_emit  () { 
		$this->addNodes( new CTePHP_97_emit() );
	}
	public function set_98_CNPJ  ($param) { 
		if ($this->validateRegExp("set_98_CNPJ",$param,"ER4")) { 								// ER4
			$this->addNodes( new CTePHP_set_98_CNPJ($param) );
		}
	}
	public function set_99_IE  ($param) { 
		if ($this->validateRegExp("set_99_IE",$param,"ER25")) { 								// ER25
			$this->addNodes( new CTePHP_set_99_IE($param) );
		}
	}
	public function set_100_xNome  ($param) { 
		if ($this->validateRegExp("set_100_xNome",$param,"ER32")) { 							// ER32
			$this->addNodes( new CTePHP_set_100_xNome($param) );
		}
	}
	public function set_101_xFant  ($param) { 
		if ($this->validateRegExp("set_101_xFant",$param,"ER32")) { 							// ER32
			$this->addNodes( new CTePHP_set_101_xFant($param) );
		}
	}
	public function set_102_enderEmit  () { 
		$this->addNodes( new CTePHP_102_enderEmit() );
	}
	public function set_103_xLgr  ($param) { 
		if ($this->validateRegExp("set_103_xLgr",$param,"ER32")) { 								// ER32
			$this->addNodes( new CTePHP_set_103_xLgr($param) );
		}
	}
	public function set_104_nro  ($param) { 
		if ($this->validateRegExp("set_104_nro",$param,"ER32")) { 								// ER32
			$this->addNodes( new CTePHP_set_104_nro($param) );
		}
	}
	public function set_105_xCpl  ($param) { 
		if ($this->validateRegExp("set_105_xCpl",$param,"ER32")) { 								// ER32
			$this->addNodes( new CTePHP_set_105_xCpl($param) );
		}
	}
	public function set_106_xBairro  ($param) { 
		if ($this->validateRegExp("set_106_xBairro",$param,"ER32")) { 							// ER32
			$this->addNodes( new CTePHP_set_106_xBairro($param) );
		}
	}
	public function set_107_cMun  ($param) { 
		if ($this->validateRegExp("set_107_cMun",$param,"ER2")) { 								// ER2
			$this->addNodes( new CTePHP_set_107_cMun($param) );
		}
	}
	public function set_108_xMun  ($param) { 
		if ($this->validateRegExp("set_108_xMun",$param,"ER32")) { 								// ER32
			$this->addNodes( new CTePHP_set_108_xMun($param) );
		}
	}
	public function set_109_CEP  ($param) { 
		if ($this->validateRegExp("set_109_CEP",$param," ER33")) { 								// ER33
			$this->addNodes( new CTePHP_set_109_CEP($param) );
		}
	}
	public function set_110_UF  ($param) { 
		if ($this->validateDomain("set_110_UF",$param,"D6")) {									// D6
			$this->addNodes( new CTePHP_set_110_UF($param) );
		}
	}
	public function set_111_fone  ($param) { 
		if ($this->validateRegExp("set_111_fone",$param,"ER36")) { 								// ER36
			$this->addNodes( new CTePHP_set_111_fone($param) );
		}
	}
	public function set_112_rem  () { 
		$this->addNodes( new CTePHP_112_rem() );
	}
	public function set_113_CNPJ  ($param) { 
		if ($this->validateRegExp("set_113_CNPJ",$param,"ER6")) { 								// ER6
			$this->addNodes( new CTePHP_set_113_CNPJ($param) );
		}
	}
	public function set_114_CPF  ($param) { 
		if ($this->validateRegExp("set_114_CPF",$param,"ER7")) { 								// ER7
			$this->addNodes( new CTePHP_set_114_CPF($param) );
		}
	}
	public function set_115_IE  ($param) { 
		if ($this->validateRegExp("set_115_IE",$param,"ER26")) { 								// ER26
			$this->addNodes( new CTePHP_set_115_IE($param) );
		}
	}
	public function set_116_xNome  ($param) { 
		if ($this->validateRegExp("set_116_xNome",$param,"ER32")) { 							// ER32
			$this->addNodes( new CTePHP_set_116_xNome($param) );
		}
	}
	public function set_117_xFant  ($param) { 
		if ($this->validateRegExp("set_117_xFant",$param,"ER32")) { 							// ER32
			$this->addNodes( new CTePHP_set_117_xFant($param) );
		}
	}
	public function set_118_fone  ($param) { 
		if ($this->validateRegExp("set_118_fone",$param,"ER36")) { 								// ER36
			$this->addNodes( new CTePHP_set_118_fone($param) );
		}
	}
	public function set_119_enderReme  () { 
		$this->addNodes( new CTePHP_119_enderReme() );
	}
	public function set_120_xLgr  ($param) { 
		if ($this->validateRegExp("set_120_xLgr",$param,"ER32")) { 								// ER32
			$this->addNodes( new CTePHP_set_120_xLgr($param) );
		}
	}
	public function set_121_nro  ($param) { 
		if ($this->validateRegExp("set_121_nro",$param,"ER32")) { 								// ER32
			$this->addNodes( new CTePHP_set_121_nro($param) );
		}
	}
	public function set_122_xCpl  ($param) { 
		if ($this->validateRegExp("set_122_xCpl",$param,"ER32")) { 								// ER32
			$this->addNodes( new CTePHP_set_122_xCpl($param) );
		}
	}
	public function set_123_xBairro  ($param) { 
		if ($this->validateRegExp("set_123_xBairro",$param,"ER32")) { 							// ER32
			$this->addNodes( new CTePHP_set_123_xBairro($param) );
		}
	}
	public function set_124_cMun  ($param) { 
		if ($this->validateRegExp("set_124_cMun",$param,"ER2")) { 								// ER2
			$this->addNodes( new CTePHP_set_124_cMun($param) );
		}
	}
	public function set_125_xMun  ($param) { 
		if ($this->validateRegExp("set_125_xMun",$param,"ER32")) { 								// ER32
			$this->addNodes( new CTePHP_set_125_xMun($param) );
		}
	}
	public function set_126_CEP  ($param) { 
		if ($this->validateRegExp("set_126_CEP",$param," ER33")) { 								// ER33
			$this->addNodes( new CTePHP_set_126_CEP($param) );
		}
	}
	public function set_127_UF  ($param) { 
		if ($this->validateDomain("set_127_UF",$param,"D5")) {									// D5
			$this->addNodes( new CTePHP_set_127_UF($param) );
		}
	}
	public function set_128_cPais  ($param) { 
		if ($this->validateRegExp("set_128_cPais",$param,"ER27")) { 							// ER27
			$this->addNodes( new CTePHP_set_128_cPais($param) );
		}
	}
	public function set_129_xPais  ($param) { 
		if ($this->validateRegExp("set_129_xPais",$param,"ER32")) { 							// ER32
			$this->addNodes( new CTePHP_set_129_xPais($param) );
		}
	}
	public function set_130_email  ($param) { 
		if ($this->validateRegExp("set_130_email",$param,"ER47")) { 							// ER47
			$this->addNodes( new CTePHP_set_130_email($param) );
		}
	}
	public function set_131_infNF  () { 
		$this->addNodes( new CTePHP_131_infNF() );
	}
	public function set_132_nRoma  ($param) { 
		if ($this->validateRegExp("set_132_nRoma",$param,"ER32")) { 							// ER32
			$this->addNodes( new CTePHP_set_132_nRoma($param) );
		}
	}
	public function set_133_nPed  ($param) { 
		if ($this->validateRegExp("set_133_nPed",$param,"ER32")) { 								// ER32
			$this->addNodes( new CTePHP_set_133_nPed($param) );
		}
	}
	public function set_134_mod  ($param) { 
		if ($this->validateDomain("set_134_mod",$param,"D4")) {									// D4
			$this->addNodes( new CTePHP_set_134_mod($param) );
		}
	}
	public function set_135_serie  ($param) { 
		if ($this->validateRegExp("set_135_serie",$param,"ER32")) { 							// ER32
			$this->addNodes( new CTePHP_set_135_serie($param) );
		}
	}
	public function set_136_nDoc  ($param) { 
		if ($this->validateRegExp("set_136_nDoc",$param,"ER32")) { 								// ER32
			$this->addNodes( new CTePHP_set_136_nDoc($param) );
		}
	}
	public function set_137_dEmi  ($param) { 
		if ($this->validateRegExp("set_137_dEmi",$param,"ER9")) { 								// ER9
			$this->addNodes( new CTePHP_set_137_dEmi($param) );
		}
	}
	public function set_138_vBC  ($param) { 
		if ($this->validateRegExp("set_138_vBC",$param,"ER23")) { 								// ER23
			$this->addNodes( new CTePHP_set_138_vBC($param) );
		}
	}
	public function set_139_vICMS  ($param) { 
		if ($this->validateRegExp("set_139_vICMS",$param,"ER23")) { 							// ER23
			$this->addNodes( new CTePHP_set_139_vICMS($param) );
		}
	}
	public function set_140_vBCST  ($param) { 
		if ($this->validateRegExp("set_140_vBCST",$param,"ER23")) { 							// ER23
			$this->addNodes( new CTePHP_set_140_vBCST($param) );
		}
	}
	public function set_141_vST  ($param) { 
		if ($this->validateRegExp("set_141_vST",$param,"ER23")) { 								// ER23
			$this->addNodes( new CTePHP_set_141_vST($param) );
		}
	}
	public function set_142_vProd  ($param) { 
		if ($this->validateRegExp("set_142_vProd",$param,"ER23")) { 							// ER23
			$this->addNodes( new CTePHP_set_142_vProd($param) );
		}
	}
	public function set_143_vNF  ($param) { 
		if ($this->validateRegExp("set_143_vNF",$param,"ER23")) { 								// ER23
			$this->addNodes( new CTePHP_set_143_vNF($param) );
		}
	}
	public function set_144_nCFOP  ($param) { 
		if ($this->validateRegExp("set_144_nCFOP",$param,"ER46")) { 							// ER46
			$this->addNodes( new CTePHP_set_144_nCFOP($param) );
		}
	}
	public function set_145_nPeso  ($param) { 
		if ($this->validateRegExp("set_145_nPeso",$param,"ER20")) { 							// ER20
			$this->addNodes( new CTePHP_set_145_nPeso($param) );
		}
	}
	public function set_146_PIN  ($param) { 
		if ($this->validateRegExp("set_146_PIN",$param,"ER37")) { 								// ER37
			$this->addNodes( new CTePHP_set_146_PIN($param) );
		}
	}
	public function set_147_locRet  () { 
		$this->addNodes( new CTePHP_147_locRet() );
	}
	public function set_148_CNPJ  ($param) { 
		if ($this->validateRegExp("set_148_CNPJ",$param,"ER4")) { 								// ER4
			$this->addNodes( new CTePHP_set_148_CNPJ($param) );
		}
	}
	public function set_149_CPF  ($param) { 
		if ($this->validateRegExp("set_149_CPF",$param,"ER7")) { 								// ER7
			$this->addNodes( new CTePHP_set_149_CPF($param) );
		}
	}
	public function set_150_xNome  ($param) { 
		if ($this->validateRegExp("set_150_xNome",$param,"ER32")) { 							// ER32
			$this->addNodes( new CTePHP_set_150_xNome($param) );
		}
	}
	public function set_151_xLgr  ($param) { 
		if ($this->validateRegExp("set_151_xLgr",$param,"ER32")) { 								// ER32
			$this->addNodes( new CTePHP_set_151_xLgr($param) );
		}
	}
	public function set_152_Nro  ($param) { 
		if ($this->validateRegExp("set_152_Nro",$param,"ER32")) { 								// ER32
			$this->addNodes( new CTePHP_set_152_Nro($param) );
		}
	}
	public function set_153_xCpl  ($param) { 
		if ($this->validateRegExp("set_153_xCpl",$param,"ER32")) { 								// ER32
			$this->addNodes( new CTePHP_set_153_xCpl($param) );
		}
	}
	public function set_154_xBairro  ($param) { 
		if ($this->validateRegExp("set_154_xBairro",$param,"ER32")) { 							// ER32
			$this->addNodes( new CTePHP_set_154_xBairro($param) );
		}
	}
	public function set_155_cMun  ($param) { 
		if ($this->validateRegExp("set_155_cMun",$param,"ER2")) { 								// ER2
			$this->addNodes( new CTePHP_set_155_cMun($param) );
		}
	}
	public function set_156_xMun  ($param) { 
		if ($this->validateRegExp("set_156_xMun",$param,"ER32")) { 								// ER32
			$this->addNodes( new CTePHP_set_156_xMun($param) );
		}
	}
	public function set_157_UF  ($param) { 
		if ($this->validateDomain("set_157_UF",$param,"D5")) {									// D5
			$this->addNodes( new CTePHP_set_157_UF($param) );
		}
	}
	public function set_158_infNFe  () { 
		$this->addNodes( new CTePHP_158_infNFe() );
	}
	public function set_159_Chave  ($param) { 
		if ($this->validateRegExp("set_159_Chave",$param,"ER3")) { 								// ER3
			$this->addNodes( new CTePHP_set_159_Chave($param) );
		}
	}
	public function set_160_PIN  ($param) { 
		if ($this->validateRegExp("set_160_PIN",$param,"ER37")) { 								// ER37
			$this->addNodes( new CTePHP_set_160_PIN($param) );
		}
	}
	public function set_161_infOutros  () { 
		$this->addNodes( new CTePHP_161_infOutros() );
	}
	public function set_162_tpDoc  ($param) { 
		if ($this->validateDomain("set_162_tpDoc",$param,"D14")) {								// D14
			$this->addNodes( new CTePHP_set_162_tpDoc($param) );
		}
	}
	public function set_163_descOutros ($param) { 
		if ($this->validateRegExp("set_163_descOutros",$param,"ER32")) { 						// ER32
			$this->addNodes( new CTePHP_set_163_descOutros($param) );
		}
	}
	public function set_164_nDoc  ($param) { 
		if ($this->validateRegExp("set_164_nDoc",$param,"ER32")) { 								// ER32
			$this->addNodes( new CTePHP_set_164_nDoc($param) );
		}
	}
	public function set_165_dEmi  ($param) { 
		if ($this->validateRegExp("set_165_dEmi",$param,"ER9")) { 								// ER9
			$this->addNodes( new CTePHP_set_165_dEmi($param) );
		}
	}
	public function set_166_vDocFisc  ($param) { 
		if ($this->validateRegExp("set_166_vDocFisc",$param,"ER24")) { 							// ER24
			$this->addNodes( new CTePHP_set_166_vDocFisc($param) );
		}
	}
	public function set_167_exped  () { 
		$this->addNodes( new CTePHP_167_exped() );
	}
	public function set_168_CNPJ  ($param) { 
		if ($this->validateRegExp("set_168_CNPJ",$param,"ER6")) { 								// ER6
			$this->addNodes( new CTePHP_set_168_CNPJ($param) );
		}
	}
	public function set_169_CPF  ($param) {
		if ($this->validateRegExp("set_169_CPF",$param,"ER7")) { 								// ER7
			$this->addNodes( new CTePHP_set_169_CPF($param) );
		}
	}
	public function set_170_IE  ($param) { 
		if ($this->validateRegExp("set_170_IE",$param,"ER26")) { 								// ER26
			$this->addNodes( new CTePHP_set_170_IE($param) );
		}
	}
	public function set_171_xNome  ($param) { 
		if ($this->validateRegExp("set_171_xNome",$param,"ER32")) { 							// ER32
			$this->addNodes( new CTePHP_set_171_xNome($param) );
		}
	}
	public function set_172_fone  ($param) { 
		if ($this->validateRegExp("set_172_fone",$param,"ER36")) { 								// ER36
			$this->addNodes( new CTePHP_set_172_fone($param) );
		}
	}
	public function set_173_enderExped  () { 
		$this->addNodes( new CTePHP_173_enderExped() );
	}
	public function set_174_xLgr  ($param) { 
		if ($this->validateRegExp("set_174_xLgr",$param,"ER32")) { 								// ER32
			$this->addNodes( new CTePHP_set_174_xLgr($param) );
		}
	}
	public function set_175_nro  ($param) { 
		if ($this->validateRegExp("set_175_nro",$param,"ER32")) { 								// ER32
			$this->addNodes( new CTePHP_set_175_nro($param) );
		}
	}
	public function set_176_xCpl  ($param) { 
		if ($this->validateRegExp("set_176_xCpl",$param,"ER32")) { 								// ER32
			$this->addNodes( new CTePHP_set_176_xCpl($param) );
		}
	}
	public function set_177_xBairro  ($param) { 
		if ($this->validateRegExp("set_177_xBairro",$param,"ER32")) { 							// ER32
			$this->addNodes( new CTePHP_set_177_xBairro($param) );
		}
	}
	public function set_178_cMun  ($param) { 
		if ($this->validateRegExp("set_178_cMun",$param,"ER2")) { 								// ER2
			$this->addNodes( new CTePHP_set_178_cMun($param) );
		}
	}
	public function set_179_xMun  ($param) { 
		if ($this->validateRegExp("set_179_xMun",$param,"ER32")) { 								// ER32
			$this->addNodes( new CTePHP_set_179_xMun($param) );
		}
	}
	public function set_180_CEP  ($param) { 
		if ($this->validateRegExp("set_180_CEP",$param," ER33")) { 								// ER33
			$this->addNodes( new CTePHP_set_180_CEP($param) );
		}
	}
	public function set_181_UF  ($param) { 
		if ($this->validateDomain("set_181_UF",$param,"D5")) {									// D5
			$this->addNodes( new CTePHP_set_181_UF($param) );
		}
	}
	public function set_182_cPais  ($param) { 
		if ($this->validateRegExp("set_182_cPais",$param,"ER27")) { 							// ER27
			$this->addNodes( new CTePHP_set_182_cPais($param) );
		}
	}
	public function set_183_xPais  ($param) { 
		if ($this->validateRegExp("set_183_xPais",$param,"ER32")) { 							// ER32
			$this->addNodes( new CTePHP_set_183_xPais($param) );
		}
	}
	public function set_184_email  ($param) { 
		if ($this->validateRegExp("set_184_email",$param,"ER47")) { 							// ER47
			$this->addNodes( new CTePHP_set_184_email($param) );
		}
	}
	public function set_185_receb  () { 
		$this->addNodes( new CTePHP_185_receb() );
	}
	public function set_186_CNPJ  ($param) { 
		if ($this->validateRegExp("set_186_CNPJ",$param,"ER6")) { 								// ER6
			$this->addNodes( new CTePHP_set_186_CNPJ($param) );
		}
	}
	public function set_187_CPF  ($param) { 
		if ($this->validateRegExp("set_187_CPF",$param,"ER7")) { 								// ER7
			$this->addNodes( new CTePHP_set_187_CPF($param) );
		}
	}
	public function set_188_IE  ($param) { 
		if ($this->validateRegExp("set_188_IE",$param,"ER26")) { 								// ER26
			$this->addNodes( new CTePHP_set_188_IE($param) );
		}
	}
	public function set_189_xNome  ($param) { 
		if ($this->validateRegExp("set_189_xNome",$param,"ER32")) { 							// ER32
			$this->addNodes( new CTePHP_set_189_xNome($param) );
		}
	}
	public function set_190_fone  ($param) { 
		if ($this->validateRegExp("set_190_fone",$param,"ER36")) { 								// ER36
			$this->addNodes( new CTePHP_set_190_fone($param) );
		}
	}
	public function set_191_enderReceb  () { 
		$this->addNodes( new CTePHP_191_enderReceb() );
	}
	public function set_192_xLgr  ($param) { 
		if ($this->validateRegExp("set_192_xLgr",$param,"ER32")) { 								// ER32
			$this->addNodes( new CTePHP_set_192_xLgr($param) );
		}
	}
	public function set_193_nro  ($param) { 
		if ($this->validateRegExp("set_193_nro",$param,"ER32")) { 								// ER32
			$this->addNodes( new CTePHP_set_193_nro($param) );
		}
	}
	public function set_194_xCpl  ($param) { 
		if ($this->validateRegExp("set_194_xCpl",$param,"ER32")) { 								// ER32
			$this->addNodes( new CTePHP_set_194_xCpl($param) );
		}
	}
	public function set_195_xBairro  ($param) { 
		if ($this->validateRegExp("set_195_xBairro",$param,"ER32")) { 							// ER32
			$this->addNodes( new CTePHP_set_195_xBairro($param) );
		}
	}
	public function set_196_cMun  ($param) { 
		if ($this->validateRegExp("set_196_cMun",$param,"ER2")) { 								// ER2
			$this->addNodes( new CTePHP_set_196_cMun($param) );
		}
	}
	public function set_197_xMun  ($param) { 
		if ($this->validateRegExp("set_197_xMun",$param,"ER32")) { 								// ER32
			$this->addNodes( new CTePHP_set_197_xMun($param) );
		}
	}
	public function set_198_CEP  ($param) { 
		if ($this->validateRegExp("set_198_CEP",$param," ER33")) { 								// ER33
			$this->addNodes( new CTePHP_set_198_CEP($param) );
		}
	}
	public function set_199_UF  ($param) { 
		if ($this->validateDomain("set_199_UF",$param,"D5")) {									// D5
			$this->addNodes( new CTePHP_set_199_UF($param) );
		}
	}
	public function set_200_cPais  ($param) { 
		if ($this->validateRegExp("set_200_cPais",$param,"ER27")) { 							// ER27
			$this->addNodes( new CTePHP_set_200_cPais($param) );
		}
	}
	public function set_201_xPais  ($param) { 
		if ($this->validateRegExp("set_201_xPais",$param,"ER32")) { 							// ER32
			$this->addNodes( new CTePHP_set_201_xPais($param) );
		}
	}
	public function set_202_email  ($param) { 
		if ($this->validateRegExp("set_202_email",$param,"ER47")) { 							// ER47
			$this->addNodes( new CTePHP_set_202_email($param) );
		}
	}
	public function set_203_dest  () { 
		$this->addNodes( new CTePHP_203_dest() );
	}
	public function set_204_CNPJ  ($param) { 
		if ($this->validateRegExp("set_204_CNPJ",$param,"ER6")) { 								// ER6
			$this->addNodes( new CTePHP_set_204_CNPJ($param) );
		}
	}
	public function set_205_CPF  ($param) {
		if ($this->validateRegExp("set_205_CPF",$param,"ER7")) { 								// ER7
			$this->addNodes( new CTePHP_set_205_CPF($param) );
		}
	}
	public function set_206_IE  ($param) { 
		if ($this->validateRegExp("set_206_IE",$param,"ER26")) { 								// ER26
			$this->addNodes( new CTePHP_set_206_IE($param) );
		}
	}
	public function set_207_xNome  ($param) { 
		if ($this->validateRegExp("set_207_xNome",$param,"ER32")) { 							// ER32
			$this->addNodes( new CTePHP_set_207_xNome($param) );
		}
	}
	public function set_208_fone  ($param) { 
		if ($this->validateRegExp("set_208_fone",$param,"ER36")) { 								// ER36
			$this->addNodes( new CTePHP_set_208_fone($param) );
		}
	}
	public function set_209_ISUF  ($param) { 
		if ($this->validateRegExp("set_209_ISUF",$param,"ER38")) { 								// ER38
			$this->addNodes( new CTePHP_set_209_ISUF($param) );
		}
	}
	public function set_210_enderDest  () { 
		$this->addNodes( new CTePHP_210_enderDest() );
	}
	public function set_211_xLgr  ($param) { 
		if ($this->validateRegExp("set_211_xLgr",$param,"ER32")) { 								// ER32
			$this->addNodes( new CTePHP_set_211_xLgr($param) );
		}
	}
	public function set_212_nro  ($param) { 
		if ($this->validateRegExp("set_212_nro",$param,"ER32")) { 								// ER32
			$this->addNodes( new CTePHP_set_212_nro($param) );
		}
	}
	public function set_213_xCpl  ($param) { 
		if ($this->validateRegExp("set_213_xCpl",$param,"ER32")) { 								// ER32
			$this->addNodes( new CTePHP_set_213_xCpl($param) );
		}
	}
	public function set_214_xBairro  ($param) { 
		if ($this->validateRegExp("set_214_xBairro",$param,"ER32")) { 							// ER32
			$this->addNodes( new CTePHP_set_214_xBairro($param) );
		}
	}
	public function set_215_cMun  ($param) { 
		if ($this->validateRegExp("set_215_cMun",$param,"ER2")) { 								// ER2
			$this->addNodes( new CTePHP_set_215_cMun($param) );
		}
	}
	public function set_216_xMun  ($param) { 
		if ($this->validateRegExp("set_216_xMun",$param,"ER32")) { 								// ER32
			$this->addNodes( new CTePHP_set_216_xMun($param) );
		}
	}
	public function set_217_CEP  ($param) { 
		if ($this->validateRegExp("set_217_CEP",$param," ER33")) { 								// ER33
			$this->addNodes( new CTePHP_set_217_CEP($param) );
		}
	}
	public function set_218_UF  ($param) { 
		if ($this->validateDomain("set_218_UF",$param,"D5")) {									// D5
			$this->addNodes( new CTePHP_set_218_UF($param) );
		}
	}
	public function set_219_cPais  ($param) { 
		if ($this->validateRegExp("set_219_cPais",$param,"ER27")) { 							// ER27
			$this->addNodes( new CTePHP_set_219_cPais($param) );
		}
	}
	public function set_220_xPais  ($param) { 
		if ($this->validateRegExp("set_220_xPais",$param,"ER32")) { 							// ER32
			$this->addNodes( new CTePHP_set_220_xPais($param) );
		}
	}
	public function set_221_email  ($param) { 
		if ($this->validateRegExp("set_221_email",$param,"ER47")) { 							// ER47
			$this->addNodes( new CTePHP_set_221_email($param) );
		}
	}
	public function set_222_locEnt  () { 
		$this->addNodes( new CTePHP_222_locEnt() );
	}
	public function set_223_CNPJ  ($param) { 
		if ($this->validateRegExp("set_223_CNPJ",$param,"ER4")) { 								// ER4
			$this->addNodes( new CTePHP_set_223_CNPJ($param) );
		}
	}
	public function set_224_CPF  ($param) { 
		if ($this->validateRegExp("set_224_CPF",$param,"ER7")) { 								// ER7
			$this->addNodes( new CTePHP_set_224_CPF($param) );
		}
	}
	public function set_225_xNome  ($param) { 
		if ($this->validateRegExp("set_225_xNome",$param,"ER32")) { 							// ER32
			$this->addNodes( new CTePHP_set_225_xNome($param) );
		}
	}
	public function set_226_xLgr  ($param) { 
		if ($this->validateRegExp("set_226_xLgr",$param,"ER32")) { 								// ER32
			$this->addNodes( new CTePHP_set_226_xLgr($param) );
		}
	}
	public function set_227_nro  ($param) { 
		if ($this->validateRegExp("set_227_nro",$param,"ER32")) { 								// ER32
			$this->addNodes( new CTePHP_set_227_nro($param) );
		}
	}
	public function set_228_xCpl  ($param) { 
		if ($this->validateRegExp("set_228_xCpl",$param,"ER32")) { 								// ER32
			$this->addNodes( new CTePHP_set_228_xCpl($param) );
		}
	}
	public function set_229_xBairro  ($param) { 
		if ($this->validateRegExp("set_229_xBairro",$param,"ER32")) { 							// ER32
			$this->addNodes( new CTePHP_set_229_xBairro($param) );
		}
	}
	public function set_230_cMun  ($param) { 
		if ($this->validateRegExp("set_230_cMun",$param,"ER2")) { 								// ER2
			$this->addNodes( new CTePHP_set_230_cMun($param) );
		}
	}
	public function set_231_xMun  ($param) { 
		if ($this->validateRegExp("set_231_xMun",$param,"ER32")) { 								// ER32
			$this->addNodes( new CTePHP_set_231_xMun($param) );
		}
	}
	public function set_232_UF  ($param) { 
		if ($this->validateDomain("set_232_UF",$param,"D5")) {									// D5
			$this->addNodes( new CTePHP_set_232_UF($param) );
		}
	}
	public function set_233_vPrest  () { 
		$this->addNodes( new CTePHP_233_vPrest() );
	}
	public function set_234_vTPrest  ($param) { 
		if ($this->validateRegExp("set_234_vTPrest",$param,"ER23")) { 							// ER23
			$this->addNodes( new CTePHP_set_234_vTPrest($param) );
		}
	}
	public function set_235_vRec  ($param) { 
		if ($this->validateRegExp("set_235_vRec",$param,"ER23")) { 								// ER23
			$this->addNodes( new CTePHP_set_235_vRec($param) );
		}
	}
	public function set_236_Comp  () { 
		$this->addNodes( new CTePHP_236_Comp() );
	}
	public function set_237_xNome  ($param) { 
		if ($this->validateRegExp("set_237_xNome",$param,"ER32")) { 							// ER32
			$this->addNodes( new CTePHP_set_237_xNome($param) );
		}
	}
	public function set_238_vComp  ($param) { 
		if ($this->validateRegExp("set_238_vComp",$param,"ER23")) { 							// ER23
			$this->addNodes( new CTePHP_set_238_vComp($param) );
		}
	}
	public function set_239_imp  () { 
		$this->addNodes( new CTePHP_239_imp() );
	}
	public function set_240_ICMS  () { 
		$this->addNodes( new CTePHP_240_ICMS() );
	}
	public function set_241_ICMS00  () { 
		$this->addNodes( new CTePHP_241_ICMS00() );
	}
	public function set_242_CST  ($param) { 
		if ($this->validateDomain("set_242_CST",$param,"D17")) {								// D17
			$this->addNodes( new CTePHP_set_242_CST($param) );
		}
	}
	public function set_243_vBC  ($param) { 
		if ($this->validateRegExp("set_243_vBC",$param,"ER23")) { 								// ER23
			$this->addNodes( new CTePHP_set_243_vBC($param) );
		}
	}
	public function set_244_pICMS  ($param) {
		if ($this->validateRegExp("set_244_pICMS",$param,"ER10")) {								// ER10
			$this->addNodes( new CTePHP_set_244_pICMS($param) );
		}
	}
	public function set_245_vICMS  ($param) { 
		if ($this->validateRegExp("set_245_vICMS",$param,"ER23")) { 							// ER23
			$this->addNodes( new CTePHP_set_245_vICMS($param) );
		}
	}
	public function set_246_ICMS20  () { 
		$this->addNodes( new CTePHP_246_ICMS20() );
	}
	public function set_247_CST  ($param) { 
		if ($this->validateDomain("set_247_CST",$param,"D18")) {								// D18
			$this->addNodes( new CTePHP_set_247_CST($param) );
		}
	}
	public function set_248_pRedBC  ($param) { 
		if ($this->validateRegExp("set_248_pRedBC",$param,"ER11")) { 							// ER11
			$this->addNodes( new CTePHP_set_248_pRedBC($param) );
		}
	}
	public function set_249_vBC  ($param) { 
		if ($this->validateRegExp("set_249_vBC",$param,"ER23")) { 								// ER23
			$this->addNodes( new CTePHP_set_249_vBC($param) );
		}
	}
	public function set_250_pICMS  ($param) { 
		if ($this->validateRegExp("set_250_pICMS",$param,"ER10")) {								// ER10
			$this->addNodes( new CTePHP_set_250_pICMS($param) );
		}
	}
	public function set_251_vICMS  ($param) { 
		if ($this->validateRegExp("set_251_vICMS",$param,"ER23")) { 							// ER23
			$this->addNodes( new CTePHP_set_251_vICMS($param) );
		}
	}
	public function set_252_ICMS45  () { 
		$this->addNodes( new CTePHP_252_ICMS45() );
	}
	public function set_253_CST  ($param) { 
		if ($this->validateDomain("set_253_CST",$param,"D19")) {								// D19
			$this->addNodes( new CTePHP_set_253_CST($param) );
		}
	}
	public function set_254_ICMS60  () { 
		$this->addNodes( new CTePHP_254_ICMS60() );
	}
	public function set_255_CST  ($param) { 
		if ($this->validateDomain("set_255_CST",$param,"D20")) {								// D20
			$this->addNodes( new CTePHP_set_255_CST($param) );
		}
	}
	public function set_256_vBCSTRet  ($param) { 
		if ($this->validateRegExp("set_256_vBCSTRet",$param,"ER23")) { 							// ER23
			$this->addNodes( new CTePHP_set_256_vBCSTRet($param) );
		}
	}
	public function set_257_vICMSSTRet  ($param) { 
		if ($this->validateRegExp("set_257_vICMSSTRet",$param,"ER23")) { 						// ER23
			$this->addNodes( new CTePHP_set_257_vICMSSTRet($param) );
		}
	}
	public function set_258_pICMSSTRet  ($param) { 
		if ($this->validateRegExp("set_258_pICMSSTRet",$param,"ER10")) {						// ER10
			$this->addNodes( new CTePHP_set_258_pICMSSTRet($param) );
		}
	}
	public function set_259_vCred  ($param) { 
		if ($this->validateRegExp("set_259_vCred",$param,"ER23")) { 							// ER23
			$this->addNodes( new CTePHP_set_259_vCred($param) );
		}
	}
	public function set_260_ICMS90  () { 
		$this->addNodes( new CTePHP_260_ICMS90() );
	}
	public function set_261_CST  ($param) { 
		if ($this->validateDomain("set_261_CST",$param,"D21")) {								// D21
			$this->addNodes( new CTePHP_set_261_CST($param) );
		}
	}
	public function set_262_pRedBC  ($param) { 
		if ($this->validateRegExp("set_262_pRedBC",$param,"ER11")) { 							// ER11
			$this->addNodes( new CTePHP_set_262_pRedBC($param) );
		}
	}
	public function set_263_vBC  ($param) { 
		if ($this->validateRegExp("set_263_vBC",$param,"ER23")) { 								// ER23
			$this->addNodes( new CTePHP_set_263_vBC($param) );
		}
	}
	public function set_264_pICMS  ($param) { 
		if ($this->validateRegExp("set_264_pICMS",$param,"ER10")) {								// ER10
			$this->addNodes( new CTePHP_set_264_pICMS($param) );
		}
	}
	public function set_265_vICMS  ($param) { 
		if ($this->validateRegExp("set_265_vICMS",$param,"ER23")) { 							// ER23
			$this->addNodes( new CTePHP_set_265_vICMS($param) );
		}
	}
	public function set_266_vCred  ($param) { 
		if ($this->validateRegExp("set_266_vCred",$param,"ER23")) { 							// ER23
			$this->addNodes( new CTePHP_set_266_vCred($param) );
		}
	}
	public function set_267_ICMSOutraUF  () { 
		$this->addNodes( new CTePHP_267_ICMSOutraUF() );
	}
	public function set_268_CST  ($param) { 
		if ($this->validateDomain("set_268_CST",$param,"D21")) {								// D21
			$this->addNodes( new CTePHP_set_268_CST($param) );
		}
	}
	public function set_269_pRedBCOutraUF  ($param) { 
		if ($this->validateRegExp("set_269_pRedBCOutraUF",$param,"ER11")) { 					// ER11
			$this->addNodes( new CTePHP_set_269_pRedBCOutraUF($param) );
		}
	}
	public function set_270_vBCOutraUF  ($param) { 
		if ($this->validateRegExp("set_270_vBCOutraUF",$param,"ER23")) { 						// ER23
			$this->addNodes( new CTePHP_set_270_vBCOutraUF($param) );
		}
	}
	public function set_271_pICMSOutraUF  ($param) { 
		if ($this->validateRegExp("set_271_pICMSOutraUF",$param,"ER10")) {						// ER10
			$this->addNodes( new CTePHP_set_271_pICMSOutraUF($param) );
		}
	}
	public function set_272_vICMSOutraUF  ($param) { 
		if ($this->validateRegExp("set_272_vICMSOutraUF",$param,"ER23")) { 						// ER23
			$this->addNodes( new CTePHP_set_272_vICMSOutraUF($param) );
		}
	}
	public function set_273_ICMSSN  () { 
		$this->addNodes( new CTePHP_273_ICMSSN() );
	}
	public function set_274_indSN  ($param) { 
		if ($this->validateDomain("set_274_indSN",$param,"D22")) {								// D22
			$this->addNodes( new CTePHP_set_274_indSN($param) );
		}
	}
	public function set_275_infAdFisco  ($param) { 
		if ($this->validateRegExp("set_275_infAdFisco",$param,"ER32")) { 						// ER32
			$this->addNodes( new CTePHP_set_275_infAdFisco($param) );
		}
	}
	public function set_276_infCTeNorm  () { 
		$this->addNodes( new CTePHP_276_infCTeNorm() );
	}
	public function set_277_infCarga  () { 
		$this->addNodes( new CTePHP_277_infCarga() );
	}
	public function set_278_vCarga  ($param) { 
		if ($this->validateRegExp("set_278_vCarga",$param,"ER23")) { 							// ER23
			$this->addNodes( new CTePHP_set_278_vCarga($param) );
		}
	}
	public function set_279_proPred  ($param) { 
		if ($this->validateRegExp("set_279_proPred",$param,"ER32")) { 							// ER32
			$this->addNodes( new CTePHP_set_279_proPred($param) );
		}
	}
	public function set_280_xOutCat  ($param) { 
		if ($this->validateRegExp("set_280_xOutCat",$param,"ER32")) { 							// ER32
			$this->addNodes( new CTePHP_set_280_xOutCat($param) );
		}
	}
	public function set_281_infQ  () { 
		$this->addNodes( new CTePHP_281_infQ() );
	}
	public function set_282_cUnid  ($param) { 
		if ($this->validateDomain("set_282_cUnid",$param,"D15")) {								// D15
			$this->addNodes( new CTePHP_set_282_cUnid($param) );
		}
	}
	public function set_283_tpMed  ($param) { 
		if ($this->validateRegExp("set_283_tpMed",$param,"ER32")) { 							// ER32
			$this->addNodes( new CTePHP_set_283_tpMed($param) );
		}
	}
	public function set_284_qCarga  ($param) { 
		if ($this->validateRegExp("set_284_qCarga",$param,"ER17")) { 							// ER17
			$this->addNodes( new CTePHP_set_284_qCarga($param) );
		}
	}
	public function set_285_contQt  () { 
		$this->addNodes( new CTePHP_285_contQt() );
	}
	public function set_286_nCont  ($param) { 
		if ($this->validateRegExp("set_286_nCont",$param,"ER42")) { 							// ER42
			$this->addNodes( new CTePHP_set_286_nCont($param) );
		}
	}
	public function set_287_lacContQt  () { 
		$this->addNodes( new CTePHP_287_lacContQt() );
	}
	public function set_288_nLacre  ($param) { 
		if ($this->validateRegExp("set_288_nLacre",$param,"ER32")) { 							// ER32
			$this->addNodes( new CTePHP_set_288_nLacre($param) );
		}
	}
	public function set_289_dPrev  ($param) { 
		if ($this->validateRegExp("set_289_dPrev",$param,"ER9")) { 								// ER9
			$this->addNodes( new CTePHP_set_289_dPrev($param) );
		}
	}
	public function set_290_docAnt  () { 
		$this->addNodes( new CTePHP_290_docAnt() );
	}
	public function set_291_emiDocAnt  () { 
		$this->addNodes( new CTePHP_291_emiDocAnt() );
	}
	public function set_292_CNPJ  ($param) { 
		if ($this->validateRegExp("set_292_CNPJ",$param,"ER6")) { 								// ER6
			$this->addNodes( new CTePHP_set_292_CNPJ($param) );
		}
	}
	public function set_293_CPF  ($param) { 
		if ($this->validateRegExp("set_293_CPF",$param,"ER7")) { 								// ER7
			$this->addNodes( new CTePHP_set_293_CPF($param) );
		}
	}
	public function set_294_IE  ($param) { 
		if ($this->validateRegExp("set_294_IE",$param,"ER25")) { 								// ER25
			$this->addNodes( new CTePHP_set_294_IE($param) );
		}
	}
	public function set_295_UF  ($param) { 
		if ($this->validateDomain("set_295_UF",$param,"D5")) {									// D5
			$this->addNodes( new CTePHP_set_295_UF($param) );
		}
	}
	public function set_296_xNome  ($param) { 
		if ($this->validateRegExp("set_296_xNome",$param,"ER32")) { 							// ER32
			$this->addNodes( new CTePHP_set_296_xNome($param) );
		}
	}
	public function set_297_idDocAnt  () { 
		$this->addNodes( new CTePHP_297_idDocAnt() );
	}
	public function set_298_idDocAntPap  () { 
		$this->addNodes( new CTePHP_298_idDocAntPap() );
	}
	public function set_299_tpDoc  ($param) { 
		if ($this->validateDomain("set_299_tpDoc",$param,"D24")) {								// D24
			$this->addNodes( new CTePHP_set_299_tpDoc($param) );
		}
	}
	public function set_300_serie  ($param) { 
		if ($this->validateRegExp("set_300_serie",$param,"ER32")) { 							// ER32
			$this->addNodes( new CTePHP_set_300_serie($param) );
		}
	}
	public function set_301_subser  ($param) { 
		if ($this->validateRegExp("set_301_subser",$param,"ER32")) { 							// ER32
			$this->addNodes( new CTePHP_set_301_subser($param) );
		}
	}
	public function set_302_nDoc  ($param) { 
		if ($this->validateRegExp("set_302_nDoc",$param,"ER39")) { 								// ER39
			$this->addNodes( new CTePHP_set_302_nDoc($param) );
		}
	}
	public function set_303_dEmi  ($param) { 
		if ($this->validateRegExp("set_303_dEmi",$param,"ER9")) { 								// ER9
			$this->addNodes( new CTePHP_set_303_dEmi($param) );
		}
	}
	public function set_304_idDocAntEle  () { 
		$this->addNodes( new CTePHP_304_idDocAntEle() );
	}
	public function set_305_chave  ($param) { 
		if ($this->validateRegExp("set_305_chave",$param,"ER3")) { 								// ER3
			$this->addNodes( new CTePHP_set_305_chave($param) );
		}
	}
	public function set_306_seg  () { 
		$this->addNodes( new CTePHP_306_seg() );
	}
	public function set_307_respSeg  ($param) { 
		if ($this->validateDomain("set_307_respSeg",$param,"D16")) {							// D16
			$this->addNodes( new CTePHP_set_307_respSeg($param) );
		}
	}
	public function set_308_xSeg  ($param) { 
		if ($this->validateRegExp("set_308_xSeg",$param,"ER32")) { 								// ER32
			$this->addNodes( new CTePHP_set_308_xSeg($param) );
		}
	}
	public function set_309_nApol  ($param) { 
		if ($this->validateRegExp("set_309_nApol",$param,"ER32")) { 							// ER32
			$this->addNodes( new CTePHP_set_309_nApol($param) );
		}
	}
	public function set_310_nAver  ($param) { 
		if ($this->validateRegExp("set_310_nAver",$param,"ER32")) { 							// ER32
			$this->addNodes( new CTePHP_set_310_nAver($param) );
		}
	}
	public function set_311_vCarga  ($param) { 
		if ($this->validateRegExp("set_311_vCarga",$param,"ER24")) { 							// ER24
			$this->addNodes( new CTePHP_set_311_vCarga($param) );
		}
	}
	public function set_312_infModal  () { 
		$this->addNodes( new CTePHP_312_infModal() );
	}
	public function set_313_versaoModal  ($param) { 
		if ($this->validateRegExp("set_313_versaoModal",$param,"ER40")) { 						// ER40
			$this->addNodes( new CTePHP_set_313_versaoModal($param) );
		}
	}
	public function set_314_xs () { 
		$this->addNodes( new CTePHP_314_xs() );
	}
	public function set_315_peri  () { 
		$this->addNodes( new CTePHP_315_peri() );
	}
	public function set_316_nONU  ($param) { 
		if ($this->validateRegExp("set_316_nONU",$param,"ER41")) { 								// ER41
			$this->addNodes( new CTePHP_set_316_nONU($param) );
		}
	}
	public function set_317_xNomeAE  ($param) { 
		if ($this->validateRegExp("set_317_xNomeAE",$param,"ER32")) { 							// ER32
			$this->addNodes( new CTePHP_set_317_xNomeAE($param) );
		}
	}
	public function set_318_xClaRisco  ($param) { 
		if ($this->validateRegExp("set_318_xClaRisco",$param,"ER32")) { 						// ER32
			$this->addNodes( new CTePHP_set_318_xClaRisco($param) );
		}
	}
	public function set_319_grEmb  ($param) { 
		if ($this->validateRegExp("set_319_grEmb",$param,"ER32")) { 							// ER32
			$this->addNodes( new CTePHP_set_319_grEmb($param) );
		}
	}
	public function set_320_qTotProd  ($param) { 
		if ($this->validateRegExp("set_320_qTotProd",$param,"ER32")) { 							// ER32
			$this->addNodes( new CTePHP_set_320_qTotProd($param) );
		}
	}
	public function set_321_qVolTipo  ($param) { 
		if ($this->validateRegExp("set_321_qVolTipo",$param,"ER32")) { 							// ER32
			$this->addNodes( new CTePHP_set_321_qVolTipo($param) );
		}
	}
	public function set_322_pontoFulgor  ($param) { 
		if ($this->validateRegExp("set_322_pontoFulgor",$param,"ER32")) { 						// ER32
			$this->addNodes( new CTePHP_set_322_pontoFulgor($param) );
		}
	}
	public function set_323_veicNovos  () { 
		$this->addNodes( new CTePHP_323_veicNovos() );
	}
	public function set_324_chassi  ($param) { 
		if ($this->validateRegExp("set_324_chassi",$param,"ER42")) { 							// ER42
			$this->addNodes( new CTePHP_set_324_chassi($param) );
		}
	}
	public function set_325_cCor  ($param) { 
		if ($this->validateRegExp("set_325_cCor",$param,"ER32")) { 								// ER32
			$this->addNodes( new CTePHP_set_325_cCor($param) );
		}
	}
	public function set_326_xCor  ($param) { 
		if ($this->validateRegExp("set_326_xCor",$param,"ER32")) { 								// ER32
			$this->addNodes( new CTePHP_set_326_xCor($param) );
		}
	}
	public function set_327_cMod  ($param) { 
		if ($this->validateRegExp("set_327_cMod",$param,"ER32")) { 								// ER32
			$this->addNodes( new CTePHP_set_327_cMod($param) );
		}
	}
	public function set_328_vUnit  ($param) { 
		if ($this->validateRegExp("set_328_vUnit",$param,"ER23")) { 							// ER23
			$this->addNodes( new CTePHP_set_328_vUnit($param) );
		}
	}
	public function set_329_vFrete  ($param) { 
		if ($this->validateRegExp("set_329_vFrete",$param,"ER23")) { 							// ER23
			$this->addNodes( new CTePHP_set_329_vFrete($param) );
		}
	}
	public function set_330_cobr  () { 
		$this->addNodes( new CTePHP_330_cobr() );
	}
	public function set_331_fat  () { 
		$this->addNodes( new CTePHP_331_fat() );
	}
	public function set_332_nFat  ($param) { 
		if ($this->validateRegExp("set_332_nFat",$param,"ER32")) { 								// ER32
			$this->addNodes( new CTePHP_set_332_nFat($param) );
		}
	}
	public function set_333_vOrig  ($param) { 
		if ($this->validateRegExp("set_333_vOrig",$param,"ER24")) { 							// ER24
			$this->addNodes( new CTePHP_set_333_vOrig($param) );
		}
	}
	public function set_334_vDesc  ($param) { 
		if ($this->validateRegExp("set_334_vDesc",$param,"ER24")) { 							// ER24
			$this->addNodes( new CTePHP_set_334_vDesc($param) );
		}
	}
	public function set_335_vLiq  ($param) { 
		if ($this->validateRegExp("set_335_vLiq",$param,"ER24")) { 								// ER24
			$this->addNodes( new CTePHP_set_335_vLiq($param) );
		}
	}
	public function set_336_dup  () { 
		$this->addNodes( new CTePHP_336_dup() );
	}
	public function set_337_nDup  ($param) { 
		if ($this->validateRegExp("set_337_nDup",$param,"ER32")) { 								// ER32
			$this->addNodes( new CTePHP_set_337_nDup($param) );
		}
	}
	public function set_338_dVenc  ($param) { 
		if ($this->validateRegExp("set_338_dVenc",$param,"ER9")) { 								// ER9
			$this->addNodes( new CTePHP_set_338_dVenc($param) );
		}
	}
	public function set_339_vDup  ($param) { 
		if ($this->validateRegExp("set_339_vDup",$param,"ER24")) { 								// ER24
			$this->addNodes( new CTePHP_set_339_vDup($param) );
		}
	}
	public function set_340_infCteSub  () { 
		$this->addNodes( new CTePHP_340_infCteSub() );
	}
	public function set_341_chCte  ($param) { 
		if ($this->validateRegExp("set_341_chCte",$param,"ER3")) { 								// ER3
			$this->addNodes( new CTePHP_set_341_chCte($param) );
		}
	}
	public function set_342_tomaICMS  () { 
		$this->addNodes( new CTePHP_342_tomaICMS() );
	}
	public function set_343_refNFe  ($param) { 
		if ($this->validateRegExp("set_343_refNFe",$param,"ER3")) { 							// ER3
			$this->addNodes( new CTePHP_set_343_refNFe($param) );
		}
	}
	public function set_344_refNF  () { 
		$this->addNodes( new CTePHP_344_refNF() );
	}
	public function set_345_CNPJ  ($param) { 
		if ($this->validateRegExp("set_345_CNPJ",$param,"ER4")) { 								// ER4
			$this->addNodes( new CTePHP_set_345_CNPJ($param) );
		}
	}
	public function set_346_mod  ($param) { 
		if ($this->validateDomain("set_346_mod",$param,"D25")) {								// D25
			$this->addNodes( new CTePHP_set_346_mod($param) );
		}
	}
	public function set_347_serie  ($param) { 
		if ($this->validateRegExp("set_347_serie",$param,"ER30")) { 							// ER30
			$this->addNodes( new CTePHP_set_347_serie($param) );
		}
	}
	public function set_348_subserie  ($param) { 
		if ($this->validateRegExp("set_348_subserie",$param,"ER30")) { 							// ER30
			$this->addNodes( new CTePHP_set_348_subserie($param) );
		}
	}
	public function set_349_nro  ($param) { 
		if ($this->validateRegExp("set_349_nro",$param,"ER43")) { 								// ER43
			$this->addNodes( new CTePHP_set_349_nro($param) );
		}
	}
	public function set_350_valor  ($param) { 
		if ($this->validateRegExp("set_350_valor",$param,"ER23")) { 							// ER23
			$this->addNodes( new CTePHP_set_350_valor($param) );
		}
	}
	public function set_351_dEmi  ($param) { 
		if ($this->validateRegExp("set_351_dEmi",$param,"ER9")) { 								// ER9
			$this->addNodes( new CTePHP_set_351_dEmi($param) );
		}
	}
	public function set_352_refCte  ($param) { 
		if ($this->validateRegExp("set_352_refCte",$param,"ER3")) { 							// ER3
			$this->addNodes( new CTePHP_set_352_refCte($param) );
		}
	}
	public function set_353_tomaNaoICMS  () { 
		$this->addNodes( new CTePHP_353_tomaNaoICMS() );
	}
	public function set_354_refCteAnu  ($param) { 
		if ($this->validateRegExp("set_354_refCteAnu",$param,"ER3")) { 							// ER3
			$this->addNodes( new CTePHP_set_354_refCteAnu($param) );
		}
	}
	public function set_355_infCteComp  () { 
		$this->addNodes( new CTePHP_355_infCteComp() );
	}
	public function set_356_chave  ($param) { 	
		if ($this->validateRegExp("set_356_chave",$param,"ER3")) { 								// ER3
			$this->addNodes( new CTePHP_set_356_chave($param) );
		}
	}
	public function set_357_vPresComp  () { 	
		$this->addNodes( new CTePHP_357_vPresComp() );
	}
	public function set_358_vTPrest  ($param) { 	
		if ($this->validateRegExp("set_358_vTPrest",$param,"ER23")) { 							// ER23
			$this->addNodes( new CTePHP_set_358_vTPrest($param) );
		}
	}
	public function set_359_compComp  () { 	
		$this->addNodes( new CTePHP_359_compComp() );
	}
	public function set_360_xNome  ($param) { 	
		if ($this->validateRegExp("set_360_xNome",$param,"ER32")) { 							// ER32
			$this->addNodes( new CTePHP_set_360_xNome($param) );
		}
	}
	public function set_361_vComp  ($param) { 	
		if ($this->validateRegExp("set_361_vComp",$param,"ER23")) { 							// ER23
			$this->addNodes( new CTePHP_set_361_vComp($param) );
		}
	}
	public function set_362_impComp  () { 	
		$this->addNodes( new CTePHP_362_impComp() );
	}
	public function set_363_ICMSComp  () { 	
		$this->addNodes( new CTePHP_363_ICMSComp() );
	}
	public function set_364_ICMS00  () { 	
		$this->addNodes( new CTePHP_364_ICMS00() );
	}
	public function set_365_CST  ($param) { 	
		if ($this->validateDomain("set_365_CST",$param,"D17")) {								// D17
			$this->addNodes( new CTePHP_set_365_CST($param) );
		}
	}
	public function set_366_vBC  ($param) { 	
		if ($this->validateRegExp("set_366_vBC",$param,"ER23")) { 								// ER23
			$this->addNodes( new CTePHP_set_366_vBC($param) );
		}
	}
	public function set_367_pICMS  ($param) { 	
		if ($this->validateRegExp("set_367_pICMS",$param,"ER10")) {								// ER10
			$this->addNodes( new CTePHP_set_367_pICMS($param) );
		}
	}
	public function set_368_vICMS  ($param) { 	
		if ($this->validateRegExp("set_368_vICMS",$param,"ER23")) { 							// ER23
			$this->addNodes( new CTePHP_set_368_vICMS($param) );
		}
	}
	public function set_369_ICMS20  () { 	
		$this->addNodes( new CTePHP_369_ICMS20() );
	}
	public function set_370_CST  ($param) { 	
		if ($this->validateDomain("set_370_CST",$param,"D18")) {								// D18
			$this->addNodes( new CTePHP_set_370_CST($param) );
		}
	}
	public function set_371_pRedBC  ($param) { 	
		if ($this->validateRegExp("set_371_pRedBC",$param,"ER11")) { 							// ER11
			$this->addNodes( new CTePHP_set_371_pRedBC($param) );
		}
	}
	public function set_372_vBC  ($param) { 	
		if ($this->validateRegExp("set_372_vBC",$param,"ER23")) { 								// ER23
			$this->addNodes( new CTePHP_set_372_vBC($param) );
		}
	}
	public function set_373_pICMS  ($param) { 	
		if ($this->validateRegExp("set_373_pICMS",$param,"ER10")) {								// ER10
			$this->addNodes( new CTePHP_set_373_pICMS($param) );
		}
	}
	public function set_374_vICMS  ($param) { 	
		if ($this->validateRegExp("set_374_vICMS",$param,"ER23")) { 							// ER23
			$this->addNodes( new CTePHP_set_374_vICMS($param) );
		}
	}
	public function set_375_ICMS45  () { 	
		$this->addNodes( new CTePHP_375_ICMS45() );
	}
	public function set_376_CST  ($param) { 
		if ($this->validateDomain("set_376_CST",$param,"D19")) {								// D19
			$this->addNodes( new CTePHP_set_376_CST($param) );
		}
	}
	public function set_377_ICMS60  () { 	
		$this->addNodes( new CTePHP_377_ICMS60() );
	}
	public function set_378_CST  ($param) { 	
		if ($this->validateDomain("set_378_CST",$param,"D20")) {								// D20
			$this->addNodes( new CTePHP_set_378_CST($param) );
		}
	}
	public function set_379_vBCSTRet  ($param) { 	
		if ($this->validateRegExp("set_379_vBCSTRet",$param,"ER23")) { 							// ER23
			$this->addNodes( new CTePHP_set_379_vBCSTRet($param) );
		}
	}
	public function set_380_vICMSSTRet  ($param) { 	
		if ($this->validateRegExp("set_380_vICMSSTRet",$param,"ER23")) { 						// ER23
			$this->addNodes( new CTePHP_set_380_vICMSSTRet($param) );
		}
	}
	public function set_381_pICMSSTRet  ($param) { 	
		if ($this->validateRegExp("set_381_pICMSSTRet",$param,"ER10")) {						// ER10
			$this->addNodes( new CTePHP_set_381_pICMSSTRet($param) );
		}
	}
	public function set_382_vCred  ($param) { 	
		if ($this->validateRegExp("set_382_vCred",$param,"ER23")) { 							// ER23
			$this->addNodes( new CTePHP_set_382_vCred($param) );
		}
	}
	public function set_383_ICMS90  () { 	
		$this->addNodes( new CTePHP_383_ICMS90() );
	}
	public function set_384_CST  ($param) { 	
		if ($this->validateDomain("set_384_CST",$param,"D21")) {								// D21
			$this->addNodes( new CTePHP_set_384_CST($param) );
		}
	}
	public function set_385_pRedBC  ($param) { 	
		if ($this->validateRegExp("set_385_pRedBC",$param,"ER11")) { 							// ER11
			$this->addNodes( new CTePHP_set_385_pRedBC($param) );
		}
	}
	public function set_386_vBC  ($param) { 
		if ($this->validateRegExp("set_386_vBC",$param,"ER23")) { 								// ER23
			$this->addNodes( new CTePHP_set_386_vBC($param) );
		}
	}
	public function set_387_pICMS  ($param) { 	
		if ($this->validateRegExp("set_387_pICMS",$param,"ER10")) {								// ER10
			$this->addNodes( new CTePHP_set_387_pICMS($param) );
		}
	}
	public function set_388_vICMS  ($param) { 	
		if ($this->validateRegExp("set_388_vICMS",$param,"ER23")) { 							// ER23
			$this->addNodes( new CTePHP_set_388_vICMS($param) );
		}
	}
	public function set_389_vCred  ($param) { 	
		if ($this->validateRegExp("set_389_vCred",$param,"ER23")) { 							// ER23
			$this->addNodes( new CTePHP_set_389_vCred($param) );
		}
	}
	public function set_390_ICMSOutraUF  () { 	
		$this->addNodes( new CTePHP_390_ICMSOutraUF() );
	}
	public function set_391_CST  ($param) { 	
		if ($this->validateDomain("set_391_CST",$param,"D21")) {								// D21
			$this->addNodes( new CTePHP_set_391_CST($param) );
		}			
	}
	public function set_392_pRedBCOutraUF  ($param) { 	
		if ($this->validateRegExp("set_392_pRedBCOutraUF",$param,"ER11")) { 					// ER11
			$this->addNodes( new CTePHP_set_392_pRedBCOutraUF($param) );
		}
	}
	public function set_393_vBCOutraUF  ($param) { 	
		if ($this->validateRegExp("set_393_vBCOutraUF",$param,"ER23")) { 						// ER23
			$this->addNodes( new CTePHP_set_393_vBCOutraUF($param) );
		}
	}
	public function set_394_pICMSOutraUF  ($param) { 	
		if ($this->validateRegExp("set_394_pICMSOutraUF",$param,"ER10")) {						// ER10
			$this->addNodes( new CTePHP_set_394_pICMSOutraUF($param) );
		}
	}
	public function set_395_vICMSOutraUF  ($param) { 	
		if ($this->validateRegExp("set_395_vICMSOutraUF",$param,"ER23")) { 						// ER23
			$this->addNodes( new CTePHP_set_395_vICMSOutraUF($param) );
		}
	}
	public function set_396_ICMSSN  () { 	
		$this->addNodes( new CTePHP_396_ICMSSN() );
	}
	public function set_397_indSN  ($param) { 	
		if ($this->validateDomain("set_397_indSN",$param,"D22")) {								// D22
			$this->addNodes( new CTePHP_set_397_indSN($param) );
		}
	}
	public function set_398_infAdFisco  ($param) { 	
		if ($this->validateRegExp("set_398_infAdFisco",$param,"ER32")) { 						// ER32
			$this->addNodes( new CTePHP_set_398_infAdFisco($param) );
		}
	}
	public function set_399_infCteAnu  () { 	
		$this->addNodes( new CTePHP_399_infCteAnu() );
	}
	public function set_400_chCte  ($param) { 
		if ($this->validateRegExp("set_400_chCte",$param,"ER3")) { 								// ER3
			$this->addNodes( new CTePHP_set_400_chCte($param) );
		}
	}
	public function set_401_dEmi  ($param) { 
		if ($this->validateRegExp("set_401_dEmi",$param,"ER9")) { 								// ER9
			$this->addNodes( new CTePHP_set_401_dEmi($param) );
		}
	}