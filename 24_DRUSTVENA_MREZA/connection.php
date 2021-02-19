<?php
    // Formiranje tabela u bazi
    $servername = "localhost";
    $username = "admin";
    $password = "admin123";
    $database = "mreza";

    $conn = new mysqli($servername, $username, $password, $database);
    if($conn->connect_error)
    {
        die("Neuspesna konekcija: " . $conn->connect_error);
    }
    $conn->set_charset('utf8');