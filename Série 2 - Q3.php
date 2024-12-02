<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>
    <form method="POST">
        <label for="email">Courriel:</label>
        <input type="email" name="email">
        <br>
        <label for="password">Mot de passe:</label>
        <input type="password" name="password">
        <br>
        <button type="submit">Se connecter</button>
    </form>

<?php
$utilisateurs = [
    'sh03@site.com' => 'abcd1234',
    'feralo05@site.es' => 'gp2engine',
];
if ($_POST) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (isset($utilisateurs[$email]) && $utilisateurs[$email] === $password) {
        echo "Connexion au compte $email réussie!";
    } else {
        echo "Le courriel ou mot de passe saisi(s) est incorrect!";
    }
}
?>

</body>
</html>