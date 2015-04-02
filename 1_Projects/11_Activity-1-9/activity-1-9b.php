<!DOCTYPE html>
<html lang="en">

<head>
	<title>Activity 1.9b - HTML Forms</title>

	<meta http-equiv="content-type" content="text/html;charset=utf-8" />

	<!--STYLESHEET LOAD-->
	<link rel="stylesheet" type="text/css" href="styles_b.css">

</head>

<body>
	<!--INTRO-->
	<h2>About Your Day</h2>
	<p>Use this form to tell me a little bit about your day.</p>

	<!--THE FORM-->
	<div class="formArea">

		<form class="answer" name="yourDay" action="activity-1-9b.php" method="post">

			<!--"1: have you had a good day?"-->

			<!--QUE-->
			<p style="width: 210px" class="question">Have you had a good day?</p>
			<!--ANS-->
			<input type="radio" name="happy" value="YES">YES</input>
			<input type="radio" name="happy" value="NO">NO</input>

			<!--"2: how many cups of coffe did you drink today?"-->

			<!--QUE-->
			<p style="width: 320px" class="question">rate your emotional state using this slider</p>
			<!--ANS-->
			SAD
			<input type="range" name="emotionalState" value="yes">HAPPY</input>


			<!--"3: what meals did you have today?"-->

			<!--QUE-->
			<p style="width: 260px" class="question">what meals did you have today?</p>
			<!--ANS-->
			<input type="checkbox" name="breakfast" value="BREAKFAST">BREAKFAST</input>
			<input type="checkbox" name="lunch" value="LUNCH">LUNCH</input>
			<input type="checkbox" name="dinner" value="DINNER">DINNER</input>

			<!--"4: where do you live?"-->
			<!--QUE-->
			<p style="width: 150px" class="question">where do you live?</p>
			<!--ANS-->
			<select class="selecter" name="location">
				<option value="">Choose a Place</option>
				<option value="EARTH">Earth</option>
				<option value="MARS">Mars</option>
				<option value="THE MOON">The Moon</option>
			</select>

			<!--"5: what was the worst part of your day?"-->

			<!--QUE-->
			<p style="width: 300px" class="question">what was the worst part of your day?</p>
			<!--ANS-->
			<input style="background-color: rgba(193, 193, 193, 0.54); padding: 10px; font-size: 14px; padding-top: 12px; border-radius: 20px; text-align: center; color: #ffffff; font-weight: bold;" type="text" name="worstPart" value="" placeholder="TYPE HERE"></input>

			<!-- SUBMIT REGION-->
			<div class="overlay">
				<div class="submitButton">
				</div>
			</div>
			<br>
			<input type="submit" name="goButton" value="SUBMIT"></input>
		</form>
	</div>
	<div class="reportArea">


		<?php
if ($_POST['goButton']) {
	$happyness = $_POST['happy'];
	$feeling = $_POST['emotionalState'];
	$meal1 = $_POST['breakfast'];
	$meal2 = $_POST['lunch'];
	$meal3 = $_POST['dinner'];
	$where = $_POST['location'];
	$apple = $_POST['fruit2'];
	$badPart = $_POST['worstPart']; 
	
	echo "<p><i>Your input has been reprinted below</i></p>";
	echo "<hr>";
	echo "<p>You're having a good day? <b>$happyness</b></p>";
	echo "<p>Your emotional state ranks <b>$feeling out of 100</b></p>"; 
	echo "<p>You ate the following meals: <b> $meal1 $meal2 $meal3</b></p>"; 
	echo "<p>You live on: <b>$where</b></p>";
	echo "<p>The worst part of your day was: <b>$badPart</b></p>";
	echo '<style type="text/css">
        .reportArea {
            display: inherit;
        }
        </style>'; 
	}
		?>
		
	</div>

</body>

</html>