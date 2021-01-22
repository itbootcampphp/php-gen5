<?php

    require_once "vozilo.php";
    require_once "automobil.php";

    $v = new Vozilo("dron", "bela");
    $v->ispisiVozilo();

    $a = new Automobil("Karavan", "crvena", 5);
    $a->ispisiAutomobil();
    $a->ispisiVozilo();

?>