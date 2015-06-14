<!DOCTYPE HTML>
<html>
<head>
	<!--STYLESHEET LOAD-->
		<link rel="stylesheet" type="text/css" href="styles_3.css">
		<script src="http://use.edgefonts.net/lekton:n7,i4,n4:all.js"></script>
</head>
<body>
<h2>NHL Sorter</h2>
<p>Use the following criteria to sort NHL players.</p>
<?php
include("connectToDB.inc.php"); // connect to server 
?>


<form action="nhl-players-and-or-activity-3-4.php" method="get"> 
	<input name="searchValue" value="">
	<input type="submit" name="search" value="SORT">
</form>

	
<BR>
	
<?php
// AGE VARS
$ageVal = $_GET['ageVal'];
$ageOperator = $_GET['ageOperator'];

// HEIGHT VARS
$heightVal = $_GET['heightVal'];
$heightOperator = $_GET['heightOperator'];

// WEIGHT VARS
$weightVal = $_GET['weightVal'];
$weightOperator = $_GET['weightOperator'];


// Access the table from the MySQL database
// syntax SELECT column_name(s) FROM table_name 

$sql = "SELECT * FROM nhl_hockey_players" . smartSorter($sortString);
function smartSorter($sortString) {
	
	//CASE 1: ZERO sort operator(s) applied:      &        & 
	if ($ageOperator == null && $heightOperator == null && $weightOperator == null) {
		echo "No Sort Operators Selected, displaying all players.";
		//"SELECT * FROM nhl_hockey_players"
		$sortString = "";
		return $sortString;
	}
	
	//CASE 2: THREE sort operator(s) applied: AGE & HEIGHT & WEIGHT
	else if ($ageOperator != null && $heightOperator != null && $weightOperator != null) {
		//"SELECT * FROM nhl_hockey_players WHERE >= 23"
		$sortString = " WHERE " . $heightOperator . " "  . $heightVal . "";
		return $sortString;
	}
	
	//CASE 3: TWO   sort operator(s) applied: AGE & HEIGHT & 
	else if ($ageOperator != null && $heightOperator != null) {
		return $sortString;
	}
	
	//CASE 4: TWO   sort operator(s) applied:     & HEIGHT & WEIGHT
	else if ($heightOperator != null && $weightOperator != null) {
		return $sortString;
	}
	
	//CASE 5: TWO   sort operator(s) applied: AGE &        & WEIGHT
	else if ($ageOperator != null && $weightOperator != null) {
		return $sortString;
	}	
	
	//CASE 6: ONE   sort operator(s) applied: AGE &        & 
	else if ($ageOperator != null) {
		return $sortString;
	}	
	
	//CASE 7: ONE   sort operator(s) applied:     & HEIGHT & 
	else if ($heightOperator != null) {
		return $sortString;
	}	
	
	//CASE 8: ONE   sort operator(s) applied:     &        & WEIGHT
	else if ($weightOperator != null) {
		return $sortString;
	}	
	
}
$result = mysql_query($sql, $db);

echo "<table>"; // start the table outside of the while loop
echo "<tr><td>Player ID</td><td>Name</td><td>Height (meters)</td><td>Weight (KGs)</td><td>Age</td><td>updated</td></tr>";
// basic output of the data from the table
while ($myrow = mysql_fetch_array($result)) { 
	echo "<tr><td>" . $myrow['player_id'] . "</td><td>" . $myrow['player_name'] . "</td><td>" . $myrow['height'] . "</td><td>" . $myrow['weight'] . "</td><td>" . $myrow['age'] . "</td><td>" . $myrow['updated'] . "</td></tr>";

	// data from the table is stored in an associative array
//	echo "<tr><td>" . $flag . "</td><td>" . $myrow['country'] . "</td><td>" . $popFormatted . "</td><td>" . $sizeFormatted . "</td><td>" . $popDensity . "</td></tr>";

}
echo "</table>"; // end the table outside of the loop

mysql_close($db);
?>
</body>
</html>