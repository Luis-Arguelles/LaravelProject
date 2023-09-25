<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes</title>
</head>
<body>

    <table>

        <tr>
            <th>
                Note
            </th>
            <th>
                Id eleve
            </th>
                Id module
            </th>
            <th>
                Id evaluation
            </th>
        </tr>

        @foreach($results as $result)

        <tr>
            <td>{{$result->note}}</td>
            <td>{{$result->eleve_id}}</td>
            <td>{{$result->module_id}}</td>
            <td>{{$result->evaluation_id}}</td>

            <td>
                <form action="/evaluation/{{$result->id}}" method="POST">
                    @csrf
                    @method('Get')
                    <button type="submit">Afficher</button>
                </form>
            </td>
            <td>
                <form action="/evaluation/{{$result->id}}/edit" method="POST">
                    @csrf
                    @method('Get')
                    <button type="submit">Modifier</button>
                </form>
            </td>
            <td>
                <form action="/evaluation/{{$result->id}}" method="POST">
                    @csrf
                    @method('Delete')
                    <button type="submit">Supprimer</button>
                </form>
            </td>
        </tr>


        @endforeach

    </table>
    {{$results->links()}}
</body>
</html>