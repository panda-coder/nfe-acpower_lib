<?php

require_once("CTeRules.php");

class CTePHP_3 extends CTeRules { 
	private $dom;
	private	$fragment;
	
	// 35
	protected $v_35_toma03;
	protected $v_36_toma;

	// 37
	protected $v_37_toma4;
	protected $v_38_toma;
	protected $v_39_CNPJ;
	protected $v_40_CPF;
	protected $v_41_IE;
	protected $v_42_xNome;
	protected $v_43_xFant;
	protected $v_44_fone;
	protected $v_45_enderToma;
	protected $v_56_email;

	// 63
	protected $v_63_fluxo;
	protected $v_64_xOrig;
	protected $v_65_pass;
	protected $v_67_xDest;
	protected $v_68_xRota;

	// 69
	protected $v_69_Entrega;
	protected $v_70_semData;
	protected $v_72_comData;
	protected $v_75_noPeriodo;
	protected $v_79_semHora;
	protected $v_81_comHora;
	protected $v_84_noInter;

	// 91
	protected $v_91_ObsCont;
	protected $v_92_xCampo;
	protected $v_93_xTexto;

	// 94
	protected $v_94_ObsFisco;
	protected $v_95_xCampo;
	protected $v_96_xTexto;

	// 102
	protected $v_102_enderEmit;
	protected $v_103_xLgr;
	protected $v_104_nro;
	protected $v_105_xCpl;
	protected $v_106_xBairro;
	protected $v_107_cMun;
	protected $v_108_xMun;
	protected $v_109_CEP;
	protected $v_110_UF;
	protected $v_111_fone;

	// 119
	protected $v_119_enderReme;
	protected $v_120_xLgr;
	protected $v_121_nro;
	protected $v_122_xCpl;
	protected $v_123_xBairro;
	protected $v_124_cMun;
	protected $v_125_xMun;
	protected $v_126_CEP;
	protected $v_127_UF;
	protected $v_128_cPais;
	protected $v_129_xPais;

	// 131
	protected $v_131_infNF;
	protected $v_132_nRoma;
	protected $v_133_nPed;
	protected $v_134_mod;
	protected $v_135_serie;
	protected $v_136_nDoc;
	protected $v_137_dEmi;
	protected $v_138_vBC;
	protected $v_139_vICMS;
	protected $v_140_vBCST;
	protected $v_141_vST;
	protected $v_142_vProd;
	protected $v_143_vNF;
	protected $v_144_nCFOP;
	protected $v_145_nPeso;
	protected $v_146_PIN;
	protected $v_147_locRet;

	// 158
	protected $v_158_infNFe;
	protected $v_159_Chave;
	protected $v_160_PIN;

	// 161
	protected $v_161_infOutros;
	protected $v_162_tpDoc;
	protected $v_163_descOutros;
	protected $v_164_nDoc;
	protected $v_165_dEmi;
	protected $v_166_vDocFisc;

	// 173
	protected $v_173_enderExped;
	protected $v_174_xLgr;
	protected $v_175_nro;
	protected $v_176_xCpl;
	protected $v_177_xBairro;
	protected $v_178_cMun;
	protected $v_179_xMun;
	protected $v_180_CEP;
	protected $v_181_UF;
	protected $v_182_cPais;
	protected $v_183_xPais;

	// 191
	protected $v_191_enderReceb;
	protected $v_192_xLgr;
	protected $v_193_nro;
	protected $v_194_xCpl;
	protected $v_195_xBairro;
	protected $v_196_cMun;
	protected $v_197_xMun;
	protected $v_198_CEP;
	protected $v_199_UF;
	protected $v_200_cPais;
	protected $v_201_xPais;

	// 210
	protected $v_210_enderDest;
	protected $v_211_xLgr;
	protected $v_212_nro;
	protected $v_213_xCpl;
	protected $v_214_xBairro;
	protected $v_215_cMun;
	protected $v_216_xMun;
	protected $v_217_CEP;
	protected $v_218_UF;
	protected $v_219_cPais;
	protected $v_220_xPais;

	// 222
	protected $v_222_locEnt;
	protected $v_223_CNPJ;
	protected $v_224_CPF;
	protected $v_225_xNome;
	protected $v_226_xLgr;
	protected $v_227_nro;
	protected $v_228_xCpl;
	protected $v_229_xBairro;
	protected $v_230_cMun;
	protected $v_231_xMun;
	protected $v_232_UF;

	// 236
	protected $v_236_Comp;
	protected $v_237_xNome;
	protected $v_238_vComp;

	// 240
	protected $v_240_ICMS;
	protected $v_241_ICMS00;
	protected $v_246_ICMS20;
	protected $v_252_ICMS45;
	protected $v_254_ICMS60;
	protected $v_260_ICMS90;
	protected $v_267_ICMSOutraUF;
	protected $v_273_ICMSSN;

	// 277
	protected $v_277_infCarga;
	protected $v_278_vCarga;
	protected $v_279_proPred;
	protected $v_280_xOutCat;
	protected $v_281_infQ;

	// 285
	protected $v_285_contQt;
	protected $v_286_nCont;
	protected $v_287_lacContQt;
	protected $v_289_dPrev;

	// 290
	protected $v_290_docAnt;
	protected $v_291_emiDocAnt;

	// 306
	protected $v_306_seg;
	protected $v_307_respSeg;
	protected $v_308_xSeg;
	protected $v_309_nApol;
	protected $v_310_nAver;
	protected $v_311_vCarga;

	// 312
	protected $v_312_infModal;
	protected $v_313_versaoModal;
	protected $v_314_xs;

	// 315
	protected $v_315_peri;
	protected $v_316_nONU;
	protected $v_317_xNomeAE;
	protected $v_318_xClaRisco;
	protected $v_319_grEmb;
	protected $v_320_qTotProd;
	protected $v_321_qVolTipo;
	protected $v_322_pontoFulgor;

	// 323
	protected $v_323_veicNovos;
	protected $v_324_chassi;
	protected $v_325_cCor;
	protected $v_326_xCor;
	protected $v_327_cMod;
	protected $v_328_vUnit;
	protected $v_329_vFrete;

	// 330
	protected $v_330_cobr;
	protected $v_331_fat;
	protected $v_336_dup;

	// 340
	protected $v_340_infCteSub;
	protected $v_341_chCte;
	protected $v_342_tomaICMS;
	protected $v_353_tomaNaoICMS;

	// 357
	protected $v_357_vPresComp;
	protected $v_358_vTPrest;
	protected $v_359_compComp;

	// 362
	protected $v_362_impComp;
	protected $v_363_ICMSComp;
	protected $v_398_infAdFisco;

	

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