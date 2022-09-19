<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Maltes</title>
</head>
<body>
    <h1>Maltes</h1>
    <ul>
        @foreach ( $maltes as  $malte)
            <li>{{ $malte->nome }}</li>
            <li>{{ $malte->descricao }}</li>
            <br>
        @endforeach
    </ul>
</body>
</html>