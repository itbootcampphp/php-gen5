<?php

    class Vozilo{
        private $boja;
        private $tip;

        public function __construct($b, $t){
            $this->setBoja($b);
            $this->setTip($t);
        }
        //SETERI
        public function setBoja($b){
            $this->boja = $b;
        }
        public function setTip($t){
            $this->tip = $t;
        }
        //GETERI
        public function getBoja(){
            return $this->boja;
        }
        public function getTip(){
            return $this->tip;
        }

        public function voziVozilo(){
            echo "<p>Vozilo u pokretu</p>";
        }
    }

    class Automobil extends Vozilo{
        //Automobil nasleđuje sve NE privatno iz klase vozilo

        public function voziAutomobil(){
            $this->voziVozilo();
            echo "<p>Automobil u pokretu boje {$this->getBoja()}</p>";
        }
    }

    $v = new Vozilo("bela", "dron");
    $v->voziVozilo();
    echo "<hr>";

    $a = new Automobil("zelena", "automobil");
    $a->voziVozilo(); //Klasa naslednica pristupa roditeljskoj metodi
    echo $a->getBoja(); //Klasa naslednica pristupa roditeljskom geteru
    $a->setBoja("teget"); //Klasa naslednica pristupa roditeljskom seteru
    echo " " . $a->getBoja();
    $a->voziAutomobil();

?>