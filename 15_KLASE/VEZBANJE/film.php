<?php

    class Film{

        private $naslov;
        private $reziser;
        private $godina;
        private $ocena;

        //KONSTRUKTOR
        public function __construct($n, $r, $g, $o) {
            $this->setNaslov($n);
            $this->setReziser($r);
            $this->setGodina($g);
            $this->setOcena($o);
        }

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

        public function setOcena($o) {
            if($o < 1) {
                $this->ocena = 1;
            }
            elseif($o <= 10) {
                $this->ocena = $o;
            }
            else {
                $this->ocena = 10;
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

        public function getOcena() {
            return $this->ocena;
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
                <tr>
                    <td>Ocena filma:</td>
                    <td>$this->ocena</td>
                </tr>
            </table>
            ";
        }

    }