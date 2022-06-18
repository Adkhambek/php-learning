<?php
	setcookie("username", "Abror", time() - 3600);
	if(isset($_COOKIE["username"])){
		echo "The username is ".$_COOKIE["username"];
	} else {
		echo "The user is not set";
	}