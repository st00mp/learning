<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendu Fichier de Base</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    //constante d'environnement.
    const NBR_CHANCE = 6;

    //variables qui viennent du formulaire
    $lettreProposee = "a"; //la lettre proposée qui sera recue via un formulaire plus tard


    //variable externe, elle viendra d'un fichier reprenant une liste de mots à terme
    $motMystere = [
        "aquarelle",
        "bastion",
        "synopsis",
        "aqueduque"
    ];

    $motPropose = [
        "chateau",
        "chapeau",
        "tirelire",
        "jaune"
    ];


    //variables qui seront calculées à terme. Pour l'instant on indique "en dur" la valeur
    $nbrEchec = 0; // le nombre de faute
    $lettres = 't,b'; // les lettres trouvées séparées par une virgule.
    $lettresTrouvee = "e";
    echo NBR_CHANCE;
    ?>

    <?php
    $mots
    ?>


    <div class="pendu">
        <div class="potence">
            <div class="base"></div>
            <div class="pilier"></div>
            <div class="barre"></div>
            <div class="corde"></div>
        </div>

        <div class="bonhomme">
            <?php

            for ($i = 9; $i >= NBR_CHANCE; $i--) {
                if ($i == 9) {
                    echo "<div class='tete'></div>";
                } elseif ($i == 8) {
                    echo "<div class='corps'></div>";
                } elseif ($i == 7) {
                    echo "<div class='bras bras-gauche'></div>";
                } elseif ($i == 6) {
                    echo "<div class='bras bras-droit'></div>";
                } elseif ($i == 5) {
                    echo "<div class='jambe jambe-gauche'></div>";
                } elseif ($i == 4) {
                    echo "<div class='jambe jambe-droit'></div>";
                }
            }
            ?>

        </div>
    </div>
    <div class="reponse">

        <!-- Afficher message "Lettre proposées" -->
        <p>Lettre proposées : <?php echo $lettres; ?></p>

        <!-- Afficher message "Nouvelle lettre trouvée !" -->
        <?php
        if ($lettresTrouvee == "e") {
            echo "<p>Nouvelle lettre trouvée ! 🥳 : " . $lettresTrouvee . "</p>";
        }
        ?>

        <!-- Afficher un message quand le mot est trouvé -->

        <?php
        if ($motPropose == "tablette") {
            echo "<p>" . "'" . $motPropose . "'" . " était bien le mot recherché. C'est gagné !!! 🎉</p>";
        }
        ?>

        <!-- Afficher message "Game Over" -->
        <?php
        if (NBR_CHANCE <= 4) {
            echo "<p>GAME OVER 💀</p>";
        }
        ?>



    </div>
</body>

</html>