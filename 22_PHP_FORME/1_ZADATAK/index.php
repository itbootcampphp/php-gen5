<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP + Forme - Zadatak 1</title>
</head>
<body>

    <?php
        $ime = $email = $bio = $pol = "";
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $ime = $_POST["imePrezime"];
            $email = $_POST["email"];
            $bio = $_POST["bio"];
            $pol = $_POST["pol"];
        }
    ?>
    
    <form action="#" method="post">
        <p>
            <label for="">Ime i prezime:</label>
            <input type="text" name="imePrezime" id="">
        </p>

        <p>
            <label for="">E-mail:</label>
            <input type="email" name="email" id="">
        </p>

        <p>
            <label for="">Biografija:</label>
            <textarea name="bio" id="" cols="30" rows="10"></textarea>
        </p>

        <p>
            <label for="">Pol:</label>
            <input type="radio" name="pol" id="" value="z">Ženski
            <input type="radio" name="pol" id="" value="m">Muški
            <input type="radio" name="pol" id="" value="d" checked>Drugo
        </p>

        <p>
            <input type="submit" name="submit" value="Pošalji">
            <input type="reset" name="reset" value="Restuj">
        </p>
    </form>

    <?php
        echo "<h2>Uneli ste podatke:</h2>";
        echo $ime;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $bio;
        echo "<br>";
        echo $pol;
    ?>

</body>
</html>