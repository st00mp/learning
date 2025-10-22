<?php

// Exercice 14 : Affichez ceci :
// 0000000
// 1000000
// 2200000
// 3330000
// 4444000
// 5555500
// 6666660
// 7777777
// Vous avez 2 variables : $lignes = 8; $colonnes = 6; et une ou plusieurs boucles for.(et donc les variables
// internes à celles ci).

// correction variables
$lignes = 7; 
$colonnes = 7; 

for ($i = -1; $i < $lignes; $i++) { // Boucle pour chaque ligne
    for ($j = 0; $j < $colonnes; $j++) { // Boucle pour chaque colonne
        if ($j < $i + 1) {
            echo $i +1; // Affiche le chiffre courant
        } else {
            echo 0; // Complète avec des zéros
        }
    }
    echo "<br>"; // Passe à la ligne suivante
}

?>