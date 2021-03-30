<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Script para la galería de las imagenes -->
    <script src="../js/galery_esmalte.js" type="text/javascript" defer></script>
    <script src="../js/back.js" type="text/javascript" defer></script>

    <?php
    include "../includes/head2.php";
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

        <img src="../images/logo/logo_oficial_peque.png" alt="Logo oficial de Pinturas y Decoracioens R y K">

    </div>


    <ul>
        <li><a href="../index.php">INICIO</a></li>
        <li><a href="../servicios.php">SERVICIOS</a></li>
        <li><a href="../trabajos.php">TRABAJOS</a></li>
        <li><a href="../presupuesto.php">PRESUPUESTO</a></li>
        <li><a href="../contacto.php">CONTACTO</a></li>
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

            <img src="" id="img_show_actual" alt="imagen actual de trabajos seleccionada">

        </div>

    </div>

    <?php
    include "../includes/header2.php";
    ?>

    <?php
    include "../includes/nav2.php";
    ?>

    <section>

        <div class="title-item-nav">

            <h2>TRABAJOS CON ESMALTE</h2>

        </div>



        <div class="explicacion">
            <p>
                <i class="fa fa-chevron-circle-left" aria-hidden="true"></i>
                La pintura <i>esmalte</i> ofrece mayor <i>resistencia</i> frente a otro tipo de pinturas.
                Ideal para el cuidado de muebles exteriores debido a su <i>impermiabilidad</i>.
            </p>

        </div>

        <div class="galeriaservicios">

            <div class="card-trabajos">
                <img src="../images/trabajos/puerta1.jpg"  alt="Trabajando para pintar una puerta con esmalte"
                     data-img-mostrar="0">
            </div>


            <div class="card-trabajos">
                <img src="../images/trabajos/puerta2.jpg" class="resize" alt="Puerta recién esmaltada"
                     data-img-mostrar="1">
            </div>


            <div class="card-trabajos">
                <img src="../images/esmalte/esamlte3.jpg" class="resize" alt="Puerta recién esmaltadao"
                     data-img-mostrar="2">
            </div>

            <div class="card-trabajos">
                <img src="../images/esmalte/esmalte2.jpg" class="resize" alt="Puerta recién esmaltada"
                     data-img-mostrar="3">
            </div>

            <div class="card-trabajos">
                <img src="../images/trabajos/porton1.jpeg"  alt="Esmalte sobre un portón"
                     data-img-mostrar="4">
            </div>

            <div class="card-trabajos">
                <img src="../images/trabajos/porton2.jpeg"  alt="Esmalte sobre un portoón"
                     data-img-mostrar="4">
            </div>







        </div>


    </section>

    <?php
    include "../includes/footer2.php";
    ?>

</div>



</body>
</html>
