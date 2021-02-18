<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP + FORME - 2. Zadatak</title>
</head>
<body>
    <form action="prikaz.php" method="get">
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
            <label for="">Znanje:</label>
            <input type="checkbox" name="znanje[]" id="" value="html">HTML
            <input type="checkbox" name="znanje[]" id="" value="css">CSS
            <input type="checkbox" name="znanje[]" id="" value="js">JS
            <input type="checkbox" name="znanje[]" id="" value="php">PHP
        </p>

        <p>
            <input type="submit" name="submit" value="Pošalji">
            <input type="reset" name="reset" value="Restuj">
        </p>
    </form>
</body>
</html>