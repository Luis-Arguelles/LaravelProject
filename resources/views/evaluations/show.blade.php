<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show evaluation</title>
</head>
<body>
   {{$evaluation->date}}
   {{$evaluation->titre}}
   {{$evaluation->coefficient}}
</br>
</br>
</br>
   @foreach($evaluation->evaluation_eleve as $notes)

    <tr>
        {{$notes->note}}
    </tr>    

   @endforeach

</br>
</br>
</br>
   @foreach($evaluation->evaluation_eleve as $notes)

    @if($notes->note < 10)


    {{$notes->eleve->nom}} <br>

    @endif
  

   @endforeach
</body>
</html>