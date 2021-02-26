<?php
    require_once "connection.php";
    require_once "header.php";
    require_once "validation.php";

    $validated = true;
    $oldPassword = $password = $retypePassword = "";
    $oldPasswordErr = $passwordErr = $retypePasswordErr = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $oldPassword = $_POST['oldPassword'];
        $password = $_POST['password'];
        $retypePassword = $_POST['retypePassword'];

        // Old password validation
        if(oldPassword($_SESSION['id'], $oldPassword, $conn)){
            $validated = false;
            $oldPasswordErr = oldPassword($_SESSION['id'], $oldPassword, $conn);
        }

        // Password validation
        if(passwordValidation($password)){
            $validated = false;
            $passwordErr = passwordValidation($password);
        }

        // Retype password
        if(passwordValidation($retypePassword)){
            $validated = false;
            $retypePasswordErr = passwordValidation($retypePassword);
        }

        // Password == Retype password
        if($password != $retypePassword){
            $validated = false;
            $retypePasswordErr = "Password and Retype password must be the same";
        }
        else {
            $password = md5($password);
        }

        if($validated){
            $id = $_SESSION['id'];
            $q = "UPDATE users
                  SET pass = '$password'
                  WHERE id = $id;";
        
            $conn->query($q);

            $oldPassword = $password = $retypePassword = "";
            $oldPasswordErr = $passwordErr = $retypePasswordErr = "";
        }
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="#" method="post">
        <p>
            Old password:
            <input type="password" name="oldPassword">
            <span class="error">* <?php echo $oldPasswordErr; ?></span>
        </p>
        <p>
            New password:
            <input type="password" name="password">
            <span class="error">* <?php echo $passwordErr; ?></span>
        </p>
        <p>
            Retype new password:
            <input type="password" name="retypePassword">
            <span class="error">* <?php echo $retypePasswordErr; ?></span>
        </p>
        <p>
            <input type="submit" value="Submit">
        </p>
    </form>
</body>
</html>