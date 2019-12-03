<?php

include("../connect.php");

$id = $_GET['id_pelicula'];
$query = "SELECT * FROM pelicula WHERE id_pelicula = '$id'";
$pelicula = $conn->query($query);

?>


<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.js"></script>
<script src="js/jquery-3.4.1.min.js"></script>
<title> Ver Pelicula </title>
</head>

<body>
<body>
<center>
<?php 
if($pelicula>0) {
?>

<h1> Film Details</h1>
<?php header("location: film.php"); ?>
<?php } else {?>
<h1> Error al Buscar Pelicula </h1>
<?php echo "Error: ". $query . "<br>" > $conn->error;
    } ?>

<?php
mysqli_close($conn);
?>

<a href="index.php"> Regresar</a>
</center>
</body>
</body>
</html>