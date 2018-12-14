<?php

include ("../includes/db.php");

?>


<div class="panel panel-default">
    <div class="panel-heading">
        <div class="panel-title">
            <h3>Texto Atual</h3>
        </div>
    </div>
</div>

<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-12 col-lg-6 services bg-light">
            <?php
            $sql = "select * from coluna1";
            $query = mysqli_query($con, $sql);
            $row=mysqli_fetch_array($query);
            $titleC = $row['titulo'];
            $descricaoC = $row['descricao'];

            ?>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title text-center font-weight-bold"><h3><?php echo $titleC; ?></h3></div>
                </div>
                <div class="panel-body mx-auto mt-4">
                    <p class="text-muted"><?php echo nl2br($descricaoC); ?></p>
                </div>
            </div>
        </div>

        <div class="col-md-12 col-lg-6 services bg-light">
            <?php
            $sql = "select * from coluna1";
            $query = mysqli_query($con, $sql);
            $row=mysqli_fetch_array($query);
            $titleC = $row['titulo'];
            $descricaoC = $row['descricao'];

            ?>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title text-center font-weight-bold">
                        <?php
                        $sql = "select * from coluna1";
                        $query = mysqli_query($con, $sql);
                        $rs = mysqli_fetch_array($query);
                        $id = $rs['id'];
                        ?>
                        <form action="" method="post">
                            <textarea name="title_services" cols="40"></textarea>
                            <button class="btn btn-success btn-md" type="submit" name="save_one">salvar</button>
                    </div>
                </div>
                <div class="panel-body mx-auto mt-4">
                    <textarea name="text_services" cols="60" rows="5"></textarea>
                    <center><button class="btn btn-success btn-md" type="submit" name="save">salvar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div><!-- our office and services-->



<?php

if (isset($_POST['save_one'])){

    $title = $_POST['title_services'];
//    $texto = $_POST['text_services'];

    $sql = "update coluna1 set titulo='$title'";
    $query = mysqli_query($con, $sql);

    if ($query){
        echo "<script>alert('Texto Alterado com Sucesso')</script>";
        echo "<script>window.open('painel.php?coluna1', '_self')</script>";
    }else {
        echo "<script>alert('Erro ao Alterar Texto')</script>";
        echo "<script>window.open('painel.php?coluna1', '_self')</script>";
    }
}


?>


<?php

if (isset($_POST['save'])){

    $texto = $_POST['text_services'];

    $sql = "update coluna1 set descricao='$texto'";
    $query = mysqli_query($con, $sql);

    if ($query){
        echo "<script>alert('Texto Alterado com Sucesso')</script>";
        echo "<script>window.open('painel.php?coluna1', '_self')</script>";
    }else {
        echo "<script>alert('Erro ao Alterar Texto')</script>";
        echo "<script>window.open('painel.php?coluna1', '_self')</script>";
    }
}


?>
