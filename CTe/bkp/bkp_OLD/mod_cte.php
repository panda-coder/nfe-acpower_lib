<?php

class CTePHP {
	protected $dom;
	protected $CTe;
	protected $skip_validation;
	protected $arr_regexp = array();
	protected $arr_domain = array();
	protected $arr_erro = array();
	
	protected $v_1_infCte;
	protected $v_2_versao;
	protected $v_3_Id;
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
	protected $v_36_toma;
	protected $v_37_toma4;
	protected $v_38_toma;
	protected $v_39_CNPJ;
	protected $v_40_CPF;
	protected $v_41_IE;
	protected $v_42_xNome;
	protected $v_43_xFant;
	protected $v_44_fone;
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
	protected $v_56_email;
	protected $v_57_dhCont;
	protected $v_58_xJust;
	protected $v_59_compl;
	protected $v_60_xCaracAd;
	protected $v_61_xCaracSer;
	protected $v_62_xEmi;
	protected $v_63_fluxo;
	protected $v_64_xOrig;
	protected $v_65_pass;
	protected $v_66_xPass;
	protected $v_67_xDest;
	protected $v_68_xRota;
	protected $v_69_Entrega;
	protected $v_70_semData;
	protected $v_71_tpPer;
	protected $v_72_comData;
	protected $v_73_tpPer;
	protected $v_74_dProg;
	protected $v_75_noPeriodo;
	protected $v_76_tpPer;
	protected $v_77_dIni;
	protected $v_78_dFim;
	protected $v_79_semHora;
	protected $v_80_tpHor;
	protected $v_81_comHora;
	protected $v_82_tpHor;
	protected $v_83_hProg;
	protected $v_84_noInter;
	protected $v_85_tpHor;
	protected $v_86_hIni;
	protected $v_87_hFim;
	protected $v_88_origCalc;
	protected $v_89_destCalc;
	protected $v_90_xObs;
	protected $v_91_ObsCont;
	protected $v_92_xCampo;
	protected $v_93_xTexto;
	protected $v_94_ObsFisco;
	protected $v_95_xCampo;
	protected $v_96_xTexto;
	protected $v_97_emit;
	protected $v_98_CNPJ;
	protected $v_99_IE;
	protected $v_100_xNome;
	protected $v_101_xFant;
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
	protected $v_112_rem;
	protected $v_113_CNPJ;
	protected $v_114_CPF;
	protected $v_115_IE;
	protected $v_116_xNome;
	protected $v_117_xFant;
	protected $v_118_fone;
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
	protected $v_130_email;
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
	protected $v_158_infNFe;
	protected $v_159_Chave;
	protected $v_160_PIN;
	protected $v_161_infOutros;
	protected $v_162_tpDoc;
	protected $v_163_descOutros;
	protected $v_164_nDoc;
	protected $v_165_dEmi;
	protected $v_166_vDocFisc;
	protected $v_167_exped;
	protected $v_168_CNPJ;
	protected $v_169_CPF;
	protected $v_170_IE;
	protected $v_171_xNome;
	protected $v_172_fone;
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
	protected $v_184_email;
	protected $v_185_receb;
	protected $v_186_CNPJ;
	protected $v_187_CPF;
	protected $v_188_IE;
	protected $v_189_xNome;
	protected $v_190_fone;
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
	protected $v_202_email;
	protected $v_203_dest;
	protected $v_204_CNPJ;
	protected $v_205_CPF;
	protected $v_206_IE;
	protected $v_207_xNome;
	protected $v_208_fone;
	protected $v_209_ISUF;
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
	protected $v_221_email;
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
	protected $v_233_vPrest;
	protected $v_234_vTPrest;
	protected $v_235_vRec;
	protected $v_236_Comp;
	protected $v_237_xNome;
	protected $v_238_vComp;
	protected $v_239_imp;
	protected $v_240_ICMS;
	protected $v_241_ICMS00;
	protected $v_242_CST;
	protected $v_243_vBC;
	protected $v_244_pICMS;
	protected $v_245_vICMS;
	protected $v_246_ICMS20;
	protected $v_247_CST;
	protected $v_248_pRedBC;
	protected $v_249_vBC;
	protected $v_250_pICMS;
	protected $v_251_vICMS;
	protected $v_252_ICMS45;
	protected $v_253_CST;
	protected $v_254_ICMS60;
	protected $v_255_CST;
	protected $v_256_vBCSTRet;
	protected $v_257_vICMSSTRet;
	protected $v_258_pICMSSTRet;
	protected $v_259_vCred;
	protected $v_260_ICMS90;
	protected $v_261_CST;
	protected $v_262_pRedBC;
	protected $v_263_vBC;
	protected $v_264_pICMS;
	protected $v_265_vICMS;
	protected $v_266_vCred;
	protected $v_267_ICMSOutraUF;
	protected $v_268_CST;
	protected $v_269_pRedBCOutraUF;
	protected $v_270_vBCOutraUF;
	protected $v_271_pICMSOutraUF;
	protected $v_272_vICMSOutraUF;
	protected $v_273_ICMSSN;
	protected $v_274_indSN;
	protected $v_275_infAdFisco;
	protected $v_276_infCTeNorm;
	protected $v_277_infCarga;
	protected $v_278_vCarga;
	protected $v_279_proPred;
	protected $v_280_xOutCat;
	protected $v_281_infQ;
	protected $v_282_cUnid;
	protected $v_283_tpMed;
	protected $v_284_qCarga;
	protected $v_285_contQt;
	protected $v_286_nCont;
	protected $v_287_lacContQt;
	protected $v_288_nLacre;
	protected $v_289_dPrev;
	protected $v_290_docAnt;
	protected $v_291_emiDocAnt;
	protected $v_292_CNPJ;
	protected $v_293_CPF;
	protected $v_294_IE;
	protected $v_295_UF;
	protected $v_296_xNome;
	protected $v_297_idDocAnt;
	protected $v_298_idDocAntPap;
	protected $v_299_tpDoc;
	protected $v_300_serie;
	protected $v_301_subser;
	protected $v_302_nDoc;
	protected $v_303_dEmi;
	protected $v_304_idDocAntEle;
	protected $v_305_chave;
	protected $v_306_seg;
	protected $v_307_respSeg;
	protected $v_308_xSeg;
	protected $v_309_nApol;
	protected $v_310_nAver;
	protected $v_311_vCarga;
	protected $v_312_infModal;
	protected $v_313_versaoModal;
	protected $v_314_xs;
	protected $v_315_peri;
	protected $v_316_nONU;
	protected $v_317_xNomeAE;
	protected $v_318_xClaRisco;
	protected $v_319_grEmb;
	protected $v_320_qTotProd;
	protected $v_321_qVolTipo;
	protected $v_322_pontoFulgor;
	protected $v_323_veicNovos;
	protected $v_324_chassi;
	protected $v_325_cCor;
	protected $v_326_xCor;
	protected $v_327_cMod;
	protected $v_328_vUnit;
	protected $v_329_vFrete;
	protected $v_330_cobr;
	protected $v_331_fat;
	protected $v_332_nFat;
	protected $v_333_vOrig;
	protected $v_334_vDesc;
	protected $v_335_vLiq;
	protected $v_336_dup;
	protected $v_337_nDup;
	protected $v_338_dVenc;
	protected $v_339_vDup;
	protected $v_340_infCteSub;
	protected $v_341_chCte;
	protected $v_342_tomaICMS;
	protected $v_343_refNFe;
	protected $v_344_refNF;
	protected $v_345_CNPJ;
	protected $v_346_mod;
	protected $v_347_serie;
	protected $v_348_subserie;
	protected $v_349_nro;
	protected $v_350_valor;
	protected $v_351_dEmi;
	protected $v_352_refCte;
	protected $v_353_tomaNaoICMS;
	protected $v_354_refCteAnu;
	protected $v_355_infCteComp;
	protected $v_356_chave;
	protected $v_357_vPresComp;
	protected $v_358_vTPrest;
	protected $v_359_compComp;
	protected $v_360_xNome;
	protected $v_361_vComp;
	protected $v_362_impComp;
	protected $v_363_ICMSComp;
	protected $v_364_ICMS00;
	protected $v_365_CST;
	protected $v_366_vBC;
	protected $v_367_pICMS;
	protected $v_368_vICMS;
	protected $v_369_ICMS20;
	protected $v_370_CST;
	protected $v_371_pRedBC;
	protected $v_372_vBC;
	protected $v_373_pICMS;
	protected $v_374_vICMS;
	protected $v_375_ICMS45;
	protected $v_376_CST;
	protected $v_377_ICMS60;
	protected $v_378_CST;
	protected $v_379_vBCSTRet;
	protected $v_380_vICMSSTRet;
	protected $v_381_pICMSSTRet;
	protected $v_382_vCred;
	protected $v_383_ICMS90;
	protected $v_384_CST;
	protected $v_385_pRedBC;
	protected $v_386_vBC;
	protected $v_387_pICMS;
	protected $v_388_vICMS;
	protected $v_389_vCred;
	protected $v_390_ICMSOutraUF;
	protected $v_391_CST;
	protected $v_392_pRedBCOutraUF;
	protected $v_393_vBCOutraUF;
	protected $v_394_pICMSOutraUF;
	protected $v_395_vICMSOutraUF;
	protected $v_396_ICMSSN;
	protected $v_397_indSN;
	protected $v_398_infAdFisco;
	protected $v_399_infCteAnu;
	protected $v_400_chCte;
	protected $v_401_dEmi;
	

	function __construct($generator_name=null,$skip_validation=null) {
		$this->skip_validation = $skip_validation;
		$this->dom = new DOMDocument('1.0', 'UTF-8');
		$this->dom->formatOutput = true;
		$this->dom->preserveWhiteSpace = false;

		$this->CTe = $this->dom->createElement("CTe");
		$this->CTe->setAttribute("xmlns", $generator_name);
		$this->dom->appendChild($this->CTe);
		$this->setRegExp();
		$this->setDomain();
	}
	
	protected function setRegExp() {
		$this->arr_regexp["ER1"] = "/[0-9]{2}/";
		$this->arr_regexp["ER2"] = "/[0-9]{7}/";
		$this->arr_regexp["ER3"] = "/[0-9]{44}/";
		$this->arr_regexp["ER4"] = "/[0-9]{14}/";
		$this->arr_regexp["ER5"] = "/[0-9]{3,14}/";
		$this->arr_regexp["ER6"] = "/[0-9]{0}|[0-9]{14}/";
		$this->arr_regexp["ER7"] = "/[0-9]{11}/";
		$this->arr_regexp["ER8"] = "/[0-9]{3,11}/";
		$this->arr_regexp["ER9"] = "/(((20(([02468][048])|([13579][26]))-02-29))|(20[0-9][0-9])-((((0[1-9])|(1[0-2]))-((0[1-9])|(1\d)|(2[0-8])))|((((0[13578])|(1[02]))-31)|(((0[1,3-9])|(1[0-2]))-(29|30)))))/";
		$this->arr_regexp["ER10"] = "/0|0\.[0-9]{2}|[1-9]{1}[0-9]{0,2}(\.[0-9]{2})?/";
		$this->arr_regexp["ER11"] = "/0\.[0-9]{1}[1-9]{1}|0\.[1-9]{1}[0-9]{1}|[1-9]{1}[0-9]{0,2}(\.[0-9]{2})?/";
		$this->arr_regexp["ER12"] = "/0|0\.[0-9]{3}|[1-9]{1}[0-9]{0,7}(\.[0-9]{3})?/";
		$this->arr_regexp["ER13"] = "/0\.[1-9]{1}[0-9]{2}|0\.[0-9]{2}[1-9]{1}|0\.[0-9]{1}[1-9]{1}[0-9]{1}|[1-9]{1}[0-9]{0,7}(\.[0-9]{3})?/";
		$this->arr_regexp["ER14"] = "/0|0\.[0-9]{4}|[1-9]{1}[0-9]{0,7}(\.[0-9]{4})?/";
		$this->arr_regexp["ER15"] = "/0\.[1-9]{1}[0-9]{3}|0\.[0-9]{3}[1-9]{1}|0\.[0-9]{2}[1-9]{1}[0-9]{1}|0\.[0-9]{1}[1-9]{1}[0-9]{2}|[1-9]{1}[0-9]{0,7}(\.[0-9]{4})?/";
		$this->arr_regexp["ER16"] = "/0\.[1-9]{1}[0-9]{5}|0\.[0-9]{1}[1-9]{1}[0-9]{4}|0\.[0-9]{2}[1-9]{1}[0-9]{3}|0\.[0-9]{3}[1-9]{1}[0-9]{2}|0\.[0-9]{4}[1-9]{1}[0-9]{1}|0\.[0-9]{5}[1-9]{1}|[1-9]{1}[0-9]{0,8}(\.[0-9]{6})?/";
		$this->arr_regexp["ER17"] = "/0|0\.[0-9]{4}|[1-9]{1}[0-9]{0,10}(\.[0-9]{4})?/";
		$this->arr_regexp["ER18"] = "/0\.[1-9]{1}[0-9]{3}|0\.[0-9]{3}[1-9]{1}|0\.[0-9]{2}[1-9]{1}[0-9]{1}|0\.[0-9]{1}[1-9]{1}[0-9]{2}|[1-9]{1}[0-9]{0,10}(\.[0-9]{4})?/";
		$this->arr_regexp["ER19"] = "/0|0\.[0-9]{3}|[1-9]{1}[0-9]{0,11}(\.[0-9]{3})?/";
		$this->arr_regexp["ER20"] = "/0\.[1-9]{1}[0-9]{2}|0\.[0-9]{2}[1-9]{1}|0\.[0-9]{1}[1-9]{1}[0-9]{1}|[1-9]{1}[0-9]{0,11}(\.[0-9]{3})?/";
		$this->arr_regexp["ER21"] = "/0|0\.[0-9]{4}|[1-9]{1}[0-9]{0,11}(\.[0-9]{4})?/";
		$this->arr_regexp["ER22"] = "/0\.[1-9]{1}[0-9]{3}|0\.[0-9]{3}[1-9]{1}|0\.[0-9]{2}[1-9]{1}[0-9]{1}|0\.[0-9]{1}[1-9]{1}[0-9]{2}|[1-9]{1}[0-9]{0,11}(\.[0-9]{4})?/";
		$this->arr_regexp["ER23"] = "/0|0\.[0-9]{2}|[1-9]{1}[0-9]{0,12}(\.[0-9]{2})?/";
		$this->arr_regexp["ER24"] = "/0\.[0-9]{1}[1-9]{1}|0\.[1-9]{1}[0-9]{1}|[1-9]{1}[0-9]{0,12}(\.[0-9]{2})?/";
		$this->arr_regexp["ER25"] = "/[0-9]{2,14}/";
		$this->arr_regexp["ER26"] = "/[0-9]{0,14}|ISENTO|PR[0-9]{4,8}/";
		$this->arr_regexp["ER27"] = "/[0-9]{1,4}/";
		$this->arr_regexp["ER28"] = "/[1-9]{1}[0-9]{0,8}/";
		$this->arr_regexp["ER29"] = "/[0-9]{15}/";
		$this->arr_regexp["ER30"] = "/0|[1-9]{1}[0-9]{0,2}/";
		$this->arr_regexp["ER31"] = "/[0-9]{3}/";
		$this->arr_regexp["ER32"] = '/[!-ÿ]{1}["] = "-ÿ]{0,}[!-ÿ]{1}|[!-ÿ]{1}/';
		$this->arr_regexp["ER33"] = "/[0-9]{8}/";
		$this->arr_regexp["ER34"] = "/(((20(([02468][048])|([13579][26]))-02-29))|(20[0-9][0-9])-((((0[1-9])|(1[0-2]))-((0[1-9])|(1\d)|(2[0-8])))|((((0[13578])|(1[02]))-31)|(((0[1,3-9])|(1[0-2]))-(29|30)))))T(20|21|22|23|[0-1]\d):[0-5]\d:[0-5]\d/";
		$this->arr_regexp["ER35"] = "/[0-9]{1}/";
		$this->arr_regexp["ER36"] = "/[0-9]{7,12}/";
		$this->arr_regexp["ER37"] = "/[1-9]{1}[0-9]{1,8}/";
		$this->arr_regexp["ER38"] = "/[0-9]{8,9}/";
		$this->arr_regexp["ER39"] = "/[0-9]{1,20}/";
		$this->arr_regexp["ER40"] = "/1\.(0[4-9]|[1-9][0-9])/";
		$this->arr_regexp["ER41"] = "/[1-9]{1}[0-9]{0,3}|ND/";
		$this->arr_regexp["ER42"] = "/[A-Z0-9]+/";
		$this->arr_regexp["ER43"] = "/[0-9]{1,6}/";
		$this->arr_regexp["ER44"] = "/CTe[0-9]{44}/";
		$this->arr_regexp["ER45"] = "/[0-9]{7,10}/";
		$this->arr_regexp["ER46"] = "/[123567][0-9]([0-9][1-9]|[1-9][0-9])/";
		$this->arr_regexp["ER47"] = "/[^@]+@[^\.]+\..+/";
		$this->arr_regexp["ER48"] = "/[0-9]{1,15}/";
		$this->arr_regexp["ER49"] = "/(([0-1][0-9])|([2][0-3])):([0-5][0-9]):([0-5][0-9])/";
		$this->arr_regexp["ER50"] = "/[A-Z]{3}(([1-9]\d{3})|(0[1-9]\d{2})|(00[1-9]\d)|(000[1-9]))/";
		$this->arr_regexp["ER51"] = "/[0-9]{12}/";
		$this->arr_regexp["ER52"] = "/[1-9]{1}[0-9]{0,5}/";
		$this->arr_regexp["ER53"] = "/0|[1-9]{1}[0-9]{0,5}/";
		$this->arr_regexp["ER54"] = "/[0-9]{9}/";
		$this->arr_regexp["ER55"] = "/M/";
		$this->arr_regexp["ER56"] = "/[1-9]{1}[0-9]{0,9}/";
	}
	
	
	protected function setDomain() {
		$this->arr_domain["D1"] = array(1, 2);
		$this->arr_domain["D2"] = array(11, 12, 13, 14, 15, 16, 17, 21, 22, 23, 24, 25, 26, 27, 28, 29, 31, 32, 33, 35, 41, 42, 43, 50, 51,52, 53);
		$this->arr_domain["D3"] = array(57);
		$this->arr_domain["D4"] = array("01", "04");
		$this->arr_domain["D5"] = array("AC", "AL", "AM", "AP", "BA", "CE", "DF", "ES", "GO", "MA", "MG", "MS", "MT", "PA", "PB", "PE", "PI", "PR", "RJ", "RN", "RO", "RR", "RS", "SC", "SE", "SP", "TO", "EX");
		$this->arr_domain["D6"] = array("AC", "AL", "AM", "AP", "BA", "CE", "DF", "ES", "GO", "MA", "MG", "MS", "MT", "PA", "PB", "PE", "PI", "PR", "RJ", "RN", "RO", "RR", "RS", "SC", "SE", "SP", "TO");
		$this->arr_domain["D7"] = array(0, 1, 2);
		$this->arr_domain["D8"] = array(1, 5, 7, 8);
		$this->arr_domain["D9"] = array(0, 1, 2, 3);
		$this->arr_domain["D10"] = array(0, 1);
		$this->arr_domain["D11"] = array(4);
		$this->arr_domain["D12"] = array(0);
		$this->arr_domain["D13"] = array(1, 2, 3);
		$this->arr_domain["D14"] = array("00", "10", "99");
		$this->arr_domain["D15"] = array("00", "01", "02", "03", "04", "05");
		$this->arr_domain["D16"] = array(0, 1, 2, 3, 4, 5);
		$this->arr_domain["D17"] = array("00");
		$this->arr_domain["D18"] = array(20);
		$this->arr_domain["D19"] = array(40, 41, 51);
		$this->arr_domain["D20"] = array(60);
		$this->arr_domain["D21"] = array(90);
		$this->arr_domain["D22"] = array(1);
		$this->arr_domain["D23"] = array(101, 102, 103, 104, 105, 106, 107, 108, 201, 302, 303, 304, 305, 401, 402, 403, 404, 405, 406, 407, 408, 409, 410, 
		411, 412, 413, 414, 415, 416, 417, 418, 419, 420, 421, 422, 423, 501, 502, 503, 504, 505, 506, 507, 508, 509, 601, 602, 603, 604, 605, 701, 
		702, 703, 704, 705, 706, 707, 708, 709, 710, 711, 712, 713, 716, 717, 718, 719, 720, 721, 722, 801, 802, 901, 902, 903, 1001, 1002, 1003, 1004, 
		1005, 1006, 1007, 1008, 1009, 1010, 1101, 1102, 1103, 1104, 1201, 1202, 1203, 1204, 1205, 1206, 1207, 1208, 1209, 1210, 1211, 1212, 1213, 1214, 
		1215, 1216, 1217, 1302, 1303, 1304, 1305, 1401, 1402, 1403, 1404, 1405, 1406, 1407, 1408, 1409, 1410, 1411, 1412, 1413, 1501, 1502, 1503, 1504, 
		1505, 1506, 1507, 1508, 1509, 1510, 1511, 1512, 1513, 1514, 1515, 1516, 1517, 1518, 1601, 1701, 1702, 1703, 1704, 1705, 1706, 1708, 1709, 1710, 
		1711, 1712, 1713, 1714, 1715, 1716, 1717, 1718, 1719, 1720, 1721, 1722, 1723, 1724, 1801, 1901, 2001, 2002, 2003, 2101, 2201, 2301, 2401, 2501, 
		2502, 2503, 2504, 2601, 2701, 2801, 2901, 3001, 3101, 3201, 3301, 3401, 3501, 3601, 3701, 3801, 3901, 4001);
		$this->arr_domain["D24"] = array("00", "01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12", "99");
		$this->arr_domain["D25"] = array("01", "1B", "02", "2D", "2E", "04", "06", "07", "08", "8B", "09", "10", "11", "13", "14", "15", "16", "17", "18", "20", "21", "22", "23", "24", "25", "26", "27", "28", "55");
		$this->arr_domain["D26"] = array("01", "02", "03", "04", "05");
		$this->arr_domain["D27"] = array("P", "T");
		$this->arr_domain["D28"] = array("00", "01", "02", "03", "04", "05", "06");
		$this->arr_domain["D29"] = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 99);
		$this->arr_domain["D30"] = array("N", "S", "L", "O");
	}
	
	protected function validateNotNull($log=null,$param=null) {
		if (empty($param)) {
			$this->arr_erro[$log] = "Input: NULL - Required value";
			return false;
		} else {
			return true;
		}
	}
	
	protected function validateRegExp($log=null,$param=null,$regexp=null) {
		$regexp = trim($regexp);
		if ($this->validateNotNull($log,$param)) {
			if (!empty($this->arr_regexp[$regexp])) {
				if (preg_match($this->arr_regexp[$regexp],$param)||!empty($this->skip_validation)) {
					return true;
				} else {
					$this->arr_erro[$log] = "Input: ".$param." - RegExp: ".$regexp;
					return false;
				}
			}
		}
		return false;
	}
	
	protected function validateDomain($log=null,$param=null,$domain=null) {
		$domain = trim($domain);
		if ($this->validateNotNull($log,$param)) {
			if (!empty($this->arr_domain[$domain])) {
				if (in_array($param, $this->arr_domain[$domain])||!empty($this->skip_validation)) {
					return true;
				} else {
					$this->arr_erro[$log] = "Input: ".$param." - Domain: ".$domain;
					return false;
				}
			}
		}
		return false;
	}
	
	private function createXMLElements() {
		$this->CTe->appendChild($this->v_1_infCte);
		$this->v_1_infCte->appendChild($this->v_4_ide);
		$this->v_4_ide->appendChild($this->v_5_cUF);
		$this->v_4_ide->appendChild($this->v_6_cCT);
		$this->v_4_ide->appendChild($this->v_7_CFOP);
		$this->v_4_ide->appendChild($this->v_8_natOp);
		$this->v_4_ide->appendChild($this->v_9_forPag);
		$this->v_4_ide->appendChild($this->v_10_mod);
		$this->v_4_ide->appendChild($this->v_11_serie);
		$this->v_4_ide->appendChild($this->v_12_nCT);
		$this->v_4_ide->appendChild($this->v_13_dhEmi);
		$this->v_4_ide->appendChild($this->v_14_tpImp);
		$this->v_4_ide->appendChild($this->v_15_tpEmis);
		$this->v_4_ide->appendChild($this->v_16_cDV);
		$this->v_4_ide->appendChild($this->v_17_tpAmb);
		$this->v_4_ide->appendChild($this->v_18_tpCTe);
		$this->v_4_ide->appendChild($this->v_19_procEmi);
		$this->v_4_ide->appendChild($this->v_20_verProc);
		$this->v_4_ide->appendChild($this->v_21_refCTE);
		$this->v_4_ide->appendChild($this->v_22_cMunEnv);
		$this->v_4_ide->appendChild($this->v_23_xMunEnv);
		$this->v_4_ide->appendChild($this->v_24_UFEnv);
		$this->v_4_ide->appendChild($this->v_25_modal);
		$this->v_4_ide->appendChild($this->v_26_tpServ);
		$this->v_4_ide->appendChild($this->v_27_cMunIni);
		$this->v_4_ide->appendChild($this->v_28_xMunIni);
		$this->v_4_ide->appendChild($this->v_29_UFIni);
		$this->v_4_ide->appendChild($this->v_30_cMunFim);
		$this->v_4_ide->appendChild($this->v_31_xMunFim);
		$this->v_4_ide->appendChild($this->v_32_UFFim);
		$this->v_4_ide->appendChild($this->v_33_retira);
		$this->v_4_ide->appendChild($this->v_34_xDetRetira);
		$this->v_4_ide->appendChild($this->v_35_toma03);
		$this->v_35_toma03->appendChild($this->v_36_toma);
		$this->v_4_ide->appendChild($this->v_37_toma4);
		$this->v_37_toma4->appendChild($this->v_38_toma);
		$this->v_37_toma4->appendChild($this->v_39_CNPJ);
		$this->v_37_toma4->appendChild($this->v_40_CPF);
		$this->v_37_toma4->appendChild($this->v_41_IE);
		$this->v_37_toma4->appendChild($this->v_42_xNome);
		$this->v_37_toma4->appendChild($this->v_43_xFant);
		$this->v_37_toma4->appendChild($this->v_44_fone);
		$this->v_37_toma4->appendChild($this->v_45_enderToma);
		$this->v_45_enderToma->appendChild($this->v_46_xLgr);
		$this->v_45_enderToma->appendChild($this->v_47_nro);
		$this->v_45_enderToma->appendChild($this->v_48_xCpl);
		$this->v_45_enderToma->appendChild($this->v_49_xBairro);
		$this->v_45_enderToma->appendChild($this->v_50_cMun);
		$this->v_45_enderToma->appendChild($this->v_51_xMun);
		$this->v_45_enderToma->appendChild($this->v_52_CEP);
		$this->v_45_enderToma->appendChild($this->v_53_UF);
		$this->v_45_enderToma->appendChild($this->v_54_cPais);
		$this->v_45_enderToma->appendChild($this->v_55_xPais);
		$this->v_37_toma4->appendChild($this->v_56_email);
		$this->v_4_ide->appendChild($this->v_57_dhCont);
		$this->v_4_ide->appendChild($this->v_58_xJust);
		$this->v_1_infCte->appendChild($this->v_59_compl);
		$this->v_59_compl->appendChild($this->v_60_xCaracAd);
		$this->v_59_compl->appendChild($this->v_61_xCaracSer);
		$this->v_59_compl->appendChild($this->v_62_xEmi);
		$this->v_59_compl->appendChild($this->v_63_fluxo);
		$this->v_63_fluxo->appendChild($this->v_64_xOrig);
		$this->v_63_fluxo->appendChild($this->v_65_pass);
		$this->v_65_pass->appendChild($this->v_66_xPass);
		$this->v_63_fluxo->appendChild($this->v_67_xDest);
		$this->v_63_fluxo->appendChild($this->v_68_xRota);
		$this->v_59_compl->appendChild($this->v_69_Entrega);
		$this->v_69_Entrega->appendChild($this->v_70_semData);
		$this->v_70_semData->appendChild($this->v_71_tpPer);
		$this->v_69_Entrega->appendChild($this->v_72_comData);
		$this->v_72_comData->appendChild($this->v_73_tpPer);
		$this->v_72_comData->appendChild($this->v_74_dProg);
		$this->v_69_Entrega->appendChild($this->v_75_noPeriodo);
		$this->v_75_noPeriodo->appendChild($this->v_76_tpPer);
		$this->v_75_noPeriodo->appendChild($this->v_77_dIni);
		$this->v_75_noPeriodo->appendChild($this->v_78_dFim);
		$this->v_69_Entrega->appendChild($this->v_79_semHora);
		$this->v_79_semHora->appendChild($this->v_80_tpHor);
		$this->v_69_Entrega->appendChild($this->v_81_comHora);
		$this->v_81_comHora->appendChild($this->v_82_tpHor);
		$this->v_81_comHora->appendChild($this->v_83_hProg);
		$this->v_69_Entrega->appendChild($this->v_84_noInter);
		$this->v_84_noInter->appendChild($this->v_85_tpHor);
		$this->v_84_noInter->appendChild($this->v_86_hIni);
		$this->v_84_noInter->appendChild($this->v_87_hFim);
		$this->v_59_compl->appendChild($this->v_88_origCalc);
		$this->v_59_compl->appendChild($this->v_89_destCalc);
		$this->v_59_compl->appendChild($this->v_90_xObs);
		$this->v_59_compl->appendChild($this->v_91_ObsCont);
		$this->v_91_ObsCont->appendChild($this->v_93_xTexto);
		$this->v_59_compl->appendChild($this->v_94_ObsFisco);
		$this->v_94_ObsFisco->appendChild($this->v_96_xTexto);
		$this->v_1_infCte->appendChild($this->v_97_emit);
		$this->v_97_emit->appendChild($this->v_98_CNPJ);
		$this->v_97_emit->appendChild($this->v_99_IE);
		$this->v_97_emit->appendChild($this->v_100_xNome);
		$this->v_97_emit->appendChild($this->v_101_xFant);
		$this->v_97_emit->appendChild($this->v_102_enderEmit);
		$this->v_102_enderEmit->appendChild($this->v_103_xLgr);
		$this->v_102_enderEmit->appendChild($this->v_104_nro);
		$this->v_102_enderEmit->appendChild($this->v_105_xCpl);
		$this->v_102_enderEmit->appendChild($this->v_106_xBairro);
		$this->v_102_enderEmit->appendChild($this->v_107_cMun);
		$this->v_102_enderEmit->appendChild($this->v_108_xMun);
		$this->v_102_enderEmit->appendChild($this->v_109_CEP);
		$this->v_102_enderEmit->appendChild($this->v_110_UF);
		$this->v_102_enderEmit->appendChild($this->v_111_fone);
		$this->v_1_infCte->appendChild($this->v_112_rem);
		$this->v_112_rem->appendChild($this->v_113_CNPJ);
		$this->v_112_rem->appendChild($this->v_114_CPF);
		$this->v_112_rem->appendChild($this->v_115_IE);
		$this->v_112_rem->appendChild($this->v_116_xNome);
		$this->v_112_rem->appendChild($this->v_117_xFant);
		$this->v_112_rem->appendChild($this->v_118_fone);
		$this->v_112_rem->appendChild($this->v_119_enderReme);
		$this->v_119_enderReme->appendChild($this->v_120_xLgr);
		$this->v_119_enderReme->appendChild($this->v_121_nro);
		$this->v_119_enderReme->appendChild($this->v_122_xCpl);
		$this->v_119_enderReme->appendChild($this->v_123_xBairro);
		$this->v_119_enderReme->appendChild($this->v_124_cMun);
		$this->v_119_enderReme->appendChild($this->v_125_xMun);
		$this->v_119_enderReme->appendChild($this->v_126_CEP);
		$this->v_119_enderReme->appendChild($this->v_127_UF);
		$this->v_119_enderReme->appendChild($this->v_128_cPais);
		$this->v_119_enderReme->appendChild($this->v_129_xPais);
		$this->v_112_rem->appendChild($this->v_130_email);
		$this->v_112_rem->appendChild($this->v_131_infNF);
		$this->v_131_infNF->appendChild($this->v_132_nRoma);
		$this->v_131_infNF->appendChild($this->v_133_nPed);
		$this->v_131_infNF->appendChild($this->v_134_mod);
		$this->v_131_infNF->appendChild($this->v_135_serie);
		$this->v_131_infNF->appendChild($this->v_136_nDoc);
		$this->v_131_infNF->appendChild($this->v_137_dEmi);
		$this->v_131_infNF->appendChild($this->v_138_vBC);
		$this->v_131_infNF->appendChild($this->v_139_vICMS);
		$this->v_131_infNF->appendChild($this->v_140_vBCST);
		$this->v_131_infNF->appendChild($this->v_141_vST);
		$this->v_131_infNF->appendChild($this->v_142_vProd);
		$this->v_131_infNF->appendChild($this->v_143_vNF);
		$this->v_131_infNF->appendChild($this->v_144_nCFOP);
		$this->v_131_infNF->appendChild($this->v_145_nPeso);
		$this->v_131_infNF->appendChild($this->v_146_PIN);
		$this->v_131_infNF->appendChild($this->v_147_locRet);
		$this->v_147_locRet->appendChild($this->v_148_CNPJ);
		$this->v_147_locRet->appendChild($this->v_149_CPF);
		$this->v_147_locRet->appendChild($this->v_150_xNome);
		$this->v_147_locRet->appendChild($this->v_151_xLgr);
		$this->v_147_locRet->appendChild($this->v_152_Nro);
		$this->v_147_locRet->appendChild($this->v_153_xCpl);
		$this->v_147_locRet->appendChild($this->v_154_xBairro);
		$this->v_147_locRet->appendChild($this->v_155_cMun);
		$this->v_147_locRet->appendChild($this->v_156_xMun);
		$this->v_147_locRet->appendChild($this->v_157_UF);
		$this->v_112_rem->appendChild($this->v_158_infNFe);
		$this->v_158_infNFe->appendChild($this->v_159_Chave);
		$this->v_158_infNFe->appendChild($this->v_160_PIN);
		$this->v_112_rem->appendChild($this->v_161_infOutros);
		$this->v_161_infOutros->appendChild($this->v_162_tpDoc);
		$this->v_161_infOutros->appendChild($this->v_163_descOutros);
		$this->v_161_infOutros->appendChild($this->v_164_nDoc);
		$this->v_161_infOutros->appendChild($this->v_165_dEmi);
		$this->v_161_infOutros->appendChild($this->v_166_vDocFisc);
		$this->v_1_infCte->appendChild($this->v_167_exped);
		$this->v_167_exped->appendChild($this->v_168_CNPJ);
		$this->v_167_exped->appendChild($this->v_169_CPF);
		$this->v_167_exped->appendChild($this->v_170_IE);
		$this->v_167_exped->appendChild($this->v_171_xNome);
		$this->v_167_exped->appendChild($this->v_172_fone);
		$this->v_167_exped->appendChild($this->v_173_enderExped);
		$this->v_173_enderExped->appendChild($this->v_174_xLgr);
		$this->v_173_enderExped->appendChild($this->v_175_nro);
		$this->v_173_enderExped->appendChild($this->v_176_xCpl);
		$this->v_173_enderExped->appendChild($this->v_177_xBairro);
		$this->v_173_enderExped->appendChild($this->v_178_cMun);
		$this->v_173_enderExped->appendChild($this->v_179_xMun);
		$this->v_173_enderExped->appendChild($this->v_180_CEP);
		$this->v_173_enderExped->appendChild($this->v_181_UF);
		$this->v_173_enderExped->appendChild($this->v_182_cPais);
		$this->v_173_enderExped->appendChild($this->v_183_xPais);
		$this->v_167_exped->appendChild($this->v_184_email);
		$this->v_1_infCte->appendChild($this->v_185_receb);
		$this->v_185_receb->appendChild($this->v_186_CNPJ);
		$this->v_185_receb->appendChild($this->v_187_CPF);
		$this->v_185_receb->appendChild($this->v_188_IE);
		$this->v_185_receb->appendChild($this->v_189_xNome);
		$this->v_185_receb->appendChild($this->v_190_fone);
		$this->v_185_receb->appendChild($this->v_191_enderReceb);
		$this->v_191_enderReceb->appendChild($this->v_192_xLgr);
		$this->v_191_enderReceb->appendChild($this->v_193_nro);
		$this->v_191_enderReceb->appendChild($this->v_194_xCpl);
		$this->v_191_enderReceb->appendChild($this->v_195_xBairro);
		$this->v_191_enderReceb->appendChild($this->v_196_cMun);
		$this->v_191_enderReceb->appendChild($this->v_197_xMun);
		$this->v_191_enderReceb->appendChild($this->v_198_CEP);
		$this->v_191_enderReceb->appendChild($this->v_199_UF);
		$this->v_191_enderReceb->appendChild($this->v_200_cPais);
		$this->v_191_enderReceb->appendChild($this->v_201_xPais);
		$this->v_185_receb->appendChild($this->v_202_email);
		$this->v_1_infCte->appendChild($this->v_203_dest);
		$this->v_203_dest->appendChild($this->v_204_CNPJ);
		$this->v_203_dest->appendChild($this->v_205_CPF);
		$this->v_203_dest->appendChild($this->v_206_IE);
		$this->v_203_dest->appendChild($this->v_207_xNome);
		$this->v_203_dest->appendChild($this->v_208_fone);
		$this->v_203_dest->appendChild($this->v_209_ISUF);
		$this->v_203_dest->appendChild($this->v_210_enderDest);
		$this->v_210_enderDest->appendChild($this->v_211_xLgr);
		$this->v_210_enderDest->appendChild($this->v_212_nro);
		$this->v_210_enderDest->appendChild($this->v_213_xCpl);
		$this->v_210_enderDest->appendChild($this->v_214_xBairro);
		$this->v_210_enderDest->appendChild($this->v_215_cMun);
		$this->v_210_enderDest->appendChild($this->v_216_xMun);
		$this->v_210_enderDest->appendChild($this->v_217_CEP);
		$this->v_210_enderDest->appendChild($this->v_218_UF);
		$this->v_210_enderDest->appendChild($this->v_219_cPais);
		$this->v_210_enderDest->appendChild($this->v_220_xPais);
		$this->v_203_dest->appendChild($this->v_221_email);
		$this->v_203_dest->appendChild($this->v_222_locEnt);
		$this->v_222_locEnt->appendChild($this->v_223_CNPJ);
		$this->v_222_locEnt->appendChild($this->v_224_CPF);
		$this->v_222_locEnt->appendChild($this->v_225_xNome);
		$this->v_222_locEnt->appendChild($this->v_226_xLgr);
		$this->v_222_locEnt->appendChild($this->v_227_nro);
		$this->v_222_locEnt->appendChild($this->v_228_xCpl);
		$this->v_222_locEnt->appendChild($this->v_229_xBairro);
		$this->v_222_locEnt->appendChild($this->v_230_cMun);
		$this->v_222_locEnt->appendChild($this->v_231_xMun);
		$this->v_222_locEnt->appendChild($this->v_232_UF);
		$this->v_1_infCte->appendChild($this->v_233_vPrest);
		$this->v_233_vPrest->appendChild($this->v_234_vTPrest);
		$this->v_233_vPrest->appendChild($this->v_235_vRec);
		$this->v_233_vPrest->appendChild($this->v_236_Comp);
		$this->v_236_Comp->appendChild($this->v_237_xNome);
		$this->v_236_Comp->appendChild($this->v_238_vComp);
		$this->v_1_infCte->appendChild($this->v_239_imp);
		$this->v_239_imp->appendChild($this->v_240_ICMS);
		$this->v_240_ICMS->appendChild($this->v_241_ICMS00);
		$this->v_241_ICMS00->appendChild($this->v_242_CST);
		$this->v_241_ICMS00->appendChild($this->v_243_vBC);
		$this->v_241_ICMS00->appendChild($this->v_244_pICMS);
		$this->v_241_ICMS00->appendChild($this->v_245_vICMS);
		$this->v_240_ICMS->appendChild($this->v_246_ICMS20);
		$this->v_246_ICMS20->appendChild($this->v_247_CST);
		$this->v_246_ICMS20->appendChild($this->v_248_pRedBC);
		$this->v_246_ICMS20->appendChild($this->v_249_vBC);
		$this->v_246_ICMS20->appendChild($this->v_250_pICMS);
		$this->v_246_ICMS20->appendChild($this->v_251_vICMS);
		$this->v_240_ICMS->appendChild($this->v_252_ICMS45);
		$this->v_252_ICMS45->appendChild($this->v_253_CST);
		$this->v_240_ICMS->appendChild($this->v_254_ICMS60);
		$this->v_254_ICMS60->appendChild($this->v_255_CST);
		$this->v_254_ICMS60->appendChild($this->v_256_vBCSTRet);
		$this->v_254_ICMS60->appendChild($this->v_257_vICMSSTRet);
		$this->v_254_ICMS60->appendChild($this->v_258_pICMSSTRet);
		$this->v_254_ICMS60->appendChild($this->v_259_vCred);
		$this->v_240_ICMS->appendChild($this->v_260_ICMS90);
		$this->v_260_ICMS90->appendChild($this->v_261_CST);
		$this->v_260_ICMS90->appendChild($this->v_262_pRedBC);
		$this->v_260_ICMS90->appendChild($this->v_263_vBC);
		$this->v_260_ICMS90->appendChild($this->v_264_pICMS);
		$this->v_260_ICMS90->appendChild($this->v_265_vICMS);
		$this->v_260_ICMS90->appendChild($this->v_266_vCred);
		$this->v_240_ICMS->appendChild($this->v_267_ICMSOutraUF);
		$this->v_267_ICMSOutraUF->appendChild($this->v_268_CST);
		$this->v_267_ICMSOutraUF->appendChild($this->v_269_pRedBCOutraUF);
		$this->v_267_ICMSOutraUF->appendChild($this->v_270_vBCOutraUF);
		$this->v_267_ICMSOutraUF->appendChild($this->v_271_pICMSOutraUF);
		$this->v_267_ICMSOutraUF->appendChild($this->v_272_vICMSOutraUF);
		$this->v_240_ICMS->appendChild($this->v_273_ICMSSN);
		$this->v_273_ICMSSN->appendChild($this->v_274_indSN);
		$this->v_239_imp->appendChild($this->v_275_infAdFisco );
		$this->v_1_infCte->appendChild($this->v_276_infCTeNorm);
		$this->v_276_infCTeNorm->appendChild($this->v_277_infCarga);
		$this->v_277_infCarga->appendChild($this->v_278_vCarga);
		$this->v_277_infCarga->appendChild($this->v_279_proPred);
		$this->v_277_infCarga->appendChild($this->v_280_xOutCat);
		$this->v_277_infCarga->appendChild($this->v_281_infQ);
		$this->v_281_infQ->appendChild($this->v_282_cUnid);
		$this->v_281_infQ->appendChild($this->v_283_tpMed);
		$this->v_281_infQ->appendChild($this->v_284_qCarga);
		$this->v_276_infCTeNorm->appendChild($this->v_285_contQt);
		$this->v_285_contQt->appendChild($this->v_286_nCont);
		$this->v_285_contQt->appendChild($this->v_287_lacContQt);
		$this->v_287_lacContQt->appendChild($this->v_288_nLacre);
		$this->v_285_contQt->appendChild($this->v_289_dPrev);
		$this->v_276_infCTeNorm->appendChild($this->v_290_docAnt);
		$this->v_290_docAnt->appendChild($this->v_291_emiDocAnt);
		$this->v_291_emiDocAnt->appendChild($this->v_292_CNPJ);
		$this->v_291_emiDocAnt->appendChild($this->v_293_CPF);
		$this->v_291_emiDocAnt->appendChild($this->v_294_IE);
		$this->v_291_emiDocAnt->appendChild($this->v_295_UF);
		$this->v_291_emiDocAnt->appendChild($this->v_296_xNome);
		$this->v_291_emiDocAnt->appendChild($this->v_297_idDocAnt);
		$this->v_297_idDocAnt->appendChild($this->v_298_idDocAntPap);
		$this->v_298_idDocAntPap->appendChild($this->v_299_tpDoc);
		$this->v_298_idDocAntPap->appendChild($this->v_300_serie);
		$this->v_298_idDocAntPap->appendChild($this->v_301_subser);
		$this->v_298_idDocAntPap->appendChild($this->v_302_nDoc);
		$this->v_298_idDocAntPap->appendChild($this->v_303_dEmi);
		$this->v_297_idDocAnt->appendChild($this->v_304_idDocAntEle);
		$this->v_304_idDocAntEle->appendChild($this->v_305_chave);
		$this->v_276_infCTeNorm->appendChild($this->v_306_seg);
		$this->v_306_seg->appendChild($this->v_307_respSeg);
		$this->v_306_seg->appendChild($this->v_308_xSeg);
		$this->v_306_seg->appendChild($this->v_309_nApol);
		$this->v_306_seg->appendChild($this->v_310_nAver);
		$this->v_306_seg->appendChild($this->v_311_vCarga);
		$this->v_276_infCTeNorm->appendChild($this->v_312_infModal);
		$this->v_276_infCTeNorm->appendChild($this->v_315_peri);
		$this->v_315_peri->appendChild($this->v_316_nONU);
		$this->v_315_peri->appendChild($this->v_317_xNomeAE);
		$this->v_315_peri->appendChild($this->v_318_xClaRisco);
		$this->v_315_peri->appendChild($this->v_319_grEmb);
		$this->v_315_peri->appendChild($this->v_320_qTotProd);
		$this->v_315_peri->appendChild($this->v_321_qVolTipo);
		$this->v_315_peri->appendChild($this->v_322_pontoFulgor);
		$this->v_276_infCTeNorm->appendChild($this->v_323_veicNovos);
		$this->v_323_veicNovos->appendChild($this->v_324_chassi);
		$this->v_323_veicNovos->appendChild($this->v_325_cCor);
		$this->v_323_veicNovos->appendChild($this->v_326_xCor);
		$this->v_323_veicNovos->appendChild($this->v_327_cMod);
		$this->v_323_veicNovos->appendChild($this->v_328_vUnit);
		$this->v_323_veicNovos->appendChild($this->v_329_vFrete);
		$this->v_276_infCTeNorm->appendChild($this->v_330_cobr);
		$this->v_330_cobr->appendChild($this->v_331_fat);
		$this->v_331_fat->appendChild($this->v_332_nFat);
		$this->v_331_fat->appendChild($this->v_333_vOrig);
		$this->v_331_fat->appendChild($this->v_334_vDesc);
		$this->v_331_fat->appendChild($this->v_335_vLiq);
		$this->v_330_cobr->appendChild($this->v_336_dup);
		$this->v_336_dup->appendChild($this->v_337_nDup);
		$this->v_336_dup->appendChild($this->v_338_dVenc);
		$this->v_336_dup->appendChild($this->v_339_vDup);
		$this->v_276_infCTeNorm->appendChild($this->v_340_infCteSub);
		$this->v_340_infCteSub->appendChild($this->v_341_chCte);
		$this->v_340_infCteSub->appendChild($this->v_342_tomaICMS);
		$this->v_342_tomaICMS->appendChild($this->v_343_refNFe);
		$this->v_342_tomaICMS->appendChild($this->v_344_refNF);
		$this->v_344_refNF->appendChild($this->v_345_CNPJ);
		$this->v_344_refNF->appendChild($this->v_346_mod);
		$this->v_344_refNF->appendChild($this->v_347_serie);
		$this->v_344_refNF->appendChild($this->v_348_subserie);
		$this->v_344_refNF->appendChild($this->v_349_nro);
		$this->v_344_refNF->appendChild($this->v_350_valor);
		$this->v_344_refNF->appendChild($this->v_351_dEmi);
		$this->v_342_tomaICMS->appendChild($this->v_352_refCte);
		$this->v_340_infCteSub->appendChild($this->v_353_tomaNaoICMS);
		$this->v_353_tomaNaoICMS->appendChild($this->v_354_refCteAnu);
		$this->v_1_infCte->appendChild($this->v_355_infCteComp);
		$this->v_355_infCteComp->appendChild($this->v_356_chave);
		$this->v_355_infCteComp->appendChild($this->v_357_vPresComp);
		$this->v_357_vPresComp->appendChild($this->v_358_vTPrest);
		$this->v_357_vPresComp->appendChild($this->v_359_compComp);
		$this->v_359_compComp->appendChild($this->v_360_xNome);
		$this->v_359_compComp->appendChild($this->v_361_vComp);
		$this->v_355_infCteComp->appendChild($this->v_362_impComp);
		$this->v_362_impComp->appendChild($this->v_363_ICMSComp);
		$this->v_363_ICMSComp->appendChild($this->v_364_ICMS00);
		$this->v_364_ICMS00->appendChild($this->v_365_CST);
		$this->v_364_ICMS00->appendChild($this->v_366_vBC);
		$this->v_364_ICMS00->appendChild($this->v_367_pICMS);
		$this->v_364_ICMS00->appendChild($this->v_368_vICMS);
		$this->v_363_ICMSComp->appendChild($this->v_369_ICMS20);
		$this->v_369_ICMS20->appendChild($this->v_370_CST);
		$this->v_369_ICMS20->appendChild($this->v_371_pRedBC);
		$this->v_369_ICMS20->appendChild($this->v_372_vBC);
		$this->v_369_ICMS20->appendChild($this->v_373_pICMS);
		$this->v_369_ICMS20->appendChild($this->v_374_vICMS);
		$this->v_363_ICMSComp->appendChild($this->v_375_ICMS45);
		$this->v_375_ICMS45->appendChild($this->v_376_CST);
		$this->v_363_ICMSComp->appendChild($this->v_377_ICMS60);
		$this->v_377_ICMS60->appendChild($this->v_378_CST);
		$this->v_377_ICMS60->appendChild($this->v_379_vBCSTRet);
		$this->v_377_ICMS60->appendChild($this->v_380_vICMSSTRet);
		$this->v_377_ICMS60->appendChild($this->v_381_pICMSSTRet);
		$this->v_377_ICMS60->appendChild($this->v_382_vCred);
		$this->v_363_ICMSComp->appendChild($this->v_383_ICMS90);
		$this->v_383_ICMS90->appendChild($this->v_384_CST);
		$this->v_383_ICMS90->appendChild($this->v_385_pRedBC);
		$this->v_383_ICMS90->appendChild($this->v_386_vBC);
		$this->v_383_ICMS90->appendChild($this->v_387_pICMS);
		$this->v_383_ICMS90->appendChild($this->v_388_vICMS);
		$this->v_383_ICMS90->appendChild($this->v_389_vCred);
		$this->v_363_ICMSComp->appendChild($this->v_390_ICMSOutraUF);
		$this->v_390_ICMSOutraUF->appendChild($this->v_391_CST);
		$this->v_390_ICMSOutraUF->appendChild($this->v_392_pRedBCOutraUF);
		$this->v_390_ICMSOutraUF->appendChild($this->v_393_vBCOutraUF);
		$this->v_390_ICMSOutraUF->appendChild($this->v_394_pICMSOutraUF);
		$this->v_390_ICMSOutraUF->appendChild($this->v_395_vICMSOutraUF);
		$this->v_363_ICMSComp->appendChild($this->v_396_ICMSSN);
		$this->v_396_ICMSSN->appendChild($this->v_397_indSN);
		$this->v_362_impComp->appendChild($this->v_398_infAdFisco);
		$this->v_1_infCte->appendChild($this->v_399_infCteAnu);
		$this->v_399_infCteAnu->appendChild($this->v_400_chCte);
		$this->v_399_infCteAnu->appendChild($this->v_401_dEmi);
	}

	public function saveXMLFile($file_name) {
		if (count($this->arr_erro)>0) {
			echo "<b>Erro ao salvar ".strtoupper($file_name)."</b><br>";
			echo "<pre>";
			print_r($this->arr_erro);
			echo "</pre>";
		} else {
			$this->createXMLElements();
			$this->dom->saveXML();
			$this->dom->save($file_name);
			//header("location: $file_name");
		}
	}
	public function set_1_infCte  () { 
		$this->v_1_infCte = $this->dom->createElement("infCte");								// 1
	}
	public function set_2_versao  ($param) { 
		if ($this->validateRegExp("set_2_versao",$param,"ER40")) { 								// ER40
			$this->v_1_infCte->setAttribute("versao",$param);									// 2 - ATRIBUTO
			$this->v_2_versao = $param;
		}
	}
	public function set_3_Id  ($param) { 
		if ($this->validateRegExp("set_3_Id",$param,"ER44")) { 									// ER44
			$this->v_1_infCte->setAttribute("Id",$param);										// 3 - ATRIBUTO
			$this->v_3_Id = $param;
		}
	}
	public function set_4_ide  () { 
		$this->v_4_ide = $this->dom->createElement("ide");										// 4
	}
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
	public function set_36_toma  ($param) { 
		if ($this->validateDomain("set_36_toma",$param,"D9")) {									// D9
			$this->v_36_toma = $this->dom->createElement("toma",$param);						// 36
		}
	}
	public function set_37_toma4  () { 
		$this->v_37_toma4		 = $this->dom->createElement("toma4");							// 37 - CONDICIONAL
	}
	public function set_38_toma  ($param) { 
		if ($this->validateDomain("set_38_toma",$param,"D11")) {								// D11
			$this->v_38_toma	 = $this->dom->createElement("toma",$param);					// 38
		}
	}
	public function set_39_CNPJ  ($param) { 
		if ($this->validateRegExp("set_39_CNPJ",$param,"ER6")) { 								// ER6
			$this->v_39_CNPJ	 = $this->dom->createElement("CNPJ",$param);					// 39 - CONDICIONAL
		}
	}
	public function set_40_CPF  ($param) { 
		if ($this->validateRegExp("set_40_CPF",$param,"ER7")) { 								// ER7
			$this->v_40_CPF	 = $this->dom->createElement("CPF",$param);							// 40 - CONDICIONAL
		}
	}
	public function set_41_IE  ($param) { 
		if ($this->validateRegExp("set_41_IE",$param,"ER26")) { 								// ER26
			$this->v_41_IE	 = $this->dom->createElement("IE",$param);							// 41
		}
	}
	public function set_42_xNome  ($param) { 
		if ($this->validateRegExp("set_42_xNome",$param,"ER32")) { 								// ER32
			$this->v_42_xNome	 = $this->dom->createElement("xNome",$param);					// 42
		}
	}
	public function set_43_xFant  ($param) { 
		if ($this->validateRegExp("set_43_xFant",$param,"ER32")) { 								// ER32
			$this->v_43_xFant	 = $this->dom->createElement("xFant",$param);					// 43
		}
	}
	public function set_44_fone  ($param) { 
		if ($this->validateRegExp("set_44_fone",$param,"ER36")) { 								// ER36
			$this->v_44_fone	 = $this->dom->createElement("fone",$param);					// 44
		}
	}
	public function set_45_enderToma  () { 
		$this->v_45_enderToma = $this->dom->createElement("enderToma");							// 45
	}
	public function set_46_xLgr  ($param) { 
		if ($this->validateRegExp("set_46_xLgr",$param,"ER32")) { 								// ER32
			$this->v_46_xLgr	 = $this->dom->createElement("xLgr",$param);					// 46
		}
	}
	public function set_47_nro  ($param) { 
		if ($this->validateRegExp("set_47_nro",$param,"ER32")) { 								// ER32
			$this->v_47_nro	 = $this->dom->createElement("nro",$param);							// 47
		}
	}
	public function set_48_xCpl  ($param) { 
		if ($this->validateRegExp("set_48_xCpl",$param,"ER32")) { 								// ER32
			$this->v_48_xCpl	 = $this->dom->createElement("xCpl",$param);					// 48
		}
	}
	public function set_49_xBairro  ($param) { 
		if ($this->validateRegExp("set_49_xBairro",$param,"ER32")) { 							// ER32
			$this->v_49_xBairro = $this->dom->createElement("xBairro",$param);					// 49
		}
	}
	public function set_50_cMun  ($param) { 
		if ($this->validateRegExp("set_50_cMun",$param,"ER2")) { 								// ER2
			$this->v_50_cMun	 = $this->dom->createElement("cMun",$param);					// 50
		}
	}
	public function set_51_xMun  ($param) { 
		if ($this->validateRegExp("set_51_xMun",$param,"ER32")) { 								// ER32
			$this->v_51_xMun	 = $this->dom->createElement("xMun",$param);					// 51
		}
	}
	public function set_52_CEP  ($param) { 
		if ($this->validateRegExp("set_52_CEP",$param," ER33")) { 								// ER33
			$this->v_52_CEP	 = $this->dom->createElement("CEP",$param);							// 52
		}
	}
	public function set_53_UF  ($param) { 
		if ($this->validateDomain("set_53_UF",$param,"D5")) {									// D5
			$this->v_53_UF	 = $this->dom->createElement("UF",$param);							// 53
		}
	}
	public function set_54_cPais  ($param) { 
		if ($this->validateRegExp("set_54_cPais",$param,"ER27")) { 								// ER27
			$this->v_54_cPais	 = $this->dom->createElement("cPais",$param);					// 54
		}
	}
	public function set_55_xPais  ($param) { 
		if ($this->validateRegExp("set_55_xPais",$param,"ER32")) { 								// ER32
			$this->v_55_xPais	 = $this->dom->createElement("xPais",$param);					// 55
		}
	}
	public function set_56_email  ($param) { 
		if ($this->validateRegExp("set_56_email",$param,"ER47")) { 								// ER47
			$this->v_56_email	 = $this->dom->createElement("email",$param);					// 56
		}
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
	public function set_59_compl  () { 
		$this->v_59_compl	 = $this->dom->createElement("compl");								// 59
	}
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
	public function set_64_xOrig  ($param) { 
		if ($this->validateRegExp("set_64_xOrig",$param,"ER32")) { 								// ER32
			$this->v_64_xOrig	 = $this->dom->createElement("xOrig",$param);					// 64
		}
	}
	public function set_65_pass  () { 
		$this->v_65_pass	 = $this->dom->createElement("pass");								// 65
	}
	public function set_66_xPass  ($param) { 
		if ($this->validateRegExp("set_66_xPass",$param,"ER32")) { 								// ER32
			$this->v_66_xPass	 = $this->dom->createElement("xPass",$param);					// 66
		}
	}
	public function set_67_xDest  ($param) { 
		if ($this->validateRegExp("set_67_xDest",$param,"ER32")) { 								// ER32
			$this->v_67_xDest	 = $this->dom->createElement("xDest",$param);					// 67
		}
	}
	public function set_68_xRota  ($param) {
		if ($this->validateRegExp("set_68_xRota",$param,"ER32")) { 								// ER32
			$this->v_68_xRota	 = $this->dom->createElement("xRota",$param);					// 68
		}
	}
	public function set_69_Entrega  () { 
		$this->v_69_Entrega = $this->dom->createElement("Entrega");								// 69
	}
	public function set_70_semData  () { 
		$this->v_70_semData = $this->dom->createElement("semData");								// 70 - CONDICIONAL
	}
	public function set_71_tpPer  ($param) { 
		if ($this->validateDomain("set_71_tpPer",$param,"D12")) {								// D12
			$this->v_71_tpPer	 = $this->dom->createElement("tpPer",$param);					// 71
		}
	}
	public function set_72_comData  () { 
		$this->v_72_comData = $this->dom->createElement("comData");								// 72 - CONDICIONAL
	}
	public function set_73_tpPer  ($param) { 
		if ($this->validateDomain("set_73_tpPer",$param,"D13")) {								// D13
			$this->v_73_tpPer	 = $this->dom->createElement("tpPer",$param);					// 73
		}
	}
	public function set_74_dProg  ($param) { 
		if ($this->validateRegExp("set_74_dProg",$param,"ER9")) { 								// ER9
			$this->v_74_dProg	 = $this->dom->createElement("dProg",$param);					// 74
		}
	}
	public function set_75_noPeriodo  () { 
		$this->v_75_noPeriodo = $this->dom->createElement("noPeriodo");							// 75 - CONDICIONAL
	}
	public function set_76_tpPer  ($param) { 
		if ($this->validateDomain("set_76_tpPer",$param,"D11")) {								// D11
			$this->v_76_tpPer	 = $this->dom->createElement("tpPer",$param);					// 76
		}
	}
	public function set_77_dIni  ($param) { 
		if ($this->validateRegExp("set_77_dIni",$param,"ER9")) { 								// ER9
			$this->v_77_dIni	 = $this->dom->createElement("dIni",$param);					// 77
		}
	}
	public function set_78_dFim  ($param) { 
		if ($this->validateRegExp("set_78_dFim",$param,"ER9")) { 								// ER9
			$this->v_78_dFim	 = $this->dom->createElement("dFim",$param);					// 78
		}
	}
	public function set_79_semHora  () { 
		$this->v_79_semHora = $this->dom->createElement("semHora");								// 79 - CONDICIONAL
	}
	public function set_80_tpHor  ($param) { 
		if ($this->validateDomain("set_80_tpHor",$param,"D12")) {								// D12
			$this->v_80_tpHor	 = $this->dom->createElement("tpHor",$param);					// 80
		}
	}
	public function set_81_comHora  () { 
		$this->v_81_comHora = $this->dom->createElement("comHora");								// 81 - CONDICIONAL
	}
	public function set_82_tpHor  ($param) { 
		if ($this->validateDomain("set_82_tpHor",$param,"D13")) {								// D13
			$this->v_82_tpHor	 = $this->dom->createElement("tpHor",$param);					// 82
		}
	}
	public function set_83_hProg  ($param) { 
		if ($this->validateRegExp("set_83_hProg",$param,"ER49")) { 								// ER49
			$this->v_83_hProg	 = $this->dom->createElement("hProg",$param);					// 83
		}
	}
	public function set_84_noInter  () { 
		$this->v_84_noInter = $this->dom->createElement("noInter");								// 84 - CONDICIONAL
	}
	public function set_85_tpHor  ($param) { 
		if ($this->validateDomain("set_85_tpHor",$param,"D11")) {								// D11
			$this->v_85_tpHor	 = $this->dom->createElement("tpHor",$param);					// 85
		}
	}
	public function set_86_hIni  ($param) { 
		if ($this->validateRegExp("set_86_hIni",$param,"ER49")) { 								// ER49
			$this->v_86_hIni	 = $this->dom->createElement("hIni",$param);					// 86
		}
	}
	public function set_87_hFim  ($param) { 
		if ($this->validateRegExp("set_87_hFim",$param,"ER49")) { 								// ER49
			$this->v_87_hFim	 = $this->dom->createElement("hFim",$param);					// 87
		}
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
	public function set_92_xCampo  ($param) { 
		if ($this->validateRegExp("set_92_xCampo",$param,"ER32")) { 							// ER32
			$this->v_91_ObsCont->setAttribute("xCampo",$param);									// 92 - ATRIBUTO
			$this->v_92_xCampo = $param;
		}
	}
	public function set_93_xTexto  ($param) { 
		if ($this->validateRegExp("set_93_xTexto",$param,"ER32")) { 							// ER32
			$this->v_93_xTexto	 = $this->dom->createElement("xTexto",$param);					// 93
		}
	}
	public function set_94_ObsFisco  () { 
		$this->v_94_ObsFisco = $this->dom->createElement("ObsFisco");							// 94
	}
	public function set_95_xCampo  ($param) { 
		if ($this->validateRegExp("set_95_xCampo",$param,"ER32")) { 							// ER32
			$this->v_94_ObsFisco->setAttribute("xCampo",$param);								// 95 - ATRIBUTO
			$this->v_95_xCampo = $param;
		}
	}
	public function set_96_xTexto  ($param) { 
		if ($this->validateRegExp("set_96_xTexto",$param,"ER32")) { 							// ER32
			$this->v_96_xTexto	 = $this->dom->createElement("xTexto",$param);					// 96
		}
	}
	public function set_97_emit  () { 
		$this->v_97_emit	 = $this->dom->createElement("emit");								// 97
	}
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
	public function set_103_xLgr  ($param) { 
		if ($this->validateRegExp("set_103_xLgr",$param,"ER32")) { 								// ER32
			$this->v_103_xLgr	 = $this->dom->createElement("xLgr",$param);					// 103
		}
	}
	public function set_104_nro  ($param) { 
		if ($this->validateRegExp("set_104_nro",$param,"ER32")) { 								// ER32
			$this->v_104_nro	 = $this->dom->createElement("nro",$param);						// 104
		}
	}
	public function set_105_xCpl  ($param) { 
		if ($this->validateRegExp("set_105_xCpl",$param,"ER32")) { 								// ER32
			$this->v_105_xCpl	 = $this->dom->createElement("xCpl",$param);					// 105
		}
	}
	public function set_106_xBairro  ($param) { 
		if ($this->validateRegExp("set_106_xBairro",$param,"ER32")) { 							// ER32
			$this->v_106_xBairro = $this->dom->createElement("xBairro",$param);					// 106
		}
	}
	public function set_107_cMun  ($param) { 
		if ($this->validateRegExp("set_107_cMun",$param,"ER2")) { 								// ER2
			$this->v_107_cMun	 = $this->dom->createElement("cMun",$param);					// 107
		}
	}
	public function set_108_xMun  ($param) { 
		if ($this->validateRegExp("set_108_xMun",$param,"ER32")) { 								// ER32
			$this->v_108_xMun	 = $this->dom->createElement("xMun",$param);					// 108
		}
	}
	public function set_109_CEP  ($param) { 
		if ($this->validateRegExp("set_109_CEP",$param," ER33")) { 								// ER33
			$this->v_109_CEP	 = $this->dom->createElement("CEP",$param);						// 109
		}
	}
	public function set_110_UF  ($param) { 
		if ($this->validateDomain("set_110_UF",$param,"D6")) {									// D6
			$this->v_110_UF	 = $this->dom->createElement("UF",$param);							// 110
		}
	}
	public function set_111_fone  ($param) { 
		if ($this->validateRegExp("set_111_fone",$param,"ER36")) { 								// ER36
			$this->v_111_fone	 = $this->dom->createElement("fone",$param);					// 111
		}
	}
	public function set_112_rem  () { 
		$this->v_112_rem	 = $this->dom->createElement("rem");								// 112
	}
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
	public function set_120_xLgr  ($param) { 
		if ($this->validateRegExp("set_120_xLgr",$param,"ER32")) { 								// ER32
			$this->v_120_xLgr	 = $this->dom->createElement("xLgr",$param);					// 120
		}
	}
	public function set_121_nro  ($param) { 
		if ($this->validateRegExp("set_121_nro",$param,"ER32")) { 								// ER32
			$this->v_121_nro	 = $this->dom->createElement("nro",$param);						// 121
		}
	}
	public function set_122_xCpl  ($param) { 
		if ($this->validateRegExp("set_122_xCpl",$param,"ER32")) { 								// ER32
			$this->v_122_xCpl	 = $this->dom->createElement("xCpl",$param);					// 122
		}
	}
	public function set_123_xBairro  ($param) { 
		if ($this->validateRegExp("set_123_xBairro",$param,"ER32")) { 							// ER32
			$this->v_123_xBairro = $this->dom->createElement("xBairro",$param);					// 123
		}
	}
	public function set_124_cMun  ($param) { 
		if ($this->validateRegExp("set_124_cMun",$param,"ER2")) { 								// ER2
			$this->v_124_cMun	 = $this->dom->createElement("cMun",$param);					// 124
		}
	}
	public function set_125_xMun  ($param) { 
		if ($this->validateRegExp("set_125_xMun",$param,"ER32")) { 								// ER32
			$this->v_125_xMun	 = $this->dom->createElement("xMun",$param);					// 125
		}
	}
	public function set_126_CEP  ($param) { 
		if ($this->validateRegExp("set_126_CEP",$param," ER33")) { 								// ER33
			$this->v_126_CEP	 = $this->dom->createElement("CEP",$param);						// 126
		}
	}
	public function set_127_UF  ($param) { 
		if ($this->validateDomain("set_127_UF",$param,"D5")) {									// D5
			$this->v_127_UF	 = $this->dom->createElement("UF",$param);							// 127
		}
	}
	public function set_128_cPais  ($param) { 
		if ($this->validateRegExp("set_128_cPais",$param,"ER27")) { 							// ER27
			$this->v_128_cPais = $this->dom->createElement("cPais",$param);						// 128
		}
	}
	public function set_129_xPais  ($param) { 
		if ($this->validateRegExp("set_129_xPais",$param,"ER32")) { 							// ER32
			$this->v_129_xPais = $this->dom->createElement("xPais",$param);						// 129
		}
	}
	public function set_130_email  ($param) { 
		if ($this->validateRegExp("set_130_email",$param,"ER47")) { 							// ER47
			$this->v_130_email	 = $this->dom->createElement("email",$param);					// 130
		}
	}
	public function set_131_infNF  () { 
		$this->v_131_infNF	 = $this->dom->createElement("infNF");								// 131 - CONDICIONAL
	}
	public function set_132_nRoma  ($param) { 
		if ($this->validateRegExp("set_132_nRoma",$param,"ER32")) { 							// ER32
			$this->v_132_nRoma = $this->dom->createElement("nRoma",$param);						// 132
		}
	}
	public function set_133_nPed  ($param) { 
		if ($this->validateRegExp("set_133_nPed",$param,"ER32")) { 								// ER32
			$this->v_133_nPed	 = $this->dom->createElement("nPed",$param);					// 133
		}
	}
	public function set_134_mod  ($param) { 
		if ($this->validateDomain("set_134_mod",$param,"D4")) {									// D4
			$this->v_134_mod	 = $this->dom->createElement("mod",$param);						// 134
		}
	}
	public function set_135_serie  ($param) { 
		if ($this->validateRegExp("set_135_serie",$param,"ER32")) { 							// ER32
			$this->v_135_serie = $this->dom->createElement("serie",$param);						// 135
		}
	}
	public function set_136_nDoc  ($param) { 
		if ($this->validateRegExp("set_136_nDoc",$param,"ER32")) { 								// ER32
			$this->v_136_nDoc	 = $this->dom->createElement("nDoc",$param);					// 136
		}
	}
	public function set_137_dEmi  ($param) { 
		if ($this->validateRegExp("set_137_dEmi",$param,"ER9")) { 								// ER9
			$this->v_137_dEmi	 = $this->dom->createElement("dEmi",$param);					// 137
		}
	}
	public function set_138_vBC  ($param) { 
		if ($this->validateRegExp("set_138_vBC",$param,"ER23")) { 								// ER23
			$this->v_138_vBC	 = $this->dom->createElement("vBC",$param);						// 138
		}
	}
	public function set_139_vICMS  ($param) { 
		if ($this->validateRegExp("set_139_vICMS",$param,"ER23")) { 							// ER23
			$this->v_139_vICMS = $this->dom->createElement("vICMS",$param);						// 139
		}
	}
	public function set_140_vBCST  ($param) { 
		if ($this->validateRegExp("set_140_vBCST",$param,"ER23")) { 							// ER23
			$this->v_140_vBCST = $this->dom->createElement("vBCST",$param);						// 140
		}
	}
	public function set_141_vST  ($param) { 
		if ($this->validateRegExp("set_141_vST",$param,"ER23")) { 								// ER23
			$this->v_141_vST	 = $this->dom->createElement("vST",$param);						// 141
		}
	}
	public function set_142_vProd  ($param) { 
		if ($this->validateRegExp("set_142_vProd",$param,"ER23")) { 							// ER23
			$this->v_142_vProd = $this->dom->createElement("vProd",$param);						// 142
		}
	}
	public function set_143_vNF  ($param) { 
		if ($this->validateRegExp("set_143_vNF",$param,"ER23")) { 								// ER23
			$this->v_143_vNF	 = $this->dom->createElement("vNF",$param);						// 143
		}
	}
	public function set_144_nCFOP  ($param) { 
		if ($this->validateRegExp("set_144_nCFOP",$param,"ER46")) { 							// ER46
			$this->v_144_nCFOP = $this->dom->createElement("nCFOP",$param);						// 144
		}
	}
	public function set_145_nPeso  ($param) { 
		if ($this->validateRegExp("set_145_nPeso",$param,"ER20")) { 							// ER20
			$this->v_145_nPeso = $this->dom->createElement("nPeso",$param);						// 145
		}
	}
	public function set_146_PIN  ($param) { 
		if ($this->validateRegExp("set_146_PIN",$param,"ER37")) { 								// ER37
			$this->v_146_PIN	 = $this->dom->createElement("PIN",$param);						// 146
		}
	}
	public function set_147_locRet  () { 
		$this->v_147_locRet = $this->dom->createElement("locRet");								// 147
	}
	public function set_148_CNPJ  ($param) { 
		if ($this->validateRegExp("set_148_CNPJ",$param,"ER4")) { 								// ER4
			$this->v_148_CNPJ	 = $this->dom->createElement("CNPJ",$param);					// 148 - CONDICIONAL
		}
	}
	public function set_149_CPF  ($param) { 
		if ($this->validateRegExp("set_149_CPF",$param,"ER7")) { 								// ER7
			$this->v_149_CPF	 = $this->dom->createElement("CPF",$param);						// 149 - CONDICIONAL
		}
	}
	public function set_150_xNome  ($param) { 
		if ($this->validateRegExp("set_150_xNome",$param,"ER32")) { 							// ER32
			$this->v_150_xNome = $this->dom->createElement("xNome",$param);						// 150
		}
	}
	public function set_151_xLgr  ($param) { 
		if ($this->validateRegExp("set_151_xLgr",$param,"ER32")) { 								// ER32
			$this->v_151_xLgr	 = $this->dom->createElement("xLgr",$param);					// 151
		}
	}
	public function set_152_Nro  ($param) { 
		if ($this->validateRegExp("set_152_Nro",$param,"ER32")) { 								// ER32
			$this->v_152_Nro	 = $this->dom->createElement("Nro",$param);						// 152
		}
	}
	public function set_153_xCpl  ($param) { 
		if ($this->validateRegExp("set_153_xCpl",$param,"ER32")) { 								// ER32
			$this->v_153_xCpl	 = $this->dom->createElement("xCpl",$param);					// 153
		}
	}
	public function set_154_xBairro  ($param) { 
		if ($this->validateRegExp("set_154_xBairro",$param,"ER32")) { 							// ER32
			$this->v_154_xBairro = $this->dom->createElement("xBairro",$param);					// 154
		}
	}
	public function set_155_cMun  ($param) { 
		if ($this->validateRegExp("set_155_cMun",$param,"ER2")) { 								// ER2
			$this->v_155_cMun	 = $this->dom->createElement("cMun",$param);					// 155
		}
	}
	public function set_156_xMun  ($param) { 
		if ($this->validateRegExp("set_156_xMun",$param,"ER32")) { 								// ER32
			$this->v_156_xMun	 = $this->dom->createElement("xMun",$param);					// 156
		}
	}
	public function set_157_UF  ($param) { 
		if ($this->validateDomain("set_157_UF",$param,"D5")) {									// D5
			$this->v_157_UF	 = $this->dom->createElement("UF",$param);							// 157
		}
	}
	public function set_158_infNFe  () { 
		$this->v_158_infNFe	 = $this->dom->createElement("infNFe");								// 158 - CONDICIONAL
	}
	public function set_159_Chave  ($param) { 
		if ($this->validateRegExp("set_159_Chave",$param,"ER3")) { 								// ER3
			$this->v_159_Chave = $this->dom->createElement("Chave",$param);						// 159
		}
	}
	public function set_160_PIN  ($param) { 
		if ($this->validateRegExp("set_160_PIN",$param,"ER37")) { 								// ER37
			$this->v_160_PIN	 = $this->dom->createElement("PIN",$param);						// 160
		}
	}
	public function set_161_infOutros  () { 
		$this->v_161_infOutros = $this->dom->createElement("infOutros");						// 161 - CONDICIONAL
	}
	public function set_162_tpDoc  ($param) { 
		if ($this->validateDomain("set_162_tpDoc",$param,"D14")) {								// D14
			$this->v_162_tpDoc = $this->dom->createElement("tpDoc",$param);						// 162
		}
	}
	public function set_163_descOutros ($param) { 
		if ($this->validateRegExp("set_163_descOutros",$param,"ER32")) { 						// ER32
			$this->v_163_descOutros	= $this->dom->createElement("descOutros",$param);			// 163
		}
	}
	public function set_164_nDoc  ($param) { 
		if ($this->validateRegExp("set_164_nDoc",$param,"ER32")) { 								// ER32
			$this->v_164_nDoc	 = $this->dom->createElement("nDoc",$param);					// 164
		}
	}
	public function set_165_dEmi  ($param) { 
		if ($this->validateRegExp("set_165_dEmi",$param,"ER9")) { 								// ER9
			$this->v_165_dEmi	 = $this->dom->createElement("dEmi",$param);					// 165
		}
	}
	public function set_166_vDocFisc  ($param) { 
		if ($this->validateRegExp("set_166_vDocFisc",$param,"ER24")) { 							// ER24
			$this->v_166_vDocFisc = $this->dom->createElement("vDocFisc",$param);				// 166
		}
	}
	public function set_167_exped  () { 
		$this->v_167_exped = $this->dom->createElement("exped");								// 167
	}
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
	public function set_174_xLgr  ($param) { 
		if ($this->validateRegExp("set_174_xLgr",$param,"ER32")) { 								// ER32
			$this->v_174_xLgr	 = $this->dom->createElement("xLgr",$param);					// 174
		}
	}
	public function set_175_nro  ($param) { 
		if ($this->validateRegExp("set_175_nro",$param,"ER32")) { 								// ER32
			$this->v_175_nro	 = $this->dom->createElement("nro",$param);						// 175
		}
	}
	public function set_176_xCpl  ($param) { 
		if ($this->validateRegExp("set_176_xCpl",$param,"ER32")) { 								// ER32
			$this->v_176_xCpl	 = $this->dom->createElement("xCpl",$param);					// 176
		}
	}
	public function set_177_xBairro  ($param) { 
		if ($this->validateRegExp("set_177_xBairro",$param,"ER32")) { 							// ER32
			$this->v_177_xBairro = $this->dom->createElement("xBairro",$param);					// 177
		}
	}
	public function set_178_cMun  ($param) { 
		if ($this->validateRegExp("set_178_cMun",$param,"ER2")) { 								// ER2
			$this->v_178_cMun	 = $this->dom->createElement("cMun",$param);					// 178
		}
	}
	public function set_179_xMun  ($param) { 
		if ($this->validateRegExp("set_179_xMun",$param,"ER32")) { 								// ER32
			$this->v_179_xMun	 = $this->dom->createElement("xMun",$param);					// 179
		}
	}
	public function set_180_CEP  ($param) { 
		if ($this->validateRegExp("set_180_CEP",$param," ER33")) { 								// ER33
			$this->v_180_CEP	 = $this->dom->createElement("CEP",$param);						// 180
		}
	}
	public function set_181_UF  ($param) { 
		if ($this->validateDomain("set_181_UF",$param,"D5")) {									// D5
			$this->v_181_UF	 = $this->dom->createElement("UF",$param);							// 181
		}
	}
	public function set_182_cPais  ($param) { 
		if ($this->validateRegExp("set_182_cPais",$param,"ER27")) { 							// ER27
			$this->v_182_cPais = $this->dom->createElement("cPais",$param);						// 182
		}
	}
	public function set_183_xPais  ($param) { 
		if ($this->validateRegExp("set_183_xPais",$param,"ER32")) { 							// ER32
			$this->v_183_xPais = $this->dom->createElement("xPais",$param);						// 183
		}
	}
	public function set_184_email  ($param) { 
		if ($this->validateRegExp("set_184_email",$param,"ER47")) { 							// ER47
			$this->v_184_email	 = $this->dom->createElement("email",$param);					// 184
		}
	}
	public function set_185_receb  () { 
		$this->v_185_receb = $this->dom->createElement("receb");								// 185
	}
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
	public function set_192_xLgr  ($param) { 
		if ($this->validateRegExp("set_192_xLgr",$param,"ER32")) { 								// ER32
			$this->v_192_xLgr	 = $this->dom->createElement("xLgr",$param);					// 192
		}
	}
	public function set_193_nro  ($param) { 
		if ($this->validateRegExp("set_193_nro",$param,"ER32")) { 								// ER32
			$this->v_193_nro	 = $this->dom->createElement("nro",$param);						// 193
		}
	}
	public function set_194_xCpl  ($param) { 
		if ($this->validateRegExp("set_194_xCpl",$param,"ER32")) { 								// ER32
			$this->v_194_xCpl	 = $this->dom->createElement("xCpl",$param);					// 194
		}
	}
	public function set_195_xBairro  ($param) { 
		if ($this->validateRegExp("set_195_xBairro",$param,"ER32")) { 							// ER32
			$this->v_195_xBairro = $this->dom->createElement("xBairro",$param);					// 195
		}
	}
	public function set_196_cMun  ($param) { 
		if ($this->validateRegExp("set_196_cMun",$param,"ER2")) { 								// ER2
			$this->v_196_cMun	 = $this->dom->createElement("cMun",$param);					// 196
		}
	}
	public function set_197_xMun  ($param) { 
		if ($this->validateRegExp("set_197_xMun",$param,"ER32")) { 								// ER32
			$this->v_197_xMun	 = $this->dom->createElement("xMun",$param);					// 197
		}
	}
	public function set_198_CEP  ($param) { 
		if ($this->validateRegExp("set_198_CEP",$param," ER33")) { 								// ER33
			$this->v_198_CEP	 = $this->dom->createElement("CEP",$param);						// 198
		}
	}
	public function set_199_UF  ($param) { 
		if ($this->validateDomain("set_199_UF",$param,"D5")) {									// D5
			$this->v_199_UF	 = $this->dom->createElement("UF",$param);							// 199
		}
	}
	public function set_200_cPais  ($param) { 
		if ($this->validateRegExp("set_200_cPais",$param,"ER27")) { 							// ER27
			$this->v_200_cPais = $this->dom->createElement("cPais",$param);						// 200
		}
	}
	public function set_201_xPais  ($param) { 
		if ($this->validateRegExp("set_201_xPais",$param,"ER32")) { 							// ER32
			$this->v_201_xPais = $this->dom->createElement("xPais",$param);						// 201
		}
	}
	public function set_202_email  ($param) { 
		if ($this->validateRegExp("set_202_email",$param,"ER47")) { 							// ER47
			$this->v_202_email 	 = $this->dom->createElement("email",$param);					// 202
		}
	}
	public function set_203_dest  () { 
		$this->v_203_dest	 = $this->dom->createElement("dest");								// 203
	}
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
	public function set_211_xLgr  ($param) { 
		if ($this->validateRegExp("set_211_xLgr",$param,"ER32")) { 								// ER32
			$this->v_211_xLgr	 = $this->dom->createElement("xLgr",$param);					// 211
		}
	}
	public function set_212_nro  ($param) { 
		if ($this->validateRegExp("set_212_nro",$param,"ER32")) { 								// ER32
			$this->v_212_nro	 = $this->dom->createElement("nro",$param);						// 212
		}
	}
	public function set_213_xCpl  ($param) { 
		if ($this->validateRegExp("set_213_xCpl",$param,"ER32")) { 								// ER32
			$this->v_213_xCpl	 = $this->dom->createElement("xCpl",$param);					// 213
		}
	}
	public function set_214_xBairro  ($param) { 
		if ($this->validateRegExp("set_214_xBairro",$param,"ER32")) { 							// ER32
			$this->v_214_xBairro = $this->dom->createElement("xBairro",$param);					// 214
		}
	}
	public function set_215_cMun  ($param) { 
		if ($this->validateRegExp("set_215_cMun",$param,"ER2")) { 								// ER2
			$this->v_215_cMun	 = $this->dom->createElement("cMun",$param);					// 215
		}
	}
	public function set_216_xMun  ($param) { 
		if ($this->validateRegExp("set_216_xMun",$param,"ER32")) { 								// ER32
			$this->v_216_xMun	 = $this->dom->createElement("xMun",$param);					// 216
		}
	}
	public function set_217_CEP  ($param) { 
		if ($this->validateRegExp("set_217_CEP",$param," ER33")) { 								// ER33
			$this->v_217_CEP	 = $this->dom->createElement("CEP",$param);						// 217
		}
	}
	public function set_218_UF  ($param) { 
		if ($this->validateDomain("set_218_UF",$param,"D5")) {									// D5
			$this->v_218_UF	 = $this->dom->createElement("UF",$param);							// 218
		}
	}
	public function set_219_cPais  ($param) { 
		if ($this->validateRegExp("set_219_cPais",$param,"ER27")) { 							// ER27
			$this->v_219_cPais = $this->dom->createElement("cPais",$param);						// 219
		}
	}
	public function set_220_xPais  ($param) { 
		if ($this->validateRegExp("set_220_xPais",$param,"ER32")) { 							// ER32
			$this->v_220_xPais = $this->dom->createElement("xPais",$param);						// 220
		}
	}
	public function set_221_email  ($param) { 
		if ($this->validateRegExp("set_221_email",$param,"ER47")) { 							// ER47
			$this->v_221_email	 = $this->dom->createElement("email",$param);					// 221
		}
	}
	public function set_222_locEnt  () { 
		$this->v_222_locEnt	 = $this->dom->createElement("locEnt");								// 222
	}
	public function set_223_CNPJ  ($param) { 
		if ($this->validateRegExp("set_223_CNPJ",$param,"ER4")) { 								// ER4
			$this->v_223_CNPJ	 = $this->dom->createElement("CNPJ",$param);					// 223 - CONDICIONAL
		}
	}
	public function set_224_CPF  ($param) { 
		if ($this->validateRegExp("set_224_CPF",$param,"ER7")) { 								// ER7
			$this->v_224_CPF	 = $this->dom->createElement("CPF",$param);						// 224 - CONDICIONAL
		}
	}
	public function set_225_xNome  ($param) { 
		if ($this->validateRegExp("set_225_xNome",$param,"ER32")) { 							// ER32
			$this->v_225_xNome = $this->dom->createElement("xNome",$param);						// 225
		}
	}
	public function set_226_xLgr  ($param) { 
		if ($this->validateRegExp("set_226_xLgr",$param,"ER32")) { 								// ER32
			$this->v_226_xLgr	 = $this->dom->createElement("xLgr",$param);					// 226
		}
	}
	public function set_227_nro  ($param) { 
		if ($this->validateRegExp("set_227_nro",$param,"ER32")) { 								// ER32
			$this->v_227_nro	 = $this->dom->createElement("nro",$param);						// 227
		}
	}
	public function set_228_xCpl  ($param) { 
		if ($this->validateRegExp("set_228_xCpl",$param,"ER32")) { 								// ER32
			$this->v_228_xCpl	 = $this->dom->createElement("xCpl",$param);					// 228
		}
	}
	public function set_229_xBairro  ($param) { 
		if ($this->validateRegExp("set_229_xBairro",$param,"ER32")) { 							// ER32
			$this->v_229_xBairro = $this->dom->createElement("xBairro",$param);					// 229
		}
	}
	public function set_230_cMun  ($param) { 
		if ($this->validateRegExp("set_230_cMun",$param,"ER2")) { 								// ER2
			$this->v_230_cMun	 = $this->dom->createElement("cMun",$param);					// 230
		}
	}
	public function set_231_xMun  ($param) { 
		if ($this->validateRegExp("set_231_xMun",$param,"ER32")) { 								// ER32
			$this->v_231_xMun	 = $this->dom->createElement("xMun",$param);					// 231
		}
	}
	public function set_232_UF  ($param) { 
		if ($this->validateDomain("set_232_UF",$param,"D5")) {									// D5
			$this->v_232_UF	 = $this->dom->createElement("UF",$param);							// 232
		}
	}
	public function set_233_vPrest  () { 
		$this->v_233_vPrest = $this->dom->createElement("vPrest");								// 233
	}
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
	public function set_237_xNome  ($param) { 
		if ($this->validateRegExp("set_237_xNome",$param,"ER32")) { 							// ER32
			$this->v_237_xNome	 = $this->dom->createElement("xNome",$param);					// 237
		}
	}
	public function set_238_vComp  ($param) { 
		if ($this->validateRegExp("set_238_vComp",$param,"ER23")) { 							// ER23
			$this->v_238_vComp	 = $this->dom->createElement("vComp",$param);					// 238
		}
	}
	public function set_239_imp  () { 
		$this->v_239_imp	 = $this->dom->createElement("imp");								// 239
	}
	public function set_240_ICMS  () { 
		$this->v_240_ICMS	 = $this->dom->createElement("ICMS");								// 240
	}
	public function set_241_ICMS00  () { 
		$this->v_241_ICMS00	 = $this->dom->createElement("ICMS00");								// 241 - CONDICIONAL
	}
	public function set_242_CST  ($param) { 
		if ($this->validateDomain("set_242_CST",$param,"D17")) {								// D17
			$this->v_242_CST	 = $this->dom->createElement("CST",$param);						// 242
		}
	}
	public function set_243_vBC  ($param) { 
		if ($this->validateRegExp("set_243_vBC",$param,"ER23")) { 								// ER23
			$this->v_243_vBC	 = $this->dom->createElement("vBC",$param);						// 243
		}
	}
	public function set_244_pICMS  ($param) {
		if ($this->validateRegExp("set_244_pICMS",$param,"ER10")) {								// ER10
			$this->v_244_pICMS = $this->dom->createElement("pICMS",$param);						// 244
		}
	}
	public function set_245_vICMS  ($param) { 
		if ($this->validateRegExp("set_245_vICMS",$param,"ER23")) { 							// ER23
			$this->v_245_vICMS = $this->dom->createElement("vICMS",$param);						// 245
		}
	}
	public function set_246_ICMS20  () { 
		$this->v_246_ICMS20	 = $this->dom->createElement("ICMS20");								// 246 - CONDICIONAL
	}
	public function set_247_CST  ($param) { 
		if ($this->validateDomain("set_247_CST",$param,"D18")) {								// D18
			$this->v_247_CST	 = $this->dom->createElement("CST",$param);						// 247
		}
	}
	public function set_248_pRedBC  ($param) { 
		if ($this->validateRegExp("set_248_pRedBC",$param,"ER11")) { 							// ER11
			$this->v_248_pRedBC = $this->dom->createElement("pRedBC",$param);					// 248
		}
	}
	public function set_249_vBC  ($param) { 
		if ($this->validateRegExp("set_249_vBC",$param,"ER23")) { 								// ER23
			$this->v_249_vBC	 = $this->dom->createElement("vBC",$param);						// 249
		}
	}
	public function set_250_pICMS  ($param) { 
		if ($this->validateRegExp("set_250_pICMS",$param,"ER10")) {								// ER10
			$this->v_250_pICMS = $this->dom->createElement("pICMS",$param);						// 250
		}
	}
	public function set_251_vICMS  ($param) { 
		if ($this->validateRegExp("set_251_vICMS",$param,"ER23")) { 							// ER23
			$this->v_251_vICMS = $this->dom->createElement("vICMS",$param);						// 251
		}
	}
	public function set_252_ICMS45  () { 
		$this->v_252_ICMS45	 = $this->dom->createElement("ICMS45");								// 252 - CONDICIONAL
	}
	public function set_253_CST  ($param) { 
		if ($this->validateDomain("set_253_CST",$param,"D19")) {								// D19
			$this->v_253_CST	 = $this->dom->createElement("CST",$param);						// 253
		}
	}
	public function set_254_ICMS60  () { 
		$this->v_254_ICMS60	 = $this->dom->createElement("ICMS60");								// 254 - CONDICIONAL
	}
	public function set_255_CST  ($param) { 
		if ($this->validateDomain("set_255_CST",$param,"D20")) {								// D20
			$this->v_255_CST		 = $this->dom->createElement("CST",$param);					// 255
		}
	}
	public function set_256_vBCSTRet  ($param) { 
		if ($this->validateRegExp("set_256_vBCSTRet",$param,"ER23")) { 							// ER23
			$this->v_256_vBCSTRet	 = $this->dom->createElement("vBCSTRet",$param);			// 256
		}
	}
	public function set_257_vICMSSTRet  ($param) { 
		if ($this->validateRegExp("set_257_vICMSSTRet",$param,"ER23")) { 						// ER23
			$this->v_257_vICMSSTRet = $this->dom->createElement("vICMSSTRet",$param);			// 257
		}
	}
	public function set_258_pICMSSTRet  ($param) { 
		if ($this->validateRegExp("set_258_pICMSSTRet",$param,"ER10")) {						// ER10
			$this->v_258_pICMSSTRet = $this->dom->createElement("pICMSSTRet",$param);			// 258
		}
	}
	public function set_259_vCred  ($param) { 
		if ($this->validateRegExp("set_259_vCred",$param,"ER23")) { 							// ER23
			$this->v_259_vCred	 = $this->dom->createElement("vCred",$param);					// 259
		}
	}
	public function set_260_ICMS90  () { 
		$this->v_260_ICMS90	 = $this->dom->createElement("ICMS90");								// 260 - CONDICIONAL
	}
	public function set_261_CST  ($param) { 
		if ($this->validateDomain("set_261_CST",$param,"D21")) {								// D21
			$this->v_261_CST	 = $this->dom->createElement("CST",$param);						// 261
		}
	}
	public function set_262_pRedBC  ($param) { 
		if ($this->validateRegExp("set_262_pRedBC",$param,"ER11")) { 							// ER11
			$this->v_262_pRedBC = $this->dom->createElement("pRedBC",$param);					// 262
		}
	}
	public function set_263_vBC  ($param) { 
		if ($this->validateRegExp("set_263_vBC",$param,"ER23")) { 								// ER23
			$this->v_263_vBC	 = $this->dom->createElement("vBC",$param);						// 263
		}
	}
	public function set_264_pICMS  ($param) { 
		if ($this->validateRegExp("set_264_pICMS",$param,"ER10")) {								// ER10
			$this->v_264_pICMS = $this->dom->createElement("pICMS",$param);						// 264
		}
	}
	public function set_265_vICMS  ($param) { 
		if ($this->validateRegExp("set_265_vICMS",$param,"ER23")) { 							// ER23
			$this->v_265_vICMS = $this->dom->createElement("vICMS",$param);						// 265
		}
	}
	public function set_266_vCred  ($param) { 
		if ($this->validateRegExp("set_266_vCred",$param,"ER23")) { 							// ER23
			$this->v_266_vCred = $this->dom->createElement("vCred",$param);						// 266
		}
	}
	public function set_267_ICMSOutraUF  () { 
		$this->v_267_ICMSOutraUF = $this->dom->createElement("ICMSOutraUF");					// 267 - CONDICIONAL
	}
	public function set_268_CST  ($param) { 
		if ($this->validateDomain("set_268_CST",$param,"D21")) {								// D21
			$this->v_268_CST		 = $this->dom->createElement("CST",$param);					// 268
		}
	}
	public function set_269_pRedBCOutraUF  ($param) { 
		if ($this->validateRegExp("set_269_pRedBCOutraUF",$param,"ER11")) { 					// ER11
			$this->v_269_pRedBCOutraUF	= $this->dom->createElement("pRedBCOutraUF",$param);	// 269
		}
	}
	public function set_270_vBCOutraUF  ($param) { 
		if ($this->validateRegExp("set_270_vBCOutraUF",$param,"ER23")) { 						// ER23
			$this->v_270_vBCOutraUF = $this->dom->createElement("vBCOutraUF",$param);			// 270
		}
	}
	public function set_271_pICMSOutraUF  ($param) { 
		if ($this->validateRegExp("set_271_pICMSOutraUF",$param,"ER10")) {						// ER10
			$this->v_271_pICMSOutraUF = $this->dom->createElement("pICMSOutraUF",$param);		// 271
		}
	}
	public function set_272_vICMSOutraUF  ($param) { 
		if ($this->validateRegExp("set_272_vICMSOutraUF",$param,"ER23")) { 						// ER23
			$this->v_272_vICMSOutraUF = $this->dom->createElement("vICMSOutraUF",$param);		// 272
		}
	}
	public function set_273_ICMSSN  () { 
		$this->v_273_ICMSSN	 = $this->dom->createElement("ICMSSN");								// 273 - CONDICIONAL
	}
	public function set_274_indSN  ($param) { 
		if ($this->validateDomain("set_274_indSN",$param,"D22")) {								// D22
			$this->v_274_indSN	 = $this->dom->createElement("indSN",$param);					// 274
		}
	}
	public function set_275_infAdFisco  ($param) { 
		if ($this->validateRegExp("set_275_infAdFisco",$param,"ER32")) { 						// ER32
			$this->v_275_infAdFisco 	= $this->dom->createElement("infAdFisco",$param);		// 275
		}
	}
	public function set_276_infCTeNorm  () { 
		$this->v_276_infCTeNorm	= $this->dom->createElement("infCTeNorm");						// 276 - CONDICIONAL
	}
	public function set_277_infCarga  () { 
		$this->v_277_infCarga	 = $this->dom->createElement("infCarga");						// 277
	}
	public function set_278_vCarga  ($param) { 
		if ($this->validateRegExp("set_278_vCarga",$param,"ER23")) { 							// ER23
			$this->v_278_vCarga = $this->dom->createElement("vCarga",$param);					// 278
		}
	}
	public function set_279_proPred  ($param) { 
		if ($this->validateRegExp("set_279_proPred",$param,"ER32")) { 							// ER32
			$this->v_279_proPred = $this->dom->createElement("proPred",$param);					// 279
		}
	}
	public function set_280_xOutCat  ($param) { 
		if ($this->validateRegExp("set_280_xOutCat",$param,"ER32")) { 							// ER32
			$this->v_280_xOutCat = $this->dom->createElement("xOutCat",$param);					// 280
		}
	}
	public function set_281_infQ  () { 
		$this->v_281_infQ	 = $this->dom->createElement("infQ");								// 281
	}
	public function set_282_cUnid  ($param) { 
		if ($this->validateDomain("set_282_cUnid",$param,"D15")) {								// D15
			$this->v_282_cUnid	 = $this->dom->createElement("cUnid",$param);					// 282
		}
	}
	public function set_283_tpMed  ($param) { 
		if ($this->validateRegExp("set_283_tpMed",$param,"ER32")) { 							// ER32
			$this->v_283_tpMed	 = $this->dom->createElement("tpMed",$param);					// 283
		}
	}
	public function set_284_qCarga  ($param) { 
		if ($this->validateRegExp("set_284_qCarga",$param,"ER17")) { 							// ER17
			$this->v_284_qCarga	 = $this->dom->createElement("qCarga",$param);					// 284
		}
	}
	public function set_285_contQt  () { 
		$this->v_285_contQt	 = $this->dom->createElement("contQt");								// 285
	}
	public function set_286_nCont  ($param) { 
		if ($this->validateRegExp("set_286_nCont",$param,"ER42")) { 							// ER42
			$this->v_286_nCont	 = $this->dom->createElement("nCont",$param);					// 286
		}
	}
	public function set_287_lacContQt  () { 
		$this->v_287_lacContQt = $this->dom->createElement("lacContQt");						// 287
	}
	public function set_288_nLacre  ($param) { 
		if ($this->validateRegExp("set_288_nLacre",$param,"ER32")) { 							// ER32
			$this->v_288_nLacre	 = $this->dom->createElement("nLacre",$param);					// 288
		}
	}
	public function set_289_dPrev  ($param) { 
		if ($this->validateRegExp("set_289_dPrev",$param,"ER9")) { 								// ER9
			$this->v_289_dPrev	 = $this->dom->createElement("dPrev",$param);					// 289
		}
	}
	public function set_290_docAnt  () { 
		$this->v_290_docAnt	 = $this->dom->createElement("docAnt");								// 290
	}
	public function set_291_emiDocAnt  () { 
		$this->v_291_emiDocAnt = $this->dom->createElement("emiDocAnt");						// 291
	}
	public function set_292_CNPJ  ($param) { 
		if ($this->validateRegExp("set_292_CNPJ",$param,"ER6")) { 								// ER6
			$this->v_292_CNPJ		 = $this->dom->createElement("CNPJ",$param);				// 292 - CONDICIONAL
		}
	}
	public function set_293_CPF  ($param) { 
		if ($this->validateRegExp("set_293_CPF",$param,"ER7")) { 								// ER7
			$this->v_293_CPF		 = $this->dom->createElement("CPF",$param);					// 293 - CONDICIONAL
		}
	}
	public function set_294_IE  ($param) { 
		if ($this->validateRegExp("set_294_IE",$param,"ER25")) { 								// ER25
			$this->v_294_IE		 = $this->dom->createElement("IE",$param);						// 294
		}
	}
	public function set_295_UF  ($param) { 
		if ($this->validateDomain("set_295_UF",$param,"D5")) {									// D5
			$this->v_295_UF		 = $this->dom->createElement("UF",$param);						// 295
		}
	}
	public function set_296_xNome  ($param) { 
		if ($this->validateRegExp("set_296_xNome",$param,"ER32")) { 							// ER32
			$this->v_296_xNome	 = $this->dom->createElement("xNome",$param);					// 296
		}
	}
	public function set_297_idDocAnt  () { 
		$this->v_297_idDocAnt	 = $this->dom->createElement("idDocAnt");						// 297
	}
	public function set_298_idDocAntPap  () { 
		$this->v_298_idDocAntPap	= $this->dom->createElement("idDocAntPap");					// 298 - CONDICIONAL
	}
	public function set_299_tpDoc  ($param) { 
		if ($this->validateDomain("set_299_tpDoc",$param,"D24")) {								// D24
			$this->v_299_tpDoc = $this->dom->createElement("tpDoc",$param);						// 299
		}
	}
	public function set_300_serie  ($param) { 
		if ($this->validateRegExp("set_300_serie",$param,"ER32")) { 							// ER32
			$this->v_300_serie = $this->dom->createElement("serie",$param);						// 300
		}
	}
	public function set_301_subser  ($param) { 
		if ($this->validateRegExp("set_301_subser",$param,"ER32")) { 							// ER32
			$this->v_301_subser = $this->dom->createElement("subser",$param);					// 301
		}
	}
	public function set_302_nDoc  ($param) { 
		if ($this->validateRegExp("set_302_nDoc",$param,"ER39")) { 								// ER39
			$this->v_302_nDoc	 = $this->dom->createElement("nDoc",$param);					// 302
		}
	}
	public function set_303_dEmi  ($param) { 
		if ($this->validateRegExp("set_303_dEmi",$param,"ER9")) { 								// ER9
			$this->v_303_dEmi	 = $this->dom->createElement("dEmi",$param);					// 303
		}
	}
	public function set_304_idDocAntEle  () { 
		$this->v_304_idDocAntEle	= $this->dom->createElement("idDocAntEle");					// 304 - CONDICIONAL
	}
	public function set_305_chave  ($param) { 
		if ($this->validateRegExp("set_305_chave",$param,"ER3")) { 								// ER3
			$this->v_305_chave	 = $this->dom->createElement("chave",$param);					// 305
		}
	}
	public function set_306_seg  () { 
		$this->v_306_seg		 = $this->dom->createElement("seg");							// 306
	}
	public function set_307_respSeg  ($param) { 
		if ($this->validateDomain("set_307_respSeg",$param,"D16")) {							// D16
			$this->v_307_respSeg = $this->dom->createElement("respSeg",$param);					// 307
		}
	}
	public function set_308_xSeg  ($param) { 
		if ($this->validateRegExp("set_308_xSeg",$param,"ER32")) { 								// ER32
			$this->v_308_xSeg	 = $this->dom->createElement("xSeg",$param);					// 308
		}
	}
	public function set_309_nApol  ($param) { 
		if ($this->validateRegExp("set_309_nApol",$param,"ER32")) { 							// ER32
			$this->v_309_nApol = $this->dom->createElement("nApol",$param);						// 309
		}
	}
	public function set_310_nAver  ($param) { 
		if ($this->validateRegExp("set_310_nAver",$param,"ER32")) { 							// ER32
			$this->v_310_nAver = $this->dom->createElement("nAver",$param);						// 310
		}
	}
	public function set_311_vCarga  ($param) { 
		if ($this->validateRegExp("set_311_vCarga",$param,"ER24")) { 							// ER24
			$this->v_311_vCarga = $this->dom->createElement("vCarga",$param);					// 311
		}
	}
	public function set_312_infModal  () { 
		$this->v_312_infModal	 = $this->dom->createElement("infModal");						// 312
	}
	public function set_313_versaoModal  ($param) { 
		if ($this->validateRegExp("set_313_versaoModal",$param,"ER40")) { 						// ER40 1\.(0[4-9]|[1-9][0-9]) 
			$this->v_312_infModal->setAttribute("versaoModal",$param);							// 313 - ATRIBUTO
			$this->v_313_versaoModal = $param;
		}
	}
	public function set_314_xs () { 
		$this->v_314_xs	= 1;																	// 314
	}
	public function set_315_peri  () { 
		$this->v_315_peri		 = $this->dom->createElement("peri");							// 315
	}
	public function set_316_nONU  ($param) { 
		if ($this->validateRegExp("set_316_nONU",$param,"ER41")) { 								// ER41
			$this->v_316_nONU	 = $this->dom->createElement("nONU",$param);					// 316
		}
	}
	public function set_317_xNomeAE  ($param) { 
		if ($this->validateRegExp("set_317_xNomeAE",$param,"ER32")) { 							// ER32
			$this->v_317_xNomeAE = $this->dom->createElement("xNomeAE",$param);					// 317
		}
	}
	public function set_318_xClaRisco  ($param) { 
		if ($this->validateRegExp("set_318_xClaRisco",$param,"ER32")) { 						// ER32
			$this->v_318_xClaRisco	= $this->dom->createElement("xClaRisco",$param);			// 318
		}
	}
	public function set_319_grEmb  ($param) { 
		if ($this->validateRegExp("set_319_grEmb",$param,"ER32")) { 							// ER32
			$this->v_319_grEmb = $this->dom->createElement("grEmb",$param);						// 319
		}
	}
	public function set_320_qTotProd  ($param) { 
		if ($this->validateRegExp("set_320_qTotProd",$param,"ER32")) { 							// ER32
			$this->v_320_qTotProd = $this->dom->createElement("qTotProd",$param);				// 320
		}
	}
	public function set_321_qVolTipo  ($param) { 
		if ($this->validateRegExp("set_321_qVolTipo",$param,"ER32")) { 							// ER32
			$this->v_321_qVolTipo = $this->dom->createElement("qVolTipo",$param);				// 321
		}
	}
	public function set_322_pontoFulgor  ($param) { 
		if ($this->validateRegExp("set_322_pontoFulgor",$param,"ER32")) { 						// ER32
			$this->v_322_pontoFulgor	= $this->dom->createElement("pontoFulgor",$param);		// 322
		}
	}
	public function set_323_veicNovos  () { 
		$this->v_323_veicNovos = $this->dom->createElement("veicNovos");						// 323
	}
	public function set_324_chassi  ($param) { 
		if ($this->validateRegExp("set_324_chassi",$param,"ER42")) { 							// ER42
			$this->v_324_chassi = $this->dom->createElement("chassi",$param);					// 324
		}
	}
	public function set_325_cCor  ($param) { 
		if ($this->validateRegExp("set_325_cCor",$param,"ER32")) { 								// ER32
			$this->v_325_cCor	 = $this->dom->createElement("cCor",$param);					// 325
		}
	}
	public function set_326_xCor  ($param) { 
		if ($this->validateRegExp("set_326_xCor",$param,"ER32")) { 								// ER32
			$this->v_326_xCor	 = $this->dom->createElement("xCor",$param);					// 326
		}
	}
	public function set_327_cMod  ($param) { 
		if ($this->validateRegExp("set_327_cMod",$param,"ER32")) { 								// ER32
			$this->v_327_cMod	 = $this->dom->createElement("cMod",$param);					// 327
		}
	}
	public function set_328_vUnit  ($param) { 
		if ($this->validateRegExp("set_328_vUnit",$param,"ER23")) { 							// ER23
			$this->v_328_vUnit = $this->dom->createElement("vUnit",$param);						// 328
		}
	}
	public function set_329_vFrete  ($param) { 
		if ($this->validateRegExp("set_329_vFrete",$param,"ER23")) { 							// ER23
			$this->v_329_vFrete = $this->dom->createElement("vFrete",$param);					// 329
		}
	}
	public function set_330_cobr  () { 
		$this->v_330_cobr		 = $this->dom->createElement("cobr");							// 330
	}
	public function set_331_fat  () { 
		$this->v_331_fat	 = $this->dom->createElement("fat");								// 331
	}
	public function set_332_nFat  ($param) { 
		if ($this->validateRegExp("set_332_nFat",$param,"ER32")) { 								// ER32
			$this->v_332_nFat	 = $this->dom->createElement("nFat",$param);					// 332
		}
	}
	public function set_333_vOrig  ($param) { 
		if ($this->validateRegExp("set_333_vOrig",$param,"ER24")) { 							// ER24
			$this->v_333_vOrig = $this->dom->createElement("vOrig",$param);						// 333
		}
	}
	public function set_334_vDesc  ($param) { 
		if ($this->validateRegExp("set_334_vDesc",$param,"ER24")) { 							// ER24
			$this->v_334_vDesc = $this->dom->createElement("vDesc",$param);						// 334
		}
	}
	public function set_335_vLiq  ($param) { 
		if ($this->validateRegExp("set_335_vLiq",$param,"ER24")) { 								// ER24
			$this->v_335_vLiq	 = $this->dom->createElement("vLiq",$param);					// 335
		}
	}
	public function set_336_dup  () { 
		$this->v_336_dup	 = $this->dom->createElement("dup");								// 336
	}
	public function set_337_nDup  ($param) { 
		if ($this->validateRegExp("set_337_nDup",$param,"ER32")) { 								// ER32
			$this->v_337_nDup	 = $this->dom->createElement("nDup",$param);					// 337
		}
	}
	public function set_338_dVenc  ($param) { 
		if ($this->validateRegExp("set_338_dVenc",$param,"ER9")) { 								// ER9
			$this->v_338_dVenc = $this->dom->createElement("dVenc",$param);						// 338
		}
	}
	public function set_339_vDup  ($param) { 
		if ($this->validateRegExp("set_339_vDup",$param,"ER24")) { 								// ER24
			$this->v_339_vDup	 = $this->dom->createElement("vDup",$param);					// 339
		}
	}
	public function set_340_infCteSub  () { 
		$this->v_340_infCteSub = $this->dom->createElement("infCteSub");						// 340
	}
	public function set_341_chCte  ($param) { 
		if ($this->validateRegExp("set_341_chCte",$param,"ER3")) { 								// ER3
			$this->v_341_chCte = $this->dom->createElement("chCte",$param);						// 341
		}
	}
	public function set_342_tomaICMS  () { 
		$this->v_342_tomaICMS = $this->dom->createElement("tomaICMS");							// 342 - CONDICIONAL
	}
	public function set_343_refNFe  ($param) { 
		if ($this->validateRegExp("set_343_refNFe",$param,"ER3")) { 							// ER3
			$this->v_343_refNFe	 = $this->dom->createElement("refNFe",$param);					// 343 - CONDICIONAL
		}
	}
	public function set_344_refNF  () { 
		$this->v_344_refNF	 = $this->dom->createElement("refNF");						// 344 - CONDICIONAL
	}
	public function set_345_CNPJ  ($param) { 
		if ($this->validateRegExp("set_345_CNPJ",$param,"ER4")) { 								// ER4
			$this->v_345_CNPJ	 = $this->dom->createElement("CNPJ",$param);					// 345
		}
	}
	public function set_346_mod  ($param) { 
		if ($this->validateDomain("set_346_mod",$param,"D25")) {								// D25
			$this->v_346_mod	 = $this->dom->createElement("mod",$param);						// 346
		}
	}
	public function set_347_serie  ($param) { 
		if ($this->validateRegExp("set_347_serie",$param,"ER30")) { 							// ER30
			$this->v_347_serie = $this->dom->createElement("serie",$param);						// 347
		}
	}
	public function set_348_subserie  ($param) { 
		if ($this->validateRegExp("set_348_subserie",$param,"ER30")) { 							// ER30
			$this->v_348_subserie = $this->dom->createElement("subserie",$param);				// 348
		}
	}
	public function set_349_nro  ($param) { 
		if ($this->validateRegExp("set_349_nro",$param,"ER43")) { 								// ER43
			$this->v_349_nro	 = $this->dom->createElement("nro",$param);						// 349
		}
	}
	public function set_350_valor  ($param) { 
		if ($this->validateRegExp("set_350_valor",$param,"ER23")) { 							// ER23
			$this->v_350_valor = $this->dom->createElement("valor",$param);						// 350
		}
	}
	public function set_351_dEmi  ($param) { 
		if ($this->validateRegExp("set_351_dEmi",$param,"ER9")) { 								// ER9
			$this->v_351_dEmi	 = $this->dom->createElement("dEmi",$param);					// 351
		}
	}
	public function set_352_refCte  ($param) { 
		if ($this->validateRegExp("set_352_refCte",$param,"ER3")) { 							// ER3
			$this->v_352_refCte	 = $this->dom->createElement("refCte",$param);					// 352 - CONDICIONAL
		}
	}
	public function set_353_tomaNaoICMS  () { 
		$this->v_353_tomaNaoICMS	= $this->dom->createElement("tomaNaoICMS");					// 353 - CONDICIONAL
	}
	public function set_354_refCteAnu  ($param) { 
		if ($this->validateRegExp("set_354_refCteAnu",$param,"ER3")) { 							// ER3
			$this->v_354_refCteAnu = $this->dom->createElement("refCteAnu",$param);				// 354
		}
	}
	public function set_355_infCteComp  () { 
		$this->v_355_infCteComp	= $this->dom->createElement("infCteComp");						// 355 - CONDICIONAL
	}
	public function set_356_chave  ($param) { 	
		if ($this->validateRegExp("set_356_chave",$param,"ER3")) { 								// ER3
			$this->v_356_chave	 = $this->dom->createElement("chave",$param);					// 356
		}
	}
	public function set_357_vPresComp  () { 	
		$this->v_357_vPresComp = $this->dom->createElement("vPresComp");						// 357
	}
	public function set_358_vTPrest  ($param) { 	
		if ($this->validateRegExp("set_358_vTPrest",$param,"ER23")) { 							// ER23
			$this->v_358_vTPrest = $this->dom->createElement("vTPrest",$param);					// 358
		}
	}
	public function set_359_compComp  () { 	
		$this->v_359_compComp = $this->dom->createElement("compComp");							// 359
	}
	public function set_360_xNome  ($param) { 	
		if ($this->validateRegExp("set_360_xNome",$param,"ER32")) { 							// ER32
			$this->v_360_xNome	 = $this->dom->createElement("xNome",$param);					// 360
		}
	}
	public function set_361_vComp  ($param) { 	
		if ($this->validateRegExp("set_361_vComp",$param,"ER23")) { 							// ER23
			$this->v_361_vComp	 = $this->dom->createElement("vComp",$param);					// 361
		}
	}
	public function set_362_impComp  () { 	
		$this->v_362_impComp	 = $this->dom->createElement("impComp");						// 362
	}
	public function set_363_ICMSComp  () { 	
		$this->v_363_ICMSComp = $this->dom->createElement("ICMSComp");							// 363
	}
	public function set_364_ICMS00  () { 	
		$this->v_364_ICMS00	 = $this->dom->createElement("ICMS00");								// 364 - CONDICIONAL
	}
	public function set_365_CST  ($param) { 	
		if ($this->validateDomain("set_365_CST",$param,"D17")) {								// D17
			$this->v_365_CST	 = $this->dom->createElement("CST",$param);						// 365
		}
	}
	public function set_366_vBC  ($param) { 	
		if ($this->validateRegExp("set_366_vBC",$param,"ER23")) { 								// ER23
			$this->v_366_vBC	 = $this->dom->createElement("vBC",$param);						// 366
		}
	}
	public function set_367_pICMS  ($param) { 	
		if ($this->validateRegExp("set_367_pICMS",$param,"ER10")) {								// ER10
			$this->v_367_pICMS = $this->dom->createElement("pICMS",$param);						// 367
		}
	}
	public function set_368_vICMS  ($param) { 	
		if ($this->validateRegExp("set_368_vICMS",$param,"ER23")) { 							// ER23
			$this->v_368_vICMS = $this->dom->createElement("vICMS",$param);						// 368
		}
	}
	public function set_369_ICMS20  () { 	
		$this->v_369_ICMS20	 = $this->dom->createElement("ICMS20");								// 369 - CONDICIONAL
	}
	public function set_370_CST  ($param) { 	
		if ($this->validateDomain("set_370_CST",$param,"D18")) {								// D18
			$this->v_370_CST	 = $this->dom->createElement("CST",$param);						// 370
		}
	}
	public function set_371_pRedBC  ($param) { 	
		if ($this->validateRegExp("set_371_pRedBC",$param,"ER11")) { 							// ER11
			$this->v_371_pRedBC = $this->dom->createElement("pRedBC",$param);					// 371
		}
	}
	public function set_372_vBC  ($param) { 	
		if ($this->validateRegExp("set_372_vBC",$param,"ER23")) { 								// ER23
			$this->v_372_vBC	 = $this->dom->createElement("vBC",$param);						// 372
		}
	}
	public function set_373_pICMS  ($param) { 	
		if ($this->validateRegExp("set_373_pICMS",$param,"ER10")) {								// ER10
			$this->v_373_pICMS = $this->dom->createElement("pICMS",$param);						// 373
		}
	}
	public function set_374_vICMS  ($param) { 	
		if ($this->validateRegExp("set_374_vICMS",$param,"ER23")) { 							// ER23
			$this->v_374_vICMS = $this->dom->createElement("vICMS",$param);						// 374
		}
	}
	public function set_375_ICMS45  () { 	
		$this->v_375_ICMS45	 = $this->dom->createElement("ICMS45");								// 375 - CONDICIONAL
	}
	public function set_376_CST  ($param) { 
		if ($this->validateDomain("set_376_CST",$param,"D19")) {								// D19
			$this->v_376_CST	 = $this->dom->createElement("CST",$param);						// 376
		}
	}
	public function set_377_ICMS60  () { 	
		$this->v_377_ICMS60	 = $this->dom->createElement("ICMS60");								// 377 - CONDICIONAL
	}
	public function set_378_CST  ($param) { 	
		if ($this->validateDomain("set_378_CST",$param,"D20")) {								// D20
			$this->v_378_CST		 = $this->dom->createElement("CST",$param);					// 378
		}
	}
	public function set_379_vBCSTRet  ($param) { 	
		if ($this->validateRegExp("set_379_vBCSTRet",$param,"ER23")) { 							// ER23
			$this->v_379_vBCSTRet	 = $this->dom->createElement("vBCSTRet",$param);			// 379
		}
	}
	public function set_380_vICMSSTRet  ($param) { 	
		if ($this->validateRegExp("set_380_vICMSSTRet",$param,"ER23")) { 						// ER23
			$this->v_380_vICMSSTRet = $this->dom->createElement("vICMSSTRet",$param);			// 380
		}
	}
	public function set_381_pICMSSTRet  ($param) { 	
		if ($this->validateRegExp("set_381_pICMSSTRet",$param,"ER10")) {						// ER10
			$this->v_381_pICMSSTRet = $this->dom->createElement("pICMSSTRet",$param);			// 381
		}
	}
	public function set_382_vCred  ($param) { 	
		if ($this->validateRegExp("set_382_vCred",$param,"ER23")) { 							// ER23
			$this->v_382_vCred	 = $this->dom->createElement("vCred",$param);					// 382
		}
	}
	public function set_383_ICMS90  () { 	
		$this->v_383_ICMS90	 = $this->dom->createElement("ICMS90");								// 383 - CONDICIONAL
	}
	public function set_384_CST  ($param) { 	
		if ($this->validateDomain("set_384_CST",$param,"D21")) {								// D21
			$this->v_384_CST	 = $this->dom->createElement("CST",$param);						// 384
		}
	}
	public function set_385_pRedBC  ($param) { 	
		if ($this->validateRegExp("set_385_pRedBC",$param,"ER11")) { 							// ER11
			$this->v_385_pRedBC = $this->dom->createElement("pRedBC",$param);					// 385
		}
	}
	public function set_386_vBC  ($param) { 
		if ($this->validateRegExp("set_386_vBC",$param,"ER23")) { 								// ER23
			$this->v_386_vBC	 = $this->dom->createElement("vBC",$param);						// 386
		}
	}
	public function set_387_pICMS  ($param) { 	
		if ($this->validateRegExp("set_387_pICMS",$param,"ER10")) {								// ER10
			$this->v_387_pICMS = $this->dom->createElement("pICMS",$param);						// 387
		}
	}
	public function set_388_vICMS  ($param) { 	
		if ($this->validateRegExp("set_388_vICMS",$param,"ER23")) { 							// ER23
			$this->v_388_vICMS = $this->dom->createElement("vICMS",$param);						// 388
		}
	}
	public function set_389_vCred  ($param) { 	
		if ($this->validateRegExp("set_389_vCred",$param,"ER23")) { 							// ER23
			$this->v_389_vCred = $this->dom->createElement("vCred",$param);						// 389
		}
	}
	public function set_390_ICMSOutraUF  () { 	
		$this->v_390_ICMSOutraUF = $this->dom->createElement("ICMSOutraUF");					// 390 - CONDICIONAL
	}
	public function set_391_CST  ($param) { 	
		if ($this->validateDomain("set_391_CST",$param,"D21")) {								// D21
			$this->v_391_CST		 = $this->dom->createElement("CST",$param);					// 391
		}			
	}
	public function set_392_pRedBCOutraUF  ($param) { 	
		if ($this->validateRegExp("set_392_pRedBCOutraUF",$param,"ER11")) { 					// ER11
			$this->v_392_pRedBCOutraUF	= $this->dom->createElement("pRedBCOutraUF",$param);	// 392
		}
	}
	public function set_393_vBCOutraUF  ($param) { 	
		if ($this->validateRegExp("set_393_vBCOutraUF",$param,"ER23")) { 						// ER23
			$this->v_393_vBCOutraUF = $this->dom->createElement("vBCOutraUF",$param);			// 393
		}
	}
	public function set_394_pICMSOutraUF  ($param) { 	
		if ($this->validateRegExp("set_394_pICMSOutraUF",$param,"ER10")) {						// ER10
			$this->v_394_pICMSOutraUF = $this->dom->createElement("pICMSOutraUF",$param);		// 394
		}
	}
	public function set_395_vICMSOutraUF  ($param) { 	
		if ($this->validateRegExp("set_395_vICMSOutraUF",$param,"ER23")) { 						// ER23
			$this->v_395_vICMSOutraUF = $this->dom->createElement("vICMSOutraUF",$param);		// 395
		}
	}
	public function set_396_ICMSSN  () { 	
		$this->v_396_ICMSSN	 = $this->dom->createElement("ICMSSN");								// 396 - CONDICIONAL
	}
	public function set_397_indSN  ($param) { 	
		if ($this->validateDomain("set_397_indSN",$param,"D22")) {								// D22
			$this->v_397_indSN	 = $this->dom->createElement("indSN",$param);					// 397
		}
	}
	public function set_398_infAdFisco  ($param) { 	
		if ($this->validateRegExp("set_398_infAdFisco",$param,"ER32")) { 						// ER32
			$this->v_398_infAdFisco	= $this->dom->createElement("infAdFisco",$param);			// 398
		}
	}
	public function set_399_infCteAnu  () { 	
		$this->v_399_infCteAnu	= $this->dom->createElement("infCteAnu");						// 399 - CONDICIONAL
	}
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
}

?>