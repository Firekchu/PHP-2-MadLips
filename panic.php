<!DOCTYPE html>
<html>
	<head>
		<title>Panic</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<div id="container">
			<header>
				<h1>Mad Libs</h1>
			</header>

			<nav>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li id="selected">1</li>
					<li><a href="ignorance.php">2</a></li>
					<li></li>
				</ul>
			</nav>

			<main>
				<h2>Panic</h2>
				<form action="panic-story.php" method="post">
					<p>Animal:<br><input type="text" name="animal"></p>
					<p>Cool Person:<br><input type="text" name="coolperson"></p>
					<p>Country:<br><input type="text" name="country"></p>
					<p>When Bored:<br><input type="text" name="bored"></p>
					<p>Toy:<br><input type="text" name="toy"></p>
					<p>Bad Person:<br><input type="text" name="badperson"></p>
					<p>Buy if Rich:<br><input type="text" name="buy"></p>
					<p>Hobby:<br><input type="text" name="hobby"></p>
					<p id="confirm"><input type="submit" value="Submit"></p>
				</form>
			</main>

			<footer>
				<p id="footer">Webpage built by James Johnson</p>
			</footer>
		</div>
	</body>
</html>