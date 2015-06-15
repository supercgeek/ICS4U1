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
	This page will calculate the entrance scholarship you will recieve based upon your top six marks.
	<BR><BR>
	After the marks are recieved, they will be converted to a 4.0 GPA scale using <em>fig. 1</em>.
	
	<table>
		<tr>
			<td colspan = "2">fig. 1</td>
		</tr>
		<tr>
			<td>Grade Range</td><td>Grade Point Value</td>
		</tr>
		<tr>
			<td>85 - 100</td><td>4.0</td>
		</tr>
		<tr>
			<td>80 - 84</td><td>3.7</td>
		</tr>
		<tr>
			<td>77 - 79</td><td>3.3</td>
		</tr>
		<tr>
			<td>73 - 76</td><td>3.0</td>
		</tr>
		<tr>
			<td>70 - 72</td><td>2.7</td>
		</tr>
		<tr>
			<td>67 - 69</td><td>2.3</td>
		</tr>
		<tr>
			<td>63 - 66</td><td>2.0</td>
		</tr>
		<tr>
			<td>60 - 62</td><td>1.7</td>
		</tr>
		<tr>
			<td>57 - 59</td><td>1.3</td>
		</tr>
		<tr>
			<td>53 - 57</td><td>1.0</td>
		</tr>
		<tr>
			<td>50 - 52</td><td>0.7</td>
		</tr>
		<tr>
			<td>0 - 49</td><td>0.0</td> <!--&nbsp&nbsp-->
		</tr>
	</table>
	
	<BR><BR>
	Following that, they will be averaged into one GPA and your schaolarship will be calculated using <em>fig. 2</em>.
	<BR><BR>
	<table>
		<tr>
			<td colspan = "2">fig. 2</td>
		</tr>
		<tr>
			<td>Average GPA</td><td>Scholarship Amount</td>
		</tr>
		<tr>
			<td>3.7 <= GPA <= 4.0</td><td>$5000.00</td>
		</tr>
		<tr>
			<td>2.7 <= GPA < 3.7</td><td>$2000.00</td>
		</tr>
		<tr>
			<td>1.7 <= GPA < 2.7</td><td>$300.00</td>
		</tr>
		<tr>
			<td>0.7 <= GPA < 1.7</td><td>$20.00</td>
		</tr>
		<tr>
			<td>0.0 <= GPA < 0.7</td><td>$0.00</td>
		</tr>
	</table>
</p>
</div>
<!--MARK INPUT-->
	<form action = "perf-task-1-scholarships.php" method = "POST">
	
	<!--MARK 1-->
	<div class = "box">
		<h2>Couse 1</h2><p class = "mono">
		MARK: <input type = "number" step = "1" placeholder = "##%" required min = "0" max = "100" name = "mark1" value = "" ></input></strong></p>
	</div>
	
	<!--MARK 2-->
	<div class = "box">
		<h2>Couse 2</h2><p class = "mono">
		MARK: <input type = "number" step = "1" placeholder = "##%" required min = "0" max = "100" name = "mark2" value = "" ></input></strong></p>
	</div>
	
	<!--MARK 3-->
	<div class = "box">
		<h2>Couse 3</h2><p class = "mono">
		MARK: <input type = "number" step = "1" placeholder = "##%" required min = "0" max = "100" name = "mark3" value = "" ></input></strong></p>
	</div>
	
	<!--MARK 4-->
	<div class = "box">
		<h2>Couse 4</h2><p class = "mono">
		MARK: <input type = "number" step = "1" placeholder = "##%" required min = "0" max = "100" name = "mark4" value = "" ></input></strong></p>
	</div>
	
	<!--MARK 5-->
	<div class = "box">
		<h2>Couse 5</h2><p class = "mono">
		MARK: <input type = "number" step = "1" placeholder = "##%" required min = "0" max = "100" name = "mark5" value = "" ></input></strong></p>
	</div>
	
	<!--MARK 6-->
	<div class = "box">
		<h2>Couse 6</h2><p class = "mono">
		MARK: <input type = "number" step = "1" placeholder = "##%" required min = "0" max = "100" name = "mark6" value = "" ></input></strong></p>
	</div>

<!--CALC SCHOLARSHIP GO BUTTON-->
<div class = "box" id = "calc">
<h2>Find A Scholarship</h2>
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
	//LOGIC: CONVERT MARKS TO GPAs
	
	//LOGIC: AVERAGE GPA & DETIRMINE SCHOLARSHIP
	
	
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
?>
</body>