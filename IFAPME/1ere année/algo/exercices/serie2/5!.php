<?php

// Soient deux nombres entiers a et b. Ecrire le diagramme d’actions qui calcule a exposant b par
// multiplications successives.

// IN
$a; $b;
// OUT
$puissance;
// To create


// Entrées : a et b
$a = 2; // Exemple de base
$b = 3; // Exemple d'exposant

// Init
$puissance = 1;


// Calcul de la puissance par multiplications successives
for ($i = 0; $i < $b; $i++){
    $puissance *= $a;
}

echo "$a exposant $b = $puissance\n";