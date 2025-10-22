<?php

// Une entreprise a décidé d’octroyer une remise à ses bons clients en fonction du volume
// de leurs achats. Cette remise est calculée de la façon suivante :
// - 5% du montant des achats si le client a acheté pour 500€ au moins ;
// - 3% du montant des achats si celui-ci dépasse la valeur de 400€ sans toutefois
// atteindre la valeur de 500€
// Le client ayant acheté pour 400€ ou moins ne bénéficie d’aucune remise.
// On vous demande d’écrire le diagramme d’action permettant d’afficher le nom du client,
// le montant de ses achats, le montant de la remise accordée et le montant final sachant
// que l’on introduit le nom du client et le montant de ses achats.

// IN
$nom; $montantAchats; 

// OUT
$montantRemise; $montantFinal;

// To create
$remise;

$clients = [
    ["nom" => "Dupont", "montantAchats" => 600],
    ["nom" => "Durand", "montantAchats" => 450],
    ["nom" => "Martin", "montantAchats" => 300],
    ["nom" => "Leroy", "montantAchats" => 499],
    ["nom" => "Bernard", "montantAchats" => 505],
    ["nom" => "Moreau", "montantAchats" => 700],
    ["nom" => "Gauthier", "montantAchats" => 250],
    ["nom" => "Lambert", "montantAchats" => 401],
    ["nom" => "Roux", "montantAchats" => 520],
    ["nom" => "Blanc", "montantAchats" => 480]
];

$remise = 0;

function calculerMontantFinal($nom, $montantAchats) {
    if ($montantAchats > 400 && $montantAchats <= 500) {
        $remise = 0.03 * $montantAchats;

    } else if ($montantAchats > 500) {
        $remise = 0.05 * $montantAchats;
    } else ($remise = 0);

    $montantFinal = $montantAchats - $remise;
    echo $nom . " --- Montants achats " . $montantAchats . " Euros --- Remise : " . $remise . " Euros --- Montant final : " . $montantFinal . " Euros <br>";
}

foreach ($clients as $client){
    calculerMontantFinal($client["nom"], $client["montantAchats"]);
}