<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<title>PHP Variables Lesson - CAMERON BURGESS</title>	
	
	<meta name="description" content="The Calculator of Various Things">
	<meta name="author" content="Cameron Burgess">	
	
	<link type="text/css" rel="stylesheet" href="styles_a.css">
	
</head>
<body>
	<!-- main content -->
	<h1>The Calculator of Various Things</h1>
	<br>
	<!--PERIMETER CACLULATION-->
	<h2>Perimeter</h2>
	<p>Calculate the <b>Perimter</b> of a rectandle or square by entering its length and width.</p>
	<form class="calc" name="perimter" action="activity-2-2a.php" method="post">
	( 2 × 
		<input class="calc_1" name="length" type="number" placeholder="length" required></input> )
	+ ( 2 × <input class="calc_1" name="width"type="number" placeholder="width" required></input> ) =
	<input type="submit" name="calc_1-Button" value="ANSWER"></input>
	</form>
	<?php 
	if ($_POST['calc_1-Button']) {
	//Variable Assignment
	$length = $_POST['length'];
	$width = $_POST['width'];
	//Shape Calculation
	if ($length == $width) {$shape = "square";} else {$shape = "rectangle";}
	//Calculation
	$ANSWER_1 = (2*$length)+(2*$width);
	//Printing
	echo "<p><b>( 2 × $length ) + ( 2 × $width ) = $ANSWER_1</b></p>";
	echo "<p><i>Therefore, with length being <b> $length </b> and width being <b> $width</b>, the Perimter of the $shape is <b>$ANSWER_1</b> units.</i></p>";
	}
	?>
<!--
A thing I'll figure out later.
<form style="background:none!important;
     border:none!important;
     padding:0;
     font-family: georgia;
	 text-decoration: underline;
     cursor: pointer;" name="clear_perimter" action="activity-2-2a.php" method="post"><input type="submit" name="calc_1-Clear" value="CLEAR"></input></form>
-->
	<br>
	<!--Area CACLULATION-->
	<h2>Area</h2>
	<p>Calculate the <b>Area</b> of a triangle by entering its base and height.</p>
	<form class="calc" name="area" action="activity-2-2a.php" method="post">
	( 1/2 × 
		<input class="calc_2" name="base" type="number" placeholder="base" required></input> )
	× ( <input class="calc_2" name="height"type="number" placeholder="height" required></input> ) =
	<input type="submit" name="calc_2-Button" value="ANSWER"></input>
	</form>
	<?php 
	if ($_POST['calc_2-Button']) {
	//Variable Assignment
	$base = $_POST['base'];
	$height = $_POST['height'];
	//Calculation
	$ANSWER_2 = (1/2*$base)*($height);
	//Printing
	echo "<p><b>( 1/2 × $base ) × ( $height ) = $ANSWER_2</b></p>";
	echo "<p><i>Therefore, with the base being <b> $base </b> and the height being <b> $height</b>, the Area of triangle is <b>$ANSWER_2</b> units.</i></p>";
	
	}
	?>
	<br>
	<!--SPEED OF SOUND CACLULATION-->
	<h2>Speed of Sound</h2>
	<p>Calculate the Speed of Sound under the following temperatures by selecting a choice.</p>
	<form class="calc" name="perimter" action="activity-2-2a.php" method="post">
			( 0.6 × 	<select class="calc" name="temperature">
				<option value="FAIL">Choose a Temperature</option>
				<option value="-10">-10 °C</option>
				<option value="0">0 °C</option>
				<option value="10">10 °C</option>
				<option value="20">20 °C</option>
				<option value="30">30°C</option>
			</select>) + 332 =
	<input type="submit" name="calc_3-Button" value="ANSWER"></input>
	</form>
	<?php 
	if ($_POST['calc_3-Button']) {
	//Variable Assignment
	$temperature = $_POST['temperature'];
	}
	if ($temperature == "FAIL") {
	echo "<p>You must select a temperature first.</p>";
	}
	elseif ($temperature !== null) {
	//Calculation
	$ANSWER_3 = (0.6*$temperature)+(332);
	//Printing
	echo "<p><b>( 0.6 × $temperature ) + ( 332 ) = $ANSWER_3</b></p>";
	echo "<p><i>Therefore, with a temperature of <b> $temperature </b> °C, the rate at which sound travels through the air is <b>$ANSWER_3</b> meters per second.</i></p>";
	}
	else{}
	?>
	<br>
	<!--MAGIC NUMBER CALCUALTION-->
	<h2>Magic Number</h2>
	<p>Enter a number, wait for the Magic!</p>
<form class="calc" name="magic" action="activity-2-2a.php" method="post">
( <input class="calc_4" name="mystery" type="number" placeholder="type any number" required></input> ) = 
	<input type="submit" name="calc_4-Button" value="ANSWER"></input>
	</form>
	<?php 
	if ($_POST['calc_4-Button']) {
	//Variable Assignment
	$mystery = $_POST['mystery'];
	//Calculation
	$ANSWER_4 = ($mystery)*(9);
	//Printing
	echo "<p><b>( $mystery ) MAGIC OPERATOR = $ANSWER_4</b></p>";
	echo "<p><i>Therefore, with magic being performed the result is <b>$ANSWER_4</b> units.</i></p>";
	
	}
	?>
</body>