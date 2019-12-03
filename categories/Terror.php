<?php

    include('../connect.php');

    $query = "SELECT * FROM pelicula WHERE categoria = 5";
    $terror = $conn->query($query);

?>