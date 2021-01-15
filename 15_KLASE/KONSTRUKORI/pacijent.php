<?php

    class Pacijent{
        private $ime;
        private $visina;
        private $tezina;

        //KONSTRUKTOR - AUTOMATSKI POSTAVLJA PARAMETRE/POLJA
        public function __construct($i, $v, $t){
            $this->setIme($i);
            $this->setVisina($v);
            $this->setTezina($t);
        }

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
    
    $pac = new Pacijent("Milica", 183, 75); //Prilikom kreiranja novog objekta AUTOMATSKI se poziva konstruktor
    $pac->stampaj();
    $pac->setTezina(76);

    $pac1 = new Pacijent("Milan", 190, 90);
    $pac2 = new Pacijent("Marko", 121, 30);


    //NIZ OBJEKATA
    $pacijentiNiz = array($pac, $pac1, $pac2);

    $pacijentiNiz[0]->stampaj();
    echo "<hr>";

    //Ispis svih pacijenata iz niza
    //1. nacin
    foreach($pacijentiNiz as $obj){
        $obj->stampaj();
    }
    echo "<hr>";

    //2. nacin
    for($i=0; $i<count($pacijentiNiz); $i++){
        $pacijentiNiz[$i]->stampaj();
    }

    //Ispis svih imena pacijenata iz niza
    foreach($pacijentiNiz as $obj){
        echo "<p> {$obj->getIme()} </p>";
    }

    //Ispis svih pacijenata iz niza koji su laksi od 50kg
    foreach($pacijentiNiz as $obj){
        if($obj->getTezina() < 50){
            $obj->stampaj();
        }
    }

    echo "<hr>";
    //Odrediti prosecnu visinu svih pacijenata
    $sumaVisina = 0;
    foreach($pacijentiNiz as $obj){
        $sumaVisina += $obj->getVisina();
    }
    $prosecnaVisina = $sumaVisina / count($pacijentiNiz);
    echo "<p>Prosečna visina pacijenata je $prosecnaVisina</p>";

    echo "<hr>";
    

?>