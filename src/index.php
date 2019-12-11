<?php 
    include('../include/connect.php');

    $query = "SELECT id_pelicula, titulo, poster FROM pelicula";

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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <h1 class="main_title">Popular Movies</h1>
        <hr>
    </div>
    <main>
        <!-- Section 1 -->
        <section class="section-1 p-0 text-center">
            <div class="row">
                <table class="table table-strip table-hover table-bordered row_size">
                    <!--PHP script loop to read data base information  -->
                    <?php while($row = mysqli_fetch_assoc($result)) { 
                        $id = $row['id_pelicula'];
                        $poster = $row['poster'];
                        $title = $row['titulo'];
                    ?>
                    <div class="card text-center text-black bg-light mb-3"  style="width: 16rem;">
                        <a href="detail.php?GETID=<?php echo $id; ?>">
                            <img class="card-img-top" src="<?php echo $poster; ?>" alt="<?php echo $title; ?>">
                        </a>
                        <div class="card-title">
                            <p class="card-text"><?php echo $title; ?></p>
                        </div>
                    </div>
                    <?php } ?>
                    <!--PHP script end loop  -->
                </table>
            </div>
        </section>
        <a href="action.php" class="buttom-right btn btn-outline-primary rounded-pill mb-3">Next</a>
    </main>
    <!-- Start bootstrap script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- End -->
</body>
</html>