<!DOCTYPE HTML>
<html>
<head>
	<!--STYLESHEET LOAD-->
		<link rel="stylesheet" type="text/css" href="styles_1.css">
		<script src="http://use.edgefonts.net/lekton:n7,i4,n4:all.js"></script>
</head>
<body>
<h2>Accessing Records from a MySQL Database Table (INSERT TEST)</h2>
<?php
include("connectToDB.inc.php"); // connect to server 

if ($_GET['delete'] == "yes") {
	$selected_id = $_GET['selected_id'];
//	echo "ID CHECK: " .  $selected_id;
	if ($_GET['confirm'] == "yes") {
		// actually delete the information
		$queryDelete = "DELETE FROM country_info WHERE id='" . $selected_id . "'";
		$result = mysql_query($queryDelete, $db);
	} else {
		echo "Are you sure you want to delete this record? <a href='activity_3-2_info-about-countries_insert.php?delete=yes&selected_id=" . $selected_id . "&confirm=yes'>YES</a> | <a href='activity_3-2_info-about-countries_insert.php'>NO</a><BR>";
	}
}

// Access the table from the MySQL database
// syntax SELECT column_name(s) FROM table_name 
$sql = "SELECT * FROM country_info"; // * == all
$result = mysql_query($sql, $db);

echo "<BR>";
echo "<table>"; // start the table outside of the while loop
echo "<tr><td>Flag</td><td>Country</td><td>Population</td><td>Size (km<sup>2</sup>)</td><td>Density (people per km<sup>2</sup>)</td><td>Options</td></tr>";

echo "<form action='' method='POST'><tr><td><input type='text' placeholder='Enter Image URL' required name='flagVal' value=''></td><td><input type='text' placeholder='Enter Country Name' required name='countryVal' value=''></td><td><input type='number' min='0' placeholder='Enter Population' required name='populationVal' value=''></td><td><input type='number' min='0' placeholder='Enter Size'  required name='sizeVal' value=''></td><td><input type='number' min='' disabled='true' placeholder='//TO BE COMPUTED//' name='' value=''></td></tr><input class='special' type='submit' name='submitBtn' value='Click to Insert New Country'></form><BR>";

echo "<BR>";
// basic output of the data from the table
while ($myrow = mysql_fetch_array($result)) { 

	// calculation of population density	
	$popDensity = round(($myrow['population'] / $myrow['size']) ,0 ,PHP_ROUND_HALF_UP);

	// flag image <img src='' alt=''’ title='' />
	$flag = "<img src='" . $myrow['flag'] . "' title='" . $myrow['country'] . "'/>";

	//Format population Number
	$popFormatted = number_format($myrow['population'], 0, '.', ',');
	
	//Format size number
	$sizeFormatted = number_format($myrow['size'], 0, '.', ',');
	
	//DELETE BUTTON
	$deleter = "<a href='activity_3-2_info-about-countries_insert.php?delete=yes&selected_id=" . $myrow['id'] . "'>REMOVE</a>";
	
	// data from the table is stored in an associative array
	echo "<tr><td>" . $flag . "</td><td>" . $myrow['country'] . "</td><td>" . $popFormatted . "</td><td>" . $sizeFormatted . "</td><td>" . $popDensity . "</td><td>" . $deleter . "</td></tr>";

}
echo "</table>"; // end the table outside of the loop

?>

<?php
ob_start();
// process the form and insert the information into the table
if ($_POST['submitBtn']) {
	$flagVal = $_POST['flagVal'];
	$countryVal = $_POST['countryVal'];
	$populationVal = $_POST['populationVal'];
	$sizeVal = $_POST['sizeVal'];
	
	// insert information into the table
	$sql_insert = "INSERT INTO country_info (country, population, size, flag) VALUES ('$countryVal', '$populationVal', '$sizeVal', '$flagVal')"; // THE MAGIC LINE
	$result_insert = mysql_query($sql_insert, $db);
echo "<script type='text/javascript'>
		window.location.replace('activity_3-2_info-about-countries_insert.php');
	  </script>";
}
mysql_close($db);
?>
</body>
</html>