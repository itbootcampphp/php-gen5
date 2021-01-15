<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ugnježdeno grananje</title>
</head>
<body>

    <!-- 
        20. Učitati dva cela broja i ispitati da li je veći od njih paran. 
     -->

     <?php
        $br1 = 15;
        $br2 = 15;

        if($br1 > $br2) {
            echo "Broj $br1 je veći";
            if($br1 % 2 == 0) {
                echo " i paran je";
            }
            else {
                echo " i neparan je";
            }
        } 
        elseif($br2 > $br1) {
            echo "Broj $br2 je veći";
            if($br2 % 2 == 0) {
                echo " i paran je";
            }
            else {
                echo " i neparan je";
            }
        }
        else {
            echo "Brojevi $br1 i $br2 su jednaki";
        }
     ?>
</body>
</html>