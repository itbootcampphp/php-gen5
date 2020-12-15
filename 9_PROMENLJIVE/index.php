<?php
    echo "Zdravo";
    $a = 5; // promenljiva $a dobija vrednost 5
    echo $a;
    $dan = "utorak"; // promenljiva $dan dobija vrednost "utorak"
    echo $dan;
    $a = 3;
    echo $a;
    $a = "Stefan";
    echo $a;
    $i1 = 6;
    $i2 = 5.5;
    $b = 2 + 5;
    echo $b;
    $c = $b - 3; // Desna strana: $b - 3 = 7 - 3 = 4, Promenljiva $c dobija vrednost 4
    echo $c;
    $b = $b + 1; // Desna strana: $b + 1 = 7 + 1 = 8, Promenljiva $b dobija vrednost 8
    echo $b;
    $b = $b * 2; // Dupliranje vrednosti promenljive $b
    echo $b;

    // Zadatak 1
    $h = 17;
    $m = 14;
    echo "<br>";
    echo $h * 60 + $m;

    // Zadatak 2
    date_default_timezone_set('Europe/Belgrade');
    $sati = date("G");
    $minuti = date("i");
    $ukupnoMinuti = $minuti + $sati * 60;
    echo "<br>";
    echo $ukupnoMinuti;
?>