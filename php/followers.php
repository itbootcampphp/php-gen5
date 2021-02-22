<?php
    require_once 'header.php';

    $id = 3; // ID 'logovanog' korisnika

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
            echo "<a href='follow.php?friend_id=$friendId'>Follow</a>";
            echo "&nbsp;";
            echo "<a href='#'>Unfollow</a>";
            echo "</li>";
        }
        echo "</ul>";
    }
?>

</body>
</html>