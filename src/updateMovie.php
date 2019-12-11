<?php 
    include('../include/connect.php');

    $id = $_GET['GETID'];
    $titulo = $_POST['titulo'];
    $categoria = $_POST['categoria'];
    $release_date = $_POST['release_date'];
    $sinopsis = $_POST['sinopsis'];
    $poster = $_POST['poster'];
    $director = $_POST['director'];
    $publicadora = $_POST['publicadora'];
    $clasificacion = $_POST['clasificacion'];
    $actor1 = $_POST['actor1'];
    $actor2 = $_POST['actor2'];
    $actor3 = $_POST['actor3'];

    $query = "UPDATE pelicula SET titulo = '$titulo', categoria = '$categoria', release_date = '$release_date',
    sinopsis = '$sinopsis', poster = '$poster', director = '$director', publicadora = '$publicadora', clasificacion = '$clasificacion',
    actor1 = '$actor1', actor2 = '$actor2', actor3 = '$actor3' WHERE id_pelicula = '$id' ";

    $result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
    <!-- End css -->
    <title>Update Movie</title>
</head>
<body>
    <main>
        <?php if($result > 0) { ?>

            <h1> Update Movie </h1>
        
        <?php header("location: index.php"); ?>
        
        <?php }else{?>
        
            <h1> Error Modifying Movie <h1>
        <?php echo $conn->error; ?>
        <?php } ?>

        <?php mysqli_close($conn); ?>
        
        <a class="btn btn-primary" href="index.php">Back</a>
    </main>
<!-- Start bootstrap script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- End -->
</body>
</html>