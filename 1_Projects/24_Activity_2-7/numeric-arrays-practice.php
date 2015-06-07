<!DOCTYPE HTML>
<html>
	<head>
		<title>Activity 2.7 "Intro"</title>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />

		<!--STYLESHEET LOAD-->
		<link rel="stylesheet" type="text/css" href="styles-1.css">
		<script src="http://use.edgefonts.net/lekton:n7,i4,n4:all.js"></script>
	</head>

	<body>
		<?php
$course[0] = "Math";
$course[1] = "Science";
$course[2] = "Computers";
$course[3] = "English";

echo "<p>I am taking " . $course[0] . ", " . $course[1] . ", " . $course[2] . " and " . $course[3] . ".</p>";

echo "<p>I am taking...</p>";
for ($i = 0; $i < sizeof($course); $i++) {
     echo "<li>" . $course[$i] . "</li>";
}
?>
	</body>
</html>