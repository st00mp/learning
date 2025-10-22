<?php 

// Sachant que l’on introduit deux valeurs VarA et VarB, écrire le diagramme d’action qui
// permute le contenu de ces variables.

//IN
// $varA; $varB; 
//OUT
// $pVarA; $pVarB;
// To create
// $temp

$tests = [
    ["VarA" => 0, "VarB" => 1]
];

function permuter($varA, $varB){

    echo "Avant permutation : VarA = " . $varA . ", VarB = " . $varB . "<br>";

    $temp = $varA;
    $varA = $varB; 
    $varB = $temp;

    echo "Après permutation : VarA = " . $varA . ", VarB = " . $varB . "<br>";
}

foreach ($tests as $test){
    permuter($test["VarA"], $test["VarB"]);
}