<!DOCTYPE HTML>
<html>
	<head>
		<title>Performance Task #1 "Scholarship Calculator"</title>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />

		<!--STYLESHEET LOAD-->
		<link rel="stylesheet" type="text/css" href="styles_1.css">
		<script src="http://use.edgefonts.net/cantata-one:n4:all.js"></script>
	</head>
<body>
<h1>Scholarship Calculator</h1><BR><BR>
<div class = "hello">
<p>
	This page will calculate the entrance scholarship you will recieve based upon your top six marks.<BR><BR> After the marks are recieved, they will be converted to a 4.0 GPA scale based upon on the below table (fig. 1). Following that, they will be averaged into one GPA and your schaolarship will be calculated based on the below (fig. 2).
</p>
</div>
<!--MARK INPUT-->
	<form action = "perf-task-1-scholarships.php" method = "POST">
	
	<!--MARK 1-->
	<div class = "box">
		<h2>Couse 1</h2><p class = "mono">
		MARK: <input type = "number" step = "1" placeholder = "##%" min = "0" max = "100" name = "mark1" value = "" ></input></strong></p>
	</div>
	
	<!--MARK 2-->
	<div class = "box">
		<h2>Couse 2</h2><p class = "mono">
		MARK: <input type = "number" step = "1" placeholder = "##%" min = "0" max = "100" name = "mark2" value = "" ></input></strong></p>
	</div>
	
	<!--MARK 3-->
	<div class = "box">
		<h2>Couse 3</h2><p class = "mono">
		MARK: <input type = "number" step = "1" placeholder = "##%" min = "0" max = "100" name = "mark3" value = "" ></input></strong></p>
	</div>
	
	<!--MARK 4-->
	<div class = "box">
		<h2>Couse 4</h2><p class = "mono">
		MARK: <input type = "number" step = "1" placeholder = "##%" min = "0" max = "100" name = "mark4" value = "" ></input></strong></p>
	</div>
	
	<!--MARK 5-->
	<div class = "box">
		<h2>Couse 5</h2><p class = "mono">
		MARK: <input type = "number" step = "1" placeholder = "##%" min = "0" max = "100" name = "mark5" value = "" ></input></strong></p>
	</div>
	
	<!--MARK 6-->
	<div class = "box">
		<h2>Couse 6</h2><p class = "mono">
		MARK: <input type = "number" step = "1" placeholder = "##%" min = "0" max = "100" name = "mark6" value = "" ></input></strong></p>
	</div>

<!--CALC SCHOLARSHIP GO BUTTON-->
<div class = "box" id = "calc">
<h2>Find A Scholarship For You</h2>
<input type = "submit" class = "button" name = "go" value = "calculate"></div>
</form>

<?php
if ($_GET['go'] == "calculate") {
	
	//Create Array of Six Marks
	while ($r != 6) {
		$r++;
		$getString = "mark" . $r;
		$mark[$r] = $_GET[$getString];
	}
	// Print Recipt 
	echo "<div class = 'receipt'><h3>Marks</h3><BR><BR>";
	while ($p != count($itemNames, COUNT_RECURSIVE)) {
		$p++;
		if ($itemQuants[$p] < 1){
			
		} else {
		$currentItemTotal = ($itemQuants[$p] * $itemPrices[$p]);
		$subTotal = $subTotal + $currentItemTotal;
		echo "<strong>" . $itemNames[$p] . "</strong><BR><span class = 'mono'> X"   . $itemQuants[$p] . " @ $" . $itemPrices[$p] . " =  $" . $currentItemTotal . "</span><BR><BR>";
		}
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