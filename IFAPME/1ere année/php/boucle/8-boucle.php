<?php

// Exercice 8 : Effectuez une suite de tirages de nombres aléatoires (entre 1 et 100) jusqu’à obtenir une
// suite composée d’un nombre pair suivi de deux nombres impairs.

// Coup de pouce : La fonction php rand() permet d’avoir un nombre aléatoire. Utilisez la boucle doWhile
// (et oui, de temps à autre elle est utile).


do {
    $number1 = rand(1, 100);
    $number2 = rand(1, 100);
    $number3 = rand(1, 100);

    $isSequenceValid = ($number1 % 2 == 0) && ($number2 % 2 != 0) && ($number3 % 2 != 0);

} while (!$isSequenceValid);

echo "<br>Suite valide obtenue : $number1, $number2, $number3<br>";

