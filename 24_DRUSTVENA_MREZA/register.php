<?php
    require_once "connection.php";
    //require_once "header.php";
    require_once "validation.php";

    $validated = true;
    $name = $surname = $gender = $dob = $username = $password = $retypePassword = "";
    $nameErr = $surnameErr = $dobErr = $usernameErr = $passwordErr = $retypePasswordErr = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $retypePassword = $_POST['retypePassword'];

        // Name validation
        if(textValidation($name)){
            $validated = false;
            $nameErr = textValidation($name);
        }
        else {
            $name = trim($name); //Odsecanje praznina pre i nakon stringa
            $name = preg_replace('/\s\s+/', ' ', $name); //Odsecanje duplih praznina unutar stringa
        }

        // Surname validation
        if(textValidation($surname)){
            $validated = false;
            $surnameErr = textValidation($surname);
        }
        else {
            $surname = trim($surname); //Odsecanje praznina pre i nakon stringa
            $surname = preg_replace('/\s\s+/', ' ', $surname); //Odsecanje duplih praznina unutar stringa
        }

        // Date of birth validation
        if(dobValidation($dob)){
            $validated = false;
            $dobErr = dobValidation($dob);
        }

        // Username validation
        if(usernameValidation($username, $conn)){
            $validated = false;
            $usernameErr = usernameValidation($username, $conn);
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
            $q = "INSERT INTO `users`(`username`, `pass`) 
                VALUES ('$username', '$password');";

            if($conn->query($q)) {
                //echo "<p class='success'>Successfully added user in table users</p>";
                $q = "SELECT `id` 
                    FROM `users` 
                    WHERE `username` LIKE '$username'";

                $result = $conn->query($q);
                $red = $result->fetch_assoc();
                $id = $red['id'];

                $q = "INSERT INTO `profiles`(`name`, `surname`, `gender`, `dob`, `user_id`) 
                        VALUES ('$name', '$surname', '$gender', '$dob', '$id')";

                if($conn->query($q)) {
                    //echo "<p class='success'>Successfully added profile in table profiles</p>";
                }
                else {
                    echo "<p class='error'>Error adding profile in table profiles: " . $conn->error . "</p>";
                }
            }
            else {
                echo "<p>Error adding user in table users: " . $conn->error . "</p>";
            }

            $name = $surname = $gender = $dob = $username = $password = $retypePassword = "";
            $nameErr = $surnameErr = $dobErr = $usernameErr = $passwordErr = $retypePasswordErr = "";

            // Ulogujemo korisnika
            session_start();
            $sql = "SELECT * FROM users WHERE username = '$username'";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $_SESSION['id'] = $row['id'];
            header('Location: login.php');
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
            Name:
            <input type="text" name="name" value="<?php echo $name; ?>">
            <span class="error">* <?php echo $nameErr; ?></span>
        </p>
        <p>
            Surname:
            <input type="text" name="surname" value="<?php echo $surname; ?>">
            <span class="error">* <?php echo $surnameErr; ?></span>
        </p>
        <p>
            Gender:
            <input type="radio" name="gender" value="m" <?php if($gender=="m"){echo 'checked';} ?>>Male
            <input type="radio" name="gender" value="f" <?php if($gender=="f"){echo 'checked';} ?>>Female
            <input type="radio" name="gender" value="o" <?php if($gender!="m" && $gender!="f"){echo 'checked';} ?>>Other
        </p>
        <p>
            Data of birth:
            <input type="date" name="dob" value="<?php echo $dob; ?>">
            <span class="error"><?php echo $dobErr; ?></span>
        </p>
        <p>
            Username:
            <input type="text" name="username" value="<?php echo $username; ?>">
            <span class="error">* <?php echo $usernameErr; ?></span>
        </p>
        <p>
            Password:
            <input type="password" name="password">
            <span class="error">* <?php echo $passwordErr; ?></span>
        </p>
        <p>
            Retype password:
            <input type="password" name="retypePassword">
            <span class="error">* <?php echo $retypePasswordErr; ?></span>
        </p>
        <p>
            <input type="submit" value="Submit">
        </p>
    </form>
</body>
</html>