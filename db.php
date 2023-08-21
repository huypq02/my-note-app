<?php
    $conn = mysqli_connect('localhost', 'root', '', 'loginapp');
    if($conn) {
        echo "Database connection successfully!";
    } else {
        die("Database connection failed!");
    }
?>