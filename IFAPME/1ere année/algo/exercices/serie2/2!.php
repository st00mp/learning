<?php

// Etablir un tableau de conversion des degrés Fahrenheit en degrés Celsius pour les valeurs
// Fahrenheit 0, 20, 40, 60, …, 300. [Formule : 1 degré Celsius = 5/9 * (1 degré Fahrenheit -32)]

// IN
$liste;
// OUT
$celsius;
// To create

function convertirFahrenheit()
{
    for ($fahrenheit = 0; $fahrenheit <= 300; $fahrenheit += 20) {
        $celsius = 5 / 9 * ($fahrenheit - 32);
        echo $fahrenheit . " degrés Fahrenheit équivaut à " . round($celsius, 2) . " degrés Celsius<br>";
    }
}

convertirFahrenheit();


