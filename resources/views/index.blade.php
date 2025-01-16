<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jet Hotel Reservation</title>
    <link rel="stylesheet" href="{{asset("css/vs.css")}}">
    <link href="https://fonts.googleapis.com/css2?family=Sevillana&display=swap" rel="stylesheet">

</head>
<body>
    <!-- Header -->
    <header>
        <nav class="navbar">
            <div class="logo">
                <h1><a href="vs.html"><img src="{{asset("img/logo.png")}}" alt="">JetHotel.online</a></h1>
            </div>
            <div class="flag">
                <span>USD</span>
                <span>Douala</span>
            </div>
            <ul class="nav-links">
                <li><a href="{{ route('home') }}">visitez notre site</a></li>
                <li><a href="{{ route('blog') }}">Blog</a></li>
            </ul>
        </nav>
    </header><!-- Main Section -->
    <section class="hero">
        <div class="hero-content">
            <h1 class="sevillana-regular">Réservez l'hôtel de vos rêves</h1>
            <div class="div-form">
                <form class="rserve-form" action="{{route('reservation.send')}}" methode="POST">
                    @method('post')
                    @csrf
                    <div class="form-container">
                        <div class="date">
                            <div class="rserve-input"><span>du</span><input type="date" name="date_entree" value="2015-06-09" id="date_e" placeholder="Date d'arrivée" title="Date d'arrivée" arial-label="Ou allez vous"></div>
                            <div class="rserve-input"><span>au</span><input type="date" placeholder="" name="date_sortie" title="Date de départ" value="2015-06-14" ></div>
                        </div>
                        <input type="text" name="pays_provenance" placeholder="pays de provenance" class="rserve-input">
                        <input type="text" name="email" placeholder="votre email" class="rserve-input">
                        <input type="text" name="nom" placeholder="votre nom" class="rserve-input">
                        <input type="text" name="prenom" placeholder="votre prénom" class="rserve-input">
                        <input type="number" name="telephone" placeholder="téléphone" class="rserve-input">
                        <input type="text" name="voiturier" placeholder="voiturier ?" class="rserve-input">
                        <button id="select-room" type="button">selectionnez les chambres</button>
                        <div class="number">
                            <input type="number" name="chambre">
                        </div>
                        <div class="select-room">

                            <!-- 1e methode ave js et l'incrementation -->
                            <!-- <ul style="list-style: none;padding: 50px;position: relative;">
                                <li class="chambre1" value="1"><span>+</span><span class="n1"></span> Haut standing :télé Clim wifi baignoire 62€ <span>-</span></li>
                                <li class="chambre2" value="1"><span>+</span><span class="n2"></span> Chambre familiale : 2 lits , télé, wifi  77€ <span>-</span></li>
                                <li class="chambre3" value="1"><span>+</span><span class="n3"></span> Confort: télé Clim wifi petit déjeuner baignoire 108€ <span>-</span></li>
                                <li class="chambre4" value="1"><span>+</span><span class="n4"></span> Suite junior : télé Clim wifi baignoire salon petit déjeuné 170€ <span>-</span></li>
                                <span id="closer">fermer</span>
                                <div style="display: flex;align-items: end;justify-content: center;">
                                    <span class="aide">+ pour ajouter</span>
                                    <span class="aide">- pour retirer</span>
                                </div>
                            </ul> -->

                            <div class="second-method" style="position: relative;">

                                <div>
                                    <input type="checkbox" name="" id="">
                                    <label for="">Haut standing :télé Clim wifi baignoire 62€ </label>
                                    <input type="number" placeholder="nombre de chambre">
                                </div>
                                <div>
                                    <input type="checkbox" name="" id="">
                                    <label for="">Haut standing :télé Clim wifi baignoire 62€ </label>
                                    <input type="number" placeholder="nombre de chambre">
                                </div>
                                <div>
                                    <input type="checkbox" name="" id="">
                                    <label for="">Haut standing :télé Clim wifi baignoire 62€ </label>
                                    <input type="number" placeholder="nombre de chambre">
                                </div>
                                <div>
                                    <input type="checkbox" name="" id="">
                                    <label for="">Haut standing :télé Clim wifi baignoire 62€ </label>
                                    <input type="number" placeholder="nombre de chambre">
                                </div>

                                <div>
                                    <p>
                                        selectionnez les chambres que vous souhaitez <br>et entre le nombre de chambres de ce type
                                    </p>
                                </div>
                                <span id="closer">fermer</span>
                            </div>

                        </div>
                    </div>


                    <button type="submit">reservez maintenant</button>
                </form>
            </div>
        </div>
    </section>



        <!-- Footer -->
    <footer>
        <p>&copy; 2025 JetHotel - Tous droits réservés</p>
    </footer>
    <script src="{{asset("js/input.js")}}"></script>
</body>
</html>
