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
		<p><a href="activity-2-5d.php?go=yes">Click Here to Run</a></p>
		<hr><br>
	
				<table style="undefined;table-layout: fixed; width: 685px">
					<tr>
						<th>Degrees Celsius (°C)</th>
						<th>Kelvin (K)</th>
						<th>Degrees Fahrenheit (°F)</th>
  					</tr>
				</table>		
		<?php
		if ($_GET['go'] == "yes") {
			
			//Assingment
			$celsius = 101;

			//Loop
			do  {
				
				//Calculation
				$celsius = $celsius - 1;
				$kelvin = $celsius + 273;
				$fahrenheit = (1.8 * $celsius) + 32;
				
				//Printing
				echo "<table style='undefined;table-layout: fixed; width: 685px'><tr>
					  <th>$celsius</th>
				      <th>$kelvin</th>
					  <th>$fahrenheit</th></tr>";
			} while ($kelvin != 0); /* The Action Zone!! */
		}	
		?>
	</body>
</html>