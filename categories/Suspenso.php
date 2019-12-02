<?php

    include('../connect.php');

    $query = "SELECT * FROM pelicula WHERE categoria = 2";
    $suspenso = $conn->query($query);

?>