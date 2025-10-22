<?php

// En période de soldes, une grande surface accorde des réductions en fonction du
// nombre d’articles achetés et du montant total de l’achat.
// Tout achat bénéficie d’une ristourne de 20%. Lorsque le montant déjà réduit dépasse les
// 100€, 5% sont encore accordés. De plus, si le client achète au moins 4 articles, une
// remise supplémentaire de 3% sur le total lui est encore offerte.
// On vous demande décrire le diagramme d’action qui affichera le montant réellement
// payé par un client sachant qu’on introduit le montant à payer au départ, ainsi que le
// nombre d’articles achetés

// IN
// $nbArticles; $montantTotalAchats;
// OUT
// $montantAPayer;  
// To create
// $montantReduit; $ristourne; $reduction20; $reduction5; $reduction3;

function calculerMontantAPayer($montantTotalAchats, $nbArticles)
{
    $montantReduit = $montantTotalAchats;
    $ristourne = 0;

    // Première réduction : 20 %
    $reduction20 = $montantTotalAchats * 0.20;
    $montantReduit -= $reduction20;
    $ristourne += $reduction20;

    // Réduction supplémentaire de 5 % si le montant réduit > 100 €
    if ($montantReduit > 100) {
        $reduction5 = $montantReduit * 0.05;
        $montantReduit -= $reduction5;
        $ristourne += $reduction5;
    }

    // Réduction supplémentaire de 3 % si au moins 4 articles
    if ($nbArticles >= 4) {
        $reduction3 = $montantReduit * 0.03;
        $montantReduit -= $reduction3;
        $ristourne += $reduction3;
    }

    // Affichage des résultats
    echo "Montant initial : " . number_format($montantTotalAchats, 2) . " €<br>";
    echo "Réduction de 20 % : -" . number_format($reduction20, 2) . " €<br>";
    if (isset($reduction5)) {
        echo "Réduction supplémentaire de 5 % : -" . number_format($reduction5, 2) . " €<br>";
    }
    if (isset($reduction3)) {
        echo "Réduction supplémentaire de 3 % : -" . number_format($reduction3, 2) . " €<br>";
    }
    echo "Ristourne totale : " . number_format($ristourne, 2) . " €<br>";
    echo "Montant final à payer : " . number_format($montantReduit, 2) . " €<br><br>";
}

$tests = [
    ["MontantTotalAchats" => 50, "nbArticles" => 2],  // 20 % uniquement
    ["MontantTotalAchats" => 120, "nbArticles" => 3], // 20 % + 5 %
    ["MontantTotalAchats" => 80, "nbArticles" => 4],  // 20 % + 3 %
    ["MontantTotalAchats" => 150, "nbArticles" => 5], // 20 % + 5 % + 3 %
];

foreach ($tests as $test) {
    calculerMontantAPayer($test["MontantTotalAchats"], $test["nbArticles"]);
}
