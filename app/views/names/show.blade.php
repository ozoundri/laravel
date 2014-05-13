<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>

		<h1> Profile</h1>
		
		
			@foreach ($people as $person)
				<h3>{{ $person->name }}</h3>
			@endforeach
		
	</body>
</html>