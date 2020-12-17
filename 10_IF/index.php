<!-- IF naredba grananja -->
<?php

    $a = 5;
    $b = 5;

    if($a > $b)
    {
        echo "<p>a je veće od b</p>";
    }

    if($a >= $b)
    {
        echo "<p>a je veće ili jednako b</p>";
    }

    if($a == $b)
    {
        echo "<p>a je jednako b</p>";
    }

    $br1 = "3"; // Vrednost je 3, Tip je STRING
    $br2 = 3;   // Vrednost je 3. Tip je INTEGER

    // Poređenje == samo PO VREDNOSTI
    // Pita da li su isti po vrednosti
    if($br1 == $br2){
        echo "<p>br1 == br2</p>";
    }

    // Poređenje === PO TIPU i PO VREDNOSTI
    // Pita da li su isti po tipu i po vrednosti
    if($br1 === $br2){
        echo "<p>br1 === br2</p>";
    }

    // Pita da li su različiti po vrednosti
    if("5" != 5){
        echo "<p>Različiti su</p>";
    }

    // Pita da li su različiti po tipu i po vrednosti
    if("5" !== 5){
        echo '<p>Različiti su</p>';
    }

    // Tip isti, vrednost različita
    // Pitamo da li su 3 i 5 isti po vrednosti, pošto nisu, neće biti ispunjeno
    if(3 == 5){
        echo "Jednaki su";
    }

    // Pitamo da li su 3 i 5 ispti i po tipu i po vrednosti, poštu nisu isti po vrednosti, neće biti ispunjeno
    if(3 === 5){
        echo "Jednaki i po tipu i po vrednosti";
    }

    // IF - ELSE GRANANJE
    $x = 5;
    $y = 6;

    if($x >= $y)
    {
        echo "<p>x je veće ili jednako y</p>";
    }
    else 
    {
        echo "<p>x je manje od y</p>";
    }

    //Ako je $a jednako $b ispisati: „a i b su jednaki“, u suprotno ispisati:„a i b nisu jednaki“.
    $aa = 5;
    $bb = 6;

    // 1. način
    if($aa == $bb){
        echo "<p> aa == bb </p>";
    } 
    else {
        echo "<p> aa != bb </p>";
    }

    // 2. način
    if($aa != $bb){
        echo "<p> aa != bb </p>";
    }
    else {
        echo "<p> aa == bb </p>";
    }

    echo "<p> Vrednost promenljive \$aa je $aa, vrednost promenljive \$bb je $bb </p>";
    echo "<p>\"Hello world!\"</p>";
    echo '<p>\'Hello world!\'</p>';


?>