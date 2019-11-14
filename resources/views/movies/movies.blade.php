@extends('layouts')



@section('content') 
<div class="alert alert-primary" role="alert">

  <?php $success=Session::get('success');?>
  @if(!empty($success))

  <h1>{{$success}}</h1>

  @endif
</div>
<div class="container-fluid"> 
 <table  class="table table-bordered table-hover table-dark text-center" style="width:100%">

  <tr>
    <th class="text-center"">theater_id</th> 
    <th class="text-center">movie_title</th>             
    <th class="text-center">release_date</th>             
    <th class="text-center">running_time</th>             
    <th class="text-center">film_genre</th>             
    <th class="text-center">cast</th>             
    <th class="text-center">director</th>             
    <th class="text-center">production_year</th>             
    <th class="text-center">original_language</th>             
    <th class="text-center">age_restriction</th>
    <th class="text-center">price</th>
    <th class="text-center">action</th>
</tr>

<?php 
foreach ($movies as $movie){
    ?>
    <tr>
        <!-- <td><a href="movies/<?php //echo $movie->id ?>"></a></td> -->
        <td><?php echo $movie->theater_id ?></td>
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
        <td>
            <a class="m-3 btn btn-info btn-sm" href="movies/show/<?php echo $movie->id;?>"> <i class="m-2 glyphicon glyphicon-th-large">View</i></a>

            <a class="m-3 btn btn-primary btn-sm" href="movies/<?php echo $movie->id;?>/edit"> <i class="m-2 glyphicon glyphicon-pencil">Edit</i></a>

            {!! Form::open(['method' => 'DELETE','route' => ['movies.movies', $movie->id],'style'=>'display:inline']) !!}

            <button type="submit" style="display: inline;" class="m-3 btn btn-danger btn-sm"><i class="m-2 glyphicon glyphicon-trash">Delete</i></button>

            {!! Form::close() !!}
            
        </td>

    </tr>

    <?php
}


?>

</table>

<div class="container d-flex justify-content-center ad">
    {!! Html::link("/movies/create",'Add Movie',['class' => 'btn btn-secondary']) !!}
    
</div>      

<br/>  <div class="d-flex justify-content-center">
    @if(Session::has('message'))
    {{Session::get('message')}}
    @endif
</div>


</div>


@endsection

<footer>
     <div class="container">
      <div class="row">
        <div class="col-md-6 col-xs-12">
           <ul>
            <li><a href="/marvel-cinema/public">Home</a></li>
            <li><a href="/marvel-cinema/public/about">About</a></li>
            <li><a href="/marvel-cinema/public/contact">Contact</a></li>
            <li><a href="#">Privacy Policy</a></li>
           </ul>
        </div>
        <div class="col-md-6 col-xs-12">
          <p>Copiright &copy; 2019, All Rights Reserved</p>
        </div>
      </div>
     </div>
   </footer>