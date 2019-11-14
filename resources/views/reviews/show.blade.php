<?php
use Collective\Html\FormFacade;
use Collective\Html\HtmlFacade;
?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Reviews</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">



</head>
<body>

 

   <div class="container">  
    <div class="jumbotron">
        
     <table  class="table table-bordered table-hover table-dark text-center" style="width:100%">
       <!--  <th></th> -->
       <th class="text-center">rating</th>             
       <th class="text-center">title</th>
       <th class="text-center">description</th>
   </tr>

   <tr>
    <!-- <td><a href="reviews/<?php //echo $review->user_id; ?>"></a></td> -->
    <td><?php echo $review->rating; ?></td>            
    <td><?php echo $review->title; ?></td> 
    <td><?php echo $review->description; ?></td>

</tr>

</table>
</div>
</div> 
<?php
        // var_dump($member->first_name);

?>


</body>
</html>
