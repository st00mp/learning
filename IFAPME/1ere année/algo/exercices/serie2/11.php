<?php

// Sachant que l’on introduit, pour chaque étudiant d’une classe, son identité ainsi que sa cote (/20)
// obtenue par celui-ci dans les trois matières suivantes : français, anglais et néerlandais.
// On vous demande d’afficher :
// - Pour chaque étudiant : son identité, son pourcentage et son grade
// - Pour la classe :
// o La moyenne en points (/20) pour chacune des trois matières
// o Le nombre total d’échecs par matière
// o L’identité de l’étudiant qui a le mieux réussi (le meilleur pourcentage et aucun échec)

// IN
// $id;
// $coteFr;
// $coteEn;
// $coteNl;
// // OUT 
// $id;
// $pourcentage;
// $grade; // * nbr étudiants 
// $moyenne;
// $nbrEchecs;
// $id; //(vip); // * 1 classe
// To create


// INIT
$nbrEchecsFr = 0;
$nbrEchecsEn = 0;
$nbrEchecsNl = 0;
$moyenneFr = 0;
$moyenneEn = 0;
$moyenneNl = 0;
$pourcentageVip = 0;
$vip = "";

$etudiants = [];

for ($i = 1; $i <= 60; $i++) {
    $etudiants[] = [
        "id" => "Etudiant_" . $i,
        "coteFr" => rand(5, 20),
        "coteEn" => rand(5, 20),
        "coteNl" => rand(5, 20),
    ];
}


// refaire avec while plutot que for
foreach ($etudiants as $etudiant) {

    $id = $etudiant["id"];
    $coteFr = $etudiant["coteFr"];
    $coteEn = $etudiant["coteEn"];
    $coteNl = $etudiant["coteNl"];

    // Calcul grade
    $pourcentage = (($coteFr + $coteEn + $coteNl) / 3) * 5;
    if ($pourcentage < 50) {
        $grade = "Insuffisant";
    } elseif ($pourcentage < 60) {
        $grade = "Pas ouf";
    } elseif ($pourcentage < 70) {
        $grade = "Bien";
    } elseif ($pourcentage < 80) {
        $grade = "Très bien";
    } else {
        $grade = "BG";
    }

    // Calcul nombre echecs de la classe
    if ($coteFr < 10) $nbrEchecsFr++;
    if ($coteEn < 10) $nbrEchecsEn++;
    if ($coteNl < 10) $nbrEchecsNl++;

    // Calcul VIP
    if ($pourcentage > $pourcentageVip && $coteFr >= 10 && $coteEn >= 10 && $coteNl >= 10) {
        $pourcentageVip = $pourcentage;
        $vip = $id;
    }

    $moyenneFr += $coteFr;
    $moyenneEn += $coteEn;
    $moyenneNl += $coteNl;


    echo "$id à obtenu un pourcentage de " . number_format($pourcentage, 2) .  "% avec le grade '$grade'<br>";
}

$nombreEtudiant = count($etudiants);
$moyenneClasseFr = ($moyenneFr / $nombreEtudiant);
$moyenneClasseEn = ($moyenneEn / $nombreEtudiant);
$moyenneClasseNl = ($moyenneNl / $nombreEtudiant);

echo "Le VIP est $vip avec " . number_format($pourcentageVip, 2) . "%<br>";

echo "La moyenne de la classe en FR est de " . number_format($moyenneClasseFr, 2) . " <br>";
echo "La moyenne de la classe en EN est de " . number_format($moyenneClasseEn, 2) . " <br>";
echo "La moyenne de la classe en NL est de " . number_format($moyenneClasseNl, 2) . " <br>";

echo "Le nombre d'échecs en FR est de $nbrEchecsFr<br>";
echo "Le nombre d'échecs en EN est de $nbrEchecsEn<br>";
echo "Le nombre d'échecs en NL est de $nbrEchecsNl<br>";
