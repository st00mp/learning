<?php 

$dico["abris"] = "Un abris est ...";
$dico["table"] = "Une table est ...";
$dico["croquette"] = "Une croquette est ...";
$dico["..."] = "... est ...";

$motRecherche = "table";
$motRecherche2 = "croquette";
$i = 0;

foreach ($dico as $key => $value) {
    if ($key != $motRecherche && $key != $motRecherche2) continue;
    echo "Le mot recherché est " . $key . " et sa défintion est " . $value;
    $i++;
    if ($i >= 2) break;
}
