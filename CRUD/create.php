<?php 

include('include/connect.php');

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

$query = "INSERT INTO pelicula (titulo, categoria, release_date, sinopsis, poster, director, publicadora, clasificacion, actor1, actor2, actor3, trailer) 
VALUES ('$titulo', '$categoria', '$release_date', '$sinopsis', '$poster', '$director', '$publicadora', '$clasificacion', '$actor1', '$actor2', '$actor3', '$trailer')";

$result = mysqli_query($conn, $query);

if($result > 0) {
    header("location: index.php");
} else {
    echo "Error: ". $query . "<br>" > $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html>

<head>
<title>Añadir Pelicula</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.js"></script>
<script src="js/jquery-3.4.1.min.js"></script>
</head>

<body>

</body>
</html>