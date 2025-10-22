<?php

// Exercice 6 : Déclarez un tableau multi-dimentionnel, qui contient les 4 saisons, lesquelles contiennent
// des légumes (2/saison), lesquels contiennent les clés "quantité" et "prix". Profitez des clés pour vous
// faciliter la vie :-) Les saisons sont uniques et les légumes le sont également (unicité par saison)
// Affichez la liste de cette facon :

// <ul>
//     <li>Ete</li>
// <ul>
//     <li>Fruit 1 : (quantité : 3 , prix : 10€)</li>
//     <li>Fruit 2 : (quantité : 3 , prix : 10€)</li>
// </ul>
//     </li>
// </ul>

$saisons = [
    "Printemps" => [
        "Asperge" => [
            "Quantite" => 2,
            "Prix" => 3,
        ],
        "Epinards" => [
            "Quantite" => 5,
            "Prix" => 2,
        ]

    ],
    "Été" => [
        "Courgette" => [
            "Quantite" => 2,
            "Prix" => 3,
        ],
        "Tomate" => [
            "Quantite" => 5,
            "Prix" => 2,
        ]

    ],

    "Automne" => [
        "Potiron" => [
            "Quantite" => 2,
            "Prix" => 3,
        ],
        "Epinards" => [
            "Quantite" => 5,
            "Prix" => 2,
        ]

    ],

    "Hiver" => [
        "Poireau" => [
            "Quantite" => 2,
            "Prix" => 3,
        ],
        "Chou de Bruxelles" => [
            "Quantite" => 5,
            "Prix" => 2,
        ]

    ]

];

echo "<ul>";

foreach ($saisons as $saison => $legumes) {
    echo "<li>$saison</li>";
    
    echo "<li><ul>";
    foreach ($legumes as $legume => $detail) {
        echo "<li>$legume : (quantité : {$detail["Quantite"]}, prix : {$detail["Prix"]}euros)</li>";
    }
    echo "</li></ul>";
};

echo "</ul>";



// Notes à retenir de cet exercice :

// 1. Structure d'un tableau multidimensionnel :
// - Un tableau multidimensionnel est un tableau contenant d'autres tableaux.
// - Dans cet exercice, chaque saison est une clé principale associée à un tableau de légumes.
// - Chaque légume est une clé dans le tableau de la saison, associée à un tableau contenant ses "Quantite" et "Prix".

// 2. Cohérence des clés :
// - Les clés doivent être uniformes dans tout le tableau (par exemple, "Quantite" sans accent partout).
// - Une clé mal orthographiée ou incohérente provoquera des erreurs lorsque vous y accéderez.

// 3. Boucle foreach imbriquée :
// - Une première boucle parcourt les saisons, et une seconde boucle imbriquée parcourt les légumes de chaque saison.
// - La syntaxe foreach ($tableau as $cle => $valeur) est utilisée pour accéder aux clés et aux valeurs.

// 4. Génération de la structure HTML imbriquée :
// - Les balises HTML doivent être correctement ouvertes et fermées.
// - La sous-liste `<ul>` des légumes doit être incluse dans le `<li>` correspondant à chaque saison.
// - Exemple :
//   <li>Saison
//     <ul>
//       <li>Légume</li>
//     </ul>
//   </li>

// 5. Accès aux valeurs des tableaux imbriqués :
// - Pour accéder aux valeurs "Quantite" et "Prix" d'un légume, utilisez $detail["Quantite"] et $detail["Prix"].
// - Vérifiez toujours que les clés existent avant d'y accéder pour éviter des erreurs (non nécessaire ici, car les clés sont bien définies).

// 6. Suppression des crochets inutiles :
// - Les valeurs simples comme "Quantite" et "Prix" n'ont pas besoin d'être des tableaux (pas de `[]` autour des valeurs).

// 7. PHP et génération HTML :
// - Lorsque vous générez du HTML avec PHP, assurez-vous que le code PHP et HTML sont correctement intégrés.
// - Utilisez des guillemets doubles (`"`) pour inclure des variables PHP dans les chaînes qui produisent du HTML.

