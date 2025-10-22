<?php


// Données d'entrée : noms des employés et leurs salaires mensuels
$employes = [
    "Alice" => [2500, 2600, 2700, 2500, 2400, 2550, 2600, 2700, 2500, 2600, 2400, 2700],
    "Bob" => [3000, 3100, 2900, 2950, 3000, 3100, 3000, 3050, 2950, 3100, 3050, 3000],
    "Charlie" => [1800, 1850, 1900, 2000, 1950, 1900, 2000, 1950, 1900, 1850, 2000, 1950]
];

// Initialisation des variables globales
$totalSalairesEntreprise = 0;
$salaireEmpMax = 0;
$nomEmpMax = "";

foreach ($employes as $nom => $tabSalMens) {
    // Initialisation pour chaque employé
    $salaireAnnuel = 0;
    $salaireMensuelMin = null;

    // Calcul du salaire annuel et du salaire mensuel le plus bas
    foreach ($tabSalMens as $salaireMens) {
        $salaireAnnuel += $salaireMens;

        // Trouver le salaire mensuel le plus bas
        if ($salaireMensuelMin === null || $salaireMens < $salaireMensuelMin) {
            $salaireMensuelMin = $salaireMens;
        }

        // Trouver le salaire mensuel le plus élevé (global)
        if ($salaireMens > $salaireEmpMax) {
            $salaireEmpMax = $salaireMens;
            $nomEmpMax = $nom;
        }
    }

    // Ajouter au total de l'entreprise
    $totalSalairesEntreprise += $salaireAnnuel;

    // Afficher les résultats pour chaque employé
    echo "Nom : $nom\n";
    echo "Salaire annuel : $salaireAnnuel €\n";
    echo "Salaire mensuel le plus bas : $salaireMensuelMin €\n";
    echo "-----------------------------------------\n";
}

// Afficher les résultats globaux
echo "Total des salaires payés par l'entreprise : $totalSalairesEntreprise €\n";
echo "Le salaire mensuel le plus élevé a été reçu par $nomEmpMax : $salaireEmpMax €\n";


//
// Ci dessous pas entièrement correct 
//


// On dispose d’informations récapitulatives sur les salaires payés par une entreprise au cours de
// l’année. Sachant que l’ont introduit, pour chaque membre. Sachant que l’on introduit, pour
// chaque membre du personnel, son nom (Nom) et ses 12 salaires mensuels retenus dans un
// tableau TabSalMens, calculez et affichez :
// o Pour chaque membre du personnel : son nom, le salaire annuel ainsi que le salaire
// mensuel le plus bas
// o Le total des salaires payés par l’entreprise au cours de l’année
// o Le nom de la personne ayant reçu le salaire mensuel le plus élevé

// IN
$tabSalMens;
$nom; // Par employé

// OUT 
$nom;
$salAn;
$salMin;
// Par employé

$totEnt;
$nomEmpMax;

// To create 
#variablesVentes 
$salaireEmpMax;


// INIT 

$salaireEmpMax = 0;
$nomEmpMax = "";
$totEnt = 0;


foreach ($tabSalMens as $salaireMens) {

    $salaireMens++;
    $salaireAn += $salaireMens;

    if ($salaireMens < $salMin) {
        $salMin = $salaireMens;
        $salMin = $salaireMens;
        $nomMin = $nom;
        echo "Le salaire le plus bas est celui de $nomMin avec un montant de $salMin €";
    }

    if ($salaireEmpMax > $salaireMens) {
        $salaireEmpMax = $salaireMens;
        $nomEmpMax = $nom;
        echo "Le salaire le plus élevé est celui de $nomMax avec un montant de $salMax €";
    }
}
$totEnt += $salaireAn;

echo "$nom à un salaire annuel de $salaireAn €";
echo "L'entreprise doit débourser $totEnt €";
