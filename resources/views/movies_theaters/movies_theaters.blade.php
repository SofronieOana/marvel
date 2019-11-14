@extends('layouts')



@section('content') 
<div class="alert alert-primary" role="alert">

  <?php $success=Session::get('success');?>
  @if(!empty($success))

  <h1>{{$success}}</h1>

  @endif
</div>
<div class=".container-fluid">  
 <table  class="table table-bordered table-hover table-dark text-center" style="width:100%">
  <tr>

    <th class="text-center">theater_name</th>          
    <th class="text-center">theater_capacity</th>
    <th class="text-center">theater_hours</th>
    <th class="text-center">action</th>

  </tr>
  <?php 
  foreach ($movies_theaters as $movie_theater){
    ?>
    <tr>
      <td><?php echo $movie_theater->theater_name ?></td>           
      <td><?php echo $movie_theater->theater_capacity ?></td> 
      <td><?php echo $movie_theater->theater_hours ?></td>
      <td>
        <a class="m-3 btn btn-info btn-sm" href="movies_theaters/show/<?php echo $movie_theater->id;?>"> <i class="m-2 glyphicon glyphicon-th-large">View</i></a>

        <a class="m-3 btn btn-primary btn-sm" href="movies_theaters/<?php echo $movie_theater->id;?>/edit"> <i class="m-2 glyphicon glyphicon-pencil">Edit</i></a>

        {!! Form::open(['method' => 'DELETE','route' => ['movies_theaters.movies_theaters', $movie_theater->id],'style'=>'display:inline']) !!}

        <button type="submit" style="display: inline;" class="m-3 btn btn-danger btn-sm"><i class="m-2 glyphicon glyphicon-trash">Delete</i></button>

        {!! Form::close() !!}

      </td>


    </tr>


    <?php
  }



  ?>


</table>

<div class="container d-flex justify-content-center ad">
  {!! Html::link("/movies_theaters/create",'Add movie theater',['class' => 'btn btn-secondary']) !!}

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