<?php

include('../connect.php');

$id = $_GET['GetID'];

$query = "DELETE FROM pelicula WHERE id_pelicula = '$id'";

$result = $conn->query($query);
?>

<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.js"></script>
<script src="js/jquery-3.4.1.min.js"></script>
<title> Eliminar Articulo </title>
</head>

<body>
<body>
<center>
<?php 
if($result>0) {
?>

<h1> Usuario Eliminado</h1>
<?php header("location: index.php"); ?>
<?php } else {?>
<h1> Error al Eliminar Usuario </h1>

<?php } ?>

<?php
mysqli_close($conn);
?>

<a href="index.php"> Regresar</a>
</center>
</body>
</body>
</html>