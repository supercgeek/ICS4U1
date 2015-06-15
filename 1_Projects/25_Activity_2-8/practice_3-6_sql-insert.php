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

if ($_GET['delete'] == "yes") {
	$selected_id = $_GET['selected_id'];
//	echo "ID CHECK: " .  $selected_id;
	if ($_GET['confirm'] == "yes") {
		// actually delete the information
		$queryDelete = "DELETE FROM class_information WHERE student_id='" . $selected_id . "'";
		$result = mysql_query($queryDelete, $db);
	} else {
		echo "Are you sure you want to delete this record? <a href='practice_3-6_sql-insert.php?delete=yes&selected_id=" . $selected_id . "&confirm=yes'>YES</a> | <a href='practice_3-6_sql-insert.php'>NO</a><BR>";

	}
}
// create form to input data into the table

//echo "<form action='" . $_SERVER['PHP_SELF'] . "' method='POST'> <--- THiS IS WEIRD CODE...

echo "<BR><form action='' method='POST'>

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
	echo $myrow['student_id'] . " | " . $myrow['first_name'] ." | " . $myrow['last_name'] . " | " . $myrow['age']. " | " . $myrow['fav_food'] . " | <a href='practice_3-6_sql-insert.php?delete=yes&selected_id=" . $myrow['student_id'] . "'>DELETE</a><BR>";
}
?>
</body>