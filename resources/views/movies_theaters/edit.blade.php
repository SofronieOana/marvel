<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <!-- Styles -->
    
</head>
<body>


    <div class="container">

        <nav class="navbar navbar-inverse">
            <ul class="nav navbar-nav">
                <li><a href="{{ URL::to('movies_theaters') }}">View All Movies Theaters</a></li>
                <li><a href="{{ URL::to('movies_theaters/create') }}">Create a Movies Theaters</a></li>
            </ul>
        </nav>



        <h1>Edit {{ $movie_theater->theater_name }}</h1>

        <form action="/marvel-cinema/public/movies_theaters/<?php echo $movie_theater->id; ?>" method="POST">

            @csrf
            <?php echo method_field('PATCH') ?>
            <label for="theater_name">Theater Name:</label> 
            <input type="text" name="theater_name" value="<?php echo $movie_theater->theater_name;?>" id="theater_name" placeholder="theater_name">
            <br>
            <label for="theater_capacity">Theater Capacity:</label> 
            <input type="text" name="theater_capacity" value="<?php echo $movie_theater->theater_capacity;?>" id="theater_capacity" placeholder="theater_capacity">
            <br>
            <label for="theater_hours">Theater Hours:</label> 
            <input type="text" name="theater_hours" value="<?php echo $movie_theater->theater_hours;?>" id="theater_hours" placeholder="theater_hours">
            <br>




            
            <input type="submit">
        </form>


    </div>


</body>
</html>
