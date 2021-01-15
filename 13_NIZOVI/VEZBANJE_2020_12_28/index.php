<?php

    $niz = array(6, 12, 9, -4, -1, 0, 5, 11);
    // $niz = array();

    // 2. Odrediti zbir elemenata celobrojnog niza.
    $zbir = 0;
    for($i = 0; $i < count($niz); $i++)
    {
        $zbir += $niz[$i];
    }
    echo "<p>Zbir svih elemenata niza jednaka je: $zbir</p>";

    // Ugradjena funkcija
    $suma = array_sum($niz);
    echo "<p>Zbir svih elemenata niza jednaka je: $suma</p>";

    // 3. Odrediti srednju vrednost elemenata celobrojnog niza.
    $duzinaNiza = count($niz);
    if($duzinaNiza == 0)
    {
        echo "<p>Srednja vrednost elemenata niza jednaka je: 0</p>";
    }
    else
    {
        $srvr = $zbir / $duzinaNiza;
        echo "<p>Srednja vrednost elemenata niza jednaka je: $srvr</p>";
    }

    // 4. Odrediti maksimalnu vrednost u celobrojnom nizu.
    $maks = $niz[0];
    for($i = 1; $i < count($niz); $i++)
    {
        if($niz[$i] > $maks)
        {
            $maks = $niz[$i];
        }
    }
    echo "<p>Maksimalna vrednost niza jednaka je: $maks</p>";

    $niz2 = array(5, 14, 1, 8, 14, 8, 1, 14, 7);

    // 4.1. Odrediti PRVO pojavljivanje maksimalne vrednosti
    $maks = $niz2[0];
    for($i = 1; $i < count($niz2); $i++)
    {
        if($niz2[$i] > $maks)
        {
            $maks = $niz2[$i];
        }
    }
    echo "<p>Maksimalna vrednost niza jednaka je: $maks</p>";

    // 4.2. Odrediti POSLEDNJE pojavljivanje maksimalne vrednosti
    $maks = $niz2[0];
    for($i = 1; $i < count($niz2); $i++)
    {
        if($niz2[$i] >= $maks)
        {
            $maks = $niz2[$i];
        }
    }
    echo "<p>Maksimalna vrednost niza jednaka je: $maks</p>";

    // 5. Odrediti minimalnu vrednost celobrojnog niza.
    $min = $niz[0];
    for($i = 1; $i < count($niz); $i++)
    {
        if($niz[$i] < $min)
        {
            $min = $niz[$i];
        }
    }
    echo "<p>Minimalna vrednost niza jednaka je: $min</p>";


    // 6. Odrediti indeks maksimalnog elementa celobrojnog niza.
    $niz = array(1, 6, 9, -4, 12, -1, 0, 5, 12);
    $maks = $niz[0];
    $index = 0;
    for($i = 1; $i < count($niz); $i++)
    {
        if($niz[$i] > $maks)
        {
            $maks = $niz[$i];
            $index = $i;
        }
    }
    echo "<p>Indeks maksimalnog elementa niza jednak je: $index, a vrednost je: $maks</p>";

    // Malo skracenija verzija:
    $index = 0;    // $maks = $niz[0], odnosno $maks = $niz[$index]
    for($i = 1; $i < count($niz); $i++)
    {
        if($niz[$i] > $niz[$index]) //if($niz[$i] > $maks)
        {
            $index = $i;
        }
    } 
    $maks = $niz[$index];
    echo "<p>Indeks maksimalnog elementa niza jednak je: $index, a vrednost je: $maks</p>";

    // 6.1. Odrediti indeks PRVOG pojavljivanja maksimalnog elementa: if($niz[$i] > $niz[$index])
    // 6.2. Odrediti indeks POSLEDNJEG pojavljivanje maksimalnog elementa: if($niz[$i] >= $niz[$index])


    // 7. Odrediti broj elemenata celobrojnog niza koji su veći od srednje vrednosti.
    $zbir = 0;
    for($i = 0; $i < count($niz); $i++)
    {
        $zbir += $niz[$i];
    }
    $srvr = $zbir / count($niz);
    $broj = 0;
    for($i = 0; $i < count($niz); $i++)
    {
        if($niz[$i] > $srvr)
        {
            $broj++;
        }
    }
    echo "<p>Broj elemenata veci od srednje vrednosti je: $broj</p>";

    // Netacni pristup:
    /*
    $zbir = 0;
    $broj = 0;
    for($i = 0; $i < count($niz); $i++)
    {
        $zbir += $niz[$i];
        $srvr = $zbir / count($niz);
        if($niz[$i] > $srvr)
        {
            $broj++;
        }
    }
    */

    // 8. Izračunati zbir pozitivnih elemenata celobrojnog niza.
    $zbir = 0;
    for($i = 0; $i < count($niz); $i++)
    {
        if($niz[$i] > 0)
        {
            $zbir += $niz[$i];
        }
    }
    echo "<p>Zbir pozitivnih elemenata niza jednaka je: $zbir</p>";

    // 8.1. Izracunati srednju vrednost pozitivnih elemenata celobrojnog niza.
    $zbir = 0;
    $broj = 0;
    for($i = 0; $i < count($niz); $i++)
    {
        if($niz[$i] > 0)
        {
            $zbir += $niz[$i];
            $broj++;
        }
    }
    if($broj > 0)
    {
        $srvr = $zbir / $broj;
    }
    else 
    {
        $srvr = 0;
    }
    echo "<p>Srednja vrednost pozitivnih brojeva u nizu jednaka je: $srvr</p>";

    // 9. Odrediti broj parnih elemenata u celobrojnom nizu.
    $brojParnih = 0;
    for($i = 0; $i < count($niz); $i++)
    {
        if($niz[$i] % 2 == 0)
        {
            $brojParnih++;
        }
    }
    echo "<p>Broj parnih elemenata niza jednak je: $brojParnih</p>";

    // 10. Izračunati sumu elemenata u nizu sa parnim indeksom.
    // Prva varijanta:
    $sumaParniIndex = 0;
    for($i = 0; $i < count($niz); $i++)
    {
        if($i % 2 == 0)
        {
            $sumaParniIndex += $niz[$i];
        }
    }
    echo "<p>Suma elemenata sa parnim indeksom jednaka je: $sumaParniIndex</p>";

    // Druga varijanta:
    $sumaParniIndex = 0;
    for($i = 0; $i < count($niz); $i += 2)
    {
        $sumaParniIndex += $niz[$i];
    }
    echo "<p>Suma elemenata sa parnim indeksom jednaka je: $sumaParniIndex</p>";


    $imena = array("Andjelija", "Milos", "Goran", "Ilija", "Dalibor", "Ivana", "Kristina");

    // 14. Ispisati dužinu svakog elementa u nizu stringova.
    echo "<p>Duzine stringova u nizu su: ";
    for($i = 0; $i < count($imena); $i++)
    {
        $duzina = strlen($imena[$i]);
        echo $duzina . "&nbsp";
    }
    echo "</p>";

    // 15. Odrediti element u nizu stringova sa maksimalnom dužinom.
    $maxDuzina = strlen($imena[0]);
    $stringMaxDuzine = $imena[0];
    for($i = 1; $i < count($imena); $i++)
    {
        if(strlen($imena[$i]) > $maxDuzina)
        {
            $maxDuzina = strlen($imena[$i]);
            $stringMaxDuzine = $imena[$i];
        }
    }
    echo "<p>String sa maksimalnom duzinom: $stringMaxDuzine</p>";

    // 16. Odrediti broj elemenata u nizu stringova čija je dužina veća od prosečne dužine svih stringova u nizu.


    // 17. Odrediti broj elemenata u nizu stringova koji sadrže slovo 'a'.

    echo "<hr>";

    /*
    strpos($str1, $str2) - Funkcija koja "trazi" $str2 u $str1.
    Rezultat koji se vraca:
    1) Ako se $str2 nalazi u $str1, tada funkcija vraca POZICIJU prvog pojavljivanja
    (0, 1, 2, 3, 4, ....) - NEKI CEO BROJ
    2) Ako se $str2 ne nalazi u $str1, tada funkcija vraca FALSE - LOGICKU VREDNOST

    Kako pitati da li se u stringu $str pojavljuje karakter 'a'?
    if(strpos($str, 'a')) <=> if(strp)
    */
    if(strpos("Ponedeljak", "P") != false) 
    {
        echo "Nalazi se string 'P'";
    }

?>