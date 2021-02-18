<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacija forme</title>
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>
    <?php
        $ime = $email = $bio = $pol = "";
        $imeErr = $emailErr = $bioErr = "";
        $prikazi = true;

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(empty($_POST["imePrezime"])){
                $prikazi = false;
                $imeErr = "Morate uneti ime i prezime";
            } else {
                $ime = $_POST["imePrezime"];
            }

            if(empty($_POST["email"])){
                $prikazi = false;
                $emailErr = "Morate uneti e-mail";
            } else {
                $email = $_POST["email"];
            }

            if(empty($_POST["bio"])){
                $prikazi = false;
                $bioErr = "Morate uneti biografiju";
            } else {
                $bio = $_POST["bio"];
            }

            $pol = $_POST["pol"];
        }
    ?>

    <form action="#" method="post">
        <p>
            <label for="">Ime i prezime:</label>
            <input type="text" name="imePrezime" id="" value="<?php echo $ime; ?>">
            <span class="error">* <?php echo $imeErr; ?></span>
        </p>

        <p>
            <label for="">E-mail:</label>
            <input type="email" name="email" id="" value="<?php echo $email; ?>">
            <span class="error">* <?php echo $emailErr; ?> </span>
        </p>

        <p>
            <label for="">Biografija:</label>
            <textarea name="bio" id="" cols="30" rows="10"> <?php echo $bio; ?> </textarea>
            <span class="error">* <?php echo $bioErr; ?> </span>
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
        if($prikazi){
            echo "<h2> Uneti podaci </h2>";
            echo "<p>Ime i prezime: " . $ime . "</p>";
            echo "<p>E-mail: " . $email . "</p>";
            echo "<p>Biografija: " . $bio . "</p>";
        }  

        //2. način
        // if($ime!="" && $email!="" && $bio!=""){
        //     echo "<h2> Uneti podaci </h2>";
        //     echo "<p>Ime i prezime: " . $ime . "</p>";
        //     echo "<p>E-mail: " . $email . "</p>";
        //     echo "<p>Biografija: " . $bio . "</p>";
        // }
    ?>
</body>
</html>