<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Network</title>
</head>
<body>
    <ul>
        <li><a href="register.php"> Register </a></li>
        <li><a href="login.php"> Login </a></li>
    </ul>
</body>
</html>

<?php
    session_start();
    if(!empty($_SESSION['id'])) {
        header('Location: followers.php');
    }
?>