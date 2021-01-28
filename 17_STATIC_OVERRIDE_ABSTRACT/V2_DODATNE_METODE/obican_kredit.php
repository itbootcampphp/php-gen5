<?php
    require_once "kredit.php";

    class ObicanKredit extends Kredit {
        const TIP = "Obican Kredit";

        public function __construct($gk, $o, $bg) {
            parent::__construct($gk, $o, $bg, self::TIP);
        }

        public function mesecnaRataObicanKredit() {
            $kamata = $this->osnovica * $this->brGod * $this->godKamata / 100;
            $brojMeseci = $this->brGod * 12;
            return ($this->osnovica + $kamata) / $brojMeseci;
        }
    }