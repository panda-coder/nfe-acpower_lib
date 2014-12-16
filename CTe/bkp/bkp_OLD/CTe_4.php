<?php

require_once("CTeRules.php");

class CTePHP_4 extends CTeRules { 
	private $dom;
	private	$fragment;
	
	// 45
	protected $v_45_enderToma;
	protected $v_46_xLgr;
	protected $v_47_nro;
	protected $v_48_xCpl; 
	protected $v_49_xBairro;
	protected $v_50_cMun;
	protected $v_51_xMun;
	protected $v_52_CEP;
	protected $v_53_UF;
	protected $v_54_cPais;
	protected $v_55_xPais;

	// 65
	protected $v_65_pass;
	protected $v_66_xPass;

	// 70
	protected $v_70_semData;
	protected $v_71_tpPer;

	// 72
	protected $v_72_comData;
	protected $v_73_tpPer;
	protected $v_74_dProg;

	// 75
	protected $v_75_noPeriodo;
	protected $v_76_tpPer;
	protected $v_77_dIni;
	protected $v_78_dFim;

	// 79
	protected $v_79_semHora;
	protected $v_80_tpHor;

	// 81
	protected $v_81_comHora;
	protected $v_82_tpHor;
	protected $v_83_hProg;

	// 147
	protected $v_147_locRet;
	protected $v_148_CNPJ;
	protected $v_149_CPF;
	protected $v_150_xNome;
	protected $v_151_xLgr;
	protected $v_152_Nro;
	protected $v_153_xCpl;
	protected $v_154_xBairro;
	protected $v_155_cMun;
	protected $v_156_xMun;
	protected $v_157_UF; 

	// 241
	protected $v_241_ICMS00;
	protected $v_242_CST;
	protected $v_243_vBC;
	protected $v_244_pICMS; 
	protected $v_245_vICMS;

	// 246
	protected $v_246_ICMS20;
	protected $v_247_CST;
	protected $v_248_pRedBC;
	protected $v_249_vBC;
	protected $v_250_pICMS;
	protected $v_251_vICMS;

	// 252
	protected $v_252_ICMS45;
	protected $v_253_CST;

	// 254
	protected $v_254_ICMS60;
	protected $v_255_CST;
	protected $v_256_vBCSTRet;
	protected $v_257_vICMSSTRet; 
	protected $v_258_pICMSSTRet; 
	protected $v_259_vCred; 

	// 260
	protected $v_260_ICMS90;
	protected $v_261_CST; 
	protected $v_262_pRedBC; 
	protected $v_263_vBC; 
	protected $v_264_pICMS; 
	protected $v_265_vICMS; 
	protected $v_266_vCred; 

	// 267
	protected $v_267_ICMSOutraUF;
	protected $v_268_CST;
	protected $v_269_pRedBCOutraUF;
	protected $v_270_vBCOutraUF; 
	protected $v_271_pICMSOutraUF; 
	protected $v_272_vICMSOutraUF; 

	// 273
	protected $v_273_ICMSSN;
	protected $v_274_indSN;

	// 287
	protected $v_287_lacContQt;
	protected $v_288_nLacre;

	// 291
	protected $v_291_emiDocAnt;
	protected $v_292_CNPJ;
	protected $v_293_CPF; 
	protected $v_294_IE; 
	protected $v_295_UF; 
	protected $v_296_xNome; 
	protected $v_297_idDocAnt; 

	// 331
	protected $v_331_fat;
	protected $v_332_nFat;
	protected $v_333_vOrig; 
	protected $v_334_vDesc; 
	protected $v_335_vLiq; 

	// 336
	protected $v_336_dup;
	protected $v_337_nDup; 
	protected $v_338_dVenc; 
	protected $v_339_vDup;

	// 342
	protected $v_342_tomaICMS;
	protected $v_343_refNFe; 
	protected $v_344_refNF; 
	protected $v_352_refCte;

	// 353
	protected $v_353_tomaNaoICMS;
	protected $v_354_refCteAnu;

	// 359
	protected $v_359_compComp;
	protected $v_360_xNome;
	protected $v_361_vComp;

	// 363
	protected $v_363_ICMSComp;
	protected $v_364_ICMS00;
	protected $v_369_ICMS20;
	protected $v_375_ICMS45;
	protected $v_377_ICMS60;
	protected $v_383_ICMS90;
	protected $v_390_ICMSOutraUF;
	protected $v_396_ICMSSN;



	function __construct($obj,$skip_validation) {
		$this->skip_validation = $skip_validation;
		$this->dom = $obj;
		$this->fragment = $this->dom->createDocumentFragment();
		$this->setDomain();
		$this->setRegExp();
	}
	
	function __destruct() { }	
	
}

?>