<!-- footer -->
<footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            adresse
                        </h3>
                        <p class="footer_text" >  
                            {{ config('social.location') }}
                        </p>

                        <a 
                         href="{{ config('social.map.link') }}" 
                         class="line-button"
                         target="_blank"
                        >
                            Carte Google  
                            <i class="fa fa-map-o"></i>
                        </a>
                    </div>
                </div>

                {{-- <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Réservation
                        </h3>

                        <p class="footer_text">
                            +237 682 764 258 <br>
                            reservation@montana.com</p>
                    </div>
                </div> --}}
                
                <div class="col-xl-2 col-md-6 col-lg-2">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Réservation 
                        </h3>
                        <ul>
                            @foreach (config('social.phones') as $phone)
                                <li>
                                    <a href="tel:{{ $phone }}">{{ $phone }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-xl-2 col-md-6 col-lg-2">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Navigation
                        </h3>

                        <ul>
                            <li><a href="{{ route('home') }}">Accueil</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                            <li><a href="{{ route('rooms') }}">Chambres</a></li>
                            <li><a href="{{ route('about') }}">A Propos</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Newsletter
                        </h3>

                        <form 
                         action="{{ route('news.register') }}" 
                         method="POST" 
                         class="newsletter_form"
                         id="newsletter-form"
                        >
                            <div>
                                <input 
                                 type="email"
                                 placeholder="Votre email" 
                                 id="news-email" 
                                 class="form-control is-invalid"
                                 @disabled(session('newsletter.registred'))
                                 required
                                />
                            </div>

                            <button type="submit" class="m-0" @disabled(session('newsletter.registred'))>
                                S'inscrire
                            </button>
                        </form>

                        @if (session('newsletter.registred'))
                            
                        @endif
                        <p 
                         @class([
                            'text-danger' => ! session('newsletter.registred'),
                            'text-success' => session('newsletter.registred')
                         ]) 
                         id="newsletter-msg"
                        >
                            {{ 
                            session('newsletter.registred') ? 
                            'Vous avez été inscrit à notre newsletter avec succès.' : null 
                            }}
                        </p>

                        <p class="newsletter_text">
                            Souscrivez à notre newsletter pour etre au courant des nouveautés
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="copy-right_text">
        <div class="container">
            <div class="footer_border"></div>
            <div class="row">
                <div class="col-xl-8 col-md-7 col-lg-9">
                    <p class="copy_right">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright {{ date('Y') }} 
                        Vortex All rights reserved | This site is made with 
                        <i class="fa fa-heart-o" aria-hidden="true"></i> 
                        by <a href="" target="_blank">VTA</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>

                <div class="col-xl-4 col-md-5 col-lg-3">
                    <div class="socail_links">
                        <ul>
                            <li>
                                <a href="{{ config('social.instagram') }}">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>

                            <li>
                                <a href="{{ config('social.tiktok') }}">
                                    TikTok
                                </a>
                            </li>

                            <li>
                                <a href="{{ config('social.facebook') }}">
                                    <i class="fa fa-facebook-square"></i>
                                </a>
                            </li>

                            <li>
                                <a href="{{ config('social.linkedin') }}">
                                    <i class="fa fa-linkedin-square"></i>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>