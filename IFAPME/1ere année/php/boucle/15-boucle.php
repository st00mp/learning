<?php

// Exercice 15 : Affichez ceci :
// 20 19 18
// 17 16 15
// 14 13 12
// 11 10 9
// 8 7 6
// 5 4 3
// 2 1


$compteur = 20; // Nombre de départ
$parLigne = 0;  // Compteur pour gérer les nombres affichés par ligne

while ($compteur > 0) {
    echo $compteur . " "; // Affiche le nombre suivi d'un espace
    $compteur--;          // Décrémente le compteur
    $parLigne++;          // Incrémente le compteur de ligne

    // Si 3 nombres ont été affichés ou si c'est la fin, passer à la ligne suivante
    if ($parLigne == 3 || $compteur == 0) {
        echo "<br>";      // Saut de ligne
        $parLigne = 0;    // Réinitialiser le compteur de ligne
    }
}

