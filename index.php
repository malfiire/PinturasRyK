<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


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

       <img src="images/logo/logo_oficial_peque.png" alt="logo oficial de Pinturas y decoraciones R y K ">

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


<?php
include "includes/header.php";
?>

<?php
include "includes/nav.php";
?>


    <div class="banner">

        <div class="contenido-banner">
            <h2>LOS MEJORES EN LA PINTURA</h2>
            <p>Tu confianza en verdaderos profesionales</p>
        </div>


    </div>




    <div class="contacto-caja">

        <div class="contacto-caja-inside">

            <div class="contacto-texto">
                <p>
                    <i>¿Quieres un trabajo bien hecho, rápido y barato?</i>
                    <br>
                    Infórmate sobre nuestros servicios en Madrid o consultanos y te ayudaremos.
                </p>

            </div>

            <div class="contacto-boton">

                <a href="tel:+34687228400">
                   Contáctanos
                </a>

            </div>


        </div>

    </div>


    <section>
        <h2>Nuestros Servicios</h2>

        <div class="servicios">

            <div class="card">
                <a href="servicios/empapelado.php"><img src="images/servicios/empapelado_ladrillo.jpg" alt="Imagen de empapelado"></a>
                <h3>Empapelado</h3>
                <p>Una de las mejores opciones para aumentar la elegancia de tu casa.</p>
                <a href="servicios/empapelado.php">Ver más</a>
            </div>

            <div class="card">
                <a href="servicios/barnizado.php"> <img src="images/servicios/barnizado.jpg" alt="Imagen de barnizado"></a>
                <h3>Barnizado</h3>
                <p>Sobre cualquier tipo de superficie: puertas, madera, parquet, etc.</p>
                <a href="servicios/barnizado.php">Ver más</a>
            </div>


            <div class="card">
                <a href="servicios/lisos.php"> <img src="images/servicios/liso.jpg" alt="Imagen de pintura lisa"></a>
                <h3>Lisos</h3>
                <p>!Pintamos tus paredes lisas con acabados profesionales¡</p>
                <a href="servicios/lisos.php">Ver más</a>
            </div>

            <div class="card">
                <a href="servicios/esmalte.php"><img src="images/servicios/esmalte_puerta.jpg" alt="Imagen de pintura esmalte"></a>
            <h3>Esmalte</h3>
                <p>!Aumenta la resistencia de tus muebles con la utilización de esmaltes¡</p>
                <a href="servicios/esmalte.php">Ver más</a>
            </div>


            <div class="card">
                <img src="images/servicios/gotele.jpg">
                <h3>Gotelé</h3>
                <p>!Tanto si quieres ponerlo, como quitarlo, confía en nostros¡</p>
                <a href="#">Ver más</a>
            </div>

        </div>


        <div class="ryk-mejores">

            <h2>¿Por qué Elegirnos?</h2>

            <div class="razones-eleccion">

                <div class="card-razones">
                    <i class="fa fa-check-square-o"></i>
                    <h4>Calidad</h4>
                    <p>Buscamos la mayor satisfacción de nuestros clientes, por lo tanto, cada trabajo solicitado es estudiado exhaustivamente para ofrecer una atención personalizada, obteniendo un resultado de alta calidad. </p>
                </div>


                <div class="card-razones">
                    <i class="fa fa-handshake-o"></i>
                    <h4>Compromiso</h4>
                    <p>Desde el primer instante en el que un cliente contacta con nostros, nos comprometemos a atender a todas sus solicitudes y dar información sin ningún tipo de coste hasta la solicitud de un servicio.</p>

                </div>


                <div class="card-razones">
                    <i class="fa fa-clock-o"></i>
                    <h4>Rapidez</h4>
                    <p>Una vez el cliente solicita un servicio, nuestro personal profesional se compromete a realizar el trabajo dentro del plazo estipulado con la mayor calidad, compromiso y rapidez.
                        !No te lo pierdas¡</p>

                </div>

            </div>


        </div>


    </section>


    <?php
    include "includes/footer.php";
    ?>

</div>



</body>
</html>
