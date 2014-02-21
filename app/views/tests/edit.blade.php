<!-- app/views/tests/edit.blade.php -->

<!DOCTYPE html>
<html>
	<head>
		<title>Look! I'm CRUDding</title>
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

			<h1>Edit {{ $test->uid }}</h1>

			<!-- if there are creation errors, they will show here -->
			{{ HTML::ul($errors->all()) }}

			{{ Form::model($test, array('route' => array('tests.update', $test->id), 'method' => 'PUT')) }}

			<div class="form-group">
				{{ Form::label('name', 'Name') }}
				{{ Form::text('name', null, array('class' => 'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('ip', 'IP') }}
				{{ Form::email('ip', null, array('class' => 'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('status', 'Status') }}
				{{ Form::email('status', null, array('class' => 'form-control')) }}
			</div>

			{{ Form::submit('Edit the Test!', array('class' => 'btn btn-primary')) }}

			{{ Form::close() }}

		</div>
	</body>
</html>