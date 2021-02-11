<?php
    require_once "connection.php";

    $q = "CREATE TABLE IF NOT EXISTS pacijenti(
            id INT UNSIGNED,
            ime VARCHAR(50),
            prezime VARCHAR(150),
            visina SMALLINT UNSIGNED,
            tezina FLOAT UNSIGNED,
            PRIMARY KEY(id)
        )";
    
    $resultOfQuery = $conn->query($q);
    var_dump($resultOfQuery);

    if($resultOfQuery) {
        echo "<p>Tabela pacijenti je uspesno dodata u bazu!</p>";
    }
    else {
        $err = $conn->error;
        echo "<p>Doslo je do greske prilikom kreiranja tabele pacijenti: $err</p>";
    }