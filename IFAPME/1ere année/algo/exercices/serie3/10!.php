<?php

// Pour chaque client, on introduit son nom (NomCli) ainsi que le montant des achats effectués au
// cours des différents mois de l’année (dans un tableau TabMontMens).
// Ecrivez le DA qui fournit :
// o Pour chaque client : son nom et le libellé du mois au cours duquel il a acheté le plus
// o Le nom du meilleur client pour chacun des différents trimestres.

// Tableau des mois
$tabMois = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];

// Initialisation des trimestres
$tabTrim = [0, 0, 0, 0];
$tabNomCliTrim = ["", "", "", ""];

echo "Entrez le nom du client : (Tapez FIN pour terminer le programme)\n";
$nomCli = trim(fgets(STDIN));

while ($nomCli != "FIN") {
    // INIT
    $montMax = 0;
    $moisMax = "";
    $totalTrim = 0;

    // Tableau des dépenses mensuelles
    $tabMontMens = [];

    // Saisie des dépenses mensuelles
    for ($i = 0; $i < 12; $i++) {
        echo "Entrez le montant des achats pour le mois de " . $tabMois[$i] . "\n";
        $mont = intval(trim(fgets(STDIN)));
        $tabMontMens[$i] = $mont;

        // Calcul du mois où les dépenses sont maximales
        if ($mont > $montMax) {
            $montMax = $mont;
            $moisMax = $tabMois[$i];
        }

        // Ajout des dépenses au total trimestriel
        $totalTrim += $mont;

        // Si c'est la fin d'un trimestre
        if (($i + 1) % 3 == 0) {
            $indexTrim = intdiv($i, 3);  // Détermine le trimestre actuel (0, 1, 2 ou 3)

            // Vérification du meilleur client pour ce trimestre
            if ($totalTrim > $tabTrim[$indexTrim]) {
                $tabTrim[$indexTrim] = $totalTrim;
                $tabNomCliTrim[$indexTrim] = $nomCli;
            }

            // Réinitialisation du total pour le prochain trimestre
            $totalTrim = 0;
        }
    }

    // Affichage des résultats pour ce client
    echo "________________________________\n";
    echo "Nom du client : $nomCli \n";
    echo "Mois de ses plus grosses dépenses : $moisMax avec $montMax euros \n";
    echo "________________________________\n";

    // Demande du prochain client
    echo "Entrez le nom du client : (Tapez FIN pour terminer le programme)\n";
    $nomCli = trim(fgets(STDIN));
}

// Affichage des meilleurs clients par trimestre
echo "\nMeilleurs clients par trimestre :\n";
for ($i = 0; $i < 4; $i++) {
    echo "Trimestre " . ($i + 1) . " : " . $tabNomCliTrim[$i] . " avec " . $tabTrim[$i] . " euros\n";
}
