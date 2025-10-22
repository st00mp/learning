<?php

// On introduit 3 nombres distincts (Nb1, Nb2 et Nb3). Afficher le plus petit d’entre eux.

// IN
$nb1; $nb2; $nb3;
// OUT
// afficher le plus petit
// To create

function plusPetit($nb1, $nb2, $nb3){
    if ($nb1 < $nb2 && $nb1 < $nb3){;
        echo $nb1 . " est le plus petit<br>";

    } elseif ($nb2 < $nb1 && $nb2 < $nb3){
        echo $nb2 . " est le plus petit<br>";

    } else {
        echo $nb3 . " est le plus petit<br>";
    }
}

$tests = [
    ["nb1" => 5, "nb2" => 10, "nb3" => 2],  // Plus petit = 2
    ["nb1" => -3, "nb2" => 0, "nb3" => 1], // Plus petit = -3
    ["nb1" => 8, "nb2" => 3, "nb3" => 6],  // Plus petit = 3
    ["nb1" => 12, "nb2" => 15, "nb3" => 10], // Plus petit = 10
    ["nb1" => 100, "nb2" => 50, "nb3" => 75], // Plus petit = 50
];

foreach ($tests as $test){
    plusPetit($test["nb1"], $test["nb2"], $test["nb3"]);
}

// Optimisation avec fonction PHP 

function afficherPlusPetit($nb1, $nb2, $nb3) {
    $plusPetit = min($nb1, $nb2, $nb3);
    echo "Le plus petit nombre est : $plusPetit<br>";
}