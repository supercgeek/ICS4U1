<!DOCTYPE HTML>
<html>
<head>
    <title>Cameron Burgess | EXAM Q1</title>
    <meta name="author" content="Cameron Burgess">
</head>
<body>
<h1>EXAM Q1</h1>
<form action = 'exam-q1.php' method = 'GET'>
<p>Guess a # between 1 and 10:</p>
<input type = "number" name = "num1" value = ""></input><BR>
<input type = 'submit' name='submitButton' value = 'Guess Now!'></input>

<?php
if ($_GET['submitButton']) {
    $num1 = $_GET['num1'];
	echo "<p>You guessed #" . $num1 . "</p>";
	if ($num1 == 7) {
		echo "<p>You guessed correctly!</p>";
    } 
    else {
		echo "<p>You did NOT guess correctly!</p>";
	}
}
?>
</body>
</html>