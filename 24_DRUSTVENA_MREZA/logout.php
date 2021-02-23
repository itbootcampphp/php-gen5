<?php
    session_start();
    if(isset($_SESSION['id'])) {
        // brisemo sesiju
        $_SESSION = array(); // session_unset();
        session_destroy();
    }

    header('Location: login.php');