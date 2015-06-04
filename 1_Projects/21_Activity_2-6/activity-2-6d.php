<!DOCTYPE html>
<html>
<head>
	<title>Activity 2.6d -- BMI</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8"/>

	<!--STYLESHEET LOAD-->
		<link rel="stylesheet" type="text/css" href="styles_d.css">
		<script src="http://use.edgefonts.net/lekton:n7,i4,n4:all.js"></script>
</head>
<body>
	<form method="post" action="activity-2-6d.php">
	Weight:
		<input type="text" name="weight" placeholder="(kg)"><BR>
	Height:
		<input type="text" name="height" placeholder="(meters)"><BR>
	<!--SUBMIT-->
		<input type="submit" name="informer" value="RUN">
	</form>
	<p>
		BMI helps you get an idea of how healthy your weight is, here's the formula that's used to calculate it: $bmi = (($weight)/(pow($height, 2)));
		</p>

<?php
	if ($_POST['informer']) {
	// VARIABLE ASSINGMENT
	$weight = $_POST['weight'];
	$height = $_POST['height'];
	
	$weight = abs($weight);
	$height = abs($height);
	
	echo "Your weight in Kilograms is " . $weight . "<BR>";
	echo "Your height in Meters " . $height . "<BR>";
	
	echo "Your BMI is: " . bmi($weight, $height) . " m/s<BR>";

	echo "According your BMI, you are " . howHeavy($weight, $height) . ".";
	}
	function bmi($weight, $height) {
			$bmi = (($weight)/(pow($height, 2)));
			return $bmi;
	}
	function howHeavy($weight, $height) {
		$bmi = bmi($weight, $height);
		if ($bmi < 18.5) {
//		underweight
		$howHeavy = "an underweight person";
		} 
		elseif ($bmi >= 18.5 && $bmi <= 24.9) {
//		normal weight
		$howHeavy = "a 'normal weight' person";
		} 
		elseif ($bmi >= 25 && $bmi <= 29.9) {
//		overweight
		$howHeavy = "an overweight person";
		} 
		else {
//		obese
		$howHeavy = "an obese person";
		}
		return $howHeavy;
	}
?>
</body>
</html>