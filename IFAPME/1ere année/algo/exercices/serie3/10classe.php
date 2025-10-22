<?php

// Pour chaque client, on introduit son nom (NomCli) ainsi que le montant des achats effectués au
// cours des différents mois de l’année (dans un tableau TabMontMens).
// Ecrivez le DA qui fournit :
// o Pour chaque client : son nom et le libellé du mois au cours duquel il a acheté le plus
// o Le nom du meilleur client pour chacun des différents trimestres.

// IN
$nomCli;
$TabMontMens;

// OUT 
$nom;
$moisMax;
$vipTrim;

// To create

// INIT

$achatsTrimMax = 0;
$nom = "";
$vip = "";

foreach ($TabMontMens as $achatsMens) {

    $achatsMensMax = 0;

    if ($achatsMens > $achatsMensMax) {
        $achatsMensMax = $achatsMens;
    }

    echo $nom . $achatsMensMax;

    $achatsTrim1 = $TabMontMens[0] + $TabMontMens[1] + $TabMontMens[2];
    $achatsTrim2 = $TabMontMens[3] + $TabMontMens[4] + $TabMontMens[5];
    $achatsTrim3 = $TabMontMens[6] + $TabMontMens[7] + $TabMontMens[8];
    $achatsTrim4 = $TabMontMens[9] + $TabMontMens[10] + $TabMontMens[11];

    if ($achatsTrimMax < $achatsTrim1) {
        $achatsTrimMax = $achatsTrim1;
        $vipTrim1 = $nom;
    } elseif ($achatsTrimMax < $achatsTrim2) {
        $achatsTrimMax = $achatsTrim2;
        $vipTrim2 = $nom;
    } elseif ($achatsTrimMax < $achatsTrim3) {
        $achatsTrimMax = $achatsTrim3;
        $vipTrim3 = $nom;
    } elseif ($achatsTrimMax < $achatsTrim4) {
        $achatsTrimMax = $achatsTrim4;
        $vipTrim4 = $nom;
    }


    echo $achatsTrimMax . $vip;
}
