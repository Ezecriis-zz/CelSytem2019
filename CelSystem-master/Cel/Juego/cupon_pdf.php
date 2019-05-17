<?php

session_start();

require('../fpdf/fpdf.php');

class PDF extends FPDF {

    function CuerpoArchivo($file) {



        $archivo = fopen('usuarios.dat', 'r') or die("Error");
        while (!feof($archivo)) {
            $linea = fgets($archivo);
            $datos = explode("|", $linea);



            $usuario = $datos[0];
            $nombre = $datos[2];
            $apellido = $datos[3];
            $correo = $datos[4];



            $this->SetFont('Times', '', 12);
            $this->Cell(30, 5, $usuario, 1);

            $this->SetFont('Times', '', 12);
            $this->Cell(30, 5, $nombre, 1);

            $this->SetFont('Times', '', 12);
            $this->Cell(30, 5, $apellido, 1);

            $this->SetFont('Times', '', 12);
            $this->Cell(30, 5, $correo);

            $this->Ln();
        }
        fclose($archivo);
    }

    function Puntos($file) {


        $archivo1 = fopen("Puntos/" . $_SESSION['user_puntos'], 'r') or die("Error");
        while (!feof($archivo1)) {
            $linea = fgets($archivo1);
            $datos = explode("|", $linea);

            $puntos = $datos[0];

            $this->SetFont('Times', '', 12);
            $this->Cell(30, 5, $puntos, 1);

            $this->Ln();
        }
        fclose($archivo1);
    }

}

$pdf = new PDF();
$title = 'Mostramos un archivo txt';
$pdf->SetTitle("CUPON");
$pdf->SetY(65);



$pdf->AddPage();

$pdf->SetFont('Arial', '', 28);
$pdf->Cell(30, 10, 'CelSystem Libertad');
$pdf->Ln();
$pdf->Ln();


$pdf->SetFont('Times', '', 12);
$pdf->Cell(30, 10, 'USUARIO');
$pdf->SetFont('Times', '', 12);
$pdf->Cell(30, 10, 'NOMBRE');
$pdf->SetFont('Times', '', 12);
$pdf->Cell(30, 10, 'APELLIDO');
$pdf->SetFont('Times', '', 12);
$pdf->Cell(30, 10, 'CORREO');

$pdf->Ln();

$pdf->CuerpoArchivo('usuarios.dat');
$pdf->Ln();

$pdf->Cell(30, 10, 'PUNTOS');
$pdf->Ln();
$pdf->Puntos('Puntos/' . $_SESSION['user_puntos']);

$pdf->Line(7, 70, 200, 70); //Linea Vertical
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(30, 10, 'FIRMA VENDEDOR: ');
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(30, 10, 'FIRMA CLIENTE:');
$pdf->Line(7, 140, 200, 140); //Linea Vertical
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(30, 10, '* Cupon valido para todas las promociones de CelSystem');

$pdf->Output();
?>