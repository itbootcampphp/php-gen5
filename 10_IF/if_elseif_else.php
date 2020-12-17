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

?>