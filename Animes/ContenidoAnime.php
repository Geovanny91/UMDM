<?php
include_once("../conexion.php");
$sql = "SELECT idvideo, titvid, porvid FROM video;";
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
            <div class="row" style="margin-top: 5px">            
                <div class="top_title2" style="margin-left: 20px; margin-right: 20px;margin-bottom: 0px">DRAGON BALL Z</div>                       
                <div class="span3" style="overflow: hidden;margin-top: 5px;">
                    <div style="border: 1px solid #c1c1c1; border-radius: 6px; padding: 10px;text-align: center;background: white">
                        <div class="top_title1">
                            INFORMACIÓN DEL ANIME
                        </div>
                        <div style="margin-top: 10px;">
                            <a><img src="../Images/e9424ded98df9625c4be538195db02bc.jpg" width="220" height="320"></a>                           
                        </div>                        
                            <div>
                                <div><span class="labl">Tipo:</span> <span style="display:inline-block; width: 130px; padding: 0 0 5px;">Serie</span></div>
                                <div><span class="labl">Genero:</span> <span style="display:inline-block; width: 130px; padding: 0 0 5px;"> <a style="color:#09F; text-decoration:none;" href="http://jkanime.net/genero/musica/">Musica</a>,  <a style="color:#09F; text-decoration:none;" href="http://jkanime.net/genero/cosas-de-la-vida/">Cosas de la vida</a></span></div>
                                <div><span class="labl">Episodios:</span> <span style="display:inline-block; width: 130px; padding: 0 0 5px;">4</span></div>
                                <div><span class="labl">Duracion:</span> <span style="display:inline-block; width: 130px; padding: 0 0 5px;">5 min. por episodio</span></div>
                                <div><span class="labl">Emitido:</span> <span style="display:inline-block; width: 130px; padding: 0 0 5px;">Ene 10 de 2014 a <br>Ene 31 de 2014</span></div>
                                <div style="color:#0C0;"><span class="labl">Estado:</span> <span style="display:inline-block; width: 130px; padding: 0 0 5px;">En emision</span></div>
                            </div>
                        
                    </div>
                    
                </div> 
                <div class="span9" style="overflow: hidden; border:1px solid #c1c1c1; background-color: #fff;  border-radius: 6px; padding: 10px;margin-top: 5px">       
                    <div class="top_title1" >SINOPSIS</div>                       
                    <div style="margin-top: 10px;text-align: justify;font-family:Trebuchet MS;">
                        <p>En Dragon ball Z Goku se ha convertido en un adulto y está casado con Milk, con la que tiene un hijo llamado Gohan. En esta segunda saga de Dragon ball Goku descubrirá que no es un terricola, sino que pertenece a una raza de guerreros conocida por ser una de las más poderosas de la galaxia, para posteriormente dar paso a los verdaderos enemigos de la serie. Para poder vencer a los nuevos enemigos que irán surgiendo, Goku y sus amigos tendrán que viajar por otros planetas e incluso al cielo y al infierno. Cada enemigo será más fuerte que el anterior, por lo que tendrán que entrenar muy duro para poder derrotarlos además de que se les irán uniendo nuevos personajes que les ayudarán a vencerlos.</p>
                    </div>
                    
                    <div class="top_title1" style="margin-top: 25px;" >Lista de Episodios</div>                       
                    
                </div>             
            </div>
            <div class="row">     
              <div class="span3" style="overflow: hidden;">
                    <div style="border: 1px solid #c1c1c1; border-radius: 6px; padding: 10px;background: white;margin-top: 5px">
                        <div class="top_title1">
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

    </div>
    <hr class="featurette-divider">
    <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2013 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a>  &middot; <a href="../Intranet/PrincipalIntranet.php">Intranet</a></p>
    </footer>
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/holder.js"></script>
</body>
</html>
