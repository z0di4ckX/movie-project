<?php 

include('../include/connect.php');

$titulo = $conn->real_escape_string($_POST['titulo']);
$categoria = $conn->real_escape_string($_POST['categoria']);
$release_date = $conn->real_escape_string($_POST['release_date']);
$sinopsis = $conn->real_escape_string($_POST['sinopsis']);
$poster = $conn->real_escape_string($_POST['poster']);
$director = $conn->real_escape_string($_POST['director']);
$publicadora = $conn->real_escape_string($_POST['publicadora']);
$clasificacion = $conn->real_escape_string($_POST['clasificacion']);
$actor1 = $conn->real_escape_string($_POST['actor1']);
$actor2 = $conn->real_escape_string($_POST['actor2']);
$actor3 = $conn->real_escape_string($_POST['actor3']);
$trailer = $conn->real_escape_string($_POST['trailer']);

$query = "INSERT INTO pelicula (titulo, categoria, release_date, sinopsis, poster, director, publicadora, clasificacion, actor1, actor2, actor3, trailer) 
VALUES ('$titulo', '$categoria', '$release_date', '$sinopsis', '$poster', '$director', '$publicadora', '$clasificacion', '$actor1', '$actor2', '$actor3', '$trailer')";

$result = mysqli_query($conn, $query);

if($result > 0) {
    header("location: ../src/index.php");
} else {
    echo "Error: ". $query . "<br>" > $conn->error;
}

?>

<html>
    <head>
		<meta charset="UTF-8">
        <link rel="stylesheet" href="../css/main.css">
        <!-- bootstrap css -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
        crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
		<title>Añadir Pelicula</title>
	</head>
    <body>
    <?php if($result > 0) { ?>
    <h1> Añadir Pelicula</h1>
    <?php header("location: ../src/index.php"); ?>
    <?php }else{?>
    <h1> Error<h1>
    <?php echo $conn->error; ?>

    <?php } ?>
    <?php mysqli_close($conn); ?>
    <a href="../src/index.php">Back</a>
=======

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