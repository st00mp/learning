<?php

// Exercice 12 : Affichez ceci :
// 0000000
// 1111111
// 2222222
// 3333333
// 4444444
// 5555555
// 6666666
// 7777777
// 8888888
// 9999999
// Vous avez 2 variables :
// $colonnes = 10; $lignes = 7; et une ou plusieurs boucles for (et donc les variables internes à celles ci).

$colonnes = 10; $lignes = 7;

for ($ic = 0 ; $ic < $colonnes ; $ic++) {
    
    for ($il = 0; $il < $lignes; $il++) {
        echo $ic;
    }
    echo "<br>";
}
