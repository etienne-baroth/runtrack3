<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <form action="">
        <label for="id">id</label>
        <input type="text" name="id" class="id" id="id">

        <label for="nom">nom</label>
        <input type="text" name="nom" class="nom" id="nom">

        <select name="type" id="type" class="type">
        <option value=""><b>types<b></option>
            <option value="Grass">Grass</option>
            <option value="Poison">Poison</option>
            <option value="Fire">Fire</option>
            <option value="Flying">Flying</option>
            <option value="Water">Water</option>
            <option value="Bug">Bug</option>
            <option value="Normal">Normal</option>
            <option value="Electric">Electric</option>
            <option value="Ground">Ground</option>
            <option value="Fairy">Fairy</option>
            <option value="Fighting">Fighting</option>
            <option value="Psychic">Psychic</option>
            <option value="Rock">Rock</option>
            <option value="Steel">Steel</option>
            <option value="Ghost">Ghost</option>
            <option value="Ice">Ice</option>
            <option value="Dragon">Dragon</option>
        </select>

        <input type="button" name="filtrer" value="filtrer" class="filtrer" id="filtrer">
    </form>



    <script src="script.js"></script>
</body>
</html>