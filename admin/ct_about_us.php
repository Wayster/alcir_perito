
<?php
include ('../includes/db.php');
if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){

    header("Location: login.php");
    exit;
} else {
    ?>

    <?php include ('../includes/db.php');
    include ('../functions/functions.php');?>


    <div class="col-lg-12 pt-5" style="margin-top: 20px;"><!-- col-lg-12 Starts -->

        <div class="panel panel-default" ><!-- panel panel-default Starts -->

            <div class="panel-heading" ><!-- panel-heading Starts -->

                <h3 class="card-title" >

                    <i class="fas fa-edit"></i> Alterar texto sobre nos!

                </h3>

            </div><!-- panel-heading Ends -->

            <div class="panel-body" ><!-- panel-body Starts -->

                <?php
                $sql = "select * from ct_about_us_txt";
                $query = mysqli_query($con, $sql);
                $rs = mysqli_fetch_array($query);
                $id = $rs['id'];
                $title = $rs['titulo'];
                $title_two = $rs['titulo_two'];
                $descr = $rs['descricao'];


                ?>
                <form class="form-horizontal" action="altera_titulo_sliders.php?id_sobre_texto_ct=<?php echo $id; ?>" method="post" enctype="multipart/form-data" ><!-- form-horizontal Starts -->

                    <div class="form-group" ><!-- form-group Starts -->

                        <label class="col-md-3 control-label">Titulo 1</label>

                        <div class="col-md-6">

                            <input name="titutlo_one" class="form-control-plaintext" rows="5" cols="50" value="<?php echo $title; ?>"/>

                        </div>

                    </div><!-- form-group Ends -->

                    <div class="form-group" ><!-- form-group Starts -->

                        <label class="col-md-3 control-label">Titulo 2</label>

                        <div class="col-md-6">

                            <input name="titutlo_two_ct" class="form-control-plaintext" rows="5" cols="50" value="<?php echo $title_two; ?>"/>

                        </div>

                    </div><!-- form-group Ends -->


                    <div class="form-group" ><!-- form-group Starts -->

                        <label class="col-md-3 control-label">Descricao</label>

                        <div class="col-md-6">

                            <textarea name="texto_sobre_ct" class="form-control-plaintext" rows="5" cols="50"><?php echo $descr; ?></textarea>

                        </div>

                    </div><!-- form-group Ends -->

                    <div class="form-group" ><!-- form-group Starts -->

                        <label class="col-md-3 control-label"></label>

                        <div class="col-md-6">

                            <input type="submit" name="atualizar_ct" value="atualizar" class=" btn btn-primary form-control" >

                        </div>

                    </div><!-- form-group Ends -->


                </form><!-- form-horizontal Ends -->

            </div><!-- panel-body Ends -->


        </div><!-- panel panel-default Ends -->

    </div><!-- col-lg-12 Ends -->



<?php } ?>



