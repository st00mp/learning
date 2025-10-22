<?php

// Exercice 4 : Réutilisez le code de l'exercice 2. Affichez que les produits impaires. Pour cela créez une
// $variable $afficher = true ; avant le foreach. Changez la valeur de celle ci pour arriver à l’objectif.

$list = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$afficher = true;

echo "<ol>";

foreach ($list as $article) {
    if ($article % 2 == 0) {
        $afficher = false;
    } else {
        $afficher = true;
    }

    if ($afficher) {
        echo "<li>" . $article . "</li>";
    }
}

echo "</ol>";

