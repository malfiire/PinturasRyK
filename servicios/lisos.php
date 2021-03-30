<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Script para la galería de las imagenes -->
    <script src="../js/galery_lisos.js" type="text/javascript" defer></script>
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

            <h2>TRABAJOS LISOS</h2>

        </div>



        <div class="explicacion">
            <p>
                <i class="fa fa-chevron-circle-left" aria-hidden="true"></i>
                Es el modo de pintura más convencional ya que consinste en pintar un pared <i>lisa</i>, estas paredes
                pueden ser pintadas con diferentes tipos de pintura.
            </p>

        </div>

        <div class="galeriaservicios">

            <div class="card-trabajos">
                <img src="../images/lisos/liso_antes.jpg"  alt="Imagen de ejemplo de pintura lisa"
                     data-img-mostrar="0">
            </div>


            <div class="card-trabajos">
                <img src="../images/lisos/liso0.jpg"  alt="Imagen de ejemplo de pintura lisa una vez terminado el trabajo"
                     data-img-mostrar="1">
            </div>


            <div class="card-trabajos">
                <img src="../images/lisos/liso1.jpg" class="resize" alt="Pintura lisa en pared de garaje sin terminar"
                     data-img-mostrar="2">
            </div>


            <div class="card-trabajos">
                <img src="../images/lisos/liso2.jpg"  class="resize" alt="Pintura lisa en pared de garaje una vez terminado"
                     data-img-mostrar="3">
            </div>


            <div class="card-trabajos">
                <img src="../images/lisos/lisos7.jpg" alt="Entrada de un sitio liso sin terminar"
                     data-img-mostrar="4">
            </div>

            <div class="card-trabajos">
                <img src="../images/lisos/lisos8.jpg"  alt="Entrada una vez terminado con pintura lisa"
                     data-img-mostrar="5">
            </div>


            <div class="card-trabajos">
                <img src="../images/lisos/liso4.jpg"  alt="Pared lisa sin pintar"
                     data-img-mostrar="6">
            </div>

            <div class="card-trabajos">
                <img src="../images/lisos/liso5.jpg"  alt="Pared lisa una vez pintada"
                     data-img-mostrar="7">
            </div>

            <div class="card-trabajos">
                <img src="../images/lisos/liso6.jpg"  alt="Pasillo con paredes lisas pintadas"
                     data-img-mostrar="8">
            </div>

            <div class="card-trabajos">
                <img src="../images/lisos/liso3.jpg"  alt="Trozo de pared lisa pintada"
                     data-img-mostrar="9">
            </div>



        </div>

    </section>

    <?php
    include "../includes/footer2.php";
    ?>

</div>



</body>
</html>
