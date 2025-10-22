<?php

// Exercice 9 : Choisissez un nombre de trois chiffres. Effectuez ensuite des tirages aléatoires, et comptez
// le nombre de tirages nécessaire pour obtenir le nombre initial. Arrêtez les tirages, et affichez le nombre
// de coups réalisés. Réalisez ce script d’abord avec l’instruction while puis avec l’instruction for.


$winningNumber = rand(100, 999);
$nbTirage = 0; // Compteur de tentatives

for ($i = 100; $i <= 999 && $i != $winningNumber; $i++) {
    $nbTirage++;
    } 
echo "Le nombre gagant est " . $i . ". Il à été trouvé en " . $nbTirage . " fois";

