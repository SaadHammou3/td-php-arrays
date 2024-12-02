<?php

// Questions 1 - 2
$etud = [
    'nom' => 'Alonso',
    'prénom' => 'Fernando',
    'matricule' => '0001'
];

// affichage des infos
echo "Nom: {$etud['nom']}<br>";
echo "Prénom: {$etud['prénom']}<br>";
echo "Matricule: {$etud['matricule']}<br>";

// defining and displaying note
$etud['note'] = 12;
echo "Note: {$etud['note']}<br>";


// Question 3
$produits = [
    'Colle' => 7.5,
    'Cahier grand format' => 12.5,
    'Crayons' => 11.0
];

foreach ($produits as $nom => $prix) {
    echo "$nom: $prix DH<br>";
}


// Question 4
$notes = [
    'John' => 10,
    'Arthur' => 12,
    'Franklin' => 19,
    'Michael' => 12,
    'Joel' => 18
];

$moy = array_sum($notes) / count($notes);
echo "La moyenne est $moy<br>";


// Questions 5
$pays = [
    'Espagne' => 48000000,
    'Portugal' => 10000000,
    'Icelande' => 393600 
];

// le tri
arsort($pays);

foreach ($pays as $nom => $pop) {
    echo "$nom: pop. $pop<br>";
}
?>



