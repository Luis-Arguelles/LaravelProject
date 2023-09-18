<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/modules/{{$module->id}}" method="POST" enctype="multipart/form-data">
        @csrf <!-- {{ csrf_field() }} -->
        @method('PUT')
            <label for="code">Code:</label>
            <input type="text" id="code" name="code" value="{{$module->code}}" ><br><br>
    
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" value="{{$module->nom}}" required><br><br>
    
            <label for="coefficient">coefficient:</label>
            <input type="text" id="coefficient" name="coefficient" value="{{$module->coefficient}}" required><br><br>
    
            <input type="submit" value="Soumettre">
    </form>
</body>
</html>