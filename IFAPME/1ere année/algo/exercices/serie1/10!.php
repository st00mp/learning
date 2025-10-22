<?php

// Certains clients ne paient pas toujours automatiquement les factures qu’ils reçoivent.
// On introduit le nom d’un client en retard de paiement, le nombre de jours écoulés depuis
// la date de facturation, ainsi qu’une indication « bon » ou « ».
// On demande d’afficher l’action à entreprendre vis-à-vis de ce client en respectant les
// règles suivantes :

// Nombre de jours de retard               Action
// Plus de 90                              Recours en justice
// Entre 61 et 90                          Lettre aux parents
// Entre 31 et 60                          Coup de téléphone
// Moins de 31                             Aucune

// Si le client est « bon », le « recours en justice » sera remplacé par une seconde lettre de
// rappel.

// IN
// $nom; $nbJours; $indication; 
// OUT 
// action à entreprendre
// To create

function definirAction($nom, $nbJours, $indication){
    if ($nbJours < 31){
        echo $nom . " : Aucune action à entreprendre<br>";
    
    // <= 60, car les cas précédents (par exemple, < 31) éliminent automatiquement les autres possibilités.
    } elseif ($nbJours <= 60){
        echo $nom . " : Coup de téléphone<br>";
    } elseif ($nbJours <=90){
        echo $nom . " : Lettre aux parents<br>";
    } else {
        if ($indication == "bon"){
            echo $nom . " : Seconde lettre de rappel<br>";
        } else {
            echo $nom . " : Recours en justice<br>";
        }
    }
}

// Tableau de tests
$tests = [
    ["nom" => "José", "nbJours" => 100, "indication" => "bon"],
    ["nom" => "Maria", "nbJours" => 25, "indication" => "mauvais"],
    ["nom" => "Jean", "nbJours" => 45, "indication" => "bon"],
    ["nom" => "Luc", "nbJours" => 75, "indication" => "mauvais"],
    ["nom" => "Anna", "nbJours" => 120, "indication" => "mauvais"],
];

foreach ($tests as $test){
    definirAction($test["nom"], $test["nbJours"], $test["indication"]);
}