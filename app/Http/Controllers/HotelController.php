<?php

namespace App\Http\Controllers;

use App\Mail\BookingMail;
use App\Mail\ContactMail;
use App\Models\Reservation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Jenssegers\Agent\Agent;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {        
        return view('hotel.index');
    }

    public function mail()
    {
        return 'hello';
    }

    public function contact()
    {   
        return view('hotel.contact.contact');
    }

    public function about()
    {
        return view('hotel.about.about');
    }

    public function rooms(){
        return view('hotel.rooms.rooms');
    }

    public function blog(){

        return view('hotel.blog.blog');
    }

    

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        try{
            $reservation = new Reservation();
            $reservation->nom=$request->nom;
            $reservation->email=$request->email;
            $reservation->location=$request->location;
            $reservation->age=$request->age;
            $reservation->numero=$request->numero;
            $reservation->nombre_perso=$request->nombre_perso;
            $reservation->type_chambre=$request->type_chambre;
            $reservation->save();
       }
       catch(\Exception $e) {
            Log::error(
                message: 'Unable to record booking info due to: ' . $e->getMessage(), context: [
                    'email' => $request->input('email'),
                    'date' => Carbon::now()->toDateTimeString()
                ]
            );

            return redirect()->route('home')->with(
                "error_message",
                "Une erreur est survenue. Veuillez essayer de nouveau."
            );
        }
        $agent = new Agent(userAgent: $request->userAgent());
        
        $uaData = [
            'device' => sprintf('%s, ', $agent->deviceType(), $agent->device()),
            'os' => $agent->platform(),
            'browser' => $agent->browser()
        ];

        $data = [
            'name' => $request->nom,
            'email' => $request->email,
            'location' => $request->location,
            'age' => $request->age,
            'phone' => $request->numero,
            'nombre_perso' => $request->nombre_perso,
            'type_chambre' => $request->type_chambre
        ];

        try {
            Mail::to(
                env('COMPANY_MAIL', 'rubenndjengwes@gmail.com'),
                'Jet Hotel'
            )->send(new BookingMail(booking: $data, ua: $uaData));
        } catch (\Throwable $e) {
            Log::error(
                sprintf(
                    'Could not send mail while saving the contact form due to: %s',
                    $e->getMessage()
                ), [
                    'phone' => $data['phone'],
                    'email' => $data['email']
                ]
            );
        }

        return redirect()->route('home')->with(
            "success_message",
            "Votre de demande de réservation à été éffectué avec succès."
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
