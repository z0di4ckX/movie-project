<?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "interflixdb";

    $conn = mysqli_connect($host, $username, $password, $db);

    if($conn->connect_errno) {
        echo "Failed to connect to MySQL: " . $conn->connect_errno;
    }

?>