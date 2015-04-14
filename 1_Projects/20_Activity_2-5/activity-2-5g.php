<!DOCTYPE HTML>

<html lang="en">
<head>
		<meta charset="utf-8">
		<title>Activty 2.5g Physics Calculation - Using Loops</title>
<!--		<meta http-equiv="content-type" content="text/html" />-->

		<!--STYLESHEET LOAD-->
		<link rel="stylesheet" type="text/css" href="styles_g.css">
		<script src="http://use.edgefonts.net/lekton:n7,i4,n4:all.js"></script>
	</head>

	<body>
		<h1>Activty 2.5g Physics Calculation - Using Loops</h1>
		<p>Calculate the time it takes for a cat to fall from the top of a building by filling the following fields.</p>
		
		<form name="test" method="get" action="activity-2-5g.php">
			<b>Building Height: <input type="number" name="building" placeholder="Any # > 50 AND <= 1500 (meters)"><BR><BR>
			<!--Greater than 50 metres and lesser than or equal 1500m-->
			
			<b>Initial Speed: <input type="number" name="speed" placeholder="Any + OR - # (meters/second)"><BR><BR>
			<!--Greater than 50 metres and lesser than or equal 1500m-->
					
				<b> Time-Step: <select name="time">
									<option value=""> — </option>
									<option value="2"> 2 Secs</option> // 2 Seconds
									<option value="1.5"> 1.5 Secs</option> // 1.5 Seconds
									<option value="1"> 1 Secs</option> // 1 Seconds
									<option value="0.5"> 0.5 Secs</option> // 0.5 Seconds
									<option value="0.1"> 0.1 Secs</option> // 0.1 Seconds
									<option value="0.01"> 0.01 Secs</option> // 0.01 Seconds
								</select><BR><BR>
			<!--time increment over which the calculation will be calculated).  The time step can range from 0.01 seconds to 2.0 seconds.-->
				
			<b> Submit 1: <input name="run" type="submit" value="Press this for All Calculations"><BR><BR>
			<b> Submit 2: <input name="run-one" type="submit" value="Press this for the Final Answer Only"><BR>
		</form><BR><BR>	
		<?php
		// calculating all steps
		if ($_GET['run']) {
			
			// ASSIGNMENT
			$building = $_GET['building'];
			$time = $_GET['time'];
			$speed = $_GET['speed'];
			$clock = 0;
			if ($time == "") {$time = "null";}
			
			//CONDITIONALS
			if (($building <= 50 OR $building > 1500) OR ($time < 0.01 OR $time > 2.00)){
				
				echo "<p> <span class='bad-spaner'> One of your values is in error, please correct them to fall within the designated ranges.</span></p>";
			}
			else {
				// PRINTING
				echo "<p> For a <span class='spaner'> $building</span> meter tall building, using the time step <span class='spaner'> $time</span> and with the inital speed <span class='spaner'> $speed</span>, the results are the following:</p>";
				echo "<table style='undefined;table-layout: fixed; width: 400px'>
					<tr>
						<th>Time</th>
						<th>Height Above Ground</th>
  					</tr>
				</table>";
				if ($speed >= 0){
	//				PLUS VERSION
					while ($heightAboveGround >= 0) {
						
						$heightAboveGround = $building + $speed*$clock - 4.9*pow($clock,2);
						echo "<table style='undefined;table-layout: fixed; width: 400px'>
						<tr>
							<th><span class='nice-spaner'>$clock</span></th>
							<th><span class='nice-spaner'>$heightAboveGround</span></th>
						</tr>
					</table>";
					$clock = $clock + $time;
					}
					$clockResult = $clock - $time; //Accouns for the offset of the $clock calculation taking place at the end of the loop.
					echo "<BR><BR><span class='ampleSpace'>The cat took approximately $clockResult  seconds to fall $building meters and hit the ground.<BR><BR>
				Note: Try a smaller Time-Step to get a more accurate solution.</span><BR><BR><BR>";
				}
				else
				{
	//				MINUS VERSION
					while ($heightAboveGround >= 0) {
						$heightAboveGround = $building - abs($speed)*$clock - 4.9*pow($clock,2);
						echo "<table style='undefined;table-layout: fixed; width: 400px'>
						<tr>
							<th><span class='nice-spaner'>$clock</span></th>
							<th><span class='nice-spaner'>$heightAboveGround</span></th>
						</tr>
					</table>";
					$clock = $clock + $time;
					}
					$clockResult = $clock - $time; //Accouns for the offset of the $clock calculation taking place at the end of the loop.
					echo "<BR><BR><span class='ampleSpace'>The cat took approximately $clockResult  seconds to fall $building meters and hit the ground.<BR><BR>
				Note: Try a smaller Time-Step to get a more accurate solution.</span><BR><BR><BR>";
				}
			}
		}
		// calculating no steps
		else if ($_GET['run-one']) {
			// ASSIGNMENT
			$building = $_GET['building'];
			$time = $_GET['time'];
			$speed = $_GET['speed'];
			$clock = 0;
			if ($time == "") {$time = "null";}
			
			//CONDITIONALS
			if (($building <= 50 OR $building > 1500) OR ($time < 0.01 OR $time > 2.00)){
				
				echo "<p> <span class='bad-spaner'> One of your values is in error, please correct them to fall within the designated ranges.</span></p>";
			}
			else {
				// PRINTING
				echo "<p> For a <span class='spaner'> $building</span> meter tall building, using the time step <span class='spaner'> $time</span> and with the inital speed <span class='spaner'> $speed</span>, the results are the following:</p>";
			
			 	if ($speed >= 0){
	//				PLUS VERSION
					while ($heightAboveGround >= 0) {
						$heightAboveGround = $building + $speed*$clock - 4.9*pow($clock,2);
					$clock = $clock + $time;
					}
				$clockResult = $clock - $time; //Accouns for the offset of the $clock calculation taking place at the end of the loop.
				$clockResult = $clock - $time; //Accouns for the offset of the $clock calculation taking place at the end of the loop.
					echo "<BR><BR><span class='ampleSpace'>The cat took approximately $clockResult  seconds to fall $building meters and hit the ground.<BR><BR>
				Note: Try a smaller Time-Step to get a more accurate solution.</span><BR><BR><BR>";
				}
				else
				{
	//				MINUS VERSION
					while ($heightAboveGround >= 0) {
						$heightAboveGround = $building - abs($speed)*$clock - 4.9*pow($clock,2);
					$clock = $clock + $time;
					}
				$clockResult = $clock - $time; //Accouns for the offset of the $clock calculation taking place at the end of the loop.
					echo "<BR><BR><span class='ampleSpace'>The cat took approximately $clockResult  seconds to fall $building meters and hit the ground.<BR><BR>
				Note: Try a smaller Time-Step to get a more accurate solution.</span><BR><BR><BR>";
				}	
			
			}
			
		}
				
		?>
	</body>
</html>