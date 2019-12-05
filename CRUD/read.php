<?php

include("../connect.php");

$id = $_GET['id_pelicula'];
$query = "SELECT * FROM pelicula WHERE id_pelicula = '$id'";
$pelicula = $conn->query($query);

?>