<?php

    class Film{

        private $naslov;
        private $reziser;
        private $godina;

        //SETERI
        public function setNaslov($n){
            $this->naslov = $n;
        }

        public function setReziser($r){
            $this->reziser = $r;
        }

        public function setGodina($g){
            if($g >= 1800){
                $this->godina = $g;
            } else {
                $this->godina = 1800;
            }            
        }

        //GETERI
        public function getNaslov(){
            return $this->naslov;
        }

        public function getReziser(){
            return $this->reziser;
        }

        public function getGodina(){
            return $this->godina;
        }

        public function stampaj(){
            echo 
            "<table>
                <tr>
                    <td>Naslov filma:</td>
                    <td>$this->naslov</td>
                </tr>
                <tr>
                    <td>Reziser filma:</td>
                    <td>$this->reziser</td>
                </tr>
                <tr>
                    <td>Godina filma:</td>
                    <td>$this->godina</td>
                </tr>
            ";
        }

    }

    $f1 = new Film();

?>