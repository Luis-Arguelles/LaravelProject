<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eveluation eleves</title>
</head>
<body>
    <a href="http://localhost:8000/evaluation_eleves/create">créé</a><br>
    <div>
        <table >

            <th>
                <tr>
                    <td>
                        Note
                    </td>
                    <td>
                        id Evaluation
                    </td>
                    <td>
                        id Eleve
                    </td>

                    <td>
                        Delete
                    </td>
                    <td>
                        Modifier
                    </td>
                    <td>
                        Afficher
                    </td>
                </tr>
            </th>
            @foreach ($results as $result)
            <tr>
                <td>
                    {{$result->note}}
                </td>
                <td>
                    {{$result->evaluation_id}}
                </td>
                <td>
                    {{$result->eleve_id}} 
                </td>

                <td>
                    <form action="/evaluation_eleves/{{$result->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" >Supprimer</button>
                    </form>
                </td>
                <td>
                    <form action="/evaluation_eleves/{{$result->id}}/edit" method="POST">
                        @csrf
                        @method('Get')
                        <button type="submit" >Modifier</button>
                    </form>
                </td>
                <td>
                    <form action="/evaluation_eleves/{{$result->id}}" method="POST">
                        @csrf
                        @method('Get')
                        <button type="submit" >Afficher</button>
                    </form>
                </td>
            </tr>
                @endforeach
        </table>
        
    </div>
    {{ $results->links() }}
</body>
</html>