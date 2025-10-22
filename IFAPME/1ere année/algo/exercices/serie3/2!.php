<?php

// Sachant que l’on introduit dans un ordre quelconque et pour chaque étudiant de l’IFAPME, ses nom,
// code de département et année d’étude, écrivez le diagramme d’action qui affiche, pour le
// département « Web développer (X75) », la liste des étudiants (nom uniquement) de 1ère année puis
// la liste des étudiants de 2ème année.

// --- INIT ---
$P = 0;
$D = 0;

// Création des deux tableaux vides
$TabEtuP = [];
$TabEtuD = [];

// Obtenir un premier nom
echo "Saisis le nom de l'étudiant (ou 'FIN' pour arrêter) : ";
$Nom = trim(fgets(STDIN));

// --- BOUCLE ---
while ($Nom !== "FIN") {
    // Obtenir le code département
    echo "Saisis le code du département : ";
    $Code = trim(fgets(STDIN));

    // Obtenir l'année
    echo "Saisis l'année (1 ou 2) : ";
    $Annee = intval(fgets(STDIN));

    // Vérifier si le département est 'X75'
    if ($Code === "X75") {
        if ($Annee === 1) {
            // On place ce nom dans TabEtuP, et on incrémente P
            $TabEtuP[$P] = $Nom;
            $P++;
        } else {
            // 2ᵉ année
            $TabEtuD[$D] = $Nom;
            $D++;
        }
    }

    // Obtenir le nom suivant avant de boucler
    echo "Saisis le nom de l'étudiant (ou 'FIN' pour arrêter) : ";
    $Nom = trim(fgets(STDIN));
}

// --- AFFICHAGE ---
// 1) Les étudiants de 1ʳᵉ année
echo "\n--- Étudiants X75 en 1ʳᵉ année : ---\n";
for ($i = 0; $i < $P; $i++) {
    echo $TabEtuP[$i], "\n";
}

// 2) Les étudiants de 2ᵉ année
echo "\n--- Étudiants X75 en 2ᵉ année : ---\n";
for ($i = 0; $i < $D; $i++) {
    echo $TabEtuD[$i], "\n";
}

echo "\nFin du programme.\n";
