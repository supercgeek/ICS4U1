<!DOCTYPE html>
<html>
<head>
	<title>Activity 2.6b -- Ice Cream</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />

	<!--STYLESHEET LOAD-->
		<link rel="stylesheet" type="text/css" href="styles_b.css">
		<script src="http://use.edgefonts.net/lekton:n7,i4,n4:all.js"></script>
</head>
<body>
	<form method="post" action="activity-2-6b.php">
			Cone Height: <input type="number" name="coneHeight" placeholder="# in cm"><BR>
			Cone Radius: <input type="number" name="coneRadius" placeholder="# in cm"><BR>
						 <input type="submit" name="informer" value="RUN">
	</form>

<?php
	if ($_POST['informer']) {
	// VARIABLE ASSINGMENT
	$coneHeight = $_POST['coneHeight'];
	$coneRadius = $_POST['coneRadius'];

	// ABS THING
	$coneHeight = abs($coneHeight);
	$coneRadius = abs($coneRadius);
	
	coneCalc($coneHeight, $coneRadius);
		
	}
	function coneCalc($coneHeight, $coneRadius) {
			// CALCULATION
			$coneVol = ($coneHeight * pi() * pow($coneRadius,2))/3;
			$sphereVol = 4 * (pi() * pow($coneRadius,3))/3;
			echo "Cone Height: " . $coneHeight;
			echo "<BR>";
			echo "Cone Radius: " . $coneRadius;
			echo "<BR>";
			echo "Cone Volume: " . $coneVol . " cm^3";
			echo "<BR>";
			echo "Full Sphere Volume: " . $sphereVol . " cm^3";
			$iceConeVol = $coneVol + (1/2) * ($sphereVol);
			echo "<BR>";
			echo "Ice-Cream Cone Volume: " . $iceConeVol . " cm^3";
		}
?>
<!-- <img src="https://s-media-cache-ak0.pinimg.com/736x/25/80/ec/2580ecf0b7b0fe7fe796e05fd076c974.jpg"> -->
</body>
</html>