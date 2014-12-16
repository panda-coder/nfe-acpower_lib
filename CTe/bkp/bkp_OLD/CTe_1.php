<?php

require_once("CTeRules.php");

class CTePHP_1 extends CTeRules { 
	private $dom;
	private	$fragment;
	
	// 1
	protected $v_1_infCte;
	protected $v_2_versao;
	protected $v_3_Id;
	protected $v_4_ide; 
	protected $v_59_compl; 
	protected $v_112_rem;
	protected $v_167_exped; 
	protected $v_185_receb;
	protected $v_203_dest; 
	protected $v_233_vPrest; 
	protected $v_239_imp; 
	protected $v_276_infCTeNorm; 
	protected $v_355_infCteComp;
	protected $v_399_infCteAnu;
	

	function __construct($obj,$skip_validation) {
		$this->skip_validation = $skip_validation;
		$this->dom = $obj;
		$this->fragment = $this->dom->createDocumentFragment();
		$this->setDomain();
		$this->setRegExp();
	}
	
	function __destruct() { }	
	
	
	public function set_4_ide  () { 
		$this->v_4_ide = $this->dom->createElement("ide");										// 4
		$this->v_1_infCte = 1;
	}
	public function set_59_compl  () { 
		$this->v_59_compl	 = $this->dom->createElement("compl");								// 59
		$this->v_1_infCte = 1;
	}
	public function set_112_rem  () { 
		$this->v_112_rem	 = $this->dom->createElement("rem");								// 112
		$this->v_1_infCte = 1;
	}
	public function set_167_exped  () { 
		$this->v_167_exped = $this->dom->createElement("exped");								// 167
		$this->v_1_infCte = 1;
	}
	public function set_185_receb  () { 
		$this->v_185_receb = $this->dom->createElement("receb");								// 185
		$this->v_1_infCte = 1;
	}
	public function set_203_dest  () { 
		$this->v_203_dest	 = $this->dom->createElement("dest");								// 203
		$this->v_1_infCte = 1;
	}
	public function set_233_vPrest  () { 
		$this->v_233_vPrest = $this->dom->createElement("vPrest");								// 233
		$this->v_1_infCte = 1;
	}
	public function set_239_imp  () { 
		$this->v_239_imp	 = $this->dom->createElement("imp");								// 239
		$this->v_1_infCte = 1;
	}
	public function set_276_infCTeNorm  () { 
		$this->v_276_infCTeNorm	= $this->dom->createElement("infCTeNorm");						// 276 - CONDICIONAL
		$this->v_1_infCte = 1;
	}
	public function set_355_infCteComp  () { 
		$this->v_355_infCteComp	= $this->dom->createElement("infCteComp");						// 355 - CONDICIONAL
		$this->v_1_infCte = 1;
	}
	public function set_399_infCteAnu  () { 	
		$this->v_399_infCteAnu	= $this->dom->createElement("infCteAnu");						// 399 - CONDICIONAL
		$this->v_1_infCte = 1;
	}
	
	private function add_1_infCte() {
		$this->fragment->appendChild($this->v_4_ide);
		$this->fragment->appendChild($this->v_59_compl);
		$this->fragment->appendChild($this->v_112_rem);
		$this->fragment->appendChild($this->v_167_exped);
		$this->fragment->appendChild($this->v_185_receb);
		$this->fragment->appendChild($this->v_203_dest);
		$this->fragment->appendChild($this->v_233_vPrest);
		$this->fragment->appendChild($this->v_239_imp);
		$this->fragment->appendChild($this->v_276_infCTeNorm);
		$this->fragment->appendChild($this->v_355_infCteComp);
		$this->fragment->appendChild($this->v_399_infCteAnu);
	}
	
	public function allElements() {
		if ($this->v_1_infCte) { $this->add_1_infCte(); }
		return $this->fragment;
	}
}


$dom = new DOMDocument('1.0', 'UTF-8');
$dom->formatOutput = true;
$dom->preserveWhiteSpace = false;
$infCte = $dom->createElement("infCte");

for ($i=0;$i<10;$i++) {
	$teste = new CTePHP_1($dom,1);
	$teste->set_4_ide();
	$teste->set_59_compl();
	$teste->set_112_rem();
	$teste->set_167_exped();
	$teste->set_185_receb();
	$teste->set_203_dest();
	$teste->set_233_vPrest();
	$teste->set_239_imp();
	$teste->set_276_infCTeNorm();
	$teste->set_355_infCteComp();
	$teste->set_399_infCteAnu();
	$infCte->appendChild($teste->allElements());
	unset($teste);
}

$dom->appendChild($infCte);
$dom->saveXML();
$dom->save("teste.xml");

?>