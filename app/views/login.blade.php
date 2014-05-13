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
					<li><a href="">Login</a></li>
					<li><a href="signup">Signup</a></li>
				</ul>
			</nav>
			<h1>Inloggen</h1>
			<form method="post" action="">
			<p><input type="text" id="email" name="email" placeholder="email"></p>
			<p><input type="password" id="password" name="password"></p>
			<p><input type="submit" value="Sign in"></p>
			</form>

			
		</div>
		
	</body>
</html>