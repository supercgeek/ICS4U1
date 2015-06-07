<!DOCTYPE HTML>
<html>
	<head>
		<title>Activity 2.7 "Part B"</title>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />

		<!--STYLESHEET LOAD-->
		<link rel="stylesheet" type="text/css" href="styles-4.css">
		<script src="http://use.edgefonts.net/lekton:n7,i4,n4:all.js"></script>
	</head>
	<body>		
		<h2>Planets!</h2>
		<a href="activity-2-7b.php?planet=Mercury">Mercury</a>
		<a href="activity-2-7b.php?planet=Venus">Venus</a>
		<a href="activity-2-7b.php?planet=Earth">Earth</a>
		<a href="activity-2-7b.php?planet=Mars">Mars</a>
		<a href="activity-2-7b.php?planet=Jupiter">Jupiter</a>
		<a href="activity-2-7b.php?planet=Saturn">Saturn</a>
		<a href="activity-2-7b.php?planet=Uranus">Uranus</a>
		<a href="activity-2-7b.php?planet=Neptune">Neptune</a>
		
		<BR><BR>
	</form>
		
		<?php
		//Accelerations
		$acceleration[Mercury] = 3.76;
		$acceleration[Venus] = 9.04;
		$acceleration[Earth] = 9.8;
		$acceleration[Mars] = 3.77;
		$acceleration[Jupiter] = 23.6;
		$acceleration[Saturn] = 10.06;
		$acceleration[Uranus] = 8.87;
		$acceleration[Neptune] = 11.23;
		
		//Planet Images
		$planet_image[Mercury] = "http://www.independent.co.uk/incoming/article8497114.ece/binary/original/Mercury.jpg";
		$planet_image[Venus] = "http://www.mnh.si.edu/exhibits/evolving-universe/full/Venus.jpg";
		$planet_image[Earth] = "http://solarviews.com/raw/earth/bluemarblewest.jpg";
		$planet_image[Mars] = "http://www.worldlawdirect.com/forum/attachments/international-law-issues/207d1288285424-who-owns-planets-mars-venus-venus.jpg";
		$planet_image[Jupiter] = "http://burro.astr.cwru.edu/stu/media/jupiter.jpg";
		$planet_image[Saturn] = "http://sphereboy.com/wp-content/uploads/2015/01/saturnmay2013.png";
		$planet_image[Uranus] = "http://www.wwu.edu/skywise/planets/neptune.jpg";
		$planet_image[Neptune] = "http://upload.wikimedia.org/wikipedia/commons/5/56/Neptune_Full.jpg";
	
		if ($_GET['planet'] != null ) {
			echo "<img src='" . $planet_image[($_GET['planet'])] . "'<BR>"; 		
			echo "<BR>The acceleration due to gravity on " . ($_GET['planet']) . " is " .  $acceleration[($_GET['planet'])] . " m/s^2.<BR>";
		}

//for ($i = 0; $i < sizeof($course); $i++) {
//     echo "<li>" . $course[$i] . "</li>";
//}
?>
	</body>
</html>