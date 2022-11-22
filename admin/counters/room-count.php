<?php
    include '../includes/dbconn.php';

    $sql = "SELECT id FROM rooms";
                $query = $mysqli->query($sql);
                echo "$query->num_rows";
?>