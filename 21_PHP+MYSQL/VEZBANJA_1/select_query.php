<?php
    require_once "connection.php";

    $q = "SELECT * FROM pacijenti";
    $result = $conn->query($q);

    if($result->num_rows) {
        // Ispitujemo da li postoje redovi kao rezultat SELECT upita
        /*
        $result->fetch_assoc() // vraca TEKUCI red kao asocijativni niz, sto znaci:
        $red = $result->fetch_assoc();
        $red['id'], $red['ime'], $red['prezime'], $red['visina'], $red['tezina'], 
        $red['datum_rodjenja']
        */
        while($red = $result->fetch_assoc()) {
            echo "<p>";
            echo $red['ime'] . ", ";
            echo $red['prezime'] . ", ";
            echo $red['visina'] . ", ";
            echo $red['tezina'];
            // echo ", " . $red['datum_rodjenja'];
            echo "</p>";
        }
    }
    else {
        echo "<p>Trenutno ne postoje pacijenti u bazi!</p>";
    }