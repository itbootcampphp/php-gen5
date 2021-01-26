<?php
    require_once "kredit.php";

    class AmortizovanKredit extends Kredit {
        const TIP = "Amortizovan Kredit";

        public function __construct($gk, $o, $bg) {
            parent::__construct($gk, $o, $bg, self::TIP);
        }
    }