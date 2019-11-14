<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Edit</title>

    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>



    <div class="container">

        <nav class="navbar navbar-inverse">
            <ul class="nav navbar-nav">
                <li><a href="{{ URL::to('movies') }}">View All Movies</a></li>
                <li><a href="{{ URL::to('movies/create') }}">Create a Movie</a></li>
            </ul>
        </nav>


        <h1>Edit {{ $movie->movie_title }}</h1>
        <form action="/marvel-cinema/public/movies/<?php echo $movie->id; ?>" method="POST">
            @csrf
            <?php echo method_field('PATCH');?>
            <label for="theater_id">Theater </label> 
            <input type="text" name="theater_id" value="" id="theater_id" placeholder="theater_id">
            <br>
            <label for="movie_title">Movie Title:</label> 
            <input type="text" name="movie_title" value="<?php echo $movie->movie_title;?>" id="movie_title" placeholder="movie_title">
            <br>
            <label for="release_date">Release Date:</label> 
            <input type="text" name="release_date" value="<?php echo $movie->release_date;?>" id="release_date" placeholder="yyyy-mm-dd">
            <br>
            <label for="running_time">Running Time:</label> 
            <input type="text" name="running_time" value="<?php echo $movie->running_time;?>" id="running_time" placeholder="running_time">
            <br>
            <label for="film_genre">Film Genre:</label> 
            <input type="text" name="film_genre" value="<?php echo $movie->film_genre;?>" id="film_genre" placeholder="film_genre">
            <br>
            <label for="cast">Cast:</label> 
            <input type="text" name="cast" value="<?php echo $movie->cast;?>" id="cast" placeholder="cast">
            <br>
            <label for="director">Director:</label> 
            <input type="text" name="director" value="<?php echo $movie->director;?>" id="director" placeholder="director">
            <br>
            <label for="production_year">Production Year:</label> 
            <input type="text" name="production_year" value="<?php echo $movie->production_year;?>" id="production_year" placeholder="production_year">
            <br>
            <label for="original_language">Original Language:</label> 
            <input type="text" name="original_language" value="<?php echo $movie->original_language;?>" id="original_language" placeholder="original_language">
            <br>
            <label for="age_restriction">Age Restriction:</label> 
            <input type="text" name="age_restriction" value="<?php echo $movie->age_restriction;?>" id="age_restriction" placeholder="age_restriction">
            <br>
            <label for="trailer">Trailer:</label> 
            <input type="text" name="trailer" value="<?php echo $movie->trailer;?>" id="trailer">
            <br>
            <label for="price">Price:</label> 
            <input type="text" name="price" value="<?php echo $movie->price;?>" id="price" placeholder="price">
            <br>
            <input type="submit">
        </form>


    </div>


</body>
</html>
