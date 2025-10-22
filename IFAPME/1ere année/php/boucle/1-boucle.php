<?php

// Exercice 1 : Affichez une liste de course contenant 10 articles. Pour cela créez un tableau $list indexé.
// En utilisant la boucle foreach, affichez la liste sous forme de liste à point <ul><li>

$list = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

echo "<ul>";

foreach ($list as $article) {
    echo "<li>" . $article . "</li>";
}

echo "</ul>";




