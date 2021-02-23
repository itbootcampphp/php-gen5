<?php
    // Otvaranje sesije na pocetku stranice
    session_start();

    require_once 'connection.php';
    $usernameError = $passError = "*";

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        // korisnik je poslao username i pass i pokusava logovanje
        $username = $conn->real_escape_string($_POST['username']);
        $pass = $conn->real_escape_string($_POST['pass']);
        $val = true;
        if(empty($username)) {
            $val = false;
            $usernameError = "Username cannot be left blank!";
        }
        if(empty($pass)) {
            $val = false;
            $passError = "Password cannot be left blank!";
        }
        if($val) {
            // Pokusamo da ulogujemo korisnika samo ako su sva polja
            // forme neprazna
            $sql = "SELECT * FROM users WHERE username = '$username'";
            $result = $conn->query($sql);
            if($result->num_rows == 0) {
                $usernameError = "This username doesn't exist!";
            }
            else {
                // Postoji korisnicko ime, treba proveriti sifre
                $row = $result->fetch_assoc();
                $dbPass = $row['pass'];
                if($dbPass != md5($pass)) {
                    $passError = "Incorrect password!";
                }
                else {
                    // ovde vrsimo logovanje
                    $_SESSION['id'] = $row['id'];
                    // $_SESSION['full_name'] = ...
                    header('Location: followers.php');
                }
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to the site!</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="POST">
        <label for="username">Username: </label>
        <input type="text" name="username" id="username">
        <span class='error'><?php echo $usernameError ?></span>

        <br>
        <label for="pass">Password: </label>
        <input type="password" name="pass" id="pass">
        <span class='error'><?php echo $passError ?></span>

        <br>
        <input type="submit" value="Log in!">
    </form>
</body>
</html>