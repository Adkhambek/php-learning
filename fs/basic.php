<?php

$path = $_SERVER["SCRIPT_NAME"];
echo basename($path) . "<br>";
echo dirname($path)  . "<br>";
echo "<pre>";
print_r(pathinfo($path));
echo "</pre>";
$dataPath = realpath("./data.txt");
echo $dataPath . "<br>";

//Determining a File’s Size

$bytes = filesize($dataPath);
$kilobytes = round($bytes/1024, 2);
echo "Bytes: " . $bytes . "<br>";
echo  "Kilobytes: " .$kilobytes . "<br>";

// check file exists:

echo file_exists($dataPath) . "<br>";

// Working with file:

// Read file:
$data = file_get_contents($dataPath);
echo $data;

//Create directory:
//mkdir("test");

//Delete dir:
//rmdir("test");

// Delete file:

//unlink($dataPath);

// Write file:
//file_put_contents($dataPath, "Goodbye World");


//$current = file_get_contents($dataPath);
//$current .= " Goodbye World";
//file_put_contents($dataPath, $current);

// Open file:

//$handle = fopen($dataPath, "r");
//$data = fread($handle, filesize($dataPath));
//echo "<br>";
//echo $data;
//fclose($handle);

$handle = fopen("./data2.txt", "w");
$txt = "Hello, My name is Adkham";
fwrite($handle, $txt);

fclose($handle);