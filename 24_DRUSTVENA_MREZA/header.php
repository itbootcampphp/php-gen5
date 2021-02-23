<?php
    session_start();
    require_once "connection.php";
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <ul class='menu'>
            <li>
                <a href='index.php'>Home</a>
            </li>
            <li>
                <a href='followers.php'>Friends</a>
            </li>
            <li>
                <a href='#'>Change Profile</a>
            </li>
            <li>
                <a href='#'>Change Password</a>
            </li>
            <li>
                <a href='logout.php'>Logout</a>
            </li>
        </ul>