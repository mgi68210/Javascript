


<!-- 
// Exercice 25

// Crée un formulaire de contact avec les champs suivants :

// Nom (champ texte)

// Email (champ email)

// Message (champ texte)

// Lorsque l'utilisateur soumet le formulaire, les données doivent être récupérées en utilisant la méthode POST et affichées sur une nouvelle page. -->

    <form method="POST" action="traitement.php">
        Nom :<input type="text" name="nom"><br><br>

        Email :<input type="email" name="email"><br><br>

        Message :<textarea name="message"></textarea><br><br>

        <input type="submit" value="Envoyer">
    </form>


<!-- // exo26
// Vous gérez une boutique en ligne et vous souhaitez permettre à un utilisateur de vérifier l'état de sa commande en ligne. Créez un formulaire permettant à l'utilisateur de saisir son numéro de commande. En soumettant le formulaire, l'utilisateur doit être informé de l'état de sa commande (par exemple : "En préparation", "Expédiée", "Livrée", etc.).

// Utilisez la méthode GET pour envoyer le numéro de commande.

// Vous allez utiliser un tableau associatif qui contient la liste des numéros de commande en tant que clés, et leurs états correspondants en tant que valeurs. Par exemple : 'A123' => 'En préparation'.

// Lorsque l'utilisateur soumet le formulaire, vous devez rechercher dans ce tableau associatif le numéro de commande et afficher son état. Si le numéro de commande n'est pas trouvé dans le tableau, un message indiquant que la commande n'a pas été trouvée doit être affiché.
 -->

    <h2>Vérification de la commande </h2>
    <form method="GET" action="traitement.php">

        <label for="numero_commande">Numéro de commande :</label>

        <input type="text" name="numero_commande">

        <button type="submit">Vérifier</button>

    </form>


    <!-- 
-formulaire php avec nom, age et email
-vérifier la validité de chaque donnée (en php!) et afficher un message d'erreur pour chaque input s'il n'est pas valide
-si toutes les données sont valides, affiche un tableau avec les valeurs entrées -->

    <h2>Formulaire de test</h2>
    <form action="traitement.php" method="post">
        <table border="1" cellpadding="10">
            <tr>
                <td><label for="nom">Nom :</label></td>
                <td><input type="text" id="nom" name="nom"></td>
            </tr>
            <tr>
                <td><label for="age">Âge :</label></td>
                <td><input type="text" id="age" name="age"></td>
            </tr>
            <tr>
                <td><label for="email">Email :</label></td>
                <td><input type="email" id="email" name="email"></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <button type="submit">Envoyer</button>
                </td>
            </tr>
        </table>
    </form>

