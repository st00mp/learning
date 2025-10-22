<?

// On dispose en mémoire centrale d’un tableau nommé TabSemDer reprenant les 10 meilleures
// ventes de CD de la semaine dernière. Chaque cellule de ce tableau reprend titre et interprète du
// disque classé. Ce tableau est trié par ordre décroissant sur les ventes.
// On introduit les 10 meilleurs ventes (titre et interprète) de cette semaine, par ordre décroissant
// sur les ventes.
// A partir de ces informations, afficher le classement commenté de la semaine en cours par ordre
// décroissant sur le montant des ventes. Pour chaque chanson, on indiquera sa position dans le
// top 10, l’interprète et l’écart par rapport au classement précédent (« Gain de x places », « recul
// de x places », « statu quo » ou « nouvelle entrée »).

// IN
$titre;
$interprète;
$disque;
$mtVentes;
// OUT
$ecart;
$message; // (« Gain de x places », « recul de x places », « statu quo » ou « nouvelle entrée »)
// To create


$TabSemDer = [
    ['titre' => 'Old Song 1', 'interprete' => 'Artist A'],
    ['titre' => 'Old Song 2', 'interprete' => 'Artist B'],
    ['titre' => 'Old Song 3', 'interprete' => 'Artist C'],
    ['titre' => 'Old Song 4', 'interprete' => 'Artist D'],
    ['titre' => 'Old Song 5', 'interprete' => 'Artist E'],
    ['titre' => 'Old Song 6', 'interprete' => 'Artist F'],
    ['titre' => 'Old Song 7', 'interprete' => 'Artist G'],
    ['titre' => 'Old Song 8', 'interprete' => 'Artist H'],
    ['titre' => 'Old Song 9', 'interprete' => 'Artist I'],
    ['titre' => 'Old Song 10', 'interprete' => 'Artist J'],
];


$TabSemCur = [
    ['titre' => 'Old Song 1', 'interprete' => 'Artist A'],
    ['titre' => 'Old Song 4', 'interprete' => 'Artist D'],
    ['titre' => 'Old Song 8', 'interprete' => 'Artist H'],
    ['titre' => 'Old Song 2', 'interprete' => 'Artist B'],
    ['titre' => 'Old Song 3', 'interprete' => 'Artist C'],
    ['titre' => 'Old Song 6', 'interprete' => 'Artist F'],
    ['titre' => 'Old Song 7', 'interprete' => 'Artist G'],
    ['titre' => 'Old Song 5', 'interprete' => 'Artist E'],
    ['titre' => 'Old Song 9', 'interprete' => 'Artist I'],
    ['titre' => 'Old Song 10', 'interprete' => 'Artist J'],
];


for ($i = 0; $i < 10; $i++) {
    if (($TabSemCur[$i]["titre"] == $TabSemDer[$i]["titre"]) && ($TabSemCur[$i]["interprete"] == $TabSemDer[$i]["interprete"])) {
        echo $TabSemCur[$i]["titre"] . " - " . $TabSemCur[$i]["interprete"] . ": statut quo <br>";
        echo "Top" . ($i + 1) . "<br>";
    } elseif (($TabSemCur[$i]["titre"] == $TabSemDer[$i + 1]["titre"]) && ($TabSemCur[$i]["interprete"] == $TabSemDer[$i + 1]["interprete"])) {
        echo $TabSemCur[$i]["titre"] . " - " . $TabSemCur[$i]["interprete"] . ": Recul de 1 place <br>";
        echo "Top" . ($i + 1) . "<br>";
    } else {
        echo $TabSemCur[$i]["titre"] . $TabSemCur[$i]["interprete"] . " Nouvelle entrée ";
        echo "Top" . ($i + 1) . "<br>";
    }
}
