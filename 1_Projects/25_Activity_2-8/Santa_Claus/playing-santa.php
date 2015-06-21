<!DOCTYPE HTML>
<html>
	<head>
		<title>Santa Clause</title>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<!--STYLESHEET LOAD-->
		<link rel="stylesheet" type="text/css" href="styles_6.css">
	</head>
<body>
<h1>Santa Clause's</h1><h3>Gift Giving Machine</h3><BR><BR>
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
include("/Users/supercgeek/GitHub/ICS4U1/1_Projects/25_Activity_2-8/connectToDB.inc.php");

//PRINT KID TILE
$sql = "SELECT * FROM sc_kids_info";
$result = mysql_query($sql, $db);
while ($kidrow = mysql_fetch_array($result)) {
	echo "<div class = 'box'>
	<img src = '" . $kidrow['image_url'] .  "'>
	<h2>" . $kidrow['kid_name'] .  "</h2>
	<p class = 'price'><strong>" . $kidrow['delivery_address'] .  "</strong></p><BR>";
	
	$kidRef = $kidrow['kid_id'];
	//BESTOW GIFT DROPDOWN
	giftDrop($kidRef);
	
	
	//PRINT BETOWN GIFTS [UNFINISHED]
	// while ($deliveryrow = mysql_fetch_array($result)) {
	// } 
}

	
	function giftDrop($kidRef) {
	echo "<form action = 'activity_3-3_class-information.php' method = 'post'>
		<select name='id'>
		<option value = ''> Pick a Toy </option>";
		
		$sql = 'SELECT * FROM sc_toy_information';
		$result = mysql_query($sql, $db);	
		while ($toyrow = mysql_fetch_array($result)) {
			echo "<option value='" . $toyrow['item_id'] . "FOR" . $kidrow['kid_id']  . "'>" . $toyrow['item_name'] . "</option>";
		}
	echo "</select>			
	<input type = 'submit' name = 'toy_submit' value = 'Give It!' ></input><BR>
	</form>";
	}
echo "</div>";
?>


<!--OTHER OPTIONS-->
<div class = 'box' id = 'order'>
<h2>1) MANAGMENT PAGE</h2><BR>
<h2>2) SCROOG ZONE</h2><BR>
<!--<input type = "submit" class = "button" name = "tally" value = "CLICK!"></div>-->
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
