<!-- Questions 6 - 8 -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire</title>
</head>
<body>
 <form method="POST">
    <label for="nom">Votre nom:</label>
    <input type="text" id="nom" name="nom">
    <br>

    <label for="age">Votre âge:</label>
    <input type="number" id="age" name="age">
    <br>

    <label for="couleur">Votre couleur préférée:</label>
    <select id="couleur" name="couleur">
        <option value="bleu">Bleu</option>
        <option value="vert">Vert</option>
        <option value="rouge">Rouge</option>
    </select>
    <br>

    <button type="submit">Envoyer!</button>
</form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // pour se sécuriser contre les attaques XSS
        $nom = htmlspecialchars($_POST['nom']);
        $age = htmlspecialchars($_POST['age']);
        $couleur = htmlspecialchars($_POST['couleur']);

        echo "Bienvenue, $nom! Vous avez $age ans, et votre couleur préférée est $couleur!";
    }
    ?>


</body>
</html>
