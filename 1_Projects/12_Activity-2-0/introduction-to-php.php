<!DOCTYPE html>
   
<html lang="en">
<head>
	<title>Introduction to PHP</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	
    <!--STYLESHEET LOAD-->
	<link rel="stylesheet" type="text/css" href="styles_intro.css">
    <script src="http://use.edgefonts.net/viga:n4:all.js"></script>
    
</head>
<body>
<?
	echo "<h2>What is PHP?</h2>
	<p><b>PHP</b> (recursive acronym for <b>P</b>HP: <b>H</b>ypertext <b>P</b>reprocessor) is a widely-used open source general-purpose scripting language that is especially suited for web development and can be embedded into HTML.</p>";
?>

<h2>Simple Form Validation with PHP</h2>

<?
	/*
    the if statement below makes the code inside of it
	only show up if the button in the form named 'submitBtn' is clicked.
	You can have multiple submit buttons, but they must have different names.
    */
	if ($_POST['submitBtn1']) {
		// set the variables...
		$theName = $_POST['theName'];
		$socksColour = $_POST['socksColour'];
        $emailAdd = $_POST['email'];
		$favSoda = $_POST['favSoda'];
        $tired = $_POST['tired'];
        
		// print out the message
		echo "<p class='output'>The name that was entered into the form was: <b style='background: #f1c40f;'>" . $theName . "</b><br />
		The colour socks chosen was: <b style='background: #f1c40f;'>" . $socksColour . "<br></b>
        The email address inputted was: <b style='background: #f1c40f;'>" . $emailAdd . "</b> <br>
        Your favourite soda is: <b style='background: #f1c40f;'>" . $favSoda . "</b> <br>
        You are <b style='background: #f1c40f;'>" . $tired . "</b> right now.</p>";
	}
?>

 <h2>The Form</h2>
 <p>Complete the form below and press submit.  Notice how the values are now output (echoed) to the page based and the variable name assigned in the form.</p>
<h3>Form Attributes</h3>
 <ul>
	<li> "name" is the unique name of the form</li>
	<li> "get" method shows the variables and values in the address bar of your browser</li>
	<li> "post" method hides the type variables and values - the information is posted to the server</li>
	<li> "action" is the URL that the form will direct to once the submit button is pressed</li>
</ul>

<form name="form1" action="introduction-to-php.php" method="post">
	<b>Name:</b><br />
	<input type="text" name="theName" value="" class="fancyInput"></input><br />
	<b>Colour of Socks:</b><br />
	<select name="socksColour" class="fancyInput">
		<option value=""></option>
		<option value="blue">Blue Socks</option>
		<option value="green">Green Socks</option>
		<option value="red">Red Socks</option>
	</select><br />
    <b>Favourite type of Soda:</b><br />
	<select name="favSoda" class="fancyInput">
		<option value=""></option>
		<option value="Dr. Pepper">Dr. Pepper</option>
		<option value="Pepsi">Pepsi</option>
		<option value="Yumm Rocks">Yumm Rocks</option>
        <option value="Green Tea">Green Tea</option>
	</select><br />
    <b>Email:</b><br>
    <input type="text" name="email" value="" class="fancyInput"></input></br>
    <b>Tired?</b><br>
    <input type="radio" name="tired" value="tired" class="fancyInput" required>Yep</input><br><br>
    <input type="radio" name="tired" value="not tired" class="fancyInput" required>Nope</input><br><br>
    

    <!--SUBMIT BUTTON-->
	<input type="submit" value="SUBMIT" name="submitBtn1" class="subButton"></input>
</form>

</body>
</html>
