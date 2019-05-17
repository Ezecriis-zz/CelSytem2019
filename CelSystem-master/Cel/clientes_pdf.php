<?php

session_start();

require('fpdf/fpdf.php');

class PDF extends FPDF {

    function CuerpoArchivo($file) {



        $archivo = fopen('clientes.dat', 'r') or die("Error");
        while (!feof($archivo)) {
            $linea = fgets($archivo);
            $datos = explode("|", $linea);



            $codd = $datos[0];
            $nombre = $datos[1];
            $direccion = $datos[3];
            $telefono = $datos[4];
            $email = $datos[5];



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
        }
        fclose($archivo);
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

$pdf->Line(7, 60, 200, 60); //Linea Vertical

$pdf->Output();
?>