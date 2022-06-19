<?php
// Creating an array:

$names[0] = "Adham";
print_r($names);

$languages = array("Arabic", "Uzbek", "English");
echo "<pre>";
print_r($languages);
echo "<pre>";

// Extracting arrays with list:

$full_name = "Muzaffarov Adkham";
list($last_name, $first_name) = explode(" ", $full_name);
printf("My name is %s and my surname is %s", $first_name, $last_name);

// Populating arrays with predefined value range:

$count = range(1,9);
print_r($count);

// Testing for an Array:

printf("\$count is an array: %s", (is_array($count) ? "TRUE" : "FALSE"));

// Adding a value:

$arr = [];
array_unshift($arr, "Adham", "Hasan");
print_r($arr);

array_push($arr, "Fotima");
print_r($arr);

// Removing value from array:

array_shift($arr);
print_r($arr);

array_pop($arr);
print_r($arr);

unset($arr[0]);
print_r($arr);

// Locating array elements:

//searching an array:

if(!in_array("Hasan", $arr)){
	array_push($arr, "Hasan");
}

print_r($arr);

//Searching Associative Array Keys:

$user["username"] = "Adham";
$user["age"] = 23;
$user["gender"] = "male";
$user["email"] = "muzaffarov.adhambek@gmail.com";
$user["tel"] = "998998000334";

print_r($user);
var_dump(array_key_exists("email", $user));

//Searching Associative Array Values

$finding_key = array_search("Adhambek", $user);
if($finding_key) {
	echo "Your username is Adkhambek";
}

//Retrieving Array Keys and Values;

print_r(array_keys($user));
print_r(array_values($user));

//Retrieving the Current Array Key

echo key($user)."<br>";
next($user);
echo key($user)."<br>";

//Retrieving the Current Array Value

echo current($user)."<br>";
next($user);
echo current($user)."<br>";

//Retrieving the Current Array Key and Value

//echo each($user); removed in PHP 8.0

//Counting Array Value Frequency !!!

$nums = [1,2,4,8,1,1,4,7,5];
$freq = array_count_values($nums);
print_r($freq);

//Determining Unique Array Values

$states = array("Ohio", "Iowa", "Arizona", "Iowa", "Ohio");
$uniqueStates = array_unique($states);
print_r($uniqueStates);

//Returning a Random Set of Keys

echo array_rand(range(1,100));

//Adding Array Values

echo array_sum([1,2,3,4,5]);