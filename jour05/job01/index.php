<?php

require_once('config.php')

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
    
<nav>
    <a href="inscription.php">Inscription</a>
    <a href="connexion.php">Connexion</a>
</nav>

<h1>Bonjour <?php if (isset($_SESSION["utilisateur"]["prenom"])) {echo $_SESSION["utilisateur"]["prenom"];} ?></h1>

<!-- <?php var_dump($_SESSION) ?> -->

    <script src="script.js"></script>
</body>
</html>