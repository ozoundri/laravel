<!doctype html>
<html>
	<head>
		<meta charset="utf-8">

		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
		<style type="text/css">
			body 	{
						margin: 0;
						padding: 0;
						background: #FFF;
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
					<?php				
					}
					?>	
				</ul>
			</nav>
			<h1>Welcome to your Dashboard, {{ $username }}!</h1>
			
			
		</div>
		
	</body>
</html>