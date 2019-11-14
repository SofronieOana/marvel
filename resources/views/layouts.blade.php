    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Admin</title>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


        <link rel="stylesheet" type="text/css" href="/marvel-cinema/css/marvel.css">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

        
    </head>
    <body>
        @if(!empty(Session()) && Session::has('usertype') && Session::get('usertype') == 'Admin')

        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="/marvel-cinema/public/members"><b>Members</b></a>
            <a class="navbar-brand" href="/marvel-cinema/public/movies"><b>Movies</b></a>
            <a class="navbar-brand" href="/marvel-cinema/public/movies_theaters"><b>Movies theaters</b></a>
            <a class="navbar-brand" href="/marvel-cinema/public/reviews"><b>Reviews</b></a>
            <span class="p-2 d-flex justify-content-center">
            {!!Html::link("/",'Back', ['class' => 'btn btn-primary'])!!}
          </span>
          <a href="{{ URL::to('/') }}">Logout <i class="fa fa-sign-out"></i></a>
        </nav>
        @yield('content')
        @endif
    </body>
    </html>