<!DOCTYPE html>
   
<html lang="en">
<head>
	<title>Lesson - HTML Forms</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	
	<!--STYLESHEET LOAD-->
	<link rel="stylesheet" type="text/css" href="styles_a.css">
	
</head>
<body>
<h2>HTML Forms & Input - The Basics</h2>
<p>This simple site will show you how to create a simple form; there will be a PHP extension to this show how to work with the submitted data.</p>
	
<!-- there are two form methods: "get" and "post" ; "get" shows the values for the type variables and values, "post" hides the type variables and values //-->
<form name="form1" action="activity-1-9a.php" method="post">
	<!-- text input //-->
	First Name: <input type="text" name="fname" value="" placeholder="First"></input>
	<hr size="1" />
	
	<!-- password input //-->
	Password: <input type="password" name="pwd" value=""></input>
	<hr size="1" />
	
	<!-- radio input //-->
	<input type="radio" name="sex" value="male" checked> Male</input><br />
	<input type="radio" name="sex" value="female"> Female</input>
	<hr size="1" />
	
	<!-- checkbox input //-->
	<input type="checkbox" name="fruit1" value="Pear"> I have a pear</input><br />
	<input type="checkbox" name="fruit2" value="Apple"> I have an apple</input>
	<hr size="1" />
	
	<!-- simple drop-down list //-->
	<select name="car">
		<option value="">- Choose a Car -</option>
		<option value="Volvo">Volvo</option>
		<option value="Echo">Echo</option>
		<option value="Ferrari">Ferrari</option>
		<option value="Audi">Audi R8</option>
		<option value="Ford">Ford Truck</option>
	</select>
	<hr size="1" />
	
	<!-- textarea input //-->
	<textarea name="info" rows="5" cols="50"></textarea>
	<hr size="1" />
	
	<!-- hidden input -->
	<input type="hidden" name="hideme" value="42"></input>
	
	<!-- submit button //-->
	<input type="submit" name="subButton" value="Click Me!"></input>

<?php
// only show the information if the button named "subButton" has been pressed

if ($_POST['subButton']) {
	// set the variable with the submitted value
	$firstname = $_POST['fname'];
    $password = $_POST['pwd'];
    $car = $_POST['car'];
    $pear = $_POST['fruit1'];
    $apple = $_POST['fruit2'];
    $textBlock = $_POST['info'];
    
	// display the name to the screen
	echo "<p>Your first name is " . $firstname . ".</p>";
	echo "<p>Your last name is $password.</p>";
    echo "<p>Nice Car: $car </p>";
    echo "<p>You also have a $pear & $apple</p>";
    echo "<p>A whole bunch of text: <br>" . $textBlock . "</p>";
}
?>


</form>
</body>
</html>