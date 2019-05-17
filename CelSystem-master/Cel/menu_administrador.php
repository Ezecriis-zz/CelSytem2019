<?php

//$_SESSION['num_cte'] = $_POST['num_cte'];
//settype($_SESSION['num_cte'], "integer");
$rol = "Administrador";
$password = $_POST["dni"];

//$_SESSION['dni'] = $_POST['dni'];
//settype($_SESSION['dni'], "integer");
//$num_cteBD = 7;
//settype($num_cteBD, "integer");

$dniBD = 1234;
settype($dniBD, "integer");


if ($password == $dniBD) {

    $encontro = true;
} else {
    $encontro = false;
}


if ($encontro == true) {
    session_start();
    $_SESSION['administrador'] = $rol;
    //$num_cte = $_SESSION['num_cte'];

    //$num_cte = sha1($num_cte);

    header("location:panel_administrador.php");
}

if ($encontro == false) {

    header('location:ingreso_administrador.php?error=1');
}
?>

