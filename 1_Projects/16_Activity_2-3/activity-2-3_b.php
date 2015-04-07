<!DOCTYPE HTML>
<html>

<head>
	<title>User Input & Conditional Statements Lesson</title>
	<!--STYLESHEET LOAD-->
	<link rel="stylesheet" type="text/css" href="styles_b.css"></link>
</head>

<body>
	<div class="all">
		<h1>Random Choose Thing</h1>
		<p class="description">Pick random variables, see what answers you get - have fun!</p>

		<div class="selected">
			<form class="answer" name="yourDay" action="activity-2-3_b.php" method="POST">
				<select class="selecter" name="NUMBER">
					<option value="">Pick A Number</option>
					<option value="1">One</option>
					<option value="2">Two</option>
					<option value="3">Three</option>
					<option value="4">Four</option>
					<option value="5">Five</option>
					<option value="6">Six</option>
					<option value="7">Seven</option>
					<option value="8">Eight</option>
					<option value="9">Nine</option>
					<option value="10">Ten</option>
				</select>
				<select class="selecter" name="COLOUR">
					<option value="">Pick A Colour</option>
					<option value="Blue">Blue</option>
					<option value="Green">Green</option>
					<option value="Red">Red</option>
				</select>
				<input type="submit" name="GO" value="SUBMIT"></input>
			</form>
		</div>
	</div>
<?php
//THE MAGIC
if ($_POST['GO']) {
	$number = $_POST['NUMBER'];
	$colour = $_POST['COLOUR'];
	if ($number <= 5 AND $colour == "Red") {
		echo "<p>You chose $number and $colour.</p>";
		echo "<h2>Lizard</h2>";
	}
	else if ($number >= 5 AND ($colour == "Red" OR $colour == "Blue")) {
		echo "<p>You chose $number and $colour.</p>";
		echo "<h2>Spock</h2>";
	}
	else if ($number >= 3 AND ($number < 7 AND $colour == "Green")) {
		echo "<p>You chose $number and $colour.</p>";
		echo "<h2>Rock</h2>";
	}
	else if ($number >= 9 AND $colour == "Green") {
		echo "<p>You chose $number and $colour.</p>";
		echo "<h2>Paper</h2>";
	} 
	else if ($colour != "Red" AND ($number == 4 OR $number == 8)) {
		echo "<p>You chose $number and $colour.</p>";
		echo "<h2>Scissors</h2>";
	}
	else {
		echo "<p>You chose $number and $colour.</p>";
		echo "<h2>Nothing specific to output...sorry try again.</h2>";
	}
}

?>
</body>

</html>