<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/eleves" methode="POST" class = "form-creationEleve">
        @csrf
        <div class = "form-creationEleve">
            <label for="nom">Entrez le nom:</label>
            <input type="text" name = "nom">
        </div>

        <div class = "form-creationEleve">
            <label for="prenom">Entrez le prenom:</label>
            <input type="text" name = "prenom">
        </div>

        <div class = "form-creationEleve">
            <label for="dateNaissance">Entrez la date de naissance:</label>
            <input type="text" name = "dateNaissance">
        </div>

        <div class = "form-creationEleve">
            <label for="numeroEtudiant">Entrez le numero d'etudiant:</label>
            <input type="text" name = "numeroEtudiant">
        </div>

        <div class = "form-creationEleve">
            <label for="email">Entrez l'email:</label>
            <input type="text" name = "email">
        </div>


        <div class = "form-creationEleve">
            <label for="image">Entrez l'image:</label>
            <input type="text" name = "image">
        </div>

        <div class = "form-creationEleve">
            <input type="submit" value="bouton" />
        </div>

    </form>
</body>
</html>

