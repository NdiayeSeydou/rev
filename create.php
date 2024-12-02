<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertion</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <ul>
            <li><a href="index.html">Accueil</a></li>
            <li><a href="create.html">Insertion</a></li>
        </ul>
    </nav>
    <h1>Formulaire d'insertion</h1>
    <form>
        <label for="libelle">Libellé:</label>
        <input type="text" id="libelle" name="libelle"><br><br>

        <label for="date">Date:</label>
        <input type="date" id="date" name="date"><br><br>

        <label for="image">Image:</label>
        <input type="file" id="image" name="image"><br><br>

        <label for="commentaire">Commentaire:</label>
        <textarea id="commentaire" name="commentaire"></textarea><br><br>

        <input type="submit" value="Soumettre">
    </form>
</body>

</html>