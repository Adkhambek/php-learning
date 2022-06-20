<?php
$id = $_GET["id"];
$users = json_decode(file_get_contents("users.json"), true);
if (isset($_POST["submit"])) {
	foreach ($users as $key => $user) {
		if($user["id"] === +$id) {
			$users[$key]["username"] = $_POST["username"];
			$users[$key]["tel"] = $_POST["tel"];
			$users[$key]["email"] = $_POST["email"];
			$users[$key]["age"] = $_POST["age"];
			$users[$key]["gender"] = $_POST["gender"];

		}
	}
	file_put_contents("users.json", json_encode($users, JSON_PRETTY_PRINT));

	header("Location: index.php");
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Update</title>
	<style>
        body{
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
        }
        form {
            width: 20%;
            text-align: center;
        }
        input, select {
            width: 100%;
            padding: 3px 6px;
        }
        button {
            margin-top: 20px;
            padding: 5px 10px;
        }
	</style>
</head>
<body>
<form action="<?php echo $_SERVER["PHP_SELF"] . "?id=" . $id; ?>" method="post">
	<?php foreach ($users as $user): ?>
	<?php if($user["id"] === +$id): ?>
	<h1>Update user</h1>
	<label>
		<p>Username:</p>
		<input type="text" value="<?php echo $user['username']?>" name="username" placeholder="Username ...">
	</label>
	<label>
		<p>Tel:</p>
		<input type="text" value="<?php echo $user['tel']?>" name="tel" placeholder="Tel..." required>
	</label>
	<label>
		<p>Email:</p>
		<input type="email" value="<?php echo $user['email']?>" name="email" placeholder="Email ..." required>
	</label>
	<label>
		<p>Age:</p>
		<input type="number" value="<?php echo $user['age']?>" name="age" placeholder="Age ..." required>
	</label>
	<label>
		<p>Gender:</p>
		<select name="gender">
			<option value="male" <?php if($user['gender'] === 'male'):?>selected<?php endif;?>>Male</option>
			<option value="female" <?php if($user['gender'] === 'female'):?>selected<?php endif;?>>Female</option>
		</select>
	</label>
	<?php endif;?>
	<?php endforeach;?>
	<button type="submit" name="submit">Submit</button>
</form>
</body>
</html>
