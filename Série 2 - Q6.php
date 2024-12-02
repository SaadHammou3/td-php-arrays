<?php
    $villes = ['Seville' => 32, 'Oslo' => 16, 'Londres' => 21];

    arsort($villes);
    
    $plusChaud = key($villes);
    
    echo "La ville la plus chaude est $plusChaud avec {$villes[$plusChaud]}°C.";
?>