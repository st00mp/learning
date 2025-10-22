<?php

// Sachant qu’un utilisateur introduit un nombre entier compris entre 0 et 255, écrivez le diagramme
// d’actions qui permet d’afficher ce nombre et son expression en base 2 (en 8 bits).

// 1.	Division par 2 avec reste :
// •	Chaque division par 2 donne un reste de 0 ou 1.
// •	Ce reste représente un bit de la représentation binaire.
// •	On continue de diviser jusqu’à ce que le quotient devienne 0.

// IN
// nombre entier entre 0 et 255
$int;
$tmp;
$bits;
// OUT

// To create


// Obtenir un entier 
echo "Introduisez un nombre entre 0 et 255 \n";
$int = intval(fgets(STDIN));

// Traitement
if ($int >= 0 && $int <= 255) {
    // Expression en base 2 (8 bits)
    $bits = [];
    $tmp = $int;
    for ($i = 0; $i < 8; $i++) {
        $bits[] = $tmp % 2;
        $tmp = intdiv($tmp, 2);
    }

    echo "\n $int équivaut à :  \n";

    for ($j = 7; $j >= 0; $j--) {
        // Afficher le nombre et son expression en base 2
        echo $bits[$j];
    }
    echo " en 8 bits \n";
}

echo "\n Introduisez un nombre entre 0 et 255 \n";
$int = intval(fgets(STDIN));
