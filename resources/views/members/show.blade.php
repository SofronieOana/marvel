<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Members</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>
<body>

	<div class="container">  
		<div class="jumbotron">
			
			<table  class="table table-bordered table-hover table-dark text-center" style="width:100%">
				<tr>
					<th class="text-center">Name</th>
					<th class="text-center">Email</th>
					<th class="text-center">Password</th>
					<th class="text-center">Confirm Password</th>
					<th class="text-center">Age</th>
					<th class="text-center">Usertype</th>
				</tr>
				<tr>
					<td><?php echo $member->name;?></td>
					<td><?php echo $member->email;?></td>
					<td><?php echo $member->password;?></td>
					<td><?php echo $member->confirm_password;?></td>
					<td><?php echo $member->age;?></td>
					<td><?php echo $member->usertype;?></td>

				</tr>
				
			</table>
			<?php       
			?>

		</div>
	</div>
</body>
</html>


