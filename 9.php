<!--Question 9-->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire 2</title>
</head>
<body>
    <form method="GET">
        <label for="n1">Nombre 1:</label>
        <input type="number" name="n1"><br>

        <label for="n2">Nombre 2:</label>
        <input type="number" name="n2"><br>
        
        <button type="submit">Calculer la somme!</button>
    </form>

<?php
if ($_GET) {
    $n1 = intval($_GET['n1']);
    $n2 = intval($_GET['n2']);
    echo "Somme: " . ($n1 + $n2);
}
?>

</body>
</html>