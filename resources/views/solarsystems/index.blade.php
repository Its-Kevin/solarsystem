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
            <th>Name</th>
            <th>Planet count</th>
            <th>Age in years</th>
        </tr>
            @foreach ($solarSystems as $solarSystem)
                <tr>
                    @if (isset($request['id']))
                        @if ($solarSystem->name == ucfirst($request['id']))
                            <td><a href="/solarsystems/{{ $solarSystem->id }}">{{ $solarSystem->name }}</a></td>
                            <td>{{ $solarSystem->planets_count }}</td>
                            <td>{{ $solarSystem->age_in_years }}</td>
                        @endif
                    @else
                        <td><a href="/solarsystems/{{ $solarSystem->id }}">{{ $solarSystem->name }}</a></td>
                        <td>{{ $solarSystem->planets_count }}</td>
                        <td>{{ $solarSystem->age_in_years }}</td>
                    @endif
                </tr>
            @endforeach
    </table>
</body>
</html>