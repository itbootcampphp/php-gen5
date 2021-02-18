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
        echo $_GET["imePrezime"];
        echo "<br>";
        echo $_GET["email"];
        echo "<br>";
        echo $_GET["bio"];
        echo "<br>";
        echo $_GET["pol"];
        $znanje = $_GET["znanje"]; //Vraća niz čekiranih vrednosti u checkbox-u gde je name="znanje"
        echo "<ul>";
            foreach($znanje as $z){
                echo "<li>";
                echo $z;
                echo "</li>";
            }
        echo "</ul>";
    ?>

    <p>Kliknite <a href="index.php">ovde</a> za povratak na početnu</p>
</body>
</html>