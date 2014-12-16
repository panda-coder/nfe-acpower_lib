<?php

require_once("CTeRules.php");

class CTePHP_6 extends CTeRules { 
	private $dom;
	private $arr_nodes = array();
	public	$parent;
	
	function __construct($obj,$skip_validation) {
		$this->skip_validation = $skip_validation;
		$this->dom = $obj;
		$this->fragment = $this->dom->createDocumentFragment();
		$this->setDomain();
		$this->setRegExp();
	}
	
	function __destruct() { }	
	
	
	// 298 -------------------------------------------------------------------------------------------
	public function set_299_tpDoc  ($param) { 
		if ($this->validateDomain("set_299_tpDoc",$param,"D24")) {								// D24
			$this->arr_nodes[298][299] = $this->dom->createElement("tpDoc",$param);				// 299
		}
	}
	public function set_300_serie  ($param) { 
		if ($this->validateRegExp("set_300_serie",$param,"ER32")) { 							// ER32
			$this->arr_nodes[298][300] = $this->dom->createElement("serie",$param);				// 300
		}
	}
	public function set_301_subser  ($param) { 
		if ($this->validateRegExp("set_301_subser",$param,"ER32")) { 							// ER32
			$this->arr_nodes[298][301] = $this->dom->createElement("subser",$param);			// 301
		}
	}
	public function set_302_nDoc  ($param) { 
		if ($this->validateRegExp("set_302_nDoc",$param,"ER39")) { 								// ER39
			$this->arr_nodes[298][302] = $this->dom->createElement("nDoc",$param);				// 302
		}
	}
	public function set_303_dEmi  ($param) { 
		if ($this->validateRegExp("set_303_dEmi",$param,"ER9")) { 								// ER9
			$this->arr_nodes[298][303] = $this->dom->createElement("dEmi",$param);				// 303
		}
	}
	// 298 -------------------------------------------------------------------------------------------
	
	
	// 304 -------------------------------------------------------------------------------------------
	public function set_305_chave  ($param) { 
		if ($this->validateRegExp("set_305_chave",$param,"ER3")) { 								// ER3
			$this->arr_nodes[304][305] = $this->dom->createElement("chave",$param);				// 305
		}
	}
	// 304 -------------------------------------------------------------------------------------------
	
	
	public function getNodes() {
		ksort($this->arr_nodes);
		return $this->arr_nodes;
	}
}


?>