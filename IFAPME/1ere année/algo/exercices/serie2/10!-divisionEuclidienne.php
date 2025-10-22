<?php

// Ecrire le diagramme d’actions qui réalise le ticket de caisse d’un client qui achète un ou plusieurs
// articles en un ou plusieurs exemplaires.
// Pour chaque article acheté, on introduit son cde, son prix unitaire, et la quantité achetée.
// Si le prix de vente total d’un article dépasse les 125 €, on accorde 5% de réduction sur cet
// article.
// Le client reçoit un billet de loterie par tranche d’achat de 75€ au-dessus de 150€ d’achat.
// Le ticket de caisse doit mentionner :
// - Pour chaque article : son code, son prix unitaire, la quantité achetée, la remise éventuelle, le
// prix total
// - Le total à payer par client
// - S’il y a lieu, le nombre de billets de loterie reçus.

// IN
// $code; $PU; $qte;
// OUT
// $code; $PU; $qte; $remise; $prixTotal; 
// $nbTickets; 
// To create

$articles = [];
$totalArticles = rand(20, 100);
$nbTickets = 0;

for ($i = 1; $i <= $totalArticles; $i++) {
    $articles[] = [
        "code" => rand(1, 1000),
        "PU" => rand(10, 500),
        "qte" => rand(1, 4)
    ];
};

$prixTotal = 0;
foreach ($articles as $article) {
    $remise = 0;
    $prixArticle = $article["PU"] * $article["qte"];
    $prixAvReduc = $prixArticle; // Initialiser au prix initial
    
    if ($prixArticle > 125) {
        $remise = $prixArticle * 0.05;
        $prixArticle -= $remise; // Appliquer la remise

    } // else { // Si la remise est toujours calculée pour les prix > 125€, pas besoin de définir $remise = 0 dans le else.
    //     $remise = 0; 
    // }

    $prixTotal += $prixArticle;

   // Afficher les détails de l'article
   echo "|| CODE : " . $article["code"] . 
   " || PRIX UNITAIRE : " . $article["PU"] . 
   " || QUANTITE : " . $article["qte"] . 
   " || PRIX AVANT REDUCTION : " . number_format($prixAvReduc, 2) . 
   " || REMISE : " . ($remise > 0 ? number_format($remise, 2) . " €" : "Pas de remise") . 
   " || PRIX TOTAL : " . number_format($prixArticle, 2) . " €<br>";

}

// Calcul des tickets de loterie
if ($prixTotal > 150) {
    $difference = $prixTotal - 150; // Calculer le montant au-dessus de 150 €
    $nbTickets = intval(($difference - ($difference % 75)) / 75); // cf. division Euclydienne // Diviser par 75 en ignorant les décimales
} else {
    $nbTickets = 0;
}

echo "<br><strong>Le nombre d'articles différents est de $totalArticles pour un prix total de " . number_format($prixTotal, 2) . " € et " . $nbTickets . " tickets de lotterie ont été offerts.</strong>";

/*
 * Calcul du nombre de tickets par tranche de 75€ au-dessus de 150€.
 * 
 * Concept mathématique utilisé :
 * 1. Division Euclidienne :
 *    - Lorsqu'un nombre entier est divisé par un autre entier, il peut être écrit comme :
 *      a = b * q + r
 *      Où :
 *        a = le dividende (ici, la différence entre prixTotal et 150),
 *        b = le diviseur (ici, 75),
 *        q = le quotient entier (nombre de tranches complètes de 75€),
 *        r = le reste de la division (non utilisable pour un ticket supplémentaire).
 * 
 // Ce concept est à l’intersection de la théorie des nombres et des mathématiques appliquées, 
 // en particulier les mathématiques discrètes.
 * 
 * 
 * 2. Multiples et congruences :
 *    - La soustraction du reste (a % b) ramène le nombre "a" au plus grand multiple de "b"
 *      qui est inférieur ou égal à "a".
 *    - Par exemple, si difference = 185 :
 *      difference % 75 = 35
 *      difference - (difference % 75) = 150 (le plus grand multiple de 75 inférieur ou égal à 185).
 * 
 * 3. Arithmétique modulaire :
 *    - Cette technique garantit que seules les tranches complètes de 75€ sont prises en compte,
 *      en ignorant toute partie décimale ou reste inutile dans le calcul.
 * 
 * 4. Utilité pratique :
 *    - Cela permet d'optimiser les calculs en évitant l'utilisation de nombres à virgule flottante.
 *    - C'est une méthode utilisée dans de nombreux domaines, comme la répartition en lots ou 
 *      l'optimisation d'algorithmes discrets.
 * 
 * Exemple dans le contexte :
 * Si le prix total est 300€ :
 *   difference = prixTotal - 150 = 300 - 150 = 150
 *   difference % 75 = 0 (pas de reste)
 *   nbTickets = (difference - (difference % 75)) / 75 = 150 / 75 = 2 tickets
 */