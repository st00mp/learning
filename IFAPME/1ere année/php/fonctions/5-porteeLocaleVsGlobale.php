<?php

function multiplier($x, $y){
    $resultat = $x * $y; // $resultat est locale à la fonction
    echo "Le résultat est " . $resultat;
    echo "<br>";
}

multiplier(231, 18372);
// echo $resultat; / Erreur : $resultat n'existe pas en dehors de la fonction

$z = 16;
$a = 987;

function multiplierGlogal() {
    global $z, $a; // on rends les variables définies à l'exterieur de la fonction accessibles
    $resultatG = $z * $a;
    echo "Le résultat est " . $resultatG;
}

multiplierGlogal();