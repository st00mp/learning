<?php

// Exercice 3 : Réutilisez le code précédent. N'affichez pas l'item 2 et 3 et n'affichez que 4 produits. Pour
// cela il faut utiliser exclusivement les instructions continue; et break;

$list = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

echo "<ol>";

$count = 0;

foreach ($list as $article) {
    if ($article == 2 || $article == 3) {
        continue;
    }

    echo "<li>" . $article . "</li>";

    $count++;
    
    if ($count >= 4) {
        break;
    }
}
echo "</ol>";
