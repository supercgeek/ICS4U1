<!DOCTYPE html>
<html>
<head>
	<title>Activity 2.6a Output</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />

	<!--STYLESHEET LOAD-->
		<link rel="stylesheet" type="text/css" href="styles_a.css">
		<script src="http://use.edgefonts.net/lekton:n7,i4,n4:all.js"></script>
</head>
<body>
<?php 
	// date_default_timezone_set(UTC);
	$randNumber = rand(1,300);
	// echo $randNumber;
	// echo "<BR>";
	// echo date("Y/M/D");

	function yumYum($randNumber) {
		echo "<BR>";
		echo "The Function is Fiddling: ";
		echo $randNumber;
	}


	yumYum($randNumber);

 ?>
</body>
</html>