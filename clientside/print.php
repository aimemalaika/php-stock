<?php

    include('../../fpdf/fpdf.php');
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'aime');
    define('DB_PASSWORD', 'malaika');
    define('DB_DATABASE', 'cedrickdata');
    $gettable= $_GET['table'];
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    $sql = "select * from $gettable";
    $result = mysqli_query($db,$sql);
    $sql = "show fields from $gettable";
    $header = mysqli_query($db, $sql);
    
    $pdf = new FPDF('L', 'mm', array(210, 297));
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',14);
    
    // echo "<table><tr>";
    $c = 0;
    foreach($header as $heading) {
        $column_heading = $heading['Field'];
        // echo "<td>".$column_heading."</td>";
        switch ($c) {
            case 1:
                $pdf->Cell(30,10,$column_heading,1);
                break;
            case 2:
                $pdf->Cell(30,10,$column_heading,1);
                break;
            case 3:
                $pdf->Cell(30,10,$column_heading,1);
                break;
            case 4:
                $pdf->Cell(60,10,$column_heading,1);
                break;
            case 5:
                $pdf->Cell(20,10,$column_heading,1);
                break;
            case 6:
                $pdf->Cell(40,10,$column_heading,1);
                break;
            default:
                break;
        }
        $c += 1;
    }
    // echo "</tr>";
    foreach($result as $rs) {
        $pdf->SetFont('Arial','',12);	
        $pdf->Ln();
        // echo "<tr>";
        $c = 0;
        foreach($rs as $da) {
            // echo "<td>".$da."</td>";
            
            switch ($c) {
                case 1:
                    $pdf->Cell(30,50,$da,1);
                    break;
                case 2:
                    $pdf->Cell(30,50,$da,1);
                    break;
                case 3:
                    $pdf->Cell(30,50,$da,1);
                    break;
                case 4:
                    $pdf->Cell(60,50,$da,1);
                    break;
                case 5:
                    $pdf->Cell(20,50,$da,1);
                    break;
                case 6:
                    $pdf->Cell(40,50,$da,1);
                    break;
                default:
                    break;
            }
            $c += 1;
        }
        // echo "</tr>";
    }
    // echo "</table>";
    $pdf->Output();
?>
