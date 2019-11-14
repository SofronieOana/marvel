<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Create</title>
    <!--   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>

    <div class="container">

        <nav class="navbar navbar-inverse">
            <ul class="nav navbar-nav">
                <li><a href="{{ URL::to('movies') }}">View All Movies</a></li>
                
            </ul>
        </nav>

        <form action="/marvel-cinema/public/movies" method="post">
            @csrf
            <label for="theater_id">Theater </label> 
            <input type="text" name="theater_id" value="" id="theater_id" placeholder="theater_id">
            <br>
            <label for="movie_title">Movie Title</label> 
            <input type="text" name="movie_title" value="" id="movie_title" placeholder="movie_title">
            <br>
            <label for="release_date">Release Date</label> 
            <input type="text" name="release_date" value="" id="release_date" placeholder="release_date">
            <br>

            <label for="running_time">Running Time</label> 
            <input type="text" name="running_time" value="" id="running_time" placeholder="running_time">
            <br>
            <label for="film_genre">Film Genre</label> 
            <input type="text" name="film_genre" value="" id="film_genre" placeholder="film_genre">
            <br>
            <label for="cast">Cast</label> 
            <input type="text" name="cast" value="" id="cast" placeholder="cast">
            <br>
            <label for="director">Director</label> 
            <input type="text" name="director" value="" id="director" placeholder="director">
            <br>
            <label for="production_year">Production Year</label> 
            <input type="text" name="production_year" value="" id="production_year" placeholder="production_year">
            <br>
            <label for="original_language">Orininal Language</label> 
            <input type="text" name="original_language" value="" id="original_language" placeholder="original_language">
            <br>
            <label for="age_restriction">Age Restriction</label> 
            <input type="text" name="age_restriction" value="" id="age_restriction" placeholder="age_restriction">
            <br>
            <label for="trailer">Trailer</label> 
            <input type="text" name="trailer" value="" >
            <br>
            <label for="price">Price</label> 
            <input type="text" name="price" value="" id="price" placeholder="price">
            <br>

            
            <input type="submit">
        </form>


    </div>


</body>
</html>
