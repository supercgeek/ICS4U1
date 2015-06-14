<!DOCTYPE HTML>
<html>
<head>
	<!--STYLESHEET LOAD-->
		<link rel="stylesheet" type="text/css" href="styles_2.css">
		<script src="http://use.edgefonts.net/lekton:n7,i4,n4:all.js"></script>
</head>
<body>
<h2>The Class</h2>
	<?php
include("connectToDB.inc.php"); // connect to the database
?>

<h2>Select a Student to learn more about them!</h2>
<p>Use the below selection box to choose a student from the class, you'll then be provided with information on that student. Enjoy!</p>

<form action="activity_3-3_class-information.php" method="post">
		<select name='id'>
			<option value=""> - Select Student - </option>
			<?php
		
$sql = "SELECT * FROM class_information";
			$result = mysql_query($sql, $db);
			// basic output of the data from the table
			while ($myrow = mysql_fetch_array($result)) {echo "<option value='" . $myrow['student_id'] . "'>" . $myrow['first_name'] . " " . $myrow['last_name'] . "</option>";}

			?>

		</select>			
	<input type="submit" name="submitBtn" value="Select Student" ></input><br/>
</form>

<?php
if ($_POST['submitBtn']) {
	$id = $_POST['id'];
	
	if ($id != "") {
		// Access the table from the MySQL database
		// syntax SELECT column_name(s) FROM table_name 
		
		$sql = "SELECT * FROM class_information WHERE student_id='" . $id . "'"; // magic line
		$result = mysql_query($sql, $db);
		
		// basic output of the data from the table
		
		while ($myrow = mysql_fetch_array($result)) { 
			echo "<p>" . $myrow['id'] . ". " . $myrow['first_name'] . " " . $myrow['last_name'] . "";
			echo " is " . $myrow['age'] . " years old.  " . $myrow['first_name'] . "'s favourite food is " . $myrow['fav_food'] . ".";
			echo " This was last updated " . $myrow['updated'] . ".</p>";
		}	
	} else {
		// Access the table from the MySQL database
		// syntax SELECT column_name(s) FROM table_name 
		
		$sql = "SELECT * FROM class_information";
		$result = mysql_query($sql, $db);
		
		// basic output of the data from the table
		
		while ($myrow = mysql_fetch_array($result)) { 
			echo "<p>" . $myrow['student_id'] . ". " . $myrow['first_name'] . " " . $myrow['last_name'] . "";
			echo " is " . $myrow['age'] . " years old.  " . $myrow['first_name'] . "'s favourite food is " . $myrow['fav_food'] . ".";
			echo " This was last updated " . $myrow['updated'] . ".</p>";
		}
	}
} else {
	echo "Please make a selection.";
}
	
mysql_close($db);  // close the database
?>
</body>
</html>