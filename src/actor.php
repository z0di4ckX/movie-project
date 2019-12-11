<?php 
    include('../include/connect.php');
?>

<!DOCTYPE html>
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
                        <a class="dropdown-item" href="showModified.php">Update Movie</a>
                        <a class="dropdown-item" href="actor.php">Add Actor</a>
                    </div>
                </div>
            </ul>
        </div>
        <div>
            <img class="search" src="../img/search.png" alt="forget-search">
        </div>
    </header>
    <div class="title">
        <h1 class="main_title">Add Actor</h1>
        <hr>
    </div>
    <main>
        <!-- Section 1 -->
        <section class="section-1 p-0 text-center">
            <div class="inputActor">
                <form name="modificar" method="POST" action="../CRUD/añadirActor.php">
                    <div class="form-group">
                        <input type="text" name="nombre" class="form-control" value="" placeholder="First Name" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="apellidos" class="form-control" value="" placeholder="Last Name" />
                    </div>
                    <div class="form-group">
                        <textarea type="text" name="bio" class="form-control" value="" rows="10" placeholder="Biography"></textarea>
                    </div>

                    <button type="submit" class="btn btn-success" name="Guardar" value="Actualizar">Submit</button>
                    <a class="btn btn-primary" href="index.php">Back</a>
                </form>
            </div>
        </section>
    </main>
    <!-- Start bootstrap script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- End -->
</body>
</html>