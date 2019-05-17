<?php

$usuario = $_POST['new_usuario'];
$password = $_POST['new_password'];
$nombre = $_POST['new_nombre'];
$apellido = $_POST['new_apellido'];
$correo_user = $_POST['new_correo'];
$passwordR = $_POST['new_repeat_password'];
$aux = 0;


if (empty($usuario) || empty($password) || empty($nombre) || empty($apellido) || empty($correo_user)) {
    header("location:juego_ingreso.php?errorQ=3");
} else {



    if ($password != $passwordR) {
        header("location:juego_ingreso.php?errorP=1");
    } else {



        $str = strtolower($usuario);
        $str_correo = strtolower($correo_user);

        $archivo1 = fopen('usuarios.dat', 'r') or die("Error");
        while (!feof($archivo1)) {

            $linea = fgets($archivo1);
            $datos = explode("|", $linea);


            $usuario_registrado = $datos[0];
            $usuario_correo = $datos[4];

            if (($usuario_registrado != $str) && ($usuario_correo != $str_correo)) {
                $aux = 1;
            }
            if (($usuario_registrado != $str) && ($usuario_correo == $str_correo)) {
                $aux = 2;
            }
            if (($usuario_registrado == $str) && ($usuario_correo != $str_correo)) {
                $aux = 2;
            }
            if (($usuario_registrado == $str) && ($usuario_correo == $str_correo)) {
                $aux = 2;
            }
        }
        fclose($archivo1);

//CREA EL ARCHIVO DE LOS PUNTOS 

        $usuario_puntos = "Puntos/" . $usuario . ".dat";
        $user_puntos = $usuario . ".dat";

        if (file_exists($usuario_puntos)) {
            $mensale = "modificado";
        } else {
            $mensale = "se creo";
        }

        if ($archivo1 = fopen($usuario_puntos, 'a+')) {
            fputs($archivo1, 0 . "|" . $user_puntos);
        }




        fclose($archivo1);

//FIN ARCHIVOS PUNTOS

        if ($aux == 1) {

            $pass = md5($password);

            $archivo = fopen('usuarios.dat', 'a+') or die("Error");
            fputs($archivo, "\n" . $str . "|" . $pass . "|" . $nombre . "|" . $apellido . "|" . $str_correo . "|" . $user_puntos);




            fclose($archivo);


            include("../PHPMailer/class.phpmailer.php");
            include("../PHPMailer/class.smtp.php");


            $mail = new PHPMailer();
            $mail->IsSMTP();
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = "ssl";
            $mail->Host = "smtp.gmail.com";
            $mail->Port = 465;
            $mail->Username = "jdgmerlo@gmail.com";
            $mail->Password = "rossini67";

            $mail->From = "cr.ezequiel24@gmail.com";
            $mail->FromName = "celulares";
            $mail->Subject = "Gracias por registrarte";
            //$mail->AltBody = "Para Completar Su Registro Debe Acceder Al Siguiente Enlace.";
            $mail->msgHTML("Datos para ingresar al juego de preguntas CelSystem:</p><br>
						<h3>Usuario: $usuario<br>
						Contraseña: $password</h1>");

            $mail->AddAddress("$correo_user", "Destinatario");
            $mail->IsHTML(true);

            $mail->Send();


            $aux == 0;
            header("location:juego_ingreso.php?acces=1");
        }

        if ($aux == 2) {
            header("location:juego_ingreso.php?error=1");
        }
    }
}
?>
