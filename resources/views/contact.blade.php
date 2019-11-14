<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


	<title>Marvel Cinema</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="gallery.css">
	<script src="https://kit.fontawesome.com/edd66a2ac6.js"></script>
	<link rel="stylesheet" type="text/css" href="/marvel-cinema/css/marvel.css">
</head>
<body>

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-nav-demo" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="{{ URL::to('/theater') }}" class="navbar-brand"><i class="fab fa-galactic-senate text-primary"></i>Movie Theaters</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-nav-demo">
				<ul class="nav navbar-nav">
				    <li><a href="/marvel-cinema/public">Home</a></li>
					<li><a href="about">About</a></li>
					<li><a href="contact">Contact</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
				<li><a href="{{ URL::to('/logout') }}">Logout <i class="fa fa-sign-out"></i></a></li>
				
				</ul>
			</div>
		</div>
	</nav>


    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
           <form>
            <div class="form-group">
              <label >Name</label>
              <input type="text" class="form-control" placeholder="Enter Name">
            </div>
           <div class="form-group">
              <label >Email address</label>
              <input type="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
              <label >Message</label>
              <textarea class="form-control" placeholder="Message here"></textarea>
            </div>
            
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
          </div>
          <div class="col-md-4">
            <img src="/marvel-cinema/resources/views/image/blackpanther.jpg" class="demo">
            <h2>Lorem Ipsum</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris lobortis tempus varius. Sed porttitor ex id lectus interdum tristique.</p>
            <a href="#" class="btn btn-default">Read More</a>
          </div>   
        </div>
      </div>
    </section>

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
          <p>Copyright &copy; 2019, All Rights Reserved</p>
        </div>
      </div>
     </div>
   </footer>
</body>
</html>