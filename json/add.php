<?php
$users = json_decode(file_get_contents("users.json"), true);

if (isset($_POST["submit"])) {
    $id = $users[count($users) - 1]["id"] + 1;
    $new_user = array("id" => $id) + $_POST;
    array_pop($new_user);
    array_push($users, $new_user);
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
    <title>Add</title>
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
<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
    <h1>New user</h1>
    <label>
        <p>Username:</p>
        <input type="text" name="username" placeholder="Username ..." required>
    </label>
    <label>
        <p>Tel:</p>
        <input type="text" name="tel" placeholder="Tel..." required>
    </label>
    <label>
        <p>Email:</p>
        <input type="email" name="email" placeholder="Email ..." required>
    </label>
    <label>
        <p>Age:</p>
        <input type="number" name="age" placeholder="Age ..." required>
    </label>
    <label>
        <p>Gender:</p>
        <select name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
    </label>
    <button type="submit" name="submit">Submit</button>
</form>
</body>
</html>