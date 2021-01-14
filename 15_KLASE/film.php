<?php

    class Film{

        var $naslov;

        function stampaj(){
            echo "<p>Naslov filma: $this->naslov</p>";
        }

    }

    $f1 = new Film();
    $f1->naslov = "Lajanje na zvezde";
    $f1->stampaj();

?>