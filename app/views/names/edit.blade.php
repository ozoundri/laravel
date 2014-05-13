<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>

			<form method="post" action"edit/{{ $id }}">
			<label for="id">id </label>
			<input name="id" id="id" type="text" value="{{ $id }}" readonly>
			<label for="name">Name: </label>
			@foreach ($people as $person)
			<input name="name" id="name" type="text" value="{{ $person->name }}">
			@endforeach
			<div>
				<button type="submit">Edit</button>
			</div>

	</body>
</html>