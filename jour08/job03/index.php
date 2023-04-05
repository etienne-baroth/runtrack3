<!DOCTYPE html>
<html lang="fr">

<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>

</head>

<body>

    <header>
        <nav class="bg-red-500 px-2  py-2.5  w-full z-20 top-0 left-0 border-b border-gray-300 ">
            <div class="container flex  items-center justify-center mx-auto">

                <div class="items-center justify-center  w-full" id="navbar-sticky">
                    <ul class="flex flex-row p-4  border border-gray-100 rounded-lg bg-gray-50">
                        <li>
                            <a href="#" class="block py-2 pl-3 pr-4 mr-4 text-white bg-red-500 rounded " aria-current="page">Accueil</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pl-3 pr-4 mr-4 text-gray-700 rounded hover:bg-red-500 hover:text-white ">Inscription</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pl-3 pr-4 mr-4 text-gray-700 rounded hover:bg-red-500 hover:text-white ">Connexion</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pl-3 pr-4 mr-4 text-gray-700 rounded hover:bg-red-500 hover:text-white ">Rechercher</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <form action="index.php">
        <div>
            <input type="text" name="prenom" id="prenom" placeholder="Prénom">
        </div>
        <div>
            <input type="text" name="nom" id="nom" placeholder="Nom">
        </div>
        <div>
            <input type="text" name="adresse" id="adresse" placeholder="adresse">
        </div>
        <div>
            <input type="email" name="email" id="email" placeholder="email">
        </div>
        <h3>civilité:</h3>
        <div>
            <input type="radio" name="sexe" id="homme" value="homme">
            <label for="homme">Homme</label>
        </div>
        <div>
            <input type="radio" name="sexe" id="femme" value="femme">
            <label for="femme">Femme</label>
        </div>
        <div>
            <input type="password" name="password" id="password" placeholder="Mot de passe">
            <input type="password" name="password2" id="password2" placeholder="Confirmer votre Mot de passe ">
        </div>
        <div>
            <button type="submit">Valider</button>
        </div>
    </form>

    <footer class="absolute bottom-0 w-full">
        <nav class="py-4 bg-gray-600 text-white">
            <div>
                <ul class="flex justify-center">
                    <li>
                        <a href="#" class="block py-1.5 px-2.5  rounded hover:text-orange-600 hover:bg-white">Accueil</a>
                    </li>
                    <li>
                        <a href="#" class="block py-1.5 px-2.5 rounded  hover:text-orange-600 hover:bg-white">Inscription</a>
                    </li>
                    <li>
                        <a href="#" class="block py-1.5 px-2.5 rounded  hover:text-orange-600 hover:bg-white">Connexion</a>
                    </li>
                    <li>
                        <a href="#" class="block py-1.5 px-2.5 rounded  hover:text-orange-600 hover:bg-white">Rechercher</a>
                    </li>
                </ul>
            </div>
        </nav>
    </footer>

</body>

</html>