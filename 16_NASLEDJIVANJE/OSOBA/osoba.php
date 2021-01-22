<?php

class Osoba{

    private $ime;
    private $prezime;
    private $godRodj;

    //KONSTRUKTOR
    public function __construct($ime, $prezime, $godRodj){
        $this->setIme($ime);
        $this->setPrezime($prezime);
        $this->setGodRodj($godRodj);
    }

    //SETERI
    public function setIme($ime){
        $this->ime = $ime;
    }
    public function setPrezime($prezime){
        $this->prezime = $prezime;
    }
    public function setGodRodj($godRodj){
        $this->ime = $godRodj;
    }

    //GETERI
    public function getIme(){
        return $this->ime;
    }
    public function getPrezime(){
        return $this->prezime;
    }
    public function getGodRodj(){
        return $this->ime;
    }

    //METODE
    public function ispisiOsobu(){
        echo "<ul>
                <li>{$this->getIme()}</li>
                <li>{$this->getPrezime()}</li>
                <li>{$this->getGodRodj()}</li>
            </ul>";
    }

}

?>