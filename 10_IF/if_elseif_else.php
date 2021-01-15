<?php

    $br = 30;

    if($br <= 10){
        echo "<p> Broj prve desetice </p>";
    }
    elseif($br <= 20){
        echo "<p> Broj druge desetice </p>";
    }
    else {
        echo "<p> Broj iznad druge desetice </p>";
    }

    echo "<p>Kraj prvog grananja</p>";

    // 7. ZADATAK
    $poeni = 73;

    if($poeni > 90){
        echo "<p>Ocena 10</p>";
    }
    elseif($poeni > 80){
        echo "<p>Ocena 9</p>";
    }
    elseif($poeni > 70){
        echo "<p>Ocena 8</p>";
    }
    elseif($poeni > 60){
        echo "<p>Ocena 7</p>";
    }
    elseif($poeni > 50){
        echo "<p>Ocena 6</p>";
    }
    else {
        echo "<p>Student nije položio ispit :(</p>";
    }

    // 8. ZADATAK
    /* Preuzeti koji je dan u nedelji sa računara i ispitati da li je to radni dan ili je u pitanju vikend.*/
    $dan = date("w"); //0 je nedelja, 1 je ponedeljak, 2 je utorak,...
    if($dan == 0) {
        echo "<p>Vikend</p>";
    }
    elseif($dan == 6) {
        echo "<p>Vikend</p>";
    }
    else {
        echo "<p>Radni dan</p>";
    }

    // 9. ZADATAK
    /* Za vreme preuzeto sa računara ispisati dobro jutro za vreme manje od 12 sati ujutru, dobar dan za vreme manje od 18 sati popodne i u ostalim slučajevima ispisati dobro veče.*/
    $sati = date("H");
    if($sati <= 12){
        echo "<p>Dobro jutro!</p>";
    }
    elseif($sati <= 18){
        echo "<p>Dobar dan!</p>";
    }
    else {
        echo "<p>Dobro veče!</p>";
    }

    //10. ZADATAK
    /* Uporediti dva uneta datuma i ispisati koji od njih je raniji. */

    //Prvi datum
    $d1 = 13;
    $m1 = 10;
    $g1 = 2019;

    //Drugi datum
    $d2 = 13;
    $m2 = 10;
    $g2 = 2019;
    
    if($g1 < $g2){
        echo "<p> Raniji datum je $d1.$m1.$g1. </p>";
    }
    elseif($g2 < $g1){
        echo "<p> Raniji datum je $d2.$m2.$g2. </p>";
    }
    elseif($m1 < $m2){
        echo "<p> Raniji datum je $d1.$m1.$g1. </p>";
    }
    elseif($m2 < $m1){
        echo "<p> Raniji datum je $d2.$m2.$g2. </p>";
    }
    elseif($d1 < $d2){
        echo "<p> Raniji datum je $d1.$m1.$g1. </p>";
    }
    elseif($d2 < $d1){
        echo "<p> Raniji datum je $d2.$m2.$g2. </p>";
    }
    else {
        echo "<p> Datumi su isti </p>";
    }

    // 11. ZADATAK
    /*
    Radno vreme jedne programerske firme je od 9h do 17h. Preuzeti vreme sa računara i ispitati da li u to vreme firma radi ili ne radi.
    */
    if($sati < 9) {
        echo "<p>Ne radi</p>";
    } 
    elseif($sati >= 17) {
        echo "<p>Ne radi</p>";
    }
    else {
        echo "<p>Radi</p>";
    }

    // 12. ZADATAK
    /*
    Za unet početak i kraj radnog vremena dva lekara ispisati DA ukoliko se njihove smene preklapaju, u suprotnom ispisati NE.
    */
    // Prvi radnik
    $p1 = 20;
    $k1 = 22;

    // Drugi radnik
    $p2 = 12;
    $k2 = 18;

    // Ukoliko uključujete/isključujete granični termin za preklapanje, jedno je potrebno promeniti < u <=
    if($k1 < $p2) {
        echo "<p>Ne preklapaju se</p>";
    }
    elseif($k2 < $p1) {
        echo "<p>Ne preklapaju se</p>";
    }
    else {
        echo "<p>Preklapaju se</p>";
    }

    // 14. ZADATAK
    /*
        Za uneti broj ispisati da li je deljiv sa 3 ili ne
    */
    $broj = 11; // 3 + ost. 2
    if($broj % 3 == 0) {
        echo "<p>Broj $broj je deljiv brojem 3</p>";
    }
    else {
        echo "<p>Broj $broj nije deljiv brojem 3</p>";
    }


    /*
        Za uneti broj ispisati NEPARAN ukoliko je broj neparan
    */
    // 1. način
    if($broj % 2 != 0){
        echo "<p>Broj $broj je neparan</p>";
    }

    // 2. način
    if($broj % 2 == 1){
        echo "<p>Broj $broj je neparan</p>";
    }

    // 3. način
    if( !($broj % 2 == 0) ){
        echo "<p>Broj $broj je neparan</p>";
    }

    // 4. način
    if($broj/2 != round($broj/2)){
        echo "<p>Broj $broj je neparan</p>";
    }



?>