<?php
    // 10. Preuzeti sa interneta tri slike i imenovati ih 1, 2 i 3. For petljom prikazati naizmenično ukupno $n sličica.
    // Prvo prikazujemo prve tri slicice
    /*
    for($i = 1; $i <= 3; $i++)
    {
        echo "<img src='slike/$i.png'>";
    }
    */
    // Resenje zadatka 10
    $n = 8;
    /*
    for($i = 1; $i <= $n; $i++)
    {
        if($i % 3 == 1)
        {
            echo "<img src='slike/1.png'>";
        }
        elseif($i % 3 == 2)
        {
            echo "<img src='slike/2.png'>";
        }
        else 
        {
            echo "<img src='slike/3.png'>";
        }
    }
    */
    /*
    Gornje resenje je rucno zapisano sledece:
        $i    | $i % 3  |    r.br. slike
        -----------------------
        0     |   0     |  1
        1     |   1     |  2
        2     |   2     |  3
        3     |   0     |  1
        4     |   1     |  2
        5     |   2     |  3
        6     |   0     |  1
        7     |   1     |  2
    */
    for($i = 0; $i < $n; $i++)
    {
        $broj = $i % 3 + 1;
        echo "<img src='slike/$broj.png'>";
    }

    // 12. Odrediti proizvod svih brojeva deljivih sa 11 u intervalu od 20 do 100.
    // Resenje ako je interval dat za konkretne brojeve
    $proizvod = 1;
    for($i = 22; $i <= 100; $i += 11)
    {
        $proizvod *= $i;
    }

    // Univerzalnije resenje - za proizvoljne brojeve iz intervala [$n, $m]
    $n = 10;
    $m = 22;
    $z = 11;
    $proizvod = 1;
    $pocetni = ceil($n / $z) * $z; 
    for($i = $pocetni; $i <= $m; $i += $z)
    {
        $proizvod *= $i;
    }
    echo "<p>$proizvod</p>";



    /* RESENJA ZADATAKA 18 - 21 KOJA JE POSTAVIO GORAN: */
    
    echo "Zadatak 19: ";
    $n = -15;
    $m = 10;
    $a = -5;
    if ($a != 0) {
        echo "Interval od $n do $m. Nisu deljivi sa $a: "; 
        for ($i = $n; $i <= $m; $i++) {
            if ($i % $a != 0) {
                echo "$i, ";
            }
        }
        echo "<br>";
    } else {
        echo "Trazi se deljivost sa 0 sto po definiciji nije dozvoljeno.<br>";
    }

    echo "Zadatak 20: ";
    $n = -10;
    $m = 15;
    $a = 3;
    $suma1 = 0;
    $suma2 = 0;
    if ($a != 0) {
        echo "Interval od $n do $m: <br>"; 
        for ($i = $n; $i <= $m; $i++) {
            echo "$i, ";
            if ($i % $a != 0) {
                $suma1 += $i;
            } else {
                $suma2 += $i;
            }
        }
        echo "<br>";
        $suma = $suma1 + $suma2;
        echo "Suma brojeva $suma<br>";
        echo "Suma brojeva deljivih sa $a: $suma2<br>";
        echo "Suma brojeva nedeljivih sa $a: $suma1<br>";
    } else {
        echo "Trazi se deljivost sa 0 sto po definiciji nije dozvoljeno.<br>";
    }

    echo "Zadatak 21: ";
    $n = -15;
    $m = 10;
    $a = -5;
    $b = 3;
    $p = 1;
    if ($a * $b != 0) {
        echo "Interval od $n do $m. Deljivi sa $a a nisu sa $b: "; 
        for ($i = $n; $i <= $m; $i++) {
            if ($i % $a == 0 && $i % $b != 0) {
                echo "$i, ";
                $p *= $i;
            }
        }
        if ($p == 1) {
            echo "Nema brojeva koji zadovoljavaju uslov";
        } else {
            echo " a njihov proizvod je: $p<br>";
        }
    } else {
        echo "Trazi se deljivost sa 0 sto po definiciji nije dozvoljeno.<br>";
    }
?>