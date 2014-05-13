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
					<?php


					if(isset(Auth::user()->id))
					{ ?>
					
					<li><a href="profile">Profiel</a></li>
					<li><a href="logout">Logout</a></li>
					<?php
						if(Auth::user()->id == 1){ ?>
					<li><a href="admin">Admin</a></li>
					<li><a href="add">Add</a></li>	
						<?php }
					} else { ?>

					<li><a href="login">Login</a></li>
					<li><a href="signup">Signup</a></li>

					<?php } ?>

				</ul>
			</nav>
			<h1>Welkom op Blogplanet</h1>
			@foreach ($posts as $post)
			<h2>{{ $post->title }}</h2>
			<p>{{ $post->text }}</p>
			<h5>{{ $post->created_at }}</h5>
			<h4><a href="post/{{ $post->id }}">Bekijken</a></h4>
			@endforeach

		</div>
		
	</body>
</html>