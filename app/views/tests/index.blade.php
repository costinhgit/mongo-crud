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

			<h1>All the Tests</h1>

			@if (Session::has('message'))
			<div class="alert alert-info">
				{{ Session::get('message') }}
			</div>
			@endif

			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<td rowspan="2">User ID</td>
						<td colspan="4">Networks</td>
						<td rowspan="2">Action</td>
					</tr>
					<tr>
						<td>ID</td>
						<td>Name</td>
						<td>IP</td>
						<td>Status</td>
					</tr>
				</thead>
				<tbody>					
					@foreach($networks as $item)
					<tr>
						<td>{{ $tests->uid }}</td>
						<td>{{ $item['nid'] }}</td>
						<td>{{ $item['n_name'] }}</td>
						<td>{{ $item['n_ip'] }}</td>
						<td>{{ $item['n_status'] }}</td>
						<td>
							{{ Form::open(array('url' => 'tests/' . $item['nid'], 'class' => 'pull-right')) }}
								{{ Form::hidden('_method', 'DELETE') }}
								{{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
							{{ Form::close() }} 
							<a class="btn btn-small btn-success" href="{{ URL::to('tests/' . $item['nid']) }}">View</a>
							<a class="btn btn-small btn-info" href="{{ URL::to('tests/' . $item['nid'] . '/edit') }}">Edit</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			
			<br>

			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<td rowspan="2">User ID</td>
						<td colspan="2">HostNames</td>
						<td rowspan="2">Action</td>
					</tr>
					<tr>
						<td>Name</td>
						<td>Block</td>
					</tr>
				</thead>
				<tbody>					
					@foreach($hostnames as $item)
					<tr>
						<td>{{ $tests->uid }}</td>
						<td>{{ $item['hostname'] }}</td>
						<td>{{ $item['block'] }}</td>
						<td>
							{{ Form::open(array('url' => 'tests/' . $item['hostname'], 'class' => 'pull-right')) }}
								{{ Form::hidden('_method', 'DELETE') }}
								{{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
							{{ Form::close() }} 
							<a class="btn btn-small btn-success" href="{{ URL::to('tests/' . $item['hostname']) }}">View</a>
							<a class="btn btn-small btn-info" href="{{ URL::to('tests/' . $item['hostname'] . '/edit') }}">Edit</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>			

		</div>
	</body>
</html>