<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <table >

            <th>
                <tr>
                    <td>
                        code
                    </td>
                    <td>
                        nom
                    </td>
                    <td>
                        coefficient
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
                    {{$result->code}}
                </td>
                <td>
                    {{$result->nom}}
                </td>
                <td>
                    {{$result->coefficient}} 
                </td>
                <td>
                    <form action="/modules/{{$result->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" >Supprimer</button>
                    </form>
                </td>
                <td>
                    <form action="/modules/{{$result->id}}/edit" method="POST">
                        @csrf
                        @method('Get')
                        <button type="submit" >Modifier</button>
                    </form>
                </td>
                <td>
                    <form action="/modules/{{$result->id}}" method="POST">
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