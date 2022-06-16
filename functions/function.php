<?php
function welcome() {
	echo "Welcome to function"."<br>";
}

function add($num1, $num2) {
	echo $num1 + $num2."<br>";
}

function referencing(&$num) {
	$num = 12;
}

function arrayLength($arr) {
	return count($arr);
}

function power($num, $pow = 2) {
	return $num ** $pow;
}

function dynamic() {
	echo "This is a dynamic function call<br>";
}

$anonymous = function () {
	echo "This is anonymous function<br>";
};

$num = 12;

function abc() {
	global $num;
	echo "The number is $num";
}

function factorial($n) {
	if($n < 0) return -1;
	if($n === 0) return 1;
	return $n * factorial($n - 1);
}

echo factorial(5);
abc();
$anonymous();
$func = "dynamic";
$func();
$number = 13;
referencing($number);
echo $number."<br>";
add(12,12);
welcome();
echo arrayLength([1,2,3,4])."<br>";
echo power(3,3)."<br>";
echo power(12);
echo "<br>";
//echo($_SERVER["HTTP_REFERER"]);
$recipe = "spaghetti";
$$recipe = "meatballs";
echo $recipe, $spaghetti;

$capitals["uzb"] = "Tashkent";
echo "The capital of Uzbekistan is {$capitals['uzb']}.";