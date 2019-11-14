<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    
</head>
<body>



    @foreach($movies_theaters as $movie_theater)
    <tr>
        <td class="td-actions text-right">
          <a  href="{{action('MoviesTheatersController@edit',$movie_theater->id)}}"type="button" rel="tooltip" title="" class="btn btn-info btn-simple btn-xs" data-original-title="Edit MovieTheater">
            <i class="fa fa-edit"></i>
        </a>
        <a href="{{action('MoviesTheatersController@destroy',$movie_theater->id)}}" type="button" rel="tooltip" title="" class="btn btn-danger btn-simple btn-xs" data-original-title="Delete MovieTheater">
            <i class="fa fa-times"></i>
        </a>
    </td>
</tr>
@endforech




</body>
</html>
