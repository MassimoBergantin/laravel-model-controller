<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
     @foreach ($allMovies as $movie)
        <h1>{{$movie->title}}</h1>
        <h3>{{$movie->original_title}}</h3>
        <h4>{{$movie->nationality}}</h4>
        <h4>{{$movie->date}}</h4>
        <h4>{{$movie->vote}}</h4>

     @endforeach


</body>
</html>