<!DOCTYPE HTML>
<html>
	<head>
		<title>Activity 2.5c Output - Nested FOR Loops</title>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />

		<!--STYLESHEET LOAD-->
		<link rel="stylesheet" type="text/css" href="styles_c.css">
		<script src="http://use.edgefonts.net/lekton:n7,i4,n4:all.js"></script>
	</head>

	<body>
		<h1>Activity 2.5c Output - Nested FOR Loops</h1>
		<p><a href="activity-2-5c.php?go=yes">Click Here to Run</a></p>
		<?php
		if ($_GET['go'] == "yes") {
				for ($countH1 = 1; $countH1 < 4; $countH1++){
					for ($countH2 = 1; $countH2 < 6; $countH2++){
						echo "Section $countH1-$countH2<br>";
					}
			}
		}
		?>
	</body>
</html>