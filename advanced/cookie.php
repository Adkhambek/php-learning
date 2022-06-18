<?php

if(isset($_POST["submit"])){
    echo "Go";
    $username = htmlentities($_POST["username"]);
    setcookie("username", $username);
    header("Location: checkCookie.php");
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cookie</title>
</head>
<body>
<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post" >
    <input type="text", name="username" placeholder="Enter your username..." required>
    <button type="submit" name="submit">Submit</button>
</form>
</body>
</html>
