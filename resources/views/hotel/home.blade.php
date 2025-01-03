@extends('hotel.base')

@section('title', 'Accueil')

@section('content')
    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text text-center">
                                <h3>JET Hotel vous attend</h3>
                                <p>venez profité de la meilleure expérience</p>

                                <a href="#test-form" class="popup-with-form btn btn-lg btn-primary book-btn mt-4">
                                    Réserver
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center justify-content-center slider_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text text-center">
                                <h3 class="text-uppercase">La vie est belle</h3>
                                <p>rejoignez nous et profitez de nos services</p>

                                <a
                                 href="tel:{{ config('social.phones.orange') }}"
                                 class="btn btn-lg btn-primary book-btn mt-4"
                                 >
                                    Appeler
                                    <i class="fa fa-phone"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text text-center">
                                <h3 class="text-uppercase">JET Hotel Recoit</h3>
                                <p>dépèchez vous la qualité est au RDV</p>

                                <a href="#test-form" class="popup-with-form btn btn-lg btn-primary book-btn mt-4">
                                    Réserver
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="single_slider  d-flex align-items-center justify-content-center slider_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text text-center">
                                <h3 class="text-uppercase">JET Votre Hotel</h3>
                                <p>fait sur mesure pour vous satisafaire</p>

                                <a
                                 href="tel:{{ config('social.phones.orange') }}"
                                 class="btn btn-lg btn-primary book-btn mt-4"
                                >
                                    Appeler
                                    <i class="fa fa-phone"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    @include('hotel.parts.about-area')

    <!-- offers_area_start -->
    <div class="offers_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <span>Nos offres</span>
                        <h3>Offres en Cours</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="{{ asset('img/offers/offer_1.jpg') }}" alt="">
                        </div>

                        <h3>gagnez 35% de reduction sur<br>
                            chambres et Suites</h3>
                        <ul>
                            <li>Luxaries condition</li>
                            <li>3 Adults & 2 Children size</li>
                            <li>Sea view side</li>
                        </ul>
                        <a href="#" class="book_now">book now</a>
                    </div>
                </div>

                <div class="col-xl-4 col-md-4">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="{{ asset('img/offers/offer_2.jpg') }}" alt="">
                        </div>
                        <h3>gagnez 35% de reduction sur<br>
                            chambres et Suites</h3>
                        <ul>
                            <li>Luxaries condition</li>
                            <li>3 Adults & 2 Children size</li>
                            <li>Sea view side</li>
                        </ul>
                        <a href="#" class="book_now">book now</a>
                    </div>
                </div>

                <div class="col-xl-4 col-md-4">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="{{ asset('img/offers/offer_3.jpg') }}" alt="">
                        </div>
                        <h3>gagnez 35% de reduction sur<br>
                            chambres et Suites</h3>
                        <ul>
                            <li>Luxaries condition</li>
                            <li>3 Adults & 2 Children size</li>
                            <li>Sea view side</li>
                        </ul>

                        <a href="#" class="book_now">book now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- offers_area_end -->

    <!-- video_area_start -->
    {{-- <div class="video_area video_bg overlay">
    <div class="video_area video_bg overlay">
        <div class="video_area_inner text-center">
            <span>Une vue sur la mer</span>
            <h3>Relaxez vous et profiter <br>
                de vos Vaccances </h3>
            <a href="https://www.youtube.com/watch?v=vLnPwxZdW4Y" class="video_btn popup-video">
                <i class="fa fa-play"></i>
            </a>
        </div>
    </div> --}}
    {{-- </div> --}}
    <!-- video_area_end -->

    <!-- about_area_start -->
    <div class="about_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7">
                    <div class="about_thumb2 d-flex">
                        <div class="img_1">
                            <img src="{{ asset('img/about/1.png') }}" alt="">
                        </div>
                        <div class="img_2">
                            <img  src="{{ asset('img/about/2.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                    <div class="about_info">
                        <div class="section_title mb-20px">
                            <span>De délicieux repas</span>
                            <h3>Nous Servons Des plats frais <br>
                                Et Delicieux </h3>
                        </div>

                        <p>
                            maintenance et rehabilitation des ustenciles
                            de cuisine et des infrastructure de restauration régulière
                            et continu ,désinfection et suivit en cas d'intoxication alimentaire
                            hygiènes et précaution garanties ,aliments naturel et
                        </p>
                        {{-- <a href="#" class="line-button">Voir Plus</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about_area_end -->

    @include('hotel.parts.our-rooms')

    {{-- testimonials  --}}
    @include('hotel.parts.testimonials')

    {{-- faq  --}}
    @include('hotel.parts.faq')
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}">
@endsection

@section('script')
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
@endsection
