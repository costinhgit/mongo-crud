<!-- app/views/tests/create.blade.php -->

<!DOCTYPE html>
<html>
	<head>
		<title>Create</title>
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
	</head>
	<body>
		<div class="container">

			<nav class="navbar navbar-inverse">
				<div class="navbar-header">
					<a class="navbar-brand" href="{{ URL::to('tests') }}">Test Alert</a>
				</div>
				<ul class="nav navbar-nav">
					<li>
						<a href="{{ URL::to('tests') }}">View All Tests</a>
					</li>
					<li>
						<a href="{{ URL::to('tests/create') }}">Create a Test</a>
				</ul>
			</nav>

			<h1>Create a Test</h1>

			<!-- if there are creation errors, they will show here -->
			{{ HTML::ul($errors->all() )}}

			{{ Form::open(array('url' => 'tests')) }}

			<div class="form-group">
				{{ Form::label('name', 'Name') }}
				{{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('email', 'IP') }}
				{{ Form::email('email', Input::old('ip'), array('class' => 'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('status', 'Status') }}
				{{ Form::email('email', Input::old('status'), array('class' => 'form-control')) }}
			</div>

			{{ Form::submit('Create the Test!', array('class' => 'btn btn-primary')) }}

			{{ Form::close() }}

		</div>
	</body>
</html>