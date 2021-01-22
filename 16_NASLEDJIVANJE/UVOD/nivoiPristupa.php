<?php

    class Vozilo{
        private $privatnoPolje = "Priv";
        protected $protectedPolje = "Prot";
        public $javnoPolje = "Publ";
    }

    $v = new Vozilo();
    //$v->privatnoPolje = "Privatno polje"; //Greška, ne mogu izvan klase da pristupim privatnom polju

    //$v->protectedPolje = "Protected polje"; //Ne mogu izvan klase da pristupim protected polju

    $v->javnoPolje = "Javno polje";

    class Automobil extends Vozilo{

        public function stampaj(){
            //echo $this->privatnoPolje; //Ne može da pročita privatno polje
            echo $this->protectedPolje; //Protected polju možemo pristupiti u klasi naslednici
            echo $this->javnoPolje; //Public polju možemo pristupiti u klasi naslednici
        }
        
    }

    $a = new Automobil();
    $a->stampaj();

?>