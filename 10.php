<form method="POST">
    Type de compte :
    <select name="type">
        <option value="admin">Administrateur</option>
        <option value="user">Utilisateur</option>
    </select>
    <button type="submit">Envoyer</button>
</form>
<?php
if ($_POST) {
    $type = htmlspecialchars($_POST['type']);
    echo $type === 'admin' ? "Bienvenue, administrateur !" : "Bienvenue, utilisateur simple !";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire 3</title>
</head>
<body>
    <form method="POST">
    <label for="type">Séléctionnez le type d'utilisateur:</label>
    <select name="type">
        <option value="admin">Administrateur</option>
        <option value="util">Utilisateur</option>
    </select>
    <button type="submit">Continuer</button>
    </form>

    <?php
    if ($_POST) {
    $type = htmlspecialchars($_POST['type']);
    //ternaire
    echo $type === 'admin' ? "Bienvenue, administrateur!" : "Bienvenue, utilisateur simple!";
    }
    ?>

</body>
</html>