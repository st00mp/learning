<?php

// Le service commercial d’une entreprise a organisé une action publicitaire auprès de ses clients.
// Chaque client a reçu un bon de commande sur lequel figurent 5 numéros de tombola. Chacun de
// ces numéros donne droit à un bon de réduction de 1 € à 16 €, pour autant que la commande
// atteigne au moins 100 € et qu’elle soit passée avant le 31 décembre 2021.
// Le client ne sait pas quels sont les montants attribués à ses numéros, mais il sait qu’ils sont
// cumulables et ferons au moins 5 * 1 € pour autant qu’il respecte les conditions de l’offre.
// Il s’agit, pour l’entreprise de traiter les bons de commande en retour.

// Les informations dont vous disposez sont les suivantes :
// o Un ensemble de fiches reprenant, pour chaque bon de commande :
// - Le nom du client : NomCli
// - La date de réception de la commande (AAAAMMJJ) : DatRec
// - Le montant de la commande : MontCom
// - Un tableau TabNumCli reprenant les 5 numéros attribués NumAtt
// o Un tableau TabTombola, en mémoire centrale, reprenant pour chacun des 1 000
// numéros de tombola distribués :
// - Les numéros : NumDis
// - La valeur à déduire : ValDed

// Afficher
// o La liste des clients qui bénéficient d’une réduction (nom et montant de la réduction)
// o Le nom du client qui a passé la commande la plus importante
// o La liste des clients ayant passé une commande de plus de 1 000 € (nom, montant de la
// commande et montant de la réduction)


// IN
$nomCli;
$dateRec;
$montCom;
$tabTombola = [
    ["NumDis" => 4],
    ["ValDed" => 5]
];
$tabNumCli["NumAtt"];

// OUT


// To create
// Par client


// INIT
$bestCom = 0;
$nomBest = "";



// Afficher la liste des clients qui bénéficient d’une réduction (nom et montant de la réduction)
echo $nom . $reduc;

// Afficher le nom du client qui a passé la commande la plus importante
echo $vip;

// Afficher la liste des clients ayant passé une commande de plus de 1 000 € (nom, montant de la commande et montant de la réduction)
echo $client1000;
