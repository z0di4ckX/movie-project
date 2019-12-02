<?php

include('../connect.php');

$id_pelicula = $_GET['GetID'];
$titulo = $_POST['titulo'];
$categoria = $_POST['categoria'];
$rDate = $_POST['release_date'];
$sinopsis = $_POST['sinopsis'];
$poster = $_POST['poster'];
$director = $_POST['director'];
$publicadora = $_POST['publicadora'];
$clasificacion = $_POST['clasificacion'];
$actor1 = $_POST['actor1'];
$actor2 = $_POST['actor2'];
$actor3 = $_POST['actor3'];
$trailer = $_POST['trailer'];

$query = "UPDATE pelicula SET titulo = '$titulo', categoria = '$categoria', release_date = '$rDate', sinopsis = '$sinopsis',
    poster = '$poster', director = '$director', publicadora = '$publicadora', clasificacion = '$clasificacion',
    actor1 = '$actor1', actor2 = '$actor2', actor3 = '$actor3', trailer = '$trailer' WHERE id_pelicula = '$id_pelicula' ";

$result = $conn->query($query);
?>

<html>
    <head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/bootstrap.js"></script>
		<script src="js/jquery-3.4.1.min.js"></script>
		<title>Modificar Articulo</title>
	</head>
    <body>
    <?php if($result > 0) { ?>
    <h1> Articulo Modificado </h1>
    <?php header("location: index.php"); ?>
    <?php }else{?>
    <h1> Error al Modificar Articulo <h1>
    <?php } ?>
    <?php mysqli_close($conn); ?>
    <a href="index.php"> Regresar</a>
    </body>
</html>