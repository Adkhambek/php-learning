<?php
$users = json_decode(file_get_contents("users.json"));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Table</title>
    <style>
        body {
            font-size: 18px;
        }
        table, th, td {
            border: 1px solid;
        }
        table {
            text-align: center;
            width: 100%;
        }
    </style>
</head>
<body>
    <h1>User data:</h1>
    <a href="add.php">New user add</a>
    <table>
        <tr>
            <th>Num</th>
            <th>Username</th>
            <th>Email</th>
            <th>Tel</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Action</th>
        </tr>
		<?php $i = 1; foreach ($users as $user): ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $user->username ?></td>
            <td><?php echo $user->email ?></td>
            <td><?php echo $user->tel ?></td>
            <td><?php echo $user->gender ?></td>
            <td><?php echo $user->age ?></td>
            <td>
                <a href="update.php?id=<?php echo $user->id?>">update</a>
                <a href="delete.php?id=<?php echo $user->id?>">delete</a>
            </td>
        </tr>
        <?php $i++; endforeach; ?>
    </table>
</body>
</html>