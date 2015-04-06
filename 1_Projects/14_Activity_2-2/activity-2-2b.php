<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<title>Working with Variables: Parsing URLs - CAMERON BURGESS</title>	
	
	<meta name="description" content="Parsing Variables from URLs">
	<meta name="author" content="Cameron Burgess">	
	
	<link type="text/css" rel="stylesheet" href="styles_b.css">
	
</head>
<body>
	<?php
	//Assignment
	$x = $_GET['x'];
	$y = $_GET['y'];
	$z = $_GET['z'];
	$title = $_GET['title'];
	$padding = $_GET['padding'];
	$border = $_GET['border'];
	$hexColour = $_GET['hexColour'];
	//Calculation
	$output1 = ($x) + ($y) + (-2 * $z);
	$output2 = 2 * ($x) - 4* ($y) + (3 * ($z) - 80);
	$output3 = $output1 + $output2;
	//Style Changes
	if ($hexColour !== null) {
	echo '<style type="text/css"> table, tr, th, td {background-color:' . $hexColour . ';} </style>';
	}
	if ($padding !== null) {
	echo '<style type="text/css"> table, tr, td {padding:' . $padding . 'px;} </style>';
	}
	if ($border !== null) {
	echo '<style type="text/css"> table, tr, td {border:' . $border . 'px dotted rgba(92, 92, 92, 0.71);} </style>';
	}
	?>
	<!-- main content -->
	<h1>Working with Variables: Parsing URLs</h1>
	<br>
	<?php
	// learning to parse variables from URLs
	echo "We are learning how to parse variables from URLs.  The value of x is <b>" . $_GET['x'] . "</b>, the value of y is <b>" . $_GET['y'] . "</b>, the value of z is <b>" . $_GET['z'] . "</b> and the title is <b>" . $_GET['title'] . "</b>.";
	?>
	<h2 class="customHeading"><?php echo $_GET['title'] ?></h2>
	<table>
	<tr>
		<th></th>
		<th>Operation</th>
		<th>Output</th>
	</tr>
	<tr>
		<th>#1</th>
		<td>x + y -2 * z </td>
		<td><?php echo $output1 ?></td>
	</tr>
	<tr>
		<th>#2</th>
		<td>2x - 4y + (3z - 80) </td>
		<td><?php echo $output2 ?></td>
	</tr>
	<tr>
		<th>#3</th>
		<td>OUTPUT #1 + OUTPUT #2</td>
		<td><?php echo $output3 ?></td>
	</tr>
</table>
	<br>
	<form class="tableUpdate" name="magic" action="activity-2-2b.php" method="get">
x     = ( <input class="updateForm_num" name="x" type="number" placeholder="input a value for ‘x’"></input> )<br><br>
y     = ( <input class="updateForm_num" name="y" type="number" placeholder="input a value for ‘y’"></input> )<br><br>
z     = ( <input class="updateForm_num" name="z" type="number" placeholder="input a value for ‘z’"></input> )<br><br>
title = ( <input class="updateForm_let" name="title" type="text" placeholder="input a ‘title’"></input> )<br><br>
padding = ( <input class="updateForm_pad" name="padding" type="number" placeholder="input a value for ‘table padding’"></input> )<br><br>
border = ( <input class="updateForm_bor" name="border" type="number" placeholder="input a value for ‘table border’"></input> )<br><br>
colour = ( <input class="updateForm_col" name="hexColour" type="text" placeholder="input a hex value for the table's ‘background colour’"></input> )<br>
	<br>
	<input type="submit" name="updateNow" value="UPDATE TABLE"></input>	
	</form>
</body>
</html>