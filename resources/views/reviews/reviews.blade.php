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
    
    <th class="text-center">rating</th>             
    <th class="text-center">title</th>
    <th class="text-center">description</th>
    <th class="text-center">action</th>
  </tr>

  <?php 
  foreach ($reviews as $review){
    ?>
    <tr>
      <!-- <td><a href="reviews/<?php //echo $review->user_id ?>"></a></td> -->
      
      <td><?php echo $review->rating ?></td>            
      <td><?php echo $review->title ?></td> 
      <td><?php echo $review->description ?></td>
      <td>
        <a class="m-3 btn btn-info btn-sm" href="reviews/show/<?php echo $review->user_id;?>"> <i class="m-2 glyphicon glyphicon-th-large">View</i></a>

        <a class="m-3 btn btn-primary btn-sm" href="reviews/<?php echo $review->user_id;?>/edit"> <i class="m-2 glyphicon glyphicon-pencil">Edit</i></a>

        {!! Form::open(['method' => 'DELETE','route' => ['reviews.reviews', $review->user_id],'style'=>'display:inline']) !!}

        <button type="submit" style="display: inline;" class="m-3 btn btn-danger btn-sm"><i class="m-2 glyphicon glyphicon-trash">Delete</i></button>

        {!! Form::close() !!}
        
      </td>


    </tr>


    <?php
  }



  ?>
  
  
</table>


<div class="container d-flex justify-content-center ad">
  {!! Html::link("/reviews/create",'Add review',['class' => 'btn btn-secondary']) !!}
  
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