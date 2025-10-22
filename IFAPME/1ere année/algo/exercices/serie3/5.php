<?php

// On dispose en mémoire centrale d’un tableau nommé TabCotes. Celui-ci reprend les 10 cotes
// obtenues par un étudiant. Écrivez le diagramme d’action qui calcule et affiche la moyenne de ces
// cotes.

$tabCotes = [];
$sumCotes = 0;

for ($i = 0; $i <= 4; $i++) {
    echo "Entrez la cote #" . ($i + 1) . " /5 de l'étudiant (la cote est notée sur 20) \n";
    $cote = intval(fgets(STDIN));
    $tabCotes[] = $cote;
    $sumCotes += $cote;
}

$compteur = 1;
foreach ($tabCotes as $note) {
    echo "Note #" . $compteur . " : " . $note . " || ";
    $compteur++;
}

$moyenne = $sumCotes / 5;
echo "\n La moyenne de l'étudiant est de $moyenne ";
