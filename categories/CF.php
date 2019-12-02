<?php

    include('../connect.php');

    $query = "SELECT * FROM pelicula WHERE categoria = 4";
    $cf = $conn->query($query);

?>