<?php

require('codigo.php');

$codigo = $codA;
$nombre = $_POST['nombre'];
$dni = $_POST['dni'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];

$cc = $codigo;

$archivo = fopen('reparar.dat', 'a+') or die("Error");
fputs($archivo, "\n" . $codigo . "|" . $nombre . "|" . $dni . "|" . $direccion . "|" . $telefono);
fclose($archivo);

header("location:panel_administrador.php")
?>
<?php

include("PHPMailer/class.phpmailer.php");
include("PHPMailer/class.smtp.php");
require("codigo.php");


$Eemail = $_POST['Eemail'];
$PassCod = rand(0000, 9999);
$Ddni = md5($PassCod);
$Nnombre = $_POST['Nnombre'];
$Ddireccion = $_POST['Ddireccion'];
$Ttelefono = $_POST['Ttelefono'];

$encontro = 0;
$archivo1 = fopen('clientes.dat', 'r') or die("Error");
fclose($archivo1);

$num_cte = $cc; //$num_cte + 1;

$archivo1 = fopen('clientes.dat', 'a+') or die("Error");
fputs($archivo1, "\n" . $num_cte . "|" . $Nnombre . "|" . $Ddni . "|" . $Ddireccion . "|" . $Ttelefono . "|" . $Eemail);
fclose($archivo1);

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
$mail->msgHTML("Datos para ingresar:</p><br>
						<h3>Numero de cliente: $num_cte<br>
						Contraseña: $PassCod</h1>");

$mail->AddAddress("$Eemail", "Destinatario");
$mail->IsHTML(true);

if (!$mail->Send()) {
    echo "Error: " . $mail->ErrorInfo;
} else {
    echo "<center>Mensaje enviado correctamente<br>";
    echo "El numero de cliente se envió a la casilla de email indicada<br>";
    echo "<a href='ingreso_cliente.html'>Ingresar</a></center>";
    die();
}
?>