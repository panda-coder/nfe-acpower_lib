<?php

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
?>