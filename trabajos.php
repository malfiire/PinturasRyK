<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Script para la galería de las imagenes -->
    <script src="./js/galery.js" type="text/javascript" defer></script>

    <?php
    include "includes/head.php";
    ?>

    <title>PINTURAS Y DECORACIONES R y K | MADRID</title>
	<meta name="description" content= "Encuentra los mejores pintores en toda la Comunidad de Madrid. Realizamos Empapelados, Esmaltes, Barnizados y mucho más. Pide presupuesto sin Compromiso." />
	<meta name=”robots” content=”odp” />

</head>
<body>

<input type="checkbox" id ="btn-menu"/>
<div class="menu-toggle"><label for="btn-menu" ><i class="fa fa-bars" id="btn"></i></label></div>

<div class="sidebar">

    <label for="btn-menu" ><i class="fa fa-times" id="cancel"></i></label>

    <div class="header-sidebar">

        <img src="images/logo/logo_oficial_peque.png">

    </div>


    <ul>
        <li><a href="index.php">INICIO</a></li>
        <li><a href="servicios.php">SERVICIOS</a></li>
        <li><a href="trabajos.php">TRABAJOS</a></li>
        <li><a href="presupuesto.php">PRESUPUESTO</a></li>
        <li><a href="contacto.php">CONTACTO</a></li>
    </ul>


</div>


<div class="todo">

    <div class="overlay">

        <div class="slideshow">
            <span class="btn-cerrar"><i class="fa fa-times-circle" aria-hidden="true"></i></span>

            <div class="btn atras" >
                <i class="fa fa-arrow-circle-left"></i>
            </div>

            <div class="btn delante">
                <i class="fa fa-arrow-circle-right"></i>
            </div>

            <img src="" id="img_show_actual">

        </div>

    </div>

    <?php
    include "includes/header.php";
    ?>

    <?php
    include "includes/nav.php";
    ?>

    <section>

        <div class="title-item-nav">

            <h2>TRABAJOS REALIZADOS</h2>

        </div>


        <div class="galeriatrabajos">

			<div class="card-trabajos">
                <img src="images/trabajos/lisonew2.jpeg" alt="imagen de pintura lisa en un garaje, este es la imagen antes de arreglarlo"
                data-img-mostrar="0">
            </div>
			
				<div class="card-trabajos">
                <img src="images/trabajos/lisonew1.jpeg" alt="imagen de pintura lisa en un garaje, este es la imagen antes de arreglarlo"
                data-img-mostrar="1">
            </div>
			
			
            <div class="card-trabajos">
                <img src="images/trabajos/garaje_grande.jpeg" alt="imagen de pintura lisa en un garaje, este es la imagen antes de arreglarlo"
                data-img-mostrar="2">
            </div>


            <div class="card-trabajos">

                <img src="images/trabajos/garaje_grande2.jpeg" alt="imagen de pintura lisa en un garaje, este es el resultado"
                     data-img-mostrar="3">
            </div>

            <div class="card-trabajos">
                <img src="images/trabajos/porton1.jpeg" alt="imagen de pintura de un portón, sin arreglar"
                     data-img-mostrar="4">
            </div>


            <div class="card-trabajos">
                <img src="images/trabajos/porton2.jpeg" alt="imagen de pintura de un portón, arreglado"
                     data-img-mostrar="5">
            </div>


            <div class="card-trabajos">
                <img src="images/trabajos/pared1.jpeg" alt="imagen de pintura lisa sobre pared, sin arreglar"
                     data-img-mostrar="6">
            </div>

            <div class="card-trabajos">
                <img src="images/trabajos/pared2.jpg"  alt="imagen de pintura lisa sobre pared, una vez arreglado"
                     data-img-mostrar="7">
            </div>



            <div class="card-trabajos">
                <img src="images/trabajos/empapelado_marron1.jpg" alt="imagen de un pintor poniendo empapelado en la pared"
                     data-img-mostrar="8">
            </div>


            <div class="card-trabajos">
                <img src="images/trabajos/empapelado_marron2.jpg" alt="imagen de una pared decorada con empapelado"
                     data-img-mostrar="9">
            </div>


            <div class="card-trabajos">
                <img src="images/trabajos/puerta1.jpg" alt="imagen de un pintor esmaltando una puerta"
                     data-img-mostrar="10">
            </div>


            <div class="card-trabajos">
                <img src="images/trabajos/puerta2.jpg" alt="imagen de una puerta terminada con pintura esmalte"
                     data-img-mostrar="11">
            </div>

            <div class="card-trabajos">
                <img src="images/trabajos/armario1.jpeg" alt="imagen de un armario antes de pintar"
                     data-img-mostrar="12">
            </div>

            <div class="card-trabajos">
                <img src="images/trabajos/armario2.jpeg"  alt="imagen de un armario una vez pintado"
                     data-img-mostrar="13">
            </div>


            <div class="card-trabajos">
                <img src="images/trabajos/grande.jpg" class="resize" alt="Sitio antes de pintar"
                     data-img-mostrar="14">
            </div>

            <div class="card-trabajos">
                <img src="images/trabajos/grande2.jpg"  alt="Sitio una vez pintado y arreglados"
                     data-img-mostrar="15">
            </div>


        </div>


    </section>

    <?php
    include "includes/footer.php";
    ?>

</div>



</body>
</html>
