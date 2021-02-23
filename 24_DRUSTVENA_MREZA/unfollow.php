<?php
    session_start();
    require_once 'connection.php';

    $id = $_SESSION['id']; // logovani korisnik

    if(!empty($_GET['friend_id'])) {
        $friendId = $conn->real_escape_string($_GET['friend_id']);

        $sql = "DELETE FROM followers 
                WHERE sender_id = $id
                AND receiver_id = $friendId";

        $result = $conn->query($sql);
        if(!$result) {
            die("Greska: " . $conn->error);
        }
    }

    header('Location: followers.php');