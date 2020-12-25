<?php
    // Bez nizova:
    $cars1 = "Volvo";
    $cars2 = "BMV";
    $cars3 = "Toyota";

    // Sa nizovima:
    $cars = array("Volvo", "BMV", "Toyota");
    // Elementi niza: "Volvo", "BMV", "Toyota"
    // Indeksi elemenata: 0, 1, 2

    var_dump($cars1);
    var_dump($cars);

    echo "<p>$cars[0]</p>";
    echo "<p>$cars[1]</p>";
    echo "<p>$cars[2]</p>";

    echo "<hr>";
    $cars[500] = "Audi";
    $cars[1] = "Peugeot";
    echo "<p>$cars[0]</p>";
    echo "<p>$cars[1]</p>";
    echo "<p>$cars[2]</p>";
    // echo "<p>$cars[3]</p>"; - Notice: Undefined offset: 3
    // echo "<p>$cars[4]</p>"; - Notice: Undefined offset: 4
    echo "<p>$cars[500]</p>";



    // Kreiranje niza polaznika
    $polaznici = array();
    $polaznici[] = "Marko";
    $polaznici[] = "Marija";
    $polaznici[] = "Ivana";
    $polaznici[] = "Goran";
    $polaznici[] = "Vladan";
    var_dump($polaznici);

    $duzina = count($polaznici);
    //var_dump($duzina);
    for($i = 0; $i < $duzina; $i++)
    {
        echo "<p>$polaznici[$i]</p>";
    }

?>