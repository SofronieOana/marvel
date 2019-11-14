<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Members</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>
<body>
    
    <div class="container">  
        <div class="jumbotron">
            
            <table  class="table table-bordered table-hover table-dark text-center" style="width:100%">
                

              <tr>
                <th class="text-center">Movie</th>             
                <th class="text-center">Release Date</th>             
                <th class="text-center">Running Time</th>             
                <th class="text-center">film_genre</th>             
                <th class="text-center">cast</th>             
                <th class="text-center">director</th>             
                <th class="text-center">production_year</th>             
                <th class="text-center">original_language</th>             
                <th class="text-center">age_restriction</th>
                <th class="text-center">price</th>

            </tr>

            
            <tr>
                <td><?php echo $movie->movie_title ?></td>
                <td><?php echo $movie->release_date ?></td>
                <td><?php echo $movie->running_time ?></td>
                <td><?php echo $movie->film_genre ?></td>
                <td><?php echo $movie->cast ?></td>
                <td><?php echo $movie->director ?></td>
                <td><?php echo $movie->production_year ?></td>
                <td><?php echo $movie->original_language ?></td>
                <td><?php echo $movie->age_restriction ?></td>
                <td><?php echo $movie->price ?></td>
            </tr>
            

        </table>


    </div>
</div>
<?php

?>
</body>
</html>
