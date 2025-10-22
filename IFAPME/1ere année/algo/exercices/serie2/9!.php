<?php

// Dans une bibliothèque, toute personne qui arrive doit présenter sa carte de membre.
// Si la personne n’en possède pas encore, elle en demande une.
// Si on introduit, pour chaque personne, son nom et un message « ancien » ou « nouveau »,
// écrivez le diagramme d’actions qui affiche le pourcentage d’anciens et de nouveaux lecteurs par
// rapport au nombre total de clients de la journée.

// IN
// $nom; $message; 
// OUT
// $totalClientsJournée; $pourcentageA; $pourcentageN; 
// To create

$clients = [];
$totalClients = rand(100,300);

for ($i = 1; $i <= $totalClients; $i++){
    $clients[] = [
        "nom" => "Client $i",
        "message" => rand(0,1) ? "ancien" : "nouveau"
    ];
}

$nbNouveau = 0;
$totalClientsJournée = 0;

foreach ($clients as $client){
    if ($client["message"] == "nouveau"){;
    $nbNouveau++;
    }

$totalClientsJournée++;  

}

$pourcentageN = ($nbNouveau / $totalClientsJournée) * 100;
$pourcentageA = 100 - $pourcentageN;

echo "Il y à eu $totalClientsJournée clients dans la journée, dont " . round($pourcentageN) . "% de nouveaux et " . round($pourcentageA) . "% d'anciens";