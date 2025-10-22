<?php

// Exercice 2 : Réutilisez le code précédent mais affichez le numéro d'ordre de 1 à 10 au début de la
// ligne. Ceci en récupérant le numéro de la clé.


$list = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

echo "<ol>";

foreach ($list as $article) {
    echo "<li>" . $article . "</li>";
}

echo "</ol>";


