@extends('hotel.base')

@section('title', 'Nous Contacter')

@section('content')
    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg_2">
        <h3 class="text-uppercase">
            Nous Contacter
        </h3>
    </div>
    <!-- bradcam_area_end -->

    <!-- ================ contact section start ================= -->
    <section class="contact-section">
        <div class="container">
            <div class="d-none d-sm-block mb-5 pb-4">
                <div style="height: 480px; position: relative; overflow: hidden;">
                    <iframe 
                     src="{{ config('social.map.iframe') }}" 
                     frameborder="3" 
                     {{-- width="600"  --}}
                     height="450" 
                     allowfullscreen=""
                     loading="lazy" 
                     referrerpolicy="no-referrer-when-downgrade"
                     style="width: 100%;"
                    ></iframe>
                </div>
            </div>


            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title text-uppercase">
                        Nous Contacter 
                    </h2>
                </div>

                <div class="col-lg-8">
                    @include('hotel.parts.contact-form')
                </div>

                <div class="col-lg-3 offset-lg-1">
                    <div class="media contact-info">
                        <span class="contact-info__icon">
                            <i class="ti-home"></i>
                        </span>

                        <div class="media-body">
                            {{ config('social.location') }}
                            {{-- <h3>Buttonwood, California.</h3>
                            <p>Rosemead, CA 91770</p> --}}
                        </div>
                    </div>

                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>
                                Orange: 
                                <a href="tel:{{ config('social.phones.orange') }}">
                                    {{ config('social.phones.orange') }}
                                </a>

                                <br>
                                MTN: 
                                <a href="tel:{{ config('social.phones.MTN') }}">
                                    {{ config('social.phones.MTN') }}
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->
@endsection