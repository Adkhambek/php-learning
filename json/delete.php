<?php
$id = $_GET["id"];
$users = json_decode(file_get_contents("users.json"), true);

	foreach ($users as $key => $user) {
		if ($user["id"] === +$id) {
			unset($users[$key]);
		}
	}

	file_put_contents("users.json", json_encode($users, JSON_PRETTY_PRINT));

	header("Location: index.php");
