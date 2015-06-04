<!DOCTYPE HTML>
<html>
	<head>
		<title>Activity 2.5b Output - FOR Loops</title>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />

		<!--STYLESHEET LOAD-->
		<link rel="stylesheet" type="text/css" href="styles_b.css">
		<script src="http://use.edgefonts.net/lekton:n7,i4,n4:all.js"></script>
	</head>

	<body>
		<h1>Activity 2.5b Output - FOR Loops</h1>
		<p><a href="activity-2-5b.php?go=yes">Click Here to Run</a></p>
		
		<?php
		// rand() function randomly picks a number between 1 and 6 and assigns it to the variable $roll
		if ($_GET['go'] == "yes") {
				for ($count = 0; $count < 20; $count = $count + 2){
					if ($count == 10) {
						echo "$count - Half way there!<br>";						
					}
					else {
						echo "$count<br>";
					}
					
				}
			}
		?>
	</body>
</html>