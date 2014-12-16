<?php

require_once("CTeRules.php");

class CTePHP_2 extends CTeRules { 
	private $dom;
	private	$fragment;
	
	// 4
	protected $v_4_ide;
	protected $v_5_cUF;
	protected $v_6_cCT;
	protected $v_7_CFOP;
	protected $v_8_natOp;
	protected $v_9_forPag;
	protected $v_10_mod;
	protected $v_11_serie;
	protected $v_12_nCT;
	protected $v_13_dhEmi;
	protected $v_14_tpImp;
	protected $v_15_tpEmis;
	protected $v_16_cDV;
	protected $v_17_tpAmb;
	protected $v_18_tpCTe;
	protected $v_19_procEmi;
	protected $v_20_verProc;
	protected $v_21_refCTE;
	protected $v_22_cMunEnv;
	protected $v_23_xMunEnv;
	protected $v_24_UFEnv;
	protected $v_25_modal;
	protected $v_26_tpServ;
	protected $v_27_cMunIni;
	protected $v_28_xMunIni;
	protected $v_29_UFIni;
	protected $v_30_cMunFim;
	protected $v_31_xMunFim;
	protected $v_32_UFFim;
	protected $v_33_retira;
	protected $v_34_xDetRetira;
	protected $v_35_toma03;
	protected $v_37_toma4;
	protected $v_57_dhCont;
	protected $v_58_xJust;


	// 59
	protected $v_59_compl;
	protected $v_60_xCaracAd;
	protected $v_61_xCaracSer;
	protected $v_62_xEmi;
	protected $v_63_fluxo;
	protected $v_69_Entrega;
	protected $v_88_origCalc;
	protected $v_89_destCalc;
	protected $v_90_xObs;
	protected $v_91_ObsCont;
	protected $v_94_ObsFisco;


	// 97
	protected $v_97_emit;
	protected $v_98_CNPJ; 
	protected $v_99_IE;
	protected $v_100_xNome;
	protected $v_101_xFant;
	protected $v_102_enderEmit;

	
	// 112
	protected $v_112_rem;
	protected $v_113_CNPJ;
	protected $v_114_CPF;
	protected $v_115_IE;
	protected $v_116_xNome;
	protected $v_117_xFant;
	protected $v_118_fone;
	protected $v_119_enderReme;
	protected $v_130_email;
	protected $v_131_infNF;
	protected $v_158_infNFe;
	protected $v_161_infOutros;

	
	// 167
	protected $v_167_exped;
	protected $v_168_CNPJ;
	protected $v_169_CPF;
	protected $v_170_IE;
	protected $v_171_xNome;
	protected $v_172_fone;
	protected $v_173_enderExped;
	protected $v_184_email;

	
	// 185
	protected $v_185_receb;
	protected $v_186_CNP;
	protected $v_187_CPF;
	protected $v_188_IE;
	protected $v_189_xNome;
	protected $v_190_fone;
	protected $v_191_enderReceb;
	protected $v_202_email;

	
	// 203
	protected $v_203_dest;
	protected $v_204_CNP;
	protected $v_205_CPF;
	protected $v_206_IE;
	protected $v_207_xNome;
	protected $v_208_fone;
	protected $v_209_ISUF;
	protected $v_210_enderDest;
	protected $v_221_email;
	protected $v_222_locEnt;


	// 233
	protected $v_233_vPrest;
	protected $v_234_vTPrest;
	protected $v_235_vRec;
	protected $v_236_Comp;

	
	// 239
	protected $v_239_imp;
	protected $v_240_ICMS;
	protected $v_275_infAdFisc;

	
	// 276
	protected $v_276_infCTeNorm;
	protected $v_277_infCarga
	protected $v_285_contQt;
	protected $v_290_docAnt;
	protected $v_306_seg;
	protected $v_312_infModal;
	protected $v_315_peri;
	protected $v_323_veicNovos;
	protected $v_330_cobr;
	protected $v_340_infCteSub;
	
	
	// 355
	protected $v_355_infCteComp;
	protected $v_356_chave;
	protected $v_357_vPresComp;
	protected $v_362_impComp;


	// 399
	protected $v_399_infCteAnu;
	protected $v_400_chCte;
	protected $v_401_dEmi;
	


	function __construct($obj,$skip_validation) {
		$this->skip_validation = $skip_validation;
		$this->dom = $obj;
		$this->fragment = $this->dom->createDocumentFragment();
		$this->setDomain();
		$this->setRegExp();
	}
	
	function __destruct() { }	
	
	
	// 4 --------------------------------------------------------------------------------------------
	public function set_5_cUF  ($param) { 
		if ($this->validateDomain("set_5_cUF",$param,"D2")) {									// D2
			$this->v_5_cUF = $this->dom->createElement("cUF",$param);							// 5
		}
	}
	public function set_6_cCT  ($param) { 
		if ($this->validateRegExp("set_6_cCT",$param," ER33")) { 								// ER33
			$this->v_6_cCT = $this->dom->createElement("cCT",$param);							// 6
		}
	}
	public function set_7_CFOP  ($param) { 
		if ($this->validateRegExp("set_7_CFOP",$param,"ER46")) { 								// ER46
			$this->v_7_CFOP	 = $this->dom->createElement("CFOP",$param);						// 7
		}
	}
	public function set_8_natOp  ($param) { 
		if ($this->validateRegExp("set_8_natOp",$param,"ER32")) { 								// ER32
			$this->v_8_natOp	 = $this->dom->createElement("natOp",$param);					// 8
		}
	}
	public function set_9_forPag  ($param) { 
		if ($this->validateDomain("set_9_forPag",$param,"D7")) {								// D7
			$this->v_9_forPag	 = $this->dom->createElement("forPag",$param);					// 9
		}
	}
	public function set_10_mod  ($param) { 
		if ($this->validateDomain("set_10_mod",$param,"D3")) {									// D3
			$this->v_10_mod	 = $this->dom->createElement("mod",$param);							// 10
		}
	}
	public function set_11_serie  ($param) { 
		if ($this->validateRegExp("set_11_serie",$param,"ER30")) { 								// ER30
			$this->v_11_serie	 = $this->dom->createElement("serie",$param);					// 11
		}
	}
	public function set_12_nCT  ($param) { 
		if ($this->validateRegExp("set_12_nCT",$param,"ER28")) { 								// ER28
			$this->v_12_nCT	 = $this->dom->createElement("nCT",$param);							// 12
		}
	}
	public function set_13_dhEmi  ($param) { 
		if ($this->validateRegExp("set_13_dhEmi",$param,"ER34")) { 								// ER34
			$this->v_13_dhEmi	 = $this->dom->createElement("dhEmi",$param);					// 13
		}
	}
	public function set_14_tpImp  ($param) { 
		if ($this->validateDomain("set_14_tpImp",$param,"D1")) {								// D1
			$this->v_14_tpImp	 = $this->dom->createElement("tpImp",$param);					// 14
		}
	}
	public function set_15_tpEmis  ($param) {
		if ($this->validateDomain("set_15_tpEmis",$param,"D8")) {								// D8
			$this->v_15_tpEmis = $this->dom->createElement("tpEmis",$param);					// 15
		}
	}
	public function set_16_cDV  ($param) { 
		if ($this->validateRegExp("set_16_cDV",$param,"ER35")) { 								// ER35
			$this->v_16_cDV	 = $this->dom->createElement("cDV",$param);							// 16
		}
	}
	public function set_17_tpAmb  ($param) { 
		if ($this->validateDomain("set_17_tpAmb",$param,"D1")) {								// D1
			$this->v_17_tpAmb	 = $this->dom->createElement("tpAmb",$param);					// 17
		}
	}
	public function set_18_tpCTe  ($param) { 
		if ($this->validateDomain("set_18_tpCTe",$param,"D9")) {								// D9
			$this->v_18_tpCTe	 = $this->dom->createElement("tpCTe",$param);					// 18
		}
	}
	public function set_19_procEmi  ($param) { 
		if ($this->validateDomain("set_19_procEmi",$param,"D9")) {								// D9
			$this->v_19_procEmi = $this->dom->createElement("procEmi",$param);					// 19
		}
	}
	public function set_20_verProc  ($param) { 
		if ($this->validateRegExp("set_20_verProc",$param,"ER32")) { 							// ER32
			$this->v_20_verProc = $this->dom->createElement("verProc",$param);					// 20
		}
	}
	public function set_21_refCTE  ($param) { 
		if ($this->validateRegExp("set_21_refCTE",$param,"ER3")) { 								// ER3
			$this->v_21_refCTE = $this->dom->createElement("refCTE",$param);					// 21
		}
	}
	public function set_22_cMunEnv  ($param) { 
		if ($this->validateRegExp("set_22_cMunEnv",$param,"ER2")) { 							// ER2
			$this->v_22_cMunEnv = $this->dom->createElement("cMunEnv",$param);					// 22
		}
	}
	public function set_23_xMunEnv  ($param) { 
		if ($this->validateRegExp("set_23_xMunEnv",$param,"ER32")) { 							// ER32
			$this->v_23_xMunEnv = $this->dom->createElement("xMunEnv",$param);					// 23
		}
	}
	public function set_24_UFEnv  ($param) { 
		if ($this->validateDomain("set_24_UFEnv",$param,"D5")) {								// D5
			$this->v_24_UFEnv	 = $this->dom->createElement("UFEnv",$param);					// 24
		}
	}
	public function set_25_modal  ($param) { 
		if ($this->validateDomain("set_25_modal",$param,"D26")) {								// D26
			$this->v_25_modal	 = $this->dom->createElement("modal",$param);					// 25
		}
	}
	public function set_26_tpServ  ($param) { 
		if ($this->validateDomain("set_26_tpServ",$param,"D9")) {								// D9
			$this->v_26_tpServ = $this->dom->createElement("tpServ",$param);					// 26
		}
	}
	public function set_27_cMunIni  ($param) {
		if ($this->validateRegExp("set_27_cMunIni",$param,"ER2")) { 							// ER2
			$this->v_27_cMunIni = $this->dom->createElement("cMunIni",$param);					// 27
		}
	}
	public function set_28_xMunIni  ($param) { 
		if ($this->validateRegExp("set_28_xMunIni",$param,"ER32")) { 							// ER32
			$this->v_28_xMunIni = $this->dom->createElement("xMunIni",$param);					// 28
		}
	}
	public function set_29_UFIni  ($param) { 
		if ($this->validateDomain("set_29_UFIni",$param,"D5")) {								// D5
			$this->v_29_UFIni	 = $this->dom->createElement("UFIni",$param);					// 29
		}
	}
	public function set_30_cMunFim  ($param) { 
		if ($this->validateRegExp("set_30_cMunFim",$param,"ER2")) { 							// ER2
			$this->v_30_cMunFim = $this->dom->createElement("cMunFim",$param);					// 30
		}
	}
	public function set_31_xMunFim  ($param) { 
		if ($this->validateRegExp("set_31_xMunFim",$param,"ER32")) { 							// ER32
			$this->v_31_xMunFim = $this->dom->createElement("xMunFim",$param);					// 31
		}
	}
	public function set_32_UFFim  ($param) { 
		if ($this->validateDomain("set_32_UFFim",$param,"D5")) {								// D5
			$this->v_32_UFFim	 = $this->dom->createElement("UFFim",$param);					// 32
		}
	}
	public function set_33_retira  ($param) { 
		if ($this->validateDomain("set_33_retira",$param,"D10")) {								// D10
			$this->v_33_retira = $this->dom->createElement("retira",$param);					// 33
		}
	}
	public function set_34_xDetRetira  ($param) {
		if ($this->validateRegExp("set_34_xDetRetira",$param,"ER32")) { 						// ER32
			$this->v_34_xDetRetira = $this->dom->createElement("xDetRetira",$param);			// 34
		}
	}
	public function set_35_toma03  () { 
		$this->v_35_toma03 = $this->dom->createElement("toma03");								// 35 - CONDICIONAL
	}
	public function set_37_toma4  () { 
		$this->v_37_toma4		 = $this->dom->createElement("toma4");							// 37 - CONDICIONAL
	}
	public function set_57_dhCont  ($param) { 
		if ($this->validateRegExp("set_57_dhCont",$param,"ER34")) { 							// ER34
			$this->v_57_dhCont	 = $this->dom->createElement("dhCont",$param);					// 57	
		}
	}
	public function set_58_xJust  ($param) { 
		if ($this->validateRegExp("set_58_xJust",$param,"ER32")) { 								// ER32
			$this->v_58_xJust		 = $this->dom->createElement("xJust",$param);				// 58
		}
	}
	// 4 -----------------------------------------------------------------------------------------------
	
	
	// 59 -----------------------------------------------------------------------------------------------
	public function set_60_xCaracAd  ($param) { 
		if ($this->validateRegExp("set_60_xCaracAd",$param,"ER32")) { 							// ER32
			$this->v_60_xCaracAd = $this->dom->createElement("xCaracAd",$param);				// 60
		}
	}
	public function set_61_xCaracSer  ($param) { 
		if ($this->validateRegExp("set_61_xCaracSer",$param,"ER32")) { 							// ER32
			$this->v_61_xCaracSer = $this->dom->createElement("xCaracSer",$param);				// 61
		}
	}
	public function set_62_xEmi  ($param) { 
		if ($this->validateRegExp("set_62_xEmi",$param,"ER32")) { 								// ER32
			$this->v_62_xEmi	 = $this->dom->createElement("xEmi",$param);					// 62
		}
	}
	public function set_63_fluxo  () { 
		$this->v_63_fluxo	 = $this->dom->createElement("fluxo");								// 63
	}
	public function set_69_Entrega  () { 
		$this->v_69_Entrega = $this->dom->createElement("Entrega");								// 69
	}
	public function set_88_origCalc  ($param) { 
		if ($this->validateRegExp("set_88_origCalc",$param,"ER32")) { 							// ER32
			$this->v_88_origCalc = $this->dom->createElement("origCalc",$param);				// 88
		}
	}
	public function set_89_destCalc  ($param) { 
		if ($this->validateRegExp("set_89_destCalc",$param,"ER32")) { 							// ER32
			$this->v_89_destCalc = $this->dom->createElement("destCalc",$param);				// 89
		}
	}
	public function set_90_xObs  ($param) { 
		if ($this->validateRegExp("set_90_xObs",$param,"ER32")) { 								// ER32
			$this->v_90_xObs	 = $this->dom->createElement("xObs",$param);					// 90
		}
	}
	public function set_91_ObsCont  () { 
		$this->v_91_ObsCont = $this->dom->createElement("ObsCont");								// 91
	}
	public function set_94_ObsFisco  () { 
		$this->v_94_ObsFisco = $this->dom->createElement("ObsFisco");							// 94
	}
	// 59 -----------------------------------------------------------------------------------------------
	
	// 97 -----------------------------------------------------------------------------------------------
	public function set_98_CNPJ  ($param) { 
		if ($this->validateRegExp("set_98_CNPJ",$param,"ER4")) { 								// ER4
			$this->v_98_CNPJ		 = $this->dom->createElement("CNPJ",$param);				// 98
		}
	}
	public function set_99_IE  ($param) { 
		if ($this->validateRegExp("set_99_IE",$param,"ER25")) { 								// ER25
			$this->v_99_IE		 = $this->dom->createElement("IE",$param);						// 99
		}
	}
	public function set_100_xNome  ($param) { 
		if ($this->validateRegExp("set_100_xNome",$param,"ER32")) { 							// ER32
			$this->v_100_xNome	 = $this->dom->createElement("xNome",$param);					// 100
		}
	}
	public function set_101_xFant  ($param) { 
		if ($this->validateRegExp("set_101_xFant",$param,"ER32")) { 							// ER32
			$this->v_101_xFant	 = $this->dom->createElement("xFant",$param);					// 101
		}
	}
	public function set_102_enderEmit  () { 
		$this->v_102_enderEmit = $this->dom->createElement("enderEmit");						// 102
	}
	// 97 -----------------------------------------------------------------------------------------------
	
	// 112 -----------------------------------------------------------------------------------------------
	public function set_113_CNPJ  ($param) { 
		if ($this->validateRegExp("set_113_CNPJ",$param,"ER6")) { 								// ER6
			$this->v_113_CNPJ		 = $this->dom->createElement("CNPJ",$param);				// 113 - CONDICIONAL
		}
	}
	public function set_114_CPF  ($param) { 
		if ($this->validateRegExp("set_114_CPF",$param,"ER7")) { 								// ER7
			$this->v_114_CPF		 = $this->dom->createElement("CPF",$param);					// 114 - CONDICIONAL
		}
	}
	public function set_115_IE  ($param) { 
		if ($this->validateRegExp("set_115_IE",$param,"ER26")) { 								// ER26
			$this->v_115_IE		 = $this->dom->createElement("IE",$param);						// 115
		}
	}
	public function set_116_xNome  ($param) { 
		if ($this->validateRegExp("set_116_xNome",$param,"ER32")) { 							// ER32
			$this->v_116_xNome	 = $this->dom->createElement("xNome",$param);					// 116
		}
	}
	public function set_117_xFant  ($param) { 
		if ($this->validateRegExp("set_117_xFant",$param,"ER32")) { 							// ER32
			$this->v_117_xFant	 = $this->dom->createElement("xFant",$param);					// 117
		}
	}
	public function set_118_fone  ($param) { 
		if ($this->validateRegExp("set_118_fone",$param,"ER36")) { 								// ER36
			$this->v_118_fone		 = $this->dom->createElement("fone",$param);				// 118
		}
	}
	public function set_119_enderReme  () { 
		$this->v_119_enderReme = $this->dom->createElement("enderReme");						// 119
	}
	public function set_130_email  ($param) { 
		if ($this->validateRegExp("set_130_email",$param,"ER47")) { 							// ER47
			$this->v_130_email	 = $this->dom->createElement("email",$param);					// 130
		}
	}
	public function set_131_infNF  () { 
		$this->v_131_infNF	 = $this->dom->createElement("infNF");								// 131 - CONDICIONAL
	}
	public function set_158_infNFe  () { 
		$this->v_158_infNFe	 = $this->dom->createElement("infNFe");								// 158 - CONDICIONAL
	}
	public function set_161_infOutros  () { 
		$this->v_161_infOutros = $this->dom->createElement("infOutros");						// 161 - CONDICIONAL
	}
	// 112 -----------------------------------------------------------------------------------------------
	
	// 167 -----------------------------------------------------------------------------------------------
	public function set_168_CNPJ  ($param) { 
		if ($this->validateRegExp("set_168_CNPJ",$param,"ER6")) { 								// ER6
			$this->v_168_CNPJ		 = $this->dom->createElement("CNPJ",$param);				// 168 - CONDICIONAL
		}
	}
	public function set_169_CPF  ($param) {
		if ($this->validateRegExp("set_169_CPF",$param,"ER7")) { 								// ER7
			$this->v_169_CPF		 = $this->dom->createElement("CPF",$param);					// 169 - CONDICIONAL
		}
	}
	public function set_170_IE  ($param) { 
		if ($this->validateRegExp("set_170_IE",$param,"ER26")) { 								// ER26
			$this->v_170_IE		 = $this->dom->createElement("IE",$param);						// 170
		}
	}
	public function set_171_xNome  ($param) { 
		if ($this->validateRegExp("set_171_xNome",$param,"ER32")) { 							// ER32
			$this->v_171_xNome	 = $this->dom->createElement("xNome",$param);					// 171
		}
	}
	public function set_172_fone  ($param) { 
		if ($this->validateRegExp("set_172_fone",$param,"ER36")) { 								// ER36
			$this->v_172_fone		 = $this->dom->createElement("fone",$param);				// 172
		}
	}
	public function set_173_enderExped  () { 
		$this->v_173_enderExped = $this->dom->createElement("enderExped");						// 173
	}
	public function set_184_email  ($param) { 
		if ($this->validateRegExp("set_184_email",$param,"ER47")) { 							// ER47
			$this->v_184_email = $this->dom->createElement("email",$param);						// 184
		}
	}
	// 167 -----------------------------------------------------------------------------------------------	
	
	
	// 185 -----------------------------------------------------------------------------------------------	
	public function set_186_CNPJ  ($param) { 
		if ($this->validateRegExp("set_186_CNPJ",$param,"ER6")) { 								// ER6
			$this->v_186_CNPJ		 = $this->dom->createElement("CNPJ",$param);				// 186 - CONDICIONAL
		}
	}
	public function set_187_CPF  ($param) { 
		if ($this->validateRegExp("set_187_CPF",$param,"ER7")) { 								// ER7
			$this->v_187_CPF		 = $this->dom->createElement("CPF",$param);					// 187 - CONDICIONAL
		}
	}
	public function set_188_IE  ($param) { 
		if ($this->validateRegExp("set_188_IE",$param,"ER26")) { 								// ER26
			$this->v_188_IE		 = $this->dom->createElement("IE",$param);						// 188
		}
	}
	public function set_189_xNome  ($param) { 
		if ($this->validateRegExp("set_189_xNome",$param,"ER32")) { 							// ER32
			$this->v_189_xNome	 = $this->dom->createElement("xNome",$param);					// 189
		}
	}
	public function set_190_fone  ($param) { 
		if ($this->validateRegExp("set_190_fone",$param,"ER36")) { 								// ER36
			$this->v_190_fone		 = $this->dom->createElement("fone",$param);				// 190
		}
	}
	public function set_191_enderReceb  () { 
		$this->v_191_enderReceb = $this->dom->createElement("enderReceb");						// 191
	}
	public function set_202_email  ($param) { 
		if ($this->validateRegExp("set_202_email",$param,"ER47")) { 							// ER47
			$this->v_202_email 	 = $this->dom->createElement("email",$param);					// 202
		}
	}
	// 185 -----------------------------------------------------------------------------------------------	
	
	
	// 203 -----------------------------------------------------------------------------------------------	
	public function set_204_CNPJ  ($param) { 
		if ($this->validateRegExp("set_204_CNPJ",$param,"ER6")) { 								// ER6
			$this->v_204_CNPJ		 = $this->dom->createElement("CNPJ",$param);				// 204 - CONDICIONAL
		}
	}
	public function set_205_CPF  ($param) {
		if ($this->validateRegExp("set_205_CPF",$param,"ER7")) { 								// ER7
			$this->v_205_CPF		 = $this->dom->createElement("CPF",$param);					// 205 - CONDICIONAL
		}
	}
	public function set_206_IE  ($param) { 
		if ($this->validateRegExp("set_206_IE",$param,"ER26")) { 								// ER26
			$this->v_206_IE		 = $this->dom->createElement("IE",$param);						// 206
		}
	}
	public function set_207_xNome  ($param) { 
		if ($this->validateRegExp("set_207_xNome",$param,"ER32")) { 							// ER32
			$this->v_207_xNome	 = $this->dom->createElement("xNome",$param);					// 207
		}
	}
	public function set_208_fone  ($param) { 
		if ($this->validateRegExp("set_208_fone",$param,"ER36")) { 								// ER36
			$this->v_208_fone		 = $this->dom->createElement("fone",$param);				// 208
		}
	}
	public function set_209_ISUF  ($param) { 
		if ($this->validateRegExp("set_209_ISUF",$param,"ER38")) { 								// ER38
			$this->v_209_ISUF		 = $this->dom->createElement("ISUF",$param);				// 209
		}
	}
	public function set_210_enderDest  () { 
		$this->v_210_enderDest = $this->dom->createElement("enderDest");						// 210
	}
	public function set_221_email  ($param) { 
		if ($this->validateRegExp("set_221_email",$param,"ER47")) { 							// ER47
			$this->v_221_email	 = $this->dom->createElement("email",$param);					// 221
		}
	}
	public function set_222_locEnt  () { 
		$this->v_222_locEnt	 = $this->dom->createElement("locEnt");								// 222
	}
	// 203 -----------------------------------------------------------------------------------------------	
	
	
	// 233 -----------------------------------------------------------------------------------------------	
	public function set_234_vTPrest  ($param) { 
		if ($this->validateRegExp("set_234_vTPrest",$param,"ER23")) { 							// ER23
			$this->v_234_vTPrest = $this->dom->createElement("vTPrest",$param);					// 234
		}
	}
	public function set_235_vRec  ($param) { 
		if ($this->validateRegExp("set_235_vRec",$param,"ER23")) { 								// ER23
			$this->v_235_vRec	 = $this->dom->createElement("vRec",$param);					// 235
		}
	}
	public function set_236_Comp  () { 
		$this->v_236_Comp	 = $this->dom->createElement("Comp");								// 236
	}
	// 233 -----------------------------------------------------------------------------------------------	
	
	
	// 239 -----------------------------------------------------------------------------------------------	
	public function set_240_ICMS  () { 
		$this->v_240_ICMS	 = $this->dom->createElement("ICMS");								// 240
	}
	public function set_275_infAdFisco  ($param) { 
		if ($this->validateRegExp("set_275_infAdFisco",$param,"ER32")) { 						// ER32
			$this->v_275_infAdFisco 	= $this->dom->createElement("infAdFisco",$param);		// 275
		}
	}
	// 239 -----------------------------------------------------------------------------------------------	
	
	
	// 276 -----------------------------------------------------------------------------------------------	
	public function set_277_infCarga  () { 
		$this->v_277_infCarga	 = $this->dom->createElement("infCarga");						// 277
	}
	public function set_285_contQt  () { 
		$this->v_285_contQt	 = $this->dom->createElement("contQt");								// 285
	}
	public function set_290_docAnt  () { 
		$this->v_290_docAnt	 = $this->dom->createElement("docAnt");								// 290
	}
	public function set_306_seg  () { 
		$this->v_306_seg		 = $this->dom->createElement("seg");							// 306
	}
	public function set_312_infModal  () { 
		$this->v_312_infModal	 = $this->dom->createElement("infModal");						// 312
	}
	public function set_315_peri  () { 
		$this->v_315_peri		 = $this->dom->createElement("peri");							// 315
	}
	public function set_323_veicNovos  () { 
		$this->v_323_veicNovos = $this->dom->createElement("veicNovos");						// 323
	}
	public function set_330_cobr  () { 
		$this->v_330_cobr		 = $this->dom->createElement("cobr");							// 330
	}
	public function set_340_infCteSub  () { 
		$this->v_340_infCteSub = $this->dom->createElement("infCteSub");						// 340
	}
	// 276 -----------------------------------------------------------------------------------------------	
	
	
	// 355 -----------------------------------------------------------------------------------------------	
	public function set_356_chave  ($param) { 	
		if ($this->validateRegExp("set_356_chave",$param,"ER3")) { 								// ER3
			$this->v_356_chave	 = $this->dom->createElement("chave",$param);					// 356
		}
	}
	public function set_357_vPresComp  () { 	
		$this->v_357_vPresComp = $this->dom->createElement("vPresComp");						// 357
	}
	public function set_362_impComp  () { 	
		$this->v_362_impComp	 = $this->dom->createElement("impComp");						// 362
	}
	// 355 -----------------------------------------------------------------------------------------------	
	
	
	// 399 -----------------------------------------------------------------------------------------------	
	public function set_400_chCte  ($param) { 
		if ($this->validateRegExp("set_400_chCte",$param,"ER3")) { 								// ER3
			$this->v_400_chCte	 = $this->dom->createElement("chCte",$param);					// 400
		}
	}
	public function set_401_dEmi  ($param) { 
		if ($this->validateRegExp("set_401_dEmi",$param,"ER9")) { 								// ER9
			$this->v_401_dEmi		 = $this->dom->createElement("dEmi",$param);				// 401
		}
	}
	// 399 -----------------------------------------------------------------------------------------------	
	
}

?>