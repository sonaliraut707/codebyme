<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Task List</title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
		<div class="container" style="margin-top:20px;">
			<div class="row">
				<div class="col-md-12">
					<h2>List of Tasks</h2>
					<div style="margin-right:10%;float: right;">
						<a href="{{url('add-task')}}" class="btn btn-primary">Add Task</a>
					</div>
					<div style="margin-right:10%;float: right;">
						<a href="{{url('complete-task')}}" class="btn btn-primary">Complete Task</a>
					</div>
					<div style="margin-right:10%;float: right;">
						<a href="{{url('pending-task')}}" class="btn btn-primary">Pending Task</a>
					</div>
					@if(Session::has('success'))
						<div class="alert alert-success" role="alert">
						{{Session::get('success')}}
						</div>
					@endif
					<table class="table">
						<thead>
							<tr>
								<th>Sr No</th>
								<th>Task Name</th>
								<th>Description</th>
								<th>Delete</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							@php
								$i = 1;
							@endphp
							@foreach ($data as $tsklt)
								<tr>
									<td>{{$i++}}</td>
									<td>{{$tsklt->task_name}}</td>
									<td>{{$tsklt->description}}</td>
									<td><a href='delete-task/{{ $tsklt->id }}' class="btn btn-danger">Delete</a></td>
									
									@if($tsklt->status == 1)
										<td style="color:green;">Completed</td>
									@else
									<td style="color:red;">Pending</td>
									@endif
		
								</tr>
							@endforeach
						</tbody>
						
					</table>
				</div>
			</div>
		</div>
</body>
</html>