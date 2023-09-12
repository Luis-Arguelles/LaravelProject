<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/eleves" method="POST" enctype="multipart/form-data">
        @csrf <!-- {{ csrf_field() }} -->
            <label for="numeroEtudiant">Numéro d'Étudiant:</label>
            <input type="text" id="numeroEtudiant" name="numeroEtudiant" required><br><br>
    
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" required><br><br>
    
            <label for="prenom">Prénom:</label>
            <input type="text" id="prenom" name="prenom" required><br><br>
    
            <label for="dateNaissance">Date de Naissance:</label>
            <input type="date" id="dateNaissance" name="dateNaissance" required><br><br>
    
            <label for="mail">Adresse E-mail:</label>
            <input type="text" id="email" name="email" required><br><br>
    
            <label for="image">Image (type texte):</label>
            <input type="text" id="image" name="image" required><br><br>
    
            <input type="submit" value="Soumettre">
        </form>
    
    </form>
</body>
</html>

