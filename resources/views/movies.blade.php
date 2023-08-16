<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
</head>
<body>
        @foreach ($movies as $movie)
        <li>ID: {{ $movie->id }}</li>
        <li>映画タイトル: {{ $movie->title }}</li>
        <img src="{{ $movie->image_url }}"></a>
        @endforeach
</body>
</html>