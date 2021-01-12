<?php

    echo "<h3>Funkcije</h3>";

    function mojaFunkcija(){
        echo "<p>Zdravo svete!</p>";
    }

    mojaFunkcija();
    mojaFunkcija();

    echo "Funkcija Vam poručuje: ";
    mojaFunkcija();

    function horizontalnaLinija(){
        echo "<hr>";
    }
    horizontalnaLinija();

    // Funkcija sa prosleđenim argumentom (parametrrom)

    function ispisiTekst($tekst){
        $smajli = ":)"; //Funkcija "vidi" samo one promenljive koje su u njoj definisane ili koje su joj prosleđene. Takođe one promenljive koje su definisane u funkciji, vidljive su SAMO u funkciji.
        echo "<p>Prosledili ste tekst: $tekst $smajli<p>";
    }

    ispisiTekst("Festina lente!");
    ispisiTekst("Žuri polako!");

    $t = "Vuk dlaku menja ali ne ćud";
    ispisiTekst($t);

    $b = 5;
    ispisiTekst($b);

    horizontalnaLinija();

    // Funkcija sa dva prosleđena argimenta (parametra)
    function ispisiKorisnika($ime, $prezime){
        echo "<p> Ulogovani korisnik je: <i> $ime $prezime </i></p>";
    }

    ispisiKorisnika("Stefan", "Stanimirović");
    ispisiKorisnika("Jelena", "Matejić");
    $ime = "Milena";
    $prez = "Đorđević";
    ispisiKorisnika($ime, $prez);
    horizontalnaLinija();

    // Funkcija sa tri prosleđena parametra
    function ispisiKorisnikaIGodine($ime, $prezime, $god){
        if($god<0 || $god>120 || $ime=="" || $prezime==""){
            echo "<p>Neispravno uneti podaci</p>";
        } else {
            echo "<p> Korisnik $ime $prezime ima $god godina </p>";
        }
    }

    ispisiKorisnikaIGodine("Jelena", "Matejić", 26);

    horizontalnaLinija();

    // Funkcija koja VRAĆA VREDNOST
    function zbir($br1, $br2){
        $z = $br1 + $br2;
        return $z;
    }

    echo zbir(7, 3.5);

    echo "<p>Zbir brojeva iznosi ";
    echo zbir(5.3, 7.2);
    echo "</p>";

    echo "<h3>Zbir brojeva iznosi ";
    echo zbir(5.3, 7.2);
    echo "</h3>";

    // Zadatak: Izračunati zbir 3 broja korišćenjem funkcije zbir
    $b1 = 5;
    $b2 = 6;
    $b3 = 7;

    $zbirB1B2 = zbir($b1, $b2);
    $zbirB1B2B3 = zbir($zbirB1B2, $b3);
    echo "<p> $b1 + $b2 + $b3 = $zbirB1B2B3 </p>";

    //2. način za zbir 3 broja korišćenjem funkcije zbir
    $zbirB1B2B3 = zbir(zbir($b1, $b2) , $b3);
    echo "<p> $b1 + $b2 + $b3 = $zbirB1B2B3 </p>";

    // Zbir 5 brojeva
    $zb5 =  zbir(zbir(zbir(5,6) , zbir(7,8)), 9);
    echo "<p>$zb5</p>";

    horizontalnaLinija();

    //1. ZADATAK
    /*
    Napisati funkciju neparan koja za uneti ceo broj n vraća tačno ukoliko je neparan ili netačno ukoliko nije neparan.Pozvati funkciju i testirati njen rad.
    */

    function neparan($broj){
        echo "<p>Početak funkcije</p>";

        if($broj%2 == 0){
            return false; //Čim se desi return, tu se prekida funkcija
        } else {
            return true;
        }

        echo "<p>Kraj funkcije</p>"; //Ova linija koda se neće izvršiti, zato što pre nje imamo return naredbu
    }

    if (neparan(-13)){
        echo "Broj je neparan";
    } else {
        echo "Broj je paran";
    }

    // 2. ZADATAK
    /*
    Napisati funkciju maks2 koja vraća veći od dva prosleđena realna broja. Zatim napisati funkciju maks4 koja vraća najveći od četiri realna broja.Pozvati funkcije i testirati njihov rad.
    */
    function maks2($a, $b){
        if($a > $b){
            return $a;
        } else {
            return $b;
        }
    }

    function maks4($a, $b, $c, $d){
        //1. način
        /*
        $maksAB = maks2($a, $b); 
        $maksCD = maks2($c, $d); 
        $maks = maks2($maksAB, $maksCD); 
        return $maks;
        */

        //2. način
        return maks2(maks2($a, $b) , maks2($c, $d));
    }
    echo "<br>";
    echo maks4(-78, -76, -45, 100);
    echo "<br>";
?>