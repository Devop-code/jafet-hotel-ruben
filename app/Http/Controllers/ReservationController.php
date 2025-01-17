<?php
// filepath: /C:/Users/Leassi DEVOP/OneDrive/Desktop/jafet-hotel-ruben/jafet-hotel-ruben/app/Http/Controllers/ReservationController.php
namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReservationMail;
use App\Mail\ReservationNotification;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Exception;

class ReservationController extends Controller
{
    public function sendConfirmation(Request $request)
    {
        try {
            $data = $request->validate([
                'email' => 'required|email',
                'nom' => 'required|string',
                'prenom' => 'required|string',
                'telephone' => 'required|numeric',
                'profession' => 'required|string',
                'pays_residence' => 'required|string',
                'date_entree' => 'required|date',
                'date_sortie' => 'required|date',
                'voiturier' => 'required|string',
                'standart' => 'nullable|integer|min:0',
                'haut_standing' => 'nullable|integer|min:0',
                'confort' => 'nullable|integer|min:0',
                'suite_junior' => 'nullable|integer|min:0',
            ]);

            $chambres = [
                'standart' => 44.00,
                'haut_standing' => 62.00,
                'confort' => 108.00,
                'suite_junior' => 170.00,
            ];

            $reservations = [];
            foreach ($chambres as $type => $prix) {
                $checkbox_name = $type . '_checked';
                if ($request->has($checkbox_name) && $data[$type] > 0) {
                    $reservations[] = [
                        'nom' => $data['nom'],
                        'prenom' => $data['prenom'],
                        'telephone' => $data['telephone'],
                        'email' => $data['email'],
                        'profession' => $data['profession'],
                        'pays_residence' => $data['pays_residence'],
                        'date_entree' => $data['date_entree'],
                        'date_sortie' => $data['date_sortie'],
                        'type_chambre' => $type,
                        'nombre_chambres' => $data[$type],
                        'prix' => $prix * $data[$type],
                        'voiturier' => $data['voiturier'],
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];
                }
            }

            // Enregistrer les réservations dans la base de données
            Reservation::insert($reservations);

            // Générer le PDF
            $pdf = PDF::loadView('pdf.facture', ['reservations' => $reservations]);

            // Envoyer l'email avec le PDF en pièce jointe au client
            Mail::to($data['email'])->send(new ReservationMail($reservations, $pdf));

            // Envoyer un email à l'entreprise avec les informations de la réservation
            
            return redirect()->back()->with('success', 'Votre réservation a été envoyée avec succès.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Une erreur est survenue lors de l\'envoi de la réservation.');
        }
    }
}