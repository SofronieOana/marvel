<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<div class="container">

    <nav class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('movies_theaters') }}">View All Movies Theaters</a></li>
        </ul>
    </nav>
    
</head>

<form action="/marvel-cinema/public/movies_theaters" method="post">
    @csrf

    <label for="theater_name">Theater Name</label> 
    <input type="text" name="theater_name" value="" id="theater_name" placeholder="theater_name">
    <br>
    <label for="theater_capacity">Theater Capacity</label> 
    <input type="text" name="theater_capacity" value="" id="theater_capacity" placeholder="theater_capacity">
    <br>

    <label for="theater_hours">Theaters Hours</label> 
    <input type="text" name="theater_hours" value="" id="theater_hours" placeholder="theater_hours"><br>
    <input type="submit">
    <br>
    

</form>



</div>

</body>
</html>
