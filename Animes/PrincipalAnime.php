<?php
	include_once("../conexion.php");
	$sql = "SELECT IdVideos, Titulo, Portada FROM videos;";
	$res = mysql_query($sql);
	
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Una más del Montón</title>

        <link rel="stylesheet" href="../css/styles.css" />
        <link rel="stylesheet" href="../css/skitter.styles.css" />
        <link href="../css/estilo.css" rel="stylesheet" />
        <link href="../css/bootstrap-responsive.min.css" rel="stylesheet">
        <link href="../css/carousel.css" rel="stylesheet">
        <link href="../css/bootstrap.css" rel="stylesheet">
        <script type="text/javascript" language="javascript">

            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/es_ES/all.js#xfbml=1";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
    </head>

    <body>
        <div id="myCarousel" class="carousel slide">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" style="margin-top: 90px">
                <div class="item active">
                    <img src="../Images/Sin-título4.png" alt="" >
                    <div class="container" >
                        <div class="carousel-caption">
                            <h1>Example headline.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-large btn-primary" href="#">Sign up today</a></p>
                        </div>
                    </div>
                </div>
                <div class="item" >
                    <img  data-src="holder.js/1500x500/auto/#777:#7a7a7a/text:Second slide" alt="">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Another example headline.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-large btn-primary" href="#">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img data-src="holder.js/1500x500/auto/#777:#7a7a7a/text:Third slide" alt="">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>One more for good measure.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-large btn-primary" href="#">Browse gallery</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev" style="margin-left: 12%"><span class="glyphicon glyphicon-chevron-left"></span></a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next" style="margin-right:12%"><span class="glyphicon glyphicon-chevron-right"></span></a>
        </div><!-- /.carousel -->

        <div class="container" style="padding-top: 5px; padding-bottom: 40px;">   
            <div style="margin-left: 5px;">
                <div class="btn-toolbar" >
                    <div class="btn-group" style="font-size: 12px;">
                        <a href="#" class="btn btn-primary active">ANIMES POR LETRA</a>
                        <a href="#" class="btn btn-primary">0-9</a>
                        <a href="#" class="btn btn-primary">A</a>
                        <a href="#" class="btn btn-primary">B</a>
                        <a href="#" class="btn btn-primary">C</a>
                        <a href="#" class="btn btn-primary">D</a>
                        <a href="#" class="btn btn-primary">E</a>
                        <a href="#" class="btn btn-primary">F</a>
                        <a href="#" class="btn btn-primary">G</a>
                        <a href="#" class="btn btn-primary">H</a>
                        <a href="#" class="btn btn-primary">I</a>
                        <a href="#" class="btn btn-primary">J</a>
                        <a href="#" class="btn btn-primary">K</a>
                        <a href="#" class="btn btn-primary">L</a>
                        <a href="#" class="btn btn-primary">M</a>
                        <a href="#" class="btn btn-primary">N</a>
                        <a href="#" class="btn btn-primary">Ñ</a>
                        <a href="#" class="btn btn-primary">O</a>
                        <a href="#" class="btn btn-primary">P</a>
                        <a href="#" class="btn btn-primary">Q</a>
                        <a href="#" class="btn btn-primary">R</a>
                        <a href="#" class="btn btn-primary">S</a>
                        <a href="#" class="btn btn-primary">T</a>
                        <a href="#" class="btn btn-primary">U</a>
                        <a href="#" class="btn btn-primary">V</a>
                        <a href="#" class="btn btn-primary">W</a>
                        <a href="#" class="btn btn-primary">X</a>
                        <a href="#" class="btn btn-primary">Y</a>
                        <a href="#" class="btn btn-primary">Z</a>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 10px">            
                <div class="span9" style="overflow: hidden; border:1px solid #c1c1c1; background-color: #fff;  border-radius: 6px; padding: 10px;">
                    <div class="top_portadas">
					<!--Aqui nombre de animes con php-->
					<?php while ($video= mysql_fetch_array($res)) {
						echo '
							<div class="home_portada_bg">
								<a class="big_portada_title" href="#url_anime">'.$video[1].'</a>
								<a class="portada_big" href="../Animes/ContenidoAnime.php"><img style="height: 250px;" src="'.$video[2].'" width="151" height="250" alt="'.$video[1].'"></a>
							</div>';
						}
						mysql_free_result($res);
						mysql_close($conexion);
						?>
                    </div>
                </div>

                <div class="span3" style="overflow: hidden;">
                    <div style="border: 1px solid #c1c1c1; border-radius: 6px; padding: 10px;text-align: center;background: white">
                        <div class="top_title1">
                            Top Animes de la Semana
                        </div>
                        <div style="height:20px; padding: 3px 6px; font-family:helvetica; font-size:11px; color:#666666;">
                            <span style="display:inline-block; width: 152px; padding: 0 5px; vertical-align:middle;">
                                1. <a href="http://jkanime.net/shingeki-no-kyojin/" style="text-decoration:none; color:#666666;">Shingeki no Kyojin</a>
                            </span>
                            <img src="http://cdn.jkanime.net/assets/images/like.png" style="vertical-align:middle;"> 50732
                        </div>
                        <div style="height:20px; padding: 3px 6px; font-family:helvetica; font-size:11px; color:#666666;">
                            <span style="display:inline-block; width: 152px; padding: 0 5px; vertical-align:middle;">
                                2. <a href="http://jkanime.net/shingeki-no-kyojin/" style="text-decoration:none; color:#666666;">Sword Art Online</a>
                            </span>
                            <img src="http://cdn.jkanime.net/assets/images/like.png" style="vertical-align:middle;"> 50732
                        </div>
                        <div style="height:20px; padding: 3px 6px; font-family:helvetica; font-size:11px; color:#666666;">
                            <span style="display:inline-block; width: 152px; padding: 0 5px; vertical-align:middle;">
                                3. <a href="http://jkanime.net/shingeki-no-kyojin/" style="text-decoration:none; color:#666666;">One Piece</a>
                            </span>
                            <img src="http://cdn.jkanime.net/assets/images/like.png" style="vertical-align:middle;"> 50732
                        </div>
                        <div style="height:20px; padding: 3px 6px; font-family:helvetica; font-size:11px; color:#666666;">
                            <span style="display:inline-block; width: 152px; padding: 0 5px; vertical-align:middle;">
                                4. <a href="http://jkanime.net/shingeki-no-kyojin/" style="text-decoration:none; color:#666666;">Fairy Tail</a>
                            </span>
                            <img src="http://cdn.jkanime.net/assets/images/like.png" style="vertical-align:middle;"> 50732
                        </div>
                        <div style="height:20px; padding: 3px 6px; font-family:helvetica; font-size:11px; color:#666666;">
                            <span style="display:inline-block; width: 152px; padding: 0 5px; vertical-align:middle;">
                                5. <a href="http://jkanime.net/shingeki-no-kyojin/" style="text-decoration:none; color:#666666;">Naruto Shippuden</a>
                            </span>
                            <img src="http://cdn.jkanime.net/assets/images/like.png" style="vertical-align:middle;"> 50732
                        </div>
                    </div>
                    <div style="border: 1px solid #c1c1c1; border-radius: 6px; padding: 10px;background: white;margin-top: 5px">
                        <div class="top_title1" style="text-align: center">
                            Generos
                        </div>
                        <div style="text-align: center">
                            <!--Aquí van los géneros-->
                                <p>adada</p> 
                            
                        </div>
                    </div>
                    <div style="overflow: hidden; border: 1px solid #c1c1c1; border-radius: 6px; padding: 10px;text-align: center;height: 310px;background: white;margin-top: 5px">
                        <div class="fb-like-box" data-href="https://www.facebook.com/dimmakgc" data-width="234" data-height="345" data-show-faces="true" data-header="true" data-stream="false" data-show-border="false" ></div>
                    </div>
                </div>  
            </div>

        </div>
        <hr class="featurette-divider">
        <footer>
            <p class="pull-right"><a href="#">Back to top</a></p>
            <p>&copy; 2013 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a>  &middot; <a href="../Intranet/Login.php">Intranet</a></p>
        </footer>
        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/holder.js"></script>
    </body>
</html>
