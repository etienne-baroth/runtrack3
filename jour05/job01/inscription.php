<?php

require_once('config.php');


if (isset($_POST['submit'])) {

    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];

    $request = $database->prepare('INSERT INTO utilisateurs (nom, prenom, email, password) VALUES (?,?,?,?)');

    if ($request->execute(array($nom, $prenom, $email, $password))) {

        header('Location: connexion.php');
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>

<body>

    <form method="post" id="myForm">
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom">

        <label for="prenom">Prénom</label>
        <input type="text" id="prenom" name="prenom">

        <label for="email">Email</label>
        <input type="email" id="email" name="email">

        <label for="password">MDP</label>
        <input type="password" id="password" name="password">

        <label for="passwordConf">Confirmation MDP</label>
        <input type="password" id="passwordConf" name="passwordConf">

        <input type="submit" id="btnInscription" value="Valider" name="submit">
    </form>

    <p id="inscriptionError"></p>

    <script src="script.js"></script>
</body>

</html>