<?php

// On introduit une heure sous la forme HHMM. Ecrivez le diagramme d’action qui vérifie la
// validité de l’heure introduite.
// Exemple :
// 1262 provoquera l’affichage du message « Nombre de minutes non valide »
// 3216 provoquera l’affichage du message « Nombre d’heures non valide »
// 2562 provoquera l’affichage du message « Nombre d’heures et nombre de minutes non valide »
// -200 provoquera l’affichage du message « Nombre négatif »
// Si la valeur introduite est valide, le message « Heure valide » sera affiché.

// IN
// $heure (HHMM); 
// OUT
// message;
// To create
// $HH; $MM; 

function definirHeureValide($heure)
{
    if ($heure < 0) {
        echo $heure . " Nombre négatif<br>";
        return; 
    }
        $HH = (int)$heure / 100;
        $MM = $heure % 100;
        
    if ($MM > 59 && $HH > 23) {
        echo $heure . " Nombre d'heures et de minutes invalide<br>";
    } elseif ($HH > 23) {
        echo $heure . " Nombre d'heures invalide<br>";
    } elseif ($MM > 59) {
        echo $heure . " Nombre de minutes invalide<br>";
    } else {
        echo $heure . " Heure valide<br>";
    }
}

$tests = [1262, 3216, 2562, -200, 1234, 830, 2401, 2359, 1160];

foreach ($tests as $test) {
    definirHeureValide($test);
}