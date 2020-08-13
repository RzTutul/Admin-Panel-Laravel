<!DOCTYPE html>
<html>
<head>
	<title>Contract</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
	<h1 style="font-size: 10sp" align="center" >All Contract List</h1>

	<a href="{{URL::to('/')}}" class="btn btn-success ">Home</a>

	<br><br>

	<a href="{{URL::to('insertData')}}" class="btn btn-success ">Insert Data</a>

	<br><br>




	<table class="table table-border">
		

		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Gmail</th>
			<th>Phone</th>
			<th>Address</th>
			<th>Date</th>
			<th>Action</th>
		</tr>
		@foreach($data as $row)
		<tr>
			<td>{{$row->id}}</td>
			<td>{{$row->name}}</td>
			<td>{{$row->email}}</td>
			<td>{{$row->phone}}</td>
			<td>{{$row->address}}</td>
			<td>{{$row->created_at}}</td>
			<td>
				<a href="{{URL::to('edit-contract/'.$row->id)}}" class="btn btn-info">Edit</a>
				<a href="{{URL::to('delete-contract/'.$row->id)}}" class="btn btn-danger">Delete</a>
				<a href="{{URL::to('view-contract/'.$row->id)}}" class="btn btn-success">View</a>

			</td>
		</tr>
		@endforeach	
	</table>

	</div>


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>