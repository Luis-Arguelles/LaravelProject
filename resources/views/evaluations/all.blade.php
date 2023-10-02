<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Evaluations</title>
</head>
<body>
    <a href="http://localhost:8000/evaluations/create">créé</a><br>
    <div>
        <table >

            <th>
                <tr>
                    <td>
                        Date
                    </td>
                    <td>
                        Titre
                    </td>
                    <td>
                        Coefficient
                    </td>
                    <td>
                        Module id
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
                    {{$result->date}}
                </td>
                <td>
                    {{$result->titre}}
                </td>
                <td>
                    {{$result->coefficient}}
                </td>
                <td>
                    {{$result->module_id}}
                </td>
             
                <td>
                    <form action="/evaluations/{{$result->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" >Supprimer</button>
                    </form>
                </td>
                <td>
                    <form action="/evaluations/{{$result->id}}/edit" method="POST">
                        @csrf
                        @method('Get')
                        <button type="submit" >Modifier</button>
                    </form>
                </td>
                <td>
                    <form action="/evaluations/{{$result->id}}" method="POST">
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