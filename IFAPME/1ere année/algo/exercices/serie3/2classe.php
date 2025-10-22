<?php

// Sachant que l’on introduit dans un ordre quelconque et pour chaque étudiant de l’IFAPME, ses nom,
// code de département et année d’étude, écrivez le diagramme d’action qui affiche, pour le
// département « Web développer (X75) », la liste des étudiants (nom uniquement) de 1ère année puis
// la liste des étudiants de 2ème année.

//IN
// $nom; $dpt; $annee;

//OUT
// liste étudiants : 
//     - 1ere année
//     - 2 eme année

//To create


// Fonction pour filtrer les étudiants
function filtreEtudiants($etudiants)
{
    $premiere = [];
    $deuxieme = [];
    $autre = [];

    foreach ($etudiants as $etudiant) {
        $prenom = $etudiant["prenom"];
        $dpt = $etudiant["dpt"];
        $annee = $etudiant["annee"];

        if ($dpt == "X75") {
            if ($annee == 1) {
                $premiere[] = $prenom; // Étudiants en 1ère année
            } elseif ($annee == 2) {
                $deuxieme[] = $prenom; // Étudiants en 2ème année
            }
        } else {
            $autre[] = $prenom; // Étudiants d'autres départements
        }
    }

    // Retourner les trois listes dans un tableau associatif
    return ["premiere" => $premiere, "deuxieme" => $deuxieme, "autre" => $autre];
}

// Tableau des étudiants
$etudiants = [
    ["prenom" => "Alice", "dpt" => "X75", "annee" => 1],
    ["prenom" => "Bob", "dpt" => "X75", "annee" => 2],
    ["prenom" => "Charlie", "dpt" => "X75", "annee" => 1],
    ["prenom" => "David", "dpt" => "X50", "annee" => 2],
    ["prenom" => "Eve", "dpt" => "X75", "annee" => 2],
];

// Appel de la fonction et récupération des résultats
$resultat = filtreEtudiants($etudiants);

// Accéder aux résultats via le tableau retourné
echo "Étudiants en 1ère année (X75) : " . implode(", ", $resultat['premiere']) . PHP_EOL;
echo "Étudiants en 2ème année (X75) : " . implode(", ", $resultat['deuxieme']) . PHP_EOL;
echo "Autres étudiants : " . implode(", ", $resultat['autre']) . PHP_EOL;