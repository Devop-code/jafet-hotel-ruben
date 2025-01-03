<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Facture de Réservation</title>
    <style>
        body {
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .container {
            background-color: #ffffff;
            margin: 50px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
        }
        .details ul {
            list-style-type: none;
            padding: 0;
        }
        .details li {
            background-color: #f9f9f9;
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 4px;
        }
        .details li span {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Facture de reservation chez Jet Hotels</h1>
        <p class="text-center">Merci pour votre réservation. Veuillez trouver ci-dessous les détails de votre réservation :</p>
        <div class="details">
            <ul class="list-group">
                <li class="list-group-item"><span>Nom :</span> {{ $data['nom'] }}</li>
                <li class="list-group-item"><span>Email :</span> {{ $data['email'] }}</li>
                <li class="list-group-item"><span>Profession :</span> {{ $data['profession'] }}</li>
                <li class="list-group-item"><span>Date d'entrée :</span> {{ $data['date_entree'] }}</li>
                <li class="list-group-item"><span>Date de sortie :</span> {{ $data['date_sortie'] }}</li>
                <li class="list-group-item"><span>Type de chambre :</span> {{ $data['type_chambre'] }}</li>
                <li class="list-group-item"><span>Voiturier :</span> {{ $data['voiturier'] }}</li>
                <li class="list-group-item"><span>Prix :</span> 
                    @if($data['type_chambre'] == 'standart')
                        44€
                    @elseif($data['type_chambre'] == 'haut-standing')
                        62€
                    @elseif($data['type_chambre'] == 'confort')
                        108€
                    @elseif($data['type_chambre'] == 'suite-junior')
                        170€
                    @endif
                </li>
            </ul>
        </div>
    </div>
</body>
</html>