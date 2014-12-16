<?php
$arr = array();

$arr[0][1] = '111';
$arr[0][2] = '222';
$arr[0][3] = '333';
$arr[0][4] = '444';

$arr[1][5] = '555';
$arr[1][6] = '666';
$arr[1][7] = '777';

$arr[6][8] = '888';
$arr[6][9] = '999';

function arvore($arr,$level=0) {
	if(isset($arr[$level])) {
		echo "<ul>";
		foreach($arr[$level] as $key => $value) {
			echo "<li>".$value."</li>";
			if (isset($arr[$key])) { arvore($arr,$key); }
		}
		echo "</ul>";
	}
}

arvore($arr);

?>