<?php

// On dispose en mémoire centrale d’un tableau nommé TabCotes. Celui-ci reprend les 10 cotes
// obtenues par un étudiant. Écrivez le diagramme d’action qui calcule et affiche la moyenne de ces
// cotes.

//IN
// $tabCotes; 

//OUT
// moyenne étudiant (des 10 valeurs du tableau $tabCotes)

//To create

$TabCotes = [12, 15, 14, 16, 10, 18, 13, 17, 19, 11];

function moyenne($TabCotes)
{
    $moyenne = 0;
    for ($i = 0; $i < 10; $i++) {
        $moyenne /= $i;
    }
    echo $moyenne;
}
