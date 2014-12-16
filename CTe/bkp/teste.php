<?php

$arr = array('100','80','70','68','54','32','20','18','15','5');
$mx = max($arr);
echo $mx;
?>

<html>
<body>
<table width='100%'>
<?php

$cont = 1;
foreach($arr as $value) {
	echo "<tr><td width='10%'>".$cont."</td><td width='70%' bgcolor='#EEE'>";
	
	echo "</td><td width='20%'>".$value."</td></tr>";
	$cont++;
}

?>
</table>
</body>
</html>