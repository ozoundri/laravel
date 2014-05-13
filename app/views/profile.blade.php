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
					<?php if(Auth::user()->id == 1) { ?>
					<li><a href="admin">Admin</a></li>
					<li><a href="add">Add</a></li>					
					<?php } ?>
				</ul>
			</nav>
			<h1>Welcome to your Profile, {{ Auth::user()->username }}!</h1>
			
			<h2>{{ Auth::user()->username }}</h2>
			<img src="{{ Auth::user()->avatar }}">
			<h4>Email -  {{ Auth::user()->email }}</h4>

			<h3>Avatar aanpassen</h3>

			<form method="post" action="">
				<input type="text" id="avatar" name="avatar" value="{{ Auth::user()->avatar }}">
				<input type="submit" name="submit" value="Aanpassen">
			</form>
			
			
		</div>
		
	</body>
</html>