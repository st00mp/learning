<?php

// Etant donné le nom, le code sexe (H ou F) et l’état civil (M ou C) d’une personne, écrire
// le diagramme d’action qui affiche selon le cas : « Cher monsieur », « Chère madame »
// ou « Chère mademoiselle » suivi du nom de la personne.

// IN
// $nom; $sexe; $etatCivil; 

// OUT
// une phrase en fonction du sexe et état civil 

//To create
// Déterminer le titre à afficher en fonction des valeurs de Sexe et EtatCivil.

// Cas 1 : Nom = "Dupont", Sexe = "H", EtatCivil = "C". Résultat attendu : “Cher monsieur Dupont”.
// Cas 2 : Nom = "Durand", Sexe = "F", EtatCivil = "M". Résultat attendu : “Chère madame Durand”.
// Cas 3 : Nom = "Martin", Sexe = "F", EtatCivil = "C". Résultat attendu : “Chère mademoiselle Martin”.

function salutation($nom, $sexe, $etatCivil) {
    if ($sexe == "F") {
        if ($etatCivil == "C") {
            echo "Chère mademoiselle " . $nom;
        } 
        else {
            echo "Chère madame " . $nom;
        }
    } 

    else {
        echo "Cher monsieur " . $nom;
    }
}

salutation("Dupont", "H", "C");
salutation("Durand", "F", "M");
salutation("Martin", "F", "C");


// avec "return"

function salutationR($nom, $sexe, $etatCivil) {
    // Vérifie d'abord si le sexe est féminin
    if ($sexe == "F") {
        // Vérifie si l'état civil est célibataire
        if ($etatCivil == "C") {
            return "Chère mademoiselle " . $nom;
        }
        // Sinon, l'état civil est mariée
        return "Chère madame " . $nom;
    }

    // Si le sexe n'est pas féminin, il est masculin par défaut
    return "Cher monsieur " . $nom;
}

// Test des différents cas
echo salutationR("Dupont", "H", "C") . PHP_EOL; // Cher monsieur Dupont
echo salutationR("Durand", "F", "M") . PHP_EOL; // Chère madame Durand
echo salutationR("Martin", "F", "C") . PHP_EOL; // Chère mademoiselle Martin