<?php

require_once("CTeRules.php");

class CTePHP_5 extends CTeRules { 
	private $dom;
	private	$fragment;

	// 297
	protected $v_297_idDocAnt;
	protected $v_298_idDocAntPap;
	protected $v_304_idDocAntEle;

	// 344
	protected $v_344_refNF;
	protected $v_345_CNPJ;
	protected $v_346_mod;
	protected $v_347_serie;
	protected $v_348_subserie;
	protected $v_349_nro;
	protected $v_350_valor;
	protected $v_351_dEmi;

	// 364
	protected $v_364_ICMS00;
	protected $v_365_CST;
	protected $v_366_vBC;
	protected $v_367_pICMS; 
	protected $v_368_vICMS; 

	// 369
	protected $v_369_ICMS20;
	protected $v_370_CST;
	protected $v_371_pRedBC;
	protected $v_372_vBC;
	protected $v_373_pICMS;
	protected $v_374_vICMS;

	// 375
	protected $v_375_ICMS45;
	protected $v_376_CST;

	// 377
	protected $v_377_ICMS60;
	protected $v_378_CST;
	protected $v_379_vBCSTRet;
	protected $v_380_vICMSSTRet;
	protected $v_381_pICMSSTRet;
	protected $v_382_vCred;

	// 383
	protected $v_383_ICMS90;
	protected $v_384_CST; 
	protected $v_385_pRedBC; 
	protected $v_386_vBC; 
	protected $v_387_pICMS; 
	protected $v_388_vICMS; 
	protected $v_389_vCred; 

	// 390
	protected $v_390_ICMSOutraUF;
	protected $v_391_CST;
	protected $v_392_pRedBCOutraUF;
	protected $v_393_vBCOutraUF;
	protected $v_394_pICMSOutraUF;
	protected $v_395_vICMSOutraUF;

	// 396
	protected $v_396_ICMSSN;
	protected $v_397_indSN;

	
	
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