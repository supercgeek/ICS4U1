<!DOCTYPE HTML>
<html>
	<head>
		<title>Activity 2.7 "Part A"</title>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />

		<!--STYLESHEET LOAD-->
		<link rel="stylesheet" type="text/css" href="styles-2.css">
		<script src="http://use.edgefonts.net/lekton:n7,i4,n4:all.js"></script>
	</head>
	<body>		
		<img src="http://d.pr/i/1i73E+">
		<form><!-- simple drop-down list //-->
	<select name="car">
		<option value="">Choose a Car</option>
		<option value="0">Zero</option>
		<option value="1">One</option>
		<option value="2">Two</option>
		<option value="3">Three</option>
		<option value="4">Four</option>
		<option value="5">Five</option>
		<option value="6">Six</option>
		<option value="7">Seven</option>
	</select>
	<input type="submit" name="yolo" value="GO!"></input><BR><BR>
	OR Pick a random Car: <input type="submit" name="car" value="RANDZ"></input>
	
	</form>
		
		<?php
		$trainCar[0] = "yolo people";
		$trainCar[1] = "wowwo people";
		$trainCar[2] = "yeet people";
		$trainCar[3] = "kaow people";
		$trainCar[4] = "slack people";
		$trainCar[5] = "sick people";
		$trainCar[6] = "king people";
		$trainCar[7] = "coolo people";
		if ($_GET['car'] == RANDZ) {
			$e = rand(0,7);
			echo "<BR>This train has " . $trainCar[$e] . " in it.<BR>";
		echo "<BR><BR>
		<p>Just watch this, k, cool ;)</p>
	<iframe width='560' height='315' src='https://www.youtube.com/embed/hHkKJfcBXcw?rel=0&amp;controls=0' frameborder='0' allowfullscreen></iframe'>";
		
		}
 		echo "<BR>This train has " . $trainCar[($_GET['car'])] . " in it.<BR>";
		echo "<BR><BR>
		<p>Just watch this, k, cool ;)</p>
	<iframe width='560' height='315' src='https://www.youtube.com/embed/hHkKJfcBXcw?rel=0&amp;controls=0' frameborder='0' allowfullscreen></iframe'>
		
		";

		

//for ($i = 0; $i < sizeof($course); $i++) {
//     echo "<li>" . $course[$i] . "</li>";
//}
?>
	</body>
</html>