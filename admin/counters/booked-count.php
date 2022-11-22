<?php
    include '../includes/dbconn.php';

    $sql = "SELECT id FROM registration";
                $query = $mysqli->query($sql);
                echo "$query->num_rows";
?>