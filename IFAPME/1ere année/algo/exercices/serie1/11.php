<?php

// L’employeur doit retenir un acompte mensuel sur la rémunération déclarée à l’ONSS.
// Cette retenue se calcule comme suit :

/*
Rémunération                     |                 --- Retenue mensuelle par ménage ---
                                 | Ménage à 1 revenu ou isolé              | Ménage à 2 revenus
---------------------------------------------------------------------------------------------------
Jusqu’à 1095,07 €                | 0                                       | 0
---------------------------------------------------------------------------------------------------
De 1095,08 à 1945,17 €           | 0                                       | 9,3 €
---------------------------------------------------------------------------------------------------
De 1945,18 à 2190,16 €           | 7,6 % du salaire – 147,84 €             | 7,6 % du salaire – 147,84 €
                                 |                                         | Avec un minimum de 9,3 €
---------------------------------------------------------------------------------------------------
De 2190,17 à 6028,65 €           | 1,1 % du salaire – 5,5 €                | 1,1 % du salaire – 5,5 €
                                 | Avec un maximum de 60,81 €              | Avec un maximum de 60,81 €
---------------------------------------------------------------------------------------------------
Au-delà de 6028,65 €             | 60,83 €                                | 51,64 €
*/

// On vous demande d’écrire le diagramme d’actions qui permet de calculer et d’afficher la
// valeur de la retenue mensuelle sachant que l’on introduit la rémunération et le type de
// ménage (1 ou 2).

// IN
// $remun; $menage1; $menage2;
// OUT 
// $retenueMensuelle;
// To create

function calculONSS($nom, $remun, $menage){

    $retenueMensuelle = 0;

    if ($remun <= 1095.07){
        $retenueMensuelle += 0;

    } elseif ($remun <= 1945.17){
        $retenueMensuelle = ($menage == "Ménage à 2 revenus") ? 9.3 : 0;
    } elseif ($remun <= 2190.16){
        $retenueMensuelle = ($remun * 0.076) - 147.84;
        if ($menage == "Ménage à 2 revenus" && $retenueMensuelle < 9.3) {
            $retenueMensuelle = 9.3;
        }
    } elseif ($remun <= 6028.65){
            $retenueMensuelle = ($remun * 0.011) - 5.5;
            if ($retenueMensuelle > 60.81){
                $retenueMensuelle = 60.81;
            }
    } else {
        $retenueMensuelle = ($menage == "Ménage à 1 revenu ou isolé") ? 60.83 : 51.64;
    }

    echo "$nom -- Salaire mensuel = " . number_format($remun, 2) . " € --- " . $menage .   " -- Retenue ONSS = " . number_format($retenueMensuelle, 2) . " €<br>";
}

$tests = [
    ["nom" => "Jean Dupont", "remun" => 1000, "menage" => "Ménage à 1 revenu ou isolé"], // Cas : Rémunération <= 1095,07 €, Retenue = 0 €
    ["nom" => "Marie Curie", "remun" => 1000, "menage" => "Ménage à 2 revenus"],        // Cas : Rémunération <= 1095,07 €, Retenue = 0 €
    ["nom" => "Paul Moreau", "remun" => 1500, "menage" => "Ménage à 1 revenu ou isolé"], // Cas : Rémunération entre 1095,08 € et 1945,17 €, Retenue = 0 €
    ["nom" => "Claire Martin", "remun" => 1500, "menage" => "Ménage à 2 revenus"],        // Cas : Rémunération entre 1095,08 € et 1945,17 €, Retenue = 9,3 €
    ["nom" => "Luc Lefèvre", "remun" => 2000, "menage" => "Ménage à 1 revenu ou isolé"], // Cas : Rémunération entre 1945,18 € et 2190,16 €, Calcul normal
    ["nom" => "Emma Dubois", "remun" => 2000, "menage" => "Ménage à 2 revenus"],        // Cas : Rémunération entre 1945,18 € et 2190,16 €, Minimum 9,3 €
    ["nom" => "Jacques Petit", "remun" => 2500, "menage" => "Ménage à 1 revenu ou isolé"], // Cas : Rémunération entre 2190,17 € et 6028,65 €, Calcul normal
    ["nom" => "Sophie Durant", "remun" => 2500, "menage" => "Ménage à 2 revenus"],        // Cas : Rémunération entre 2190,17 € et 6028,65 €, Calcul normal
    ["nom" => "Antoine Blanc", "remun" => 7000, "menage" => "Ménage à 1 revenu ou isolé"], // Cas : Rémunération > 6028,65 €, Retenue fixe = 60,83 €
    ["nom" => "Elise Brun", "remun" => 7000, "menage" => "Ménage à 2 revenus"],        // Cas : Rémunération > 6028,65 €, Retenue fixe = 51,64 €
    ["nom" => "Hugo Noël", "remun" => 1800, "menage" => "Ménage à 2 revenus"],        // Cas : Rémunération proche des limites, Vérification
    ["nom" => "Juliette Rousseau", "remun" => 6000, "menage" => "Ménage à 1 revenu ou isolé"], // Cas : Rémunération limite supérieure de la tranche, Calcul normal
    ["nom" => "Théo Lambert", "remun" => 6000, "menage" => "Ménage à 2 revenus"],        // Cas : Rémunération limite supérieure de la tranche, Calcul normal
    ["nom" => "Kate Moss", "remun" => 12000, "menage" => "Ménage à 1 revenu ou isolé"],        // Cas : Rémunération limite supérieure de la tranche, Calcul normal
    ["nom" => "Allan Turing", "remun" => 12000, "menage" => "Ménage à 2 revenus"],        // Cas : Rémunération limite supérieure de la tranche, Calcul normal

];

foreach ($tests as $test){
    calculONSS($test["nom"], $test["remun"], $test["menage"]);
}