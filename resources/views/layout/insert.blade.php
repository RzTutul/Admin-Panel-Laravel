<!DOCTYPE html>
<html>
<head>
	<title>Insert Data</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">


		<h1 align="center">Insert User Information</h1>

		<form method="POST" action="{{ url('data-added')}}">
			@csrf
			<div class="form-group">
				<label for="formGroupExampleInput">Name</label>
				<input type="text" class="form-control" name="name"  placeholder="Input Name">
			</div>
			<div class="form-group">
				<label for="formGroupExampleInput2">Email</label>
				<input type="text" class="form-control" name="email" placeholder="Input Gmail">
			</div> <div class="form-group">
				<label for="formGroupExampleInput2">Phone</label>
				<input type="text" class="form-control" name="phone" placeholder="Input Phone">
			</div> <div class="form-group">
				<label for="formGroupExampleInput2">Address</label>
				<input type="text" class="form-control" name="address" placeholder="Input Address">
			</div>
			<input class="btn btn-success" type="submit" name="submit">


		</form>


	</div>



	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>


