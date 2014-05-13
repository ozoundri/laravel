<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>

		<h1> All names</h1>
		<p><a href="names/create">Add new names</a></p>
		<ul>
			@foreach ($people as $person)
				<li><a href="names/{{ $person->id }}">{{ $person->name }}</a> <a href="names/edit/{{ $person->id }}">Edit</a></li>
			@endforeach
		</ul>
	</body>
</html>