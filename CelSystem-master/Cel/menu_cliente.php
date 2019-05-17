<?php
//$_SESSION['num_cte'] = $_POST['num_cte'];
//settype($_SESSION['num_cte'], "integer");

//$_SESSION['dni'] = $_POST['dni'];
//settype($_SESSION['dni'], "integer");

$nCliente = $_POST['num_cte'];
$pCliente = $_POST['dni'];


$archivo = fopen('clientes.dat', 'r') or die("Error");
while (!feof($archivo)) {
    $linea = fgets($archivo);
    $datos = explode("|", $linea);

    if ($datos[0] != null) {
        $num_cteBD = $datos[0];
        settype($num_cteBD, "integer");

        $dniBD = $datos[2];
        
        $PpCliente = md5($pCliente);
        //settype($dniBD, "integer");


        if (($nCliente == $num_cteBD) && ($PpCliente == $dniBD)) {

            $encontro = true;
            break;
        } else {
            $encontro = false;
        }
    }
}


fclose($archivo);

if ($encontro == true) {
    session_start();
    $_SESSION['cliente'] = $nCliente;
    //$num_cte = $_SESSION['num_cte'];
    //$num_cte = sha1($num_cte);

    header("location:panel_cliente.php");
}
if ($encontro == false) {
    header('location:ingreso_cliente.php?error=1');
}
?>

