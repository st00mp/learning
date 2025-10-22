
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendu step1 - Affichage erreur ou lettre </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<?php

//constante d'environnement.
const NBR_CHANCE = 6;

//variables qui viennent du formulaire
$lettreProposee = "v"; //la lettre proposée recue via un formulaire

//variable externe, elle viendra d'un fichier reprenant une liste de mots
$motMystere = 'table'; //le mot à trouver

//variables qui seront calculées à terme. Pour l'instant on indique "en dure" la valeur
$nbrEchec = 4; // le nombre de fautes
$lettres = 't,b'; // les lettres trouvées séparées par une virgule.
$ok = true; // la lettre a été trouvée ou pas

//variables "calculées"
$resteChance = 'Il te reste ' . (NBR_CHANCE - $nbrEchec) . ' chances';

if ($ok == true) {
    $message = "Bravo! La lettre existe dans le mot. " . $resteChance;
} else $message = "Pas de chance... Cette lettre n'est pas de le mot " . $resteChance;

if (NBR_CHANCE === $nbrEchec) $message = "Game Over";
?>

<div><?php echo $message ?></div>
<div class="pendu">

    <div class="potence">
        <div class="base"></div>
        <div class="pilier"></div>
        <div class="barre"></div>
        <div class="corde"></div>
    </div>
    <div class="bonhomme">
        <?php
        if ($nbrEchec > 0) echo '<div class="tete"></div>';
        if ($nbrEchec > 1) echo '<div class="corps"></div>';
        if ($nbrEchec > 2) echo ' <div class="bras bras-gauche"></div>';
        if ($nbrEchec > 3) echo ' <div class="bras bras-droit"></div>';
        if ($nbrEchec > 4) echo ' <div class="jambe jambe-gauche"></div>';
        if ($nbrEchec > 5) echo ' <div class="jambe jambe-droit"></div>';
        ?>
    </div>
</div>
<div class="reponse">
    Lettres trouvée: <?php echo $lettres ?>
</div>
</body>
</html>
