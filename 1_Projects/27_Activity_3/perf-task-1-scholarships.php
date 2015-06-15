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
			<td>53 - 56</td><td>1.0</td>
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
if ($_POST['go'] == "calculate") {
	
	//LOGIC: CONVERT MARKS TO GPAs
	while ($r != 6) {
		$r++;
		$getString = "mark" . $r;
		//Create an Array of Six Marks
		$mark[$r] = $_POST[$getString];
		// echo "<BR> mark: " . $mark[$r] . "<BR>";
		
		//Create an Array of Six corresponding GPAs
		$gpa[$r] = markToGPA($mark, $r);
		// echo "<BR> GPA: " . $gpa[$r] . "<BR>";
	}
	$averagedMark = ($mark[1] + $mark[2] + $mark[3] + $mark[4] + $mark[5] + $mark[6])/6;
	$averagedGPA = ($gpa[1] + $gpa[2] + $gpa[3] + $gpa[4] + $gpa[5] + $gpa[6])/6;
	
//LOGIC: AVERAGE GPA & DETIRMINE SCHOLARSHIP
if ($averagedGPA >= 3.7) {$amountAwarded = 5000.00;}
else if ($averagedGPA < 3.7 && $averagedGPA >= 2.7) {$amountAwarded = 2000.00;}
else if ($averagedGPA < 2.7 && $averagedGPA >= 1.7) {$amountAwarded = 300.00;}
else if ($averagedGPA < 1.7 && $averagedGPA >= 0.7) {$amountAwarded = 20.00;}
else {$amountAwarded = 0.00;}
	
	//Print Machine 
	echo "<div class = 'receipt'><h3>Summary</h3><BR><BR>";
	echo "<table class = 'summ'><tr class = 'summ'><td class = 'summ'>Course</td><td class = 'summ'>Grade (%)</td><td>GPA</td></tr>";
	while ($p != 6) {
	$p++;
	echo "<tr class = 'summ'><td class = 'summ'>" . $p . "</td><td class = 'summ'>" . $mark[$p] . "</td><td class = 'summ'>". $gpa[$p]  . "</td></tr>";
	}
	echo "<tr class = 'summ'><td class = 'summ'>N/A</td><td class = 'summ'> Avg: " . round($averagedMark, 0) . "</td><td class = 'summ'> Avg: ". $averagedGPA  . "</td></tr>";
	echo "</table><BR>";
	echo "<span id = 'horray'>You will recieve: $" . $amountAwarded . " towards your university tuition.</span>";
	echo "</div>";
}
function markToGPA($mark, $r) {
	if ($mark[$r] >= 85) {
		$gpaConv = 4.0;
		return $gpaConv;
	} else 
	if ($mark[$r] >= 80 && $mark[$r] <= 84) {
		$gpaConv = 3.7;
		return $gpaConv;
	} else 
	if ($mark[$r] >= 77 && $mark[$r] <= 79) {
		$gpaConv = 3.3;
		return $gpaConv;
	} else 
	if ($mark[$r] >= 73 && $mark[$r] <= 76) {
		$gpaConv = 3.0;
		return $gpaConv;
	} else 
	if ($mark[$r] >= 70 && $mark[$r] <= 72) {
		$gpaConv = 2.7;
		return $gpaConv;
	} else 
	if ($mark[$r] >= 67 && $mark[$r] <= 69) {
		$gpaConv = 2.3;
		return $gpaConv;
	} else 
	if ($mark[$r] >= 63 && $mark[$r] <= 66) {
		$gpaConv = 2.0;
		return $gpaConv;
	} else 
	if ($mark[$r] >= 60 && $mark[$r] <= 62) {
		$gpaConv = 1.7;
		return $gpaConv;
	} else 
	if ($mark[$r] >= 57 && $mark[$r] <= 59) {
		$gpaConv = 1.3;
		return $gpaConv;
	} else 
	if ($mark[$r] >= 53 && $mark[$r] <= 56 ) {
		$gpaConv = 3.7;
		return $gpaConv;
	} else 
	if ($mark[$r] >= 50 && $mark[$r] <= 52 ) {
		echo "testell0";
		$gpaConv = 0.7;
		return $gpaConv;
	} else {
		$gpaConv = 0;
		return $gpaConv;
	}
}
?>
</body>