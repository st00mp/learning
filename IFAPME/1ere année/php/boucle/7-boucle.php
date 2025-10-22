<?php

// Exercice 7: Sur base de l’exercice 6 des conditions. Rédigez un programme qui affichera tous les
// nombres entre 1 et 1000 qui sont multiples de 3 ou de 5. (Modulo)

// Exercice 7 : Rédigez une expression conditionnelle pour tester si un nombre est à la fois un multiple de
// 3 et de 5. (aide : Modulo - reste d’une division euclidienne)

$numbers = range(1,1000);

foreach ($numbers as $number) {
    if ($number % 3 == 0 || $number % 5 == 0 ) {
        echo $number . "<br>";
    } 
}

