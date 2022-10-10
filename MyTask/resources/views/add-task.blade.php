<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Task</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
	<div class="container" style="margin-top:20px;">
		<div class="row">
			<div class="col-md-12">
				<h2>Add Task</h2>
				@if(Session::has('success'))
				<div class="alert alert-success" role="alert">
					{{Session::get('success')}}
				</div>
				@endif
				<form method="post" action="{{url('save-task')}}">
					@csrf
					<div class="md-3">
						<label class="form-label">Task</label>	
						<input type="text" class="form-control" name="task" placeholder="Enter Task" value="{{old('task')}}">
						@error('task')
							<div class="alert alert-danger" role="alert">
								{{$message}}
							</div>
						@enderror

						<label class="form-label">Description</label>	
						<textarea type="text" class="form-control" name="description" placeholder="Description" value="{{old('task')}}">
						</textarea>
						@error('description')
							<div class="alert alert-danger" role="alert">
								{{$message}}
							</div>
						@enderror

					</div><br>
					<button type="submit" class="btn btn-primary">Submit</button>					
						<a href="{{url('task-list')}}" class="btn btn-danger">Back</a>
				</form>
			</div>
		</div>
	</div>			
</body>
</html>