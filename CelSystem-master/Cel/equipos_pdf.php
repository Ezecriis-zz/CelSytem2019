<?php

session_start();

require('fpdf/fpdf.php');

class PDF extends FPDF {

    function CuerpoArchivo($file) {



        $archivo = fopen('reparar.dat', 'r') or die("Error");
        while (!feof($archivo)) {
            $linea = fgets($archivo);
            $datos = explode("|", $linea);



            $codd = $datos[0];
            $nombre = $datos[1];
            $dni = $datos[2];
            $direccion = $datos[3];
            $telefono = $datos[4];
           // $email = $datos[5];



            $this->SetFont('Times', '', 12);
            $this->Cell(30, 5, $codd, 1);

            $this->SetFont('Times', '', 12);
            $this->Cell(30, 5, $nombre, 1);

            $this->SetFont('Times', '', 12);
            $this->Cell(30, 5, $dni, 1);

            $this->SetFont('Times', '', 12);
            $this->Cell(30, 5, $direccion, 1);

            $this->SetFont('Times', '', 12);
            $this->Cell(30, 5, $telefono, 1);

           // $this->SetFont('Times', '', 12);
            //$this->Cell(30, 5, $email, 1);
            $this->Ln();
        }
        fclose($archivo);
    }

    // function ImprimirArchivo($file) {
    //   $this->AddPage();
    // $this->CuerpoArchivo($file);
    // }
}

$pdf = new PDF();
$title = 'Mostramos un archivo txt';
$pdf->SetTitle("EQUIPOS");
$pdf->SetY(65);


//$pdf->ImprimirArchivo('reparar.dat');
$pdf->AddPage();

$pdf->SetFont('Arial', '', 28);
$pdf->Cell(30, 10, 'CelSystem Libertad');
$pdf->Ln();
$pdf->Ln();


$pdf->SetFont('Times', '', 12);
$pdf->Cell(30, 10, 'CODIGO');
$pdf->SetFont('Times', '', 12);
$pdf->Cell(30, 10, 'EQUIPO');
$pdf->SetFont('Times', '', 12);
$pdf->Cell(30, 10, 'MARCA');
$pdf->SetFont('Times', '', 12);
$pdf->Cell(30, 10, 'MODELO');
$pdf->SetFont('Times', '', 12);
$pdf->Cell(30, 10, 'DETALLE');
//$pdf->SetFont('Times', '', 12);
//$pdf->Cell(30, 10, 'ESTADO');
$pdf->Ln();

$pdf->CuerpoArchivo('reparar.dat');

$pdf->Line(7, 60 , 200, 60); //Linea Vertical

$pdf->Output();
?>