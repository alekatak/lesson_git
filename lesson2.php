<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php

//$x = rand(0,100);
//echo "Число ".$x;
$x = $_GET['x'];

$n1 = 1;
$n2 = 1;

while ( ($n1 <= $x) || ($n1 > $x)) {

if ($n1 > $x)
{
echo "задуманное число не входит в числовой ряд";
echo "<br>"."конец";
break;
}
else 	  {

	if ($n1 === $x)
	{
	echo  "задуманное число входит в числовой ряд";
	echo  "<br>"."конец";
	break;
	}
	else
	{
	$n3 = $n1;
	$n1 = $n1 + $n2;
	$n2 = $n3;
	}
			}
							}
?>
