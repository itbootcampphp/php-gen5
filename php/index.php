<?php
    require_once "kredit.php";

    Kredit::setDefaultBrGod(-5);

    $k1 = new Kredit(20, 1000, 2, "Keš kredit");
    //$k1->defaultBrGod = 3;  // NE VALJA! (statickom polju se ne pristupa preko objekta!)
    $k1->stampa();

    $k2 = new Kredit(35, 5000, 5, "Kredit za refinansiranje");
    //$k2->defaultBrGod = 8;  // NE VALJA! 
    $k2->stampa();

    $k3 = new Kredit(40, 2500, -6, "Keš kredit");
    $k3->stampa();
