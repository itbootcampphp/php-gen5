<?php

    // include "film.php"; // Ako dati fajl ne postoji, onda ignorise tu gresku i nastavlja dalje
    // require "film.php"; // Ako dati fajl ne postoji, generise gresku i prekida izvrsenje programa
    // include_once "film.php"; // Isto kao include, samo proverava da li je vec ukljucen dati fajl, i ako jeste, ne ukljucuje ga ponovo
    //require_once "film.php"; // Isto kao require, samo proverava da li je vec ukljucen dati fajl, i ako jeste, ne ukljucuje ga ponovo

    require_once "film.php";

    $film1 = new Film("Kill Bill", "Quentin Tarantino", 2003, 8.7);
    $film1->stampaj();

    $film2 = new Film("Titanic", "James Cameron", 1997, 9.2);
    $film2->stampaj();

    $film3 = new Film("300", "Zack Snyder", 2006, 7.6);
    $film3->stampaj();

    $film4 = new Film("The Shawshank Redemption", "Frank Darabont", 1994, 9.2);
    $film4->stampaj();

    $filmovi = array($film4, $film1, $film2, $film3);

    // Ispisati filmove koji su izasli u 21. veku

    function filmovi21Vek($films)
    {
        foreach($films as $film)
        {
            if($film->getGodina() > 2000)
            {
                $film->stampaj();
            }
        }
    }

    echo "<p>Filmovi koji su izasli u 21. veku:</p>";
    filmovi21Vek($filmovi);

    //$filmovi2 = array();
    //$filmovi3 = array();
    //filmovi21Vek($filmovi2);
    //filmovi21Vek($filmovi3);



    // Odrediti prosecnu ocenu svih filmova

    function prosecnaOcena($films)
    {
        $suma = 0;
        foreach($films as $film)
        {
            $suma += $film->getOcena();
        }
        $n = count($films);
        if($n > 0)
        {
            $arsr = $suma / $n;
        }
        else 
        {
            $arsr = $suma;
        }
        return $arsr;
    }

    $prosek = prosecnaOcena($filmovi);
    echo "<p>Prosecna ocena svih filmova je: $prosek</p>";


    // Odrediti najbolje ocenjeni film
    function ispisNajboljeOcenjenog($films)
    {
        /* 
        Dohvatanje ocene prvog filma iz niza: 
        $prviFilm = $films[0];
        $ocenaPrviFilm = $prviFilm->getOcena();
        $maxOcena = $ocenaPrviFilm;

        // Ili skraceno:
        // $maxOcena = $films[0]->getOcena();
        */

        /*
        Dohvatanje ocene prvog filma iz asocijativnog niza:
        foreach($films as $film)
        {
            $maxOcena = $film->getOcena();
            break;
        }
        */

        // Primetimo da je ocena filma broj >= 1 i <= 10
        $maxOcena = 0;

        // Odredjujemo koja je to maksimalna ocena
        foreach($films as $film)
        {
            if($film->getOcena() > $maxOcena)
            {
                $maxOcena = $film->getOcena();
            }
        }

        // Ispisujemo film sa nadjenom maksimalnom ocenom
        foreach($films as $film)
        {
            if($film->getOcena() == $maxOcena)
            {
                $film->stampaj();
                break;
            }
        }
    }

    echo "<p>Najbolje ocenjeni film:</p>";
    ispisNajboljeOcenjenog($filmovi);