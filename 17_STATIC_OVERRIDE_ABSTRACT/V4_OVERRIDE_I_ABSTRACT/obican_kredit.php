<?php
    require_once "kredit.php";

    class ObicanKredit extends Kredit {
        const TIP = "Obican Kredit";

        public function __construct($gk, $o, $bg) {
            parent::__construct($gk, $o, $bg, self::TIP);
        }

        /*
        public function mesecnaRataObicanKredit() {
            $kamata = $this->osnovica * $this->brGod * $this->godKamata / 100;
            $brojMeseci = $this->brGod * 12;
            return ($this->osnovica + $kamata) / $brojMeseci;
        }
        Ukoliko ime metode ostane mesecnaRataObicanKredit(), to znaci
        da izvedena klasa ObicanKredit poseduje i metodu:
        - mesecnaRata() koju je nasledila iz osnovne klase Kredit,
        - mesecnaRataObicanKredit() koja je samo njena metoda.
        Resenje je da izvedena klasa NE NUDI novu metodu,
        nego da nudi VARIJANTU metode iz osnovne klase.
        */

        // override
        public function mesecnaRata() {
            $kamata = $this->osnovica * $this->brGod * $this->godKamata / 100;
            $brojMeseci = $this->brGod * 12;
            return ($this->osnovica + $kamata) / $brojMeseci;
        }

        public function proba() {
            return "Proba za obican kredit";
        }
    }