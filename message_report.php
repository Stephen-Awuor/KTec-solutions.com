<?php

require("fpdf17/fpdf.php");

//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

$pdf = new FPDF('P', 'mm', 'A4');

$pdf->AddPage();
$pdf->AddFont('helveticai', 'B', 'helveticai.ttf', true);
$pdf->fontpath  = 'tfpdf/font';
//set font to arial, bold, 14pt
$pdf->SetFont('helveticai', '8', 14);

//cell(width, height, text, border, end line, [align])

$pdf->cell(130 ,5,'',1,0);
$pdf->cell(59 ,5,'',1,1);//end of line

$pdf->Output();

/*
//include connection file 
include_once("dbconnect.php");
include_once('fpdf182/fpdf.php');
 
class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('logo.png',10,-1,70);
    $this->SetFont('Arial','B',13);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(80,10,'CLIENT MESSAGES',1,0,'C');
    // Line break
    $this->Ln(20);
}
 
// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
 
$db = new dbObj();
$connString =  $db->getConnstring();
$display_heading = array('id'=>'Number', 'Name'=> 'Name', 'Subject'=> 'Meaage Subject','Message'=> 'Message',);
 
$result = mysqli_query($connString, "SELECT id, Name, Subject, Message FROM client_message") or die("database error:". mysqli_error($connString));
$header = mysqli_query($connString, "SHOW columns FROM client_message");
 
$pdf = new PDF();
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',12);
foreach($header as $heading) {
$pdf->Cell(40,12,$display_heading[$heading['Field']],1);
}
foreach($result as $row) {
$pdf->Ln();
foreach($row as $column)
$pdf->Cell(40,12,$column,1);
}
$pdf->Output();
*/
?>