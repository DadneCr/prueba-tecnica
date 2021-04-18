<?php 
session_start();

if(isset($_SESSION['usuario'])):
    include 'templates/header.php';
?>
<script>
   $('#btn-salir').show();

</script>
<div>

<div >

    <div class="contenedor-webcast">
        <div>
            <video id="video">
                <source src="img/video.mp4" type="video/mp4">
            </video>
            <div></div>
            <div>
                <button id="reproducir" onclick="reproducir()"class="glyphicon glyphicon-play"></button>
                <button id="pausar" onclick="pausar()" class="glyphicon glyphicon-pause" style="display:none;"></button>
                <button id="reiciar" onclick="reiniciar()" class="glyphicon glyphicon-stop"></button>
                <button id="mute" onclick="mute()" class="glyphicon glyphicon-volume-off" style="display:none;"></button>
                <button id="volumen" onclick="mute()" class="glyphicon glyphicon-volume-up" ></button>
                <button id="atrasar" onclick="atrasar()" class="glyphicon glyphicon-backward"></button>  
                <button id="adelantar" onclick="adelantar()" class="glyphicon glyphicon-forward"></button>    
            </div>
            <div>
            <div class="container">
                    <div class="row">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        
                            <div class="carousel-inner">
                                <div class="item active contenedor-slide">
                                    <img src="img/slide1.png" alt="First slide">                                                
                                </div>
                                <div class="item">
                                    <img src="img/slide2.png" alt="First slide">                      
                                </div>
                                <div class="item ">
                                    <img src="img/slide3.png" alt="First slide">                                
                                </div>
                            </div>
                            
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                </div>         
            </div>
        </div>
        <div>
            <img src="img/principal.png" alt="">
        </div>
    </div>
    <div>
        <div class="presentador-webcast">
            <div  class="final-webcast">
                <div class="titulo-presentador">
                    Dr. Mauricio Ocqueteau T.
                </div>
                <div class="descripcion-presentador">
                    El doctor Ocqueteau es médico-cirujano de la Pontificia Universidad 
                    Católica de Chile, en la que también se especializó en medicina interna 
                    y hematología. Realizó su formación en investigación y citometría de flujo 
                    en la Universidad de Salamanca, España.
                </div>

            </div>
        </div>
    </div>
</div>
  

<?php
    include 'templates/footer.php';
else:
  header('Location: index.php?session=false');
 endif;
?>



 