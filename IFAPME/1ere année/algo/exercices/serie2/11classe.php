<?php

// Sachant que l’on introduit, pour chaque étudiant d’une classe, son identité ainsi que sa cote (/20)
// obtenue par celui-ci dans les trois matières suivantes : français, anglais et néerlandais.
// On vous demande d’afficher :
// - Pour chaque étudiant : son identité, son pourcentage et son grade
// - Pour la classe :
// o La moyenne en points (/20) pour chacune des trois matières
// o Le nombre total d’échecs par matière
// o L’identité de l’étudiant qui a le mieux réussi (le meilleur pourcentage et aucun échec)



// IN (Entrées) :
// 	Une liste d’étudiants, où chaque étudiant est défini par :
// 	•	Identité : nom, prénom
// 	•	Notes en français, anglais et néerlandais (/20)

// OUT (Sorties) :
// 	Pour chaque étudiant :
// 	•	Identité
// 	•	Pourcentage : Moyenne des trois matières en %
// 	•	Grade :
// 	•	“Excellent” si pourcentage >= 80
// 	•	“Bien” si pourcentage >= 60
// 	•	“Suffisant” si pourcentage >= 50
// 	•	“Insuffisant” sinon
// 	Pour la classe :
// 	•	Moyenne des notes pour chaque matière
// 	•	Nombre total d’échecs par matière (note < 10/20)
// 	•	Identité de l’étudiant avec le meilleur pourcentage (aucun échec).

// To Create (Logique) :
// 	1.	Calculer la moyenne pour chaque étudiant : (français + anglais + néerlandais) / 3.
// 	2.	Convertir cette moyenne en pourcentage : moyenne × 5.
// 	3.	Déterminer le grade selon le pourcentage.
// 	4.	Calculer les moyennes par matière.
// 	5.	Compter les échecs par matière.
// 	6.	Identifier l’étudiant avec le meilleur pourcentage et aucun échec.


// Initialisation des variables
$etudiants = [];
$nbEchecs = ['francais' => 0, 'anglais' => 0, 'neerlandais' => 0];
$moyennesMatieres = ['francais' => 0, 'anglais' => 0, 'neerlandais' => 0];
$meilleurEtudiant = null;

// Lecture des données pour chaque étudiant
echo "Entrez les informations des étudiants (Tapez 'fin' comme prénom pour terminer).\n";
while (true) {
    $prenom = readline("Prénom de l'étudiant : ");
    if (strtolower($prenom) === 'fin') {
        break;
    }
    $nom = readline("Nom de l'étudiant : ");
    $francais = floatval(readline("Note en Français (/20) : "));
    $anglais = floatval(readline("Note en Anglais (/20) : "));
    $neerlandais = floatval(readline("Note en Néerlandais (/20) : "));

    // Calcul de la moyenne, pourcentage et grade
    $moyenne = ($francais + $anglais + $neerlandais) / 3;
    $pourcentage = $moyenne * 5;
    $grade = '';
    if ($pourcentage >= 80) {
        $grade = 'Excellent';
    } elseif ($pourcentage >= 60) {
        $grade = 'Bien';
    } elseif ($pourcentage >= 50) {
        $grade = 'Suffisant';
    } else {
        $grade = 'Insuffisant';
    }

    // Stocker les informations de l'étudiant
    $etudiants[] = [
        'nom' => $nom,
        'prenom' => $prenom,
        'francais' => $francais,
        'anglais' => $anglais,
        'neerlandais' => $neerlandais,
        'moyenne' => $moyenne,
        'pourcentage' => $pourcentage,
        'grade' => $grade
    ];

    // Mettre à jour les moyennes et le nombre d'échecs
    $moyennesMatieres['francais'] += $francais;
    $moyennesMatieres['anglais'] += $anglais;
    $moyennesMatieres['neerlandais'] += $neerlandais;

    if ($francais < 10) $nbEchecs['francais']++;
    if ($anglais < 10) $nbEchecs['anglais']++;
    if ($neerlandais < 10) $nbEchecs['neerlandais']++;

    // Déterminer le meilleur étudiant
    if ($pourcentage > ($meilleurEtudiant['pourcentage'] ?? 0) &&
        $francais >= 10 && $anglais >= 10 && $neerlandais >= 10) {
        $meilleurEtudiant = [
            'nom' => $nom,
            'prenom' => $prenom,
            'pourcentage' => $pourcentage
        ];
    }
}

// Calcul des moyennes par matière
foreach ($moyennesMatieres as $matiere => $total) {
    $moyennesMatieres[$matiere] = $total / count($etudiants);
}

// Affichage des résultats
echo "\n--- Résultats par étudiant ---\n";
foreach ($etudiants as $etudiant) {
    echo "{$etudiant['prenom']} {$etudiant['nom']} :\n";
    echo "  Pourcentage : {$etudiant['pourcentage']} %\n";
    echo "  Grade : {$etudiant['grade']}\n";
    echo "-----------------------\n";
}

echo "--- Résultats pour la classe ---\n";
echo "Moyenne en Français : {$moyennesMatieres['francais']} / 20\n";
echo "Moyenne en Anglais : {$moyennesMatieres['anglais']} / 20\n";
echo "Moyenne en Néerlandais : {$moyennesMatieres['neerlandais']} / 20\n";
echo "Nombre total d'échecs en Français : {$nbEchecs['francais']}\n";
echo "Nombre total d'échecs en Anglais : {$nbEchecs['anglais']}\n";
echo "Nombre total d'échecs en Néerlandais : {$nbEchecs['neerlandais']}\n";

if ($meilleurEtudiant) {
    echo "Meilleur étudiant : {$meilleurEtudiant['prenom']} {$meilleurEtudiant['nom']} ({$meilleurEtudiant['pourcentage']} %)\n";
} else {
    echo "Aucun étudiant n'a réussi sans échec.\n";
}
