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
					<li><a href="panic.php">1</a></li>
					<li id="selected">2</li>
					<li></li>
				</ul>
			</nav>

			<main>
				<h2>Ignorance</h2>
				<form action="ignorance-story.php" method="post">
					<p>Job:<br><input type="text" name="willenkunnen"></p>
					<p>Person:<br><input type="text" name="persoon"></p>
					<p>Number:<br><input type="text" name="getal"></p>
					<p>Item:<br><input type="text" name="item"></p>
					<p>Good Characteristic:<br><input type="text" name="besteigenschap"></p>
					<p>Bad Characteristic:<br><input type="text" name="slechteigenschap"></p>
					<p>Event:<br><input type="text" name="vakantie"></p>
					<p id="confirm"><input type="submit" value="Submit"></p>
				</form>
			</main>

			<footer>
				<p id="footer">Webpage built by James Johnson</p>
			</footer>
		</div>
	</body>
</html>