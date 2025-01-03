<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Barryvdh\DomPDF\PDF;

class ReservationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $pdf;

    public function __construct($data, $pdf)
    {
        $this->data = $data;
        $this->pdf = $pdf;
    }

    public function build()
    {
        return $this->view('emails.reservation')
                    ->subject('Confirmation de Réservation')
                    ->attachData($this->pdf->output(), 'facture.pdf')
                    ->with('data', $this->data);
    }
}