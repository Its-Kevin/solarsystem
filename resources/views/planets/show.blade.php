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
            @if (isset($parameter))
                @if ($planet->name == ucfirst($parameter))
                    <li>{{ $planet->name }} - {{ $planet->solarSystem->name }}</li>
                    <p>{{ $planet->description }}</p>
                @endif
            @endif
        @endforeach
    </ul>
</body>
</html>