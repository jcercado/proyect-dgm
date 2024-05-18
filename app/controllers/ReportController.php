<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Activity;
use setasign\Fpdf\Fpdf;  // Importar correctamente la clase Fpdf

class ReportController extends Controller {
    public function generatePDF() {
        $activityModel = new Activity();
        $activities = $activityModel->getAllActivities();

        $pdf = new Fpdf();  // Crear una nueva instancia de Fpdf
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

    public function report() {
        $this->render('report/report');
    }

    protected function render($view, $data = []) {
        extract($data);
        require "../app/views/{$view}.php";
    }
}
