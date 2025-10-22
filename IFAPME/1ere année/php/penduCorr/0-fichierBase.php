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
    const NBR_CHANCE = 10;

    //variables qui viennent du formulaire
    $lettreProposee = "a"; //la lettre proposée qui sera recue via un formulaire plus tard

    //variable externe, elle viendra d'un fichier reprenant une liste de mots à terme
    $motMystere = 'tablette'; //le mot à trouver

    //variables qui seront calculées à terme. Pour l'instant on indique "en dure" la valeur
    $nbrEchec = 0; // le nombre de faute
    $lettres = 't,b'; // les lettres trouvées séparées par une virgule.
    echo NBR_CHANCE;
    ?>
    <div class="pendu">
        <div class="potence">
            <div class="base"></div>
            <div class="pilier"></div>
            <div class="barre"></div>
            <div class="corde"></div>
        </div>
        <div class="bonhomme">
            <div class="tete"></div>
            <div class="corps"></div>
            <div class="bras bras-gauche"></div>
            <div class="bras bras-droit"></div>
            <div class="jambe jambe-gauche"></div>
            <div class="jambe jambe-droit"></div>
        </div>
    </div>
    <div class="reponse">


    </div>
</body>

</html>