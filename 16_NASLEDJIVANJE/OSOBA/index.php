<?php

require_once "osoba.php";
require_once "zaposleni.php";

$o = new Osoba("Jelena", "Matejić", 1994);
$o->ispisiOsobu();

$z1 = new Zaposleni("Pera", "Peric", 1973, 72000, "ekonomista");
$z1->ispisiZaposlenog();

$z2 = new Zaposleni("Mika", "Mikić", 1967, 130000, "pravnik");
$z2->ispisiZaposlenog();

$z3 = new Zaposleni("Laza", "Lazić", 1999, 45000, "čuvar");
$z3->ispisiZaposlenog();

?>