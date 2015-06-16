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


//UPDATER BLOCK
if ($_GET['edit'] == "yes") {
	// a car has been selected
	$selected_id = $_GET['selected_id'];
	
	$query = "SELECT * FROM fastest_cars WHERE id='" . $selected_id . "'";
	$result = mysql_query($query, $db);

	// basic output of the data from the table
	while ($myrow = mysql_fetch_array($result))  { 
		echo "
		<form action='updating-records-fastest-cars.php' method='GET'>
			<input type='hidden' name='selected_id' value='" . $myrow['id'] ."'></input><BR>
			<input type='text' name='car' value='" . $myrow['car'] ."'></input><BR>
			<input type='text' name='top_speed' value='" . $myrow['top_speed'] ."'></input><BR>
			<input type='text' name='production_year' value='" . $myrow['production_year'] ."'></input><BR>
			<input type='submit' name='submitPressedForSure' value='Update Now!'></input>
		</form>
		<form action='updating-records-fastest-cars.php'><input type='submit' name='cancel' value='Cancel'></input></form>
		";
	}
}

if ($_GET['delete'] == "yes") {
	$selected_id = $_GET['selected_id'];
//	echo "ID CHECK: " .  $selected_id;
	if ($_GET['confirm'] == "yes") {
		// actually delete the information
		$queryDelete = "DELETE FROM country_info WHERE id='" . $selected_id . "'";
		$result = mysql_query($queryDelete, $db);
	} else {
		echo "Are you sure you want to delete this record? <a href='updating-records-fastest-cars.php?delete=yes&selected_id=" . $selected_id . "&confirm=yes'>YES</a> | <a href='updating-records-fastest-cars.php'>NO</a><BR>";
	}
}


//UPDAT CONFIRMATION 
if ($_GET['submitPressedForSure']) {
	$car_id = $_GET['car_id'];
	$car = $_GET['car'];
	$top_speed = $_GET['top_speed'];
	$production_year = $_GET['production_year'];
	
	$query = "UPDATE fastest_cars SET car='" . $car . "', top_speed='" . $top_speed . "', production_year='" . $production_year . "'  WHERE id='" . $car_id . "'"; 
	$result = mysql_query($query, $db);
	
	echo "<p>Thank you, the record has been updated</p>";
}




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
	<td>id</td><td>Model</td><td>Top-Speed</td><td>Year</td><td>Options</td>
</tr>";
echo "
<form action='' method='POST'><tr>
	<td>id</td><td><input type='text' placeholder='Enter Model Value' required name='modelVal' value=''></td><td><input type='text' placeholder='Enter Top-Speed Value' required name='topSpeedVal' value=''></td><td><input type='text' placeholder='Enter Year Value' required name='yearVal' value=''></td><td>[N/A]</td><input class='special' type='submit' name='submitBtn' value='Click to Insert New Country'><BR>
</tr>";
echo "<BR>";
while ($myrow = mysql_fetch_array($result))  { 
	// data from the table is stored in an associative array	
$deleter = "<a href='updating-records-fastest-cars.php?delete=yes&selected_id=" . $myrow['id'] . "'>REMOVE</a>";
$editor = "<a href='updating-records-fastest-cars.php?edit=yes&selected_id=" . $myrow['id'] . "'>EDIT</a>";
echo 
"<tr>
	<td>" . $myrow['id'] . "</td><td>" . $myrow['car'] . "</td><td>" . $myrow['top_speed'] . "</td><td>" . $myrow['production_year'] . "</td><td>" . $deleter . " | " . $editor . "</td>
</tr>";
	// echo "<p>" . $myrow['id'] . " | <b>" . $myrow['car'] . "</b> | " . $myrow['top_speed'] . " | " . $myrow['production_year'] . "</p>";
}
echo "</table>";

?>


<?php
ob_start();
// process the form and insert the information into the table
if ($_POST['submitBtn']) {
	$modelVal = $_POST['modelVal'];
	$topSpeedVal = $_POST['topSpeedVal'];
	$yearVal = $_POST['yearVal'];
	
	// insert information into the table
	$sql_insert = "INSERT INTO fastest_cars (car, top_speed, production_year) VALUES ('$modelVal', '$topSpeedVal', '$yearVal')"; // THE MAGIC LINE
	$result_insert = mysql_query($sql_insert, $db);
echo "<script type='text/javascript'>
		window.location.replace('updating-records-fastest-cars.php');
	  </script>";
}
mysql_close($db);
?>

</body>