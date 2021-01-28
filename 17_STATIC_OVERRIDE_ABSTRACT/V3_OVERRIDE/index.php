<?php

    require_once "obican_kredit.php";
    require_once "amortizovan_kredit.php";

    $krediti = array();
    $n = 6;
    for($i = 0; $i < $n; $i++) {
        $k = rand(0, 2);
        if($k == 0) {
            $krediti[] = new Kredit(25, 2000, 3, "Kredit");
        }
        elseif($k == 1) {
            $krediti[] = new ObicanKredit(30, 1500, 2);
        }
        else {
            $krediti[] = new AmortizovanKredit(30, 1500, 2);
        }
    }

    foreach($krediti as $kredit) {
        $kredit->stampa();
    }