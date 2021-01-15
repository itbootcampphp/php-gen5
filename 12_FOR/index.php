<?php
    // Prikaz brojeva od 1 do 5 preko WHILE petlje
    $i = 1; // Inicijalizacija brojaca
    while($i <= 5) // Uslov
    {
        // blok naredbi
        echo "<p>$i</p>";
        $i++; // Korekcija
    }

    // Prikaz brojeva od 1 do 5 preko FOR petlje
    for($i = 1; $i <= 5; $i++) // Inicijalizacija; Uslov; Korekcija
    {
        echo "<p>$i</p>";
    }

    // Tablica mnozenja brojem 9 preko WHILE petlje
    $i = 1;
    while($i <= 9)
    {
        $p = 9 * $i;
        echo "<p>9 x $i = $p</p>";
        $i++;
    }

    // Tablica mnozenja brojem 9 preko FOR petlje
    // $i++     <=>    $i = $i + 1
    // Korekcija: $i = $i + 1, ili: $i += 1, ili $i++
    for($i = 1; $i <= 9; $i++)
    {
        $p = 9 * $i;
        echo "<p>9 x $i = $p</p>";
    }

    // Tablica mnozenja brojem 9 preko FOR petlje, 2. nacin
    $i = 1;
    for( ; $i <= 9; )
    {
        $p = 9 * $i;
        echo "<p>9 x $i = $p</p>";
        $i++;
    }

    // Tablica mnozenja brojem 9 preko FOR petlje, 3. nacin
    $i = 1;
    for( ; ; )
    {
        $p = 9 * $i;
        echo "<p>9 x $i = $p</p>";
        $i++;
        if($i > 9)
        {
            break;
        }
    }

    // Pocevsi od 1, paralelno ispisivati svaki sledeci i svaki drugi broj,
    // sve dok neki od njih ne bude veci od 10
    /*
    i | 1 | 2 | 3 | 4 | 5 |
    ------------------------------
    j | 1 | 3 | 5 | 7 | 9 |
    */

    // Preko WHILE petlje
    $i = 1;
    $j = 1;
    while($i <= 10 && $j <= 10)
    {
        echo "<p>$i &nbsp; $j</p>";
        $i++;
        $j += 2;
    }

    // Preko FOR petlje
    for($i = 1, $j = 1; $i <= 10 && $j <= 10; $i++, $j += 2)
    {
        echo "<p>$i &nbsp; $j</p>";
    }

    // 2. Ispisati brojeve od 20 do 1.
    // Prvi nacin
    for($i = 20; $i >= 1; $i--)
    {
        echo "<p>$i</p>";
    }

    // Drugi nacin
    for($i = 1; $i <= 20; $i++)
    {
        $broj = 21 - $i;
        echo "<p>$broj</p>";
    }

    // 3. Ispisati parne brojeve od 1 do 20.
    // Prvi nacin: Univerzalniji, ali je sporiji
    for($i = 1; $i <= 20; $i++)
    {
        if($i % 2 == 0)
        {
            echo "<p>$i</p>";
        }
    }

    // Drugi nacin: Brzi, ali za konkretnu situaciju
    for($i = 2; $i <= 20; $i += 2)
    {
        echo "<p>$i</p>";
    }

    // 4. Ispisati dvostruku vrednost brojeva  od 5 do 15.
    for($i = 5; $i <= 15; $i++)
    {
        $br = 2 * $i;
        echo "<p>$br</p>";
    }

    // 7. Odrediti sumu brojeva od $n do $m.
    // Prva varijanta:
    $n = 5;
    $m = 9;
    $suma = 0;
    for($i = $n; $i <= $m; $i++)
    {
        $suma += $i;
    }
    echo "<p>Suma brojeva od $n do $m jednaka je: $suma</p>";

    // Druga varijanta:
    for($n = 5, $m = 9, $suma = 0, $i = $n; $i <= $m; $i++)
    {
        $suma += $i;
    }
    echo "<p>Suma brojeva od $n do $m jednaka je: $suma</p>";

    // 8. Odrediti proizvod brojeva od $n do $m.
    $n = 2;
    $m = 6;
    $proizvod = 1;
    for($i = $n; $i <= $m; $i++)
    {
        $proizvod *= $i;     // $proizvod = $proizvod * $i;
    }
    echo "<p>Proizvod brojeva od $n do $m jednak je: $proizvod</p>";

    // 9. Odrediti sumu kvadrata brojeva od $n do $m.
    $n = 3;
    $m = 5;
    $suma = 0;
    for($i = $n; $i <= $m; $i++)
    {
        $br = $i ** 2;   // $br = $i * $i;
        $suma += $br;
    }
    echo "<p>Suma kvadrata brojeva od $n do $m jednaka je: $suma</p>";

    // 9'. Odrediti kvadrat sume brojeva od $n do $m.
    $n = 3;
    $m = 5;
    $suma = 0;
    for($i = $n; $i <= $m; $i++)
    {
        $suma += $i;
    }
    $kvadrat = $suma ** 2;
    echo "<p>Kvadrat sume brojeva od $n do $m jednak je: $kvadrat</p>";
?>