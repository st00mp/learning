<?php

// Sachant qu’on introduit, pour chacun des 50 représentants d’une société, son nom, son chiffre de
// vente, et le nombre de kilomètres parcourus, écrivez le diagramme d’action qui affiche, pour
// chacun d’entre eux, nom et prime reçue.
// La prime se calcule en respectant les règles suivantes :
// - Si le chiffre de ventes dépasse 20 000 €, le représentant reçoit 10% de ce dernier ; entre
// 5000 € et 20 000 € inclus, il reçoit 5%
// - Si le nombre de kilomètres parcourus est supérieur ou égal à 1 000, il reçoit 150€ ; sinon, s’il
// a malgré tout parcouru plus de 500 kilomètres, il reçoit 100€.
// - La part due au kilométrage ne sera versée que si le chiffre des ventes dépasse 10 000€.

// IN
// $nom; $cv; $nbKm; 
// OUT 
// $nom; $prime;
// To create

function calculerPrime($cv, $nbKm){
    $prime = 0;

    if ($cv >= 5000 && $cv <= 20000){
        $prime = $cv * 0.05;
    } elseif ($cv >= 20000){
        $prime = $cv * 0.10;
    }
    
    if ($cv > 10000){
        if ($nbKm >= 1000){
            $prime += 150;
        } else if ($nbKm > 500 ){
            $prime += 100;
        }
    }  
    return $prime;
}

$tests = [
    ["nom" => "Durand", "cv" => 100000, "nbKm" => 1500],
    ["nom" => "José", "cv" => 5000, "nbKm" => 700],
    ["nom" => "Martin", "cv" => 12000, "nbKm" => 400],
    ["nom" => "Bernard", "cv" => 8000, "nbKm" => 1200],
    ["nom" => "Dupont", "cv" => 25000, "nbKm" => 300],
    ["nom" => "Simon", "cv" => 7000, "nbKm" => 900],
    ["nom" => "Paul", "cv" => 30000, "nbKm" => 1500],
    ["nom" => "Henry", "cv" => 4500, "nbKm" => 500],
    ["nom" => "Lucas", "cv" => 15000, "nbKm" => 1000],
    ["nom" => "Lemoine", "cv" => 6000, "nbKm" => 800],
    ["nom" => "Morel", "cv" => 18000, "nbKm" => 1300],
    ["nom" => "Roche", "cv" => 2000, "nbKm" => 600],
    ["nom" => "Petit", "cv" => 23000, "nbKm" => 1000],
    ["nom" => "Noel", "cv" => 4000, "nbKm" => 400],
    ["nom" => "Gauthier", "cv" => 11000, "nbKm" => 1200],
    ["nom" => "Benoit", "cv" => 14000, "nbKm" => 500],
    ["nom" => "Lambert", "cv" => 10000, "nbKm" => 900],
    ["nom" => "Fournier", "cv" => 32000, "nbKm" => 1600],
    ["nom" => "Mercier", "cv" => 7000, "nbKm" => 700],
    ["nom" => "Girard", "cv" => 500, "nbKm" => 300],
];

for ($i = 0; $i < count($tests); $i++) {
    $nom = $tests[$i]["nom"];
    $cv = $tests[$i]["cv"];
    $nbKm = $tests[$i]["nbKm"];
    $prime = calculerPrime($cv, $nbKm);

    echo $i . " " . $nom . " --- à gagné une prime de " . $prime . " €<br>";

}
