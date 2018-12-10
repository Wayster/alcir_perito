<?php
    include('includes/db.php');
include ('functions/functions.php');

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Galeria</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/estilo2.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="css/lightbox.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <script src="js/aos.js"></script>

</head>
<body>



<!-- preloader start -->
<div class="preloader">
    <img src="css/imagens/pre.gif" alt="preloader">
</div>

<div class="container-fluid bg-light">
    <div class="row">
        <div class="col-lg-6">
            <img src="css/imagens/ar.png" class="img-fluid animated fadeInRight delay-1s">
        </div>

        <div class="col-lg-6 animated fadeInLeft delay-1s " style="border: 5px solid darkgreen;" id="telaDireita">
                <img src="css/imagens/logoarle.png" class="img-fluid animated fadeInRight delay-1s">
        </div>

    </div>
</div>


<div class="container-fluid bg-light">
    <div class="row">
        <div class="col-md-12">
            <div class="navigation">
                <nav class="navbar navbar-expand-sm navbar-default" style="border: 2px solid darkgreen;">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto">

                            <li class="nav-item ">
                                <a class="nav-link" href="index.php" role="button" aria-haspopup="true"
                                   aria-expanded="false">
                                    AR Pericia
                                </a>

                            </li>

                            <li class="nav-item ">
                                <a class="nav-link" href="arletreinamentos.php" role="button" aria-haspopup="true"
                                   aria-expanded="false">
                                    Cursos e Treinamentos
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="livros.php" role="button" aria-haspopup="true"
                                   aria-expanded="false">
                                    Livros
                                </a>
                            </li>
                            <li class="nav-item active ">
                                <a class="nav-link" href="gallery.php" role="button" aria-haspopup="true"
                                   aria-expanded="false">
                                    Galeria
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="videos.php" role="button" aria-haspopup="true"
                                   aria-expanded="false">
                                    Videos
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="materias_diversos.php" role="button"  aria-haspopup="true"
                                   aria-expanded="false">
                                    Materiais Diversos
                                </a>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contato.php" role="button"  aria-haspopup="true"
                                   aria-expanded="false">
                                    Contato
                                </a>

                            </li>
                            <li class="nav-item">
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div><!--end navigation -->

<!-- Inner Page Wrapper Start -->
<div class="inner-page-wrapper gallery-area">
    <div class="container-fluid">
        <div class="row">

            <?php

                $sql = "select * from galeria";
                $query = mysqli_query($con, $sql);
                while ($rs=mysqli_fetch_array($query)){
                    $img = $rs['img'];
                    $title = $rs['title'];

                    echo  "
                         <!--Single Gallery Image Start-->
            <div class=\"col-md-4 col-sm-6\">
                <div class=\"single-gallery-img mb-30\">
                 <a href=\"css/imagens/$img\" data-lightbox=\"roadtrip\" data-title='$title'>
                 <img data-aos='flip-left' data-aos-duration='2000' src=\"css/imagens/$img\"  class='img-thumbnail img-fluid' alt=\"$title\" style='min-height: 300px; max-height: 300px;'>
                 </a>
                  </div>
            </div>
            <!--Single Gallery Image End-->
                    ";
                }
            ?>




        </div>
        <div class="row">
            <div class="col-12">
                <!--See More Button Start-->
                <div class="see-more-btn"> <a href="#">carregar mais</a> </div>
                <!--See More Button End-->
            </div>
        </div>
    </div>
</div>

                <script src="js/lightbox.min.js"></script>
<?php include('includes/footer.php') ?>