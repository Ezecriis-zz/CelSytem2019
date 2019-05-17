<?php

$total_puntos = $_SESSION['puntos_acumulados'] - 1;

$archivo = fopen("Puntos/" . $_SESSION['user_puntos'], "w+");
fwrite($archivo, "");
fclose($archivo);

$archivo = fopen("Puntos/" . $_SESSION['user_puntos'], "a+");
fputs($archivo, $total_puntos . "|" . $_SESSION['user_puntos']);
fclose($archivo);
echo "PERDISTE";
?>