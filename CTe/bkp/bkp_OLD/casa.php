<?php

$arr = array();
$doc = new DOMDocument('1.0', 'iso-8859-1');
$doc->preserveWhiteSpace = false;
$doc->formatOutput = true;
$ele = $doc->createElement('test', 'This is the root element!');

function finaliza() {
	global $arr;
	global $ele;
	$aux = $arr;
	foreach ($arr as $k => $v) {
		foreach ($v as $valor) {
			if(isset($aux[$valor[2]][$valor[1]][0])) {
				//echo $k." = ".$valor[1]." = ".$valor[2]."<br>";
				$aux[$valor[2]][$valor[1]][0]->appendChild($valor[0]);
			}
		}
	}
	$ele->appendChild($aux[4][0][0]);
}


function set_4($i=0) {
	global $arr;
	global $doc;
	$fragment = array();
	$fragment[0] = $doc->createElement('AAA');
	$fragment[1] = $i;
	$fragment[2] = 0;
	$arr[4][] = $fragment;
}
function set_5($i=0) {
	global $arr;
	global $doc;
	$fragment = array();
	$fragment[0] = $doc->createElement('BBB','1');
	$fragment[1] = $i;
	$fragment[2] = 4;
	$arr[5][] = $fragment;
	return (count($arr[5])-1);
}
function set_6($i=0) {
	global $arr;
	global $doc;
	$fragment = array();
	$fragment[0] = $doc->createElement('CCC','6');
	$fragment[1] = $i;
	$fragment[2] = 5;
	$arr[6][] = $fragment;
}

set_4();
for($i=1;$i<=10;$i++) {
	$pai = set_5();
	if($i%2==0){
		for($x=0;$x<=10;$x++) {
			set_6($pai);
		}
	}
}
set_5();
set_5();
set_5();
finaliza();
$doc->appendChild($ele);
$doc->saveXML();
$doc->save("teste.xml");
header("location: teste.xml");

?>