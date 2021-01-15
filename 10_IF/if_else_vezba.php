<?php

    //1. ZADATAK
    /*
        Za dva uneta broja ispisati koji je veći a koji je manji.
    */

    $b1 = 5;
    $b2 = 6;

    if($b1 <= $b2){
        echo "<p>$b1 je manji ili jednak od $b2</p>";
    } 
    else {
        echo "<p>$b2 je manji od $b1</p>";
    }

    //2. ZADATAK
    /*
        Ispitati da li je uneta temperatura u plusu ili je u minusu. Ukoliko je temperatura nula, računati da je u plusu.
    */
    $t = 45;
    if($t >= 0){
        echo "<p>Temperatura $t je u plusu</p>";
    }
    else {
        echo "<p>Temperatura $t je u minusu</p>";
    }

    //3. ZADATAK
    /*
        U odnosu na pol (muški/ženski) koji je korisnik uneo prikazati odgovarajući avatar.
    */
    $pol = "ze";
    if($pol == "z"){
        echo "<p> <img src='slike/f.png' alt='zenski pol'> </p>";
    }
    else {
        echo "<p> <img src='slike/m.png' alt='muški pol'> </p>";
    }

    //4. ZADATAK
    /*
        U odnosu na preuzete vrednosti AM i PM sa svog računara, ispisati da li je trenutno jutro ili popodne.
    */
    $ampm = date("a");
    if($ampm == "pm"){
        echo "Prošlo je 12 sati";
    }
    else {
        echo "Nije prošlo 12 sati";
    }

    //6. ZADATAK
    /*
        Poređati tri uneta broja od najmanjeg do najvećeg.

        Objašnjenje:
        a = 7, b = 5, c = 6
        Cilj: U a da bude najmanji broj, u b da bude srednji broj i u c da bude najveći broj
    */

    $a = 7;
    $b = 6;
    $c = -6;

    if($a > $b){
        $pom = $a;
        $a = $b;
        $b = $pom;
    }
    // Posle ovog if-a u $a je sigurno manji broj nego u $b

    if($a > $c){
        $pom = $a;
        $a = $c;
        $c = $pom;
    }
    // Posle ovog if-a u $a je sigurno najmenji broj

    if($b > $c){
        $pom = $b;
        $b = $c;
        $c = $pom;
    }
    // Posle ovog if-a $a < $b < $c

    echo "<p> $a <= $b <= $c </p>";



?>