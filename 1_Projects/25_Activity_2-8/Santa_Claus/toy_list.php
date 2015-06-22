<!DOCTYPE HTML>
<head>
		<!--STYLESHEET LOAD-->
		<link rel="stylesheet" type="text/css" href="styles_7.css">
		<script src="http://use.edgefonts.net/lekton:n7,i4,n4:all.js"></script>
</head>
<body>
<div class = "all">
<h3><a href = "playing-santa.php">Return to Playing Santa</a></h3>
<h3><a href = "santas-workshop.php">Return to Top Level Management Page</a></h3>
<?
//CONNECT
include("connectToDB.inc.php");

//UPDATER BLOCK
if ($_GET['edit_2'] == "yes") {
	// a car has been selected
	$selected_id_2 = $_GET['selected_id'];
	
	$query_1 = "SELECT * FROM sc_toy_information WHERE item_id='" . $selected_id_2 . "'";
	$result = mysql_query($query_1, $db);

	// basic output of the data from the table
	while ($row_2 = mysql_fetch_array($result))  { 
		echo "
		<form action = 'toy_list.php' method = 'get'>
			<input class = 'special' name='selected_id' value='" . $row_2['item_id'] ."'></input><BR>
			<input class = 'special' type='text' name='name' value='" . $row_2['item_name'] ."'></input><BR>
			<input class = 'special' type='text' name='image' value='" . $row_2['item_description'] ."'></input><BR>
			<input class = 'special'  type='submit' name='submitPressedForSure' value='Update Now!'></input>
		</form>
		<form class = 'special' action='toy_list.php'><input type='submit' name='cancel' value='Cancel'></input></form>
		";
	}
}

//delete init
if ($_GET['delete_2'] == "yes") {
	$selected_id_2 = $_GET['selected_id'];
//	echo "ID CHECK: " .  $selected_id_2;
	if ($_GET['confirm'] == "yes") {
		// actually delete the information
		$queryDelete = "DELETE FROM sc_toy_information WHERE item_id='" . $selected_id_2 . "'";
		$result_2 = mysql_query($queryDelete, $db);
	} else {
		echo "Are you sure you want to delete this record? <a href='toy_list.php?delete_2=yes&selected_id=" . $selected_id_2 . "&confirm=yes'>YES</a> | <a href='toy_list.php'>NO</a><BR>";
	}
}

//UPDATE CONFIRMATION 
if ($_GET['submitPressedForSure']) {
	$item_id = $_GET['selected_id'];
	// echo $selected_id_2;
	$name = $_GET['name'];
	// echo $name;
	$description = $_GET['description'];
	
	$query_2 = "UPDATE sc_toy_information SET item_name='" . $name . "', item_description='" . $desription . "' WHERE item_id='" . $item_id . "'"; 
	$result_3 = mysql_query($query_2, $db);
	
	echo "<p>Thank you, the record has been updated</p>";
	// echo "<script type='text/javascript'>
	// window.location.replace('toy_list.php');
	// </script>";
}

//TABLE PRINTING
echo "
<h1>The Toys in Santa's Shop!</h1>
<p>Below is a list of toys availble from Santa's Shop this year.</p>";

$sql = "SELECT * FROM sc_toy_information";
$result = mysql_query($sql, $db);

// basic output of the data from the table
echo "<table>
<tr>
	<td>id</td><td>Name</td><td>Description</td><td>Options</td>
</tr>";
echo "
<form action='toy_list.php' method='get'><tr>
	<td>[N/A]</td><td><input type='text' placeholder='Enter Name' required name='name' value=''></td><td><input type='text' required placeholder='{optional}' name='description' value=''></td>
	<td>[N/A]</td><input class='special' type='submit' name='submitBtn' value='Click to Insert New Record'><BR>
</tr>";
echo "<BR>";
while ($row_2 = mysql_fetch_array($result))  { 
	// data from the table is stored in an associative array	
$deleter = "<a href='toy_list.php?delete_2=yes&selected_id=" . $row_2['item_id'] . "'>REMOVE</a>";
$editor = "<a href='toy_list.php?edit_2=yes&selected_id=" . $row_2['item_id'] . "'>EDIT</a>";
echo 
"<tr>
	<td>" . $row_2['item_id'] . "</td><td>" . $row_2['item_name'] . "</td><td>" . $row_2['item_description'] . "</td><td>" . $deleter . " | " . $editor . "</td>
</tr>";
}
echo "</table>";

ob_start();
// process the form and insert the information into the table
if ($_GET['submitBtn']) {
	$name = $_GET['name'];
	$description = $_GET['description'];
	
	// insert information into the table
	$sql_insert = "INSERT INTO sc_toy_information (item_name, item_description) VALUES ('$name', '$description')"; // THE MAGIC LINE
	$result_insert = mysql_query($sql_insert, $db);
echo "<script type='text/javascript'>window.location.replace('toy_list.php');</script>";
}
mysql_close($db);
?>
</div>
</body>