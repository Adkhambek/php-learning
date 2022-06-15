<?php
$arr = [23,55,13,6,99,75,34,58,90,12,7,19,3];
sort($arr);
print_r($arr);

for ($i = 0; $i < count($arr); $i++) {
	echo "Number is ".$arr[$i]."<br>";
}
