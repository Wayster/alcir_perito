<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Algumas dicas uteis</title>
    <link rel="icon" href="css/imagens/home.ico">
    
    <link href="css/bootstrap.min.css" rel="stylesheet"/>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    <link rel="stylesheet" href="css/estilo2.css">

    <link rel="stylesheet" href="css/style.css">

    <link href="css/bootstrap-select.css" rel="stylesheet" />

	<link href="css/youtube_api.css" rel="stylesheet" />

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
                            <li class="nav-item">
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
                            <li class="nav-item active ">
                                <a class="nav-link" href="videos.php" role="button" aria-haspopup="true"
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

<div class="container-fluid" style="background-image: url('css/imagens/slidercursos.png'); background-size: cover; height: 250px; background-attachment: fixed;">
    <h1 class="text-center text-white pt-5 font-weight-bold ">Algumas dicas úteis</h1>
    <ul class="page-breadcrumb" style="margin-top: 60px">
        <li><a href="index.php">Home</a></li>
        <li>videos</li>
    </ul>
</div>


    <div class="all-content-wrapper">
	
		<section class="container-fluid">
			<div class="form-group custom-input-space has-feedback">

				<div class="page-body clearfix">
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default">
								<div class="panel-body">
									<div id="my_video_list">
                                        <?php

                                        $API_Url = 'https://www.googleapis.com/youtube/v3/';
                                        $API_Key = 'AIzaSyCMgI3bMFiloNI-eJCTZwL_Dncbg0EWSZc';


                                        // If you don't know the channel ID see below
                                        $channelId = 'UC3FscSih6Q1YpFNhrxGqzfw';

                                        $parameter = [
                                            'id'=> $channelId,
                                            'part'=> 'contentDetails',
                                            'key'=> $API_Key
                                        ];
                                        $channel_URL = $API_Url . 'channels?' . http_build_query($parameter);
                                        $json_details = json_decode(file_get_contents($channel_URL), true);

                                        $playlist = $json_details['items'][0]['contentDetails']['relatedPlaylists']['uploads'];

                                        $parameter = [
                                            'part'=> 'snippet',
                                            'playlistId' => $playlist,
                                            'maxResults'=> '50',
                                            'key'=> $API_Key
                                        ];
                                        $channel_URL = $API_Url . 'playlistItems?' . http_build_query($parameter);
                                        $json_details = json_decode(file_get_contents($channel_URL), true);

                                        $my_videos = [];
                                        foreach($json_details['items'] as $video){
                                            //$my_videos[] = $video['snippet']['resourceId']['videoId'];
                                            $my_videos[] = array( 'v_id'=>$video['snippet']['resourceId']['videoId'], 'v_name'=>$video['snippet']['title'] );
                                        }

                                        while(isset($json_details['nextPageToken'])){
                                            $nxt_page_URL = $channel_URL . '&pageToken=' . $json_details['nextPageToken'];
                                            $json_details = json_decode(file_get_contents($nxt_page_URL), true);
                                            foreach($json_details['items'] as $video)
                                                $my_videos[] = $video['snippet']['resourceId']['videoId'];
                                        }
                                        //print_r($my_videos);

                                        foreach($my_videos as $video){

                                            if(isset($video)){

                                                echo '<a href="https://www.youtube.com/watch?v='. $video['v_id'] .'" style="background: url(\'https://img.youtube.com/vi/'. $video['v_id'] .'/mqdefault.jpg\')">
														<div>'. $video['v_name'] .'</div>
												</a>';
                                            }
                                        }


                                        ?>

									</div>

								</div>
							</div>
						</div>

						<div id="my_player"><div></div></div>

					</div>
				</div>
			</div>
		</section>
    </div>




<!-- footer -->
<?php include "includes/footer.php"; ?>
	<!-- Jquery Core Js -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap Select Js -->
    <script src="js/bootstrap-select.js"></script>
	
	<script>

	$(document).ready(function(e){

		$('#my_video_list a').on('click',function(e){

		e.preventDefault();

		var video_url = $(this).attr('href');

		
		var video_id = video_url.substring(video_url.search('=')+1,video_url.length);
		
		$('#my_player DIV').html('<iframe width="560" height="315" src="https://www.youtube.com/embed/' + video_id + '" frameborder="0" allowfullscreen></iframe>');

		  $('#my_player').fadeIn(500);

		});


		$('#my_player').on('click',function(e){
			$('#my_player').fadeOut(500);
			$('#my_player DIV').empty();
		});


	});
	</script>

<script src="js_arle/script.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
