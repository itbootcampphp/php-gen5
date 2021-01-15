<?php
    $imena = array("Andjelija", "Milos", "Goran", "Ilija", "Dalibor", "Ivana", "Kristina");

    // 17. Odrediti broj elemenata u nizu stringova koji sadrže slovo 'a'.

    /*
    strpos($str1, $str2) - Funkcija koja "trazi" $str2 u $str1.
    Rezultat koji se vraca:
    1) Ako se $str2 nalazi u $str1, tada funkcija vraca POZICIJU prvog pojavljivanja
    (0, 1, 2, 3, 4, ....) - NEKI CEO BROJ
    2) Ako se $str2 ne nalazi u $str1, tada funkcija vraca FALSE - LOGICKU VREDNOST

    Kako pitati da li se u stringu $str pojavljuje karakter 'a'?
    if(strpos($str, 'a') !== false)
    Nije tacno: if(strpos($str, 'a')) ili if(strpos($str, 'a') == true)
    if(strpos("Ponedeljak", "P") !== false) 
    {
        echo "Nalazi se string 'P'";
    }
    */

    $brojSadrziA = 0;
    for($i = 0; $i < count($imena); $i++)
    {
        $ime = $imena[$i];
        if(strpos($ime, "a") !== false)
        {
            $brojSadrziA++;
        }
    }
    echo "<p>Broj imena koji sadrze slovo 'a': $brojSadrziA</p>";

    // 18. Odrediti broj elemenata u nizu stringova koji počinju na slovo 'a' ili 'A'.
    $brojPocinjuA = 0;
    for($i = 0; $i < count($imena); $i++)
    {
        $ime = $imena[$i];
        //if(strpos($ime, 'a') === 0 || strpos($ime, 'A') === 0)
        //if($ime[0] == 'a' || $ime[0] == 'A')
        if($imena[$i][0] == 'a' || $imena[$i][0] == 'A')
        {
            $brojPocinjuA++;
        }
    }
    echo "<p>Broj imena koji pocinju na slovo 'A' ili 'a': $brojPocinjuA</p>";


    // 19. zadatak
    $a = array(8, -9, 0, 12, 1, -3, 5);
    $b = array();
    for($i = 0; $i < count($a); $i++)
    {
        if($a[$i] > 0)
        {
            $b[] = $a[$i];
        }
    }
    var_dump($b);
    
    // 20. zadatak
    $a = array(8, -9, 0, 12, 1);
    $b = array(6, -11, 17, 0, 0);
    $c = array();
    for($i = 0; $i < count($a); $i++)
    {
        $c[] = $a[$i];
        $c[] = $b[$i];
    }


    // 20.1. Generalniji slucaj - duzine nizova nisu jednake
    
    $a = array(8, -9, 0, 12, 1);
    $b = array(6, -11, 17, 0, 0);
    $c = array();
    $n = count($a);
    $m = count($b);
    if($n < $m)
    {
        $k = $n;
    }
    else
    {
        $k = $m;
    }
    for($i = 0; $i < $k; $i++) // 1. petlja
    {
        $c[] = $a[$i];
        $c[] = $b[$i];
    }
    for($i = $k; $i < count($a); $i++) // 2. petlja
    {
        $c[] = $a[$i];
    }
    for($i = $k; $i < count($b); $i++) // 3. petlja
    {
        $c[] = $b[$i];
    }
    var_dump($c);
    // 1. slucaj: Niz a ima vise elemenata od niza b
    // Izvrsava se 1. i 2. petlja

    // 2. slucaj: Niz b ima vise elemenata od niza a
    // Izvrsava se 1. i 3. petlja

    // 3. slucaj: Nizovi a i b imaju jednak broj elemenata
    // Izvrsava se samo 1. petlja
?>