<?php
date_default_timezone_set("Europe/Brussels");

// echo date("d/M/y", time());

// echo date("H:i:s", time());

// setcookie("pseudo", "Jean", time() + 3600); // expire dans 1h
// echo $_COOKIE["pseudo"];

/*
Eu europe le rgp impose :
- D'avertir de l'utilisation de cookies
- D'obtenir le consentement explicite pour des cookies non essentiels
- De permettre leur désactivation
*/

// setcookie("nom", "valeur", time() + 3600);
// setcookie("nom", "valeur", time() - 3600);

// echo $_COOKIE("nom");

// session_start();
// $_SESSION["email"] = "vco@o.be";
// echo $_SESSION["email"];

// // Lire un fichier en entier 

// $contenu = file_get_contents("script.txt");
// echo $contenu;

// $f = fopen("texte.txt", "r");
// while (!feof("texte.txt")) {
//     $ligne = fgets($f);
//     echo $ligne;
// };
// fclose($f);


// file_put_contents("fichier.txt", "Nouvelle ligne \n", FILE_APPEND);

// file_get_contents("f.txt");

// $f = fopen("f.txt", "r");
// while (!feof($f)) {
//     $content = fgets($f);
//     echo $content;
// };
// fclose($f);

// file_put_contents("f.txt", "Nouvelle ligne\n", FILE_APPEND);
// $f = fopen("f.txt", "r+");
// fwrite($f, "Ligne\n");
// fclose($f);

// if file_exists("f.txt"){
//     echo "Le fichier existe";
// } else { 
//     unlink("f.txt");
// } 

// chmod("f.txt", 0644);

// date_default_timezone_set("Europe/Paris");

// time();
// date("H:i:s", time());
// date("d/m/Y", time());

$dt = new DateTime();
echo $dt->format("d-m-Y H:i:s");

setcookie("nom", "valeur", time() + 3600);
echo $_COOKIE["nom"];

session_start();
$_SESSION["email"] = "v@h.v";
