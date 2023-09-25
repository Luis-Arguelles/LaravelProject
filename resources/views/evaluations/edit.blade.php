<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit evaluation</title>
</head>
<body>
    <form action="/evaluations/{{$evaluation->id}}" method="POST" enctype="multipart/form-data">
        @csrf <!-- {{ csrf_field() }} -->
        @method('PUT')
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" value="{{$evaluation->date}}" ><br><br>
    
            <label for="titre">Titre:</label>
            <input type="text" id="titre" name="titre" value="{{$evaluation->titre}}" required><br><br>
    
            <label for="coefficient">Coefficient:</label>
            <input type="text" id="coefficient" name="coefficient" value="{{$evaluation->coefficient}}" required><br><br>
          
            <label for="module_id">Module id:</label>
            <input type="text" id="module_id" name="module_id" value="{{$evaluation->module_id}}" required><br><br>
    
            <input type="submit" value="Soumettre">
    </form>
</body>
</html>