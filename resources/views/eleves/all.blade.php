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
                        Nom
                    </td>
                    <td>
                        Prenom
                    </td>
                    <td>
                        Email
                    </td>
                    <td>
                        DateNaissance
                    </td>
                    <td>
                        NumeroEtudiant
                    </td>
                    <td>
                        Img
                    </td>
                </tr>
            </th>
            @foreach ($results as $result)
            <tr>
                <td>
                    {{$result->nom}}
                </td>
                <td>
                    {{$result->prenom}}
                </td>
                <td>
                    {{$result->email}} 
                </td>
                <td>
                    {{$result->dateNaissance}}
                </td>
                <td>
                    {{$result->numeroEtudiant}}
                </td>
                <td>
                    {{$result->image}}
                </td>
            </tr>
                @endforeach
        </table>
        
    </div>
    {{ $results->links() }}
</body>
</html>