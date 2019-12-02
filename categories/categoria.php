<?php

include('../connect.php');

$query = "SELECT * FROM categoria";
$result = $conn->query($query);

$conn.close();
?>