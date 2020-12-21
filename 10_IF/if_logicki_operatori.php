<?php

    $br1 = -5;
    $br2 = -6;
    $br3 = -7;

    // && (logičko i) - Svi izrazi MORAJU da budu tačni, da bi izlaz bio true
    // true && true = true
    // false && true = false
    // false && false = false
    if($br1>=0 && $br2>=0 && $br3>=0){
        echo "Brojevi $br1, $br2 i $br3 su nenegativni";
    }

    // || (logičko ili) - Samo jedan je dovoljno na bude tačan, da bi izraz bio tačan
    // false || false || true = true 
    // false || false || false = false
    if($br1>=0 || $br2>=0 || $br3>=0){
        echo "Makar jedan od brojeva $br1. $br2 ili $br3 je nenegativan";
    }

    // 23. Godina je prestupna ako je deljiva sa 4 i pri tome nije deljiva sa 100, ili ako je deljiva sa 400
    $god = 1996;
    //Za 1994: (false && true) || false = false || false = false
    //Za 1996: (true && true) || false = true || false = true
    if( ($god%4==0 && $god%100!=0) || $god%400==0 ){
        echo "Godina $god je prestupna";
    } 
    else {
        echo "Godina $god je prosta";
    }

    // 22. Ispisati na ekranu „ekstremna temperatura“ ukoliko je temperatura manja od -15 stepeni Celzijusovih i veća od 40 stepeni Celzijusovih
    $temp = 30;
    if( $temp<-15 || $temp>40 ){
        echo "<p>Ekstremna temperatura</p>";
    }
    else {
        echo "<p>Nije ekstremna temperatura</p>";
    }

?>