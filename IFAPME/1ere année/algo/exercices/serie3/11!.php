<?php
// Le service commercial d’une entreprise a organisé une action publicitaire auprès de ses clients.
// Chaque client a reçu un bon de commande sur lequel figurent 5 numéros de tombola. Chacun de
// ces numéros donne droit à un bon de réduction de 1 € à 16 €, pour autant que la commande
// atteigne au moins 100 € et qu’elle soit passée avant le 31 décembre 2021.
// Le client ne sait pas quels sont les montants attribués à ses numéros, mais il sait qu’ils sont
// cumulables et ferons au moins 5 * 1 € pour autant qu’il respecte les conditions de l’offre.
// Il s’agit, pour l’entreprise de traiter les bons de commande en retour.

// Les informations dont vous disposez sont les suivantes :
// o Un ensemble de fiches reprenant, pour chaque bon de commande :
// - Le nom du client : NomCli
// - La date de réception de la commande (AAAAMMJJ) : DatRec
// - Le montant de la commande : MontCom
// - Un tableau TabNumCli reprenant les 5 numéros attribués NumAtt
// o Un tableau TabTombola, en mémoire centrale, reprenant pour chacun des 1 000
// numéros de tombola distribués :
// - Les numéros : NumDis
// - La valeur à déduire : ValDed

// Afficher
// o La liste des clients qui bénéficient d’une réduction (nom et montant de la réduction)
// o Le nom du client qui a passé la commande la plus importante
// o La liste des clients ayant passé une commande de plus de 1 000 € (nom, montant de la
// commande et montant de la réduction)

$BCClients = [
    [
        "nomCli" => "Louis",
        "dateRec" => 20210912,
        "MontCom" => 250,
        "tabNumCli" => [1, 8, 9, 233, 7]
    ]
];


$tabTombola = [
    ["numDis" => 233, "valDed" => 1000],
    ["numDis" => 1, "valDed" => 1],
    ["numDis" => 7, "valDed" => 5],
    ["numDis" => 366, "valDed" => 10],
    ["numDis" => 999, "valDed" => 10]
];

// INIT
$tabVIP = [];
$montComMax = 0;
$nomMontComMax = "";

// Boucle principale pour saisir les clients
echo "Entrez votre nom : (Tapez FIN pour terminer le programme)\n";
$nomCli = trim(fgets(STDIN));

while ($nomCli != "FIN") {
    $montRed = 0;

    // Saisie des informations du client
    echo "Entrez le montant de la commande : \n";
    $montCom = intval(trim(fgets(STDIN)));

    echo "Entrez la date de reception de la commande (AAAAMMJJ) : \n";
    $dateRec = intval(trim(fgets(STDIN)));

    echo "Entrez les 5 numéros de tombola séparés par des espaces : \n";
    $tabNumCli = array_map('intval', explode(' ', trim(fgets(STDIN))));

    // Ajouter le client au tableau
    $BCClients[] = [
        "nomCli" => $nomCli,
        "montCom" => $montCom,
        "dateRec" => $dateRec,
        "tabNumCli" => $tabNumCli
    ];

    // Garder en mémoire le plus gros client et son nom
    if ($montCom > $montComMax) {
        $montComMax = $montCom;
        $nomMontComMax = $nomCli;
    }

    // Vérification des conditions d'éligibilité :
    // La commande doit être d'au moins 100 € et reçue avant le 31 décembre 2021.
    if ($montCom >= 100 && $dateRec <= 20211231) {

        // *** Recherche des réductions ***

        // Boucle sur les 5 numéros de tombola attribués au client.
        // - $j représente l'index du numéro attribué au client.
        // - $tabNumCli[$j] est le numéro de tombola spécifique attribué au client pour cet index.
        for ($j = 0; $j < 5; $j++) {

            // Boucle sur tous les numéros présents dans le tableau `$tabTombola`.
            // - $i représente l'index du tableau `$tabTombola`.
            // - $tabTombola[$i]["numDis"] est un numéro distribué par l'entreprise avec sa valeur de réduction.
            for ($i = 0; $i < count($tabTombola); $i++) {

                // Comparaison : on vérifie si le numéro de tombola du client ($tabNumCli[$j]) 
                // correspond à un numéro distribué par l'entreprise ($tabTombola[$i]["numDis"]).
                if ($tabTombola[$i]["numDis"] == $tabNumCli[$j]) {

                    // Si une correspondance est trouvée, on ajoute la valeur de réduction 
                    // associée à ce numéro au montant total de la réduction du client.
                    // - $tabTombola[$i]["valDed"] contient la valeur de la réduction.
                    $montRed += $tabTombola[$i]["valDed"];
                }
            }
        }

        echo "$nomCli reçoit $montRed € de réduction !\n";

        // Ajout aux VIP si commande > 1000 €
        if ($montCom > 1000) {
            $tabVIP[] = [
                "nomCli" => $nomCli,
                "montCom" => $montCom,
                "montRed" => $montRed
            ];
        }
    }

    // Demande du prochain client
    echo "Entrez votre nom : (Tapez FIN pour terminer le programme)\n";
    $nomCli = trim(fgets(STDIN));
}

// Affichage des clients VIP
foreach ($tabVIP as $vip) {
    echo "Client VIP : {$vip['nomCli']}\n";
    echo "Montant de la commande : {$vip['montCom']} €\n";
    echo "Montant de la réduction : {$vip['montRed']} €\n";
}

// Affichage du client ayant passé la commande la plus importante
echo "\nLe client ayant passé la commande la plus élevée est $nomMontComMax avec $montComMax €.\n";
