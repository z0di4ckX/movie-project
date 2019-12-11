<?php 
    include('../include/connect.php');

    $id = $_GET['GETID'];
    $query = "SELECT * FROM pelicula WHERE id_pelicula = '$id'";
    $pelicula = $conn->query($query);

    $result = mysqli_query($conn, $query) or die("databese error:" . mysqli_error($conn));
    
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
    <script type="text/javascript" src="../js/main.js"></script>
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
        <h1 class="main_title">Details</h1>
        <hr>
    </div>
    <main>
        <!-- Section 1 -->
        <section class="section-1 p-0 text-center">
            <div class="row">
                <table class="table table-strip table-hover table-bordered row_size">
                    <!-- PHP script starting loop to read data base infomation -->
                    <?php while($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id_pelicula'];
                        $poster = $row['poster'];
                        $title = $row['titulo'];
                        $text = $row['sinopsis'];
                        $geners = $row['categoria'];
                        $trailer = $row['trailer'];
                        ?>
                    <div class="card text-center text-black bg-light mb-3" style="width: 16rem;">
                        <a href="detail.php?GETID=<?php echo $id; ?>">
                            <img class="card-img-top" src="<?php echo $poster; ?>" alt="<?php echo $title; ?>">
                        </a>
                    </div>
                    <div class="card card-big">
                        <div class="card-title">
                            <h2 class="card-text"><strong><?php echo $title; ?></strong></h2>
                        </div>
                        <div class="card-title">
                            <h5 class="card-title"><strong>The Genres</strong></h5>
                            <p class="card-text"></p>
                        </div>
                        <div class="card-body mb-3">
                            <h5 class="card-title"><strong>The Synopsis</strong></h5>
                            <p class="card-text"><?php echo $text; ?></p>
                        </div>
                        <div class="card-body mb-3">
                            <h5 class="card-title"><strong>The Cast</strong></h5>
                        </div>
                        <div id="TrailerButton">
                            <a href="#" id="button" class="btn btn-outline-primary rounded-pill">Trailer</a>
                        </div>
                        <div class="card-body mb-3">
                            <a href="showModified.php?GETID=<?php echo $id ?>" class="btn btn-outline-primary rounded-pill">Update Movie</a>
                        </div>  
                        <div class="card-body mb-3">
                            <a href="../CRUD/delete.php?GETID=<?php echo $id ?>" class="btn btn-outline-primary rounded-pill">Delete Movie</a>
                        </div> 
                    </div>
                    <?php   } ?>
                    <!--PHP script end loop  -->
                </table>
            </div>
        </section>
        <section>
            <div class="bg-modal">
                <div class="modal-contents">
                    <div class="close">+</div>
                    <form action="">
                        <?php echo $trailer; ?>
                    </form>
                </div>
            </div>
        </section>
        <a href="index.php" class="buttom-right btn btn-outline-primary rounded-pill mb-3">Back</a>
    </main>
    <script type="text/javascript" src="../js/main.js"></script>
    <!-- Start bootstrap script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- End -->
</body>
</html>