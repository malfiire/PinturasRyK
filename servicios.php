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


    <?php
    include "includes/header.php";
    ?>

    <?php
    include "includes/nav.php";
    ?>

    <section>

        <div class="img-header-servicios">

            <h2>SERVICIOS DE PINTURA</h2>


            <div class="imagen">

                <img src="images/portada-servicios_recortada.jpg" class="imagen-inside">

            </div>


            <div class="texto">

                <p>
                    Para <i>Pinturas y Decoraciones R y K</i> lo primordial
                    es el resultado y la satisfacción de nuestros clientes.
                    Por esta razón, analizamos sus necesidades exhaustivamente, con el objetivo
                    de ofrecerle el mejor servicio del cual dispongamos.
                    Nuestra gran experiencia en el sector avala  la garantía de nuestro trabajo.
                    Contamos con una gran cantidad de profesionales
                    que pueden acudir a cualquier parte de Madrid.
                </p>

                <p>
                    Realizamos todo tipo de pintura: <a href="servicios/lisos.php"> Lisos</a> , Alta decoración en <a href="servicios/empapelado.php">Empapelado</a> de paredes, <a href="servicios/barnizado.php">Barnizado</a> sobre cualquier
                    superficie, pinturas <a href="servicios/esmalte.php">Esmalte</a>, <a href="#">Gótele</a>(también lo quitamos) y muchos servicios más. Contacta con nosotros
                    , haz tu consulta y pide presupuesto sin compromiso.
                </p>

                <p class="texto-servicios-inside">
                    El asesoramiento de cualquier servicio, refiriendose a información como el precio, tipo de pintura, acabados etc,
                    es totalmente gratuito. De la misma forma, una vez contratado algún servicio, nos comprometemos a la realización de tal.
                </p>






            </div>


        </div>





        <div class="servicios">

            <div class="servicios-real">

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
        </div>





    </section>

    <?php
    include "includes/footer.php";
    ?>

</div>



</body>
</html>
