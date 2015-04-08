<!DOCTYPE HTML>
<html>
	<head>
		<title>Dice Game</title>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />

		<!--STYLESHEET LOAD-->
		<link rel="stylesheet" type="text/css" href="styles.css">
		<script src="http://use.edgefonts.net/lekton:n7,i4,n4:all.js"></script>
	</head>

	<body>
		<h1>Dice Game!</h1>
		<h3>Demonstrates rolling a die</h3>
		<?php
		// rand() function randomly picks a number between 1 and 6 and assigns it to the variable $roll
		$roll = rand(1,6); 
		echo "<p>You rolled a " . $roll . ". </p>";
		echo "<img src=\"images/die" . $roll . ".gif\" alt=\"die image\">";
		?>
		<p>Refresh this page in the browser to roll another die.</p>
	</body>
</html>