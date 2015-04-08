<!DOCTYPE HTML>
<html>
	<head>
		<title>Activity 2.5d Temperature Conversions DO WHILE LOOPS</title>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />

		<!--STYLESHEET LOAD-->
		<link rel="stylesheet" type="text/css" href="styles_a.css">
		<script src="http://use.edgefonts.net/lekton:n7,i4,n4:all.js"></script>
	</head>

	<body>
		<h1>Activity 2.5d Temperature Conversions DO WHILE LOOPS</h1>
		<p>Enter a starting number (smaller #) and ending number (bigger #) in°C" and this table will calculate the results.</p>
		<form>
		Starting Number: <input type="number" name="startValue" placeholder="Start Value in °C">
		Ending Number: <input type="number" name="endValue" placeholder="End Value in °C">
		<input type="submit" name="go" value="Click Here to Run">
		</form>
		<hr><br>
				<table style="undefined;table-layout: fixed; width: 685px">
					<tr>
						<th>Degrees Celsius (°C)</th>
						<th>Kelvin (K)</th>
						<th>Degrees Fahrenheit (°F)</th>
  					</tr>
				</table>		
		<?php
		if ($_GET['go']) {
			$start = $_GET['startValue'];
			$end = $_GET['endValue'];
			
			if ($start == null OR $end == null OR $start > $end) {
				echo "<p class='alert'>You must provide a starting and ending value <b>and </b> make sure your starting number is smaller than your ending number.</p>";
			} 
			else {
				//Assingment
				$celsius = $_GET['startValue'] - 1;
				$endTheMadness = $_GET['endValue'];

				//Loop
				do  {

					//Calculation
					$celsius = $celsius + 1;
					$kelvin = $celsius + 273;
					$fahrenheit = (1.8 * $celsius) + 32;

					//Printing
					echo "<table style='undefined;table-layout: fixed; width: 685px'><tr>
						  <th>$celsius</th>
						  <th>$kelvin</th>
						  <th>$fahrenheit</th></tr>";
				} while ($celsius != $endTheMadness); /* The Action Zone!! */
			}
		}	
		?>
	</body>
</html>