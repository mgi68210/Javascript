<?php
//Exercice 1

$prenom ="Marie";
$message="Bonjour ". $prenom ."!";
echo $message;

$age = 33;
$messag=" Tu as ". $age ."ans ";
echo $messag;

?>

<?php 

//Exercice 2
// 1) Crée une variable $prix et assigne-lui la valeur 19,99.

$prix = 19.99;


// 2) Crée une autre variable $quantite et assigne-lui la valeur 5.

$quantite=5;

// 3) Multiplie ces deux variables et affiche le résultat sous la forme: "Le prix total est de [prix total] €."

$somme="le prix total est de ". $prix * $quantite . "€ ";
echo $somme;


//Exercice 3
// 1) Déclare uen constante TAXE avec la valeur 0,2 (représentant une taxe de 20%).

define("TAXE",0.2);
echo TAXE;


// 2) Utilise cette constante pour calculer et afficher le montant de la taxe sur un prix de 50€.

$prix = 50;
$som="le prix total est de ". $prix * TAXE . "€ ";
echo $som;

// 3) Affiche un message: "Le montant de la taxe est de [montant de la taxe] €."

$result="Le montant de la taxe est de  ". $prix - TAXE . "€ ";
echo $result;

?>

<?php
//Exercice 4
// 1) Crée une variable $nom et assigne-lui ton nom.

$nom ="Marie";


// 2) Crée une variable $age et assigne-lui ton âge.

$age =33;


// 3) Utilise var_dumb() pour afficher les informations sur la variable $nom.

var_dump($nom);

// 4) Utilise var_dump() pour afficher les informations sur la variable $age.

var_dump($age);


// 5) Modifie la valeur de $age et utilise var_dump() à nouveau pour afficher la nouvelle valeur.

$age=25;
var_dump($age);


?>





