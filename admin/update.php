
<?php
include ('../includes/db.php');
session_start();
if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){

    header("Location: login.php");
    exit;
} else {

    ?>


<?php
    if (isset($_POST['alterar_t_one']) || isset($_GET['change_txt_id'])){

        $id = $_GET['change_txt_id'];
        $txt = $_POST['texto_1'];
        $sql = "update textos_img_p set texto='$txt' where id=$id";
        $query = mysqli_query($con, $sql);

        if ($query){
            echo "<script>alert('TEXTO ALTERADO COM SUCESSO')</script>";
            echo "<script>window.open('painel.php?imgTPrincipal', '_self')</script>";
        }else {
            echo "<script>alert('TEXTO ALTERADO COM SUCESSO')</script>";
            echo "<script>window.open('painel.php?imgTPrincipal', '_self')</script>";

        }
    }
    ?>
<?php
    if (isset($_POST['alterar_t_two']) || isset($_GET['change_txt2_id'])){

        $id = $_GET['change_txt2_id'];
        $txt = $_POST['texto_2'];
        $sql = "update textos_img_p set texto='$txt' where id=$id";
        $query = mysqli_query($con, $sql);

        if ($query){
            echo "<script>alert('TEXTO ALTERADO COM SUCESSO')</script>";
            echo "<script>window.open('painel.php?imgTPrincipal', '_self')</script>";

        }else {
            echo "<script>alert('TEXTO ALTERADO COM SUCESSO')</script>";
            echo "<script>window.open('painel.php?imgTPrincipal', '_self')</script>";

        }
    }
    ?>
<?php

    if(isset($_POST['atualizar_curso']) || isset($_GET['id_curso'])){

        $id = $_GET['id_curso'];

        $product_title = $_POST['product_title'];
        $product_img1 = $_FILES['product_img1']['name'];
        $product_c = $_POST['product_c'];
        $instrutor = $_POST['instrutor'];
        $data_l = $_POST['data_lan'];
        $obj = $_POST['obj'];
        $publico = $_POST['publico'];
        $conteudo = $_POST['conteudo'];
        $video = $_POST['video'];

        $temp_name1 = $_FILES['product_img1']['tmp_name'];
        move_uploaded_file($temp_name1,"../css/imagens/$product_img1");


        $update_product = "update cursos set titulo='$product_title', img ='$product_img1', carga_horaria='$product_c', instrutor='$instrutor',
                               lancamento='$data_l', objetivo='$obj', publico_alvo='$publico', conteudo_programatico='$conteudo', url_video='$video' where id_cursos='$id'";

        $run_product = mysqli_query($con,$update_product);

        if($run_product){

            echo "<script> alert('Curso alterado com sucesso') </script>";
            echo "<script>window.open('painel.php?edit_cursos','_self')</script>";

        }else {
            echo "<script> alert('Erro ao alterar curso') </script>";
            echo "<script>window.open('painel.php?edit_cursos','_self')</script>";

        }

    }

    ?>


    <?php

    if(isset($_POST['atualizar_livro']) || isset($_GET['id_livro'])){

        $id = $_GET['id_livro'];

        $titulo = $_POST['titulo'];

        $image = $_FILES['image']['name'];

        $autor = $_POST['autor'];

        $edicao = $_POST['edicao'];

        $obj = $_POST['obj'];

        $publico = $_POST['publico'];

        $conteudo = $_POST['conteudo'];

        $video = $_POST['video'];

        $editora = $_POST['editora'];

        $paginas = $_POST['paginas'];

        $preco = $_POST['preco'];

        $isbn = $_POST['isbn'];

        $sumario = $_POST['sumario'];


        $temp_name1 = $_FILES['image']['tmp_name'];
        move_uploaded_file($temp_name1,"../css/imagens/$image");


        $update_product = "update livros set 
        titulo='$titulo', 
        img ='$image',
        paginas='$paginas',
        autor='$autor',
        editora='$editora',
        edicao='$edicao',
         objetivo='$obj',
          publico='$publico',
           conteudo='$conteudo',
           video='$video',
           price='$preco',
           sumario='$sumario',
           isbn='$isbn'
             where id='$id'";

        $run_product = mysqli_query($con,$update_product);

        if($run_product){

            echo "<script> alert('Livro alterado com sucesso') </script>";
            echo "<script>window.open('painel.php?edit_livro','_self')</script>";

        }else {
            echo "<script> alert('Erro ao alterar livro') </script>";
           echo "<script>window.open('painel.php?edit_livro','_self')</script>";
            echo mysqli_error($con);

        }

    }

    ?>

    <?php
    if (isset($_POST['atualizar_m']) || isset($_GET['id_m'])){

        $id = $_GET['id_m'];
        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];
        $url = $_POST['url'];


        $sql = "update categorias_materials set title='$titulo', descricao='$descricao', url='$url' where id=$id";
        $query = mysqli_query($con, $sql);

        if ($query){
            echo "<script>alert(' ALTERACAO REALIZADA COM SUCESSO')</script>";
            echo "<script>window.open('painel.php?edit_materiais', '_self')</script>";

        }else {
            echo "<script>alert('ALTERACAO REALIZADA COM SUCESSO')</script>";
            echo "<script>window.open('painel.php?edit_materiais', '_self')</script>";

        }
    }
    ?>

<?php } ?>
