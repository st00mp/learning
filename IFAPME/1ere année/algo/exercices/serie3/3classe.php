<?php

// Sachant qu’un utilisateur introduit (dans un ordre quelconque) des numéros allant de 1 à 12, on
// vous demande d’écrire le diagramme d’actions qui permettra d’afficher après chaque numéro
// introduit, le libellé du mois correspondant (1 → Janvier, 2 → Février, …, 12 → Décembre)

// IN
$rand;
// OUT
$month;
$months;
// To create


function afficherMois($numeros)
{

    $mois = [
        1 => "Janvier",
        2 => "Février",
        3 => "Mars",
        4 => "Avril",
        5 => "Mai",
        6 => "Juin",
        7 => "Juillet",
        8 => "Août",
        9 => "Septembre",
        10 => "Octobre",
        11 => "Novembre",
        12 => "Décembre"
    ];

    foreach ($numeros as $numero) {
        if (isset($mois[$numero])) {
            echo $numero . "-> " . $mois[$numero] . PHP_EOL;
        } else {
            echo $numero . "-> Numéro invalide" . PHP_EOL;
        }
    }
}

$numeros = [1, 3, 7, 12, 15];
afficherMois($numeros);
