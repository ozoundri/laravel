<!doctype html>
<html>
	<head>
		<meta charset="utf-8">

		<title>Blogplanet - {{ ucfirst(Request::segment(1)) }}</title>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
		<style type="text/css">
			body 	{
						margin: 0;
						padding: 0;
						background: #FFF;
						font-family: 'Open Sans', sans-serif;
					}

					#container {
						width: 1060px;
						margin: 0 auto;
					}

					nav#menu {
						text-align: left;

					}

					nav#menu ul {
					    list-style: none;
					}
					nav#menu li {
						padding-right: 50px;
						display: inline;
						font-size: 16px;
					}
					nav#menu a{
						font-family: 'Open Sans', sans-serif;
						color: #5c2326;
						text-decoration: none;
					}
					nav#menu a:hover{
						color: #e14845;
					}
		</style>
	</head>
	<body>
		<div id="container">
			<nav id="menu">
				<ul>
					<li><a href="index">Home</a></li>
					
					<li><a href="profile">Profile</a></li>
					<li><a href="logout">Logout</a></li>
					<li><a href="">Admin</a></li>
					<li><a href="add">Add</a></li>					

				</ul>
			</nav>
			<h1>Welcome to your Admin Panel, {{ $username }}!</h1>
			<?php
				$segment = Request::segment(2);
				if(!isset($segment)) { ?>
					
					<h2>Blog posts aanpassen</h2>
					@foreach ($posts as $post)
						<h3>{{ $post->title }}</h3><a href="admin/{{ $post->id }}">Edit</a>
					@endforeach
			<?php } ?>

			@foreach (Post::where('id', $segment)->get() as $post)
			<form method="post" action="">
				<p><input type="text" id="title" name="title" value="{{ $post->title }}"></p>
				<textarea type="text" id="text" name="text">{{ $post->text }}</textarea>
				<p><input type="submit" value="Edit"></p>
			</form>
			@endforeach
			
			
		</div>
		
	</body>
</html>