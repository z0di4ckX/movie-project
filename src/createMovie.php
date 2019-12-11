<?php 

    include('../include/connect.php'); 
    
    $queryActor = "SELECT * FROM actor";
    $actorResult = mysqli_query($conn, $queryActor);
    $actorResult2 = mysqli_query($conn, $queryActor);
    $actorResult3 = mysqli_query($conn, $queryActor);

    $catQuery = "SELECT * FROM categoria";
    $cats = mysqli_query($conn, $catQuery);

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/main.css">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
    <title>Interflix</title>
</head>
<body>
    <header>
        <div class="conteiner">
            <ul>
            <li><a href="index.php"><img class="nav-image" src="../img/interflix.png" alt="Interflix"></a></li>
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="#"><strong>Genres</strong></a></li>
            <li><a href="action.php">Action</a></li>
                <li><a href="adventure.php">Adventure</a></li>
                <li><a href="animation.php">Animation</a></li>
                <li><a href="comedy.php">Comedy</a></li>
                <li><a href="drama.php">Drama</a></li>
                <li><a href="horror.php">Horror</a></li>
                <li><a href="suspense.php">Suspense</a></li>
                <li><a href="scienceFiction.php">Science fiction</a></li>
                <li><a href="romance.php">Romance</a></li>
                <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" aria-haspopup="true" aria-expaned="false"><strong>
                Other</strong><span class="caret"></span>
                </button>
                    <div class="dropdown-menu" aria-labeledby="dropdownMenuButton">
                        <a class="dropdown-item" href="actor.php">Add Actor</a>
                        <a href="createMovie.php" class="dropdown-item">Add Movie</a>
                    </div>
                </div>
            </ul>
        </div>
        <div>
            <img class="search" src="../img/search.png" alt="forget-search">
        </div>
    </header>
    <div class="title">
        <h1 class="main_title">Create Movie</h1>
        <hr>
    </div>
    <main>
        <div class="inputActor container">
            <h2>Deberian añadir actor primero</h2>
            <form name="modificar" method="POST" action="../CRUD/create.php">
            <div class="form-group">
                <label for="titulo">Movie Title</label>
                <input type="text" name="titulo" class="form-control" value=""></input>
            </div>
            <div class="form-group">
                <label for="categoria">Category</label>
                <select class="form-control" name="categoria">
                <option value="" SELECTED></option>
                <?php
                while($cat = $cats->fetch_assoc()) {
                    $idAct = $cat['id_categoria'];
                    $nombre = $cat['categoria'];
                    echo "<option value='$idAct'> $idAct.&nbsp;$nombre </option>";
                }
                ?>
                </select>
            </div>
            <div class="form-group">
                <label for="release_date">Release date</label>
                <input type="text" name="release_date" class="form-control" value="">
            </div>
            <div class="form-group">
                <label for="sinopsis">Sinopsis</label>
                <input type="text" name="sinopsis" class="form-control" value="">
            </div>
            <div class="form-group">
                <label for="poster">Poster</label>
                <input type="text" name="poster" class="form-control" value="">
            </div>
            <div class="form-group">
                <label for="director">Director</label>
                <input type="text" name="director" class="form-control" value="">
            </div>
            <div class="form-group">
                <label for="publicadora">Publisher</label>
                <input type="text" name="publicadora" class="form-control" value="">
            </div>
            <div class="form-group">
                <label for="clasificacion"> Classification </label>
                <input type="text" name="clasificacion" class="form-control" value="">
            </div>
            <div class="form-group">
                <label for="actor1">Select Actor 1</label>
                <select class="form-control" name="actor1">
                <option value="" SELECTED></option>
                <?php
                while($act = $actorResult->fetch_assoc()) {
                    $idAct = $act['id_actor'];
                    $nombre = $act['nombre'];
                    $apellidos = $act['apellidos'];
                    echo "<option value='$idAct'> $idAct.&nbsp;$nombre $apellidos </option>";
                }
                ?>
                </select>
            </div>
            <div class="form-group">
                <label for="actor2">Select Actor 2</label>
                <select class="form-control" name="actor2">
                <option value="" SELECTED></option>
                <?php
                while($act = $actorResult2->fetch_assoc()) {
                    $idAct = $act['id_actor'];
                    $nombre = $act['nombre'];
                    $apellidos = $act['apellidos'];
                    echo "<option value='$idAct'> $idAct.&nbsp;$nombre $apellidos </option>";
                }
                ?>
                </select>
            </div>
            <div class="form-group">
                <label for="actor3">Select Actor 3</label>
                <select class="form-control" name="actor3">
                <option value="" SELECTED></option>
                <?php
                while($act = $actorResult3->fetch_assoc()) {
                    $idAct = $act['id_actor'];
                    $nombre = $act['nombre'];
                    $apellidos = $act['apellidos'];
                    echo "<option value='$idAct'> $idAct.&nbsp;$nombre $apellidos </option>";
                }
                ?>
                </select>
                <label for="trailer">Trailer</label>
                <input type="text" name="trailer" class="form-control" value="">
            </div>
            <button type="submit" class="btn btn-success" name="Guardar" value="Actualizar">Submit</button>
            <a class="btn btn-primary" href="index.php">Back</a>
        </form>
        </div>
    </main>
    <!-- Start bootstrap script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- End -->
</body>
</html>