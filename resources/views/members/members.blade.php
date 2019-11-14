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

    <th class="text-center">name</th> 
    <th class="text-center">email</th>
    <th class="text-center">password</th>
    <th class="text-center">confirm_password</th>
    <th class="text-center">age</th>
    <th class="text-center">usertype</th>
    <th class="text-center">action</th>

    
  </tr>
  <?php 
  foreach ($members as $member){
    ?>
    <tr>
      <td><?php echo $member->name ?></td>
      <td><?php echo $member->email ?></td>
      <td><?php echo $member->password ?></td>
      <td><?php echo $member->confirm_password ?></td>
      <td><?php echo $member->age ?></td>
      <td><?php echo $member->usertype ?></td>
      <td> 
       
        <a class="m-3 btn btn-info btn-sm" href="members/show/<?php echo $member->id;?>"> <i class="m-2 glyphicon glyphicon-th-large">View</i></a>

        <a class="m-3 btn btn-primary btn-sm" href="members/<?php echo $member->id;?>/edit"> <i class="m-2 glyphicon glyphicon-pencil">Edit</i></a>

        {!! Form::open(['method' => 'DELETE','route' => ['members.members', $member->id],'style'=>'display:inline']) !!}

        <button type="submit" style="display: inline;" class="m-3 btn btn-danger btn-sm"><i class="m-2 glyphicon glyphicon-trash">Delete</i></button>

        {!! Form::close() !!}

      </td>

    </tr>
    

    <?php

  }



  ?>
</table>

<div class="container d-flex justify-content-center ad">
  {!! Html::link("members/create",'Add member',['class' => 'btn btn-secondary']) !!}
  
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
