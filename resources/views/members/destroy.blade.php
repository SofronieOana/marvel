<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Delete</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


</head>


@foreach($members as $member)
<tr>
  <td class="td-actions text-right">
    <a  href="{{action('MembersController@edit',$member->id)}}"type="button" rel="tooltip" title="" class="btn btn-info btn-simple btn-xs" data-original-title="Edit Member">
      <i class="fa fa-edit"></i>
    </a>
    <a href="{{action('MembersController@destroy',$member->id)}}" type="button" rel="tooltip" title="" class="btn btn-danger btn-simple btn-xs" data-original-title="Delete Member">
      <i class="fa fa-times"></i>
    </a>
  </td>
</tr>
@endforech




</body>
</html>
