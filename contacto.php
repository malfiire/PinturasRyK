
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
    $asunto = "Contacto";
    $mensaje = $_POST['mensaje'];//mensaje que introduce el usuario
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
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('admin@pinturasryk.com', 'PinturasContacto');
    $mail->addAddress('pinturasryk@gmail.com', 'PinturasRyK');     // Add a recipient

    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $asunto;
    $mail->Body  = "<div class = 'mensaje'>".'<li><strong>Nombre:</strong> '.$nombre.'</li>'.
        '<li><strong>Correo:</strong> '.$correo.'</li>'.
        '<li><strong>Teléfono:</strong> '.$telefono.'</li>'.
        '<li><strong>Mensaje:</strong> '.$mensaje.'</li>'
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

        <div class="title-item-nav">

            <h2>INFORMACIÓN DE CONTACTO</h2>

        </div>


        <div class="todo-contacto">

        <div class="negro">

            <div class="informacion-contacto">

                <div class="card-contacto">
                    <i class="fa fa-phone-square"></i>
                    <h4>Teléfono</h4>
                    <p><strong>687228400 / 910277222</strong></p>
                </div>



                <div class="card-contacto">
                    <i class="fa fa-envelope"></i>
                    <h4>Email</h4>
                    <p><strong><span>pinturasryk@gmail.com</span></strong></p>
                </div>


            </div>

            <div class="texto-presupuesto">

                <p>A través del siguiente formulario,
                    puede <strong>contactarnos</strong> para la solicitud de información acerca de nuestros servicios</p>
            </div>


            <div class="form-contacto">


                <form name="formulario-contacto" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">

                    <h4>
                        <?php
                        if(!empty($resultado)){
                            echo $resultado;
                        }
                        ?></h4>

                    <div class="box-input2">
                        <input type="text" class="input" name="nombre" placeholder="Nombre" required >
                    </div>

                    <div class="box-input2">
                        <input type="email" class="input" name="correo" placeholder="Correo" required>
                    </div>

                    <div class="box-input2">
                        <input type="number" class="input" name="telefono" placeholder= "Teléfono" required>
                    </div>

                    <div class="box-input2">

                        <textarea name="mensaje" placeholder="Mensaje"></textarea>
                    </div>

                    <div class="btn-submit">
                        <input type="submit"  value="Enviar" class="btn-mine">
                    </div>


                </form>



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
