<?php
    require_once "connection.php";

    /*
    $q = "
        INSERT INTO pacijenti VALUES (6, 'Sava', 'Petković', 178, 88);
        INSERT INTO pacijenti VALUES (7, 'Milena', 'Mitić', 190, 88);
        UPDATE pacijenti SET prezime = 'Petronijević' WHERE id=3;
    ";
    */

    $q = "INSERT INTO pacijenti VALUES (8, 'Sava', 'Petković', 178, 88);";
    $q .= "INSERT INTO pacijenti VALUES (9, 'Milena', 'Mitić', 190, 88);";
    $q .= "UPDATE pacijenti SET prezime = 'Petronijević' WHERE id=3;";

    if($conn->multi_query($q)) {
        echo "<p>Uspesno izvrsen niz upita</p>";
    }
    else {
        echo "<p>Greska prilikom izvrsenja niza upita: "
                . $conn->error . "</p>";
    }