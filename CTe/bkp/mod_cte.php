<?php

/*
// segundo parametro boolean opcional
$xml = new CTePHP([nome_do_gerador],[saltar_validacao]);
$var_1_infCte = $xml->set_1_infCte("valor");
$var_2_versao = $xml->set_2_versao("valor");
...
	$var_314_xs = $xml->set_314_xs("valor");
	$modal = new CTePHPRodoviario($var_314_xs,$xml->get_dom(),1);
	$vMod_1_rodo = $modal->setMod_1_rodo("modal");
	$vMod_2_RNTRC = $modal->setMod_2_RNTRC("modal");
	...
	$xml->append_314_modal($modal->drawXMLMod(),$var_314_xs);

// [modo(tree,object,file)] 
// [nome_do_arquivo] somente quando [modo]="file"
$xml->drawXML([modo],[nome_do_arquivo]); 
*/

abstract class CTeRules { 

	protected $skip_validation;
	protected $arr_regexp = array();
	protected $arr_domain = array();
	protected $arr_erro = array();
	
	function __construct($skip_validation=null) {
		$this->skip_validation = $skip_validation;
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
		if ($param==null) {
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
					$this->arr_erro[$log] = "Input: ".$param." - Cod: ".$regexp." - RegExp: ".$this->arr_regexp[$regexp];
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
					$this->arr_erro[$log] = "Input: ".$param." - Cod: ".$domain." - Domain: ".implode(',',$this->arr_domain[$domain]);
					return false;
				}
			}
		}
		return false;
	}
}

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

class CTePHPRodoviario extends CTeRules {

	private $dom;
	private $dom_Finalized;
	private $parent_node;
	public $mod_Finalized;
	private $arr_modnodes = array();

	function __construct($parent=null,$dom=null,$skip_validation=null) {
		$this->skip_validation = $skip_validation;
		$this->dom = $dom;
		$this->parent_node = $parent;
		$this->setRegExp();
		$this->setDomain();
	}

	public function setMod_1_rodo($param=null,$ix=0) { 
		if ($this->validateNotNull("setMod_1_rodo",$param)) {
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_1_rodo($param,$ix) );
			return $ret;
		}
	}
	public function setMod_2_RNTRC($param=null,$ix=0) { 
		if ($this->validateRegExp("setMod_2_RNTRC",$param,"ER33" )) { 								// ER33
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_2_RNTRC($param,$ix) );
			return $ret;
		}
	}
	public function setMod_3_dPrev($param=null,$ix=0) { 
		if ($this->validateRegExp("setMod_3_dPrev",$param,"ER9")) { 								// ER9
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_3_dPrev($param,$ix) );
			return $ret;
		}
	}
	public function setMod_4_lota($param=null,$ix=0) { 
		if ($this->validateDomain("setMod_4_lota",$param,"D10")) {									// D10
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_4_lota($param,$ix) );
			return $ret;
		}
	}
	public function setMod_5_CIOT($param=null,$ix=0) { 
		if ($this->validateRegExp("setMod_5_CIOT",$param,"ER51")) { 								// ER51
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_5_CIOT($param,$ix) );
			return $ret;
		}
	}
	public function setMod_6_occ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addModNodes( new CTePHPMod_Rodoviario_6_occ($param,$ix) );
		return $ret;
	}
	public function setMod_7_serie($param=null,$ix=0) { 
		if ($this->validateRegExp("setMod_7_serie",$param,"ER32")) { 								// ER32
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_7_serie($param,$ix) );
			return $ret;
		}
	}
	public function setMod_8_nOcc($param=null,$ix=0) { 
		if ($this->validateRegExp("setMod_8_nOcc",$param,"ER52")) { 								// ER52
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_8_nOcc($param,$ix) );
			return $ret;
		}
	}
	public function setMod_9_dEmi($param=null,$ix=0) { 
		if ($this->validateRegExp("setMod_9_dEmi",$param,"ER9")) { 									// ER9
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_9_dEmi($param,$ix) );
			return $ret;
		}
	}
	public function setMod_10_emiOcc($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addModNodes( new CTePHPMod_Rodoviario_10_emiOcc($param,$ix) );
		return $ret;
	}
	public function setMod_11_CNPJ($param=null,$ix=0) { 
		if ($this->validateRegExp("setMod_11_CNPJ",$param,"ER4")) { 								// ER4
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_11_CNPJ($param,$ix) );
			return $ret;
		}
	}
	public function setMod_12_cInt($param=null,$ix=0) { 
		if ($this->validateRegExp("setMod_12_cInt",$param,"ER32")) { 								// ER32
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_12_cInt($param,$ix) );
			return $ret;
		}
	}
	public function setMod_13_IE($param=null,$ix=0) { 
		if ($this->validateRegExp("setMod_13_IE",$param,"ER25")) { 									// ER25
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_13_IE($param,$ix) );
			return $ret;
		}
	}
	public function setMod_14_UF($param=null,$ix=0) { 
		if ($this->validateDomain("setMod_14_UF",$param,"D5")) {									// D5
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_14_UF($param,$ix) );
			return $ret;
		}
	}
	public function setMod_15_fone($param=null,$ix=0) { 
		if ($this->validateRegExp("setMod_15_fone",$param,"ER32")) { 								// ER32
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_15_fone($param,$ix) );
			return $ret;
		}
	}
	public function setMod_16_valePed($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addModNodes( new CTePHPMod_Rodoviario_16_valePed($param,$ix) );
		return $ret;
	}
	public function setMod_17_CNPJForn($param=null,$ix=0) { 
		if ($this->validateRegExp("setMod_17_CNPJForn",$param,"ER4")) { 							// ER4
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_17_CNPJForn($param,$ix) );
			return $ret;
		}
	}
	public function setMod_18_nCompra($param=null,$ix=0) { 
		if ($this->validateRegExp("setMod_18_nCompra",$param,"ER39")) { 							// ER39
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_18_nCompra($param,$ix) );
			return $ret;
		}
	}
	public function setMod_19_CNPJPg($param=null,$ix=0) { 
		if ($this->validateRegExp("setMod_19_CNPJPg",$param,"ER6")) { 								// ER6
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_19_CNPJPg($param,$ix) );
			return $ret;
		}
	}
	public function setMod_20_veic($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addModNodes( new CTePHPMod_Rodoviario_20_veic($param,$ix) );
		return $ret;
	}
	public function setMod_21_cInt($param=null,$ix=0) { 
		if ($this->validateRegExp("setMod_21_cInt",$param,"ER32")) { 								// ER32
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_21_cInt($param,$ix) );
			return $ret;
		}
	}
	public function setMod_22_RENAVAM($param=null,$ix=0) { 
		if ($this->validateRegExp("setMod_22_RENAVAM",$param,"ER32")) { 							// ER32
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_22_RENAVAM($param,$ix) );
			return $ret;
		}
	}
	public function setMod_23_placa($param=null,$ix=0) { 
		if ($this->validateRegExp("setMod_23_placa",$param,"ER50")) { 								// ER50
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_23_placa($param,$ix) );
			return $ret;
		}
	}
	public function setMod_24_tara($param=null,$ix=0) { 
		if ($this->validateRegExp("setMod_24_tara",$param,"ER53")) { 								// ER53
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_24_tara($param,$ix) );
			return $ret;
		}
	}
	public function setMod_25_capKG($param=null,$ix=0) { 
		if ($this->validateRegExp("setMod_25_capKG",$param,"ER53")) { 								// ER53
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_25_capKG($param,$ix) );
			return $ret;
		}
	}
	public function setMod_26_capM3($param=null,$ix=0) { 
		if ($this->validateRegExp("setMod_26_capM3",$param,"ER30")) { 								// ER30
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_26_capM3($param,$ix) );
			return $ret;
		}
	}
	public function setMod_27_tpProp($param=null,$ix=0) { 
		if ($this->validateDomain("setMod_27_tpProp",$param,"D27")) {								// D27
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_27_tpProp($param,$ix) );
			return $ret;
		}
	}
	public function setMod_28_tpVeic($param=null,$ix=0) { 
		if ($this->validateDomain("setMod_28_tpVeic",$param,"D10")) {								// D10
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_28_tpVeic($param,$ix) );
			return $ret;
		}
	}
	public function setMod_29_tpRod($param=null,$ix=0) { 
		if ($this->validateDomain("setMod_29_tpRod",$param,"D28")) {								// D28
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_29_tpRod($param,$ix) );
			return $ret;
		}
	}
	public function setMod_30_tpCar($param=null,$ix=0) { 
		if ($this->validateDomain("setMod_30_tpCar",$param,"D15")) {								// D15
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_30_tpCar($param,$ix) );
			return $ret;
		}
	}
	public function setMod_31_UF($param=null,$ix=0) { 
		if ($this->validateDomain("setMod_31_UF",$param,"D5")) {									// D5
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_31_UF($param,$ix) );
			return $ret;
		}
	}
	public function setMod_32_prop($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addModNodes( new CTePHPMod_Rodoviario_32_prop($param,$ix) );
		return $ret;
	}
	public function setMod_33_CPF($param=null,$ix=0) { 
		if ($this->validateRegExp("setMod_33_CPF",$param,"ER7")) { 									// ER7
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_33_CPF($param,$ix) );
			return $ret;
		}
	}
	public function setMod_34_CNPJ($param=null,$ix=0) { 
		if ($this->validateRegExp("setMod_34_CNPJ",$param,"ER6")) { 								// ER6
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_34_CNPJ($param,$ix) );
			return $ret;
		}
	}
	public function setMod_35_RNTRC($param=null,$ix=0) { 
		if ($this->validateRegExp("setMod_35_RNTRC",$param,"ER33")) { 								// ER33
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_35_RNTRC($param,$ix) );
			return $ret;
		}
	}
	public function setMod_36_xNome($param=null,$ix=0) { 
		if ($this->validateRegExp("setMod_36_xNome",$param,"ER32")) { 								// ER32
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_36_xNome($param,$ix) );
			return $ret;
		}
	}
	public function setMod_37_IE($param=null,$ix=0) { 
		if ($this->validateRegExp("setMod_37_IE",$param,"ER26")) { 									// ER26
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_37_IE($param,$ix) );
			return $ret;
		}
	}
	public function setMod_38_UF($param=null,$ix=0) { 
		if ($this->validateDomain("setMod_38_UF",$param,"D5")) {									// D5
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_38_UF($param,$ix) );
			return $ret;
		}
	}
	public function setMod_39_tpProp($param=null,$ix=0) { 
		if ($this->validateDomain("setMod_39_tpProp",$param,"D7")) {								// D7
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_39_tpProp($param,$ix) );
			return $ret;
		}
	}
	public function setMod_40_lacRodo($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addModNodes( new CTePHPMod_Rodoviario_40_lacRodo($param,$ix) );
		return $ret;
	}
	public function setMod_41_nLacre($param=null,$ix=0) { 
		if ($this->validateRegExp("setMod_41_nLacre",$param,"ER32")) { 								// ER32
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_41_nLacre($param,$ix) );
			return $ret;
		}
	}
	public function setMod_42_moto($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addModNodes( new CTePHPMod_Rodoviario_42_moto($param,$ix) );
		return $ret;
	}
	public function setMod_43_xNome($param=null,$ix=0) { 
		if ($this->validateRegExp("setMod_43_xNome",$param,"ER32")) { 								// ER32
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_43_xNome($param,$ix) );
			return $ret;
		}
	}
	public function setMod_44_CPF($param=null,$ix=0) { 
		if ($this->validateRegExp("setMod_44_CPF",$param,"ER7")) { 									// ER7
			$ret = '';
			$ret = $this->addModNodes( new CTePHPMod_Rodoviario_44_CPF($param,$ix) );
			return $ret;
		}
	}
	
	private function addModNodes($obj) {
		if ($obj->get_tipo()=="G") { $obj->set_element($this->dom->createElement($obj->get_name())); }
		if ($obj->get_tipo()=="E") { $obj->set_element($this->dom->createElement($obj->get_name(),$obj->get_value())); }
		if ($obj->get_tipo()=="A") { $obj->set_element($this->dom->createElement($obj->get_name(),$obj->get_value())); }
		$this->arr_modnodes[$obj->get_id()][] = $obj;
		return (count($this->arr_modnodes[$obj->get_id()])-1);
	}
	
	private function generateModTree() {
		$aux = $this->arr_modnodes;
		ksort($aux);
		foreach ($aux as $k => $v) {
			foreach ($v as $value) {
				if (isset($aux[$value->get_pai()][$value->get_index()])) {
					switch ($value->get_tipo()) {
						case 'G':
							$aux[$value->get_pai()][$value->get_index()]->element->appendChild($value->get_element());
							break;
						case 'A':
							$aux[$value->get_pai()][$value->get_index()]->element->setAttribute($value->get_name(),$value->get_value());
							break;
						case 'E':
							$aux[$value->get_pai()][$value->get_index()]->element->appendChild($value->get_element());
							break;
					}
				}
			}
		}
		$this->mod_Finalized = $aux[1][0]->get_element();
	}
	
	public function drawXMLMod() {
		if (count($this->arr_erro)>0) {
			echo "An error occurred attempting to save the file ".strtoupper($file_name)." using the method of the modal object.<br>";
			echo "<pre>";
			print_r($this->arr_erro);
			echo "</pre>";
			$this->mod_Finalized = $this->dom->createElement("erro","erro");
			return $this->mod_Finalized;
		} else {
			$this->generateModTree();
			if (!empty($this->mod_Finalized)) {
				return $this->mod_Finalized;
			} else { 
				echo "Expected mode parameter."; 
				return false; 
			}
		}
	}
}

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

class CTePHP extends CTeRules { 
	private $dom;
	private $dom_Finalized;
	private $CTe;
	private $CTe_Finalized;
	private $key;
	private $DV;
	
	private $arr_nodes = array();

	function __construct($skip_validation=null) {
		parent::__construct($skip_validation);
		$generator_name="http://www.portalfiscal.inf.br/cte";
		$this->dom = new DOMDocument('1.0', 'UTF-8');
		$this->dom->formatOutput = true;
		$this->dom->preserveWhiteSpace = false;

		$this->CTe = $this->dom->createElement("CTe");
		$this->CTe->setAttribute("xmlns", $generator_name);
		$this->dom->appendChild($this->CTe);
	}
	
	private function generateKeyMXL() {
		$dom 	= $this->dom;
		$cUF	= $this->arr_nodes[5][0]->get_value();
		$dhEmi	= $this->arr_nodes[13][0]->get_value();
		$CNPJ 	= $this->arr_nodes[98][0]->get_value();
		$mod 	= $this->arr_nodes[10][0]->get_value();
		$serie 	= $this->arr_nodes[11][0]->get_value();
		$nCT 	= $this->arr_nodes[12][0]->get_value();
		$tpEmis	= $this->arr_nodes[15][0]->get_value();
		$cCT	= $this->arr_nodes[6][0]->get_value();
		$tempData = $dt = explode("-", $dhEmi);
		$forma = "%02d%02d%02d%s%02d%03d%09d%01d%08d"; //%01d";
		$tempKey = sprintf($forma, $cUF, $tempData[0] - 2000, $tempData[1], $CNPJ, $mod, $serie, $nCT, $tpEmis, $cCT);
		$this->DV = $this->calculateDV($tempKey);
		$this->key = $tempKey .= $this->DV;
	}
	
	private function calculateDV($key){
		$cDV  = '';
		$multiplicadores = array(2, 3, 4, 5, 6, 7, 8, 9);
		$i = 42;
		$soma_ponderada = 0;
		while ($i >= 0)
		{
			for ($m = 0; $m < count($multiplicadores) && $i >= 0; $m++)
			{
				$soma_ponderada += $key[$i] * $multiplicadores[$m];
				$i--;
			}
		}
		$resto = $soma_ponderada % 11;
		if ($resto == '0' || $resto == '1')
		{
			$cDV = 0;
		} else
		{
			$cDV = 11 - $resto;
		}
		return $cDV;
	}
	
	public function get_dom() { return $this->dom; }
	public function get_key() { return $this->key; }
	public function get_DV() { return $this->DV; }
	
	public function set_1_infCte ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_1_infCte($param,$ix) );
		return $ret;
	}
	public function set_2_versao ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_2_versao",$param,"ER40")) { 								// ER40
			$ret = $this->addNodes( new CTePHP_2_versao($param,$ix) );
		}
		return $ret;
	}
	private function set_3_Id ($param=null,$ix=0) { 
		$ret = '';
		$this->generateKeyMXL();
		$id = "CTe" . $this->key;
		if ($this->validateRegExp("set_3_Id",$id,"ER44")) { 									// ER44
			$ret = $this->addNodes( new CTePHP_3_Id($id,$ix) );
		}
		return $ret;
	}
	public function set_4_ide ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_4_ide($param,$ix) );
		return $ret;
	}
	public function set_5_cUF ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_5_cUF",$param,"D2")) {									// D2
			$ret = $this->addNodes( new CTePHP_5_cUF($param,$ix) );
		}
		return $ret;
	}
	public function set_6_cCT ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_6_cCT",$param," ER33")) { 								// ER33
			$ret = $this->addNodes( new CTePHP_6_cCT($param,$ix) );
		}
	}
	public function set_7_CFOP ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_7_CFOP",$param,"ER46")) { 								// ER46
			$ret = $this->addNodes( new CTePHP_7_CFOP($param,$ix) );
		}
		return $ret;
	}
	public function set_8_natOp ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_8_natOp",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_8_natOp($param,$ix) );
		}
		return $ret;
	}
	public function set_9_forPag ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_9_forPag",$param,"D7")) {								// D7
			$ret = $this->addNodes( new CTePHP_9_forPag($param,$ix) );
		}
		return $ret;
	}
	public function set_10_mod ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_10_mod",$param,"D3")) {									// D3
			$ret = $this->addNodes( new CTePHP_10_mod($param,$ix) );
		}
		return $ret;
	}
	public function set_11_serie ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_11_serie",$param,"ER30")) { 								// ER30
			$ret = $this->addNodes( new CTePHP_11_serie($param,$ix) );
		}
		return $ret;
	}
	public function set_12_nCT ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_12_nCT",$param,"ER28")) { 								// ER28
			$ret = $this->addNodes( new CTePHP_12_nCT($param,$ix) );
		}
		return $ret;
	}
	public function set_13_dhEmi ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_13_dhEmi",$param,"ER34")) { 								// ER34
			$ret = $this->addNodes( new CTePHP_13_dhEmi($param,$ix) );
		}
		return $ret;
	}
	public function set_14_tpImp ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_14_tpImp",$param,"D1")) {								// D1
			$ret = $this->addNodes( new CTePHP_14_tpImp($param,$ix) );
		}
		return $ret;
	}
	public function set_15_tpEmis ($param=null,$ix=0) {
		$ret = '';
		if ($this->validateDomain("set_15_tpEmis",$param,"D8")) {								// D8
			$ret = $this->addNodes( new CTePHP_15_tpEmis($param,$ix) );
		}
		return $ret;
	}
	private function set_16_cDV ($param=null,$ix=0) { 
		$ret = '';
		$param = $this->DV;
		if ($this->validateRegExp("set_16_cDV",$param,"ER35")) { 								// ER35
			$ret = $this->addNodes( new CTePHP_16_cDV($param,$ix) );
		}
		return $ret;
	}
	public function set_17_tpAmb ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_17_tpAmb",$param,"D1")) {								// D1
			$ret = $this->addNodes( new CTePHP_17_tpAmb($param,$ix) );
		}
		return $ret;
	}
	public function set_18_tpCTe ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_18_tpCTe",$param,"D9")) {								// D9
			$ret = $this->addNodes( new CTePHP_18_tpCTe($param,$ix) );
		}
		return $ret;
	}
	public function set_19_procEmi ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_19_procEmi",$param,"D9")) {								// D9
			$ret = $this->addNodes( new CTePHP_19_procEmi($param,$ix) );
		}
		return $ret;
	}
	public function set_20_verProc ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_20_verProc",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_20_verProc($param,$ix) );
		}
		return $ret;
	}
	public function set_21_refCTE ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_21_refCTE",$param,"ER3")) { 								// ER3
			$ret = $this->addNodes( new CTePHP_21_refCTE($param,$ix) );
		}
		return $ret;
	}
	public function set_22_cMunEnv ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_22_cMunEnv",$param,"ER2")) { 							// ER2
			$ret = $this->addNodes( new CTePHP_22_cMunEnv($param,$ix) );
		}
		return $ret;
	}
	public function set_23_xMunEnv ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_23_xMunEnv",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_23_xMunEnv($param,$ix) );
		}
		return $ret;
	}
	public function set_24_UFEnv ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_24_UFEnv",$param,"D5")) {								// D5
			$ret = $this->addNodes( new CTePHP_24_UFEnv($param,$ix) );
		}
		return $ret;
	}
	public function set_25_modal ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_25_modal",$param,"D26")) {								// D26
			$ret = $this->addNodes( new CTePHP_25_modal($param,$ix) );
		}
		return $ret;
	}
	public function set_26_tpServ ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_26_tpServ",$param,"D9")) {								// D9
			$ret = $this->addNodes( new CTePHP_26_tpServ($param,$ix) );
		}
		return $ret;
	}
	public function set_27_cMunIni ($param=null,$ix=0) {
		$ret = '';
		if ($this->validateRegExp("set_27_cMunIni",$param,"ER2")) { 							// ER2
			$ret = $this->addNodes( new CTePHP_27_cMunIni($param,$ix) );
		}
		return $ret;
	}
	public function set_28_xMunIni ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_28_xMunIni",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_28_xMunIni($param,$ix) );
		}
		return $ret;
	}
	public function set_29_UFIni ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_29_UFIni",$param,"D5")) {								// D5
			$ret = $this->addNodes( new CTePHP_29_UFIni($param,$ix) );
		}
		return $ret;
	}
	public function set_30_cMunFim ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_30_cMunFim",$param,"ER2")) { 							// ER2
			$ret = $this->addNodes( new CTePHP_30_cMunFim($param,$ix) );
		}
		return $ret;
	}
	public function set_31_xMunFim ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_31_xMunFim",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_31_xMunFim($param,$ix) );
		}
		return $ret;
	}
	public function set_32_UFFim ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_32_UFFim",$param,"D5")) {								// D5
			$ret = $this->addNodes( new CTePHP_32_UFFim($param,$ix) );
		}
		return $ret;
	}
	public function set_33_retira ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_33_retira",$param,"D10")) {								// D10
			$ret = $this->addNodes( new CTePHP_33_retira($param,$ix) );
		}
		return $ret;
	}
	public function set_34_xDetRetira ($param=null,$ix=0) {
		$ret = '';
		if ($this->validateRegExp("set_34_xDetRetira",$param,"ER32")) { 						// ER32
			$ret = $this->addNodes( new CTePHP_34_xDetRetira($param,$ix) );
		}
		return $ret;
	}
	public function set_35_toma03 ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_35_toma03($param,$ix) );
		return $ret;
	}
	public function set_36_toma ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_36_toma",$param,"D9")) {									// D9
			$ret = $this->addNodes( new CTePHP_36_toma($param,$ix) );
		}
		return $ret;
	}
	public function set_37_toma4 ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_37_toma4($param,$ix) );
		return $ret;
	}
	public function set_38_toma ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_38_toma",$param,"D11")) {								// D11
			$ret = $this->addNodes( new CTePHP_38_toma($param,$ix) );
		}
		return $ret;
	}
	public function set_39_CNPJ ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_39_CNPJ",$param,"ER6")) { 								// ER6
			$ret = $this->addNodes( new CTePHP_39_CNPJ($param,$ix) );
		}
		return $ret;
	}
	public function set_40_CPF ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_40_CPF",$param,"ER7")) { 								// ER7
			$ret = $this->addNodes( new CTePHP_40_CPF($param,$ix) );
		}
		return $ret;
	}
	public function set_41_IE ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_41_IE",$param,"ER26")) { 								// ER26
			$ret = $this->addNodes( new CTePHP_41_IE($param,$ix) );
		}
		return $ret;
	}
	public function set_42_xNome ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_42_xNome",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_42_xNome($param,$ix) );
		}
		return $ret;
	}
	public function set_43_xFant ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_43_xFant",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_43_xFant($param,$ix) );
		}
		return $ret;
	}
	public function set_44_fone ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_44_fone",$param,"ER36")) { 								// ER36
			$ret = $this->addNodes( new CTePHP_44_fone($param,$ix) );
		}
		return $ret;
	}
	public function set_45_enderToma ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_45_enderToma($param,$ix) );
		return $ret;
	}
	public function set_46_xLgr ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_46_xLgr",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_46_xLgr($param,$ix) );
		}
		return $ret;
	}
	public function set_47_nro ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_47_nro",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_47_nro($param,$ix) );
		}
		return $ret;
	}
	public function set_48_xCpl ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_48_xCpl",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_48_xCpl($param,$ix) );
		}
		return $ret;
	}
	public function set_49_xBairro ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_49_xBairro",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_49_xBairro($param,$ix) );
		}
		return $ret;
	}
	public function set_50_cMun ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_50_cMun",$param,"ER2")) { 								// ER2
			$ret = $this->addNodes( new CTePHP_50_cMun($param,$ix) );
		}
		return $ret;
	}
	public function set_51_xMun ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_51_xMun",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_51_xMun($param,$ix) );
		}
		return $ret;
	}
	public function set_52_CEP ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_52_CEP",$param," ER33")) { 								// ER33
			$ret = $this->addNodes( new CTePHP_52_CEP($param,$ix) );
		}
		return $ret;
	}
	public function set_53_UF ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_53_UF",$param,"D5")) {									// D5
			$ret = $this->addNodes( new CTePHP_53_UF($param,$ix) );
		}
		return $ret;
	}
	public function set_54_cPais ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_54_cPais",$param,"ER27")) { 								// ER27
			$ret = $this->addNodes( new CTePHP_54_cPais($param,$ix) );
		}
		return $ret;
	}
	public function set_55_xPais ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_55_xPais",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_55_xPais($param,$ix) );
		}
		return $ret;
	}
	public function set_56_email ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_56_email",$param,"ER47")) { 								// ER47
			$ret = $this->addNodes( new CTePHP_56_email($param,$ix) );
		}
		return $ret;
	}
	public function set_57_dhCont ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_57_dhCont",$param,"ER34")) { 							// ER34
			$ret = $this->addNodes( new CTePHP_57_dhCont($param,$ix) );
		}
		return $ret;
	}
	public function set_58_xJust ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_58_xJust",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_58_xJust($param,$ix) );
		}
		return $ret;
	}
	public function set_59_compl ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_59_compl($param,$ix) );
		return $ret;
	}
	public function set_60_xCaracAd ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_60_xCaracAd",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_60_xCaracAd($param,$ix) );
		}
		return $ret;
	}
	public function set_61_xCaracSer ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_61_xCaracSer",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_61_xCaracSer($param,$ix) );
		}
		return $ret;
	}
	public function set_62_xEmi ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_62_xEmi",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_62_xEmi($param,$ix) );
		}
		return $ret;
	}
	public function set_63_fluxo ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_63_fluxo($param,$ix) );
		return $ret;
	}
	public function set_64_xOrig ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_64_xOrig",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_64_xOrig($param,$ix) );
		}
		return $ret;
	}
	public function set_65_pass ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_65_pass($param,$ix) );
		return $ret;
	}
	public function set_66_xPass ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_66_xPass",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_66_xPass($param,$ix) );
		}
		return $ret;
	}
	public function set_67_xDest ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_67_xDest",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_67_xDest($param,$ix) );
		}
		return $ret;
	}
	public function set_68_xRota ($param=null,$ix=0) {
		$ret = '';
		if ($this->validateRegExp("set_68_xRota",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_68_xRota($param,$ix) );
		}
		return $ret;
	}
	public function set_69_Entrega ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_69_Entrega($param,$ix) );
		return $ret;
	}
	public function set_70_semData ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_70_semData($param,$ix) );
		return $ret;
	}
	public function set_71_tpPer ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_71_tpPer",$param,"D12")) {								// D12
			$ret = $this->addNodes( new CTePHP_71_tpPer($param,$ix) );
		}
		return $ret;
	}
	public function set_72_comData ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_72_comData($param,$ix) );
		return $ret;
	}
	public function set_73_tpPer ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_73_tpPer",$param,"D13")) {								// D13
			$ret = $this->addNodes( new CTePHP_73_tpPer($param,$ix) );
		}
		return $ret;
	}
	public function set_74_dProg ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_74_dProg",$param,"ER9")) { 								// ER9
			$ret = $this->addNodes( new CTePHP_74_dProg($param,$ix) );
		}
		return $ret;
	}
	public function set_75_noPeriodo ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_75_noPeriodo($param,$ix) );
		return $ret;
	}
	public function set_76_tpPer ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_76_tpPer",$param,"D11")) {								// D11
			$ret = $this->addNodes( new CTePHP_76_tpPer($param,$ix) );
		}
		return $ret;
	}
	public function set_77_dIni ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_77_dIni",$param,"ER9")) { 								// ER9
			$ret = $this->addNodes( new CTePHP_77_dIni($param,$ix) );
		}
		return $ret;
	}
	public function set_78_dFim ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_78_dFim",$param,"ER9")) { 								// ER9
			$ret = $this->addNodes( new CTePHP_78_dFim($param,$ix) );
		}
		return $ret;
	}
	public function set_79_semHora ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_79_semHora($param,$ix) );
		return $ret;
	}
	public function set_80_tpHor ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_80_tpHor",$param,"D12")) {								// D12
			$ret = $this->addNodes( new CTePHP_80_tpHor($param,$ix) );
		}
		return $ret;
	}
	public function set_81_comHora ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_81_comHora($param,$ix) );
		return $ret;
	}
	public function set_82_tpHor ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_82_tpHor",$param,"D13")) {								// D13
			$ret = $this->addNodes( new CTePHP_82_tpHor($param,$ix) );
		}
		return $ret;
	}
	public function set_83_hProg ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_83_hProg",$param,"ER49")) { 								// ER49
			$ret = $this->addNodes( new CTePHP_83_hProg($param,$ix) );
		}
		return $ret;
	}
	public function set_84_noInter ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_84_noInter($param,$ix) );
		return $ret;
	}
	public function set_85_tpHor ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_85_tpHor",$param,"D11")) {								// D11
			$ret = $this->addNodes( new CTePHP_85_tpHor($param,$ix) );
		}
		return $ret;
	}
	public function set_86_hIni ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_86_hIni",$param,"ER49")) { 								// ER49
			$ret = $this->addNodes( new CTePHP_86_hIni($param,$ix) );
		}
		return $ret;
	}
	public function set_87_hFim ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_87_hFim",$param,"ER49")) { 								// ER49
			$ret = $this->addNodes( new CTePHP_87_hFim($param,$ix) );
		}
		return $ret;
	}
	public function set_88_origCalc ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_88_origCalc",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_88_origCalc($param,$ix) );
		}
		return $ret;
	}
	public function set_89_destCalc ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_89_destCalc",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_89_destCalc($param,$ix) );
		}
		return $ret;
	}
	public function set_90_xObs ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_90_xObs",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_90_xObs($param,$ix) );
		}
		return $ret;
	}
	public function set_91_ObsCont ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_91_ObsCont($param,$ix) );
		return $ret;
	}
	public function set_92_xCampo ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_92_xCampo",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_92_xCampo($param,$ix) );
		}
		return $ret;
	}
	public function set_93_xTexto ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_93_xTexto",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_93_xTexto($param,$ix) );
		}
		return $ret;
	}
	public function set_94_ObsFisco ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_94_ObsFisco($param,$ix) );
		return $ret;
	}
	public function set_95_xCampo ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_95_xCampo",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_95_xCampo($param,$ix) );
		}
		return $ret;
	}
	public function set_96_xTexto ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_96_xTexto",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_96_xTexto($param,$ix) );
		}
		return $ret;
	}
	public function set_97_emit ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_97_emit($param,$ix) );
		return $ret;
	}
	public function set_98_CNPJ ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_98_CNPJ",$param,"ER4")) { 								// ER4
			$ret = $this->addNodes( new CTePHP_98_CNPJ($param,$ix) );
		}
		return $ret;
	}
	public function set_99_IE ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_99_IE",$param,"ER25")) { 								// ER25
			$ret = $this->addNodes( new CTePHP_99_IE($param,$ix) );
		}
		return $ret;
	}
	public function set_100_xNome ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_100_xNome",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_100_xNome($param,$ix) );
		}
		return $ret;
	}
	public function set_101_xFant ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_101_xFant",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_101_xFant($param,$ix) );
		}
		return $ret;
	}
	public function set_102_enderEmit ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_102_enderEmit($param,$ix) );
		return $ret;
	}
	public function set_103_xLgr ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_103_xLgr",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_103_xLgr($param,$ix) );
		}
		return $ret;
	}
	public function set_104_nro ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_104_nro",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_104_nro($param,$ix) );
		}
		return $ret;
	}
	public function set_105_xCpl ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_105_xCpl",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_105_xCpl($param,$ix) );
		}
		return $ret;
	}
	public function set_106_xBairro ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_106_xBairro",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_106_xBairro($param,$ix) );
		}
		return $ret;
	}
	public function set_107_cMun ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_107_cMun",$param,"ER2")) { 								// ER2
			$ret = $this->addNodes( new CTePHP_107_cMun($param,$ix) );
		}
		return $ret;
	}
	public function set_108_xMun ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_108_xMun",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_108_xMun($param,$ix) );
		}
		return $ret;
	}
	public function set_109_CEP ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_109_CEP",$param," ER33")) { 								// ER33
			$ret = $this->addNodes( new CTePHP_109_CEP($param,$ix) );
		}
		return $ret;
	}
	public function set_110_UF ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_110_UF",$param,"D6")) {									// D6
			$ret = $this->addNodes( new CTePHP_110_UF($param,$ix) );
		}
		return $ret;
	}
	public function set_111_fone ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_111_fone",$param,"ER36")) { 								// ER36
			$ret = $this->addNodes( new CTePHP_111_fone($param,$ix) );
		}
		return $ret;
	}
	public function set_112_rem ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_112_rem($param,$ix) );
		return $ret;
	}
	public function set_113_CNPJ ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_113_CNPJ",$param,"ER6")) { 								// ER6
			$ret = $this->addNodes( new CTePHP_113_CNPJ($param,$ix) );
		}
		return $ret;
	}
	public function set_114_CPF ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_114_CPF",$param,"ER7")) { 								// ER7
			$ret = $this->addNodes( new CTePHP_114_CPF($param,$ix) );
		}
		return $ret;
	}
	public function set_115_IE ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_115_IE",$param,"ER26")) { 								// ER26
			$ret = $this->addNodes( new CTePHP_115_IE($param,$ix) );
		}
		return $ret;
	}
	public function set_116_xNome ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_116_xNome",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_116_xNome($param,$ix) );
		}
		return $ret;
	}
	public function set_117_xFant ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_117_xFant",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_117_xFant($param,$ix) );
		}
		return $ret;
	}
	public function set_118_fone ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_118_fone",$param,"ER36")) { 								// ER36
			$ret = $this->addNodes( new CTePHP_118_fone($param,$ix) );
		}
		return $ret;
	}
	public function set_119_enderReme ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_119_enderReme($param,$ix) );
		return $ret;
	}
	public function set_120_xLgr ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_120_xLgr",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_120_xLgr($param,$ix) );
		}
		return $ret;
	}
	public function set_121_nro ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_121_nro",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_121_nro($param,$ix) );
		}
		return $ret;
	}
	public function set_122_xCpl ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_122_xCpl",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_122_xCpl($param,$ix) );
		}
		return $ret;
	}
	public function set_123_xBairro ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_123_xBairro",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_123_xBairro($param,$ix) );
		}
		return $ret;
	}
	public function set_124_cMun ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_124_cMun",$param,"ER2")) { 								// ER2
			$ret = $this->addNodes( new CTePHP_124_cMun($param,$ix) );
		}
		return $ret;
	}
	public function set_125_xMun ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_125_xMun",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_125_xMun($param,$ix) );
		}
		return $ret;
	}
	public function set_126_CEP ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_126_CEP",$param," ER33")) { 								// ER33
			$ret = $this->addNodes( new CTePHP_126_CEP($param,$ix) );
		}
	}
	public function set_127_UF ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_127_UF",$param,"D5")) {									// D5
			$ret = $this->addNodes( new CTePHP_127_UF($param,$ix) );
		}
		return $ret;
	}
	public function set_128_cPais ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_128_cPais",$param,"ER27")) { 							// ER27
			$ret = $this->addNodes( new CTePHP_128_cPais($param,$ix) );
		}
		return $ret;
	}
	public function set_129_xPais ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_129_xPais",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_129_xPais($param,$ix) );
		}
		return $ret;
	}
	public function set_130_email ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_130_email",$param,"ER47")) { 							// ER47
			$ret = $this->addNodes( new CTePHP_130_email($param,$ix) );
		}
		return $ret;
	}
	public function set_131_infNF ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_131_infNF($param,$ix) );
		return $ret;
	}
	public function set_132_nRoma ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_132_nRoma",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_132_nRoma($param,$ix) );
		}
		return $ret;
	}
	public function set_133_nPed ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_133_nPed",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_133_nPed($param,$ix) );
		}
		return $ret;
	}
	public function set_134_mod ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_134_mod",$param,"D4")) {									// D4
			$ret = $this->addNodes( new CTePHP_134_mod($param,$ix) );
		}
		return $ret;
	}
	public function set_135_serie ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_135_serie",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_135_serie($param,$ix) );
		}
		return $ret;
	}
	public function set_136_nDoc ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_136_nDoc",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_136_nDoc($param,$ix) );
		}
		return $ret;
	}
	public function set_137_dEmi ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_137_dEmi",$param,"ER9")) { 								// ER9
			$ret = $this->addNodes( new CTePHP_137_dEmi($param,$ix) );
		}
		return $ret;
	}
	public function set_138_vBC ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_138_vBC",$param,"ER23")) { 								// ER23
			$ret = $this->addNodes( new CTePHP_138_vBC($param,$ix) );
		}
		return $ret;
	}
	public function set_139_vICMS ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_139_vICMS",$param,"ER23")) { 							// ER23
			$ret = $this->addNodes( new CTePHP_139_vICMS($param,$ix) );
		}
		return $ret;
	}
	public function set_140_vBCST ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_140_vBCST",$param,"ER23")) { 							// ER23
			$ret = $this->addNodes( new CTePHP_140_vBCST($param,$ix) );
		}
		return $ret;
	}
	public function set_141_vST ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_141_vST",$param,"ER23")) { 								// ER23
			$ret = $this->addNodes( new CTePHP_141_vST($param,$ix) );
		}
		return $ret;
	}
	public function set_142_vProd ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_142_vProd",$param,"ER23")) { 							// ER23
			$ret = $this->addNodes( new CTePHP_142_vProd($param,$ix) );
		}
		return $ret;
	}
	public function set_143_vNF ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_143_vNF",$param,"ER23")) { 								// ER23
			$ret = $this->addNodes( new CTePHP_143_vNF($param,$ix) );
		}
		return $ret;
	}
	public function set_144_nCFOP ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_144_nCFOP",$param,"ER46")) { 							// ER46
			$ret = $this->addNodes( new CTePHP_144_nCFOP($param,$ix) );
		}
		return $ret;
	}
	public function set_145_nPeso ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_145_nPeso",$param,"ER20")) { 							// ER20
			$ret = $this->addNodes( new CTePHP_145_nPeso($param,$ix) );
		}
		return $ret;
	}
	public function set_146_PIN ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_146_PIN",$param,"ER37")) { 								// ER37
			$ret = $this->addNodes( new CTePHP_146_PIN($param,$ix) );
		}
		return $ret;
	}
	public function set_147_locRet ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_147_locRet($param,$ix) );
		return $ret;
	}
	public function set_148_CNPJ ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_148_CNPJ",$param,"ER4")) { 								// ER4
			$ret = $this->addNodes( new CTePHP_148_CNPJ($param,$ix) );
		}
		return $ret;
	}
	public function set_149_CPF ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_149_CPF",$param,"ER7")) { 								// ER7
			$ret = $this->addNodes( new CTePHP_149_CPF($param,$ix) );
		}
		return $ret;
	}
	public function set_150_xNome ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_150_xNome",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_150_xNome($param,$ix) );
		}
		return $ret;
	}
	public function set_151_xLgr ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_151_xLgr",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_151_xLgr($param,$ix) );
		}
		return $ret;
	}
	public function set_152_Nro ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_152_Nro",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_152_Nro($param,$ix) );
		}
		return $ret;
	}
	public function set_153_xCpl ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_153_xCpl",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_153_xCpl($param,$ix) );
		}
		return $ret;
	}
	public function set_154_xBairro ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_154_xBairro",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_154_xBairro($param,$ix) );
		}
		return $ret;
	}
	public function set_155_cMun ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_155_cMun",$param,"ER2")) { 								// ER2
			$ret = $this->addNodes( new CTePHP_155_cMun($param,$ix) );
		}
		return $ret;
	}
	public function set_156_xMun ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_156_xMun",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_156_xMun($param,$ix) );
		}
		return $ret;
	}
	public function set_157_UF ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_157_UF",$param,"D5")) {									// D5
			$ret = $this->addNodes( new CTePHP_157_UF($param,$ix) );
		}
		return $ret;
	}
	public function set_158_infNFe ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_158_infNFe($param,$ix) );
	}
	public function set_159_Chave ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_159_Chave",$param,"ER3")) { 								// ER3
			$ret = $this->addNodes( new CTePHP_159_Chave($param,$ix) );
		}
		return $ret;
	}
	public function set_160_PIN ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_160_PIN",$param,"ER37")) { 								// ER37
			$ret = $this->addNodes( new CTePHP_160_PIN($param,$ix) );
		}
		return $ret;
	}
	public function set_161_infOutros ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_161_infOutros($param,$ix) );
		return $ret;
	}
	public function set_162_tpDoc ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_162_tpDoc",$param,"D14")) {								// D14
			$ret = $this->addNodes( new CTePHP_162_tpDoc($param,$ix) );
		}
		return $ret;
	}
	public function set_163_descOutros ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_163_descOutros",$param,"ER32")) { 						// ER32
			$ret = $this->addNodes( new CTePHP_163_descOutros($param,$ix) );
		}
		return $ret;
	}
	public function set_164_nDoc ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_164_nDoc",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_164_nDoc($param,$ix) );
		}
		return $ret;
	}
	public function set_165_dEmi ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_165_dEmi",$param,"ER9")) { 								// ER9
			$ret = $this->addNodes( new CTePHP_165_dEmi($param,$ix) );
		}
		return $ret;
	}
	public function set_166_vDocFisc ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_166_vDocFisc",$param,"ER24")) { 							// ER24
			$ret = $this->addNodes( new CTePHP_166_vDocFisc($param,$ix) );
		}
		return $ret;
	}
	public function set_167_exped ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_167_exped($param,$ix) );
		return $ret;
	}
	public function set_168_CNPJ ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_168_CNPJ",$param,"ER6")) { 								// ER6
			$ret = $this->addNodes( new CTePHP_168_CNPJ($param,$ix) );
		}
		return $ret;
	}
	public function set_169_CPF ($param=null,$ix=0) {
		$ret = '';
		if ($this->validateRegExp("set_169_CPF",$param,"ER7")) { 								// ER7
			$ret = $this->addNodes( new CTePHP_169_CPF($param,$ix) );
		}
		return $ret;
	}
	public function set_170_IE ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_170_IE",$param,"ER26")) { 								// ER26
			$ret = $this->addNodes( new CTePHP_170_IE($param,$ix) );
		}
		return $ret;
	}
	public function set_171_xNome ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_171_xNome",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_171_xNome($param,$ix) );
		}
		return $ret;
	}
	public function set_172_fone ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_172_fone",$param,"ER36")) { 								// ER36
			$ret = $this->addNodes( new CTePHP_172_fone($param,$ix) );
		}
		return $ret;
	}
	public function set_173_enderExped ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_173_enderExped($param,$ix) );
		return $ret;
	}
	public function set_174_xLgr ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_174_xLgr",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_174_xLgr($param,$ix) );
		}
		return $ret;
	}
	public function set_175_nro ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_175_nro",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_175_nro($param,$ix) );
		}
		return $ret;
	}
	public function set_176_xCpl ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_176_xCpl",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_176_xCpl($param,$ix) );
		}
		return $ret;
	}
	public function set_177_xBairro ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_177_xBairro",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_177_xBairro($param,$ix) );
		}
		return $ret;
	}
	public function set_178_cMun ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_178_cMun",$param,"ER2")) { 								// ER2
			$ret = $this->addNodes( new CTePHP_178_cMun($param,$ix) );
		}
		return $ret;
	}
	public function set_179_xMun ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_179_xMun",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_179_xMun($param,$ix) );
		}
		return $ret;
	}
	public function set_180_CEP ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_180_CEP",$param," ER33")) { 								// ER33
			$ret = $this->addNodes( new CTePHP_180_CEP($param,$ix) );
		}
		return $ret;
	}
	public function set_181_UF ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_181_UF",$param,"D5")) {									// D5
			$ret = $this->addNodes( new CTePHP_181_UF($param,$ix) );
		}
		return $ret;
	}
	public function set_182_cPais ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_182_cPais",$param,"ER27")) { 							// ER27
			$ret = $this->addNodes( new CTePHP_182_cPais($param,$ix) );
		}
		return $ret;
	}
	public function set_183_xPais ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_183_xPais",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_183_xPais($param,$ix) );
		}
		return $ret;
	}
	public function set_184_email ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_184_email",$param,"ER47")) { 							// ER47
			$ret = $this->addNodes( new CTePHP_184_email($param,$ix) );
		}
		return $ret;
	}
	public function set_185_receb ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_185_receb($param,$ix) );
		return $ret;
	}
	public function set_186_CNPJ ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_186_CNPJ",$param,"ER6")) { 								// ER6
			$ret = $this->addNodes( new CTePHP_186_CNPJ($param,$ix) );
		}
		return $ret;
	}
	public function set_187_CPF ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_187_CPF",$param,"ER7")) { 								// ER7
			$ret = $this->addNodes( new CTePHP_187_CPF($param,$ix) );
		}
		return $ret;
	}
	public function set_188_IE ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_188_IE",$param,"ER26")) { 								// ER26
			$ret = $this->addNodes( new CTePHP_188_IE($param,$ix) );
		}
		return $ret;
	}
	public function set_189_xNome ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_189_xNome",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_189_xNome($param,$ix) );
		}
		return $ret;
	}
	public function set_190_fone ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_190_fone",$param,"ER36")) { 								// ER36
			$ret = $this->addNodes( new CTePHP_190_fone($param,$ix) );
		}
		return $ret;
	}
	public function set_191_enderReceb ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_191_enderReceb($param,$ix) );
		return $ret;
	}
	public function set_192_xLgr ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_192_xLgr",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_192_xLgr($param,$ix) );
		}
		return $ret;
	}
	public function set_193_nro ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_193_nro",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_193_nro($param,$ix) );
		}
		return $ret;
	}
	public function set_194_xCpl ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_194_xCpl",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_194_xCpl($param,$ix) );
		}
		return $ret;
	}
	public function set_195_xBairro ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_195_xBairro",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_195_xBairro($param,$ix) );
		}
		return $ret;
	}
	public function set_196_cMun ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_196_cMun",$param,"ER2")) { 								// ER2
			$ret = $this->addNodes( new CTePHP_196_cMun($param,$ix) );
		}
		return $ret;
	}
	public function set_197_xMun ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_197_xMun",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_197_xMun($param,$ix) );
		}
		return $ret;
	}
	public function set_198_CEP ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_198_CEP",$param," ER33")) { 								// ER33
			$ret = $this->addNodes( new CTePHP_198_CEP($param,$ix) );
		}
		return $ret;
	}
	public function set_199_UF ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_199_UF",$param,"D5")) {									// D5
			$ret = $this->addNodes( new CTePHP_199_UF($param,$ix) );
		}
		return $ret;
	}
	public function set_200_cPais ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_200_cPais",$param,"ER27")) { 							// ER27
			$ret = $this->addNodes( new CTePHP_200_cPais($param,$ix) );
		}
		return $ret;
	}
	public function set_201_xPais ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_201_xPais",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_201_xPais($param,$ix) );
		}
		return $ret;
	}
	public function set_202_email ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_202_email",$param,"ER47")) { 							// ER47
			$ret = $this->addNodes( new CTePHP_202_email($param,$ix) );
		}
		return $ret;
	}
	public function set_203_dest ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_203_dest($param,$ix) );
		return $ret;
	}
	public function set_204_CNPJ ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_204_CNPJ",$param,"ER6")) { 								// ER6
			$ret = $this->addNodes( new CTePHP_204_CNPJ($param,$ix) );
		}
		return $ret;
	}
	public function set_205_CPF ($param=null,$ix=0) {
		$ret = '';
		if ($this->validateRegExp("set_205_CPF",$param,"ER7")) { 								// ER7
			$ret = $this->addNodes( new CTePHP_205_CPF($param,$ix) );
		}
		return $ret;
	}
	public function set_206_IE ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_206_IE",$param,"ER26")) { 								// ER26
			$ret = $this->addNodes( new CTePHP_206_IE($param,$ix) );
		}
		return $ret;
	}
	public function set_207_xNome ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_207_xNome",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_207_xNome($param,$ix) );
		}
		return $ret;
	}
	public function set_208_fone ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_208_fone",$param,"ER36")) { 								// ER36
			$ret = $this->addNodes( new CTePHP_208_fone($param,$ix) );
		}
		return $ret;
	}
	public function set_209_ISUF ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_209_ISUF",$param,"ER38")) { 								// ER38
			$ret = $this->addNodes( new CTePHP_209_ISUF($param,$ix) );
		}
		return $ret;
	}
	public function set_210_enderDest ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_210_enderDest($param,$ix) );
		return $ret;
	}
	public function set_211_xLgr ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_211_xLgr",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_211_xLgr($param,$ix) );
		}
		return $ret;
	}
	public function set_212_nro ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_212_nro",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_212_nro($param,$ix) );
		}
		return $ret;
	}
	public function set_213_xCpl ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_213_xCpl",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_213_xCpl($param,$ix) );
		}
		return $ret;
	}
	public function set_214_xBairro ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_214_xBairro",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_214_xBairro($param,$ix) );
		}
		return $ret;
	}
	public function set_215_cMun ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_215_cMun",$param,"ER2")) { 								// ER2
			$ret = $this->addNodes( new CTePHP_215_cMun($param,$ix) );
		}
		return $ret;
	}
	public function set_216_xMun ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_216_xMun",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_216_xMun($param,$ix) );
		}
		return $ret;
	}
	public function set_217_CEP ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_217_CEP",$param," ER33")) { 								// ER33
			$ret = $this->addNodes( new CTePHP_217_CEP($param,$ix) );
		}
		return $ret;
	}
	public function set_218_UF ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_218_UF",$param,"D5")) {									// D5
			$ret = $this->addNodes( new CTePHP_218_UF($param,$ix) );
		}
		return $ret;
	}
	public function set_219_cPais ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_219_cPais",$param,"ER27")) { 							// ER27
			$ret = $this->addNodes( new CTePHP_219_cPais($param,$ix) );
		}
		return $ret;
	}
	public function set_220_xPais ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_220_xPais",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_220_xPais($param,$ix) );
		}
		return $ret;
	}
	public function set_221_email ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_221_email",$param,"ER47")) { 							// ER47
			$ret = $this->addNodes( new CTePHP_221_email($param,$ix) );
		}
		return $ret;
	}
	public function set_222_locEnt ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_222_locEnt($param,$ix) );
		return $ret;
	}
	public function set_223_CNPJ ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_223_CNPJ",$param,"ER4")) { 								// ER4
			$ret = $this->addNodes( new CTePHP_223_CNPJ($param,$ix) );
		}
		return $ret;
	}
	public function set_224_CPF ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_224_CPF",$param,"ER7")) { 								// ER7
			$ret = $this->addNodes( new CTePHP_224_CPF($param,$ix) );
		}
		return $ret;
	}
	public function set_225_xNome ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_225_xNome",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_225_xNome($param,$ix) );
		}
		return $ret;
	}
	public function set_226_xLgr ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_226_xLgr",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_226_xLgr($param,$ix) );
		}
		return $ret;
	}
	public function set_227_nro ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_227_nro",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_227_nro($param,$ix) );
		}
		return $ret;
	}
	public function set_228_xCpl ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_228_xCpl",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_228_xCpl($param,$ix) );
		}
		return $ret;
	}
	public function set_229_xBairro ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_229_xBairro",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_229_xBairro($param,$ix) );
		}
		return $ret;
	}
	public function set_230_cMun ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_230_cMun",$param,"ER2")) { 								// ER2
			$ret = $this->addNodes( new CTePHP_230_cMun($param,$ix) );
		}
		return $ret;
	}
	public function set_231_xMun ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_231_xMun",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_231_xMun($param,$ix) );
		}
		return $ret;
	}
	public function set_232_UF ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_232_UF",$param,"D5")) {									// D5
			$ret = $this->addNodes( new CTePHP_232_UF($param,$ix) );
		}
		return $ret;
	}
	public function set_233_vPrest ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_233_vPrest($param,$ix) );
		return $ret;
	}
	public function set_234_vTPrest ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_234_vTPrest",$param,"ER23")) { 							// ER23
			$ret = $this->addNodes( new CTePHP_234_vTPrest($param,$ix) );
		}
		return $ret;
	}
	public function set_235_vRec ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_235_vRec",$param,"ER23")) { 								// ER23
			$ret = $this->addNodes( new CTePHP_235_vRec($param,$ix) );
		}
		return $ret;
	}
	public function set_236_Comp ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_236_Comp($param,$ix) );
		return $ret;
	}
	public function set_237_xNome ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_237_xNome",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_237_xNome($param,$ix) );
		}
		return $ret;
	}
	public function set_238_vComp ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_238_vComp",$param,"ER23")) { 							// ER23
			$ret = $this->addNodes( new CTePHP_238_vComp($param,$ix) );
		}
		return $ret;
	}
	public function set_239_imp ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_239_imp($param,$ix) );
		return $ret;
	}
	public function set_240_ICMS ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_240_ICMS($param,$ix) );
		return $ret;
	}
	public function set_241_ICMS00 ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_241_ICMS00($param,$ix) );
		return $ret;
	}
	public function set_242_CST ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_242_CST",$param,"D17")) {								// D17
			$ret = $this->addNodes( new CTePHP_242_CST($param,$ix) );
		}
		return $ret;
	}
	public function set_243_vBC ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_243_vBC",$param,"ER23")) { 								// ER23
			$ret = $this->addNodes( new CTePHP_243_vBC($param,$ix) );
		}
		return $ret;
	}
	public function set_244_pICMS ($param=null,$ix=0) {
		$ret = '';
		if ($this->validateRegExp("set_244_pICMS",$param,"ER10")) {								// ER10
			$ret = $this->addNodes( new CTePHP_244_pICMS($param,$ix) );
		}
		return $ret;
	}
	public function set_245_vICMS ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_245_vICMS",$param,"ER23")) { 							// ER23
			$ret = $this->addNodes( new CTePHP_245_vICMS($param,$ix) );
		}
		return $ret;
	}
	public function set_246_ICMS20 ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_246_ICMS20($param,$ix) );
		return $ret;
	}
	public function set_247_CST ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_247_CST",$param,"D18")) {								// D18
			$ret = $this->addNodes( new CTePHP_247_CST($param,$ix) );
		}
		return $ret;
	}
	public function set_248_pRedBC ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_248_pRedBC",$param,"ER11")) { 							// ER11
			$ret = $this->addNodes( new CTePHP_248_pRedBC($param,$ix) );
		}
		return $ret;
	}
	public function set_249_vBC ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_249_vBC",$param,"ER23")) { 								// ER23
			$ret = $this->addNodes( new CTePHP_249_vBC($param,$ix) );
		}
		return $ret;
	}
	public function set_250_pICMS ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_250_pICMS",$param,"ER10")) {								// ER10
			$ret = $this->addNodes( new CTePHP_250_pICMS($param,$ix) );
		}
		return $ret;
	}
	public function set_251_vICMS ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_251_vICMS",$param,"ER23")) { 							// ER23
			$ret = $this->addNodes( new CTePHP_251_vICMS($param,$ix) );
		}
		return $ret;
	}
	public function set_252_ICMS45 ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_252_ICMS45($param,$ix) );
		return $ret;
	}
	public function set_253_CST ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_253_CST",$param,"D19")) {								// D19
			$ret = $this->addNodes( new CTePHP_253_CST($param,$ix) );
		}
		return $ret;
	}
	public function set_254_ICMS60 ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_254_ICMS60($param,$ix) );
		return $ret;
	}
	public function set_255_CST ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_255_CST",$param,"D20")) {								// D20
			$ret = $this->addNodes( new CTePHP_255_CST($param,$ix) );
		}
		return $ret;
	}
	public function set_256_vBCSTRet ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_256_vBCSTRet",$param,"ER23")) { 							// ER23
			$ret = $this->addNodes( new CTePHP_256_vBCSTRet($param,$ix) );
		}
		return $ret;
	}
	public function set_257_vICMSSTRet ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_257_vICMSSTRet",$param,"ER23")) { 						// ER23
			$ret = $this->addNodes( new CTePHP_257_vICMSSTRet($param,$ix) );
		}
		return $ret;
	}
	public function set_258_pICMSSTRet ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_258_pICMSSTRet",$param,"ER10")) {						// ER10
			$ret = $this->addNodes( new CTePHP_258_pICMSSTRet($param,$ix) );
		}
		return $ret;
	}
	public function set_259_vCred ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_259_vCred",$param,"ER23")) { 							// ER23
			$ret = $this->addNodes( new CTePHP_259_vCred($param,$ix) );
		}
		return $ret;
	}
	public function set_260_ICMS90 ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_260_ICMS90($param,$ix) );
		return $ret;
	}
	public function set_261_CST ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_261_CST",$param,"D21")) {								// D21
			$ret = $this->addNodes( new CTePHP_261_CST($param,$ix) );
		}
		return $ret;
	}
	public function set_262_pRedBC ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_262_pRedBC",$param,"ER11")) { 							// ER11
			$ret = $this->addNodes( new CTePHP_262_pRedBC($param,$ix) );
		}
		return $ret;
	}
	public function set_263_vBC ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_263_vBC",$param,"ER23")) { 								// ER23
			$ret = $this->addNodes( new CTePHP_263_vBC($param,$ix) );
		}
		return $ret;
	}
	public function set_264_pICMS ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_264_pICMS",$param,"ER10")) {								// ER10
			$ret = $this->addNodes( new CTePHP_264_pICMS($param,$ix) );
		}
		return $ret;
	}
	public function set_265_vICMS ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_265_vICMS",$param,"ER23")) { 							// ER23
			$ret = $this->addNodes( new CTePHP_265_vICMS($param,$ix) );
		}
		return $ret;
	}
	public function set_266_vCred ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_266_vCred",$param,"ER23")) { 							// ER23
			$ret = $this->addNodes( new CTePHP_266_vCred($param,$ix) );
		}
		return $ret;
	}
	public function set_267_ICMSOutraUF ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_267_ICMSOutraUF($param,$ix) );
		return $ret;
	}
	public function set_268_CST ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_268_CST",$param,"D21")) {								// D21
			$ret = $this->addNodes( new CTePHP_268_CST($param,$ix) );
		}
		return $ret;
	}
	public function set_269_pRedBCOutraUF ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_269_pRedBCOutraUF",$param,"ER11")) { 					// ER11
			$ret = $this->addNodes( new CTePHP_269_pRedBCOutraUF($param,$ix) );
		}
		return $ret;
	}
	public function set_270_vBCOutraUF ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_270_vBCOutraUF",$param,"ER23")) { 						// ER23
			$ret = $this->addNodes( new CTePHP_270_vBCOutraUF($param,$ix) );
		}
		return $ret;
	}
	public function set_271_pICMSOutraUF ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_271_pICMSOutraUF",$param,"ER10")) {						// ER10
			$ret = $this->addNodes( new CTePHP_271_pICMSOutraUF($param,$ix) );
		}
		return $ret;
	}
	public function set_272_vICMSOutraUF ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_272_vICMSOutraUF",$param,"ER23")) { 						// ER23
			$ret = $this->addNodes( new CTePHP_272_vICMSOutraUF($param,$ix) );
		}
		return $ret;
	}
	public function set_273_ICMSSN ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_273_ICMSSN($param,$ix) );
		return $ret;
	}
	public function set_274_indSN ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_274_indSN",$param,"D22")) {								// D22
			$ret = $this->addNodes( new CTePHP_274_indSN($param,$ix) );
		}
		return $ret;
	}
	public function set_275_infAdFisco ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_275_infAdFisco",$param,"ER32")) { 						// ER32
			$ret = $this->addNodes( new CTePHP_275_infAdFisco($param,$ix) );
		}
		return $ret;
	}
	public function set_276_infCTeNorm ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_276_infCTeNorm($param,$ix) );
		return $ret;
	}
	public function set_277_infCarga ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_277_infCarga($param,$ix) );
		return $ret;
	}
	public function set_278_vCarga ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_278_vCarga",$param,"ER23")) { 							// ER23
			$ret = $this->addNodes( new CTePHP_278_vCarga($param,$ix) );
		}
		return $ret;
	}
	public function set_279_proPred ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_279_proPred",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_279_proPred($param,$ix) );
		}
		return $ret;
	}
	public function set_280_xOutCat ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_280_xOutCat",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_280_xOutCat($param,$ix) );
		}
		return $ret;
	}
	public function set_281_infQ ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_281_infQ($param,$ix) );
		return $ret;
	}
	public function set_282_cUnid ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_282_cUnid",$param,"D15")) {								// D15
			$ret = $this->addNodes( new CTePHP_282_cUnid($param,$ix) );
		}
		return $ret;
	}
	public function set_283_tpMed ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_283_tpMed",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_283_tpMed($param,$ix) );
		}
		return $ret;
	}
	public function set_284_qCarga ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_284_qCarga",$param,"ER17")) { 							// ER17
			$ret = $this->addNodes( new CTePHP_284_qCarga($param,$ix) );
		}
		return $ret;
	}
	public function set_285_contQt ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_285_contQt($param,$ix) );
		return $ret;
	}
	public function set_286_nCont ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_286_nCont",$param,"ER42")) { 							// ER42
			$ret = $this->addNodes( new CTePHP_286_nCont($param,$ix) );
		}
		return $ret;
	}
	public function set_287_lacContQt ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_287_lacContQt($param,$ix) );
		return $ret;
	}
	public function set_288_nLacre ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_288_nLacre",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_288_nLacre($param,$ix) );
		}
		return $ret;
	}
	public function set_289_dPrev ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_289_dPrev",$param,"ER9")) { 								// ER9
			$ret = $this->addNodes( new CTePHP_289_dPrev($param,$ix) );
		}
		return $ret;
	}
	public function set_290_docAnt ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_290_docAnt($param,$ix) );
		return $ret;
	}
	public function set_291_emiDocAnt ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_291_emiDocAnt($param,$ix) );
		return $ret;
	}
	public function set_292_CNPJ ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_292_CNPJ",$param,"ER6")) { 								// ER6
			$ret = $this->addNodes( new CTePHP_292_CNPJ($param,$ix) );
		}
		return $ret;
	}
	public function set_293_CPF ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_293_CPF",$param,"ER7")) { 								// ER7
			$ret = $this->addNodes( new CTePHP_293_CPF($param,$ix) );
		}
		return $ret;
	}
	public function set_294_IE ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_294_IE",$param,"ER25")) { 								// ER25
			$ret = $this->addNodes( new CTePHP_294_IE($param,$ix) );
		}
		return $ret;
	}
	public function set_295_UF ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_295_UF",$param,"D5")) {									// D5
			$ret = $this->addNodes( new CTePHP_295_UF($param,$ix) );
		}
		return $ret;
	}
	public function set_296_xNome ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_296_xNome",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_296_xNome($param,$ix) );
		}
		return $ret;
	}
	public function set_297_idDocAnt ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_297_idDocAnt($param,$ix) );
		return $ret;
	}
	public function set_298_idDocAntPap ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_298_idDocAntPap($param,$ix) );
		return $ret;
	}
	public function set_299_tpDoc ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_299_tpDoc",$param,"D24")) {								// D24
			$ret = $this->addNodes( new CTePHP_299_tpDoc($param,$ix) );
		}
		return $ret;
	}
	public function set_300_serie ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_300_serie",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_300_serie($param,$ix) );
		}
		return $ret;
	}
	public function set_301_subser ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_301_subser",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_301_subser($param,$ix) );
		}
		return $ret;
	}
	public function set_302_nDoc ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_302_nDoc",$param,"ER39")) { 								// ER39
			$ret = $this->addNodes( new CTePHP_302_nDoc($param,$ix) );
		}
		return $ret;
	}
	public function set_303_dEmi ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_303_dEmi",$param,"ER9")) { 								// ER9
			$ret = $this->addNodes( new CTePHP_303_dEmi($param,$ix) );
		}
		return $ret;
	}
	public function set_304_idDocAntEle ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_304_idDocAntEle($param,$ix) );
		return $ret;
	}
	public function set_305_chave ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_305_chave",$param,"ER3")) { 								// ER3
			$ret = $this->addNodes( new CTePHP_305_chave($param,$ix) );
		}
		return $ret;
	}
	public function set_306_seg ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_306_seg($param,$ix) );
		return $ret;
	}
	public function set_307_respSeg ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_307_respSeg",$param,"D16")) {							// D16
			$ret = $this->addNodes( new CTePHP_307_respSeg($param,$ix) );
		}
		return $ret;
	}
	public function set_308_xSeg ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_308_xSeg",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_308_xSeg($param,$ix) );
		}
		return $ret;
	}
	public function set_309_nApol ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_309_nApol",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_309_nApol($param,$ix) );
		}
		return $ret;
	}
	public function set_310_nAver ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_310_nAver",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_310_nAver($param,$ix) );
		}
		return $ret;
	}
	public function set_311_vCarga ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_311_vCarga",$param,"ER24")) { 							// ER24
			$ret = $this->addNodes( new CTePHP_311_vCarga($param,$ix) );
		}
		return $ret;
	}
	public function set_312_infModal ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_312_infModal($param,$ix) );
		return $ret;
	}
	public function set_313_versaoModal ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_313_versaoModal",$param,"ER40")) { 						// ER40
			$ret = $this->addNodes( new CTePHP_313_versaoModal($param,$ix) );
		}
		return $ret;
	}
	public function set_314_xs ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_314_xs($param,$ix) );
		return $ret;
	}
	
	// ******************************************** MODAL ******************************************
	public function append_314_modal($fragment,$ix) {
		if(!empty($this->arr_nodes[314][$ix]->element)) {
			$this->arr_nodes[314][$ix]->element->appendChild($fragment);
		}
	}
	// ******************************************** MODAL ******************************************
	
	public function set_315_peri ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_315_peri($param,$ix) );
		return $ret;
	}
	public function set_316_nONU ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_316_nONU",$param,"ER41")) { 								// ER41
			$ret = $this->addNodes( new CTePHP_316_nONU($param,$ix) );
		}
		return $ret;
	}
	public function set_317_xNomeAE ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_317_xNomeAE",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_317_xNomeAE($param,$ix) );
		}
		return $ret;
	}
	public function set_318_xClaRisco ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_318_xClaRisco",$param,"ER32")) { 						// ER32
			$ret = $this->addNodes( new CTePHP_318_xClaRisco($param,$ix) );
		}
		return $ret;
	}
	public function set_319_grEmb ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_319_grEmb",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_319_grEmb($param,$ix) );
		}
		return $ret;
	}
	public function set_320_qTotProd ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_320_qTotProd",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_320_qTotProd($param,$ix) );
		}
		return $ret;
	}
	public function set_321_qVolTipo ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_321_qVolTipo",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_321_qVolTipo($param,$ix) );
		}
		return $ret;
	}
	public function set_322_pontoFulgor ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_322_pontoFulgor",$param,"ER32")) { 						// ER32
			$ret = $this->addNodes( new CTePHP_322_pontoFulgor($param,$ix) );
		}
		return $ret;
	}
	public function set_323_veicNovos ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_323_veicNovos($param,$ix) );
		return $ret;
	}
	public function set_324_chassi ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_324_chassi",$param,"ER42")) { 							// ER42
			$ret = $this->addNodes( new CTePHP_324_chassi($param,$ix) );
		}
		return $ret;
	}
	public function set_325_cCor ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_325_cCor",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_325_cCor($param,$ix) );
		}
		return $ret;
	}
	public function set_326_xCor ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_326_xCor",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_326_xCor($param,$ix) );
		}
		return $ret;
	}
	public function set_327_cMod ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_327_cMod",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_327_cMod($param,$ix) );
		}
		return $ret;
	}
	public function set_328_vUnit ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_328_vUnit",$param,"ER23")) { 							// ER23
			$ret = $this->addNodes( new CTePHP_328_vUnit($param,$ix) );
		}
		return $ret;
	}
	public function set_329_vFrete ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_329_vFrete",$param,"ER23")) { 							// ER23
			$ret = $this->addNodes( new CTePHP_329_vFrete($param,$ix) );
		}
	}
	public function set_330_cobr ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_330_cobr($param,$ix) );
		return $ret;
	}
	public function set_331_fat ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_331_fat($param,$ix) );
		return $ret;
	}
	public function set_332_nFat ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_332_nFat",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_332_nFat($param,$ix) );
		}
		return $ret;
	}
	public function set_333_vOrig ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_333_vOrig",$param,"ER24")) { 							// ER24
			$ret = $this->addNodes( new CTePHP_333_vOrig($param,$ix) );
		}
		return $ret;
	}
	public function set_334_vDesc ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_334_vDesc",$param,"ER24")) { 							// ER24
			$ret = $this->addNodes( new CTePHP_334_vDesc($param,$ix) );
		}
		return $ret;
	}
	public function set_335_vLiq ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_335_vLiq",$param,"ER24")) { 								// ER24
			$ret = $this->addNodes( new CTePHP_335_vLiq($param,$ix) );
		}
		return $ret;
	}
	public function set_336_dup ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_336_dup($param,$ix) );
		return $ret;
	}
	public function set_337_nDup ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_337_nDup",$param,"ER32")) { 								// ER32
			$ret = $this->addNodes( new CTePHP_337_nDup($param,$ix) );
		}
		return $ret;
	}
	public function set_338_dVenc ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_338_dVenc",$param,"ER9")) { 								// ER9
			$ret = $this->addNodes( new CTePHP_338_dVenc($param,$ix) );
		}
		return $ret;
	}
	public function set_339_vDup ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_339_vDup",$param,"ER24")) { 								// ER24
			$ret = $this->addNodes( new CTePHP_339_vDup($param,$ix) );
		}
		return $ret;
	}
	public function set_340_infCteSub ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_340_infCteSub($param,$ix) );
		return $ret;
	}
	public function set_341_chCte ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_341_chCte",$param,"ER3")) { 								// ER3
			$ret = $this->addNodes( new CTePHP_341_chCte($param,$ix) );
		}
		return $ret;
	}
	public function set_342_tomaICMS ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_342_tomaICMS($param,$ix) );
		return $ret;
	}
	public function set_343_refNFe ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_343_refNFe",$param,"ER3")) { 							// ER3
			$ret = $this->addNodes( new CTePHP_343_refNFe($param,$ix) );
		}
		return $ret;
	}
	public function set_344_refNF ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_344_refNF($param,$ix) );
		return $ret;
	}
	public function set_345_CNPJ ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_345_CNPJ",$param,"ER4")) { 								// ER4
			$ret = $this->addNodes( new CTePHP_345_CNPJ($param,$ix) );
		}
		return $ret;
	}
	public function set_346_mod ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_346_mod",$param,"D25")) {								// D25
			$ret = $this->addNodes( new CTePHP_346_mod($param,$ix) );
		}
		return $ret;
	}
	public function set_347_serie ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_347_serie",$param,"ER30")) { 							// ER30
			$ret = $this->addNodes( new CTePHP_347_serie($param,$ix) );
		}
		return $ret;
	}
	public function set_348_subserie ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_348_subserie",$param,"ER30")) { 							// ER30
			$ret = $this->addNodes( new CTePHP_348_subserie($param,$ix) );
		}
		return $ret;
	}
	public function set_349_nro ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_349_nro",$param,"ER43")) { 								// ER43
			$ret = $this->addNodes( new CTePHP_349_nro($param,$ix) );
		}
		return $ret;
	}
	public function set_350_valor ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_350_valor",$param,"ER23")) { 							// ER23
			$ret = $this->addNodes( new CTePHP_350_valor($param,$ix) );
		}
		return $ret;
	}
	public function set_351_dEmi ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_351_dEmi",$param,"ER9")) { 								// ER9
			$ret = $this->addNodes( new CTePHP_351_dEmi($param,$ix) );
		}
		return $ret;
	}
	public function set_352_refCte ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_352_refCte",$param,"ER3")) { 							// ER3
			$ret = $this->addNodes( new CTePHP_352_refCte($param,$ix) );
		}
		return $ret;
	}
	public function set_353_tomaNaoICMS ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_353_tomaNaoICMS($param,$ix) );
		return $ret;
	}
	public function set_354_refCteAnu ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_354_refCteAnu",$param,"ER3")) { 							// ER3
			$ret = $this->addNodes( new CTePHP_354_refCteAnu($param,$ix) );
		}
		return $ret;
	}
	public function set_355_infCteComp ($param=null,$ix=0) { 
		$ret = '';
		$ret = $this->addNodes( new CTePHP_355_infCteComp($param,$ix) );
		return $ret;
	}
	public function set_356_chave ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateRegExp("set_356_chave",$param,"ER3")) { 								// ER3
			$ret = $this->addNodes( new CTePHP_356_chave($param,$ix) );
		}
		return $ret;
	}
	public function set_357_vPresComp ($param=null,$ix=0) { 	
		$ret = '';
		$ret = $this->addNodes( new CTePHP_357_vPresComp($param,$ix) );
		return $ret;
	}
	public function set_358_vTPrest ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateRegExp("set_358_vTPrest",$param,"ER23")) { 							// ER23
			$ret = $this->addNodes( new CTePHP_358_vTPrest($param,$ix) );
		}
		return $ret;
	}
	public function set_359_compComp ($param=null,$ix=0) { 	
		$ret = '';
		$ret = $this->addNodes( new CTePHP_359_compComp($param,$ix) );
		return $ret;
	}
	public function set_360_xNome ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateRegExp("set_360_xNome",$param,"ER32")) { 							// ER32
			$ret = $this->addNodes( new CTePHP_360_xNome($param,$ix) );
		}
		return $ret;
	}
	public function set_361_vComp ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateRegExp("set_361_vComp",$param,"ER23")) { 							// ER23
			$ret = $this->addNodes( new CTePHP_361_vComp($param,$ix) );
		}
		return $ret;
	}
	public function set_362_impComp ($param=null,$ix=0) { 	
		$ret = '';
		$ret = $this->addNodes( new CTePHP_362_impComp($param,$ix) );
		return $ret;
	}
	public function set_363_ICMSComp ($param=null,$ix=0) { 	
		$ret = '';
		$ret = $this->addNodes( new CTePHP_363_ICMSComp($param,$ix) );
		return $ret;
	}
	public function set_364_ICMS00 ($param=null,$ix=0) { 	
		$ret = '';
		$ret = $this->addNodes( new CTePHP_364_ICMS00($param,$ix) );
		return $ret;
	}
	public function set_365_CST ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateDomain("set_365_CST",$param,"D17")) {								// D17
			$ret = $this->addNodes( new CTePHP_365_CST($param,$ix) );
		}
		return $ret;
	}
	public function set_366_vBC ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateRegExp("set_366_vBC",$param,"ER23")) { 								// ER23
			$ret = $this->addNodes( new CTePHP_366_vBC($param,$ix) );
		}
		return $ret;
	}
	public function set_367_pICMS ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateRegExp("set_367_pICMS",$param,"ER10")) {								// ER10
			$ret = $this->addNodes( new CTePHP_367_pICMS($param,$ix) );
		}
		return $ret;
	}
	public function set_368_vICMS ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateRegExp("set_368_vICMS",$param,"ER23")) { 							// ER23
			$ret = $this->addNodes( new CTePHP_368_vICMS($param,$ix) );
		}
		return $ret;
	}
	public function set_369_ICMS20 ($param=null,$ix=0) { 	
		$ret = '';
		$ret = $this->addNodes( new CTePHP_369_ICMS20($param,$ix) );
		return $ret;
	}
	public function set_370_CST ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateDomain("set_370_CST",$param,"D18")) {								// D18
			$ret = $this->addNodes( new CTePHP_370_CST($param,$ix) );
		}
		return $ret;
	}
	public function set_371_pRedBC ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateRegExp("set_371_pRedBC",$param,"ER11")) { 							// ER11
			$ret = $this->addNodes( new CTePHP_371_pRedBC($param,$ix) );
		}
		return $ret;
	}
	public function set_372_vBC ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateRegExp("set_372_vBC",$param,"ER23")) { 								// ER23
			$ret = $this->addNodes( new CTePHP_372_vBC($param,$ix) );
		}
		return $ret;
	}
	public function set_373_pICMS ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateRegExp("set_373_pICMS",$param,"ER10")) {								// ER10
			$ret = $this->addNodes( new CTePHP_373_pICMS($param,$ix) );
		}
		return $ret;
	}
	public function set_374_vICMS ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateRegExp("set_374_vICMS",$param,"ER23")) { 							// ER23
			$ret = $this->addNodes( new CTePHP_374_vICMS($param,$ix) );
		}
		return $ret;
	}
	public function set_375_ICMS45 ($param=null,$ix=0) { 	
		$ret = '';
		$ret = $this->addNodes( new CTePHP_375_ICMS45($param,$ix) );
		return $ret;
	}
	public function set_376_CST ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateDomain("set_376_CST",$param,"D19")) {								// D19
			$ret = $this->addNodes( new CTePHP_376_CST($param,$ix) );
		}
		return $ret;
	}
	public function set_377_ICMS60 ($param=null,$ix=0) { 	
		$ret = '';
		$ret = $this->addNodes( new CTePHP_377_ICMS60($param,$ix) );
		return $ret;
	}
	public function set_378_CST ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateDomain("set_378_CST",$param,"D20")) {								// D20
			$ret = $this->addNodes( new CTePHP_378_CST($param,$ix) );
		}
		return $ret;
	}
	public function set_379_vBCSTRet ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateRegExp("set_379_vBCSTRet",$param,"ER23")) { 							// ER23
			$ret = $this->addNodes( new CTePHP_379_vBCSTRet($param,$ix) );
		}
		return $ret;
	}
	public function set_380_vICMSSTRet ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateRegExp("set_380_vICMSSTRet",$param,"ER23")) { 						// ER23
			$ret = $this->addNodes( new CTePHP_380_vICMSSTRet($param,$ix) );
		}
		return $ret;
	}
	public function set_381_pICMSSTRet ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateRegExp("set_381_pICMSSTRet",$param,"ER10")) {						// ER10
			$ret = $this->addNodes( new CTePHP_381_pICMSSTRet($param,$ix) );
		}
		return $ret;
	}
	public function set_382_vCred ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateRegExp("set_382_vCred",$param,"ER23")) { 							// ER23
			$ret = $this->addNodes( new CTePHP_382_vCred($param,$ix) );
		}
		return $ret;
	}
	public function set_383_ICMS90 ($param=null,$ix=0) { 	
		$ret = '';
		$ret = $this->addNodes( new CTePHP_383_ICMS90($param,$ix) );
		return $ret;
	}
	public function set_384_CST ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateDomain("set_384_CST",$param,"D21")) {								// D21
			$ret = $this->addNodes( new CTePHP_384_CST($param,$ix) );
		}
		return $ret;
	}
	public function set_385_pRedBC ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateRegExp("set_385_pRedBC",$param,"ER11")) { 							// ER11
			$ret = $this->addNodes( new CTePHP_385_pRedBC($param,$ix) );
		}
		return $ret;
	}
	public function set_386_vBC ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_386_vBC",$param,"ER23")) { 								// ER23
			$ret = $this->addNodes( new CTePHP_386_vBC($param,$ix) );
		}
		return $ret;
	}
	public function set_387_pICMS ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateRegExp("set_387_pICMS",$param,"ER10")) {								// ER10
			$ret = $this->addNodes( new CTePHP_387_pICMS($param,$ix) );
		}
		return $ret;
	}
	public function set_388_vICMS ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateRegExp("set_388_vICMS",$param,"ER23")) { 							// ER23
			$ret = $this->addNodes( new CTePHP_388_vICMS($param,$ix) );
		}
		return $ret;
	}
	public function set_389_vCred ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateRegExp("set_389_vCred",$param,"ER23")) { 							// ER23
			$ret = $this->addNodes( new CTePHP_389_vCred($param,$ix) );
		}
		return $ret;
	}
	public function set_390_ICMSOutraUF ($param=null,$ix=0) { 	
		$ret = '';
		$ret = $this->addNodes( new CTePHP_390_ICMSOutraUF($param,$ix) );
		return $ret;
	}
	public function set_391_CST ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateDomain("set_391_CST",$param,"D21")) {								// D21
			$ret = $this->addNodes( new CTePHP_391_CST($param,$ix) );
		}			
		return $ret;
	}
	public function set_392_pRedBCOutraUF ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateRegExp("set_392_pRedBCOutraUF",$param,"ER11")) { 					// ER11
			$ret = $this->addNodes( new CTePHP_392_pRedBCOutraUF($param,$ix) );
		}
		return $ret;
	}
	public function set_393_vBCOutraUF ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateRegExp("set_393_vBCOutraUF",$param,"ER23")) { 						// ER23
			$ret = $this->addNodes( new CTePHP_393_vBCOutraUF($param,$ix) );
		}
		return $ret;
	}
	public function set_394_pICMSOutraUF ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateRegExp("set_394_pICMSOutraUF",$param,"ER10")) {						// ER10
			$ret = $this->addNodes( new CTePHP_394_pICMSOutraUF($param,$ix) );
		}
		return $ret;
	}
	public function set_395_vICMSOutraUF ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateRegExp("set_395_vICMSOutraUF",$param,"ER23")) { 						// ER23
			$ret = $this->addNodes( new CTePHP_395_vICMSOutraUF($param,$ix) );
		}
		return $ret;
	}
	public function set_396_ICMSSN ($param=null,$ix=0) { 	
		$ret = '';
		$ret = $this->addNodes( new CTePHP_396_ICMSSN($param,$ix) );
		return $ret;
	}
	public function set_397_indSN ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateDomain("set_397_indSN",$param,"D22")) {								// D22
			$ret = $this->addNodes( new CTePHP_397_indSN($param,$ix) );
		}
		return $ret;
	}
	public function set_398_infAdFisco ($param=null,$ix=0) { 	
		$ret = '';
		if ($this->validateRegExp("set_398_infAdFisco",$param,"ER32")) { 						// ER32
			$ret = $this->addNodes( new CTePHP_398_infAdFisco($param,$ix) );
		}
		return $ret;
	}
	public function set_399_infCteAnu ($param=null,$ix=0) { 	
		$ret = '';
		$ret = $this->addNodes( new CTePHP_399_infCteAnu($param,$ix) );
		return $ret;
	}
	public function set_400_chCte ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_400_chCte",$param,"ER3")) { 								// ER3
			$ret = $this->addNodes( new CTePHP_400_chCte($param,$ix) );
		}
		return $ret;
	}
	public function set_401_dEmi ($param=null,$ix=0) { 
		$ret = '';
		if ($this->validateRegExp("set_401_dEmi",$param,"ER9")) { 								// ER9
			$ret = $this->addNodes( new CTePHP_401_dEmi($param,$ix) );
		}
		return $ret;
	}
	
	private function addNodes($obj) {
		if ($obj->get_tipo()=="G") { $obj->set_element($this->dom->createElement($obj->get_name())); }
		if ($obj->get_tipo()=="E") { $obj->set_element($this->dom->createElement($obj->get_name(),$obj->get_value())); }
		if ($obj->get_tipo()=="A") { $obj->set_element($this->dom->createElement($obj->get_name(),$obj->get_value())); }
		if ($obj->get_tipo()=="M") { $obj->set_element($this->dom->createDocumentFragment()); }
		$this->arr_nodes[$obj->get_id()][] = $obj;
		return (count($this->arr_nodes[$obj->get_id()])-1);
	}
	
	private function generateTree() {
		$this->set_3_Id();
		$this->set_16_cDV();
		$aux = $this->arr_nodes;
		ksort($aux);
		foreach ($aux as $k => $v) {
			foreach ($v as $value) {
				if (isset($aux[$value->get_pai()][$value->get_index()])) {
					switch ($value->get_tipo()) {
						case 'G':
							if($value->get_element()!='') $aux[$value->get_pai()][$value->get_index()]->element->appendChild($value->get_element());
							break;
						case 'A':
							$aux[$value->get_pai()][$value->get_index()]->element->setAttribute($value->get_name(),$value->get_value());
							break;
						case 'E':
							if($value->get_element()!='') $aux[$value->get_pai()][$value->get_index()]->element->appendChild($value->get_element());
							break;
						case 'M':
							if($value->get_element()!='') $aux[$value->get_pai()][$value->get_index()]->element->appendChild($value->get_element());
							break;
					}
				}
			}
		}
		$this->CTe_Finalized = $this->CTe;
		$this->CTe_Finalized->appendChild($aux[1][0]->get_element());
	}
	
	public function viewErrors() { 
		if (count($this->arr_erro)>0) {
			echo "<pre>"; 
			print_r($this->arr_erro);
			echo "</pre>";
			die();
		} else {
			die("Nenhum erro encontrado.");
		}
	}

	public function drawXML($mode=null,$file_name=null) {
		if (count($this->arr_erro)>0) {
			echo "An error occurred attempting to save the file ".strtoupper($file_name)." using the method of the generic object.<br>";
			echo "<pre>";
			print_r($this->arr_erro);
			echo "</pre>";
		} else {
			$this->generateTree();
			$this->dom_Finalized = $this->dom;
			$this->dom_Finalized->appendChild($this->CTe_Finalized);
			$erro = $this->dom_Finalized->getElementsByTagName("erro")->length;
			if ($mode&&$erro==0) {
				switch ($mode) {
					case 'object':
						echo "<pre>"; print_r($this->arr_nodes); echo "</pre>";
						break;
					case 'tree':
						echo "<pre>"; echo htmlentities($this->dom_Finalized->saveXML()); echo "</pre>";
						break;
					case 'file':
						if ($file_name) {
							$this->dom_Finalized->saveXML();
							$this->dom_Finalized->save($file_name); 
						} else { echo "Expected file name parameter."; }
						break;
				}
			} else { if($erro==0) { echo "Expected mode parameter."; } }
		}
	}
}
?>