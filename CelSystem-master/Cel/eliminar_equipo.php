<?php

session_start();
require('codigo.php');

$_SESSION['num_cte'] = 7;
$_SESSION['dni'] = 7;

$categoria = $_SESSION['num_cte'];
$pass = $_SESSION['dni'];

$codigoE = $_SESSION['eliminar_codigo'];

if (empty($categoria) || empty($pass)) {
    header('Location: ingreso_administrador.php');
}



$archivo = fopen('reparar.dat', 'r+') or die("Error");
while (!feof($archivo)) {

    $linea = fgets($archivo);
    $datos = explode("|", $linea);


    $codd = $datos[0];
    $nombre = $datos[1];
    $dni = $datos[2];
    $direccion = $datos[3];
    $telefono = $datos[4];
    $email = $datos[5];
    
if ($codigoE == $codd){
        unset($datos[0],$datos[1],$datos[2],$datos[3],$datos[4],$datos[5]);
        break;
    }
    
    
}
fclose($archivo);
header('Location:equipos_historial.php');
?>
 