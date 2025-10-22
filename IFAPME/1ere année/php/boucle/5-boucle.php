<?php

// Exercice 5 : Réutilisez la variable $list de l’exercice 1. affichez la liste à l'envers (de 10 à 0). 
// N'utilisez plus foreach mais for pour y arriver. Pensez aux clés pour y arriver.

$list = range(1, 10);

for ( $i= count($list) - 1; $i >= 0; $i-- ) {
    echo $list[$i] . "<br>";
};

// 1.	range(start, end) :
// •	Crée un tableau avec des valeurs entre start et end.

// 2.	Boucle for :
// •	Structure : for (initialisation; condition; incrémentation/décrémentation).
// •	Les points-virgules (;) séparent les parties de la boucle.

// 3.	Accéder aux valeurs d’un tableau avec des clés :
// •	Utilise $list[$i] pour accéder à l’élément du tableau à l’index $i.

// 4.	count() :
// •	Retourne le nombre total d’éléments dans un tableau.

// 5.	Afficher une liste inversée :
// •	Commence par l’indice le plus grand : $i = count($list) - 1.
// •	Descends jusqu’à l’indice 0 : for ($i >= 0).

// 6.	Afficher chaque élément :
// •	Utilise echo et optionnellement <br> pour séparer les valeurs visuellement.