<!DOCTYPE HTML>
<html lang="en">
<head>
		<meta charset="utf-8">
		<title>Activty 2.6.1 "Pyramid Calculator"</title>
		<meta http-equiv="content-type" content="text/html"/>

		<!--STYLESHEET LOAD-->
		<link rel="stylesheet" type="text/css" href="pyra_style.css">
		<script src="http://use.edgefonts.net/anonymous-pro:n4,i4,n7,i7:all.js"></script>
	</head>
	<body>
		<!-- PART 1-->
		<h1>Activty 2.6.1 "Pyramid Calculator"</h1>
		<!-- CALCULATOR ONE -->
		<BR><p class='sub'>PART 1: Calculate the volume or surface area of a Pyramid.</p>		
		<form name="test" method="get" action="pyramid-calculator.php">
			<!-- FIELDS -->
			<b> Triangle Height ( <input type="number" name="height" placeholder="any # > 0"> ) </b>
			<b> Triangle Base ( <input type="number" name="base" placeholder="any # > 0"> ) 
			<b> Triangle Side Length ( <input type="number" name="sideLength" placeholder="any # > 0"> ) </b><BR><BR></b>
			<!-- SUBMIT BUTTONS -->
			<b> Calculate Volume [ <input name="run-v" type="submit" value="Get the Volume"> ] </b>
			<b> Calculate Surface Area [ <input name="run-sa" type="submit" value="Get the Surface Area"> ] </b>
		</form>
		<?php
		if ($_GET['run-v']) {
			// ASSIGNMENT
			$height = $_GET['height'];
			$base = $_GET['base'];
			$sideLength = $_GET['sideLength'];

			//ERROR CHECKING
			if ($height == null || $base == null) {	
			//NULL SETTER
			if ($height == "") {$height = "No Value Entered";} 
			if ($base == "") {$base = "No Value Entered";}
			if ($sideLength == "") {$sideLength = "No Value Entered";}
			
			//WARNING
			echo "<p> <span class='bad-spaner'>To calculate Volume, you must enter a <bb class='bb-base'>base</bb> and <bb class='bb-height'>height</bb> for the triangle.</span><BR><BR>";
			
			//REPORTER CALL
			reporter($height, $base, $sideLength);
				
			} 
			else {
				//NULL SETTER
			if ($height == "") {$height = "No Value Entered";} 
			if ($base == "") {$base = "No Value Entered";}
			if ($sideLength == "") {$sideLength = "No Value Entered";}
			//CALCULATION
			$pVol = (1/3) * (pow($base, 2)) * ($height);
			
			//PRINT
			echo "<p>";
			echo "<span class='spaner'>The Volume of the Pyramid is " . $pVol . " units^3.</span><BR><BR>";
			//REPORTER CALL
			reporter($height, $base, $sideLength);
			}
		}
		else if ($_GET['run-sa']) {
			// ASSIGNMENT
			$height = $_GET['height'];
			$base = $_GET['base'];
			$sideLength = $_GET['sideLength'];
			

			//ERROR CHECKING
			if ($sideLength == null || $base == null) {	
			//NULL SETTER
			if ($height == "") {$height = "No Value Entered";} 
			if ($base == "") {$base = "No Value Entered";}
			if ($sideLength == "") {$sideLength = "No Value Entered";}
				
			//WARNING
			echo "<p> <span class='bad-spaner'>To calculate Surface Area, you must enter a <bb class='bb-base'>base</bb> and <bb class='bb-side'>side length</bb> for the triangle.</span><BR><BR>";
			//REPORTER CALL
			reporter($height, $base, $sideLength);
			
			}
			else {
				//NULL SETTER
			if ($height == "") {$height = "No Value Entered";} 
			if ($base == "") {$base = "No Value Entered";}
			if ($sideLength == "") {$sideLength = "No Value Entered";}
				//CACLCULATION
				$pSurA = (2 * $base * $sideLength) + (pow($base, 2));
		
				//PRINT
				echo "<p>";
				echo "<span class='spaner'>The Surface Area of the Pyramid is " . $pSurA . " units^2.</span><BR><BR>";
				//REPORTER CALL
				reporter($height, $base, $sideLength);
			}
			}
		//FUNCTIONS
		function reporter($height, $base, $sideLength) {
			//REPORT
			echo "<span class='report'>";
			echo "<bb class='bb-height'>Height:</bb> " . $height . "<BR>";
			echo "<bb class='bb-base'>Base:</bb> ". $base. "<BR>";
			echo "<bb class='bb-side'>Side Length:</bb> " . $sideLength;
			echo "</p></span>";
			}
		?>
		<!-- CALCULATOR TWO -->
		<BR><p class='sub'>PART 2: Solve the side length, base or height of a triangle, given the other two values.</p>		
		<form name="test" method="get" action="pyramid-calculator.php">
			<!-- FIELDS -->
			<b> Triangle Height ( <input type="number" name="height" placeholder="any # > 0"> ) </b>
			<b> Triangle Base ( <input type="number" name="base" placeholder="any # > 0"> ) 
			<b> Triangle Side Length ( <input type="number" name="sideLength" placeholder="any # > 0"> ) <BR><BR></b>
			
			<!-- SUBMIT BUTTONS -->
			<b> Calculate the missing variable [ <input name="run-so" type="submit" value="Get the Solution"> ] </b>
		</form>
		<?php
			if ($_GET['run-so']) {
			// ASSIGNMENT
			$height = $_GET['height'];
			$base = $_GET['base'];
			$sideLength = $_GET['sideLength'];
			
			//ERROR CHECKING
			if ($sideLength == null) {	
				if ($base == null OR $height == null) {
					///WARNING
					echo "<p> <span class='bad-spaner'>To sovle the missing variable, please fill any two of the three values.</span><BR>";
					//REPORTER CALL
					reporter($height, $base, $sideLength);
				}
				else {
					//CALCULATION
					$sideLengthSolved = sqrt(((1/2) * pow($base, 2)) + (pow($height, 2)));
					//NULL SETTER
					if ($height == "") {$height = "No Value Entered";} 
					if ($base == "") {$base = "No Value Entered";}
					if ($sideLength == "") {$sideLength = "No Value Entered";}
					echo "<p>";
					echo "<span class='spaner'>The length of the side of the triangle is " . $sideLengthSolved . " units.</span><BR>";
					reporter($height, $base, $sideLength);
				}
			}
			else if ($base == null) {
				if ($sideLength == null OR $height == null) {
					///WARNING
					echo "<p> <span class='bad-spaner'>To sovle the missing variable, please fill any two of the three values.</span><BR>";
					//REPORTER CALL
					reporter($height, $base, $sideLength);
				}
				else {
					//CALCULATION
					$baseSolved = sqrt(2 * ((pow($sideLength, 2)) + (pow($height, 2))));
					//NULL SETTER
					if ($height == "") {$height = "No Value Entered";} 
					if ($base == "") {$base = "No Value Entered";}
					if ($sideLength == "") {$sideLength = "No Value Entered";}
					echo "<p>";
					echo "<span class='spaner'>The length of the side of the triangle is " . $baseSolved . " units.</span><BR>";
					reporter($height, $base, $sideLength);
				}
			}
			else if ($height == null) {
				if ($sideLength == null OR $base == null) {
					///WARNING
					echo "<p> <span class='bad-spaner'>To sovle the missing variable, please fill any two of the three values.</span><BR>";
					//REPORTER CALL
					reporter($height, $base, $sideLength);
				}
				else {
					//CALCULATION
					$heightSolved = sqrt(pow($sideLength, 2) - ((1/2) * pow($base, 2)));
					//NULL SETTER
					if ($height == "") {$height = "No Value Entered";} 
					if ($base == "") {$base = "No Value Entered";}
					if ($sideLength == "") {$sideLength = "No Value Entered";}
					echo "<p>";
					echo "<span class='spaner'>The length of the side of the triangle is " . $heightSolved . " units.</span><BR>";
					reporter($height, $base, $sideLength);
			}
			}
			else {
				
				///WARNING
				echo "<p> <span class='bad-spaner'>To solve a missing variable, you have to have one ;) Please leave at least one field blank.</span><BR>";
				
				//REPORTER CALL
				reporter($height, $base, $sideLength);
				echo "</span class='bad-spaner'>";
			}
			}
		?>
		<!-- PART 2-->
		<BR><BR>
		<div class="pyra">The Great Pyramid of Giza<BR>
<iframe width="420" height="315" src="https://www.youtube.com/embed/QZ7T2shexEM?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe><BR>
			<bb class='bb-bot'>Height:</bb> ~147 metres <BR>
			<bb class='bb-bot'>Base:</bb> ~230 metres <BR>
			<bb class='bb-bot'>Side Length:</bb> 219 meters <BR>
			<bb class='bb-bot'>Surface Area:</bb> ~153,640 metres^2 <BR>
			<bb class='bb-bot'>Volume:</bb> ~2,592,100  metres^3 <BR>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13824.027279961178!2d31.134202!3d29.979234!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x810c2f3fa2a52424!2sThe+Great+Pyramid+at+Giza!5e0!3m2!1sen!2sca!4v1433488364752" width="600" height="450" frameborder="0" style="border:0"></iframe>
			
		<BR>
	References: <a href="http://upload.wikimedia.org/wikipedia/commons/e/e3/Kheops-Pyramid.jpg">Background Image</a>, <a href="http://en.wikipedia.org/wiki/Great_Pyramid_of_Giza">Wikipedia</a>
		</div><BR><BR>
	</body>
</html>