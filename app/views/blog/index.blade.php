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
					<li><a href="">Home</a></li>
					<?php


					if(!isset(Auth::user()->id))
					{ ?>
					<li><a href="login">Login</a></li>
					<li><a href="signup">Signup</a></li>
					<?php
					}
					?>

				</ul>
			</nav>
			<h1>Welkom op Blogplanet</h1>

			<h2>Titel post</h2>
			<p>Post tekst</p>
			<h5>Datum - Create / Update</h5>

			<h4><a href="">Reageren</a></h4>
		</div>
		
	</body>
</html>