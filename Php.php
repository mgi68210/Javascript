<!-- <?php
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
$taxe = $prix * TAXE;

// 3) Affiche un message: "Le montant de la taxe est de [montant de la taxe] €."

echo "Le montant de la taxe est de" . $taxe . "€.";

?>

<?php
//Exercice 4
// 1) Crée une variable $nom et assigne-lui ton nom.

$nom ="Marie";
echo "Affichage de nom :<br>";
var_dump($nom);

// 2) Crée une variable $age et assigne-lui ton âge.

$age =33;
echo "<br> Affichage de age :<br>";
var_dump($age);

// 3) Modifie la valeur de $age et utilise var_dump() à nouveau pour afficher la nouvelle valeur.

$age=25;
echo "<br>Affichage après modification de $age:<br>";
var_dump($age);

?>


<?php

// Exercice 5
// 1) Crée une variable $temperature et assigne-lui une valeur qui représente la température en degrés Celsius.

$temperature = -5;


// 2) Utilise une condition if pour vérifier si la température est inférieure à 0. Si c'est le cas, affiche "Il fait froid". Sinon, affice "La température est agréable".

if ($temperature < 0) {
    echo "Il fait froid<br>";
} else {
    echo "La température est agréable <br>";
}


// Exercice 6
// 1) Crée une variable $nombre et assigne-lui un nombre entier.

$nombre = 7; 


/* 2) Utilise une condition if pour vérifier si le nombre est pair ou impair.
    - Si le nombre est pair, affiche "Le nombre est pair."
    - Sinon, affiche "Le nombre est impair." */

    if ($nombre % 2 == 0) {
        echo "Le nombre est pair.<br>";
    } else {
        echo "Le nombre est impair.<br>";
    }
    

// Exercice 7
// 1) Crée une variable $jour et assigne-lui un nombre entier représentant un jour de la semaine (par exemple, 1 pour lundi, 2 pour mardi, etc).

$jour =10; 


// 2) Utilise un switch pour afficher le jour e la semaine correspondant. Par exemple, si $jour vaut 1 vaut 2, affiche "mardi", etc.

switch ($jour) {
    case 1:
        echo "Lundi";
        break;
    case 2:
        echo "Mardi";
        break;
    case 3:
        echo "Mercredi";
        break;
    case 4:
        echo "Jeudi";
        break;
    case 5:
        echo "Vendredi";
        break;
    case 6:
        echo "Samedi";
        break;
    case 7:
        echo "Dimanche";
        break;
    default:
        echo "Jour introuvable";
        break;
}



// 3) Si le nombre n'est pas entre 1 et 7, affiche "Jour introuvable".


?>
 -->

