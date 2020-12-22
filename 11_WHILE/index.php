<html>
    <head>
        <style>
            img{
                width: 150px;
            }
            .zeleniOkvir{
                border: 3px lime solid;
            }

            .plaviOkvir{
                border: 3px blue dotted;
            }
        </style>
    </head>

    <body>
    <?php

        // WHILE PETLJA
        /*
            1. Postaviti početnu vrednost / Inicijalizovati vrednost
            2. while (pitanje)
                2.a. TRUE: Blok naredbi koji se odvija ako je pitanje/uslov u while ispunjen
                2.b. FALSE: Ukoliko pitanje/uslov nije ispunjen, ne izvršava se blok naredbi
        */

        // Ispisati brojeve: 0, 1, 2, 3, 4
        $i = 0;

        while($i < 5){
            echo "<p>$i</p>";
            $i++; // ili $i += 1; ili $i = $i + 1;
        }

        echo "<p>KRAJ PETLJE</p>";

        /*
        $i=0 True 0
        $i=1 True 1
        $i=2 True 2
        $i=3 True 3
        $i=4 True 4
        $i=5 FALSE
        */

        while($i < 5 && $i > 2){
            echo "<p>$i</p>";
            $i++;
        }

        $j = -2;
        while($j < 5){
            echo "<p>$j</p>";
            $j++;
        }

        echo "<p>Vrednost promenljive j nakon 1. petlje je: $j</p>";
        echo "<hr>";

        //$j = -2;
        while($j <= 10){
            echo "<p>$j</p>";
            $j++;
        }

        echo "<p>Vrednost promenljive j nakon 2. petlje je: $j</p>";
        echo "<hr>";

        //EKVIVALENTNI IZRAZI SU   
        $i++; 
        $i = $i + 1;
        $i += 1;

        $i = $i + 2;
        $i += 2;

        $i--;
        $i = $i - 1;
        $i -= 1;

        //PRIMER
        $i = $i + 2 + $j;
        $i += 2 + $j;   


        // 4. ZADATAK
        /*
            Kreirati n paragrafa sa proizvoljnim tekstom i naizmenično ih obojiti u tri različite boje
        */
        // 1. način
        $n = 7;
        $par = 0;

        while($par < $n) {
            if($par % 3 == 0) {
                echo "<p style='color:red'> Neki tekst $par... </p>";
            }    
            elseif($par % 3 == 1) {
                echo "<p style='color:green'> Neki tekst $par... </p>";
            }       
            else {
                echo "<p style='color:blue'> Neki tekst $par... </p>";
            }

            $par++;
        }

        echo "<hr>";

        //2. način
        $n = 7;
        $par = 0;

        while($par < $n) {

            echo "<p style='color:";

            if($par % 3 == 0) {
                echo "red";
            }    
            elseif($par % 3 == 1) {
                echo "green";
            }       
            else {
                echo "blue";
            }

            echo "'> Neki tekst $par... </p>";

            $par++;
        }

        echo "<hr>";

        //3. način
        $n = 7;
        $par = 0;

        while($par < $n) {

            $boja = "blue";

            if($par % 3 == 0) {
                $boja = "red";
            }    
            elseif($par % 3 == 1) {
                $boja = "green";
            }  

            echo "<p style='color:$boja'> Neki tekst $par... </p>";
            $par++;
        }

        echo "<hr>";

        // 5. ZADATAK
        /*
            Kreirati n proizvoljnih slika i staviti im naizmenično dva različita okvira
        */
        $n = 4;
        $k = 0;

        while($k < $n) {

            $klasa = "plaviOkvir";
            if($k % 2 == 0) {
                $klasa = "zeleniOkvir";                
            } 
            echo "<img src='cvet.webp' class='$klasa'>";
            $k++;
        }

        echo "<hr>";

        // 6. ZADATAK
        /*
            Odrediti sumu brojeva od 1 do 100
        */

        $br = 1;
        $suma = 0;
        while($br <= 100){
            $suma += $br; //ili $suma = $suma + $br;
            $br++;
        }
        echo "<p>Suma je: $suma</p>";

        /*
            1, 2, 3, 4, ..., 96, 97, 98, 99, 100
        */
        $n = 100;
        $zbir = $n*($n+1)/2;
        echo $zbir;

        // 9. ZADATAK
        /*
            Odrediti proizvod brojeva od n do m
        */
        $n = 2;
        $m = 6;
        $p = 1;
        while($n <= $m){
            $p *= $n; //$p = $p * $n;
            $n++;
        }
        echo "<p>Proizvod brojeva od 2 do 6 je $p</p>";

        // 10. ZADATAK
        /*
            Odrediti sumu kvadrata parnih i sumu kubova neparnih brojeva od n do m
        */

        $sumaKv = 0;
        $sumaKub = 0;
        $n = 3;
        $m = 7;

        while($n <= $m) {
            if($n % 2 == 0){
                $sumaKv += $n**2; // ili $sumaKv = $sumaKv + $n*$n
            }
            else {
                $sumaKub += $n**3; // ili $sumaKub = $sumaKub + $n*$n*$n
            }
            $n++;
        }
        echo "Suma kvadrata je: $sumaKv <br> Suma kubova je: $sumaKub <hr>";

        // 11. ZADATAK
        /*
        Odrediti sa koliko brojeva je deljiv uneti broj k
        */

        $k = 7;
        $d = 1;
        $deljiv = 0;

        while($d <= $k) {
            if($k % $d == 0) {
                $deljiv++;
            }
            $d++;
        }

        echo "$deljiv <hr>";


    ?>
    </body>
</html>

