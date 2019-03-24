<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require(APPPATH . 'libraries/fpdf.php');

class PDF extends FPDF
{
function Header()
{
    // Select Arial bold 15
    $this->SetFont('Times','',15);
            $this->Image('assets/giz.jpg',170,5,20,15);
            
            $this->SetFont('Times','B',12);

            $this->SetX(10);
            $this->cell(180,10,'',0,1,'L');
            $this->SetX(15);
            $this->cell(155,6,'All Product List as on '.date('d-m-Y'),0,1,'L');
           // $this->cell(25,6,date('d-m-Y'),0,1,'L');

            //$this->cell(180,6,'All Product List as on '.date('d-m-Y'),0,1,'C');
            $this->cell(180,5,'',0,1,'L');
            $this->SetFont('Times','',12);
            

            //$this->Line(10,50,200,50);
            //$this->SetXY(10,60);
            $this->SetX(15);
            $this->SetFont('Times','B',9);
            $this->cell(10,6,'S/N','1',0,'C');
            $this->cell(50,6,'Product Name','1',0,'L');
            $this->cell(25,6,'Category Name','1',0,'L');
            $this->cell(60,6,'Location','1',0,'L');
            $this->cell(15,6,'Page','1',0,'L');
            $this->cell(20,6,'In Stock','1',1,'L');
}

function Footer()
{
    // Go to 1.5 cm from bottom
    $this->SetY(-15);
    // Select Arial italic 8
    $this->SetFont('Arial','I',8);
    // Print centered page number
    $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
}


}
?>