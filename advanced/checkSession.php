<?php
session_start();
if(isset($_SESSION["username"])){
	$username = $_SESSION["username"];
	$email = $_SESSION["email"];
	echo "<h1>Hello, $username</h1>";
	echo "<p>Your email is $email</p>";
	echo "<a href='logout.php'>LOGOUT</a>";
} else {
	echo "You are not logged in";
}