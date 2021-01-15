<?php

    class Auto{
        //polja
        var $marka = "Fiat";
        var $boja;
        var $imaKrov = true;

        //metodi
        function sviraj(){
            echo "<p>$this->marka Beep! Beep!</p>";
        }
    }

    $auto1 = new Auto();
    echo $auto1->marka; //ispis polja
    $auto1->marka = "Smart"; //dodala vrednosti polju
    echo "<br>";
    echo $auto1->marka;
    echo "<br>";
    echo $auto1->imaKrov;
    echo "<br>";
    $auto1->sviraj();

    $auto2 = new Auto(); //Nova instanca klase Auto
    echo $auto2->marka;
    $auto2->sviraj();

?>