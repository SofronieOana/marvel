<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Create</title>
    <!--     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>

<div class="container">

    <nav class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('/members') }}">View All Reviews</a></li>
        </ul>
    </nav>


    <form action="/marvel-cinema/public/reviews" method="post">
        @csrf

        <label for="rating">Rating</label> 
        <input type="text" name="rating" value="" id="rating" placeholder="rating">
        <br>
        <label for="title">Title</label> 
        <input type="text" name="title" value="" id="title" placeholder="title">
        <br>

        <label for="description">Description</label> 
        <input type="text" name="description" value="" id="description" placeholder="description">
        <br>
        
        <input type="submit">
    </form>

</div>
</body>
</html>
