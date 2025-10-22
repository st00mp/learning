<?php

// Une entreprise souhaite informatiser le calcul des fiches de paie de son personnel. Pour
// chaque ouvrier, on dispose des informations suivantes : le nom, le nombre d’heures
// prestées durant la semaine et le taux horaire de l’ouvrier.
// Le régime de travail de l’entreprise est de 38 heures/Semaines ; les heures prestées au-
// delà sont des heures supplémentaires.
// Une fiche de paie reprend le nom de l’ouvrier, le salaire brut, le montant de la retenue
// ONSS, le salaire imposable, le montant du précompte professionnel et le salaire net.
// La procédure de calcul est la suivante :
// - Salaire brut = taux horaire X nombre d’heures prestées.
// - Le taux horaire est toutefois doublé pour les heures supplémentaires
// - La retenue ONSS est de 10% du salaire brut.
// - Le précompte professionnel se calcule sur le salaire imposable de la façon
// suivante :
// 0% sur la tranche inférieure ou égale à 120 €
// 10% sur la tranche supérieure à 120 € et jusqu’à 150 € inclus
// 20% sur la tranche supérieure à 150 € et jusqu’à 180 € inclus
// 25% au-delà de 180 €.
// - Salaire net = salaire imposable – précompte professionnel.
// On vous demande d’écrire le diagramme d’actions permettant de calculer et
// d’afficher les différents éléments figurant dans une fiche.

// IN
// $nom; $nbHeuresSem; $tauxHorraire; 
// OUT
// To create

function ficheDePaie($nom, $nbHeuresSem, $tauxHorraire){
    $retenueONSS = 0 ;
    $salaireImposable = 0 ;
    $montantPP = 0 ;
    $salaireNet = 0 ;
    
    if ($nbHeuresSem > 38){
        $heuresSuppMinutes = ($nbHeuresSem - 38) * 60 ;
        $heureSuppMontant = ($heuresSuppMinutes/60) * $tauxHorraire * 2;
        $salaireBrut = (38 * $tauxHorraire) + $heureSuppMontant;
        
    } else {
        $salaireBrut = $nbHeuresSem * $tauxHorraire;
    }

    $retenueONSS = $salaireBrut * 0.10;
    $salaireImposable = $salaireBrut - $retenueONSS;

    if ($salaireImposable <= 120 ) {
        $montantPP = 0;
    } elseif ($salaireImposable <= 150){
        $montantPP = ($salaireImposable - 120) * 0.10;
    } elseif ($salaireImposable <= 180){
        $montantPP = ((30) * 0.10) + (($salaireImposable - 150) * 0.20);
    } else {
        $montantPP = ((30) * 0.10) + ((30) * 0.20) + (($salaireImposable - 180) * 0.25);
    }

    $salaireNet = $salaireImposable - $montantPP;

    echo $nom . " --- Salaire brut = " . number_format($salaireBrut, 2) . " € --- Retenue ONSS = " . number_format($retenueONSS, 2) . "€ --- Salaire Imposable = " . number_format($salaireImposable, 2) . " € --- Précompte Pro = " . number_format($montantPP, 2) . " € --- Salaire Net = " . number_format($salaireNet, 2) . "€ <br>";
}

$tests = [
    ["nom" => "Alice", "nbHeuresSem" => 35.00, "tauxHoraire" => 15.00], // Pas d'heures supp
    ["nom" => "Bob", "nbHeuresSem" => 40.50, "tauxHoraire" => 12.00],  // 2h30min supp
    ["nom" => "Charlie", "nbHeuresSem" => 38.25, "tauxHoraire" => 20.00], // 15min supp
    ["nom" => "Diane", "nbHeuresSem" => 45.75, "tauxHoraire" => 18.00], // 7h45min supp
    ["nom" => "Eve", "nbHeuresSem" => 50.00, "tauxHoraire" => 10.00],   // Beaucoup d'heures supp
    ["nom" => "Frank", "nbHeuresSem" => 39.50, "tauxHoraire" => 25.00], // 1h30min supp
    ["nom" => "Grace", "nbHeuresSem" => 37.75, "tauxHoraire" => 22.00], // Juste avant heures supp
];

foreach ($tests as $test) {
    ficheDePaie($test["nom"], $test["nbHeuresSem"], $test["tauxHoraire"]);
}


