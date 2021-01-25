<?php
    class Kredit {
        protected $godKamata;
        protected $osnovica;
        protected $brGod;
        protected $tip;

        private static $defaultBrGod;

        public function __construct($gk, $o, $bg, $t) {
            $this->setGodKamata($gk);
            $this->setOsnovica($o);
            $this->setBrGod($bg);
            $this->setTip($t);
        }

        public function getGodKamata() {
            return $this->godKamata;
        }

        public function getOsnovica() {
            return $this->osnovica;
        }

        public function getBrGod() {
            return $this->brGod;
        }

        public function getTip() {
            return $this->tip;
        }

        public static function getDefaultBrGod() {
            return self::$defaultBrGod;
        }

        public function setGodKamata($gk) {
            if($gk < 0) {
                $this->godKamata = 0;
            }
            elseif($gk <= 100) {
                $this->godKamata = $gk;
            }
            else {
                $this->godKamata = 100;
            }
        }

        public function setOsnovica($o) {
            if($o > 0) {
                $this->osnovica = $o;
            }
            else {
                $this->osnovica = 0;
            }
        }

        public function setBrGod($bg) {
            if($bg > 0) {
                /*
                if(is_int($bg)) {
                    $this->brGod = $bg;
                }
                elseif(is_float($bg)) {
                    $this->brGod = ceil($bg);
                }
                else {
                    $this->brGod = 0;
                }
                */
                $this->brGod = ceil($bg);
            }
            else {
                $this->brGod = self::$defaultBrGod;
            }
        }

        public function setTip($t) {
            if(is_string($t)) {
                $this->tip = $t;
            }
            else {
                $this->tip = "";
            }
        }

        public static function setDefaultBrGod($bg) {
            if($bg > 0) {
                self::$defaultBrGod = ceil($bg);
            }
            else {
                self::$defaultBrGod = 5;
            }
        }

        public function stampa() {
            echo "
                <ul>
                    <li>Godišnja kamata: {$this->godKamata}%</li>
                    <li>Osnovica: {$this->osnovica}</li>
                    <li>Period otplate: {$this->brGod} god.</li>
                    <li>Tip kredita: {$this->tip}</li>
                </ul>
            ";
        }
    }