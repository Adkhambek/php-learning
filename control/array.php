<?php
$arr1 = array("Adham", "Hasan", "Fotima", "Abdulloh");
var_dump($arr1);
$arr2 = ["Adham", "Hasan", "Fotima", "Abdulloh"];
var_dump($arr2);
$arr3 = [];
$arr3[0] = "Adham";
var_dump($arr3);

$colors = ["red", "green", "blue"];
list($red, $green, $blue) = $colors;
echo $red, $green, $blue;

$names = "Adham,Hasan,Fotima,Abdulloh";
$arr = explode(",", $names);
echo "<br>";
echo "<br>";
var_dump($arr);
echo "<br>";
echo "<br>";
$range = range(1,10);
print_r($range);
var_dump(is_array($range));
echo "<br>";
echo "<br>";
array_unshift($range, 0);
print_r($range);
echo "<br>";
echo "<br>";
array_push($range, 11);
print_r($range);
echo "<br>";
echo "<br>";
array_shift($range);
print_r($range);
echo "<br>";
echo "<br>";
array_pop($range);
print_r($range);
