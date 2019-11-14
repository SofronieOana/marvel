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
            <li><a href="{{ URL::to('reviews') }}">View All Reviews</a></li>
            <li><a href="{{ URL::to('reviews/create') }}">Create a Review</a></li>
        </ul>
    </nav>

    <h1>Edit {{ $review->description }}</h1>

    <form action="/marvel-cinema/public/reviews/<?php echo $review->user_id;?>" method="post">
        <!-- <form action="ReviewsController@update" method="POST"> -->
            @csrf
            <?php echo method_field('PATCH') ?>
            <label for="rating">Rating</label> 
            <input type="text" name="rating" value="<?php echo $review->rating;?>" id="rating" placeholder="rating">
            <br>
            <?php echo method_field('PATCH') ?>
            <label for="title">Title</label> 
            <input type="text" name="title" value="<?php echo $review->title;?>" id="title" placeholder="title">
            <br>
            <?php echo method_field('PATCH') ?>
            <label for="description">Description</label> 
            <input type="text" name="description" value="<?php echo $review->description;?>" id="description" placeholder="description">
            <br>
            <input type="submit">
        </form>


    </div>



</body>
</html>
