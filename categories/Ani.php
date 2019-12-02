<?php

    include('../connect.php');

    $query = "SELECT * FROM pelicula WHERE categoria = 6";
    $ani = $conn->query($query);

?>