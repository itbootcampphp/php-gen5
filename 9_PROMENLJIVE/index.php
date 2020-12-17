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

    // Zadatak 6
    $eur = 50;
    $srkEur = 117.58;
    $srkDol = 96.09;
    /*$dinari = $eur * $srkEur;
    $dolari = $dinari / $srkDol;*/
    $dolari = $eur * $srkEur / $srkDol;
    echo "<br>";
    echo $dolari;

    // Zadatak 10
    // 100 : x = (100 - popust) : cena
    // x = 100 * cena / (100 - popust)
    $cena = 15000;
    $popust = 20;
    $x = 100 * $cena / (100 - $popust);
    echo "<br>";
    echo $x;

    // Zadatak 11
    // Za razlomljene brojeve: floor(...) => donji ceo deo, ceil(...) => gornji ceo deo
    $n = 14;
    $neiskorisceno = $n % 3;
    $brojDana = floor($n / 3); // Isto je i (int) ($n / 3)
    echo "<br>";
    echo $neiskorisceno;
    echo "&nbsp;";
    echo $brojDana;

    // (int) - operator konverzije
    echo "<br>";
    echo (int) 3.8;
    echo (int) "3.8";
    echo (int) false;
?>