@extends('hotel.base')

@section('title', 'Découvrire')

@section('content')
    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg">
        <h3>A Propos de JET</h3>
    </div>
    <!-- bradcam_area_end -->

    @include('hotel.parts.about-area')

    <!-- about_info_area_start -->
    <div class="about_info_area">
        <div class="about_active owl-carousel">
            <div class="single_slider about_bg_1"></div>
            <div class="single_slider about_bg_1"></div>
            <div class="single_slider about_bg_1"></div>
            <div class="single_slider about_bg_1"></div>
        </div>
    </div>
    <!-- about_info_area_start -->

    <!-- about_main_info_start -->
    <div class="about_main_info">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-6">
                    <div class="single_about_info">
                        <h3 class="text-uppercase">Plats Frais,<br>
                            Variés et equilibrés</h3>
                            <p>
                                Savourez une cuisine d'exception au restaurant La Dibamba,où mets locaux <br> et saveurs internationales se rencontrent pour vous offrir une expérience culinaire unique.<br> Faites ensuite une pause au bar panoramique Mt Cameroun pour <br>déguster de délicieuses boissons tout en profitant d'une vue imprenable sur Douala.
                            </p>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="single_about_info">
                        <h3 class="text-uppercase">Notre Bussiness <br>
                            Center Pour Accueillir Vos Reunions</h3>
                            <p>Le business center Gorge de Kola est à votre disposition <br>pour travailler en toute tranquillité dans un cadre cosy et professionnel.<br> Pour vos événements, nos salles Wouri (conférences) et Grotte d'Akom (réceptions)<br> vous accueillent avec un service soigné. Détendez-vous aussi au bord<br> de notre piscine ou montez au rooftop Grotte de Fovu pour admirer les décollages <br>et atterrissages des avions, tout en profitant d’activités variées.
                            </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about_main_info_end -->
@endsection