<?php

session_start();



require('fpdf/fpdf.php');

class PDF extends FPDF {

    function CuerpoArchivo($file) {

        $miC = $_SESSION['cliente'];

        $archivo = fopen('clientes.dat', 'r') or die("Error");
        while (!feof($archivo)) {
            $linea = fgets($archivo);
            $datos = explode("|", $linea);



            $codd = $datos[0];
            $nombre = $datos[1];
            $direccion = $datos[3];
            $telefono = $datos[4];
            $email = $datos[5];


            if ($codd == $miC) {


                $this->SetFont('Times', '', 12);
                $this->Cell(30, 5, $codd, 1);

                $this->SetFont('Times', '', 12);
                $this->Cell(30, 5, $nombre, 1);

                $this->SetFont('Times', '', 12);
                $this->Cell(30, 5, $direccion, 1);

                $this->SetFont('Times', '', 12);
                $this->Cell(30, 5, $telefono, 1);

                $this->SetFont('Times', '', 12);
                $this->Cell(30, 5, $email);
                $this->Ln();

                break;
            }
        }

        fclose($archivo);
    }

    function Cliente($file) {

        $miC = $_SESSION['cliente'];

        $archivo1 = fopen('reparar.dat', 'r') or die("Error");
        while (!feof($archivo1)) {
            $linea = fgets($archivo1);
            $datos = explode("|", $linea);



            $miCodd = $datos[0];
            $miEquipo = $datos[1];
            $miMarca = $datos[2];
            $miModelo = $datos[3];



            if ($miCodd == $miC) {


                $this->SetFont('Times', '', 12);
                $this->Cell(30, 5, $miCodd, 1);

                $this->SetFont('Times', '', 12);
                $this->Cell(30, 5, $miEquipo, 1);

                $this->SetFont('Times', '', 12);
                $this->Cell(30, 5, $miMarca, 1);

                $this->SetFont('Times', '', 12);
                $this->Cell(30, 5, $miModelo, 1);

                $this->Ln();

                break;
            }
        }

        fclose($archivo1);
    }

    function Precio($file) {

        $miC = $_SESSION['cliente'];

        $archivo2 = fopen('equipos_reparados.dat', 'r') or die("Error");
        while (!feof($archivo2)) {
            $linea = fgets($archivo2);
            $datos = explode("|", $linea);



            $miCodd = $datos[0];
            $miEstado = $datos[1];
            $miPrecio = $datos[2];

            if ($miCodd == $miC) {


                $this->SetFont('Times', '', 12);
                $this->Cell(30, 5, $miEstado);

                $this->SetFont('Times', '', 12);
                $this->Cell(30, 5, " $ " .$miPrecio);

                $this->Ln();

                break;
            }
        }

        fclose($archivo2);
    }

}

$pdf = new PDF();
$title = 'Mostramos un archivo txt';
$pdf->SetTitle("EQUIPOS");
$pdf->SetY(65);

$pdf->AddPage();

$pdf->SetFont('Arial', '', 28);
$pdf->Cell(30, 10, 'CelSystem Libertad');
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial', '', 16);
$pdf->Cell(30, 10, 'FACTURA');
$pdf->Ln();
$pdf->Ln();

$pdf->SetFont('Arial', '', 13);
$pdf->Cell(30, 10, 'Datos del Cliente');
$pdf->Ln();
$pdf->Line(7, 90, 200, 90); //Linea Vertical


$pdf->SetFont('Times', '', 12);
$pdf->Cell(30, 10, 'CODIGO');
$pdf->SetFont('Times', '', 12);
$pdf->Cell(30, 10, 'NOMBRE');
$pdf->SetFont('Times', '', 12);
$pdf->Cell(30, 10, 'DIRECCION');
$pdf->SetFont('Times', '', 12);
$pdf->Cell(30, 10, 'TELEFONO');
$pdf->SetFont('Times', '', 12);
$pdf->Cell(30, 10, 'CORREO');
$pdf->Ln();

$pdf->CuerpoArchivo('clientes.dat');


$pdf->Ln();
$pdf->SetFont('Arial', '', 13);
$pdf->Cell(30, 10, 'Datos del Equipo');
$pdf->Ln();
$pdf->Line(7, 120, 200, 120); //Linea Vertical


$pdf->SetFont('Times', '', 12);
$pdf->Cell(30, 10, 'CODIGO');
$pdf->SetFont('Times', '', 12);
$pdf->Cell(30, 10, 'EQUIPO');
$pdf->SetFont('Times', '', 12);
$pdf->Cell(30, 10, 'MARCA');
$pdf->SetFont('Times', '', 12);
$pdf->Cell(30, 10, 'MODELO');
$pdf->Ln();


$pdf->Cliente('reparar.dat');

$pdf->Ln();
$pdf->SetFont('Arial', '', 13);
$pdf->Cell(30, 10, 'Precio');
$pdf->Ln();




$pdf->SetFont('Times', '', 12);
$pdf->Cell(30, 10, 'ESTADO');
$pdf->SetFont('Times', '', 12);
$pdf->Cell(30, 10, 'TOTAL');
$pdf->Ln();


$pdf->Precio('equipos_reparados.dat');

$pdf->Line(7, 150, 200, 150); //Linea Vertical

$pdf->Ln();
$pdf->SetFont('Times', '', 8);
$pdf->Cell(30, 10, '*IMPORTANTE: Para poder retirar el equipo imprima esta factura y paguela en el Local.');

$pdf->Output();
?>