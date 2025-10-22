<?php

// Amortissement linéaire.
// Pour chaque immobilisation d’une entreprise, on introduit le libellé, la valeur d’acquisition et la
// durée de vie.
// On demande d’afficher le tableau d’amortissement linéaire de chaque immobilisation.

// Libellé : machine
// Valeur : 1 000.00 €
// Durée : 5 ans
// NB : Pour une valeur d’acquisition de 1 000,00 € en 3 ans, les calculs doivent aussi être corrects.
//
// Année    Valeur d’acquisition    Amortis. annuel    Amortis. cumulé    Valeur Résiduelle
// 1        1 000,00 €              200,00 €           200,00 €           800,00 €
// 2        1 000,00 €              200,00 €           400,00 €           600,00 €
// 3        1 000,00 €              200,00 €           600,00 €           400,00 €
// 4        1 000,00 €              200,00 €           800,00 €           200,00 €
// 5        1 000,00 €              200,00 €           1 000,00 €         0,00 €

// IN
$libellé;
$valAcquisition;
$dureeVie;

// OUT
$amtAnnuel;
$amtCumul;
$valRes;
// To create

// 
$libellé = "Machine";
$valAcquisition = 300000;
$dureeVie = 6;
$amtCumul = 0;

echo "Libellé : " . $libellé . "<br>";

for ($i = 1; $i <= $dureeVie; $i++) {
    $annee = $i;
    $amtAnnuel = $valAcquisition / $dureeVie;
    $amtCumul += $amtAnnuel;
    $valRes = $valAcquisition - $amtCumul;
    echo "Année : " . $annee . " || Valeur d’acquisition : " . $valAcquisition . " || Amortis. annuel : " . $amtAnnuel . " || Amortis. cumulé : " . $amtCumul . " || Valeur Résiduelle : " . $valRes . "<br>";
}
