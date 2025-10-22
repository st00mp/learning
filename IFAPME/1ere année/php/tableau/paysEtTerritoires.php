<?php

$pays = [
    "Haiti" => [
        "Monnaie" => "Gourde",
        "Population" => [
            "Nombre" => 11000000, // Nombre stocké en entier pour les calculs
            "Description" => "millions d'habitants"
        ],
        "Part de la population rurale" => [
            "Pourcentage" => 46.00, // Pourcentage stocké comme un float
            "Description" => "%"
        ],
        "IDH" => [
            "Valeur" => 0.485,
            "Classement" => "169ème sur 186"
        ],
        "Pauvreté" => null, // Utilisation de null comme valeur PHP
        "Organisation territoriale" => [
            "Départements" => 10,
            "Arrondissements" => 42,
            "Communes" => 133,
            "Sections communales" => 565
        ],
        "Contexte politique" => "République constitutionnelle à régime présidentiel et unitaire",
    ],

    "Bénin" => [
        "Monnaie" => "Franc CFA",
        "Population" => [
            "Nombre" => 12000000, // Nombre stocké en entier
            "Description" => "millions d'habitants"
        ],
        "Part de la population rurale" => [
            "Pourcentage" => 56.00, // Stocké en float
            "Description" => "%"
        ],
        "IDH" => [
            "Valeur" => 0.485,
            "Classement" => "167ème rang sur 188 pays"
        ],
        "Pauvreté" => [
            "Pourcentage" => 40,
            "Description" => "% de la population"
        ],
        "Organisation_territoriale" => [
            "Départements" => 12,
            "Communes" => 77,
            "Arrondissements" => 546,
            "Villages" => 5295,
            "Quartiers de ville" => 5295
        ],
        "Contexte politique" => [
            2021 => "Prochaines élections présidentielles",
            2019 => "Dernières élections législatives",
            2020 => "Dernières élections municipales"
        ]
    ]
];

// Affiche tout le tableau pour vérifier
echo '<pre>';
print_r($pays);
echo '</pre>';

// Exemple de calcul : Total de la population
$population_total = $pays["Haiti"]["Population"]["Nombre"] + $pays["Bénin"]["Population"]["Nombre"];
echo "Population totale : " . number_format($population_total, 0, '.', ' ') . " habitants";

?>