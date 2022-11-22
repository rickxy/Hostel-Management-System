<?php
    include '../includes/dbconn.php';

    $sql = "SELECT id FROM userregistration";
                $query = $mysqli->query($sql);
                echo "$query->num_rows";
?>