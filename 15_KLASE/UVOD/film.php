<?php

    class Film{

        var $naslov;
        var $reziser;
        var $godina;


        function stampaj(){
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
    $f1->naslov = "Lajanje na zvezde";
    $f1->reziser = "Zdravko Sotra";
    $f1->godina = 1998;
    $f1->stampaj();

?>