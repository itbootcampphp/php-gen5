<?php
    require_once "kredit.php";
    require_once "obican_kredit.php";
    require_once "amortizovan_kredit.php";

    Kredit::setDefaultBrGod(-5);

    //$x = -5;
    //KRedit::setDefaultBrGod($x);

    $k1 = new Kredit(20, 1000, 2, "Keš kredit");
    //$k1->defaultBrGod = 3;  // NE VALJA! (statickom polju se ne pristupa preko objekta!)
    $k1->stampa();
    $bk = Kredit::getBrojKredita();
    echo "<p>Broj kredita nakon kreiranja objekta k1: $bk</p>";

    $k2 = new Kredit(35, 5000, 5, "Kredit za refinansiranje");
    //$k2->defaultBrGod = 8;  // NE VALJA! 
    $k2->stampa();
    $bk = Kredit::getBrojKredita();
    echo "<p>Broj kredita nakon kreiranja objekta k2: $bk</p>";

    unset($k2); // Oslobadjanje memorije koju je zauzeo objekat
    // $k2 = null; // Oslobadjanje memorije koju je zauzeo objekat
    // $k2->stampa(); - NE MOZE!!
    $bk = Kredit::getBrojKredita();
    echo "<p>Broj kredita nakon unistavanja objekta k2: $bk</p>";

    $k2 = new Kredit(40, 250, -6, "Keš kredit");
    $k2->stampa();
    $bk = Kredit::getBrojKredita();
    echo "<p>Broj kredita nakon kreiranja objekta k2: $bk</p>";

    $k = Kredit::DEFAULT_OSNOVICA + 3;
    echo "<p>Osnovica + 3 = $k</p>";

    $k4 = new ObicanKredit(35, 8000, 10);
    $k4->stampa();

    $k5 = new AmortizovanKredit(25, 600, 2);
    $k5->stampa();

    $bk = Kredit::getBrojKredita();
    echo "<p>Broj kredita pre zavrsetka programa: $bk</p>";


    $k6 = new ObicanKredit(20, 1000, 2);
    //$mr1 = $k6->mesecnaRataObicanKredit();
    //echo "<p>Mesecna rata za obican kredit je: $mr1</p>";

    $k7 = new AmortizovanKredit(20, 1000, 2);
    //$mr2 = $k7->mesecnaRataAmortizovanKredit();
    //echo "<p>Mesecna rata za amortizovan kredit je: $mr2</p>";


    // Formiramo niz od svih kredita u programu
    $krediti = array($k1, $k2, $k4, $k5, $k6, $k7);

    foreach($krediti as $kredit) {
        /*
        if($kredit objekat klase ObicanKredit) {
            $kredit->mesecnaRataObicanKredit();
        }
        elseif($kredit objekat klase AmortizovanKredit) {
            $kredit->mesecnaRataAmortizovanKredit();
        }
        elseif($kredit objekat klase Kredit) {
            // Radi nesto sa ovim objektom ili ga preskoci
        }
        */

        /*
        $mr = $kredit->mesecnaRata();
        echo "<div>Mesecna rata za kredit: ";
        $kredit->stampa();
        echo "iznosi $mr.</div>";
        */

        $kredit->stampa();
    }