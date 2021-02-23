<?php
    require_once 'header.php';

    if(empty($_SESSION['id'])) {
        header('Location: login.php');
    }

    $id = $_SESSION['id']; // ID logovanog korisnika

    if(!empty($_GET['follow'])) {
        $friendId = $conn->real_escape_string($_GET['follow']);

        $sql = "SELECT * FROM followers 
                WHERE sender_id = $id
                AND receiver_id = $friendId";

        $result = $conn->query($sql);
        if($result->num_rows == 0) {
            $sql = "INSERT INTO followers(sender_id, receiver_id)
                    VALUE ($id, $friendId)";
            $result1 = $conn->query($sql);
            if(!$result1) {
                echo "<div class='error'>Error: " . $conn->error . "</div>";
            }
        }
    }

    if(!empty($_GET['unfollow'])) {
        $friendId = $conn->real_escape_string($_GET['unfollow']);

        $sql = "DELETE FROM followers 
                WHERE sender_id = $id
                AND receiver_id = $friendId";

        $result = $conn->query($sql);
        if(!$result) {
            echo "<div class='error'>Error: " . $conn->error . "</div>";
        }
    }



    $sql = "SELECT u.id, u.username, CONCAT(p.name, ' ', p.surname) AS full_name
            FROM users AS u
            INNER JOIN profiles AS p
            ON u.id = p.user_id
            WHERE u.id != $id
            ORDER BY p.name, p.surname";

    $result = $conn->query($sql);
    if($result->num_rows == 0) {
        echo "<div class='error'>No users in database</div>";
    }
    else {
        echo "<ul>";
        foreach ($result as $row) {
            echo "<li>";
            echo $row['full_name'] . " (" . $row['username'] . ")";
            echo "&nbsp;";
            $friendId = $row['id'];

            // Ispitujemo da li pratim korisnika
            $sql1 = "SELECT * FROM followers
                    WHERE sender_id = $id
                    AND receiver_id = $friendId";
            $result1 = $conn->query($sql1);
            $f1 = $result1->num_rows;  // 0 ili 1

            // Ispitujemo da li korisnik prati mene
            $sql2 = "SELECT * FROM followers
                    WHERE sender_id = $friendId
                    AND receiver_id = $id";
            $result2 = $conn->query($sql2);
            $f2 = $result2->num_rows;  // 0 ili 1
            
            if($f1 == 0) {
                if($f2 == 0) {
                    $text = "Follow";
                }
                else {
                    $text = "Follow back";
                }
                echo "<a href='followers.php?follow=$friendId'>$text</a>";
            }
            else {
                echo "<a href='followers.php?unfollow=$friendId'>Unfollow</a>";
            }

            
            
            
            
            echo "</li>";
        }
        echo "</ul>";
    }
?>

</body>
</html>