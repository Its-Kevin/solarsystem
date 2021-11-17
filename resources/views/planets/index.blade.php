<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planeten</title>
</head>
<body>
    <ul>
        @foreach ($planets as $planet)
            @if (isset($request['planet']))
                @if ($planet->name == ucfirst($request['planet']))
                    <li>{{ $planet->name }} - {{ $planet->solarSystem->name }}</li>
                    <p>{{ $planet->description }}</p>
                @endif
            @else
                <li>{{ $planet->name }} - {{ $planet->solarSystem->name }}</li>
                <p>{{ $planet->description }}</p>
            @endif
        @endforeach
    </ul>
</body>
</html>