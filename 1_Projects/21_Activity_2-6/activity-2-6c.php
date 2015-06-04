<!DOCTYPE html>
<html>
<head>
	<title>Activity 2.6c -- Terminal Velocity</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8"/>

	<!--STYLESHEET LOAD-->
		<link rel="stylesheet" type="text/css" href="styles_c.css">
		<script src="http://use.edgefonts.net/lekton:n7,i4,n4:all.js"></script>
</head>
<body>
<iframe width="450" height="300" src="https://www.youtube.com/embed/p0IZsfzDS4s?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
	<form method="post" action="activity-2-6c.php">
	Mass:
		<input type="number" name="mass" placeholder="(kg)"><BR>
	Drag Coefficent:
		<select class="selecter" name="dragCo">
			<option value="">Choose an Object Shape</option>
			<option value="1.28">Flate Plate (1.28)</option>
			<option value="1.14">Prism (1.14)</option>
			<option value="0.30">Bullet Shape (0.30)</option>
			<option value="0.10">Sphere (0.10)</option>
			<option value="0.05">Airfoil (0.05)</option>
		</select><BR>
	Frontal Area:
		<input type="number" name="area" placeholder="(m^2)"><BR>
	<!--SUBMIT-->
		<input type="submit" name="informer" value="RUN">
	</form>

<?php
	if ($_POST['informer']) {
	// VARIABLE ASSINGMENT
	$mass = $_POST['mass'];
	$dragCo = $_POST['dragCo'];
	$area = $_POST['area'];
	
	$mass = abs($mass);
	$dragCo = abs($dragCo);
	$area = abs($area);
	
	echo "Mass: " . $mass . "<BR>";
	echo "Drag Coefficent: " . $dragCo . "<BR>";
	echo "Frontal Area: " . $area . "<BR>";
		
	terminalVelocity($mass, $dragCo, $area);
	}
	function terminalVelocity($mass, $dragCo, $area) {
			$tv = sqrt((19.6 * $mass)/($dragCo * 1.229 * $area));
			echo "Terminal Velocity: " . $tv . " m/s";
		}
?>
</body>
</html>