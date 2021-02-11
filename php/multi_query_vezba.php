<?php
    require_once "connection.php";
    $q = "INSERT INTO pacijenti VALUES (8, 'Danica', 'Nikolic', 170, 64);";
    $q .= "ALTER TABLE pacijenti ADD datum_rodjenja DATE AFTER tezina;";
    $q .= "UPDATE pacijenti SET datum_rodjenja = '1993-05-10' WHERE id=1;";
    $q .= "UPDATE pacijenti SET datum_rodjenja = '1990-11-10' WHERE id=2;";
    $q .= "UPDATE pacijenti SET datum_rodjenja = '1992-01-17' WHERE id=3;";
    $q .= "UPDATE pacijenti SET datum_rodjenja = '1986-10-17' WHERE id=4;";
    $q .= "UPDATE pacijenti SET datum_rodjenja = '1994-04-01' WHERE id=5;";
    $q .= "UPDATE pacijenti SET datum_rodjenja = '1997-09-01' WHERE id=6;";
    $q .= "UPDATE pacijenti SET datum_rodjenja = '1996-06-06' WHERE id=7;";
    $q .= "UPDATE pacijenti SET datum_rodjenja = '1991-02-22' WHERE id=8;";
    if($conn->multi_query($q)){
        echo "<p>Uspesno je izvrsen niz upita</p>";
    }
    else{
        echo "Error: " . $q. "<br>" . $conn->error;
    }