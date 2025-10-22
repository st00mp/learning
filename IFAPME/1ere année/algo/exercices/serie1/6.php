<?php

// Sachant que l’on introduit deux nombres NbUn et NbDeux dont l’un au moins n’est pas
// nul, on vous demande de concevoir le diagramme d’action qui, sans effectuer le produit,
// permettra l’affichage du message « produit négatif », « produit positif » ou « produit
// nul » suivant que le produit est effectivement négatif, positif ou nul.

//IN
// $nbUn; $nbDeux;
//OUT
// $message « produit négatif », « produit positif » ou « produit nul »)

//To define


$tests = [
    ["NbUn" => 5, "NbDeux" => 3],  // Produit positif
    ["NbUn" => -4, "NbDeux" => -6], // Produit positif
    ["NbUn" => 7, "NbDeux" => -2],  // Produit négatif
    ["NbUn" => -5, "NbDeux" => 10], // Produit négatif
    ["NbUn" => 0, "NbDeux" => 8],   // Produit nul
    ["NbUn" => -7, "NbDeux" => 0],  // Produit nul
];

function definirTypeNb($nbUn, $nbDeux) {
    $message = "Le produit de " . $nbUn . " et " . $nbDeux . " est";

    if ($nbUn == 0 || $nbDeux == 0){
        $message .= " nul <br>";
    } elseif (($nbUn < 0 && $nbDeux < 0) || $nbUn > 0 && $nbDeux > 0){
        $message .= " positif <br>";
    } else {
        $message .= " négatif <br>";
    }

    echo $message;
}

foreach ($tests as $test){
    definirTypeNb($test["NbUn"], $test["NbDeux"]);
}
