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

?>