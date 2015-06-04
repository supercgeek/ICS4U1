<!DOCTYPE HTML>
<html>
	<head>
		<title>Activity 2.5a Output - WHILE Loops</title>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />

		<!--STYLESHEET LOAD-->
		<link rel="stylesheet" type="text/css" href="styles_a.css">
		<script src="http://use.edgefonts.net/lekton:n7,i4,n4:all.js"></script>
	</head>

	<body>
		<h1>Activity 2.5a Output - WHILE Loops</h1>
		<p><a href="activity-2-5a.php?go=yes">Click Here to Run</a></p>
		
		<?php
		// rand() function randomly picks a number between 1 and 6 and assigns it to the variable $roll
		if ($_GET['go'] == "yes") {
			while ($count < 10){
					$count++;
					if ($count == 3){
						echo "$count - yay, this is number three!<br>";
					}	

					else if ($count == 7) {
						echo "$count - lucky number seven!<br>";
					}
					else {
						echo "$count<br>";
					}
				}
			}
		?>
	</body>
</html>