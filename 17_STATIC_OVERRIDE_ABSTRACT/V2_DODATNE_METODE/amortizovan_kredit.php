<?php
    require_once "kredit.php";

    class AmortizovanKredit extends Kredit {
        const TIP = "Amortizovan Kredit";

        public function __construct($gk, $o, $bg) {
            parent::__construct($gk, $o, $bg, self::TIP);
        }

        public function mesecnaRataAmortizovanKredit() {
            $mesecnaKamata = $this->godKamata / 100 / 12;
            $stepen = (1 + $mesecnaKamata) ** ($this->brGod * 12);
            return ($this->osnovica * $mesecnaKamata * $stepen) / ($stepen - 1);
        }
    }