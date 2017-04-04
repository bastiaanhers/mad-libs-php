
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>mad-libs - er heerst paniek</title>
	</head>
	<body>
		<main>
		<h1>mad-libs</h1>
		<div id="main">
		<nav>

			<a href="" class="button">er heerst paniek</a>
			<a href="onkunde.php" class="button">onkunde</a>
		</nav>
		<div id="banaan"><br>
			<h2>Er heerst paniek...</h2>
			<div id="text">
				<p>Welk dier zou je nooit als huisdier willen hebben?</p>
				<p>Wie is de belangrijkste persoon in je leven?</p>
				<p>In welk land zou je graag willen wonen?</p>
				<p>Wat doe je als je je verveelt?</p>
				<p>Met welk speelgoed speelde je als kind het meest?</p>
				<p>Bij welk docent spijbel je het liefst?</p>
				<p>Als je $100.000,- had, wat zou je dan kopen?</p>
				<p>Wat is je favoriete bezigheid?</p>
			</div>
			<div id="input">
			<form action="er_heerst_paniek.php" method="POST">
				<input type="text" name="word1" value="">
				<input type="text" name="word2" value="">
				<input type="text" name="word3" value="">
				<input type="text" name="word4" value="">
				<input type="text" name="word5" value="">
				<input type="text" name="word6" value="">
				<input type="text" name="word7" value="">
				<input type="text" name="word8" value="">

				<input type="submit" name="submit" value="Versturen">
			</form> 
			</div>

		</div>
		</div>
		<?php



		?>	
		</main>
	</body>
</html>