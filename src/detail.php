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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
        $(".btns").click(function(){
            $(".input").toggleClass("active").focus;
            $(this).toggleClass("animate");
            $(".input").val("");
        });    
    });
    </script>
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
        <div class="wrapper sm-2">
            <div class="search-box">
            <form action="result.php" method="GET">
                <input type="text" placeholder="Search..." class="input" name="buscar">
                <div class="btns">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </div>
            </form>
            </div>
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
                        $datas = $row['release_date'];
                        $clasificacion = $row['clasificacion'];
                        $id_geners = $row['categoria'];
                        $trailer = $row['trailer'];
                        $id_actor = $row['actor1'];
                        $id_actor2 = $row['actor2'];
                        $id_actor3 = $row['actor3'];

                        // Query for the geners
                        $query2 = "SELECT * FROM categoria WHERE id_categoria = '$id_geners'";
                        $result2 = mysqli_query($conn, $query2) or die("databese error:" . mysqli_error($conn));

                        while($row = mysqli_fetch_assoc($result2)) {
                            $geners = $row['categoria'];
                        }
                        // End the query

                        // Query for the frist actor
                        $query3 = "SELECT * FROM actor WHERE id_actor = '$id_actor'";
                        $result3 = mysqli_query($conn, $query3) or die("databese error:" . mysqli_error($conn));
                            
                        while($row = mysqli_fetch_assoc($result3)) {
                            $id_actor = $row['id_actor'];
                            $actors = array($row['nombre'], " ", $row['apellidos']);
                        }
                        // End the query

                        // Query for the second actor
                        $query4 = "SELECT * FROM actor WHERE id_actor = '$id_actor2'";
                        $result4 = mysqli_query($conn, $query4) or die("databese error:" . mysqli_error($conn));

                        while($row = mysqli_fetch_assoc($result4)) {
                            $id_actor2 = $row['id_actor'];
                            $actors2 = array($row['nombre'], " ", $row['apellidos']);
                        }
                        // End the query

                        // Query for the third actor
                        $query5 = "SELECT * FROM actor WHERE id_actor = '$id_actor3'";
                        $result5 = mysqli_query($conn, $query5) or die("databese error:" . mysqli_error($conn));

                        while($row = mysqli_fetch_assoc($result5)) {
                            $id_actor3 = $row['id_actor'];
                            $actors3 = array($row['nombre'], " ", $row['apellidos']);
                        }
                        // End the query

                        ?>
                    <div class="card text-center text-black bg-light mb-3" style="width: 27rem;">
                        <a href="detail.php?GETID=<?php echo $id; ?>">
                            <img class="card-img-top" src="<?php echo $poster; ?>" alt="<?php echo $title; ?>">
                        </a>
                    </div>
                    <div id="card-big">
                        <div class="card-title">
                            <h2 class="card-text"><strong><?php echo $title; ?></strong></h2>
                        </div>
                        <div class="row text-center">
                            <div class="card-title">
                                <h5 class="card-title"><strong>The Genres</strong></h5>
                                <a href="#" class="badge badge-secondary" id="genres"><?php echo $geners; ?></a>
                                <a href="#" class="badge badge-secondary" id="datas"><?php echo $datas; ?></a>
                                <a href="#" class="badge badge-secondary" id="clasificacion"><?php echo $clasificacion; ?></a>
                            </div>
                        </div>
                        <div class="card-body mb-3">
                            <h5 class="card-title"><strong>The Synopsis</strong></h5>
                            <p class="card-text"><?php echo $text; ?></p>
                        </div>
                        <div class="row text-center">
                            <div class="card-title">
                                <h5 class="card-title"><strong>The cast</strong></h5>
                                <a href="detailActor.php?GETID=<?php echo $id_actor; ?>" class="badge badge-secondary" id="genres"><?php echo implode ($actors); //Name and Last name for the frist actor ?></a>
                                <a href="detailActor.php?GETID=<?php echo $id_actor2; ?>" class="badge badge-secondary" id="genres"><?php echo implode ($actors2); //Name and Last name for the second actor ?></a>
                                <a href="detailActor.php?GETID=<?php echo $id_actor3; ?>" class="badge badge-secondary" id="genres"><?php echo implode($actors3); //Name and Last name for the third actor ?></a>
                            </div>
                        </div>
                        <div class="row row_size card-button">
                            <div>
                                <a href="#" id="button" class="btn btn-outline-primary rounded-pill">Trailer</a>
                                <a class="btn btn-outline-primary rounded-pill" href="showModified.php?GETID=<?php echo $id ?>">Update Movie</a>
                                <!-- <a class="btn btn-outline-primary rounded-pill" href="../CRUD/delete.php?GETID=<?php echo $id ?>">Delete Movie</a> -->
                            </div>
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
                    <form action="#">
                        <?php echo $trailer; ?>
                    </form>
                </div>
            </div>
        </section>
        <hr>
        <div class="title">
            <h1 class="main_title" id="section-2">Recommended Movies</h1>
        </div>
        <section class="section-1 p-0 text-center">
            <div class="row">
                <table class="table table-strip table-hover table-bordered row_size">
                <?php 
                    $query6 = "SELECT * FROM pelicula WHERE categoria = '$id_geners'";
                    $result6 = mysqli_query($conn, $query6) or die("datebese error:" . mysqli_error($conn));
                                        
                    while($row = mysqli_fetch_assoc($result6)) {
                        $id = $row['id_pelicula'];
                        $poster = $row['poster'];
                        $title = $row['titulo'];
                        $id_geners = $row['categoria'];

                    ?>
                    <div class="card text-center text-black bg-light mb-3"  style="width: 16rem;">
                        <a href="detail.php?GETID=<?php echo $id." ".$id_geners; ?>">
                            <img class="card-img-top" src="<?php echo $poster; ?>" alt="<?php echo $title; ?>">
                        </a>
                        <div class="card-title">
                            <p class="card-text"><?php echo $title; ?></p>
                        </div>
                    </div>
                    <?php } ?>
                </table>
            </div>
        </section>
        <a href="index.php" class="buttom-right btn btn-outline-primary rounded-pill mb-3">Back</a>
    </main>
    <!-- Start bootstrap script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- End -->
</body>
</html>