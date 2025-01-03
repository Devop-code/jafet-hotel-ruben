<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReservationMail;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

class ReservationController extends Controller
{
    public function sendConfirmation(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'nom' => 'required|string',
            'profession' => 'required|string',
            'date_entree' => 'required|date',
            'date_sortie' => 'required|date',
            'type_chambre' => 'required|string',
            'voiturier' => 'required|string',
        ]);

        // Générer le PDF
        $pdf = PDF::loadView('pdf.facture', $data);

        // Envoyer l'email avec le PDF en pièce jointe
        Mail::to($data['email'])->send(new ReservationMail($data, $pdf));

        return redirect()->back()->with('success', 'Votre réservation a été envoyée avec succès.');
    }
}