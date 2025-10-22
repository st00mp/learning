<?php

function direBonjour($prenom, $role = "Utilisateur"){
    echo "Bonjour " . $role . " " . $prenom;
    echo "<br>";
}

direBonjour("Pierre"); // Affiche : Bonjour utilisateur Pierre
direBonjour("Marie", "Administrateur"); // Affiche : Bonjour administrateur Marie