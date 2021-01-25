<?php

class Sportista{

    private $ime;
    private $prezime;
    private $godRodj;
    private $gradRodj;

    //KONSTRUKTOR
    public function __construct($ime, $prezime, $godRodj, $gradRodj){
        $this->setIme($ime);
        $this->setPrezime($prezime);
        $this->setGodRodj($godRodj);
        $this->setGradRodj($gradRodj);
    }

    //SETERI
    public function setIme($ime){
        $this->ime = $ime;
    }
    public function setPrezime($prezime){
        $this->prezime = $prezime;
    }
    public function setGodRodj($godRodj){
        $this->godRodj = $godRodj;
    }
    public function setGradRodj($gradRodj){
        $this->gradRodj = $gradRodj;
    }

    //GETERI
    public function getIme(){
        return $this->ime;
    }
    public function getPrezime(){
        return $this->prezime;
    }
    public function getGodRodj(){
        return $this->godRodj;
    }
    public function getGradRodj(){
        return $this->gradRodj;
    }

    //METODE
    public function ispisiSportistu(){
        echo "<ul>
                <li>{$this->getIme()}</li>
                <li>{$this->getPrezime()}</li>
                <li>{$this->getGodRodj()}</li>
                <li>{$this->getGradRodj()}</li>
            </ul>";
    }

}

?>