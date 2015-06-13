<head>
<link rel="stylesheet" type="text/css" href="styles.css">
<script src="http://use.edgefonts.net/abel:n4:all.js"></script>
</head>

<bod>
<h2>Accessing Records from a MySQL Database Table</h2>
<?
include("connectToDB.inc.php"); // connect to server 
echo "<BR>";

// Access the table from the MySQL database
// syntax SELECT column_name(s) FROM table_name 
$sql = "SELECT * FROM country_info"; // * == all
$result = mysql_query($sql, $db);

echo "<table>"; // start the table outside of the while loop
echo "<tr><td>Country</td><td>Population</td><td>Size (km<sup>2</sup>)</td><td>Density</td><td>Flag</td></tr>";
// basic output of the data from the table
while ($myrow = mysql_fetch_array($result)) { 

	// calculation of population density	
	$popDensity = ($myrow['population'] / $myrow['size']);

	// flag image <img src='' alt=''’ title='' />
	$flag = "<img src='" . $myrow['population'] . "' title='" . $myrow['country'] . "'/>";

	// data from the table is stored in an associative array
	echo "<tr><td>" . $myrow['country'] . "</td><td>" . $myrow['population'] . "</td><td>" . $myrow['size'] . "</td><td>" . $popDensity . "</td><td>" . $flag . "</td></tr>";

}
echo "</table>"; // end the table outside of the loop

mysql_close($db);
?>
</bod>