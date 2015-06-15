<!DOCTYPE HTML>
<html>
	<head>
		<title>Performance Task #2 "Fast Food Menu"</title>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />

		<!--STYLESHEET LOAD-->
		<link rel="stylesheet" type="text/css" href="styles_2.css">
		<script src="http://use.edgefonts.net/lekton:n7,i4,n4:all.js"></script>
	</head>
<body>
<h1>Fast Food Yums!</h1><h3>Online Order Form</h3><BR><BR>

<!--
<div class = "box">
<img src="http://pixel.brit.co/wp-content/uploads/2013/05/8-BlackBurger.jpg">
<h2>Cheese Burger</h2>
<p class = "price"><strong>$8.99</strong></p>
ORDER: <input type = "number" min = "0" name = "orderVal1" value = "" ></input>
</div>
-->

<?php
include("DBC.php");

$sql = "SELECT * FROM restaurant_menu_items";
$result = mysql_query($sql, $db);
echo "<form action = 'perf-task-2-fastfood.php' method = 'get'>";
while ($row = mysql_fetch_array($result)) {
	echo "<div class = 'box'>
	<img src = '" . $row['img'] .  "'>
	<h2>" . $row['item'] .  "</h2>
	<p class = 'price'><strong>$" . $row['cost'] .  "</strong></p>
	ORDER: <input type = 'number' min = '0' name = '" . $row['item'] .  "Order_" . $row['item_id'] .  "' value = '' ></input>
	</div>";
	
}
echo "</form>";

echo "";
?>
</body>