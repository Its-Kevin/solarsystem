<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
        }
        div {
            font-size: 16px;
            padding-top: 10px;
        }
        table, th, td {
            border: 1px solid black;
        }
        table {
            margin-left: auto; 
            margin-right: auto; 
            border-collapse: collapse;
            width: 80%;
        }
        th {
            background-color: #778FA8;
        }
        td, th{
            text-align: center;
            padding: 15px;
        }
    </style>
    <title>Planeten</title>
</head>
<body>
    <table>
        <tr>
            <th>Planet name</th>
            <th>Planet description</th>
        </tr>
        @foreach ($solarSystems as $solarSystem)
            @if (isset($id))
                @if ($solarSystem->id == ucfirst($id))
                    <h1>{{ $solarSystem->name }}<div><a href="/solarsystems">Return to overview</a></div></h1>
                    @foreach ($solarSystem->planets as $planet)
                        <tr>
                            <td>{{ $planet->name }}</td>
                            <td>{{ $planet->description }}</td>
                        </tr>
                    @endforeach
                @endif
            @endif
        @endforeach
    </table>
</body>
</html>