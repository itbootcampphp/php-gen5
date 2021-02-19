<?php
    require_once "connection.php";

    $sql = "CREATE TABLE IF NOT EXISTS users(
            id INT UNSIGNED AUTO_INCREMENT,
            username VARCHAR(255) NOT NULL,
            pass VARCHAR(255) NOT NULL,
            PRIMARY KEY(id)
        ) ENGINE = InnoDB;";

    $sql = $sql . "CREATE TABLE IF NOT EXISTS profiles(
            id INT UNSIGNED AUTO_INCREMENT,
            name VARCHAR(255) NOT NULL,
            surname VARCHAR(255) NOT NULL,
            gender CHAR(1),
            dob DATE,
            user_id INT UNSIGNED NOT NULL UNIQUE,
            PRIMARY KEY(id),
            FOREIGN KEY(user_id) REFERENCES users(id)
        ) ENGINE = InnoDB;";

    $sql = $sql . "CREATE TABLE IF NOT EXISTS followers(
            id INT UNSIGNED AUTO_INCREMENT,
            sender_id INT UNSIGNED NOT NULL,
            receiver_id INT UNSIGNED NOT NULL,
            PRIMARY KEY(id),
            FOREIGN KEY(sender_id) REFERENCES users(id),
            FOREIGN KEY(receiver_id) REFERENCES users(id)
        ) ENGINE = InnoDB;";

    if($conn->multi_query($sql))
    {
        echo "Uspesno izvrseni upiti";
    }
    else
    {
        echo "Greska: " . $conn->error;
    }







