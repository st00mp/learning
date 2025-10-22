<?php

// Etant donné le nombre entier Nbr introduit par l’utilisateur, on vous demande d’écrire le
// diagramme d’action qui affiche le message « plus petit », « plus grand » ou « égal »
// selon que ce sombre est inférieur, supérieur ou égal à 100 et le message « nombre
// nul », « nombre pair » ou « nombre impair » selon le cas.

//IN
// $int; 

//OUT
// message taille :  "plut petit", "plus grand", "égal"
// message parité : "pair" ou "impair"

//To create
// Comparer $int à 100
// Vérifier parité de $int

function analyserInt($int){
    if ($int == 0) {
        echo $int . " est nul<br>";
    } else {
        if ($int % 2 != 0) {
            echo $int . " est impair<br>";
        } else {
            echo $int . " est pair<br>";
        }
    }
    if ($int < 100) {
        echo $int . " est plus petit que 100<br>";
    } elseif ($int > 100) {
        echo $int . " est plus grand que 100<br>";
    } else {
        echo $int . " est égal à 100<br>";
    }
}


// Cas 1 : Nbr = 50
analyserInt(50);
// Cas 2 : Nbr = 101
analyserInt(101);
// Cas 3 : Nbr = 100
analyserInt(100);
// Cas 4 : Nbr = 0
analyserInt(0);


// avec "return"

function analyserIntR($nombre) {
    $resultat = "";

    // Vérifie si le nombre est nul
    if ($nombre == 0) {
        $resultat .= $nombre . " est nul<br>";
    } else {
        // Vérifie la parité
        if ($nombre % 2 != 0) {
            $resultat .= $nombre . " est impair<br>";
        } else {
            $resultat .= $nombre . " est pair<br>";
        }
    }

    // Vérifie la relation avec 100
    if ($nombre < 100) {
        $resultat .= $nombre . " est plus petit que 100<br>";
    } elseif ($nombre > 100) {
        $resultat .= $nombre . " est plus grand que 100<br>";
    } else {
        $resultat .= $nombre . " est égal à 100<br>";
    }

    // Retourne le résultat
    return $resultat;
}

// Tests des cas
echo analyserIntR(50);   // Affiche le résultat pour 50
echo analyserIntR(101);  // Affiche le résultat pour 101
echo analyserIntR(100);  // Affiche le résultat pour 100
echo analyserIntR(0);    // Affiche le résultat pour 0