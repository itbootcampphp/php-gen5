<?php
    require_once "connection.php";

    $q = "INSERT INTO pacijenti(id, ime, prezime, visina, tezina)
            VALUES
            (1, 'Petar', 'Petković', 185, 89),
            (2, 'Tijana', 'Savić', 162, 59),
            (3, 'Veljko', 'Petrović', 175, 66),
            (4, 'Danijela', 'Savić', 168, 61),
            (5, 'Petar', 'Nikolić', 179, 77)";

    if($conn->query($q)) {
        echo "<p>Uspesno dodati redovi u tabelu pacijenti</p>";
    }
    else {
        echo "<p>Greska prilikom dodavanja redova u tabelu pacijenti: " 
                    . $conn->error . "</p>";
    }