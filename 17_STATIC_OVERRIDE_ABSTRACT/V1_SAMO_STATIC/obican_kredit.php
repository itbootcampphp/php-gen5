<?php
    require_once "kredit.php";

    class ObicanKredit extends Kredit {
        const TIP = "Obican Kredit";

        public function __construct($gk, $o, $bg) {
            parent::__construct($gk, $o, $bg, self::TIP);
        }
    }