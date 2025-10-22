<?php

// Amortissement dégressif fiscal
// Les données sont identiques à celles de l’exercice précédent mais la méthode de calcul de l’amortissement
// est différente.
// On procède comme suit :
// - On calcule le taux d’amortissement : 𝑑𝑢𝑟é𝑒/100
// - On calcule l’amortissement linéaire en appliquant le taux d’amortissement à la valeur d’acquisition
// - On double le taux
// - On calcule l’amortissement dégressif d’une année en appliquant le taux doublé à la valeur restant à
// amortir
// - On compare les deux amortissements et on amortit avec la valeur la plus élevée.

// Exemple :
// Libellé : machine
// Valeur : 2 000,00 €
// Durée : 10 ans
//
//          
// Année    Reste à amortir    Amortis. annuel    Amortis. cumulé    Valeur Résiduelle
// 1        2000,00 €          400,00 €           400,00 €           1600,00 €
// 2        1600,00 €          320,00 €           720,00 €           1280,00 €
// 3        1280,00 €          256,00 €           976,00 €           1024,00 €
// 4        1024,00 €          204,80 €           1180,80 €          819,20 €
// 5        819,20 €           200,00 €           1380,80 €          619,20 €
// 6        619,20 €           200,00 €           1580,80 €          419,20 €
// 7        419,20 €           200,00 €           1780,80 €          219,20 €
// 8        219,20 €           200,00 €           1980,80 €          19,20 €
// 9        19,20 €            19,20 €            2000,00 €          0,00 €
// 10       0,00 €             0,00 €             2000,00 €          0,00 €


// IN
$libellé;          // Libellé de l'immobilisation
$valAcqui;         // Valeur d'acquisition
$dureeVie;         // Durée de vie de l'immobilisation en années

// OUT
// Par année
$annee;            // Année en cours
$restAmt;          // Reste à amortir
$amtAnnuel;        // Amortissement annuel
$amtCumul;         // Amortissement cumulé
$valRes;           // Valeur résiduelle

// To create
$txLin;            // Taux d'amortissement linéaire
$txDeg;            // Taux d'amortissement dégressif
$amtLin;           // Montant de l'amortissement linéaire
$amtDeg;           // Montant de l'amortissement dégressif

// Données d'entrée
$libelle = "Machine";
$valAcqui = 2000;
$dureeVie = 10;

// 1. Taux linéaire (en %)
$txLin = (1 / $dureeVie);  // 10 % pour une durée de 10 ans
// 2. Amortissement linéaire annuel (en €)
$amtLin = $valAcqui * $txLin;  // ex. 2000 * 0.10 = 200 €
// 3. Taux dégressif (en %)
$txDeg = $txLin * 2;               // ex. 20 % pour l'exemple

// Variables de suivi
$resteAamortir = $valAcqui;  // Au départ, il reste à amortir 100% de la valeur
$amortCumul = 0;             // Au début, aucun amortissement n’a été comptabilisé

// Affichage
echo "<h3>Libellé : $libelle</h3>";
echo "<p>Valeur d'acquisition : " . number_format($valAcqui, 2, ',', ' ') . " €</p>";
echo "<p>Durée d'utilisation : $dureeVie ans</p>";

echo "<table border='1' cellspacing='0' cellpadding='5' style='width: 80%; text-align: center; margin: auto;'>";
echo "<thead style='background-color: #f2f2f2;'>";
echo "<tr>";
echo "<th>Année</th>";
echo "<th>Reste à amortir</th>";
echo "<th>Amortis. annuel</th>";
echo "<th>Amortis. cumulé</th>";
echo "<th>Valeur Résiduelle</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

// Boucle sur chaque année
for ($annee = 1; $annee <= $dureeVie; $annee++) {
    // On mémorise le « reste à amortir » en début d’année (avant amortissement)
    $resteDebut = $resteAamortir;

    // 4a. Calcul de l’amortissement dégressif
    $amtDeg = $resteAamortir * $txDeg / 100;

    // 4b. On choisit l’amortissement le plus élevé entre dégressif et linéaire
    //     (le linéaire est toujours calculé sur la valeur d’acquisition initiale)
    $amtAnnuel = max($amtDeg, $amtLin);

    // 4c. On ne peut pas amortir plus que le « reste à amortir »
    if ($amtAnnuel > $resteAamortir) {
        $amtAnnuel = $resteAamortir;
    }

    // Mise à jour du cumul et du reste
    $amortCumul  += $amtAnnuel;
    $resteAamortir -= $amtAnnuel;

    // Affichage de la ligne
    echo "<tr>";
    echo "<td>$annee</td>";
    // Le « reste à amortir » affiché est celui du début d’année
    echo "<td>" . number_format($resteDebut, 2, ',', ' ') . " €</td>";
    echo "<td>" . number_format($amtAnnuel, 2, ',', ' ') . " €</td>";
    echo "<td>" . number_format($amortCumul, 2, ',', ' ') . " €</td>";
    // La valeur résiduelle est le nouveau « reste à amortir » après amortissement
    echo "<td>" . number_format($resteAamortir, 2, ',', ' ') . " €</td>";
    echo "</tr>";
}

echo "</tbody>";
echo "</table>";
