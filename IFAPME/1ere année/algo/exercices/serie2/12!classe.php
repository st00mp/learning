<?php

// On introduit la date du jour (AAAAMMJJ) ainsi que des informations personnelles relatives à une
// série de personnes : Nom, prénom, date de naissance (AAAAMMJJ) et sexe.
// On désire afficher :
// - Le nombre de personnes de sexe masculin
// - Le nombre de personnes de sexe féminin, âgées de plus de 30 ans
// - Le nombre de personnes de sexe masculin nées dans une année bissextile
// - Le nom et le prénom de la personne la plus jeune.
// Toutes les années introduites sont plus postérieures à 1899.


// IN
$date; // AAAAMMJJ
$nom;
$prenom;
$sexe;

// OUT
$nbMasc;
$nbFem30;
$nbMascBis;
$jeune;

// To create


function triAgeSex($personnes, $dateActuelle)
{
    // INIT
    $nbMasc = 0;
    $nbFem30 = 0;
    $nbMascBis = 0;
    $jeuneDate = 0; // Stocke la date de naissance de la personne la plus jeune
    $jeuneNom = "";
    $jeunePrenom = "";

    foreach ($personnes as $personne) {
        // Extraire les informations
        $nom = $personne['nom'];
        $prenom = $personne['prenom'];
        $dateNaissance = $personne['date'];
        $sexe = $personne['sexe'];

        // Extraire l'année de naissance à partir de la date (AAAAMMJJ)
        $anneeNaissance = intdiv($dateNaissance, 10000);
        $age = $dateActuelle - $anneeNaissance;

        // Calcul pour les hommes
        if ($sexe == "masculin") {
            $nbMasc++;

            // Vérifier si l'année de naissance est bissextile

            // Règles pour déterminer une année bissextile :
            // 1.	Une année est bissextile si elle est divisible par 4.
            // 2.	Mais, une année divisible par 100 n’est pas bissextile, sauf si elle est également divisible par 400.
            if ($anneeNaissance % 4 == 0 && ($anneeNaissance % 100 != 0 || $anneeNaissance % 400 == 0)) {
                $nbMascBis++;
            }
        }

        // Calcul pour les femmes de plus de 30 ans
        if ($sexe == "feminin" && $age > 30) {
            $nbFem30++;
        }

        // Trouver la personne la plus jeune
        if ($dateNaissance > $jeuneDate) {
            $jeuneDate = $dateNaissance;
            $jeuneNom = $nom;
            $jeunePrenom = $prenom;
        }
    }

    // Afficher les résultats
    echo "Nombre de personnes de sexe masculin : $nbMasc\n";
    echo "Nombre de femmes de plus de 30 ans : $nbFem30\n";
    echo "Nombre d'hommes nés dans une année bissextile : $nbMascBis\n";
    echo "La personne la plus jeune est $jeunePrenom $jeuneNom, née le $jeuneDate\n";
}

// Exemple de données
$personnes = [
    ["nom" => "Dupont", "prenom" => "Jean", "date" => 19950215, "sexe" => "masculin"],
    ["nom" => "Durand", "prenom" => "Marie", "date" => 19881205, "sexe" => "feminin"],
    ["nom" => "Lemoine", "prenom" => "Paul", "date" => 20000229, "sexe" => "masculin"],
    ["nom" => "Martin", "prenom" => "Claire", "date" => 19791112, "sexe" => "feminin"],
    ["nom" => "Morel", "prenom" => "Luc", "date" => 20100501, "sexe" => "masculin"]
];

// Appel de la fonction avec la date actuelle
triAgeSex($personnes, 2024);
