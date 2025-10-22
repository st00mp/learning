<?php

// Sachant qu’un utilisateur introduit (dans un ordre quelconque) des numéros allant de 1 à 12, on
// vous demande d’écrire le diagramme d’actions qui permettra d’afficher après chaque numéro
// introduit, le libellé du mois correspondant (1 → Janvier, 2 → Février, …, 12 → Décembre)

$tabMois = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];

//Obtenir le mois demandé par l'utilisateur
echo "Entrer le numéro correspondant au mois recherché : ";
$numRecherche = intval(fgets(STDIN));

while ($numRecherche != 0) {
    echo $tabMois[$numRecherche - 1] . "\n";

    echo "Entrer le numéro correspondant au mois recherché : ";
    // Demander un nouveau mois
    $numRecherche = intval(fgets(STDIN));
}
