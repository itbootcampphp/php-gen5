<?php

    require_once "obican_kredit.php";
    require_once "amortizovan_kredit.php";

    $krediti = array();
    $n = 6;

    for($i = 0; $i < $n; $i++) {
        $k = rand(0, 1);
        if($k == 0) {
            $krediti[] = new ObicanKredit(25, 4000, 2);
        }
        else {
            $krediti[] = new AmortizovanKredit(25, 4000, 2);
        }
    }

    // $krediti[] = new Kredit(25, 4000, 2, "Kes kredit");
    // NE DOZVOLJAVA KREIRANJE OBJEKATA APSTRAKTNIH KLASA

    foreach($krediti as $kredit) {
        $kredit->stampa();
        echo "<p>" . $kredit->proba() . "</p>";
    }