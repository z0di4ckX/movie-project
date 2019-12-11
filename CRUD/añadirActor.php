<?php 

include('../include/connect.php');

$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$bio = $conn->real_escape_string($_POST["bio"]);

echo $nombre;
echo $apellidos;
echo $bio;

$query = "INSERT INTO actor (nombre, apellidos, bio) 
VALUES ('$nombre', '$apellidos', '$bio')";

$result = mysqli_query($conn, $query);

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
		<title>Añadir Actor</title>
	</head>
    <body>
    <?php if($result > 0) { ?>
    <h1> Añadir </h1>
    <?php header("location: ../src/index.php"); ?>
    <?php }else{?>
    <h1> Error Adding Actor<h1>
    <?php echo $conn->error; ?>

    <?php } ?>
    <?php mysqli_close($conn); ?>
    <a href="../src/index.php">Back</a>
    <!-- Start bootstrap script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- End -->
    </body>
</html>