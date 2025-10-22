<?php

// On introduit le nom et l’heure d’arrivée de deux coureurs dans les variables Nom1, Heure1 pour le premier coureur, et Nom2, Heure2 pour le second. 
// Les heures sont données sous la forme HHMMSS (exemple : 120903 = 12h09m03s). Il faut :
// 	1.	Afficher le nom du coureur arrivé en premier.
// 	2.	Si les deux coureurs arrivent en même temps, afficher leurs deux noms suivis de « Ex aequo ».

//// IN
// nom1, heure1, nom2, heure2

//// OUT
// Le nom du courreur arrivé en premier
// En cas d'égalité, afficher nom1 et nom2 + le message ex-aequo

// To create

$nom1 = "Alice";
$heure1 = 120903;
$nom2 = "Bob";
$heure2 = 121005;

if ($heure1 < $heure2) {
    echo $nom1 . " à gagné !";
} elseif ($heure1 > $heure2) {
    echo $nom2 . " à gagné !";
} else {
    echo $nom1 . " et " . $nom2 . " sont arrivés ex-aequos !";
}