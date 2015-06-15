<!DOCTYPE HTML>
<html>
	<head>
		<title>Performance Task #2 "Fast Food Menu"</title>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />

		<!--STYLESHEET LOAD-->
		<link rel="stylesheet" type="text/css" href="styles_2.css">
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
<form action = "perf-task-2-fastfood.php" method = "get">
<?php
include("DBC.php");

$sql = "SELECT * FROM restaurant_menu_items";
$result = mysql_query($sql, $db);
// echo "";
while ($row = mysql_fetch_array($result)) {
	echo "<div class = 'box'>
	<img src = '" . $row['img'] .  "'>
	<h2>" . $row['item'] .  "</h2>
	<p class = 'price'><strong>$" . $row['cost'] .  "</strong></p>
	ORDER: <input type = 'number' placeholder = '#' min = '0' name = 'OrderID-" . $row['item_id'] .  "' value = '' ></input>
	</div>";
	
	//Create Array of Names of items on Menu
	$itemNames[($row['item_id'])] = $row['item'];
	
	//Create Array of Prices of items on Menu
	$itemPrices[($row['item_id'])] = $row['cost'];
}
?>
<!--TALLY ORDER-->
<div class = 'box' id = 'order'>
<h2>TALLY ORDER</h2>
<sub>&</sub>
<h2>PRINT RECEIPT</h2><BR>
<input type = "submit" class = "button" name = "tally" value = "CLICK!"></div>
</form>
<?php
if ($_GET['tally'] == "CLICK!") {
	//Create Array of Item Quantities Ordered
	while ($r != count($itemNames, COUNT_RECURSIVE)) {
		$r++;
		$orderString = "OrderID-" . $r;
		$itemQuants[$r] = $_GET[$orderString];
	}
	// Print Recipt 
	echo "<div class = 'receipt'><h3>RECEIPT</h3><BR><BR>";
		// echo "<div class = 'nested'>";
	while ($p != count($itemNames, COUNT_RECURSIVE)) {
		$p++;
		if ($itemQuants[$p] < 1){
			
		} else {
		$currentItemTotal = ($itemQuants[$p] * $itemPrices[$p]);
		$subTotal = $subTotal + $currentItemTotal;
		echo "<strong>" . $itemNames[$p] . "</strong><BR><span class = 'mono'> X"   . $itemQuants[$p] . " @ $" . $itemPrices[$p] . " =  $" . $currentItemTotal . "</span><BR><BR>";
		}
		// echo "</div>";
	}
	// LOGIC ON COMPUTING DELIVERARY CHARGES
	$deliveryFee = delivery($subTotal);
	$taxFee = tax($subTotal);
	echo "<span class = 'mono'>Subtotal: $" . $subTotal . "</span><BR>";	
	echo "<span class = 'mono'>Delivery Charge: $" . $deliveryFee . "</span><BR>";
	echo "<span class = 'mono'>Tax @ 13%: $" . $taxFee . "</span><BR><BR>";
	echo "<span class = 'total'><strong> Total: " . total($subTotal, $deliveryFee, $taxFee) . "</strong></span";
	
	echo "</div>";
}
function delivery($subTotal) {
	if ($subTotal <= 5) {
		$deliveryCharge = 5.00;
	}
	else if ($subTotal > 5 && $subTotal <= 15) {
		$deliveryCharge = 3.00;
	}
	else {
		$deliveryCharge = 0;
	}
	return $deliveryCharge;
}
function tax($subTotal){
	$tax = 0.13 * ((delivery($subTotal)) + $subTotal);
	$tax = round($tax, 2);
	return $tax;
}
function total($subTotal, $deliveryFee, $taxFee) {
	$total = $subTotal + delivery($subTotal) + tax($subTotal);
	$total = round($total, 2);
	return $total;
}
?>
</body>