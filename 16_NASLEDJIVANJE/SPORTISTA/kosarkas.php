<?php

require_once "sportista.php";

class Kosarkas extends Sportista{

    private $poeni;

    //KONSTRUKTOR
    public function __construct($ime, $prezime, $godRodj, $gradRodj, $poeni){
        parent::__construct($ime, $prezime, $godRodj, $gradRodj);
        $this->setPoeni($poeni);
    }

    //SETERI
    public function setPoeni($poeni){
        $this->poeni = $poeni;
    }

    //GETERI
    public function getPoeni(){
        return $this->poeni;
    }

    //METODI
    public function ispisiKosarkasa(){
        $this->ispisiSportistu();
        //Ispis poena košarkaša
        foreach($this->poeni as $p){
            echo "$p ; ";
        }
    }

    public function prosekPoena(){
        $sum = 0;
        foreach($this->poeni as $p){
            $sum += $p;
        }
        return $sum/count($this->poeni);
    }
}

?>