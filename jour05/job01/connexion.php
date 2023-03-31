<?php

require_once('config.php');

// $sql = $database->prepare("SELECT * FROM utilisateurs");
// $datas = "";
// $sql->execute();

//     $res = $sql->fetchAll(PDO::FETCH_ASSOC);

//     $datas = json_encode($res);

    // echo $datas;


if(isset($_POST['submit'])) {

        $email = htmlspecialchars($_POST['email']);
        $password = $_POST['password'];

        $getUser = $database->prepare("SELECT* FROM utilisateurs WHERE email = :email AND password = :password");

        $getUser->bindValue(":email", $email);
        $getUser->bindValue(":password", $password);

        $getUser->execute();

        $user = $getUser->fetch();


        $_SESSION["utilisateur"] = [
            "id" => $user["id"],
            "prenom" => $user["prenom"],
            "nom" => $user["nom"]
        ];

        header('Location: index.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>

    <form method="post" id="myFormCo">
        <label for="email">email</label>
        <input type="text" id="emailCo" name="email">

        <label for="password">MDP</label>
        <input type="password" name="password" id="passwordCo">

        <input type="submit" name="submit" value="Valider" id="buttonConf">
    </form>

    <p id="connexionError"></p>


<script src="script.js"></script>
    
</body>
</html>