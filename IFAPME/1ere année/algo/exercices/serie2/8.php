<?php

//// 1 000 personnes se sont présentées à un concours de recrutement qui comportait trois épreuves
// successives : écrit de connaissances, oral de connaissances et interview culturelle.
//// On introduit, pour chaque candidat, son nom, et ses résultats aux différentes épreuves
// présentées (cotation sur 100). On demande de sortir le nom et le résultat de chaque candidat
// ainsi que le nombre de personnes recrutées immédiatement.

//// Les règles appliquées sont les suivantes :
// - Si le candidat abandonne une épreuve, le résultat de cette épreuve et des suivantes est de -1
// - Si le jury estime qu’écrit et oral de connaissances sont insuffisant, le résultat de la dernière
// épreuve est à 0.
// - Pour être recruté, il faut présenter les trois épreuves, obtenir au moins 70% de moyenne pour
// écrit et oral réunis et au moins 80% dans la troisième épreuve.
// Si les deux premières conditions sont vérifiées et si le candidat n’a pas obtenu au moins 80%
// mais plus de 60% dans la troisième épreuve, il est susceptible d’être recruté.
//// Le résultat demandé ci-dessus sera un des messages suivants : « Recruté », « susceptible d’être
// recruté », « refusé car abandon », « refusé : non accès à la troisième épreuve » ou « refusé :
// résultat insuffisant ».

// IN
$nom; $ecrit; $oral; $interview;  // 1000 fois
// OUT
$nom; $resultats; // 1000 fois
$nbRecruesImm; // 1 fois
// To create

$nbRecruesImm = 0;

for ($i = 1; $i <= 1000; $i++){
    // Simulation des données pour chaque candidat
    $nom = "Candidat $i";
    $ecrit = rand(-1, 100);
    $oral = rand(-1, 100);
    $interview = rand(-1, 100);

    $resultat = "";

    // Abandon
    if ($ecrit == -1 || $oral == -1 || $interview == -1){
        $resultat = "Refusé car abandon";

    } else {
        // Calcul de la moyenne écrit/oral
        $moyenneEO = ($ecrit + $oral) /2;
        
        if ($moyenneEO < 70){
            // Non accès à la troisième épreuve
            $interview = 0;
            $resultat = "Refusé - résultat insuffisant";    
            
        } else {
            // Conditions pour être recruté ou susceptible
            if ($interview >= 80){ // pas besoin de recopier if ($moyenneEO < 70) car le else filtre déjà cette condition
                $resultat = "Recruté";
                $nbRecruesImm++;
            } elseif ($interview > 60){
                $resultat = "Susceptible d'être recruté";
            } else {
                $resultat = "Refusé - résultat insuffisant";    
            } 

        }
    }
    echo "$nom est $resultat <br>";
};

echo "<br><strong>Le nombre de recrue immédiate est de $nbRecruesImm </strong>";