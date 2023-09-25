<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Note create</title>
</head>
<body>
        <form action="/notes" method='POST' enctype="multipart/form-data">

            @csrf
            <label for="note">Note:</label>
            <input type="text" name="notes" id="notes" required><br><br>
            
            <label for="eleve_id">Id Eleve:</label>
            <input type="text" name="eleve_id" id="eleve_id" required><br><br>
            
            <label for="module_id">Id module:</label>
            <input type="text" name="module_id" id="module_id" required><br><br>
            
            <label for="evaluation_id">Id evaluation:</label>
            <input type="text" name="evaluation_id" id="evaluation_id" required><br><br>

            <button type="submit">Soumettre</button>
        </form>
</body>
</html>