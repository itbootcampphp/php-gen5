<?php
    // Prvi nacin zadavanja asocijativnih nizova
    $age = array(
        "Pera" => 43,
        "Mika" => 26,
        "Lazar" => 22
    );

    var_dump($age);
    echo $age["Pera"];
    echo "<br>";
    echo $age["Lazar"];

    // Drugi nacin zadavanja asocijativnih nizova
    $godine["Rasa"] = 50;
    $godine["Zika"] = 18;
    $godine["Milica"] = 24;
    var_dump($godine);

    /*
    FOR petlja se ne moze koristiti za prolazak kroz elemente asocijativnog niza
    for($i = 0; $i < count($age); $i++)
    {
        echo $age[$i] . "<br>";
    }
    */

    foreach($age as $key => $value)
    {
        echo "<p>Element sa kljucem $key ima vrednost $value</p>";
    }

    foreach($godine as $k => $v)
    {
        echo "<p>Element iz niza godine sa kljucem $k ima vrednost $v</p>";
    }

    foreach($godine as $v)
    {
        echo "<p>Element iz niza godine ima vrednost $v</p>";
    }

    // Foreach petlja moze da se koristi i za indeksne nizove
    $brojevi = array(4, -9, 3.3, 9.04, -13);
    foreach($brojevi as $broj)
    {
        echo $broj . "&nbsp;";
    }
    echo "<br>";

    foreach($brojevi as $i => $broj)
    {
        echo "<p>Broj sa indeksom $i ima vrednost $broj</p>";
    }

    // Zadatak 1
    $automobili = array(
        "Audi A3" => 2004,
        "Opel Astra" => 2018,
        "Fiat Punto" => 2000,
        "Opel Corsa" => 1999,
        "Ford Focus" => 2015,
        "Peugeot 508" => 2007
    );

    // Ispisati sve automobile, kao i njihova godišta.
    foreach($automobili as $marka => $godiste)
    {
        echo "<p>Automobil $marka proizveden $godiste. godine</p>";
    }

    // Ispisati automobile koji su stariji od 10 godina.
    $trenutnaGodina = date('Y');
    foreach($automobili as $marka => $godiste)
    {
        if($trenutnaGodina - $godiste > 10)
        {
            echo "<p>Automobil $marka stariji je od 10 godina</p>";
        }
    }

    // Ispisati automobile čija Marka sarži string “Opel”, a proizvedena su posle 2000. godine.
    foreach($automobili as $marka => $godiste)
    {
        if(strpos($marka, "Opel") !== false && $godiste >= 2000)
        {
            echo "<p>Automobil $marka proizveden je posle 2000. godine</p>";
        }
    }
?>