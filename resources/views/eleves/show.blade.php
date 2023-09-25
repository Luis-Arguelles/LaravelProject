<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   {{$eleve->numeroEtudiant}}
   {{$eleve->nom}}
   {{$eleve->prenom}}
   {{$eleve->dateNaissance}}
   {{$eleve->email}}
   {{$eleve->image}}

   <br>
   <br>
   <br>


<?php

    $sumNotes =0;
    $indice =0;

?>

   @foreach($eleve->evaluation_eleve as $notes)
   <?php
    $indice +=1;
    $sumNotes += $notes -> note;
?>
    <tr>
        {{$notes -> note}}
    </tr>

   @endforeach
   <br>
   <br>
   {{$sumNotes /$indice}}

</body>
</html>