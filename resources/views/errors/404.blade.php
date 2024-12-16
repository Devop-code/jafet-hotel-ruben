@extends('hotel.base')

@section('title', '404')

@section('content')
    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg_2">
        <h3 class="text-uppercase">
            Cette page n'existe pas !
        </h3>

        <a href="{{ route('home') }}" class="btn btn-lg btn-light text-uppercase mt-5">
            Accueil
        </a>
    </div>
    <!-- bradcam_area_end -->
@endsection