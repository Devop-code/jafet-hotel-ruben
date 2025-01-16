<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid p-0">
                <div class="row align-items-center no-gutters">
                    <div class="col-xl-5 col-lg-6">
                        <div class="main-menu  d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li>
                                        <a 
                                         @class([ 
                                            'active' => Route::currentRouteName() == 'home',
                                            'text-capitalize'
                                         ])
                                         href="{{ route('home') }}"
                                        >Accueil</a>
                                    </li>

                                    <li>
                                        <a 
                                         @class([ 
                                            'active' => Route::currentRouteName() == 'rooms',
                                            'text-capitalize'
                                         ])

                                         href="{{ route('rooms') }}"
                                        >Chambres</a>
                                    </li>

                                    <li>
                                        <a 
                                         @class([
                                            'active' => Route::currentRouteName() == 'about',
                                            'text-capitalize'
                                         ])

                                         href="{{ route('about') }}"
                                        >A propos</a>
                                    </li>
                                    
                                    <li>
                                        <a 
                                         @class([
                                            'active' => Route::currentRouteName() == 'contact',
                                            'text-capitalize'
                                         ])
                                         href="{{route('contact')}}"
                                        >Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2">
                        <div class="logo-img">
                            <a href="{{ route('home') }}">
                                <img src="{{asset('img/logo.png')}}" alt="" class="logojet"> 
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-5 col-lg-4 d-none d-lg-block">
                        <div class="book_room">
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
                            <div class="book_btn d-none d-lg-block">
                                <a class="" href="{{ route("reservation") }}">
                                    Réserver
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>