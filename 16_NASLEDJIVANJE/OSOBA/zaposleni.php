<?php

require_once "osoba.php";

class Zaposleni extends Osoba{

    private $plata;
    private $pozicija;

    //KONSTRUKTOR
    public function __construct($ime, $prezime, $godRodj, $plata, $pozicija){
        parent::__construct($ime, $prezime, $godRodj);
        $this->setPlata($plata);
        $this->setPozicija($pozicija);
    }

    //SETERI
    public function setPlata($plata){
        $this->plata = $plata;
    }
    public function setPozicija($pozicija){
        $this->pozicija = $pozicija;
    }

    //GETERI
    public function getPlata(){
        return $this->plata;
    }
    public function getPozicija(){
        return $this->pozicija;
    }

    //METODE
    public function ispisiZaposlenog(){
        $this->ispisiOsobu();
        echo "<ul>
                <li>{$this->getPlata()}</li>
                <li>{$this->getPozicija()}</li>
            </ul>";
    }

}

?>