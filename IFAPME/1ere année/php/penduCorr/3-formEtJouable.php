<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
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
* trois
 *
 *A connaitre: Formulaire, serialize?
 *
 * A fournir : la partie serialize et html specialchars
 *
 * On rajoute un formulaire pour la lettre proposée mais également pour proposer un mot
 *
 * Trouvons une solution pour stocker ce qu'il faut pour faire unepartie dansle formulaire
 *
*/

    //constante d'environnement.
    const NBR_CHANCE = 6;
    $init = false;
    $fini = false;
    //recuperation des données du form
    $lettreProposee = $_POST['lettre'];

    //creation du panier à mot:

// Créer une version de la liste avec mots sans accents
    $ancienMotsMysteres = file("./liste.txt");
    $handle = fopen($ancienMotsMysteres, r);
    // Créer un nouveau fichier et ajouter les caractères un par un
    $newMotsMysteres = file_put_contents("./newList.txt", $lettre);
    $lettre = while fgetc($ancienMotsMysteres != false){
        if ($lettre == "é"){
            $lettre = "e"
        }
    }
    fclose($handle);

    // On crée une nouvelle version de ce tableau sans accents
    $NewMotsMysteres = $NewMotsMysteresRaw 
    
    if file_exists("./liste.txt"){

    // On  transforme le fichier texte en array avec clé et valeur
    $NewMotsMysteres = file("./liste.txt");
    // On prend une clée de manière aléatoire dans ce tableau
    $motMystere = array_rand($NewMotsMysteres);
    // On récupere la valeur de cette clé en récupérant la clé dans le tableau
    $motCherche = $NewMotsMysteres[$motMystere];
    // var_dump($motCherche);
    };

    // Lire un fichier caractère par caractère avec getc() + replace()?
    // file_put_contents()
    // fopen() et fclose()


    //determination des valeurs suivant les cas. Nouvelle partie ou partie en cours
    $ok = false;
    if (!isset($_POST['mot-mystere'])) {
        $motMystere = $NewMotsMysteres[array_rand($NewMotsMysteres, 1)];
        $nbrEchec = 0;
        $nbrResult = 0;
        $lettres = [];
    } else {
        $init = true;
        $motMystere = $_POST['mot-mystere'];
        $nbrEchec = $_POST['nbr-echec'];
        $nbrResult = $_POST['nbr-result'];
        $lettres = unserialize($_POST['lettres']);
    }
    //on place dans un tableau les lettres trouvées avec comme key la position de la lettre et valeur la lettre

    foreach (str_split($motMystere) as $key => $m) {
        if ($m == $lettreProposee) {
            $nbrResult++;
            $ok = true;
            $lettres[$key] = $m;
        }
    }
    strlen($motMystere) == sizeof($lettres) && $fini = true;

    //les messages
    $resteChance = 'Il te reste ' . (NBR_CHANCE - $nbrEchec - 1) . ' chances';

    if ($fini) $message = "Bravo, c'est gagné";

    if (isset($_POST['mot-propose']) && $_POST['mot-propose'] != "") {
        if ($_POST['mot-propose'] == $motMystere) $message = "Bravo! vous avez trouvé le mot";
        else {
            $message = "Hé non... Ce n'est pas le bon mot mystere... ";
            $nbrEchec++;
        }
    } else {
        if ($ok) {
            $message = "Bravo! La lettre existe dans le mot. " . $resteChance;
        } elseif ($init) {
            $message = "Pas de chance... Cette lettre n'est pas de le mot " . $resteChance;
            $nbrEchec++;
        }
    }


    NBR_CHANCE === $nbrEchec && $message = "Game Over";

    if (!$fini) {
        echo '<form method="post" action="#">';
        echo '<label for="lettre">Lettre proposée</label>';
        echo '<input id="lettre" type="text" name="lettre">';
        echo '<label for="mot-propose">Mot proposé</label>';
        echo '<input id="mot-propose" type="text" name="mot-propose">';
        echo '<input type="hidden" name="mot-mystere" value="' . $motMystere . '">';
        echo '<input type="hidden" name="nbr-echec" value="' . $nbrEchec . '">';
        echo '<input type="hidden" name="nbr-result" value="' . $nbrResult . '">';

        echo '<input type="hidden" name="lettres" value="' . htmlspecialchars(serialize($lettres)) . '">';
        echo '<button type="submit">Envoyer</button>';
        echo '</form>';
    }
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