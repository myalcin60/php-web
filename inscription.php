<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>

<body>
    <h1>Page d'inscription</h1>
    <form action="utilisateur.php" method="get"></form>

    <fieldset>
        <div>
            <legend>Données de connexion</legend>
            <label for="username">Nom d'utilisatuer</label>
            <input type="text" id=username autocomplete="off">
        </div>
        <div>
            <label for="password">Mot de passe</label>
            <input type="password" id=password>
        </div>
    </fieldset>
    <div>
        <label for="age">Age</label>
        <input type="number" id=age min=0 max=150>
    </div>
    <div>
        <label for="ville">Ville</label>
        <select id="ville">
            <option selected hidden>Merci de choisir votre ville de résidence</option>
            <option value="Marseille">Marseille</option>
            <option value="Lyon">Lyon</option>
            <option value="Paris">Paris</option>
        </select>
    </div>
    <div>
        <label for="remarque">Remarque</label>
        <textarea id="remarque" cols=50 rows=5></textarea>
    </div>
    <div>
        <h2>Genre</h2>
        <input type="radio" name=genre>Homme
        <input type="radio" name=genre>Femme

    </div>
    <div>
        <h2>Sport préféré</h2>
        <input type="checkbox" name=sport>Football
        <input type="checkbox" name=sport>Handball
        <input type="checkbox" name="sport">Tenis

    </div>

    <div>
        <button>
            S'inscrire
        </button>
    </div>
    <!-- <div>
        <input type="text" placeholder="Votre nom d'utilisateur">
    </div>  -->
</body>

</html>