<?php

// Ecrire le diagramme d’actions qui permet d’additionner les nombres pairs compris entre deux
// nombres entiers positifs a et b, inclus.
// NB : a et b ne sont pas nécessairement pairs.

// IN
// $a; $b; 
// OUT 
// $somme;
// To create
// $temp

function additionPairs($a, $b)
{
    if ($a > $b) {
        $temp = $a;
        $a = $b;
        $b = $temp;
    }

    $somme = 0;

    for ($i = $a; $i <= $b; $i++) {
        // La condition ajoute uniquement les nombres pairs à $somme.
        if ($i % 2 == 0) {
            $somme += $i;
        }
    }
    return $somme;
}

$tests = [
    ["a" => 3, "b" => 10], // Cas classique, avec des nombres pairs entre a et b
    ["a" => 5, "b" => 5],  // Cas où a et b sont égaux, impairs
    ["a" => 4, "b" => 4],  // Cas où a et b sont égaux, pairs
    ["a" => 10, "b" => 3], // Cas où a > b
    ["a" => 0, "b" => 0],  // Cas limite où a et b sont 0
    ["a" => 1, "b" => 2],  // Cas avec un seul nombre pair dans l'intervalle
    ["a" => 15, "b" => 25], // Intervalle sans aucun nombre pair
    ["a" => 2, "b" => 20],  // Tous les nombres de a à b sont pairs ou incluent des pairs
    ["a" => 0, "b" => 50],  // Large intervalle avec plusieurs pairs
    ["a" => 11, "b" => 20], // Début impair et fin pair
];

foreach ($tests as $test) {
    $a = $test["a"];
    $b = $test["b"];
    $somme = additionPairs($a, $b);
    echo "La somme des nombres pairs entre $a et $b est : " . additionPairs($a, $b) . "<br>";
}
