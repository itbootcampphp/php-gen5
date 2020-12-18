<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ugnježdeno grananje</title>

    <!-- <link rel="stylesheet" href="mojcss.css"> -->

    <style>
        div{
            color: red;
        }

        #slicica{
            border: 5px pink solid;
        }
    </style>
</head>
<body>

    <div>
        Zdravo kako si?
    </div>

    <div>
        Učim PHP
        <?php
            echo ":)";
        ?>
    </div>

    <p>Ovo je prvi paragraf</p>


    <article>
        Da li je broj 3 paran?
        <?php
            $br = 3;
            if($br % 2 == 0){
                echo "Broj $br je paran broj!";
            }
            else {
                echo "Broj $br nije paran broj.";
            }
        ?>
    </article>

    <?php
        echo "<img src='slike/f.png' id='slicica'>";
    ?>

    <?php
        $boja = "purple";
        $font = "35px";

        echo "<p style='color: $boja; font-size: $font;'>Neki tekst</p>";
    ?>
</body>
</html>