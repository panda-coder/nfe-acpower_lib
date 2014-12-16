<?php

class CTePHP_1_infCte {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 1;
		$this->tipo = 'G';
		$this->name = 'infCte';
		$this->value = $param;
		$this->pai = 0;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }

	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_2_versao {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 2;
		$this->tipo = 'A';
		$this->name = 'versao';
		$this->pai = 1;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_3_Id {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 3;
		$this->tipo = 'A';
		$this->name = 'Id';
		$this->pai = 1;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_4_ide {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 4;
		$this->tipo = 'G';
		$this->name = 'ide';
		$this->value = $param;
		$this->pai = 1;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_5_cUF {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 5;
		$this->tipo = 'E';
		$this->name = 'cUF';
		$this->pai = 4;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_6_cCT {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 6;
		$this->tipo = 'E';
		$this->name = 'cCT';
		$this->pai = 4;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_7_CFOP {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 7;
		$this->tipo = 'E';
		$this->name = 'CFOP';
		$this->pai = 4;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_8_natOp {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 8;
		$this->tipo = 'E';
		$this->name = 'natOp';
		$this->pai = 4;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_9_forPag {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 9;
		$this->tipo = 'E';
		$this->name = 'forPag';
		$this->pai = 4;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_10_mod {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 10;
		$this->tipo = 'E';
		$this->name = 'mod';
		$this->pai = 4;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_11_serie {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 11;
		$this->tipo = 'E';
		$this->name = 'serie';
		$this->pai = 4;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_12_nCT {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 12;
		$this->tipo = 'E';
		$this->name = 'nCT';
		$this->pai = 4;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_13_dhEmi {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 13;
		$this->tipo = 'E';
		$this->name = 'dhEmi';
		$this->pai = 4;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_14_tpImp {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 14;
		$this->tipo = 'E';
		$this->name = 'tpImp';
		$this->pai = 4;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_15_tpEmis {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 15;
		$this->tipo = 'E';
		$this->name = 'tpEmis';
		$this->pai = 4;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_16_cDV {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 16;
		$this->tipo = 'E';
		$this->name = 'cDV';
		$this->pai = 4;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_17_tpAmb {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 17;
		$this->tipo = 'E';
		$this->name = 'tpAmb';
		$this->pai = 4;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_18_tpCTe {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 18;
		$this->tipo = 'E';
		$this->name = 'tpCTe';
		$this->pai = 4;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_19_procEmi {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 19;
		$this->tipo = 'E';
		$this->name = 'procEmi';
		$this->pai = 4;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_20_verProc {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 20;
		$this->tipo = 'E';
		$this->name = 'verProc';
		$this->pai = 4;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_21_refCTE {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 21;
		$this->tipo = 'E';
		$this->name = 'refCTE';
		$this->pai = 4;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_22_cMunEnv {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 22;
		$this->tipo = 'E';
		$this->name = 'cMunEnv';
		$this->pai = 4;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_23_xMunEnv {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 23;
		$this->tipo = 'E';
		$this->name = 'xMunEnv';
		$this->pai = 4;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_24_UFEnv {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 24;
		$this->tipo = 'E';
		$this->name = 'UFEnv';
		$this->pai = 4;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_25_modal {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 25;
		$this->tipo = 'E';
		$this->name = 'modal';
		$this->pai = 4;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_26_tpServ {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 26;
		$this->tipo = 'E';
		$this->name = 'tpServ';
		$this->pai = 4;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_27_cMunIni {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 27;
		$this->tipo = 'E';
		$this->name = 'cMunIni';
		$this->pai = 4;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_28_xMunIni {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 28;
		$this->tipo = 'E';
		$this->name = 'xMunIni';
		$this->pai = 4;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_29_UFIni {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 29;
		$this->tipo = 'E';
		$this->name = 'UFIni';
		$this->pai = 4;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_30_cMunFim {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 30;
		$this->tipo = 'E';
		$this->name = 'cMunFim';
		$this->pai = 4;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_31_xMunFim {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 31;
		$this->tipo = 'E';
		$this->name = 'xMunFim';
		$this->pai = 4;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_32_UFFim {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 32;
		$this->tipo = 'E';
		$this->name = 'UFFim';
		$this->pai = 4;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_33_retira {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 33;
		$this->tipo = 'E';
		$this->name = 'retira';
		$this->pai = 4;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_34_xDetRetira {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 34;
		$this->tipo = 'E';
		$this->name = 'xDetRetira';
		$this->pai = 4;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_35_toma03 {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 35;
		$this->tipo = 'G';
		$this->name = 'toma03';
		$this->value = $param;
		$this->pai = 4;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_36_toma {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 36;
		$this->tipo = 'E';
		$this->name = 'toma';
		$this->pai = 35;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_37_toma4 {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 37;
		$this->tipo = 'G';
		$this->name = 'toma4';
		$this->value = $param;
		$this->pai = 4;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_38_toma {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 38;
		$this->tipo = 'E';
		$this->name = 'toma';
		$this->pai = 37;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_39_CNPJ {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 39;
		$this->tipo = 'E';
		$this->name = 'CNPJ';
		$this->pai = 37;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_40_CPF {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 40;
		$this->tipo = 'E';
		$this->name = 'CPF';
		$this->pai = 37;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_41_IE {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 41;
		$this->tipo = 'E';
		$this->name = 'IE';
		$this->pai = 37;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_42_xNome {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 42;
		$this->tipo = 'E';
		$this->name = 'xNome';
		$this->pai = 37;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_43_xFant {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 43;
		$this->tipo = 'E';
		$this->name = 'xFant';
		$this->pai = 37;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_44_fone {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 44;
		$this->tipo = 'E';
		$this->name = 'fone';
		$this->pai = 37;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_45_enderToma {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 45;
		$this->tipo = 'G';
		$this->name = 'enderToma';
		$this->value = $param;
		$this->pai = 37;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_46_xLgr {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 46;
		$this->tipo = 'E';
		$this->name = 'xLgr';
		$this->pai = 45;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_47_nro {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 47;
		$this->tipo = 'E';
		$this->name = 'nro';
		$this->pai = 45;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_48_xCpl {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 48;
		$this->tipo = 'E';
		$this->name = 'xCpl';
		$this->pai = 45;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_49_xBairro {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 49;
		$this->tipo = 'E';
		$this->name = 'xBairro';
		$this->pai = 45;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_50_cMun {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 50;
		$this->tipo = 'E';
		$this->name = 'cMun';
		$this->pai = 45;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_51_xMun {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 51;
		$this->tipo = 'E';
		$this->name = 'xMun';
		$this->pai = 45;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_52_CEP {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 52;
		$this->tipo = 'E';
		$this->name = 'CEP';
		$this->pai = 45;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_53_UF {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 53;
		$this->tipo = 'E';
		$this->name = 'UF';
		$this->pai = 45;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_54_cPais {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 54;
		$this->tipo = 'E';
		$this->name = 'cPais';
		$this->pai = 45;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_55_xPais {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 55;
		$this->tipo = 'E';
		$this->name = 'xPais';
		$this->pai = 45;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_56_email {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 56;
		$this->tipo = 'E';
		$this->name = 'email';
		$this->pai = 37;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_57_dhCont {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 57;
		$this->tipo = 'E';
		$this->name = 'dhCont';
		$this->pai = 4;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_58_xJust {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 58;
		$this->tipo = 'E';
		$this->name = 'xJust';
		$this->pai = 4;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_59_compl {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 59;
		$this->tipo = 'G';
		$this->name = 'compl';
		$this->value = $param;
		$this->pai = 1;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_60_xCaracAd {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 60;
		$this->tipo = 'E';
		$this->name = 'xCaracAd';
		$this->pai = 59;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_61_xCaracSer {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 61;
		$this->tipo = 'E';
		$this->name = 'xCaracSer';
		$this->pai = 59;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_62_xEmi {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 62;
		$this->tipo = 'E';
		$this->name = 'xEmi';
		$this->pai = 59;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_63_fluxo {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 63;
		$this->tipo = 'G';
		$this->name = 'fluxo';
		$this->value = $param;
		$this->pai = 59;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_64_xOrig {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 64;
		$this->tipo = 'E';
		$this->name = 'xOrig';
		$this->pai = 63;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_65_pass {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 65;
		$this->tipo = 'G';
		$this->name = 'pass';
		$this->value = $param;
		$this->pai = 63;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_66_xPass {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 66;
		$this->tipo = 'E';
		$this->name = 'xPass';
		$this->pai = 65;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_67_xDest {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 67;
		$this->tipo = 'E';
		$this->name = 'xDest';
		$this->pai = 63;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_68_xRota {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 68;
		$this->tipo = 'E';
		$this->name = 'xRota';
		$this->pai = 63;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_69_Entrega {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 69;
		$this->tipo = 'G';
		$this->name = 'Entrega';
		$this->value = $param;
		$this->pai = 59;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_70_semData {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 70;
		$this->tipo = 'G';
		$this->name = 'semData';
		$this->value = $param;
		$this->pai = 69;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_71_tpPer {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 71;
		$this->tipo = 'E';
		$this->name = 'tpPer';
		$this->pai = 70;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_72_comData {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 72;
		$this->tipo = 'G';
		$this->name = 'comData';
		$this->value = $param;
		$this->pai = 69;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_73_tpPer {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 73;
		$this->tipo = 'E';
		$this->name = 'tpPer';
		$this->pai = 72;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_74_dProg {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 74;
		$this->tipo = 'E';
		$this->name = 'dProg';
		$this->pai = 72;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_75_noPeriodo {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 75;
		$this->tipo = 'G';
		$this->name = 'noPeriodo';
		$this->value = $param;
		$this->pai = 69;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_76_tpPer {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 76;
		$this->tipo = 'E';
		$this->name = 'tpPer';
		$this->pai = 75;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_77_dIni {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 77;
		$this->tipo = 'E';
		$this->name = 'dIni';
		$this->pai = 75;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_78_dFim {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 78;
		$this->tipo = 'E';
		$this->name = 'dFim';
		$this->pai = 75;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_79_semHora {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 79;
		$this->tipo = 'G';
		$this->name = 'semHora';
		$this->value = $param;
		$this->pai = 69;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_80_tpHor {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 80;
		$this->tipo = 'E';
		$this->name = 'tpHor';
		$this->pai = 79;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_81_comHora {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 81;
		$this->tipo = 'G';
		$this->name = 'comHora';
		$this->value = $param;
		$this->pai = 69;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_82_tpHor {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 82;
		$this->tipo = 'E';
		$this->name = 'tpHor';
		$this->pai = 81;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_83_hProg {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 83;
		$this->tipo = 'E';
		$this->name = 'hProg';
		$this->pai = 81;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_84_noInter {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 84;
		$this->tipo = 'G';
		$this->name = 'noInter';
		$this->value = $param;
		$this->pai = 69;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_85_tpHor {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 85;
		$this->tipo = 'E';
		$this->name = 'tpHor';
		$this->pai = 84;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_86_hIni {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 86;
		$this->tipo = 'E';
		$this->name = 'hIni';
		$this->pai = 84;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_87_hFim {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 87;
		$this->tipo = 'E';
		$this->name = 'hFim';
		$this->pai = 84;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_88_origCalc {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 88;
		$this->tipo = 'E';
		$this->name = 'origCalc';
		$this->pai = 59;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_89_destCalc {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 89;
		$this->tipo = 'E';
		$this->name = 'destCalc';
		$this->pai = 59;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_90_xObs {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 90;
		$this->tipo = 'E';
		$this->name = 'xObs';
		$this->pai = 59;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_91_ObsCont {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 91;
		$this->tipo = 'G';
		$this->name = 'ObsCont';
		$this->value = $param;
		$this->pai = 59;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_92_xCampo {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 92;
		$this->tipo = 'A';
		$this->name = 'xCampo';
		$this->pai = 91;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_93_xTexto {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 93;
		$this->tipo = 'E';
		$this->name = 'xTexto';
		$this->pai = 91;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_94_ObsFisco {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 94;
		$this->tipo = 'G';
		$this->name = 'ObsFisco';
		$this->value = $param;
		$this->pai = 59;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_95_xCampo {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 95;
		$this->tipo = 'A';
		$this->name = 'xCampo';
		$this->pai = 94;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_96_xTexto {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 96;
		$this->tipo = 'E';
		$this->name = 'xTexto';
		$this->pai = 94;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_97_emit {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 97;
		$this->tipo = 'G';
		$this->name = 'emit';
		$this->value = $param;
		$this->pai = 1;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_98_CNPJ {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 98;
		$this->tipo = 'E';
		$this->name = 'CNPJ';
		$this->pai = 97;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_99_IE {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 99;
		$this->tipo = 'E';
		$this->name = 'IE';
		$this->pai = 97;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_100_xNome {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 100;
		$this->tipo = 'E';
		$this->name = 'xNome';
		$this->pai = 97;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_101_xFant {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 101;
		$this->tipo = 'E';
		$this->name = 'xFant';
		$this->pai = 97;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_102_enderEmit {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 102;
		$this->tipo = 'G';
		$this->name = 'enderEmit';
		$this->value = $param;
		$this->pai = 97;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_103_xLgr {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 103;
		$this->tipo = 'E';
		$this->name = 'xLgr';
		$this->pai = 102;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_104_nro {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 104;
		$this->tipo = 'E';
		$this->name = 'nro';
		$this->pai = 102;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_105_xCpl {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 105;
		$this->tipo = 'E';
		$this->name = 'xCpl';
		$this->pai = 102;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_106_xBairro {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 106;
		$this->tipo = 'E';
		$this->name = 'xBairro';
		$this->pai = 102;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_107_cMun {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 107;
		$this->tipo = 'E';
		$this->name = 'cMun';
		$this->pai = 102;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_108_xMun {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 108;
		$this->tipo = 'E';
		$this->name = 'xMun';
		$this->pai = 102;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_109_CEP {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 109;
		$this->tipo = 'E';
		$this->name = 'CEP';
		$this->pai = 102;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_110_UF {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 110;
		$this->tipo = 'E';
		$this->name = 'UF';
		$this->pai = 102;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_111_fone {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 111;
		$this->tipo = 'E';
		$this->name = 'fone';
		$this->pai = 102;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_112_rem {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 112;
		$this->tipo = 'G';
		$this->name = 'rem';
		$this->value = $param;
		$this->pai = 1;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_113_CNPJ {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 113;
		$this->tipo = 'E';
		$this->name = 'CNPJ';
		$this->pai = 112;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_114_CPF {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 114;
		$this->tipo = 'E';
		$this->name = 'CPF';
		$this->pai = 112;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_115_IE {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 115;
		$this->tipo = 'E';
		$this->name = 'IE';
		$this->pai = 112;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_116_xNome {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 116;
		$this->tipo = 'E';
		$this->name = 'xNome';
		$this->pai = 112;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_117_xFant {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 117;
		$this->tipo = 'E';
		$this->name = 'xFant';
		$this->pai = 112;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_118_fone {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 118;
		$this->tipo = 'E';
		$this->name = 'fone';
		$this->pai = 112;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_119_enderReme {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 119;
		$this->tipo = 'G';
		$this->name = 'enderReme';
		$this->value = $param;
		$this->pai = 112;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_120_xLgr {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 120;
		$this->tipo = 'E';
		$this->name = 'xLgr';
		$this->pai = 119;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_121_nro {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 121;
		$this->tipo = 'E';
		$this->name = 'nro';
		$this->pai = 119;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_122_xCpl {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 122;
		$this->tipo = 'E';
		$this->name = 'xCpl';
		$this->pai = 119;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_123_xBairro {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 123;
		$this->tipo = 'E';
		$this->name = 'xBairro';
		$this->pai = 119;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_124_cMun {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 124;
		$this->tipo = 'E';
		$this->name = 'cMun';
		$this->pai = 119;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_125_xMun {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 125;
		$this->tipo = 'E';
		$this->name = 'xMun';
		$this->pai = 119;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_126_CEP {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 126;
		$this->tipo = 'E';
		$this->name = 'CEP';
		$this->pai = 119;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_127_UF {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 127;
		$this->tipo = 'E';
		$this->name = 'UF';
		$this->pai = 119;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_128_cPais {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 128;
		$this->tipo = 'E';
		$this->name = 'cPais';
		$this->pai = 119;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_129_xPais {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 129;
		$this->tipo = 'E';
		$this->name = 'xPais';
		$this->pai = 119;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_130_email {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 130;
		$this->tipo = 'E';
		$this->name = 'email';
		$this->pai = 112;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_131_infNF {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 131;
		$this->tipo = 'G';
		$this->name = 'infNF';
		$this->value = $param;
		$this->pai = 112;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_132_nRoma {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 132;
		$this->tipo = 'E';
		$this->name = 'nRoma';
		$this->pai = 131;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_133_nPed {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 133;
		$this->tipo = 'E';
		$this->name = 'nPed';
		$this->pai = 131;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_134_mod {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 134;
		$this->tipo = 'E';
		$this->name = 'mod';
		$this->pai = 131;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_135_serie {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 135;
		$this->tipo = 'E';
		$this->name = 'serie';
		$this->pai = 131;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_136_nDoc {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 136;
		$this->tipo = 'E';
		$this->name = 'nDoc';
		$this->pai = 131;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_137_dEmi {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 137;
		$this->tipo = 'E';
		$this->name = 'dEmi';
		$this->pai = 131;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_138_vBC {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 138;
		$this->tipo = 'E';
		$this->name = 'vBC';
		$this->pai = 131;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_139_vICMS {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 139;
		$this->tipo = 'E';
		$this->name = 'vICMS';
		$this->pai = 131;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_140_vBCST {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 140;
		$this->tipo = 'E';
		$this->name = 'vBCST';
		$this->pai = 131;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_141_vST {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 141;
		$this->tipo = 'E';
		$this->name = 'vST';
		$this->pai = 131;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_142_vProd {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 142;
		$this->tipo = 'E';
		$this->name = 'vProd';
		$this->pai = 131;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_143_vNF {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 143;
		$this->tipo = 'E';
		$this->name = 'vNF';
		$this->pai = 131;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_144_nCFOP {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 144;
		$this->tipo = 'E';
		$this->name = 'nCFOP';
		$this->pai = 131;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_145_nPeso {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 145;
		$this->tipo = 'E';
		$this->name = 'nPeso';
		$this->pai = 131;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_146_PIN {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 146;
		$this->tipo = 'E';
		$this->name = 'PIN';
		$this->pai = 131;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_147_locRet {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 147;
		$this->tipo = 'G';
		$this->name = 'locRet';
		$this->value = $param;
		$this->pai = 131;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_148_CNPJ {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 148;
		$this->tipo = 'E';
		$this->name = 'CNPJ';
		$this->pai = 147;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_149_CPF {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 149;
		$this->tipo = 'E';
		$this->name = 'CPF';
		$this->pai = 147;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_150_xNome {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 150;
		$this->tipo = 'E';
		$this->name = 'xNome';
		$this->pai = 147;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_151_xLgr {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 151;
		$this->tipo = 'E';
		$this->name = 'xLgr';
		$this->pai = 147;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_152_Nro {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 152;
		$this->tipo = 'E';
		$this->name = 'Nro';
		$this->pai = 147;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_153_xCpl {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 153;
		$this->tipo = 'E';
		$this->name = 'xCpl';
		$this->pai = 147;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_154_xBairro {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 154;
		$this->tipo = 'E';
		$this->name = 'xBairro';
		$this->pai = 147;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_155_cMun {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 155;
		$this->tipo = 'E';
		$this->name = 'cMun';
		$this->pai = 147;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_156_xMun {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 156;
		$this->tipo = 'E';
		$this->name = 'xMun';
		$this->pai = 147;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_157_UF {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 157;
		$this->tipo = 'E';
		$this->name = 'UF';
		$this->pai = 147;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_158_infNFe {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 158;
		$this->tipo = 'G';
		$this->name = 'infNFe';
		$this->value = $param;
		$this->pai = 112;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_159_Chave {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 159;
		$this->tipo = 'E';
		$this->name = 'Chave';
		$this->pai = 158;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_160_PIN {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 160;
		$this->tipo = 'E';
		$this->name = 'PIN';
		$this->pai = 158;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_161_infOutros {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 161;
		$this->tipo = 'G';
		$this->name = 'infOutros';
		$this->value = $param;
		$this->pai = 112;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_162_tpDoc {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 162;
		$this->tipo = 'E';
		$this->name = 'tpDoc';
		$this->pai = 161;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_163_descOutros {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 163;
		$this->tipo = 'E';
		$this->name = 'descOutros';
		$this->pai = 161;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_164_nDoc {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 164;
		$this->tipo = 'E';
		$this->name = 'nDoc';
		$this->pai = 161;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_165_dEmi {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 165;
		$this->tipo = 'E';
		$this->name = 'dEmi';
		$this->pai = 161;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_166_vDocFisc {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 166;
		$this->tipo = 'E';
		$this->name = 'vDocFisc';
		$this->pai = 161;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_167_exped {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 167;
		$this->tipo = 'G';
		$this->name = 'exped';
		$this->value = $param;
		$this->pai = 1;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_168_CNPJ {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 168;
		$this->tipo = 'E';
		$this->name = 'CNPJ';
		$this->pai = 167;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_169_CPF {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 169;
		$this->tipo = 'E';
		$this->name = 'CPF';
		$this->pai = 167;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_170_IE {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 170;
		$this->tipo = 'E';
		$this->name = 'IE';
		$this->pai = 167;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_171_xNome {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 171;
		$this->tipo = 'E';
		$this->name = 'xNome';
		$this->pai = 167;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_172_fone {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 172;
		$this->tipo = 'E';
		$this->name = 'fone';
		$this->pai = 167;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_173_enderExped {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 173;
		$this->tipo = 'G';
		$this->name = 'enderExped';
		$this->value = $param;
		$this->pai = 167;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_174_xLgr {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 174;
		$this->tipo = 'E';
		$this->name = 'xLgr';
		$this->pai = 173;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_175_nro {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 175;
		$this->tipo = 'E';
		$this->name = 'nro';
		$this->pai = 173;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_176_xCpl {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 176;
		$this->tipo = 'E';
		$this->name = 'xCpl';
		$this->pai = 173;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_177_xBairro {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 177;
		$this->tipo = 'E';
		$this->name = 'xBairro';
		$this->pai = 173;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_178_cMun {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 178;
		$this->tipo = 'E';
		$this->name = 'cMun';
		$this->pai = 173;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_179_xMun {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 179;
		$this->tipo = 'E';
		$this->name = 'xMun';
		$this->pai = 173;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_180_CEP {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 180;
		$this->tipo = 'E';
		$this->name = 'CEP';
		$this->pai = 173;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_181_UF {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 181;
		$this->tipo = 'E';
		$this->name = 'UF';
		$this->pai = 173;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_182_cPais {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 182;
		$this->tipo = 'E';
		$this->name = 'cPais';
		$this->pai = 173;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_183_xPais {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 183;
		$this->tipo = 'E';
		$this->name = 'xPais';
		$this->pai = 173;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_184_email {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 184;
		$this->tipo = 'E';
		$this->name = 'email';
		$this->pai = 167;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_185_receb {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 185;
		$this->tipo = 'G';
		$this->name = 'receb';
		$this->value = $param;
		$this->pai = 1;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_186_CNPJ {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 186;
		$this->tipo = 'E';
		$this->name = 'CNPJ';
		$this->pai = 185;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_187_CPF {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 187;
		$this->tipo = 'E';
		$this->name = 'CPF';
		$this->pai = 185;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_188_IE {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 188;
		$this->tipo = 'E';
		$this->name = 'IE';
		$this->pai = 185;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_189_xNome {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 189;
		$this->tipo = 'E';
		$this->name = 'xNome';
		$this->pai = 185;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_190_fone {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 190;
		$this->tipo = 'E';
		$this->name = 'fone';
		$this->pai = 185;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_191_enderReceb {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 191;
		$this->tipo = 'G';
		$this->name = 'enderReceb';
		$this->value = $param;
		$this->pai = 185;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_192_xLgr {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 192;
		$this->tipo = 'E';
		$this->name = 'xLgr';
		$this->pai = 191;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_193_nro {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 193;
		$this->tipo = 'E';
		$this->name = 'nro';
		$this->pai = 191;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_194_xCpl {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 194;
		$this->tipo = 'E';
		$this->name = 'xCpl';
		$this->pai = 191;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_195_xBairro {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 195;
		$this->tipo = 'E';
		$this->name = 'xBairro';
		$this->pai = 191;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_196_cMun {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 196;
		$this->tipo = 'E';
		$this->name = 'cMun';
		$this->pai = 191;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_197_xMun {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 197;
		$this->tipo = 'E';
		$this->name = 'xMun';
		$this->pai = 191;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_198_CEP {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 198;
		$this->tipo = 'E';
		$this->name = 'CEP';
		$this->pai = 191;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_199_UF {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 199;
		$this->tipo = 'E';
		$this->name = 'UF';
		$this->pai = 191;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_200_cPais {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 200;
		$this->tipo = 'E';
		$this->name = 'cPais';
		$this->pai = 191;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_201_xPais {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 201;
		$this->tipo = 'E';
		$this->name = 'xPais';
		$this->pai = 191;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_202_email {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 202;
		$this->tipo = 'E';
		$this->name = 'email';
		$this->pai = 185;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_203_dest {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 203;
		$this->tipo = 'G';
		$this->name = 'dest';
		$this->value = $param;
		$this->pai = 1;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_204_CNPJ {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 204;
		$this->tipo = 'E';
		$this->name = 'CNPJ';
		$this->pai = 203;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_205_CPF {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 205;
		$this->tipo = 'E';
		$this->name = 'CPF';
		$this->pai = 203;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_206_IE {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 206;
		$this->tipo = 'E';
		$this->name = 'IE';
		$this->pai = 203;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_207_xNome {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 207;
		$this->tipo = 'E';
		$this->name = 'xNome';
		$this->pai = 203;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_208_fone {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 208;
		$this->tipo = 'E';
		$this->name = 'fone';
		$this->pai = 203;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_209_ISUF {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 209;
		$this->tipo = 'E';
		$this->name = 'ISUF';
		$this->pai = 203;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_210_enderDest {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 210;
		$this->tipo = 'G';
		$this->name = 'enderDest';
		$this->value = $param;
		$this->pai = 203;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_211_xLgr {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 211;
		$this->tipo = 'E';
		$this->name = 'xLgr';
		$this->pai = 210;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_212_nro {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 212;
		$this->tipo = 'E';
		$this->name = 'nro';
		$this->pai = 210;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_213_xCpl {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 213;
		$this->tipo = 'E';
		$this->name = 'xCpl';
		$this->pai = 210;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_214_xBairro {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 214;
		$this->tipo = 'E';
		$this->name = 'xBairro';
		$this->pai = 210;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_215_cMun {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 215;
		$this->tipo = 'E';
		$this->name = 'cMun';
		$this->pai = 210;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_216_xMun {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 216;
		$this->tipo = 'E';
		$this->name = 'xMun';
		$this->pai = 210;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_217_CEP {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 217;
		$this->tipo = 'E';
		$this->name = 'CEP';
		$this->pai = 210;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_218_UF {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 218;
		$this->tipo = 'E';
		$this->name = 'UF';
		$this->pai = 210;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_219_cPais {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 219;
		$this->tipo = 'E';
		$this->name = 'cPais';
		$this->pai = 210;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_220_xPais {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 220;
		$this->tipo = 'E';
		$this->name = 'xPais';
		$this->pai = 210;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_221_email {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 221;
		$this->tipo = 'E';
		$this->name = 'email';
		$this->pai = 203;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_222_locEnt {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 222;
		$this->tipo = 'G';
		$this->name = 'locEnt';
		$this->value = $param;
		$this->pai = 203;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_223_CNPJ {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 223;
		$this->tipo = 'E';
		$this->name = 'CNPJ';
		$this->pai = 222;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_224_CPF {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 224;
		$this->tipo = 'E';
		$this->name = 'CPF';
		$this->pai = 222;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_225_xNome {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 225;
		$this->tipo = 'E';
		$this->name = 'xNome';
		$this->pai = 222;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_226_xLgr {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 226;
		$this->tipo = 'E';
		$this->name = 'xLgr';
		$this->pai = 222;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_227_nro {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 227;
		$this->tipo = 'E';
		$this->name = 'nro';
		$this->pai = 222;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_228_xCpl {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 228;
		$this->tipo = 'E';
		$this->name = 'xCpl';
		$this->pai = 222;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_229_xBairro {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 229;
		$this->tipo = 'E';
		$this->name = 'xBairro';
		$this->pai = 222;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_230_cMun {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 230;
		$this->tipo = 'E';
		$this->name = 'cMun';
		$this->pai = 222;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_231_xMun {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 231;
		$this->tipo = 'E';
		$this->name = 'xMun';
		$this->pai = 222;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_232_UF {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 232;
		$this->tipo = 'E';
		$this->name = 'UF';
		$this->pai = 222;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_233_vPrest {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 233;
		$this->tipo = 'G';
		$this->name = 'vPrest';
		$this->value = $param;
		$this->pai = 1;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_234_vTPrest {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 234;
		$this->tipo = 'E';
		$this->name = 'vTPrest';
		$this->pai = 233;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_235_vRec {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 235;
		$this->tipo = 'E';
		$this->name = 'vRec';
		$this->pai = 233;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_236_Comp {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 236;
		$this->tipo = 'G';
		$this->name = 'Comp';
		$this->value = $param;
		$this->pai = 233;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_237_xNome {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 237;
		$this->tipo = 'E';
		$this->name = 'xNome';
		$this->pai = 236;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_238_vComp {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 238;
		$this->tipo = 'E';
		$this->name = 'vComp';
		$this->pai = 236;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_239_imp {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 239;
		$this->tipo = 'G';
		$this->name = 'imp';
		$this->value = $param;
		$this->pai = 1;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_240_ICMS {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 240;
		$this->tipo = 'G';
		$this->name = 'ICMS';
		$this->value = $param;
		$this->pai = 239;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_241_ICMS00 {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 241;
		$this->tipo = 'G';
		$this->name = 'ICMS00';
		$this->value = $param;
		$this->pai = 240;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_242_CST {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 242;
		$this->tipo = 'E';
		$this->name = 'CST';
		$this->pai = 241;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_243_vBC {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 243;
		$this->tipo = 'E';
		$this->name = 'vBC';
		$this->pai = 241;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_244_pICMS {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 244;
		$this->tipo = 'E';
		$this->name = 'pICMS';
		$this->pai = 241;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_245_vICMS {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 245;
		$this->tipo = 'E';
		$this->name = 'vICMS';
		$this->pai = 241;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_246_ICMS20 {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 246;
		$this->tipo = 'G';
		$this->name = 'ICMS20';
		$this->value = $param;
		$this->pai = 240;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_247_CST {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 247;
		$this->tipo = 'E';
		$this->name = 'CST';
		$this->pai = 246;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_248_pRedBC {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 248;
		$this->tipo = 'E';
		$this->name = 'pRedBC';
		$this->pai = 246;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_249_vBC {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 249;
		$this->tipo = 'E';
		$this->name = 'vBC';
		$this->pai = 246;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_250_pICMS {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 250;
		$this->tipo = 'E';
		$this->name = 'pICMS';
		$this->pai = 246;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_251_vICMS {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 251;
		$this->tipo = 'E';
		$this->name = 'vICMS';
		$this->pai = 246;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_252_ICMS45 {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 252;
		$this->tipo = 'G';
		$this->name = 'ICMS45';
		$this->value = $param;
		$this->pai = 240;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_253_CST {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 253;
		$this->tipo = 'E';
		$this->name = 'CST';
		$this->pai = 252;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_254_ICMS60 {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 254;
		$this->tipo = 'G';
		$this->name = 'ICMS60';
		$this->value = $param;
		$this->pai = 240;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_255_CST {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 255;
		$this->tipo = 'E';
		$this->name = 'CST';
		$this->pai = 254;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_256_vBCSTRet {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 256;
		$this->tipo = 'E';
		$this->name = 'vBCSTRet';
		$this->pai = 254;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_257_vICMSSTRet {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 257;
		$this->tipo = 'E';
		$this->name = 'vICMSSTRet';
		$this->pai = 254;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_258_pICMSSTRet {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 258;
		$this->tipo = 'E';
		$this->name = 'pICMSSTRet';
		$this->pai = 254;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_259_vCred {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 259;
		$this->tipo = 'E';
		$this->name = 'vCred';
		$this->pai = 254;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_260_ICMS90 {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 260;
		$this->tipo = 'G';
		$this->name = 'ICMS90';
		$this->value = $param;
		$this->pai = 240;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_261_CST {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 261;
		$this->tipo = 'E';
		$this->name = 'CST';
		$this->pai = 260;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_262_pRedBC {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 262;
		$this->tipo = 'E';
		$this->name = 'pRedBC';
		$this->pai = 260;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_263_vBC {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 263;
		$this->tipo = 'E';
		$this->name = 'vBC';
		$this->pai = 260;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_264_pICMS {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 264;
		$this->tipo = 'E';
		$this->name = 'pICMS';
		$this->pai = 260;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_265_vICMS {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 265;
		$this->tipo = 'E';
		$this->name = 'vICMS';
		$this->pai = 260;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_266_vCred {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 266;
		$this->tipo = 'E';
		$this->name = 'vCred';
		$this->pai = 260;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_267_ICMSOutraUF {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 267;
		$this->tipo = 'G';
		$this->name = 'ICMSOutraUF';
		$this->value = $param;
		$this->pai = 240;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_268_CST {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 268;
		$this->tipo = 'E';
		$this->name = 'CST';
		$this->pai = 267;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_269_pRedBCOutraUF {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 269;
		$this->tipo = 'E';
		$this->name = 'pRedBCOutraUF';
		$this->pai = 267;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_270_vBCOutraUF {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 270;
		$this->tipo = 'E';
		$this->name = 'vBCOutraUF';
		$this->pai = 267;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_271_pICMSOutraUF {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 271;
		$this->tipo = 'E';
		$this->name = 'pICMSOutraUF';
		$this->pai = 267;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_272_vICMSOutraUF {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 272;
		$this->tipo = 'E';
		$this->name = 'vICMSOutraUF';
		$this->pai = 267;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_273_ICMSSN {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 273;
		$this->tipo = 'G';
		$this->name = 'ICMSSN';
		$this->value = $param;
		$this->pai = 240;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_274_indSN {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 274;
		$this->tipo = 'E';
		$this->name = 'indSN';
		$this->pai = 273;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_275_infAdFisco {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 275;
		$this->tipo = 'E';
		$this->name = 'infAdFisco';
		$this->pai = 239;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_276_infCTeNorm {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 276;
		$this->tipo = 'G';
		$this->name = 'infCTeNorm';
		$this->value = $param;
		$this->pai = 1;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_277_infCarga {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 277;
		$this->tipo = 'G';
		$this->name = 'infCarga';
		$this->value = $param;
		$this->pai = 276;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_278_vCarga {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 278;
		$this->tipo = 'E';
		$this->name = 'vCarga';
		$this->pai = 277;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_279_proPred {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 279;
		$this->tipo = 'E';
		$this->name = 'proPred';
		$this->pai = 277;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_280_xOutCat {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 280;
		$this->tipo = 'E';
		$this->name = 'xOutCat';
		$this->pai = 277;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_281_infQ {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 281;
		$this->tipo = 'G';
		$this->name = 'infQ';
		$this->value = $param;
		$this->pai = 277;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_282_cUnid {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 282;
		$this->tipo = 'E';
		$this->name = 'cUnid';
		$this->pai = 281;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_283_tpMed {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 283;
		$this->tipo = 'E';
		$this->name = 'tpMed';
		$this->pai = 281;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_284_qCarga {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 284;
		$this->tipo = 'E';
		$this->name = 'qCarga';
		$this->pai = 281;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_285_contQt {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 285;
		$this->tipo = 'G';
		$this->name = 'contQt';
		$this->value = $param;
		$this->pai = 276;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_286_nCont {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 286;
		$this->tipo = 'E';
		$this->name = 'nCont';
		$this->pai = 285;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_287_lacContQt {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 287;
		$this->tipo = 'G';
		$this->name = 'lacContQt';
		$this->value = $param;
		$this->pai = 285;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_288_nLacre {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 288;
		$this->tipo = 'E';
		$this->name = 'nLacre';
		$this->pai = 287;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_289_dPrev {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 289;
		$this->tipo = 'E';
		$this->name = 'dPrev';
		$this->pai = 285;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_290_docAnt {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 290;
		$this->tipo = 'G';
		$this->name = 'docAnt';
		$this->value = $param;
		$this->pai = 276;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_291_emiDocAnt {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 291;
		$this->tipo = 'G';
		$this->name = 'emiDocAnt';
		$this->value = $param;
		$this->pai = 290;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_292_CNPJ {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 292;
		$this->tipo = 'E';
		$this->name = 'CNPJ';
		$this->pai = 291;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_293_CPF {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 293;
		$this->tipo = 'E';
		$this->name = 'CPF';
		$this->pai = 291;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_294_IE {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 294;
		$this->tipo = 'E';
		$this->name = 'IE';
		$this->pai = 291;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_295_UF {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 295;
		$this->tipo = 'E';
		$this->name = 'UF';
		$this->pai = 291;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_296_xNome {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 296;
		$this->tipo = 'E';
		$this->name = 'xNome';
		$this->pai = 291;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_297_idDocAnt {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 297;
		$this->tipo = 'G';
		$this->name = 'idDocAnt';
		$this->value = $param;
		$this->pai = 291;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_298_idDocAntPap {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 298;
		$this->tipo = 'G';
		$this->name = 'idDocAntPap';
		$this->value = $param;
		$this->pai = 297;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_299_tpDoc {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 299;
		$this->tipo = 'E';
		$this->name = 'tpDoc';
		$this->pai = 298;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_300_serie {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 300;
		$this->tipo = 'E';
		$this->name = 'serie';
		$this->pai = 298;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_301_subser {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 301;
		$this->tipo = 'E';
		$this->name = 'subser';
		$this->pai = 298;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_302_nDoc {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 302;
		$this->tipo = 'E';
		$this->name = 'nDoc';
		$this->pai = 298;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_303_dEmi {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 303;
		$this->tipo = 'E';
		$this->name = 'dEmi';
		$this->pai = 298;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_304_idDocAntEle {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 304;
		$this->tipo = 'G';
		$this->name = 'idDocAntEle';
		$this->value = $param;
		$this->pai = 297;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_305_chave {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 305;
		$this->tipo = 'E';
		$this->name = 'chave';
		$this->pai = 304;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_306_seg {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 306;
		$this->tipo = 'G';
		$this->name = 'seg';
		$this->value = $param;
		$this->pai = 276;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_307_respSeg {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 307;
		$this->tipo = 'E';
		$this->name = 'respSeg';
		$this->pai = 306;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_308_xSeg {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 308;
		$this->tipo = 'E';
		$this->name = 'xSeg';
		$this->pai = 306;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_309_nApol {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 309;
		$this->tipo = 'E';
		$this->name = 'nApol';
		$this->pai = 306;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_310_nAver {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 310;
		$this->tipo = 'E';
		$this->name = 'nAver';
		$this->pai = 306;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_311_vCarga {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 311;
		$this->tipo = 'E';
		$this->name = 'vCarga';
		$this->pai = 306;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_312_infModal {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 312;
		$this->tipo = 'G';
		$this->name = 'infModal';
		$this->value = $param;
		$this->pai = 276;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_313_versaoModal {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 313;
		$this->tipo = 'A';
		$this->name = 'versaoModal';
		$this->pai = 312;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_314_xs {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 314;
		$this->tipo = 'M';
		$this->name = 'xs';
		$this->pai = 312;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_315_peri {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 315;
		$this->tipo = 'G';
		$this->name = 'peri';
		$this->value = $param;
		$this->pai = 276;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_316_nONU {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 316;
		$this->tipo = 'E';
		$this->name = 'nONU';
		$this->pai = 315;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_317_xNomeAE {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 317;
		$this->tipo = 'E';
		$this->name = 'xNomeAE';
		$this->pai = 315;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_318_xClaRisco {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 318;
		$this->tipo = 'E';
		$this->name = 'xClaRisco';
		$this->pai = 315;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_319_grEmb {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 319;
		$this->tipo = 'E';
		$this->name = 'grEmb';
		$this->pai = 315;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_320_qTotProd {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 320;
		$this->tipo = 'E';
		$this->name = 'qTotProd';
		$this->pai = 315;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_321_qVolTipo {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 321;
		$this->tipo = 'E';
		$this->name = 'qVolTipo';
		$this->pai = 315;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_322_pontoFulgor {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 322;
		$this->tipo = 'E';
		$this->name = 'pontoFulgor';
		$this->pai = 315;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_323_veicNovos {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 323;
		$this->tipo = 'G';
		$this->name = 'veicNovos';
		$this->value = $param;
		$this->pai = 276;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_324_chassi {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 324;
		$this->tipo = 'E';
		$this->name = 'chassi';
		$this->pai = 323;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_325_cCor {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 325;
		$this->tipo = 'E';
		$this->name = 'cCor';
		$this->pai = 323;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_326_xCor {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 326;
		$this->tipo = 'E';
		$this->name = 'xCor';
		$this->pai = 323;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_327_cMod {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 327;
		$this->tipo = 'E';
		$this->name = 'cMod';
		$this->pai = 323;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_328_vUnit {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 328;
		$this->tipo = 'E';
		$this->name = 'vUnit';
		$this->pai = 323;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_329_vFrete {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 329;
		$this->tipo = 'E';
		$this->name = 'vFrete';
		$this->pai = 323;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_330_cobr {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 330;
		$this->tipo = 'G';
		$this->name = 'cobr';
		$this->value = $param;
		$this->pai = 276;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_331_fat {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 331;
		$this->tipo = 'G';
		$this->name = 'fat';
		$this->value = $param;
		$this->pai = 330;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_332_nFat {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 332;
		$this->tipo = 'E';
		$this->name = 'nFat';
		$this->pai = 331;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_333_vOrig {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 333;
		$this->tipo = 'E';
		$this->name = 'vOrig';
		$this->pai = 331;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_334_vDesc {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 334;
		$this->tipo = 'E';
		$this->name = 'vDesc';
		$this->pai = 331;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_335_vLiq {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 335;
		$this->tipo = 'E';
		$this->name = 'vLiq';
		$this->pai = 331;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_336_dup {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 336;
		$this->tipo = 'G';
		$this->name = 'dup';
		$this->value = $param;
		$this->pai = 330;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_337_nDup {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 337;
		$this->tipo = 'E';
		$this->name = 'nDup';
		$this->pai = 336;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_338_dVenc {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 338;
		$this->tipo = 'E';
		$this->name = 'dVenc';
		$this->pai = 336;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_339_vDup {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 339;
		$this->tipo = 'E';
		$this->name = 'vDup';
		$this->pai = 336;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_340_infCteSub {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 340;
		$this->tipo = 'G';
		$this->name = 'infCteSub';
		$this->value = $param;
		$this->pai = 276;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_341_chCte {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 341;
		$this->tipo = 'E';
		$this->name = 'chCte';
		$this->pai = 340;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_342_tomaICMS {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 342;
		$this->tipo = 'G';
		$this->name = 'tomaICMS';
		$this->value = $param;
		$this->pai = 340;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_343_refNFe {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 343;
		$this->tipo = 'E';
		$this->name = 'refNFe';
		$this->pai = 342;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_344_refNF {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 344;
		$this->tipo = 'G';
		$this->name = 'refNF';
		$this->value = $param;
		$this->pai = 342;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_345_CNPJ {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 345;
		$this->tipo = 'E';
		$this->name = 'CNPJ';
		$this->pai = 344;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_346_mod {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 346;
		$this->tipo = 'E';
		$this->name = 'mod';
		$this->pai = 344;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_347_serie {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 347;
		$this->tipo = 'E';
		$this->name = 'serie';
		$this->pai = 344;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_348_subserie {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 348;
		$this->tipo = 'E';
		$this->name = 'subserie';
		$this->pai = 344;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_349_nro {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 349;
		$this->tipo = 'E';
		$this->name = 'nro';
		$this->pai = 344;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_350_valor {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 350;
		$this->tipo = 'E';
		$this->name = 'valor';
		$this->pai = 344;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_351_dEmi {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 351;
		$this->tipo = 'E';
		$this->name = 'dEmi';
		$this->pai = 344;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_352_refCte {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 352;
		$this->tipo = 'E';
		$this->name = 'refCte';
		$this->pai = 342;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_353_tomaNaoICMS {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 353;
		$this->tipo = 'G';
		$this->name = 'tomaNaoICMS';
		$this->value = $param;
		$this->pai = 340;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_354_refCteAnu {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 354;
		$this->tipo = 'E';
		$this->name = 'refCteAnu';
		$this->pai = 353;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_355_infCteComp {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 355;
		$this->tipo = 'G';
		$this->name = 'infCteComp';
		$this->value = $param;
		$this->pai = 1;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_356_chave {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 356;
		$this->tipo = 'E';
		$this->name = 'chave';
		$this->pai = 355;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_357_vPresComp {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 357;
		$this->tipo = 'G';
		$this->name = 'vPresComp';
		$this->value = $param;
		$this->pai = 355;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_358_vTPrest {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 358;
		$this->tipo = 'E';
		$this->name = 'vTPrest';
		$this->pai = 357;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_359_compComp {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 359;
		$this->tipo = 'G';
		$this->name = 'compComp';
		$this->value = $param;
		$this->pai = 357;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_360_xNome {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 360;
		$this->tipo = 'E';
		$this->name = 'xNome';
		$this->pai = 359;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_361_vComp {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 361;
		$this->tipo = 'E';
		$this->name = 'vComp';
		$this->pai = 359;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_362_impComp {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 362;
		$this->tipo = 'G';
		$this->name = 'impComp';
		$this->value = $param;
		$this->pai = 355;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_363_ICMSComp {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 363;
		$this->tipo = 'G';
		$this->name = 'ICMSComp';
		$this->value = $param;
		$this->pai = 362;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_364_ICMS00 {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 364;
		$this->tipo = 'G';
		$this->name = 'ICMS00';
		$this->value = $param;
		$this->pai = 363;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_365_CST {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 365;
		$this->tipo = 'E';
		$this->name = 'CST';
		$this->pai = 364;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_366_vBC {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 366;
		$this->tipo = 'E';
		$this->name = 'vBC';
		$this->pai = 364;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_367_pICMS {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 367;
		$this->tipo = 'E';
		$this->name = 'pICMS';
		$this->pai = 364;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_368_vICMS {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 368;
		$this->tipo = 'E';
		$this->name = 'vICMS';
		$this->pai = 364;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_369_ICMS20 {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 369;
		$this->tipo = 'G';
		$this->name = 'ICMS20';
		$this->value = $param;
		$this->pai = 363;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_370_CST {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 370;
		$this->tipo = 'E';
		$this->name = 'CST';
		$this->pai = 369;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_371_pRedBC {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 371;
		$this->tipo = 'E';
		$this->name = 'pRedBC';
		$this->pai = 369;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_372_vBC {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 372;
		$this->tipo = 'E';
		$this->name = 'vBC';
		$this->pai = 369;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_373_pICMS {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 373;
		$this->tipo = 'E';
		$this->name = 'pICMS';
		$this->pai = 369;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_374_vICMS {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 374;
		$this->tipo = 'E';
		$this->name = 'vICMS';
		$this->pai = 369;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_375_ICMS45 {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 375;
		$this->tipo = 'G';
		$this->name = 'ICMS45';
		$this->value = $param;
		$this->pai = 363;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_376_CST {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 376;
		$this->tipo = 'E';
		$this->name = 'CST';
		$this->pai = 375;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_377_ICMS60 {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 377;
		$this->tipo = 'G';
		$this->name = 'ICMS60';
		$this->value = $param;
		$this->pai = 363;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_378_CST {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 378;
		$this->tipo = 'E';
		$this->name = 'CST';
		$this->pai = 377;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_379_vBCSTRet {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 379;
		$this->tipo = 'E';
		$this->name = 'vBCSTRet';
		$this->pai = 377;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_380_vICMSSTRet {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 380;
		$this->tipo = 'E';
		$this->name = 'vICMSSTRet';
		$this->pai = 377;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_381_pICMSSTRet {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 381;
		$this->tipo = 'E';
		$this->name = 'pICMSSTRet';
		$this->pai = 377;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_382_vCred {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 382;
		$this->tipo = 'E';
		$this->name = 'vCred';
		$this->pai = 377;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_383_ICMS90 {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 383;
		$this->tipo = 'G';
		$this->name = 'ICMS90';
		$this->value = $param;
		$this->pai = 363;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_384_CST {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 384;
		$this->tipo = 'E';
		$this->name = 'CST';
		$this->pai = 383;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_385_pRedBC {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 385;
		$this->tipo = 'E';
		$this->name = 'pRedBC';
		$this->pai = 383;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_386_vBC {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 386;
		$this->tipo = 'E';
		$this->name = 'vBC';
		$this->pai = 383;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_387_pICMS {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 387;
		$this->tipo = 'E';
		$this->name = 'pICMS';
		$this->pai = 383;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_388_vICMS {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 388;
		$this->tipo = 'E';
		$this->name = 'vICMS';
		$this->pai = 383;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_389_vCred {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 389;
		$this->tipo = 'E';
		$this->name = 'vCred';
		$this->pai = 383;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_390_ICMSOutraUF {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 390;
		$this->tipo = 'G';
		$this->name = 'ICMSOutraUF';
		$this->value = $param;
		$this->pai = 363;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_391_CST {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 391;
		$this->tipo = 'E';
		$this->name = 'CST';
		$this->pai = 390;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_392_pRedBCOutraUF {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 392;
		$this->tipo = 'E';
		$this->name = 'pRedBCOutraUF';
		$this->pai = 390;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_393_vBCOutraUF {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 393;
		$this->tipo = 'E';
		$this->name = 'vBCOutraUF';
		$this->pai = 390;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_394_pICMSOutraUF {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 394;
		$this->tipo = 'E';
		$this->name = 'pICMSOutraUF';
		$this->pai = 390;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_395_vICMSOutraUF {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 395;
		$this->tipo = 'E';
		$this->name = 'vICMSOutraUF';
		$this->pai = 390;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_396_ICMSSN {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 396;
		$this->tipo = 'G';
		$this->name = 'ICMSSN';
		$this->value = $param;
		$this->pai = 363;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_397_indSN {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 397;
		$this->tipo = 'E';
		$this->name = 'indSN';
		$this->pai = 396;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_398_infAdFisco {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 398;
		$this->tipo = 'E';
		$this->name = 'infAdFisco';
		$this->pai = 362;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_399_infCteAnu {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 399;
		$this->tipo = 'G';
		$this->pai = 1;
		$this->name = 'infCteAnu';
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_400_chCte {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 400;
		$this->tipo = 'E';
		$this->name = 'chCte';
		$this->pai = 399;
		$this->value = $param;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHP_401_dEmi {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 401;
		$this->tipo = 'E';
		$this->name = 'dEmi';
		$this->pai = 399;
		$this->value = $param;
		$this->index = $ix;
		print_r($this->get_element());
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }
	
	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
	
}
?>