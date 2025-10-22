<?php

// On dispose d’informations récapitulatives sur les salaires payés par une entreprise au cours de
// l’année. Sachant que l’on introduit, pour chaque membre du personnel, son nom (Nom) et ses 12 salaires mensuels retenus dans un
// tableau TabSalMens, calculez et affichez :
//  o Pour chaque membre du personnel : son nom, le salaire annuel ainsi que le salaire
//      mensuel le plus bas
//  o Le total des salaires payés par l’entreprise au cours de l’année
//  o Le nom de la personne ayant reçu le salaire mensuel le plus élevé

$tabSalMens = [
    "nom" => "Louis",
    "salaire" => [2000, 2000, 2000, 2000, 2000, 2000, 2000, 2000, 2000, 2000, 2000, 2000]
];

$tabMois = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];

echo "Veuillez entrer le nom de l'employé \n";
$nom = trim(fgets(STDIN));
$tabSalMens["nom"] = $nom;

// INIT
$salHaut = 0;
$salHautEnt = 0;
$nomSalHautEnt = "";
$salAnEnt = 0;

while ($nom != "FIN") {
    $salAn = 0;
    $salBas = 999999;
    $moisBas = "";
    $tabSalMens = [];
    // Enregistrement des salaire dans le tableau (Facultatif)
    for ($i = 0; $i <= 11; $i++) {
        echo "Veuillez entrer le  salaire de l'employé pour le mois de : " . $tabMois[$i] . "\n";
        $salaire = intval(trim(fgets(STDIN)));
        $tabSalMens["salaire"][] = $salaire;
        $salAn += $salaire;
        if ($salaire <= $salBas) {
            $salBas = $salaire;
            $moisBas = $tabMois[$i];
        }
        if ($salaire > $salHaut) {
            $salHaut = $salaire;
            $nomSalHaut = $nom;
        }
    }
    $salAnEnt += $salAn;
    echo "Nom : $nom \n";
    echo "Salaire annuel : $salAn \n";
    echo "Salaire le plus bas : $salBas (mois de $moisBas) \n";
    if ($salHaut > $salHautEnt) {
        $salHautEnt = $salHaut;
        $nomSalHautEnt = $nomSalHaut;
    }
    echo "Veuillez entrer le nom de l'employé \n";
    $nom = trim(fgets(STDIN));
    $tabSalMens["nom"] = $nom;
}
echo "Salaire le plus élevé à payer : $salHautEnt pour Monsieur/ Madame $nomSalHautEnt \n";
echo "Montant du salaire total à payer pour l'entreprise : $salAnEnt \n";
