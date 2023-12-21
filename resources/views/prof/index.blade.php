<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Professors List</title>
</head>
<body>

    <h1>List of Professors</h1>

    <ul>
        @foreach ($profs as $prof)
            <li>{{ $prof->nom }} {{ $prof->prenom }}</li>
        @endforeach
    </ul>

</body>
</html>
    