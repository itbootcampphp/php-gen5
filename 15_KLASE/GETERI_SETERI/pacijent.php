<?php

    class Pacijent{
        private $ime;
        private $visina;
        private $tezina;

        //SETERI - SET METODE - POSTAVLJAJU VREDNOST POLJA
        public function setIme($i){
            $this->ime = $i;
        }
        public function setVisina($v){
            if($v > 0 && $v < 250){
                $this->visina = $v;
            } else {
                echo "Visina mora  biti izmedju 0cm i 250cm";
                $this->visina = 100;
            }            
        }
        public function setTezina($t){
            if($t>0 && $t<450){
                $this->tezina = $t;
            } else {
                echo "Neispravno uneta tezina";
            }            
        }

        //GETERI - GET METODE - VRACAJU VREDNOST POLJA
        public function getIme(){
            return $this->ime;
        }
        public function getVisina(){
            return $this->visina;
        }
        public function getTezina(){
            return $this->tezina;
        }

        public function stampaj(){
            echo 
            "
            <ul>
                <li>$this->ime</li>
                <li>$this->visina cm</li>
                <li>$this->tezina kg</li>
            </ul>
            ";
        }

        public function bmi(){
            return $this->tezina / ($this->visina/100)**2;
        }

        public function kritican(){
            $bmiOsobe = $this->bmi();

            if($bmiOsobe<15 || $bmiOsobe>40){
                return true;
            } else {
                return false;
            }
        }
    }
    /*
    $pac1 = new Pacijent();
    $pac1->ime = "Jelena";
    $pac1->visina = 173;
    $pac1->tezina = 67;
    $pac1->stampaj();
    echo "BMI pacijenta je: " . $pac1->bmi();
    if($pac1->kritican()){
        echo "<p>Osoba ima kritican BMI</p>";
    } else {
        echo "<p>Osoba nema kritican BMI</p>";
    }
    */

    $pac2 = new Pacijent();
    // $pac2->ime = "Ana"; //Javlja grešku da je $pac2->ime privatno i može mu se pristupiti samo unutar klase
    $pac2->stampaj(); //ne javlja grešku jer je metpoda javna i javnim poljima i metodama se može pristupiti u klasi i izvan nje

    $pac2->setIme("Ana");
    $pac2->setVisina(168);
    $pac2->setTezina(55);
    $pac2->stampaj();
    echo "Ime pac2 pacijenta je: " . $pac2->getIme();
    

?>