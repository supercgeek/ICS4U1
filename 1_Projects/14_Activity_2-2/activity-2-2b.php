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
	<!-- main content -->
	<h1>Working with Variables: Parsing URLs</h1>
	<br>
	<?php
	// learning to parse variables from URLs
	echo "We are learning how to parse variables from URLs.  The value of x is <b>" . $_GET['x'] . "</b>, the value of y is <b>" . $_GET['y'] . "</b>, the value of z is <b>" . $_GET['z'] . "</b> and the title is <b>" . $_GET['title'] . "</b>.";
	?>
	<h2 class="customHeading"><?php echo $_GET['title'] ?></h2>
	<?php
	$x = $_GET['x'];
	$y = $_GET['y'];
	$z = $_GET['z'];
	$title = $_GET['title'];
	?>
	<table>
		<tr>
		<th>Operation</th>
		<th>Output</th>
	</tr>
	<tr>
		<td>x + y -2 * z </td>
		<td></td>
	</tr>
	<tr>
		<td>2x - 4y + (3z - 80) </td>
		<td></td>
	</tr>
	<tr>
		<td>Row2 - Col2 + result of Row3 - Col2 </td>
		<td></td>
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
colour = ( <input class="updateForm_col" name="hexColour" type="number" placeholder="input a hex value for the table's ‘background colour’"></input> )<br>
	<br>
	<input type="submit" name="updateNow" value="UPDATE TABLE"></input>	
	</form>
<?php
	$x = $_GET['x'];
	$y = $_GET['y'];
	$z = $_GET['z'];
	$title = $_GET['title'];
	$padding = $_GET['padding'];
	$border = $_GET['border'];
	$hexColour = $_GET['hexColour'];
	?>
</body>
</html>