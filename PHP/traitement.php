<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "Bonjour " . $_POST['nom'] . "<br>";
    echo $_POST['email'] . "<br>";
    echo $_POST['message'] . "<br>";
} else {
    echo "Erreur 404 : méthode non autorisée.";
}

?>
<?php

$commandes = [
    '1' => 'En cours',
    '2' => 'Expédiée',
    '3' => 'Livrée',
    '4' => 'Annulée'
];

if ($_GET['numero_commande'] != "") { 
    $numero_commande = $_GET['numero_commande']; 

    if (array_key_exists($numero_commande, $commandes)) {
        echo "La commande " . $numero_commande . " est : " . $commandes[$numero_commande] . "<br>";
    } else {
        echo "La commande " . $numero_commande . " n'existe pas";
    }
}

?>




















?>
