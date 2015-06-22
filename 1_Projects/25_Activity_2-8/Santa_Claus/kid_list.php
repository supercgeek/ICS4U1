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
if ($_GET['edit'] == "yes") {
	// a car has been selected
	$selected_id_1 = $_GET['selected_id'];
	
	$query_1 = "SELECT * FROM sc_kids_info WHERE kid_id='" . $selected_id_1 . "'";
	$result = mysql_query($query_1, $db);

	// basic output of the data from the table
	while ($row_1 = mysql_fetch_array($result))  { 
		echo "
		<form action = 'kid_list.php' method = 'get'>
			<input class = 'special' name='selected_id' value='" . $row_1['kid_id'] ."'></input><BR>
			<input class = 'special' type='text' name='name' value='" . $row_1['kid_name'] ."'></input><BR>
			<input class = 'special' type='text' name='image' value='" . $row_1['image_url'] ."'></input><BR>
			<input class = 'special'  type='text' name='address' value='" . $row_1['delivery_address'] ."'></input><BR>
			<input class = 'special'  type='submit' name='submitPressedForSure' value='Update Now!'></input>
		</form>
		<form class = 'special' action='kid_list.php'><input type='submit' name='cancel' value='Cancel'></input></form>
		";
	}
}

//delete init
if ($_GET['delete'] == "yes") {
	$selected_id_1 = $_GET['selected_id'];
//	echo "ID CHECK: " .  $selected_id_1;
	if ($_GET['confirm'] == "yes") {
		// actually delete the information
		$queryDelete = "DELETE FROM sc_kids_info WHERE kid_id='" . $selected_id_1 . "'";
		$result_2 = mysql_query($queryDelete, $db);
	} else {
		echo "Are you sure you want to delete this record? <a href='kid_list.php?delete=yes&selected_id=" . $selected_id_1 . "&confirm=yes'>YES</a> | <a href='kid_list.php'>NO</a><BR>";
	}
}

//UPDATE CONFIRMATION 
if ($_GET['submitPressedForSure']) {
	$kid_id = $_GET['selected_id'];
	// echo $selected_id_1;
	$name = $_GET['name'];
	// echo $name;
	$image = $_GET['image'];
	// echo $image;
	$address = $_GET['address'];
	// echo $address;
	
	$query_2 = "UPDATE sc_kids_info SET kid_name='" . $name . "', image_url='" . $image . "', delivery_address='" . $address . "'  WHERE kid_id='" . $kid_id . "'"; 
	$result_3 = mysql_query($query_2, $db);
	
	echo "<p>Thank you, the record has been updated</p>";
	// echo "<script type='text/javascript'>
	// window.location.replace('kid_list.php');
	// </script>";
}

//TABLE PRINTING
echo "
<h1>The Kids on Santa's List!</h1>
<p>Below is a list of childern on Santa's List this year.</p>";

$sql = "SELECT * FROM sc_kids_info";
$result = mysql_query($sql, $db);

// basic output of the data from the table
echo "<table>
<tr>
	<td>id</td><td>Name</td><td>Picture</td><td>Address</td><td>Options</td>
</tr>";
echo "
<form action='kid_list.php' method='get'><tr>
	<td>[N/A]</td><td><input type='text' placeholder='Enter Name' required name='name' value=''></td><td><input type='text' required placeholder='Enter Picture URL' required name='image' value=''></td><td><input type='text' placeholder='Enter Address' required name='address' value=''></td><td>[N/A]</td><input class='special' type='submit' name='submitBtn' value='Click to Insert New Record'><BR>
</tr>";
echo "<BR>";
while ($row_1 = mysql_fetch_array($result))  { 
	// data from the table is stored in an associative array	
$deleter = "<a href='kid_list.php?delete=yes&selected_id=" . $row_1['kid_id'] . "'>REMOVE</a>";
$editor = "<a href='kid_list.php?edit=yes&selected_id=" . $row_1['kid_id'] . "'>EDIT</a>";
echo 
"<tr>
	<td>" . $row_1['kid_id'] . "</td><td>" . $row_1['kid_name'] . "</td><td><img src = '" . $row_1['image_url'] . "'></td><td>" . $row_1['delivery_address'] . "</td><td>" . $deleter . " | " . $editor . "</td>
</tr>";
}
echo "</table>";

ob_start();
// process the form and insert the information into the table
if ($_GET['submitBtn']) {
	// $kid_id = $_GET['kid_id'];
	$name = $_GET['name'];
	$image = $_GET['image'];
	$address = $_GET['address'];
	
	// insert information into the table
	$sql_insert = "INSERT INTO sc_kids_info (kid_name, image_url, delivery_address) VALUES ('$name', '$image', '$address')"; // THE MAGIC LINE
	$result_insert = mysql_query($sql_insert, $db);
echo "<script type='text/javascript'>window.location.replace('kid_list.php');</script>";
}
mysql_close($db);
?>
</div>
</body>