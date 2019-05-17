<?php

session_start();
require('codigo.php');


$_SESSION['dni'] = 1234;

$a = 0;
$pass = $_SESSION['dni'];
$codR = $_POST['cod_reparado'];
$estado = $_POST['estado_equipo'];
$miPrecio = $_POST['precio'];

if (empty($pass)) {
    header('Location: ingreso_administrador.php');
}



$archivo = fopen('equipos_reparados.dat', 'r') or die("Error");
while (!feof($archivo)) {


    $linea = fgets($archivo);
    $datos = explode("|", $linea);


    $ver_codigo = $datos[0];

    if ($ver_codigo == $codR) {
        //echo "El Codigo ya existe.";
        $a = 1;
        break;
    }
}
fclose($archivo);


if ($a == 1) {
    $aux = 1;
} else {
    $aux = 2;
    $archivo1 = fopen('equipos_reparados.dat', 'a+') or die("Error");
    fputs($archivo1, "\n" . $codR . "|" . $estado . "|" . $miPrecio);
    fclose($archivo1);
}




if ($aux == 1) {
    header("location:panel_administrador.php?var=1");
}
if ($aux == 2) {
    header("location:panel_administrador.php?var=2");
}
?>