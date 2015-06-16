<!DOCTYPE HTML>
<head>
		<!--STYLESHEET LOAD-->
		<link rel="stylesheet" type="text/css" href="styles_4.css">
		<script src="http://use.edgefonts.net/lekton:n7,i4,n4:all.js"></script>
</head>
<body>
<?
//CONNECT
include("connectToDB.inc.php");


/// STEP 3
// $$$$$$$$$$UPDATE INITIATE BLOCK
if ($_GET['submitPressed']) {
	// a car has been selected
	$car_id = $_GET['car_id'];
	
	$query = "SELECT * FROM fastest_cars WHERE id='" . $car_id . "'";
	$result = mysql_query($query, $db);

	// basic output of the data from the table
	while ($myrow = mysql_fetch_array($result))  { 
		echo "
		<form action='updating-records-fastest-cars.php' method='get'>
			<input type='hidden' name='car_id' value='" . $myrow['id'] ."'></input><BR>
			<input type='text' name='car' value='" . $myrow['car'] ."'></input><BR>
			<input type='text' name='top_speed' value='" . $myrow['top_speed'] ."'></input><BR>
			<input type='text' name='production_year' value='" . $myrow['production_year'] ."'></input><BR>
			<input type='submit' name='submitPressedForSure' value='Update Now!'></input>
			<input type='button' name='cancel' value='Cancel'></input>
		</form>
		";
	}
}
// UPDATE INITIATE BLOCK$$$$$$$$$$$$$$$



//// STEP 4
//UPDATING FOR SURE 
if ($_POST['submitPressedForSure']) {
	$car_id = $_POST['car_id'];
	$car = $_POST['car'];
	$top_speed = $_POST['top_speed'];
	$production_year = $_POST['production_year'];
	
	$query = "UPDATE fastest_cars SET car='" . $car . "', top_speed='" . $top_speed . "', production_year='" . $production_year . "'  WHERE id='" . $car_id . "'"; 
	$result = mysql_query($query,$db);
	
	echo "<p>Thank you, the record has been updated</p>";
}
//UPDATING FOR SURE



/// STEP 1
//#######UPDATE SELECTER
echo "
<h1>Update a Record</h1>
<p>Select a car's record to update in the database.</p>
<form action = 'updating-records-fastest-cars.php' method = 'get'>
<select name = 'car_id'>
	";

$sql = "SELECT * FROM fastest_cars";
$result = mysql_query($sql, $db);

// basic output of the data from the table
while ($myrow = mysql_fetch_array($result))  {
	// data from the table is stored in an associative array	
	echo "<option value='" . $myrow['id'] . "'>" . $myrow['car'] . "</option>";
}

echo "
</select>
<input type='submit' name='submitPressed' value='Select to Update'></input>
</form>
";
//UPDATE SELECTER END#####-

/// STEP 2
//#######TABLE PRINTING
echo "
<h1>The Fastest Cars on Record!</h1>
<p>Below is a list of cars including their production year and their top speeds.</p>
";

$sql = "SELECT * FROM fastest_cars";
$result = mysql_query($sql, $db);

// basic output of the data from the table
echo "<table>
<tr>
	<td>id</td><td>Model</td><td>Top-Speed</td><td>Year</td>
</tr>";

while ($myrow = mysql_fetch_array($result))  { 
	// data from the table is stored in an associative array	
echo 
"<tr>
	<td>" . $myrow['id'] . "</td><td>" . $myrow['car'] . "</td><td>" . $myrow['top_speed'] . "</td><td>" . $myrow['production_year'] . "</td>
</tr>";
	// echo "<p>" . $myrow['id'] . " | <b>" . $myrow['car'] . "</b> | " . $myrow['top_speed'] . " | " . $myrow['production_year'] . "</p>";
}
echo "</table>";
//END OF TABLE PRINTING########

mysql_close($db); // close db connection
?>
</body>