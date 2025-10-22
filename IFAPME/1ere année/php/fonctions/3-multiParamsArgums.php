<?php

// Affiche : Bonjour Marie, tu as 25 ans.

function saluer($prenom, $age) {
    echo "Bonjour, je m'appelle " . $prenom . " et j'ai " . $age . " ans.";
}

saluer("Julie", 18);

function direBonjour($prenom = "Ludo"){
    echo "Bonjour, je m'appelle " . $prenom;
}

// direBonjour();
direBonjour("Vincent");