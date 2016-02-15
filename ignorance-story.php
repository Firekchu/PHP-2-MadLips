<!DOCTYPE html>
<html>
	<head>
		<title>Ignorance</title>
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
				<p>Er zijn veel mensen die niet kunnen <?php echo $_POST['willenkunnen']?>. Neem nou <?php echo $_POST['persoon']?>.</p>
				<p>Zelfs met de hulp van een <?php echo $_POST['vakantie']?> of zelfs <?php echo $_POST['getal']?> kan <?php echo $_POST
				['persoon']?> niet <?php echo $_POST['willenkunnen']?>.</p>
				<p>Dat heeft niet te maken met een gebrek aan <?php echo $_POST['besteigenschap']?>, maar met een te veel
				aan <?php echo $_POST['slechteigenschap']?>.</p>
				<p>Te veel <?php echo $_POST['item']?> leidt tot <?php echo $_POST['vakantie']?> en dat is niet goed als 
				je wilt <?php echo $_POST['willenkunnen']?>.</p>
				<p>Helaas voor <?php echo $_POST['persoon']?>.</p>
			</main>

			<footer>
				<p id="footer">Webpage built by James Johnson</p>
			</footer>
		</div>
	</body>
</html>