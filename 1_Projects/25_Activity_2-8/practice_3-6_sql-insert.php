<!DOCTYPE HTML>
<html>
<head>
	<!--STYLESHEET LOAD-->
		<link rel="stylesheet" type="text/css" href="styles_2.css">
		<script src="http://use.edgefonts.net/lekton:n7,i4,n4:all.js"></script>
</head>
<body>
<h2>Inserting Records into a MySQL Database Table</h2>

<?php
include("connectToDB.inc.php"); // connect to server 

// create form to input data into the table

//echo "<form action='" . $_SERVER['PHP_SELF'] . "' method='POST'> <--- THiS IS WEIRD CODE...

echo "<form action='' method='POST'>

	First Name: <input type='text' required name='firstNameVal' value=''></input>
	
	Last Name: <input type='text' required name='lastNameVal' value=''></input>
	
	Age: <input type='number' required min='0' name='ageVal' value=''></input>
	
	Favourite Food: <input required type='text' name='fav_foodVal' value=''></input>
	
	<input type='submit' name='submitBtn' value='Insert'>";

// process the form and insert the information into the table
if ($_POST['submitBtn']) {
	$fn = $_POST['firstNameVal'];
	$ln = $_POST['lastNameVal'];
	$a = $_POST['ageVal'];
	$favf = $_POST['fav_foodVal'];
	
	// insert information into the table
	$sql_insert = "INSERT INTO class_information (first_name, last_name, age, fav_food) VALUES ('$fn', '$ln', '$a', '$favf')"; // THE MAGIC LINE
	$result_insert = mysql_query($sql_insert, $db);
}

// Access the table from the MySQL database
// syntax SELECT column_name(s) FROM table_name
$sql = "SELECT * FROM class_information";
$result = mysql_query($sql, $db);

// basic output of the data from the table
echo "<hr size='1'>";
while ($myrow = mysql_fetch_array($result))
{
	// data from the table is stored in an associative array
	echo $myrow['student_id'] . " | " . $myrow['first_name'] ." | " . $myrow['last_name'] . " | " . $myrow['age']. " | " . $myrow['fav_food'] . "<br />";
}
?>
</body>