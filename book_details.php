<?php

include('includes/db.php');
include ('functions/functions.php');

?>

<?php

if (isset($_GET['curso_id'])) {

    $curso_id = $_GET['curso_id'];
    $sql = "select * from livros where id=$curso_id";
    $query = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($query);
    $imgPrincipal = $row['img'];
    $title = $row['titulo'];
    $autor = $row['autor'];
    $sumario = $row['sumario'];
    $paginas = $row['paginas'];
    $edicao = $row['edicao'];
    $editora = $row['editora'];
    $video = $row['video'];
    $price = $row['price'];
    $obj = $row['objetivo'];
    $publico = $row['publico'];

}

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Detalhes</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/estilo2.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="css/aos.css">
    <script src="js/aos.js"></script>
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="css/lightbox.min.css">

</head>
<body>

<!-- preloader start -->
<div class="preloader">
    <img src="css/imagens/pre.gif" alt="preloader">
</div>

<div class="header-logo-area bg-success">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-lg-5 col-md-12" style="max-height: 200px;">
                <div class="">
                    <?php
                    $sql = "select * from ct_header";
                    $query = mysqli_query($con, $sql);
                    $rs = mysqli_fetch_array($query);
                    $imagem = $rs['imagem'];
                    ?>
                    <img src="css/imagens/<?php echo $imagem; ?>" class="img-fluid img-thumbnail" style="min-width: 400px; max-width: 400px; min-height: 100px; max-height: 100px;">
                </div>
            </div>
            <div class="col-xl-6 col-lg-7 col-md-12 d-none d-lg-block d-md-block"style="max-height: 200px;">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-lg-6 col-xl-6">
                        <div class="header-logo-address">
                            <div class="header-logo-icon"> <i class="fa fa-phone-square" style="margin-left: 140px;"></i> </div>
                            <div class="header-logo-text font-weight-bold text-center">
                                <p>(31)3275-4538</p>
                                <p>(31)3043-0469</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-lg-6 col-xl-6">
                        <div class="header-logo-address">
                            <div class="header-logo-icon"> <i class="fa fa-envelope ml-4"></i> </div>
                            <div class="header-logo-text font-weight-bold text-center">
                                <p>alcirpericia@bol.com.br</p>
                                <p>contato@alcirpericia.com.br</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header Logo Area End -->


<div class="container-fluid bg-light">
    <div class="row">
        <div class="col-md-12">
            <div class="navigation">
                <nav class="navbar navbar-expand-sm navbar-default" style="border: 2px solid darkgreen;">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto">

                            <li class="nav-item">
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
                            <li class="nav-item active">
                                <a class="nav-link" href="livros.php" role="button" aria-haspopup="true"
                                   aria-expanded="false">
                                    Livros
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="gallery.php" role="button" aria-haspopup="true"
                                   aria-expanded="false">
                                    Galeria
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="videos.php" role="button" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">
                                    Videos
                                </a>

                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="materias_diversos.php" role="button" aria-haspopup="true"
                                   aria-expanded="false">
                                    Materiais Diversos
                                </a>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contato.php" role="button" aria-haspopup="true"
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
</div>


<section class="section">
    <div class="container-fluid">
        <div class="row">
            <aside class="col-lg-4 order-lg-1 order-2">
                <!-- overview -->
                <div class="p-4 rounded border mb-50" style="border: 2px solid darkgreen;">
                    <ul class="pl-0 mb-20">
                        <li class="py-3 border-bottom text-center">
                            <?php

                            if (isset($_GET['curso_id'])){
                                $curso_id = $_GET['curso_id'];

                                $get_curso = "select * from livros where id='$curso_id'";
                                $query_curso = mysqli_query($con, $get_curso);
                                while ($rs = mysqli_fetch_array($query_curso)){
                                    $titulo = $rs['titulo'];
                                    $paginas = $rs['paginas'];
                                    $instrutor = $rs['autor'];
                                    $editora =  $rs['editora'];
                                    $isbn = $rs['isbn'];
                                    $price = $rs['price'];

                                    echo "<span class=\"d-inline-block mr-3 font-weight-bold \" ></span><h5>$titulo</h5></li>";
                                    echo "<li class=\"py-3 border-bottom\">
                                            <span class=\"d-inline-block font-weight-bold  mr-2\">Paginas:</span> $paginas</li>";
                                    echo "<li class=\"py-3 border-bottom text-left\">
                                             <span class=\"d-inline-block font-weight-bold text-success mr-2\">Instrutor:</span>$instrutor</li> ";

                                    echo "<li class=\"py-3 border-bottom\">
                                                <span class=\"d-inline-block font-weight-bold  mr-2\">Editora:</span>$editora</li>";
                                    echo "<li class=\"py-4 border-bottom\">
                                                <span class=\"d-inline-block font-weight-bold  mr-2\">Isbn:</span>$isbn</li>";

                                    echo "<li class=\"py-4 border-bottom\">
                                                <span class=\"d-inline-block font-weight-bold mr-2\">Valor:</span><span class='font-weight-bold text-danger'>R$ $price</span><span class='font-weight-bold text-danger'>0</span></li>";
                                }

                            }

                            ?>
                    </ul>
                    <div class="col-md-12">
                        <?php


                        if (isset($_GET['curso_id'])) {
                            $curso_id = $_GET['curso_id'];

                            $get_curso = "select * from livros where id='$curso_id'";
                            $query_curso = mysqli_query($con, $get_curso);
                            while ($rs = mysqli_fetch_array($query_curso)) {
                                $img = $rs['img'];

                                echo "<img src='css/imagens/$img' class='img-thumbnail img-fluid'>   ";
                            }
                        }

                        ?>
                    </div>

                    <!-- case study -->

                    <!-- Consultation -->
                    <div class="" style="margin-top: 100px">
                        <h4 class="mb-20">Saiba mais entre em contato</h4>
                        <form action="#" class="row">
                            <div class="col-lg-12">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Nome" required>
                            </div>
                            <div class="col-lg-12">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email"
                                       required>
                            </div>
                            <div class="col-lg-12">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto"
                                       required>
                            </div>
                            <div class="col-lg-12">
                            <textarea name="question" id="question" class="form-control p-2" placeholder="Qual a duvida ? ..."
                                      style="height: 150px;"></textarea>
                            </div>
                            <div class="col-lg-12">
                                <button class="btn btn-primary" type="submit" value="send">Enviar</button>
                            </div>
                        </form>
                    </div>
            </aside>
            <!-- project content -->
            <div class="col-lg-8 order-lg-2 order-2">
                <?php

                if (isset($_GET['curso_id'])){
                    $curso_id = $_GET['curso_id'];

                    $get_curso = "select * from livros where id='$curso_id'";
                    $query_curso = mysqli_query($con, $get_curso);
                    while ($rs = mysqli_fetch_array($query_curso)){
                        $video = $rs['video'];

                        echo "<div id='video'>$video</div>";
                        echo " <h2 class=\"mb-10 pt-3\">Formas de Pagamento</h2>";}

                }

                ?>
                <div class="jumbotron jumbotron">
                    <h4 class="" style="margin-top: -40px;">Opção 01 - Depósito ou Transferência Bancária <i class="far fa-money-bill-alt ml-2"></i></h4>
                    <P>Caixa Econômica Federal - Agência - 0085 - Conta - 091 0990 -6 - Poupança - 013 <br>
                        Titular- Alcir Rodrigues Ferreira - CPF - 791 865 136 72</P>

                    <p>Banco Itaú - Agência - 7453 - Conta Corrente - 25 203-8 <br>
                     Titular - ARLE Editora/Edivania C. Souza - CNPJ - 27.409.092/0001-14</p>
                    <hr>
                    <h4>Opção 02 - Boleto Bancário <i class="fas fa-envelope-square ml-2"></i></h4>
                    <p>
                        Em caso de Boleto Bancário enviar email para <span class="text-success">alcirpericia@bol.com.br</span>
                        <br> ou Whatsapp <span class="font-weight-bold">(31)98591 9887</span> ou <span class="font-weight-bold">( 31)98657 8582</span>, com os seguintes dados:

                        Nome, telefone, email, Endereço e CPF
                    </p>
                    <hr>
                    <h4>Dados para entrega <i class="fas fa-truck ml-2"></i></h4>
                    <p>A entrega será feita em até 07 (sete) dias, <span class="text-danger">sem custo para o adquirente.</span></p>
                    <p>
                        Pedimos que envie pelo email- <span class="text-success">alcirpericia@bol.com.br</span> ou Whatsapp <span class="font-weight-bold">(31)98591 9887</span> ou <span class="font-weight-bold">( 31)98657 8582</span>, o comprovante de pagamento e os seguintes dados:
                    </p>
                    <p>Nome, telefone, email, Endereço completo ( com CEP)</p>
                    <hr>
                    <h4>Informações adicionais :</h4>
                    <p> <i class="fas fa-phone"> (31)3043-0469</i><br></p>
                    <p class="font-weight-bold"> <i class="fab fa-whatsapp"> (31)98591-9887</i>, Falar com Edivânia.</p>
                </div>

                <!-- nav tabs menu -->
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link btn btn-success" id="challanges-tab" data-toggle="tab" href="#obj" role="tab"
                           aria-controls="challanges" aria-selected="true">Objetivo do Curso</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-success " id="challanges-tab" data-toggle="tab" href="#challanges" role="tab"
                           aria-controls="challanges" aria-selected="true">Publico Alvo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-success " id="solution-tab" data-toggle="tab" href="#solution" role="tab"
                           aria-controls="solution" aria-selected="false">Conteudo do Livro</a>
                    </li>

                </ul>
                <!-- tab content -->
                <div class="tab-content" id="myTabContent">
                    <!-- tab 1 -->
                    <div class="tab-pane fade show active" id="obj" role="tabpanel" aria-labelledby="challanges-tab">
                        <?php

                        if (isset($_GET['curso_id'])) {
                            $curso_id = $_GET['curso_id'];

                            $get_curso = "select * from livros where id='$curso_id'";
                            $query_curso = mysqli_query($con, $get_curso);
                            while ($rs = mysqli_fetch_array($query_curso)) {
                                $obj = $rs['objetivo'];

                                echo " <h4>
                                          $obj
                                        </h4>";
                            }
                        }

                        ?>
                    </div>
                    <!-- tab 1 -->
                    <div class="tab-pane fade show" id="challanges" role="tabpanel" aria-labelledby="challanges-tab">
                        <?php

                        if (isset($_GET['curso_id'])) {
                            $curso_id = $_GET['curso_id'];

                            $get_curso = "select * from livros where id='$curso_id'";
                            $query_curso = mysqli_query($con, $get_curso);
                            while ($rs = mysqli_fetch_array($query_curso)) {
                                $public = $rs['publico'];

                                echo " <h4>
                                          $public
                                        </h4>";
                            }
                        }

                        ?>
                    </div>
                    <!-- tab 2 -->
                    <div class="tab-pane fade" id="solution" role="tabpanel" aria-labelledby="solution-tab">
                        <?php

                        if (isset($_GET['curso_id'])) {
                            $curso_id = $_GET['curso_id'];

                            $get_curso = "select * from livros where id='$curso_id'";
                            $query_curso = mysqli_query($con, $get_curso);
                            while ($rs = mysqli_fetch_array($query_curso)) {
                                $conteudo_programatico = $rs['conteudo'];

                                echo " <h4>
                                             $conteudo_programatico
                                                                                                                            
                                        </h4>";
                            }
                        }

                        ?>

                    </div>

                </div>
            </div>

        </div>


    </div>
</section>


<?php include('includes/footer.php') ?>
