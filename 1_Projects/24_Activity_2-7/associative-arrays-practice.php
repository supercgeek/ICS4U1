<!DOCTYPE HTML>
<html>
	<head>
		<title>Activity 2.7 "Associative Arrays Practice"</title>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />

		<!--STYLESHEET LOAD-->
		<link rel="stylesheet" type="text/css" href="styles-3.css">
		<script src="http://use.edgefonts.net/lekton:n7,i4,n4:all.js"></script>
	</head>

	<body>
	<?php
$car['echo'] = "$20,000";
$car['bmw'] = "$50,000";
$car['ferrari'] = "$150,000";
$car['lexus'] = "$80,000";

// or another way to make the array
$truck = array("f50"=>"$50,000", "silverado"=>"$60,000");

echo "An Echo costs " . $car['echo'] . ".<br />";
echo "A Ferrari costs " . $car['ferrari'] . ".<br />";

// finish the display of the values for the cars and trucks.
?>
	</body>
</html>