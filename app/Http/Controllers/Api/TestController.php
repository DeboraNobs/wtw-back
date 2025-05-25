<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ResultadosTestMail;
use TCPDF;
use Illuminate\Support\Facades\Log;


class TestController extends Controller
{
    public function enviarResultados(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'resultados' => 'required|array'
        ]);

        Log::info('Datos recibidos en TestController:', $request->all());

        $resultados = $request->input('resultados');

        $pdf = new \TCPDF();
        $pdf->AddPage();
        $html = $this->generarHtmlParaPdf($resultados);
        $pdf->writeHTML($html);
        $pdfContent = $pdf->Output('', 'S');

        Mail::to($request->email)->send(new ResultadosTestMail($pdfContent, $resultados));

        return response()->json(['success' => true]);
    }

    private function generarHtmlParaPdf(array $resultados): string
    {
        Log::info('Datos pasados a la vista PDF:', $resultados); // <-- Añade esta línea
        return view('pdf.resultados', ['resultados' => $resultados])->render();
    }
}
