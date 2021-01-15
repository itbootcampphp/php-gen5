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
    horizontalnaLinija();

    // 3. ZADATAK
    /*
        Napisati funkciju slika kojoj se prosleđuje url adresa slike, a funkcija prikazuje sliku za prosleđenu adresu slike.Pozvati funkciju i testirati je za različite url adrese.
    */
    function slika($adresa){
        echo "<img src='$adresa'>";
    }
    slika("https://www.elegantthemes.com/blog/wp-content/uploads/2015/02/custom-trackable-short-url-feature.png");

    horizontalnaLinija();
    // 4. ZADTAK
    /*
        Napraviti funkciju obojenaRec kojoj se prosleđuje boja na engleskom jeziku i prosleđuje se proizvoljna reč. Prosleđenu reč ispisati u paragarfu bojom koja je prosleđena. Pozvati funkciju i testirati je.
    */
    function obojenaRec($boja, $rec){
        echo "<p style='color:$boja'>$rec</p>";
    }
    obojenaRec("red", "Crveni tekst");
    obojenaRec("blue", "Plavi tekst");
    horizontalnaLinija();

    // 5. ZADATAK
    /*
    Napraviti funkciju recenica1 koja pet puta ispisuje istu rečenicu u paragrafu, a veličina fonta rečenice treba da bude jednaka vrednosti iteratora (sami odredite startnu vrednost iteratora i za koliki korak ćete iterator povećavati). Testirati funkciju
    */
    function recenica1(){
        for($i=5; $i<=25; $i+=5){
            echo "<p style='font-size:${i}px'>Rečenica</p>";
        }
    }

    recenica1();

    // 8. ZADATAK
    /*
    Napisati funkciju aritmetickaCifre koja vraća aritmetičku sredinu brojeva kojima je poslednja cifra 3 u intervalu od n do m.Brojeve n i m proslediti kao parametre funkciji. Testirati funkciju.
    */
    horizontalnaLinija();
    function aritmetickaCifre($n, $m){
        $suma = 0;
        $br = 0;
        for($i = $n; $i <= $m; $i++){
            if($i%10 == 3){
                $suma += $i;
                $br++;
            }
        }
        $arsr = $suma / $br;
        return $arsr; 
    }

    $n = 5;
    $m = 35;
    echo aritmetickaCifre($n, $m);

    // 9. ZADATAK
    /*
        Dobili ste plaćenu programersku praksu u trajanju od n meseci. Prvog meseca, plata će biti a dinara. Ako budete vredno radili, svakog narednog meseca ćete dobiti povišicu od d dinara. Brojeve n, a i d određujete sami.Napišite funkciju praksa kojoj se prosleđuju brojevi n, a i d. Funkcija treba da vrati vrednost koliko ćete ukupno novca zaraditi, ukoliko svakog meseca budete dobijali povišicu.Testirati zadatak (pozvati funkciju i ispisati vrednost koju ona vraća).
    */
    horizontalnaLinija();
    function praksa($n, $a, $d){
        //1. nacin
        /*
        $ukupno = $a;
        for($i=2; $i<=$n; $i++){
            $ukupno += $a + $d;
        }
        return $ukupno;
        */

        //2. nacin
        /*
        $ukupno = 0;
        for($i=1; $i<=$n; $i++){
            $ukupno += $a + $d;
        }
        return $ukupno - $d; //Oduzimam jednu povisicu koja je bila 1. meseca
        */

        //3. nacin
        /*
        $ukupno = $a + ($n-1)*($a+$d);
        return $ukupno;
        */

        //4. nacin
        $ukupno = ($a+$d)*$n - $d;
        return $ukupno;
    }

    $n = 6; //Broj meseci
    $a = 5000; //Plata prvog meseca
    $d = 3000; //Povisica
    echo praksa($n, $a, $d);

    horizontalnaLinija();

    //10. ZADATAK
    $brojevi = array(81, -45, 28, 76, 41);
    
    horizontalnaLinija();
    //11. ZADATAK
    /*
     Napraviti funkciju brojNeparnih kojoj se kao parametar prosleđuje niz celih brojeva, a funkcija prebrojava i vraća koliko neparnih brojeva ima prosleđeni niz.Pozvati funkciju i testirati je.
    */
    function brojNeparnih($niz){
        $brNeparnih = 0;
        for($i=0; $i<count($niz); $i++){
            if(neparan($niz[$i])){
                $brNeparnih++;
            }
        }
        return $brNeparnih;
    }

    $brojevi = array(81, -45, 28, 76, 41);
    echo brojNeparnih($brojevi);
    horizontalnaLinija();

    //12. ZADATAK
    /* 
     U jednom gradu je od ponedeljka do petka, tačno u podne, merena temperatura vazduha. Izmerene temperature su zapisane u obliku asocijativnog niza datum/temperatura. Osmisliti funkciju (ili više njih) koja će na ekranu plavom bojom ispisati dan, datum i temperaturu kada je temperatura bila najniža, a crvenom bojom ispisati dan, datum i temperaturu kada je temperatura bila najviša. Testirati implementirani kod.
    */
    $merenja = array("10.01.2021." => -37, 
                    "11.01.2021." => -5, 
                    "12.01.2021." => -15, 
                    "13.01.2021." => 3, 
                    "14.01.2021." => -12);


    function najnizaTemp($merenja){
        $temperature = array_values($merenja);
        $najniza = $temperature[0];
        $i = 0;
        
        foreach($merenja as $key=>$value){
            if($najniza >= $value){
                $najniza = $value;
                $datumNajniza = $key;
                $danNajniza = $i;
            }
            $i++;
        }

        $dani = array("ponedeljak", "utorak", "sreda", "cetvrtak", "petak");
        echo "<p style='color:blue'>$dani[$danNajniza] $datumNajniza $najniza </p>";
    }
    
    najnizaTemp($merenja);



?>