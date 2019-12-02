<?php 

include('../connect.php');

$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$bio = $_POST["bio"];

$query = "INSERT INTO actor (nombre, apellidos, bio) 
VALUES ('$nombre', '$apellidos', '$bio')";

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
<title>Añadir Actor</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.js"></script>
<script src="js/jquery-3.4.1.min.js"></script>
</head>

<body>
</body>
</html>