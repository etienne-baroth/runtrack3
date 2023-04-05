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

    <form action="index.php" method="post" class="my-4 p-3 bg-gray-200 rounded flex flex-col gap-3 drop-shadow">
            <h1 class="text-center text-red-500 text-3xl roboto">Inscription</h1>
            <div>
                <input class="w-full rounded p-2" type="text" name="prenom" id="prenom" placeholder="Prénom">
            </div>
            <div>
                <input class="w-full rounded p-2" type="text" name="nom" id="nom" placeholder="Nom">
            </div>
            <div class="flex">
                <input class="w-full rounded-l p-2 relative" type="text" name="adresse" id="adresse" placeholder="adresse">
                <div class="bg-white p-2 rounded-r border-l"><img width="30" src="maison.png" alt="icone maison"></div>
            </div>
            <div class="flex">
                <input class="w-full rounded-l p-2" type="email" name="email" id="email" placeholder="email">
                <div class="bg-white p-2 rounded-r border-l"><img width="30" src="email.png" alt="icone email"></div>
            </div>
            <div class="flex justify-evenly">
                <span class="text-xl">civilité:</span>
                <input type="radio" name="sexe" id="homme" value="homme">
                <label for="homme"><img width="30" src="homme.png" alt="homme"></label>
                <input type="radio" name="sexe" id="femme" value="femme">
                <label for="femme"><img width="30" src="femme.png" alt="homme"></label>
            </div>
            <div>
                <input class="w-full rounded p-2" type="password" name="password" id="password" placeholder="Mot de passe">
            </div>
            <div>
                <input class="w-full rounded p-2" type="password" name="password2" id="password2" placeholder="Confirmer votre Mdp ">
            </div>
            <div>
                <button class="w-full rounded bg-red-500 text-white p-2" type="submit">Valider</button>
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