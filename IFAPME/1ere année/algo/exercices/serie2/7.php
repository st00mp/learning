<?php

// Une entreprise emploie 100 ouvriers. Par ouvrier, on introduit le nom, le nombre d’heures de
// travail, le taux horaire, l’ancienneté en années, un code « lieu » et le nombre d’enfants à charge.
// Ecrire le diagramme d’action permettant de sortir :
// - Par ouvrier : son nom, son salaire et la prime reçue
// - Pour l’entreprise : le total à débourser

// Le taux horaire est majoré à 40% pour la partie des heures de travail excédant 36h.
// Trois primes peuvent être attribuées, à savoir :
// - Une prime d’ancienneté de 8€ par an pour les 6 premières années et de 12€ par an pour les
// suivantes.
// - Une prime de déplacement de respectivement, 0€, 125€ ou 250€ selon que le code lieux vaut
// 0 , 1 ou 2
// - Une prime de famille de 20€ par enfant jusqu’au troisième inclus et de 24€ par enfant pour
// les suivants. Cette prime ne peut dépasser 140€.

// IN
// $nom; $nbHT; $txH; $anciennete; $lieu; $nbEnfants;  
// OUT
// $nom; $salaire; $prime; // ouvrier * 100
// $totalE; // entreprise * 1
// To create

$totalE = 0;

// Simulation des données pour 100 ouvriers
$ouvriers = [];

for ($i = 1; $i <= 100; $i++) {
    $ouvriers[] = [
        'nom' => "Ouvrier $i",
        'nbHT' => rand(30, 50), // Heures travaillées entre 30 et 50
        'txH' => rand(10, 20), // Taux horaire entre 10€ et 20€
        'anciennete' => rand(0, 10), // Ancienneté entre 0 et 10 ans
        'lieu' => rand(0, 2), // Code lieu (0, 1 ou 2)
        'nbEnfants' => rand(0, 5), // Nombre d'enfants entre 0 et 5
    ];
}

// Traitement pour chaque ouvrier
foreach ($ouvriers as $ouvrier) {
    $nom = $ouvrier['nom'];
    $nbHT = $ouvrier['nbHT'];
    $txH = $ouvrier['txH'];
    $anciennete = $ouvrier['anciennete'];
    $lieu = $ouvrier['lieu'];
    $nbEnfants = $ouvrier['nbEnfants'];

    $prime = 0;

    // Calcul majoration tx horraire
    if ($nbHT > 36) {
        $heureSup = $nbHT - 36;
        $prime += $heureSup * $txH * 0.4;
    }

    // Calcul prime ancienneté
    if ($anciennete <= 6) {
        $prime += $anciennete * 8;
    } else {
        $prime += (6 * 8) + (($anciennete - 6) * 12);
    }

    // Calcul prime déplacement
    if ($lieu == 0) {
        $prime += 0;
    } elseif ($lieu == 1) {
        $prime += 125;
    } elseif ($lieu == 2) {
        $prime += 250;
    }

    // Calcul prime famille

    if ($nbEnfants <= 3) {
        $primeEnfant = ($nbEnfants * 20);
    } else {
        $primeEnfant = (3 * 20) + (($nbEnfants - 3) * 24);
        if ($primeEnfant >= 140) {
            $primeEnfant = 140;
        }
    }
    $prime += $primeEnfant;

    $salaire = ($nbHT * $txH) + $prime;

    echo "$nom --- Salaire : $salaire € --- Primes : $prime €<br>";

    $totalE += $salaire;
}

echo "<br><strong>L'entreprise devra debourser " . $totalE . " €</strong>";
