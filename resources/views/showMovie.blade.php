<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Movies</title>

  <<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="gallery.css">
	<link rel="stylesheet" type="text/css" href="/marvel-cinema/css/marvel.css">
	<script src="https://kit.fontawesome.com/edd66a2ac6.js"></script>
</head>
<style>
  input[type=text], select {
    width: 35%;
    margin:5px;
    padding: 10px 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: content-box;
  }

  input[type=submit] {
    width: 100%;
    background-color: gray;
    color: black;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  input[type=submit]:hover {
    background-color: gray;
  }

  .review {
    border-radius: 5px;
    background-color: gray;
    padding: 10px;
  }

  label{
    display:block;
    width: 200px;
    text-align: right;
}
input {
  display: inline-block;
}
section#movie{
  margin-right:0 !important;
  background-color:	#008B8B;
}

.rev{
  padding-left:20px;
}

.bac{
  padding-left:250px;
  padding-bottom:30px;
}

.movie-review{
  background-color:#B0C4DE;
}

.title{
  text-align:center;
}

</style>
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
					<li><a href="/marvel-cinema/public/about">About</a></li>
					<li><a href="/marvel-cinema/public/contact">Contact</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
        <li><a href="{{ URL::to('/logout') }}">Logout <i class="fa fa-sign-out"></i></a></li>
				</ul>
			</div>
		</div>
	</nav>
  @if(!empty(Session()) && Session::has('usertype') && Session::get('usertype') == 'Registered')
  <section id="movie">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
         <div class=" justify-content-right embed-responsive embed-responsive-4by3">
          {!! htmlspecialchars_decode($movie->trailer, ENT_NOQUOTES) !!} 
        </div>
      </div>

      <div class="col-md-6 left movie-review">
       <div class="row">
          <h2 class="col-9 p-2 text-warning title">{{$movie->movie_title}}</h2>
        </div>
        <br>
      
          <h4 class="col-6 p-2 text-primary">Details:</h4>
          <h6 class="p-2 text-info">Release date:</h6><h6 class="p-2 text-white"> {{$movie->release_date}}</h6>
          <h6 class="p-2 text-info">Running time:</h6><h6 class="p-2 text-white">  {{$movie->running_time}} minutes</h6>
          <h6 class="p-2 text-info">Film genre:</h6><h6 class="p-2 text-white">  {{$movie->film_genre}}</h6>
          <h6 class="p-2 text-info">Cast:</h6><h6 class="p-2 text-white">  {{$movie->cast}}</h6>
          <h6 class="p-2 text-info">Director:</h6> <h6 class="p-2 text-white"> {{$movie->director}}</h6>
          <h6 class="p-2 text-info">Production:</h6><h6 class="p-2 text-white">  {{$movie->production_year}}</h6>
          <h6 class="p-2 text-info">Language:</h6><h6 class="p-2 text-white">  {{$movie->original_language}}</h6>
          <h6 class="p-2 text-info">Age restriction:</h6><h6 class="p-2 text-white">  {{$movie->age_restriction}}</h6>
      
        
        <br>
        
        <div class="review">
          <form action="/marvel-cinema/public/showMovie/{{$movie->id}}" style="border:10px white" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="container">
              <h4 class="text-white">Give Your Review</h4>
            

              <label for="rating" ><b class="text-white">Rating:</b></label> 
              <select name="rating">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
              <br>

              <label for="title"><b class="text-white">Title:</b></label>
              <input type="text" name="title" value="" id="title">
              <br>
              <label for="description"><b class="text-white ">Description:</b></label>
              <input type="text" name="description" value="" id="description">


              <br><br>
              <label>
                <div class="clearfix">
                  <button type="submit">Submit</button>
                </div>
              </div>
            </form>
          </div>

          <br>
          <br>
          <h3 class="text-warning">Reviews:</h3>
          <br>
          <br>
          @foreach($allReviews[$movie->id] as $review)
          <div class="rev">
          <div class='row mb-1 text-white'>
            <div class='col-5'>Title:{{ $review->title }}</div>
          </div>
          <div class='row mb-1 text-white'>
            <div class='col-5'>Rating:{{ $review->rating }}</div>
          </div>
          <div class='row mb-1 text-white'>
            <div class='col-5'>Description:{{ $review->description }}</div>
          </div>
          </div> 
          <hr>
          @endforeach
          <span class="p-2 d-flex justify-content-center bac">
            {!!Html::link("/",'Back', ['class' => 'btn btn-primary'])!!}
          </span>
        </div>
      </div>
   
   </section> 
   
   @else 
   <div class="content">
   <h3>You don't have the right to see the content of this page. Please Sign Up</h3>
   </div>
   @endif

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
