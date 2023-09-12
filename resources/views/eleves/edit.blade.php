<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/eleves/{{$eleve->id}}" method="POST" enctype="multipart/form-data">
        @csrf <!-- {{ csrf_field() }} -->
        @method('PUT')
            <label for="numeroEtudiant">Numéro d'Étudiant:</label>
            <input type="text" id="numeroEtudiant" name="numeroEtudiant" value="{{$eleve->numeroEtudiant}}" ><br><br>
    
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" value="{{$eleve->nom}}" required><br><br>
    
            <label for="prenom">Prénom:</label>
            <input type="text" id="prenom" name="prenom" value="{{$eleve->prenom}}" required><br><br>
    
            <label for="dateNaissance">Date de Naissance:</label>
            <input type="date" id="dateNaissance" name="dateNaissance" value="{{$eleve->dateNaissance}}" required><br><br>
    
            <label for="mail">Adresse E-mail:</label>
            <input type="text" id="email" name="email" value="{{$eleve->email}}" required><br><br>
    
            <label for="image">Image (type texte):</label>
            <input type="text" id="image" name="image" value="{{$eleve->image}}" required><br><br>
    
            <input type="submit" value="Soumettre">
    </form>
</body>
</html>