<?php

$miCodigo = $_SESSION['cliente'];

$est = 0;

$archivo = fopen('equipos_reparados.dat', 'r') or die("Error");
while (!feof($archivo)) {

    $linea = fgets($archivo);
    $datos = explode("|", $linea);

    $miCod = $datos[0];
    $miPrecio = $datos[2];

    if ($miCod == $miCodigo) {
        $est = 1;
        break;
    }

    if ($miCodigo != $miCod) {
        $est = 2;
    }
}

if ($est == 1) {
    echo "REPARADO";
    echo "<br/>";
    echo "PRECIO: " . " $ " . $miPrecio;
    echo "<br/>";
    echo "<br/>";
    echo "<a href='factura_cliente.php'>Generar Factura</a>";
}
if ($est == 2) {
    echo "EN REPARACION";
}

fclose($archivo);
?>
