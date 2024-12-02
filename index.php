<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <ul>
            <li><a href="index.html">Accueil</a></li>
            <li><a href="create.html">Insertion</a></li>
        </ul>
    </nav>
    <h1>Ma to-do liste</h1>
    <hr>
    <table>
        <thead>
            <tr>
                <th>Libellé</th>
                <th>Date</th>
                <th>Statut</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Élément 1</td>
                <td>2023-01-01</td>
                <td>Actif</td>
                <td><button>Modifier</button></td>
                <td><button>Supprimer</button></td>
            </tr>
            <tr>
                <td>Élément 2</td>
                <td>2023-02-15</td>
                <td>Inactif</td>
                <td><button>Modifier</button></td>
                <td><button>Supprimer</button></td>
            </tr>
            <tr>
                <td>Élément 3</td>
                <td>2023-03-20</td>
                <td>Actif</td>
                <td><button>Modifier</button></td>
                <td><button>Supprimer</button></td>
            </tr>
        </tbody>
    </table>
</body>

</html>