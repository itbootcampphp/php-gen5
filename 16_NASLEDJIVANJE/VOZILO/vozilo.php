<?php
    class Vozilo{
        //POLJA
        private $tip;
        private $boja;

        //KONSTRUKTOR
        public function __construct($tip, $boja){
            $this->setTip($tip);
            $this->setBoja($boja);
        }

        //SETERI
        public function setTip($tip){
            $this->tip = $tip;
        }
        public function setBoja($boja){
            $this->boja = $boja;
        }

        //GETERI
        public function getTip(){
            return $this->tip;
        }
        public function getBoja(){
            return $this->boja;
        }

        //METODE
        public function ispisiVozilo(){
            echo "<p>Vozilo u pokretu!</p>";
        }
    }
?>