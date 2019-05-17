<?php



$usuario = $_POST['user'];
$password = $_POST['password'];
$auxiliar = 0;
$str = strtolower($usuario); // PASA TODO A MINUSCULA

$archivo1 = fopen('usuarios.dat', 'r') or die("Error");
while (!feof($archivo1)) {

    $linea = fgets($archivo1);
    $datos = explode("|", $linea);


    $usr_user = $datos[0];
    $usr_pass = $datos[1];
    $user_points = $datos[5];


    $pass = md5($password);
    
    
    if (($usr_user == $str) && ($usr_pass == $pass)) {
        $auxiliar = 1;
    } else {
        $auxiliar = 2;
    }
}
fclose($archivo1);

if ($auxiliar == 1) {
    session_start();
    $_SESSION['usuario_activo'] = $str;
    $_SESSION['user_puntos'] = $user_points;
    header("location:juego_inicio.php");
}

if ($auxiliar == 2) {
    header("location:juego_ingreso.php?error1=2");
}
?>
