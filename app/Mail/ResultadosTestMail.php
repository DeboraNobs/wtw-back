<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResultadosTestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $pdfContent;
    public $resultados;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($pdfContent, $resultados)
    {
        $this->pdfContent = $pdfContent;
        $this->resultados = $resultados;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Resultados de tu Test de Working Holiday')
                    ->html($this->generateEmailHtml()) // Llama a un método para generar el HTML del cuerpo del email
                    ->attachData($this->pdfContent, "resultados_test.pdf", [
                        'mime' => 'application/pdf',
                    ]);
    }

    private function generateEmailHtml(): string //  método para generar el HTML del cuerpo del email
    {
        return view('pdf.resultados', ['resultados' => $this->resultados])->render();
    }
}
