<?php
// start the PHP session
session_start();
?>
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
		<h3>Demonstrates rolling a die.</h3>
		<p><a href="activity-dice-game_EXT.php?roll=indeed">Click Here to Roll Again</a></p>
		<?php
		//RESET
		if ($_GET['reset'] == "yes") {
			$_SESSION['win_times'] = 0;
			$_SESSION['lose_times'] = 0;
			$_SESSION['rolls'] = 0;
			echo "<p>Game Reset!</p>";
		}
		else {
			//SESSION PULL
			if ($_SESSION['win_times'] == "") { 
				$_SESSION['win_times'] = 0;
			}
			if ($_SESSION['lose_times'] == "") { 
				$_SESSION['lose_times'] = 0;
			}
			if ($_SESSION['rolls'] == "") {
				$_SESSION['rolls'] == 0;
			}
			// rand() function randomly picks a number between 1 and 6 and assigns it to the variable $roll
			if ($_GET['roll'] == "indeed") {
			$roll = rand(1,6);
			$_SESSION['rolls']++;
			echo "<p>You rolled a " . $roll . ". </p>";
			echo "<img src=\"http://fwrd.io/2_Assets/1_Images/Dice-Game/die" . $roll . ".gif\" alt=\"die image\">";
			echo "<hr>";
			$computerRoll = rand(1,6);
			echo "<p>The computer rolled a " . $computerRoll . ". </p>";
			echo "<img src=\"http://fwrd.io/2_Assets/1_Images/Dice-Game/die" . $computerRoll . ".gif\" alt=\"die image\">";
			if ($computerRoll == $roll) {
				$_SESSION['win_times']++;
				echo "<p>You guessed correctly! Yipeey!</p>";
			}
			else {
				$_SESSION['lose_times']++;
				echo "<p>Try again, I'm sure you'll get it soon :)</p><BR>";
			}
				echo "<p><b> You have won <i>" . $_SESSION['win_times'] . "</i> time(s), lost <i>" . $_SESSION ['lose_times'] . "</i> time(s) and played " .$_SESSION['rolls'] . " times. Keep trying!</b></p>";
				echo "<a href='activity-dice-game_EXT.php?reset=yes'>RESET THE GAME!!";
			}
		}
		?>
	</body>
</html>

