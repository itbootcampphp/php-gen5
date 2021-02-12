<?php require_once "connection.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        // Dohvatamo sva pocetna slova prezimena i kreiramo linkove
        $q = "SELECT DISTINCT LEFT(prezime, 1) AS prvo_slovo FROM pacijenti ORDER BY prezime";
        $result = $conn->query($q);
        if(!$result->num_rows) {
            echo "<p class='info'>Trenutno u bazi nemate pacijenata!</p>";
        }
        else {
            foreach ($result as $row) {
                $prvoSlovo = $row['prvo_slovo'];
                echo "<a href='#$prvoSlovo'>$prvoSlovo</a>";
            }
        }

        // Za svako slovo kreiramo tabelu sa pacijentima cije prezime pocinje na to slovo
        //$result = $conn->query($q);
        if($result->num_rows) {
            foreach($result as $row) {
                $prvoSlovo = $row['prvo_slovo'];
                // Prikazi sve pacijente cije prezime pocinje na $prvoSlovo
                echo "<h3 id='$prvoSlovo'>$prvoSlovo</h3>";
                echo "<table class='tabela'>";
                echo "<tr>
                        <td>Ime</td>
                        <td>Prezime</td>
                        <td>Visina</td>
                        <td>Tezina</td>
                        <td>Datum rodjenja</td>
                      </tr>";
                $q2 = "SELECT * FROM pacijenti WHERE prezime LIKE '" . $prvoSlovo . "%' ORDER BY ime";
                $sviPacijenti = $conn->query($q2);
                foreach($sviPacijenti as $pac) {
                    echo "<tr>";
                    echo "<td>" . $pac['ime'] . "</td>";
                    echo "<td>" . $pac['prezime'] . "</td>";
                    echo "<td>" . $pac['visina'] . "</td>";
                    echo "<td>" . $pac['tezina'] . "</td>";
                    echo "<td>" . $pac['datum_rodjenja'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            }
        }
    ?>
</body>
</html>