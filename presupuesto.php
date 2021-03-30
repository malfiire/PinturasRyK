<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
use const http\Client\Curl\Versions\SSL;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';


if(isset($_POST) && !empty($_POST)){
    $mail = new PHPMailer(true); //intanciamos un objeto de la clase PHPMailer.
    $nombre = $_POST['nombre'];//nombre que introduce el usuario
    $correo = $_POST['correo'];//correo que introduce el usuario
    $asunto = "Presupuesto";
    $solicitud = $_POST['solicitud'];//mensaje que introduce el usuario
    $telefono = $_POST['telefono'];
    $resultado = ""; //para comprobar si el mensaje ha sido enviado o no

    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->CharSet = 'UTF-8'; //para que me detecte las tildes
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.servidor-correo.net';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'admin@pinturasryk.com';                     // SMTP username
    $mail->Password   = 'ull35nNbyu';                               // SMTP password
    $mail->SMTPSecure = 'tls';        // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;   
	
    //Recipients
    $mail->setFrom('admin@pinturasryk.com','PinturasPresupuesto');
    $mail->addAddress('pinturasryk@gmail.com', 'PinturasRyK');  

    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $asunto;
    $mail->Body  = "<div class = 'mensaje'>".'<li><strong>Nombre:</strong> '.$nombre.'</li>'.
        '<li><strong>Correo:</strong> '.$correo.'</li>'.
        '<li><strong>Teléfono:</strong> '.$telefono.'</li>'.
        '<li><strong>Solicitud:</strong> '.$solicitud.'</li>'
        ."</div>";
    if($mail->send()){
        $resultado = "Gracias"." ".$nombre.", pronto recibirá una respuesta";
    }else{
        $resultado = "Algo ha ido mal, porfavor intentelo de nuevo";
    }

}
?>

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

        <img src="images/logo/logo_oficial_peque.png" alt="Logo oficial de Pinturas y Decoraciones R y K">

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

        <div class="title-item-nav">
            <h2>PRESUPUESTO SIN COMPROMISO</h2>
        </div>

        <div class="texto-presupuesto">

            <p>A través del siguiente formulario,
                puede solicitar presupuesto acerca de cualquier tipo de servicio que nosotros
            ofrezcamos o si lo prefiere puede contactarnos llamando a uno de estos números:
            <strong> 669854125 / 911025463</strong></p>
        </div>

        <div class="todo-caja">

        <div class="caja-form">


            <form name="presupuestoform" id="formu" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">

                <h4>
                    <?php
                    if(!empty($resultado)){
                        echo $resultado;
                    }
                    ?></h4>

                <div class="box-input">

                    <input type="text" class="input" name="nombre" placeholder="Nombre" required >
                </div>

                <div class="box-input">
                    <input type="email" class="input" name="correo" placeholder="Correo" required>
                </div>

                <div class="box-input">
                    <input type="number" class="input" name="telefono" placeholder= "Teléfono" required>
                </div>

                <div class="box-input">

                    <textarea name="solicitud" placeholder="Solicitud" ></textarea>
                </div>

                <div class="btn-submit">
                    <input type="submit" name="btnEnviar" id="btnEnviar" value="Enviar" class="btn-mine">
                </div>


            </form>

                    <!-- <script src="https://code.jquery.com/jquery-2.2.2.min.js">script>-->
                    <!-- <script src="js/validar.js" type="text/javascript"></script>-->



        </div>
        </div>





    </section>

    <?php
    include "includes/footer.php";
    ?>

</div>



</body>
</html>




