<?php

// Exercice 9 : Choisissez un nombre de trois chiffres. Effectuez ensuite des tirages aléatoires, et comptez
// le nombre de tirages nécessaire pour obtenir le nombre initial. Arrêtez les tirages, et affichez le nombre
// de coups réalisés. Réalisez ce script d’abord avec l’instruction while puis avec l’instruction for.



$winningNumber = rand(100, 999);
$randNumber = 0;
$tirages = [];
$nbTirage = 0;
$checkedNumbers = [];

while ($randNumber != $winningNumber) {
    $randNumber = rand(100, 999);

    if (!isset($checkedNumbers[$randNumber])) {
        $checkedNumbers[$randNumber] = true;
        $tirages[] = $randNumber;
        $nbTirage++;
    };
} 

// Afficher les résultats
echo "Nombre mystère est " . $winningNumber . " et a été trouvé en " . $nbTirage . " (" . count($tirages) . ") coups.<br>";

