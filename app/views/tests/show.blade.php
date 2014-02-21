<!-- app/views/nerds/show.blade.php -->

<!DOCTYPE html>
<html>
	<head>
		<title>CRUD</title>
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

			<dl class="dl-horizontal">
				<dt>
					ID
				</dt>
				<dd>
					{{ $networks->nid }}
				</dd>
				<dt>
					Name
				</dt>
				<dd>
					{{ $networks->n_name }}
				</dd>
				<dt>
					IP
				</dt>
				<dd>
					{{ $networks->n_ip }}
				</dd>
				<dt>
					Status
				</dt>
				<dd>
					{{ $networks->n_status }}
				</dd>
			</dl>

		</div>
	</body>
</html>