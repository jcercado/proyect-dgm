<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Activity;

require '../vendor/fpdf/fpdf.php';

class ReportController extends Controller {
    public function generatePDF() {
        $activityModel = new Activity();
        $activities = $activityModel->getAllActivities();

        $pdf = new \FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(40, 10, 'Reporte de Actividades');
        $pdf->Ln(20);

        foreach ($activities as $activity) {
            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Cell(40, 10, 'Titulo: ' . $activity['title']);
            $pdf->Ln();
            $pdf->SetFont('Arial', '', 12);
            $pdf->Cell(40, 10, 'Descripcion: ' . $activity['description']);
            $pdf->Ln();
            $pdf->Cell(40, 10, 'Estado: ' . $activity['status']);
            $pdf->Ln(20);
        }

        $pdf->Output();
    }
}
