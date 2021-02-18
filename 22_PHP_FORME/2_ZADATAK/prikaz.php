<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prikaz podataka</title>
</head>
<body>
    <h2>Uneli ste podatke:</h2>

    <?php
        echo $_POST["imePrezime"];
        echo "<br>";
        echo $_POST["email"];
        echo "<br>";
        echo $_POST["bio"];
        echo "<br>";
        echo $_POST["pol"];
    ?>

    <p>Kliknite <a href="index.php">ovde</a> za povratak na početnu</p>
</body>
</html>