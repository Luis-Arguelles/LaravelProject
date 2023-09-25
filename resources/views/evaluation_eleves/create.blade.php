<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create evaluation eleve</title>
</head>
<body>
    <form action="/evaluation_eleves" method="POST" enctype="multipart/form-data">
        @csrf <!-- {{ csrf_field() }} -->
            <label for="note">Note:</label>
            <input type="text" id="note" name="note" required><br><br>
    
            <label for="evaluation_id">Id evaluation:</label>
            <input type="text" id="evaluation_id" name="evaluation_id" required><br><br>
    
            <label for="eleve_id">Id eleve:</label>
            <input type="text" id="eleve_id" name="eleve_id" required><br><br>
    
            <input type="submit" value="Soumettre">
    </form>
</body>
</html>

