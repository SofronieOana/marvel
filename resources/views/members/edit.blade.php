
<!DOCTYPE html>
<html>
<head>
  <title>Edit</title>
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>




  <div class="container">

    <nav class="navbar navbar-inverse">
      <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('/members') }}">View All Members</a></li>
        <li><a href="{{ URL::to('/members/create') }}">Create a Member</a></li>
      </ul>
    </nav>

    <h1>Edit {{ $member->name }}</h1>

    <form action="/marvel-cinema/public/members/<?php echo $member->id; ?>" method="POST">
      @csrf
      <?php echo method_field('PATCH');?>
      <label for="name">Name:</label> 
      <input type="text" name="name" value="<?php echo $member->name;?>" id="name" placeholder="name">
      <br>
      <label for="email">Email:</label> 
      <input type="email" name="email" value="<?php echo $member->email;?>" id="email" placeholder="email@domain">
      <br>
      <label for="password">Password:</label> 
      <input type="password" name="password" value="<?php echo $member->password;?>" id="password">
      <br>
      <label for="confirm_password">Confirm password:</label> 
      <input type="password" name="confirm_password" value="<?php echo $member->confirm_password;?>" id="confirm_password">
      <br>
      <label for="age">Age:</label> 
      <input type="text" name="age" value="<?php echo $member->age;?>" id="age">
      <br>
      <label for="usertype">User type:</label> 
      <select name="usertype" >
        <option value="<?php echo $member->usertype;?>"</option>
        <option value="Admin">Admin</option>
        <option value="Visitor">Visitor</option>
        <option value="Registered">Registered</option>
      </select>
      <br>
      
      <input type="submit">
    </form>
  </div>


</body>
</html>