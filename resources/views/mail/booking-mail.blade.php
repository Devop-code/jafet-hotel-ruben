@extends('mail.base')

@section('content')
    <tr>
        <td style="padding: 0 2.5em; text-align: left;">
            <div class="text">
                <h2 style="text-align: center;font-weight:bold;">
                    DEMANDE DE RÉSERVATION
                </h2>
            </div>
        </td>
    </tr>

    <tr>
        <td style="padding: 0 2.5em; text-align: left;">
            <div class="text">
                <p>
                    Aujourd'hui: {{ $date }}, un visiteur nommé <b>{{ $booking['name'] }} </b> a remplis 
                    le formulaire de réservation sur le 
                    <a href="{{ route('home') }}" target="_blank">
                        site de Jet Hotel
                    </a>
                    Les information soumisent sont les suivante:
                </p>
                
                <p>
                    <b>nom:</b> {{ Str::upper($booking['name']) }}
                </p>

                <p>
                    <b>Lieux:</b> 
                    {{ Str::substr($booking['location'], 0, 50) }}
                </p>
                
                <p>
                    <b>Téléphone:</b> 
                    <a href="tel:{{ $booking['phone'] }}">
                        {{ $booking['phone'] }}
                    </a>
                </p>
                
                <p>
                    <b>Email :</b> 
                    <a href="tel:{{ $booking['email'] }}">
                        {{ $booking['email'] }}
                    </a>
                </p>
                
                <p>
                    <b>age :</b> 
                    <a href="tel:{{ $booking['age'] }}">
                        {{ $booking['age'] }}
                    </a>
                </p>
                
                <p>
                    <b>Nombre de personnes :</b> 
                    {{ $booking['nombre_perso'] }}
                </p>
                
                <p>
                    <b>Type de chambres :</b> 
                    {{ $booking['type_chambre'] }}
                </p>
            </div>
        </td>
    </tr>
@endsection
