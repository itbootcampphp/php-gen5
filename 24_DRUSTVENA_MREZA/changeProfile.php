<?php
    require_once "connection.php";
    require_once "header.php";
    require_once "validation.php";

    $id = $_SESSION["id"];

    //Postavljanje početnih vrednosti
    $validated = true;
    $name = $surname = $gender = $dob = "";
    $nameErr = $surnameErr = $dobErr =  "";

    $q = "SELECT * FROM profiles WHERE user_id = $id";
    $result = $conn->query($q);
    $red = $result->fetch_assoc();

    //Uzimamo STARE podatke iz baze
    $name = $red['name'];
    $surname = $red['surname'];
    $gender = $red['gender'];
    $dob = $red['dob'];

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        //Uzimamo NOVE podatke iz forme
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];

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

        if($validated){
            $q = "UPDATE profiles
                  SET name = '$name', surname = '$surname', dob = '$dob', gender = '$gender'
                  WHERE user_id = $id;";
            $conn->query($q);
        }   
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            <input type="submit" value="Submit">
        </p>
    </form>
</body>
</html>

<?php

?>