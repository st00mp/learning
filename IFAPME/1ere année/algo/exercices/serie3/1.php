<?php

// Chaque étudiant de l’enseignement supérieur à accès à 10 logiciels différents, numérotés de 1 à 10.
// L’étudiant souhaitant lancer un logiciel doit simplement introduire le numéro du logiciel souhaité.
// Sachant que l’on introduit le numéro de logiciel demandé par un certain nombre d’étudiants, écrivez
// le diagramme d’action qui détermine et affiche le nombre de fois que chaque logiciel a été
// demandé.

// 1.	IN (données d’entrée) :
// •	Les numéros de logiciel saisis par l’utilisateur (un nombre entier compris entre 1 et 10, répété tant que l’utilisateur ne tape pas 0).
// 2.	OUT (données de sortie) :
// •	Le nombre de fois que chaque logiciel (1 à 10) a été demandé.
// •	Concrètement, on affiche pour chaque logiciel “Le logiciel X a été demandé Y fois.”
// 3.	À CRÉER (ou “variables et structures de données”) :
// •	num : la variable qui réceptionne le numéro de logiciel saisi à chaque itération.
// •	tablog : un tableau de 10 cases (index 0 à 9) pour compter le nombre de demandes pour chaque logiciel.
// •	éventuellement une variable de boucle i pour afficher les résultats.


// -- INIT --
// On déclare un tableau de 10 logiciels et on l'initialise à 0.
$tablog = [];
for ($i = 0; $i < 10; $i++) {
    $tablog[$i] = 0;
}

// -- PREMIERE LECTURE --
echo "Entrez un numéro de logiciel (1-10) ou 0 pour arrêter : ";
$num = intval(fgets(STDIN));

// -- TANT QUE num != 0 --
while ($num != 0) {
    $tablog[$num - 1]++;  // Incrémente le compteur du logiciel choisi

    // Obtenir le nouveau numéro
    echo "Entrez un numéro de logiciel (1-10) ou 0 pour arrêter : ";
    $num = intval(fgets(STDIN));
}

// -- AFFICHAGE --
for ($i = 0; $i < 10; $i++) {
    echo "Le logiciel ", ($i + 1), " a été demandé ", $tablog[$i], " fois.\n";
}
