<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Note edit</title>
</head>
<body>
    <form action="/notes/{{$note->id}}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PUT')
        <label for="note">Note:</label>
        <input type="text" name="note" id="note" value="{{$note->note}}"required>
        
        <label for="eleve_id">Id eleve:</label>
        <input type="text" name="eleve_id" id="eleve_id" value="{{$note->eleve_id}}" required>
        
        <label for="module_id">Id module:</label>
        <input type="text" name="module_id" id="module_id" value="{{$note->module_id}}" required>
        
        <label for="evaluation_id">Id evaluation:</label>
        <input type="text" name="evaluation_id" id="evaluation_id" value="{{$note->evaluation_id}}" required>
    
        <button type="submit">Soumettre</button>
    </form>
</body>
</html>