<?php

    include('../connect.php');

    $query = "SELECT * FROM pelicula WHERE categoria = 1";
    $accion = $conn->query($query);

?>