<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<title>PHP Variables Lesson - YOUR NAME</title>	
	
	<meta name="description" content="PUT YOUR PAGE DESCRIPTION HERE">
	<meta name="author" content="PUT YOUR NAME HERE">	
	
	<link type="text/css" rel="stylesheet" href="styles_1.css">
	
</head>
<body>
	<!-- main content -->
	<h1>PHP Variables Lesson</h1>
	<p>In this lesson you will learn some basics about variables in PHP.  <b>Variables are like containers that store numbers, strings or in general, information</b>.  For more examples see: <a href="http://www.w3schools.com/php/php_variables.asp">http://www.w3schools.com/php/php_variables.asp</a></p>
	
	<!-- PHP Code Snipets goes below this -->
<?php
$var1 = "Hello World!";  // no spaces in variables and start with a $
$var2 = "...How are you?";

// append strings together using a dot (.) - see example below
echo "<p>The following statement was produced with variables:</p><p>" . $var1 . $var2 . "</p>"; 

?>
<?php
echo "<h2>Mathematical Operations</h2>";

// define the three variables
$x = -74;
$y = 99;
$z = 10;
$j = abs(-4);

// show the variables
echo "<p>The value of x is <b>" . $x . "</b>, y is <b>" . $y . "</b>, z is <b>" . $z . "</b> and j is <b>" . $j . "</b></p>";

// ADD x and y then subtract z and print it
$result1 = ($x + $y) - $z;
echo "<p>$x + $y - $z = " . $result1 . "</p>";

// MULTIPLY the three numbers together and print it
$result2 = $x * $y * $z;
echo "<p>$x *$y *$z = " . $result2 . "</p>";

// MULTIPY x and y then DIVIDE by z
$result3 = ($x * $y) / $z;
echo "<p>($x * $y) / $z = " . $result3 . "<p>";

// SQUARE of x
$result4 = $x*$x;
echo "<p>$x*$x = " . $result4 . "</p>";

// 3^5
$result5 = pow($y,5);
echo "<p>$y^5 = " . $result5 . "</p>";

// find the SQUARE ROOT of z
$result6 = sqrt($z);
echo "<p>sqrt($z) = " . $result6 . "</p>";

// Test Seven
$result7 = $j*$z;
echo "<p>j * z =" . $result7 . "</p>";

echo "<h2>Math Reference Sheet</h2><p>The following Math Reference Sheet will be very helpful: <a href='http://www.w3schools.com/php/php_ref_math.asp'>http://www.w3schools.com/php/php_ref_math.asp</a></p>";
?>
	<!-- /main content -->
	
	<!-- load jquery -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</body>