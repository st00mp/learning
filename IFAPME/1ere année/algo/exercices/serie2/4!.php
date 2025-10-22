<?php

// Soient deux nombres entiers a et b. Ecrire le diagramme d’actions qui calcule le produit a * b par
// additions successives.

// IN
// $a;
// $b;
// OUT

// To create

function produitParAdditions($a, $b)
{

    $produit = 0;

    // Boucle qui répète b fois (abs(); = valeur absolue)
    for ($i = 0; $i < abs($b); $i++) {
        $produit += $a;
    }

    if ($b < 0) {
        $produit = -$produit;
    }

    return $produit;
}

echo produitParAdditions(3, 4) . "<br>"; // 12
echo produitParAdditions(3, -4) . "<br>"; // -12
echo produitParAdditions(-3, 4) . "<br>"; // -12
echo produitParAdditions(0, 4) . "<br>"; // 0

