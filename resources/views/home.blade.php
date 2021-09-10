<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>Document</title>
</head>
<body>

    <div class="movies">

        <div class="container-fluid">
            
            <div class="container">
                <h1 class="title">DB-Movies</h1>
                <hr>
                <hr>
                <div class="row">

                    <div class="col">
    
                        @foreach ($allMovies as $movie)
                        <img src=" {{$movie->wallart}}" alt="">
                        <h2>{{$movie->title}}</h2>
                        <h3> Original Title: {{$movie->original_title}}</h3>
                        <h4> Nationality: {{$movie->nationality}}</h4>
                        <h4> Date: {{$movie->date}}</h4>
                        <h4> Vote {{$movie->vote}}</h4>
                        <hr>
                        @endforeach
                        
                    </div>
    
                </div>
            </div>

        </div>

    </div>










 {{-- <div class="container">
     <div class="movies">
        <h1 class="db">DB_MOVIES</h1>
        <hr>
        <div class="movide-cards">
            @foreach ($allMovies as $movie)
            <img src=" {{$movie->wallart}}" alt="">
            <h1>{{$movie->title}}</h1>
            <h3>{{$movie->original_title}}</h3>
            <h4>{{$movie->nationality}}</h4>
            <h4>{{$movie->date}}</h4>
            <h4>{{$movie->vote}}</h4>
            @endforeach
        </div>
     </div>
 </div> --}}

</body>
</html>