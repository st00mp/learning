<?php

/*
6. Sachant que l’on introduit les 12 chiffres d’affaire mensuels d’une entreprise,
affichez le tableau des écarts de chaque mois par rapport au précédent.

+-------+-------------+---------+
| Mois  | C.A. (€)    | Ecart   |
+-------+-------------+---------+
|   1   | 1 000 000   |         |
|   2   | 1 050 000   |    ?    |
|   3   |   990 000   |    ?    |
|   4   | 1 020 000   |    ?    |
|   5   | 1 010 000   |    ?    |
|   6   | 1 030 000   |    ?    |
|   7   | 1 000 000   |    ?    |
|   8   | 1 050 000   |    ?    |
|   9   | 1 020 000   |    ?    |
|  10   | 1 080 000   |    ?    |
|  11   | 1 050 000   |    ?    |
|  12   | 1 100 000   |    ?    |
+-------+-------------+---------+
*/


// Tableau des chiffres d'affaires par mois
$ca = [
    1 => 1000000,
    2 => 1050000,
    3 => 990000,
    4 => 1020000,
    5 => 1010000,
    6 => 1030000,
    7 => 1000000,
    8 => 1050000,
    9 => 1020000,
    10 => 1080000,
    11 => 1050000,
    12 => 1100000,
];


echo "+-------+-------------+---------+\n";
echo "| Mois  | C.A. (€)    | Ecart   |\n";
echo "+-------+-------------+---------+\n";

for ($mois = 1; $mois <= 12; $mois++){
    $currentCa = $ca[$mois];
    if ($mois > 1){
    $ecart = $ca[$mois] - $ca[$mois - 1];
    } else {
        $ecart = "";
    }

    // Affichage du tableau
    printf("| %5d | %11d | %7s |\n", $mois, $currentCa, ($ecart === "" ? "" : sprintf("%+d", $ecart)));
}
echo "+-------+-------------+---------+\n";