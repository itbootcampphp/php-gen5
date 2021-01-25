<?php

    require_once "sportista.php";
    require_once "kosarkas.php";

    $k1 = new Kosarkas("Vlade", "Divac", 1968, "Prijepolje", array(32, 12, 38, 15, 20));
    $k2 = new Kosarkas("Pedja", "Stojakovic", 1977 , "Požega", array(25, 4, 30, 14));
    $k3 = new Kosarkas("Aleksandar", "Djordjevic", 1967, "Beograd", array(40, 20, 14, 16, 5, 17, 14));

    //Ispis svih podataka o košarkašima
    $kosarkasi = array($k1, $k2, $k3);
    foreach($kosarkasi as $kosarkas){
        $kosarkas->ispisiKosarkasa();
    }

    function najviseUtakmica($kosarkasi){
        $kosarkasMax = $kosarkasi[0]; //Ovo je objekat
        $max = count($kosarkasMax->getPoeni()); //Pristupimo poenima u objektu i prebrojimo koliko je dugačak niz poena tj. koliko utakmica je košarkaš odigrao

        foreach($kosarkasi as $kosarkas){
            $brUtakmica = count($kosarkas->getPoeni());
            if($brUtakmica > $max){
                $kosarkasMax = $kosarkas;
                $max = $brUtakmica;
            }
        }

        return $kosarkasMax;
    }

    //$najviseKosarkas = najviseUtakmica($kosarkasi);
    //$najviseKosarkas->ispisiKosarkasa();

    najviseUtakmica($kosarkasi)->ispisiKosarkasa();


    function najvisePoena($nizKosarkasa){
        $kosarkasMax = $nizKosarkasa[0];
        $poeni = $nizKosarkasa[0]->getPoeni(); //Za prvog košarkaša uzmem njegov ceo niz poena
        $max = $poeni[0]; //Iz uzetog niza poena, uzmem prvi element tj. poene na prvoj utakmici

        foreach($nizKosarkasa as $k){
            $poeni = $k->getPoeni();
            foreach($poeni as $p){
                if($p > $max){
                    $max = $p;
                    $kosarkasMax = $k;
                }
            }
        }

        return $kosarkasMax;        
    }

    najvisePoena($kosarkasi)->ispisiKosarkasa();

    function najviseProsecnoPoena($nizKosarkasa){
        $kosarkasAvgMax = $nizKosarkasa[0]; //objekat
        $avgMax = $kosarkasAvgMax->prosekPoena(); //prosek poena

        foreach($nizKosarkasa as $nk){
            if($nk->prosekPoena() > $avgMax){
                $avgMax = $nk->prosekPoena();
                $kosarkasAvgMax = $nk;
            }
        }

        return $kosarkasAvgMax;
    }
    najviseProsecnoPoena($kosarkasi)->ispisiKosarkasa();

?>