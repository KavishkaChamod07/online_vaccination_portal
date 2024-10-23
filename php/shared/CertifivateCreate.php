<?php 
    require('../fpdf/fpdf.php');

    class PDF extends FPDF
    {
        function Header()
        {
            $this->Image('../images/ministryOfHealth.png', 85, -1, 40);
            $this->Ln(20);
            $this->SetFont('Arial','B',15);
            $this->Cell(190,10,'Certificate of COVID-19 Vaccination',0,1,'C');
            $this->Line(10, 50, 200, 50);
            $this->Ln(20);
        }
        function Footer()
        {
            $this->SetY(-15);
            $this->Line(10, 277, 200, 277);
            $this->SetFont('Arial','',8);
            $this->Cell(0,5,"Ministry of Health, Suwasiripaya, No.385, Rev. Baddegama Wimalawansa Thero Mawatha, Colombo 10, Sri Lanka",0,1,'C');
            $this->Cell(0,10,"Tel: +94701731259 / +94701731260 | Email: covid19-svc@health.gov.lk",0,1,'C');
            // $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
        }
    }

    $pdf = new PDF();
    $pdf->AddPage();
    $pdf->SetTitle("Certificate of COVID-19 Vaccination");
    $pdf->SetSubject("Certificate of COVID-19 Vaccination");

    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(100, 5, 'Certificate No', 0, 1, 'L');
    $pdf->SetFont('Arial', '', 11);
    $pdf->Cell(100, 5, $certificateNo , 0, 1, 'L');
    $pdf->Ln(5);

    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(100, 5, 'Beneficiary Name', 0, 1, 'L');
    $pdf->SetFont('Arial', '', 11);
    $pdf->Cell(100, 5, $fullName, 0, 1, 'L');
    $pdf->Ln(5);

    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(100, 5, 'Residential Address', 0, 1, 'L');
    $pdf->SetFont('Arial', '', 11);
    $pdf->Cell(100, 5, $address, 0, 1, 'L');
    $pdf->Ln(5);

    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(100, 5, 'National Identity Card', 0, 0, 'L');
    $pdf->Cell(100, 5, 'Gender', 0, 1, 'L');
    $pdf->SetFont('Arial', '', 11);
    $pdf->Cell(100, 5, $nic, 0, 0, 'L');
    $pdf->Cell(100, 5, $gender, 0, 1, 'L');
    $pdf->Ln(5);

    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(100, 5, 'Date of Issue', 0, 1, 'L');
    $pdf->SetFont('Arial', '', 11);
    $pdf->Cell(100, 5, $issuedDate, 0, 1, 'L');
    $pdf->Ln(5);

    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(100, 5, 'No of Doses', 0, 1, 'L');
    $pdf->SetFont('Arial', '', 11);
    $pdf->Cell(100, 5, $noOfDose, 0, 1, 'L');
    $pdf->Ln(5);

    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(100, 5, 'First Doses', 0, 0, 'L');
    $pdf->Cell(100, 5, 'Second Doses', 0, 1, 'L');
    $pdf->SetFont('Arial', '', 11);
    $pdf->Cell(100, 5, $firstDose, 0, 0, 'L');
    $pdf->Cell(100, 5, $secondDose, 0, 1, 'L');
    $pdf->Ln(5);

    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(100, 5, 'Third Doses', 0, 0, 'L');
    $pdf->Cell(100, 5, 'Fourth Doses', 0, 1, 'L');
    $pdf->SetFont('Arial', '', 11);
    $pdf->Cell(100, 5, $thirdDose, 0, 0, 'L');
    $pdf->Cell(100, 5, $fourthDose, 0, 1, 'L');
    $pdf->Ln(5);

    // $pdf->Output();
    $pdf->Output('VaccineCertificate-'.$certificateNo.".pdf",'d');
?>