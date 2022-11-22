<?php
    include '../includes/dbconn.php';

    $sql = "SELECT id FROM courses";
                $query = $mysqli->query($sql);
                echo "$query->num_rows";
?>