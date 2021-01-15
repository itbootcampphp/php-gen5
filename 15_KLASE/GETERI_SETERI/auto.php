<?php

    class Auto{
        //polja
        private $marka;
        private $boja;
        private $imaKrov;

        //SETERI
        public function setMarka($m){
            $this->marka = $m;
        }

        public function setBoja($b){
            $this->boja = $b;
        }

        public function setImaKrov($k){
            $this->imaKrov = $k;
        }

        //GETERI
        public function getMarka(){
            return $this->marka;
        }

        public function getBoja(){
            return $this->boja;
        }

        public function getImaKrov(){
            return $this->imaKrov;
        }

        //metodi
        public function sviraj(){
            echo "<p>$this->marka Beep! Beep!</p>";
        }
    }

    $auto1 = new Auto();
    $auto1->setMarka("Peugeot");
    $auto1->setBoja("bela");
    $auto1->setImaKrov(true);

    echo "<p>Korisnik vozi auto {$auto1->getMarka()}, boja automobila je {$auto1->getBoja()}</p>";


?>