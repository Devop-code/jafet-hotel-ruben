<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>JET HOTEL RSERVATION</title>
    <!-- External CSS Links -->
    <link rel="stylesheet" href="{{ asset('css/design.css') }}">
    <!-- Font Awosome Link -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
     <!-- aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Calligraffitti&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playwrite+DE+VA:wght@100..400&family=Rubik+Vinyl&display=swap" rel="stylesheet">

    <!-- favicon -->

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/logo.png')}}">

    
</head>

<body>
    

    <!-- HEADER-->

    <header>
        <div class="logo playwrite">Reservation </div>
        <nav>
            <ul class="navbar">
                <li><h1 class="calligraffitti-regular">JET -  HOTEL</h1></li>
                <li><img src="{{asset('img/logo-white.png')}}" alt="jet logo" height="80px"></li>
            </ul>
        </nav>
        <div class="menu-icon" id="menuIcon">
            <i class="fa-solid fa-bars"></i>
        </div>
    </header>
    

    <!-- Main Section -->

    <main class="main-container">
        <section class="left-section" data-aos="fade-right" data-aos-duration="3000" style="z-index: 1000;">
            <div class="content">
                <h1>Profitez de vos meilleurs<br> moment avec nous.</h1>
                {{-- id="bookingForm" --}}
                <form id="bookingForm" action="{{ route('reservation.send') }}" method="POST"> 
                    @csrf
                    <div class="trip-type">
                        <label>
                            <input type="radio" name="tripType" value="return" required>m'envoyer un voiturier
                        </label>
                        <label>
                            <input type="radio" name="tripType" value="oneway" required>pas de voiturier
                        </label>
                    </div>

                    <div class="input-group">
                        <div class="input-wrapper">
                            <label for="type-chambre">Type de chambre :</label>
                            <select id="type-chambre" name="type-chambre" required>
                                <option value="" disabled selected>Sélectionnez un type de chambre</option>
                                <option value="standart">Standart : Télé, Climatiseur, Wifi - 44€</option>
                                <option value="haut-standing">Haut Standing : Télé, Climatiseur, Wifi, Baignoire - 62€</option>
                                <option value="confort">Confort : Télé, Climatiseur, Wifi, Petit-déjeuner, Baignoire - 108€</option>
                                <option value="suite-junior">Suite Junior : Télé, Climatiseur, Wifi, Salon, Petit-déjeuner - 170€</option>
                            </select>
                        </div>
                    </div>

                        <div class="icon">
                            <i class="fa-solid fa-book-open"></i>
                        </div>

                        <div class="input-wrapper">
                            <input type="mail" required class="arrival" placeholder="votre email">
                        </div>

                    </div>

                    <div class="input-group">
                        <div class="input-wrapper">
                            <input type="text" required class="arrival" placeholder="profession">
                        </div>
                            
                        <div class="input-wrapper">
                            <input type="text" name="nom" required class="arrival" placeholder="votre nom">
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-user"></i>
                        </div>

                        <div class="input-wrapper">
                            <input type="text" required class="arrival" placeholder="votre pays de residence">
                        </div>
                    </div>

                    <div class="input-group">
                        <div class="input-wrapper">
                            <label for="date-naiss">date de naissance</label>
                            <input type="date" required class="arrival">
                        </div>

                        <div class="icon">
                            <i class="fa-solid fa-tag"></i>
                        </div>

                        <div class="input-wrapper">
                            <label for="nonbre-personne">nombre de personne</label>
                            <input type="number" required class="arrival">
                        </div>
                    </div>

                    <div class="input-group">
                        <div class="input-wrapper">
                            <label for="date-entrer">jour d'entrée</label>
                            <input type="date" id="departureDate" name="date-entrer" required>
                        </div>

                        <div class="icon">
                            <i class="fa-solid fa-calendar-days"></i>
                        </div>

                        <div class="input-wrapper">
                            <label for="date-sortie">jour de sortie</label>
                            <input type="date" id="returnDate" name="date-sortie" required >
                        </div>
                        
                    </div>

                    <button type="submit">Send</button>
                </form>
                
            </div>

            <div class="slider">
                <div class="slider-header">
                    <h2 class="calligraffitti-regular">apercu de nos chambres </h2>
                    <div class="slider-buttons">
                        <button id="prev" class="slider-btn">
                            <i class="fa-solid fa-angle-left"></i>
                        </button>

                        <button id="next" class="slider-btn">
                            <i class="fa-solid fa-angle-right"></i>
                        </button>
                    </div>
                </div>

                <div class="slider-container">
                    <div class="slider-images">
                        <div class="slide">
                            <img src="{{ asset('img/rooms/chambre3.jpg')}}" alt="Cyprus">
                            <div class="info">
                                <p class="location"></p>
                                <p class="sub-location"></p>
                                <div class="price">
                                    <span class="slide-icon"><i class="fa-solid fa-plane-departure"></i></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>

                        <div class="slide">
                            <img src="{{ asset('img/rooms/chambre2.jpg')}}" alt="Estonia">
                            <div class="info">
                                <p class="location"></p>
                                <p class="sub-location"></p>
                                <div class="price">
                                    <span class="slide-icon"><i class="fa-solid fa-plane-departure"></i></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>

                        <div class="slide">
                            <img src="{{ asset('img/rooms/chambre4.jpg')}}" alt="France">
                            <div class="info">
                                <p class="location"></p>
                                <p class="sub-location"></p>
                                <div class="price">
                                    <span class="slide-icon"><i class="fa-solid fa-plane-departure"></i></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>

                        <div class="slide">
                            <img src="{{ asset('img/rooms/chambre1.jpg')}}" alt="Germany">
                            <div class="info">
                                <p class="location"></p>
                                <p class="sub-location"></p>
                                <div class="price">
                                    <span class="slide-icon"><i class="fa-solid fa-plane-departure"></i></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>

                        <div class="slide">
                            <img src="{{ asset('img/rooms/chambre2.jpg')}}" alt="India">
                            <div class="info">
                                <p class="location"></p>
                                <p class="sub-location"></p>
                                <div class="price">
                                    <span class="slide-icon"><i class="fa-solid fa-plane-departure"></i></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>

                        <div class="slide">
                            <img src="{{ asset('img/rooms/chambre3.jpg')}}"Greece">
                            <div class="info">
                                <p class="location"></p>
                                <p class="sub-location"></p>
                                <div class="price">
                                    <span class="slide-icon"><i class="fa-solid fa-plane-departure"></i></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="right-section" data-aos="fade-up-left" data-aos-duration="3000">
            <!-- <img src="Assets/pexels-vince-25003400.jpg')}}" width=""> -->
             <h1 class="calligraffitti-regular"><strong>entrez les informations de votre reservations</strong>,<br> faites le bon choix de chambres, <br>celle qui vous correspond le mieux <br>
                puis retrouvez nous la date mentionnez <br>pour passer un bon moment et vous divertir,<br> comme jamais auparavant. votre satisfaction notre priorité<br>
                <br>
                <a class="visit" href="{{url('home')}}">visitez jet hotel</a>
            </h1>

            
        </section>
    </main>


    

    <!-- JavaScript -->
    <script type="text/javascript" src="{{ asset('js/rooms_list.js')}}"></script>
    <!-- AOS JS -->
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
        AOS.init({
            offset: 1
        });
    </script>
</body>
</html>