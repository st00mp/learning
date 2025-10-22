<?php

// Une fonction avec return renvoie une valeur que tu peux stocker dans une variable
// ou réutiliser dans un autre calcul.

// La fonction ne dépend pas de variables globales. Elle fait son travail et “renvoie” le résultat.
// 	•	Avantage : évite de modifier des variables par accident.

// Tu peux utiliser le résultat immédiatement, sans l’afficher directement.

// echo multiplier(3, 4); // Affiche 12 directement
// $double = multiplier(3, 4) * 2; // $double vaut 24

function multiplier($x, $y) {
    return  $x * $y;
}

echo multiplier(3, 9);
$resultat = multiplier(5, 4);
echo "Le résultat est " . $resultat;
