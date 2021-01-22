<?php

require_once "vozilo.php";

class Automobil extends Vozilo{

    private $brSedista;

    //KONSTRUKTOR
    public function __construct($tip, $boja, $brSedista){
        // Moguće je pozivati roditeljske setere, ali nije praktično. Praktičnije je pozvati roditeljski konstruktor.
        // $this->setTip($tip);
        // $this->setBoja($boja);
        parent::__construct($tip, $boja);
        $this->setBrSedista($brSedista);
    }

    //SETERI - Samo za "sopstvena polja"
    public function setBrSedista($brSedista){
        $this->brSedista = $brSedista;
    }

    //GETERI - Samo za "sopstvena polja"
    public function getBrSedista(){
        return $this->brSedista;
    }

    //METODE
    public function ispisiAutomobil(){
        echo "<p>Automobil u pokretu</p>";
    }
}

?>