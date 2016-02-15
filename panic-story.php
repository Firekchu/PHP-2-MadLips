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
				<p>Meanwhile in the kingdom of <?php echo $_POST['country']?>.</p>
				<p>King <?php echo $_POST['coolperson']?> is desperate and when king <?php echo $_POST['coolperson']?> is desperate, he calls his minister of desperation: <?php echo $_POST['badperson']?>.</p>
				<p>"<?php echo $_POST['badperson']?>! It's a disaster! A scandal!"</p>
				<p>"Sire, Majesty, Your loudness, what is the matter?"</p>
				<p>"My <?php echo $_POST['animal']?> disappeared! Just like that, without warning!
				I even bought him some <?php echo $_POST['buy']?>!"</p>
				<p>"Majesty, your <?php echo $_POST['animal']?> would surely reappear again?"</p>
				<p>"Well, that's fun and nice, but how am i supposed to learn <?php echo $_POST['hobby']?> now?"</p>
				<p>"But Sire, You could just use your <?php echo $_POST['toy']?> for that."</p>
				<p>"<?php echo $_POST['badperson']?>, you're absolutely right! What would I do without you?"</p>
				<p>"<?php echo $_POST['bored']?>, Sire."</p>
			</main>

			<footer>
				<p id="footer">Webpage built by James Johnson</p>
			</footer>
		</div>
	</body>
</html>