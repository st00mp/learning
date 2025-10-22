<?php

// Exercice 13 : Affichez ceci :
// 1
// 22
// 333
// 4444
// 55555
// 666666
// 7777777
// Vous avez une variable $lignes = 7 ; et une ou plusieurs boucles for(et donc les variables internes à
// celles ci).

$lignes = 7;

for ($ia = 0; $ia < $lignes; $ia++) {
    for ($ib = 0; $ib <= $ia; $ib++) {
        echo $ia + 1;
    }
    echo "<br>";
}
