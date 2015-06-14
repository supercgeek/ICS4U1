<!DOCTYPE HTML>
<html>
<head>
	<!--STYLESHEET LOAD-->
		<link rel="stylesheet" type="text/css" href="class_styles.css">
		<script src="http://use.edgefonts.net/lekton:n7,i4,n4:all.js"></script>
</head>
<body>
<h2>The Class</h2>
<?
include("connectToDB.inc.php"); // connect to server 
//echo "<BR>";

// Access the table from the MySQL database
// syntax SELECT column_name(s) FROM table_name 
$sql = "SELECT * FROM class_information"; // * == all
$result = mysql_query($sql, $db);

echo "<table>"; // start the table outside of the while loop
echo "<tr><td>Student ID</td><td>First Name</td><td>Last Name</td><td>Age</td><td>Favourite Food</td><td>Last Updated</td></tr>";
// basic output of the data from the table
while ($myrow = mysql_fetch_array($result)) { 
	echo "<tr><td>" . $myrow['student_id'] . "</td><td>" . $myrow['first_name'] . "</td><td>" . $myrow['last_name'] . "</td><td>" . $myrow['age'] . "</td><td>" . $myrow['fav_food'] . "</td><td>" . $myrow['updated'] . "</td></tr>";
}
echo "</table>"; // end the table outside of the loop

mysql_close($db);
?>
</body>
</html>