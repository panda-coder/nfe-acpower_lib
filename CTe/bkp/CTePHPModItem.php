<?php

class CTePHPMod_Rodoviario_1_rodo {
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
		$this->name = 'rodo';
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
class CTePHPMod_Rodoviario_2_RNTRC {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 2;
		$this->tipo = 'E';
		$this->name = 'RNTRC';
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
class CTePHPMod_Rodoviario_3_dPrev {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 3;
		$this->tipo = 'E';
		$this->name = 'dPrev';
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
class CTePHPMod_Rodoviario_4_lota {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 4;
		$this->tipo = 'E';
		$this->name = 'lota';
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
class CTePHPMod_Rodoviario_5_CIOT {
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
		$this->name = 'CIOT';
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
class CTePHPMod_Rodoviario_6_occ {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 6;
		$this->tipo = 'G';
		$this->name = 'occ';
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
class CTePHPMod_Rodoviario_7_serie {
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
		$this->name = 'serie';
		$this->value = $param;
		$this->pai = 6;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }

	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHPMod_Rodoviario_8_nOcc {
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
		$this->name = 'nOcc';
		$this->value = $param;
		$this->pai = 6;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }

	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHPMod_Rodoviario_9_dEmi {
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
		$this->name = 'dEmi';
		$this->value = $param;
		$this->pai = 6;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }

	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHPMod_Rodoviario_10_emiOcc {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 10;
		$this->tipo = 'G';
		$this->name = 'emiOcc';
		$this->value = $param;
		$this->pai = 6;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }

	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHPMod_Rodoviario_11_CNPJ {
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
		$this->name = 'CNPJ';
		$this->value = $param;
		$this->pai = 10;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }

	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHPMod_Rodoviario_12_cInt {
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
		$this->name = 'cInt';
		$this->value = $param;
		$this->pai = 10;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }

	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHPMod_Rodoviario_13_IE {
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
		$this->name = 'IE';
		$this->value = $param;
		$this->pai = 10;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }

	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHPMod_Rodoviario_14_UF {
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
		$this->name = 'UF';
		$this->value = $param;
		$this->pai = 10;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }

	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHPMod_Rodoviario_15_fone {
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
		$this->name = 'fone';
		$this->value = $param;
		$this->pai = 10;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }

	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHPMod_Rodoviario_16_valePed {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 16;
		$this->tipo = 'G';
		$this->name = 'valePed';
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
class CTePHPMod_Rodoviario_17_CNPJForn {
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
		$this->name = 'CNPJForn';
		$this->value = $param;
		$this->pai = 16;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }

	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHPMod_Rodoviario_18_nCompra {
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
		$this->name = 'nCompra';
		$this->value = $param;
		$this->pai = 16;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }

	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHPMod_Rodoviario_19_CNPJPg {
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
		$this->name = 'CNPJPg';
		$this->value = $param;
		$this->pai = 16;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }

	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHPMod_Rodoviario_20_veic {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 20;
		$this->tipo = 'G';
		$this->name = 'veic';
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
class CTePHPMod_Rodoviario_21_cInt {
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
		$this->name = 'cInt';
		$this->value = $param;
		$this->pai = 20;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }

	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHPMod_Rodoviario_22_RENAVAM {
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
		$this->name = 'RENAVAM';
		$this->value = $param;
		$this->pai = 20;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }

	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHPMod_Rodoviario_23_placa {
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
		$this->name = 'placa';
		$this->value = $param;
		$this->pai = 20;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }

	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHPMod_Rodoviario_24_tara {
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
		$this->name = 'tara';
		$this->value = $param;
		$this->pai = 20;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }

	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHPMod_Rodoviario_25_capKG {
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
		$this->name = 'capKG';
		$this->value = $param;
		$this->pai = 20;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }

	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHPMod_Rodoviario_26_capM3 {
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
		$this->name = 'capM3';
		$this->value = $param;
		$this->pai = 20;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }

	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHPMod_Rodoviario_27_tpProp {
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
		$this->name = 'tpProp';
		$this->value = $param;
		$this->pai = 20;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }

	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHPMod_Rodoviario_28_tpVeic {
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
		$this->name = 'tpVeic';
		$this->value = $param;
		$this->pai = 20;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }

	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHPMod_Rodoviario_29_tpRod {
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
		$this->name = 'infCte';
		$this->value = $param;
		$this->pai = 20;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }

	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHPMod_Rodoviario_30_tpCar {
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
		$this->name = 'tpCar';
		$this->value = $param;
		$this->pai = 20;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }

	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHPMod_Rodoviario_31_UF {
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
		$this->name = 'UF';
		$this->value = $param;
		$this->pai = 20;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }

	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHPMod_Rodoviario_32_prop {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 32;
		$this->tipo = 'G';
		$this->name = 'prop';
		$this->value = $param;
		$this->pai = 20;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }

	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHPMod_Rodoviario_33_CPF {
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
		$this->name = 'CPF';
		$this->value = $param;
		$this->pai = 32;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }

	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHPMod_Rodoviario_34_CNPJ {
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
		$this->name = 'CNPJ';
		$this->value = $param;
		$this->pai = 32;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }

	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHPMod_Rodoviario_35_RNTRC {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 35;
		$this->tipo = 'E';
		$this->name = 'RNTRC';
		$this->value = $param;
		$this->pai = 32;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }

	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHPMod_Rodoviario_36_xNome {
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
		$this->name = 'xNome';
		$this->value = $param;
		$this->pai = 32;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }

	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHPMod_Rodoviario_37_IE {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 37;
		$this->tipo = 'E';
		$this->name = 'IE';
		$this->value = $param;
		$this->pai = 32;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }

	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHPMod_Rodoviario_38_UF {
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
		$this->name = 'UF';
		$this->value = $param;
		$this->pai = 32;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }

	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHPMod_Rodoviario_39_tpProp {
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
		$this->name = 'tpProp';
		$this->value = $param;
		$this->pai = 32;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }

	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHPMod_Rodoviario_40_lacRodo {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 40;
		$this->tipo = 'G';
		$this->name = 'lacRodo';
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
class CTePHPMod_Rodoviario_41_nLacre {
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
		$this->name = 'nLacre';
		$this->value = $param;
		$this->pai = 40;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }

	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHPMod_Rodoviario_42_moto {
	private $id;
	private $tipo;
	private $value;
	private $pai;
	private $name;
	private $index;
	public $element;
	
	function __construct($param,$ix=0) {
		$this->id = 42;
		$this->tipo = 'G';
		$this->name = 'moto';
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
class CTePHPMod_Rodoviario_43_xNome {
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
		$this->name = 'xNome';
		$this->value = $param;
		$this->pai = 42;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
	public function set_element($param) { $this->element = $param; }
	
	public function get_index() { return $this->index; }
	
	public function get_id() { return $this->id; }
	
	public function get_element() { return $this->element; }
	
	public function get_tipo() { return $this->tipo; }

	public function get_name() { return $this->name; }
	
	public function get_value() { return $this->value; }
	
	public function get_pai() { return $this->pai; }
}
class CTePHPMod_Rodoviario_44_CPF {
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
		$this->name = 'CPF';
		$this->value = $param;
		$this->pai = 42;
		$this->index = $ix;
	}
	
	public function set_pai($param) { $this->pai = $param; }
	
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