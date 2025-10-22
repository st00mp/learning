<?php

// Une couse démarre à HeureDep (introduit sous la forme HHMM).
// On introduit le nom d’un participant (Nom) et son heure d’arrivée (HeureArr : HHMM).
// On vous demande d’écrire le diagramme d’action qui affichera soit un message de
// disqualification si la personne a mis au moins deux heures pour effectuer le parcours
// soit le temps de parcours sous la forme x min ou 1h y min.

// IN
$nom; $heureDep; $heureArr;  
// OUT
// message disqualification || temps de parcours (min ou heure et min)
// To create

function calculerTempsParcours($nom, $HHMMD, $HHMMA){
    $HHD = intdiv($HHMMD, 100);
    $MMD = $HHMMD % 100;
    $HHA = intdiv($HHMMA, 100);
    $MMA = $HHMMA % 100;

    $tempsParcoursMin = (($HHA * 60 + $MMA) - ($HHD * 60 + $MMD));
    
    if ($tempsParcoursMin >= 120){;
        echo $nom . " est disqualifié<br>";
        return;
    }
    
    $HHP = intdiv($tempsParcoursMin, 60);
    $MMP = $tempsParcoursMin % 60;
    
    if ($HHP > 0){
        echo $nom . " à un temps de parcours de " . $HHP . "h" . $MMP . "m <br>";
    } else {
        echo $nom . " à un temps de parcours de " . $tempsParcoursMin . " minutes<br>";
    }


}

$tests = [
    ["nom" => "Alice", "HHMMD" => 900, "HHMMA" => 1015],  // 1h15min
    ["nom" => "Bob", "HHMMD" => 800, "HHMMA" => 1030],   // 2h30min (disqualifié)
    ["nom" => "Charlie", "HHMMD" => 1100, "HHMMA" => 1210], // 1h10min
    ["nom" => "Diane", "HHMMD" => 700, "HHMMA" => 845],  // 1h45min
    ["nom" => "Eve", "HHMMD" => 1400, "HHMMA" => 1630],  // 2h30min (disqualifié)
    ["nom" => "Frank", "HHMMD" => 1530, "HHMMA" => 1655], // 1h25min
    ["nom" => "Isabelle", "HHMMD" => 1530, "HHMMA" => 1629] // 1h25min

];

foreach ($tests as $test){
    calculerTempsParcours($test["nom"], $test["HHMMD"], $test["HHMMA"]);
}