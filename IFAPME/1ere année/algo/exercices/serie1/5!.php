<?php

// Une entreprise souhaite offrir un cadeau à ses clients. Les différents cadeaux offerts
// sont les suivants :
// - Une montre si le client a acheté pour plus de 375€
// - Un agenda si le client a acheté pour moins de 250€
// - Un parapluie si le montant de achats est compris entre 250 et 375€
// En outre, l’entreprise a décidé d’octroyer un billet de tombola par tranche d’achat de 15€
// à partir de 75€.
// On vous demande d’écrire le diagramme d’action permettant d’afficher le cadeau et, le
// cas échéant, le nombre de billets de tombola à offrir à un client sachant que l’on introduit
// le montant des achats effectués par ce client.

// IN
$nom; $montantAchats;
// OUT
$cadeau; $nbTickets;
// To create

$clients = [
    ["nom" => "Dupont", "montantAchats" => 400], // Montre + 26 billets
    ["nom" => "Durand", "montantAchats" => 300], // Parapluie + 20 billets
    ["nom" => "Martin", "montantAchats" => 200], // Agenda + 13 billets
    ["nom" => "Leroy", "montantAchats" => 500], // Montre + 33 billets
    ["nom" => "Bernard", "montantAchats" => 100], // Agenda + 6 billets
    ["nom" => "Moreau", "montantAchats" => 50], // Agenda + Aucun billet
    ["nom" => "Gauthier", "montantAchats" => 375], // Parapluie + 25 billets
    ["nom" => "Lambert", "montantAchats" => 600], // Montre + 40 billets
    ["nom" => "Roux", "montantAchats" => 250], // Parapluie + 16 billets
    ["nom" => "Blanc", "montantAchats" => 74], // Agenda + Aucun billet
];


function calculerCadeaux($nom, $montantAchats){

    $cadeau = "";
    $nbTickets = 0;

    if ($montantAchats < 250){
        $cadeau = "agenda";
    } else if ($montantAchats >= 250 && $montantAchats <= 375){
        $cadeau = "parapluie";
    } else {
        $cadeau = "montre";
    }

    if ($montantAchats > 75){
        $restant = $montantAchats - 75;
        $nbTickets = ($restant - ($restant % 15)) / 15;

        }

    echo $nom . " --- Montant : " . $montantAchats . " Euros --- Cadeau : " . $cadeau . " --- Billets : " . $nbTickets . "<br>";
}

foreach ($clients as $client){
    calculerCadeaux($client["nom"], $client["montantAchats"]);
}




