<?php
	$var1 = 1;
	$var2 = 3.14;
	$var3 = "This is a string";
	$var4 = false;

	echo $var1;
	echo "<br>";
	echo $var2;
	echo "<br>";
	echo $var3;
	echo "<br>";
	echo $var3[0]."<br>";
	var_dump($var4);

$num1 = 5;
$num2 = "5";

echo $num1 + $num2;
echo var_dump(+$num2);
echo gettype($num1);
var_dump(is_integer($num1));

$value1 = "Hello";
$value2 =& $value1;
echo $value1,$value2;
$value2 = "Goodbye";
echo $value1, $value2;

