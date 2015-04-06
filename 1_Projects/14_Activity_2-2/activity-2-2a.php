<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<title>PHP Variables Lesson - YOUR NAME</title>	
	
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
	<form class="calc" name="perimter" action="activity-2-2a.php" method="get">
	( 2 × 
		<input class="calc_1" name="length" type="number" placeholder="length" required></input> )
	+ ( 2 × <input class="calc_1" name="width"type="number" placeholder="width" required></input> ) =
	<input type="submit" name="calc_1-Button" value="ANSWER"></input>
	</form>
	<?php 
	if ($_GET['calc_1-Button']) {
	//Variable Assignment
	$length = $_GET['length'];
	$width = $_GET['width'];
	//Shape Calculation
	if ($length == $width) {$shape = "square";} else {$shape = "rectangle";}
	//Calculation
	$ANSWER = (2*$length)+(2*$width);
	//Printing
	echo "<p><b>( 2 × $length) + ( 2 × $width) = $ANSWER</b></p>";
	echo "<p><i>Therefore, with length being <b> $length </b> and width being <b> $width</b>, the Perimter of the $shape is <b>$ANSWER</b> units.</i></p>";
	
	}
	?>
<!--
Some thing I'll figure out later.
<form style="background:none!important;
     border:none!important;
     padding:0;
     font-family: georgia;
	 text-decoration: underline;
     cursor: pointer;" name="clear_perimter" action="activity-2-2a.php" method="get"><input type="submit" name="calc_1-Clear" value="CLEAR"></input></form>
-->

	<br>
	<!--Area CACLULATION-->
	<h2>Area</h2>
	<p>Calculate the <b>Area</b> of a triangle by entering its base and height.</p>
	
	
	<br>
	<!--SPEED OF SOUND CACLULATION-->
	<h2>Speed of Sound</h2>
	<p>Calculate the Perimter of a rectandle by entering its length and width.</p>
	
	
	<br>
	<!--MAGIC NUMBER CALCUALTION-->
	<h2>Magic Number</h2>
	<p>Calculate the Perimter of a rectandle by entering its length and width.</p>
</body>