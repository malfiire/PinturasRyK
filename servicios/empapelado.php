<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Script para la galería de las imagenes -->
    <script src="../js/galery_empapelado.js" type="text/javascript" defer></script>
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

            <h2>TRABAJOS DE EMPAPELADO</h2>

        </div>



        <div class="explicacion">

            <p>
                <i class="fa fa-chevron-circle-left" aria-hidden="true"></i>
                El papel pintado, también conocido como <i>empapelado</i>,
                papel mural o papel de colgadura, es un tipo de papel que se utiliza en <i>decoración de interiores</i> y
                se coloca sobre las paredes de una habitación cubriéndolas total o parcialmente.</p>

        </div>

        <div class="galeriaservicios">

    
            <div class="card-trabajos">
                <img src="../images/empapelado/nuevo1.jpeg" class="resize" alt="Papel pintado con letras en negro"
                     data-img-mostrar="0">
            </div>

            <div class="card-trabajos">
                <img src="../images/empapelado/nueva2.jpeg" class="resize" alt="Papel pintado con letras en negro"
                     data-img-mostrar="1">
            </div>

            <div class="card-trabajos">
                <img src="../images/empapelado/nuevo3.jpeg" class="resize" alt="Papel pintado con letras en negro"
                     data-img-mostrar="2">
            </div>




            <div class="card-trabajos">
                <img src="../images/empapelado/ladrillo.jpg" class="resize" alt="Papel pintado simulando una pared de ladrillo"
                     data-img-mostrar="3">
            </div>


            <div class="card-trabajos">

                <img src="../images/empapelado/ladrillo1.jpg" class="resize" alt="Papel pintado simulando una pared de ladrillo"
                     data-img-mostrar="4">
            </div>

            <div class="card-trabajos">
                <img src="../images/empapelado/empapelado5.jpg" alt="Papel pintado para habitación den niños"
                     data-img-mostrar="5">
            </div>


            <div class="card-trabajos">
                <img src="../images/empapelado/empapelado6.jpg" class="resize" alt="Papel pintado para habitación den niños"

                     data-img-mostrar="6">
            </div>


            <div class="card-trabajos">
                <img src="../images/empapelado/empapelado_marron1.jpg"  alt="Trabajador empapelando la pared"
                     data-img-mostrar="7">
            </div>

            <div class="card-trabajos">
                <img src="../images/empapelado/empapelado_marron2.jpg"  alt="Pared terminada de empapelar"
                     data-img-mostrar="8">
            </div>


            <div class="card-trabajos">
                <img src="../images/empapelado/empapelado0.jpg" alt="Empapelado con papel de dibujo de bambu y pajaros"
                     data-img-mostrar="8">
            </div>


            <div class="card-trabajos">
                <img src="../images/empapelado/empapelado.jpg"  alt="Imagen de una puerta terminada con pintura esmalte"
                     data-img-mostrar="10">
            </div>

            <div class="card-trabajos">
                <img src="../images/empapelado/empapelado2.jpg" alt="Ejemplo de empapelado"
                     data-img-mostrar="11">
            </div>

            <div class="card-trabajos">
                <img src="../images/empapelado/empapelado7.jpg" class="resize" alt="Trabajador empapelando una pared"
                     data-img-mostrar="12">
            </div>


            <div class="card-trabajos">
                <img src="../images/empapelado/empapelado8.jpg"  alt="Pared decorada con papel pintado"
                     data-img-mostrar="13">
            </div>

            <div class="card-trabajos">
                <img src="../images/empapelado/empapelado10.jpg"  alt="Habitación decorada con papel pintado para niños"
                     data-img-mostrar="14">
            </div>

            <div class="card-trabajos">
                <img src="../images/empapelado/empapelado11.jpg" class="resize" alt="Trabajadores poniendo papel pintado en una pared"
                     data-img-mostrar="15">
            </div>





        </div>


    </section>

    <?php
    include "../includes/footer2.php";
    ?>

</div>



</body>
</html>
