<!DOCTYPE HTML>
<html>
<head>
	<!--STYLESHEET LOAD-->
		<link rel="stylesheet" type="text/css" href="styles.css">
		<script src="http://use.edgefonts.net/lekton:n7,i4,n4:all.js"></script>
</head>
<body>
<h2>Accessing Selected Records from a MySQL Database Table</h2>
<?php
include("connectToDB.inc.php"); // connect to server
?>
<BR>

<form action="activity_3-3_country-information.php" method="post">
		<select name='id'>
			<option value="X"> ~ Select a Country ~ </option>
			
			<?php

			$sql = "SELECT * FROM country_info";
			$result = mysql_query($sql, $db);
			// basic output of the data from the table
			while ($myrow = mysql_fetch_array($result)) {
				echo "<option value='" . $myrow['id'] . "'>" . $myrow['country'] . "</option>";
			}

			?>

		</select>			
	<input type="submit" name="submitBtn" value="Select Nation" ></input></form>

<?php
if ($_POST[submitBtn]) {
	$id = $_POST['id'];
	if ($id == "X"){
// Access the table from the MySQL database
// syntax SELECT column_name(s) FROM table_name 

$sql = "SELECT * FROM country_info"; // * == all
$result = mysql_query($sql, $db);

echo "<table>"; // start the table outside of the while loop
echo "<tr><td>Flag</td><td>Country</td><td>Population</td><td>Size (km<sup>2</sup>)</td><td>Density (people per km<sup>2</sup>)</td></tr>";
// basic output of the data from the table
	while ($myrow = mysql_fetch_array($result)) {

		// calculation of population density	
		$popDensity = round(($myrow['population'] / $myrow['size']) , 0, PHP_ROUND_HALF_UP);

		// flag image <img src='' alt=''’ title='' />
		$flag = "<img src='" . $myrow['flag'] . "' title='" . $myrow['country'] . "'/>";

		//Format population Number
		$popFormatted = number_format($myrow['population'], 0, '.', ',');

		//Format size number
		$sizeFormatted = number_format($myrow['size'], 0, '.', ',');

		// data from the table is stored in an associative array
		echo "<tr><td>" . $flag . "</td><td>" . $myrow['country'] . "</td><td>" . $popFormatted . "</td><td>" . $sizeFormatted . "</td><td>" . $popDensity . "</td></tr>";
	}
echo "</table>"; // end the table outside of the loop
}
else {
// Access the table from the MySQL database
// syntax SELECT column_name(s) FROM table_name 

$sql = "SELECT * FROM country_info WHERE id ='" . $id . "'"; // * == all
$result = mysql_query($sql, $db);

echo "<table>"; // start the table outside of the while loop
echo "<tr><td>Flag</td><td>Country</td><td>Population</td><td>Size (km<sup>2</sup>)</td><td>Density (people per km<sup>2</sup>)</td></tr>";
// basic output of the data from the table
	while ($myrow = mysql_fetch_array($result)) { 

		// calculation of population density	
		$popDensity = round(($myrow['population'] / $myrow['size']) , 0, PHP_ROUND_HALF_UP);

		// flag image <img src='' alt=''’ title='' />
		$flag = "<img src='" . $myrow['flag'] . "' title='" . $myrow['country'] . "'/>";

		//Format population Number
		$popFormatted = number_format($myrow['population'], 0, '.', ',');

		//Format size number
		$sizeFormatted = number_format($myrow['size'], 0, '.', ',');

		// data from the table is stored in an associative array
		echo "<tr><td>" . $flag . "</td><td>" . $myrow['country'] . "</td><td>" . $popFormatted . "</td><td>" . $sizeFormatted . "</td><td>" . $popDensity . "</td></tr>";

	}
echo "</table>"; // end the table outside of the loop

mysql_close($db);
}
}
?>
</body>
</html>