<?php

// Evaluation janvier:
// 1. On introduit 5 nombres. Ecrire le diagramme d’action qui affiche ces 5 nombres dans l’ordre
// inverse.


// Initialisation du tableau qui contiendra les 5 nombres
$tabNb = [];

// Saisie des 5 nombres
for ($i = 0; $i < 5; $i++) {
    echo "Entrez le nombre #" . ($i + 1) . " : ";
    $nb = intval(fgets(STDIN));  // Lire et convertir le nombre en entier
    $tabNb[$i] = $nb;            // Stocker le nombre dans le tableau
}

// Affichage des nombres dans l'ordre inverse
echo "\nAffichage des nombres en ordre inverse :\n";
for ($i = 4; $i >= 0; $i--) {
    echo $tabNb[$i] . "\n";      // Afficher chaque nombre
}
