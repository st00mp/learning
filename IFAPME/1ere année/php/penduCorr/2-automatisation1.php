<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendu step1 - Automatisation de la logique</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    /*
 * deux
 *
 *A connaitre: recherche dans la doc (methodes), les tableaux, isset, $cpt++, condition &&...
 *
 * Recherche réelle dans le mots et reflexion sur les cas possible 0 1 + infini (test)
 * les variables $ok et $lettres sont donc à deplacer dans la partie variables calculées (deux de moins :-) )
 * remplacer le contenu de $lettres qui est actuellement constitué des lettres séparées par des virgules par
 * (pour tablette et t comme lettre) T____TT_ ;-)
 * creer un tableau avec divers mots et trouver une methode pour en prendre un au hasard. Du coup, $mot Mystere passe en variable calculée
*/

    //constante d'environnement.
    const NBR_CHANCE = 6;

    //variables qui viennent du formulaire
    $lettreProposee = "t"; //la lettre proposée recue via un formulaire
    $motPropose = "salon"; // un mot que l'utilisateur propose si il croit avoir trouvé

    //variable externe, elle viendra d'un fichier reprenant une liste de mots
    //$motMystere = 'tablette'; //le mot à trouver
    //variables qui seront calculées à terme. Pour l'instant on indique "en dure" la valeur
    $nbrEchec = 0; // le nombre de fautes
    //$lettres = 't,b'; // les lettres trouvées séparées par une virgule.
    //$ok = true; // la lettre a été trouvée ou pas

    //variables "calculées"

    //*********************************

    //creation du panier à mot:
    $motsMysteres = ['table', 'tablette', 'croc', 'oiseau', 'champignon', 'porte', 'language', 'truite', 'vendu', 'tasse'];
    $motMystere = $motsMysteres[array_rand($motsMysteres, 1)];


    //on place dans un tableau les lettres trouvées avec comme key la position de la lettre et valeur la lettre
    $nbrResult = 0;
    $lettres = [];
    foreach (str_split($motMystere) as $key => $m) {
        if ($m == $lettreProposee) {
            $nbrResult++;
            $lettres[$key] = $m;
        }
    }
    $resteChance = 'Il te reste ' . (NBR_CHANCE - $nbrEchec) . ' chances';

    if ($motPropose != "") {
        if ($motPropose == $motMystere) $message = "Bravo! vous avez trouvé le mot";
        else {
            $message = "Hé non... Ce n'est pas le bon mot mystere... ";
            $nbrEchec++;
        }
    } else {
        if ($nbrResult > 0) {
            $message = "Bravo! La lettre existe dans le mot. " . $resteChance;
        } else {
            $message = "Pas de chance... Cette lettre n'est pas de le mot " . $resteChance;
            $nbrEchec++;
        }
    }


    NBR_CHANCE === $nbrEchec && $message = "Game Over";
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

        <?php

        for ($i = 1; $i <= sizeof(str_split($motMystere)); $i++) {
            if (isset($lettres[$i - 1])) echo strtoupper($lettres[$i - 1]);
            else echo '_';
            echo ' ';
        }

        ?>
    </div>
</body>

</html>