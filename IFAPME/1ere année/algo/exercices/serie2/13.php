<?php

// Etablir la facture d’eau pour tous les clients particuliers.
// Par client, on introduit son nom, son adresse ainsi que sa consommation en m³.
// La redevance fixe d’abonnement s’élève à 26,80€.
// Le prix au m³ varie selon les tranches de consommation

// Tranches               Prix du m³
// 0 – 20 m³              0,77 €
// +20 – 1000 m³          1,51 €
// +1000 – 5000 m³        1,54 €
// +5000 – 50 000 m³      1,44 €
// +50 000 m³             1,26 €

// Pour la protection des captages, on comptera un supplément de 0,1 € au m³
// La redevance fixe, le coup de la consommation et la contribution pour la protection des captages
// forment la base imposable sur laquelle on applique une TVA de 6%.
// La taxe régionale de 0,40€ par m³ (exempte de TVA) est ensuite ajoutée.
// La facture doit reprendre les informations suivantes :
// - Les nom et adresse du client ;
// - La redevance fixe ;
// - Le coût de la consommation ;
// - La contribution pour la production des captages ;
// - La base imposable ;
// - La TVA ;
// - La taxe régionale ;
// - Le total à payer.
// Afficher également la consommation moyenne par client et le montant perçu par la société de
// distribution d’eau.

// IN
$nom;
$adresse;
$conso;

// OUT
// Par client
$nom;
$adresse;
$redevanceFixe;
$montantConso;
$montantCaptages;
$baseImposable;
$TVA;
$taxeRegionnale;
$totalAPayer;

// Une fois
$consoMoyenneClient;
$montantSDE;

// To create


// Variables globales pour les statistiques
$nbClients = 0;
$montantSDE = 0;
$totConso = 0;

function factureEau($nom, $adresse, $conso)
{
    // Constantes
    $redevanceFixe = 26.80;
    $captages = 0.1;
    $TVA = 0.06;
    $taxeRegionnale = 0.4;

    // Prix du m³ par tranche
    $p20m3 = 0.77;
    $p1000m3 = 1.51;
    $p5000m3 = 1.54;
    $p50000m3 = 1.44;
    $p50001m3 = 1.26;

    if ($conso <= 20) {
        $montantConso = $conso * $p20m3;
    } elseif ($conso <= 1000) {
        $montantConso = $conso * $p1000m3;
    } elseif ($conso <= 5000) {
        $montantConso = $conso * $p5000m3;
    } elseif ($conso <= 50000) {
        $montantConso = $conso * $p50000m3;
    } else {
        $montantConso = $conso * $p50001m3;
    }

    // Calculs pour la facture
    $montantCaptages = $captages * $conso;
    $baseImposableBrute = $montantConso + $redevanceFixe + $montantCaptages;
    $montantTVA = $baseImposableBrute * $TVA;
    $baseImposableNette = $baseImposableBrute + $montantTVA;
    $taxeRegionnale = $taxeRegionnale * $conso;
    $totalAPayer = $montantCaptages + $baseImposableNette + $taxeRegionnale;

    // Retour des résultats pour un client
    return [
        "nom" => $nom,
        "adresse" => $adresse,
        "redevanceFixe" => $redevanceFixe,
        "montantConso" => $montantConso,
        "montantCaptages" => $montantCaptages,
        "baseImposableBrute" => $baseImposableBrute,
        "TVA" => $montantTVA,
        "taxeRegionnale" => $taxeRegionnale,
        "totalAPayer" => $totalAPayer,
    ];
}

while (true) {
    $nom = readline("Entrez le nom du client (ou 'FIN' pour terminer) : ");
    if ($nom == "FIN") break;

    $adresse = readline("Entrez l'adresse du client : ");
    $conso = (float)readline("Entrez la consommation en m³ : ");

    // Calculer la facture
    $facture = factureEau($nom, $adresse, $conso);

    // Stocker la facture
    $factures[] = $facture;

    // Mettre à jour les statistiques globales
    $nbClients++;
    $totConso += $conso;
    $montantSDE += $facture["baseImposableBrute"];

    // Afficher les résultats pour ce client
    echo "Facture pour : {$facture['nom']}, {$facture['adresse']}\n";
    echo "Redevance fixe : {$facture['redevanceFixe']} €, Consommation : {$facture['montantConso']} €\n";
    echo "Captages : {$facture['montantCaptages']} €, Base imposable : {$facture['baseImposableBrute']} €\n";
    echo "TVA : {$facture['TVA']} €, Taxe régionale : {$facture['taxeRegionnale']} €, Total : {$facture['totalAPayer']} €\n";
    echo "-----------------------------------------\n";
}

// Calcul de la consommation moyenne
$consoMoyenneClient = $totConso / $nbClients;

// Afficher les statistiques globales
echo "-----------------------------------------\n";
echo "RÉCAPITULATIF GLOBAL\n";
echo "-----------------------------------------\n";
foreach ($factures as $facture) {
    echo "Nom : {$facture['nom']}, Adresse : {$facture['adresse']}, Total à payer : {$facture['totalAPayer']} €\n";
}
echo "-----------------------------------------\n";
echo "Consommation moyenne par client : $consoMoyenneClient m³\n";
echo "Montant total perçu par la société : $montantSDE €\n";
