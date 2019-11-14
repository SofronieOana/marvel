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
            <li><a href="{{ URL::to('/members') }}">View All Members</a></li>
        </ul>
    </nav>
    
    <form action="/marvel-cinema/public/members" method="post">
        @csrf
        
        <label for="name">Name:</label> 
        <input type="text" name="name" value="" id="name" placeholder="name"><br>
        
        <label for="email">Email</label>
        <input type="email" name="email" value="" id="email" placeholder="email@domain">
        
        
        <br><label for="password">Password</label> 
        <input type="password" name="password" value="" id="password">
        <br><label for="confirm_password">Confirm password:</label> 
        <input type="password" name="confirm_password" value="" id="confirm_password">
        <br><label for="age">Age:</label> 
        <input type="text" name="age" value="" id="age">
        <br>
        <label for="usertype">User type:</label> 
        <select name="usertype">
          <option value="Admin">Admin</option>
          <option value="Visitor">Visitor</option>
          <option value="Registered">Registered</option>
      </select>       
      <input type="submit">
  </form>

</div>
</body>
</html>
