<?php
namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReservationMail;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Exception;
class ReservationController extends Controller
{
    public function sendConfirmation(Request $request)
    {
       try{
        $data = $request->validate([
            'email' => 'required|email',
            'nom' => 'required|string',
            'profession' => 'required|string',
            'pays_residence' => 'nullable|string',
            'date_naissance' => 'nullable|date',
            'nombre_personnes' => 'nullable|integer',
            'date_entree' => 'required|date',
            'date_sortie' => 'required|date',
            'type_chambre' => 'required|string',
            'voiturier' => 'required|string',
        ]);

        // Calculer le prix en fonction du type de chambre
        switch ($data['type_chambre']) {
            case 'standart':
                $data['prix'] = 44.00;
                break;
            case 'haut-standing':
                $data['prix'] = 62.00;
                break;
            case 'confort':
                $data['prix'] = 108.00;
                break;
            case 'suite-junior':
                $data['prix'] = 170.00;
                break;
            default:
                $data['prix'] = 0.00;
                break;
        }

        // Créer une nouvelle instance de réservation
        // $reservation = new Reservation();
        // $reservation->nom = $data['nom'];
        // $reservation->email = $data['email'];
        // $reservation->profession = $data['profession'];
        // $reservation->pays_residence = $data['pays_residence'];
        // $reservation->date_naissance = $data['date_naissance'];
        // $reservation->nombre_personnes = $data['nombre_personnes'];
        // $reservation->date_entree = $data['date_entree'];
        // $reservation->date_sortie = $data['date_sortie'];
        // $reservation->type_chambre = $data['type_chambre'];
        // $reservation->prix = $data['prix'];
        // $reservation->voiturier = $data['voiturier'];

        // // Enregistrer la réservation dans la base de données
        // $reservation->save();
    //    $InfosReservation = $reservation;
        // Générer le PDF
        $pdf = PDF::loadView('pdf.facture', ['InfosReservation'=> $data]);

        // Envoyer l'email avec le PDF en pièce jointe
        Mail::to($data['email'])->send(new ReservationMail($data,$pdf));

        return redirect()->back()->with('success', 'Votre facture  a été envoyée avec succès.');

       }catch(Exception $e){
        dd($e);
       }
    }
}