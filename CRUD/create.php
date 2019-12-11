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
<title>Add Movie</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="../css/main.css">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Start bootstrap script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- End -->
</body>
</html>