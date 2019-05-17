<?php

$cod = rand(100, 1000);


$archivo = fopen('reparar.dat', 'r') or die("Error");
while (!feof($archivo)) {

    $linea = fgets($archivo);
    $datos = explode("|", $linea);

    $codigo = $datos[0];
    
    if ($codigo != $cod){
        $codA = $cod;
        break;
    }else{
        $cod = rand(100, 1000);
    }
    
}
fclose($archivo);
?>
