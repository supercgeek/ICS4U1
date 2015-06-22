<!DOCTYPE HTML>
<html>
	<head>
		<title>Santa Clause</title>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<!--STYLESHEET LOAD-->
		<link rel="stylesheet" type="text/css" href="styles_8.css">
	</head>
<body>
<h1>Scrooge ZONE</h1><h3>RAWR ARARWWARAR!@!!!</h3><BR><BR>

<!--PRINT OTHER OPTIONS TILE-->
<div class = 'box' id = 'order'>
<h2 class = "">(1)<a href = "santas-workshop.php"><BR>SANTA'S WORKSHOP</h2></a><BR>
<h2 class = "">(2)<a href = "playing-santa.php"><BR>PLAY SANTA</h2></a><BR>
</div>
<?php
if ($_GET['delete'] == "yes") {
	include("connectToDB.inc.php");
	echo "<div class = 'box'>";
	$selected_id = $_GET['selected_id'];
//	echo "ID CHECK: " .  $selected_id;
	if ($_GET['confirm'] == "yes") {
		// actually delete the information
		$queryDelete = "DELETE FROM sc_toys_delivered WHERE delivery_id='" . $selected_id . "'";
		$result = mysql_query($queryDelete, $db);
		echo "Gift Firebombed!";
		echo "</div>";
	} else {
		echo "Are you sure you want to remove this gift? <BR><a href='play-scrooge.php?delete=yes&selected_id=" . $selected_id . "&confirm=yes'>YES</a> | <a href='play-scrooge.php'>NO</a><BR>";
		echo "</div>";
	}
}
if ($_GET['deleteall'] == "yes") {
	include("connectToDB.inc.php");
	echo "<div class = 'box'>";
	$selected_id = $_GET['selected_id'];
//	echo "ID CHECK: " .  $selected_id;
	if ($_GET['confirm'] == "yes") {
		// actually delete the information
		$queryDelete = "DELETE FROM sc_toys_delivered WHERE kid_id='" . $selected_id . "'";
		$result = mysql_query($queryDelete, $db);
		echo "All Gifts Firebombed! Very Scrooge!!!";
		echo "</div>";
	} else {
		echo "Are you sure you want to remove all gifts from this character? <BR><a href='play-scrooge.php?deleteall=yes&selected_id=" . $selected_id . "&confirm=yes'>YES</a> | <a href='play-scrooge.php'>NO</a><BR>";
		echo "</div>";
	}
}
include("connectToDB.inc.php");

//PRINT CHARACTER TILES
$sql = "SELECT * FROM sc_kids_info";
$result = mysql_query($sql, $db);
while ($kidrow = mysql_fetch_array($result)) {
	echo "<div class = 'box'>
	<img src = '" . $kidrow['image_url'] .  "'>
	<h2>" . $kidrow['kid_name'] .  "</h2>
	<p class = 'price'><strong>" . $kidrow['delivery_address'] .  "</strong></p><BR>";
	
	$kidRef = $kidrow['kid_id'];
	// echo "kidref: " . $kidRef;
	//BESTOW GIFT DROPDOWN
	echo "<a href ='play-scrooge.php?deleteall=yes&selected_id=" . $kidRef . "'>DELETE EVERYTHING</a><BR>";
	
	//PRINT (AND MURDER) BETOWN GIFTS
	giftPrintNDelete($kidRef);
	echo "</div>";
}
	//CREATE GIFT DROPDOWN MENU
	function giftDrop($kidRef) {
	include("connectToDB.inc.php");
	echo "<form action = 'play-scrooge.php' method = 'get'>";
		echo "<select name='id'>";
		echo "<option value = ''> Pick a Toy </option>";
			
			$sql_2 = 'SELECT * FROM sc_toy_information';
			$result_2 = mysql_query($sql_2, $db);	
			while ($toyrow = mysql_fetch_array($result_2)) {
				echo "<option value='" . $toyrow['item_id'] . "for" . $kidRef  . "'>" . $toyrow['item_name'] . "</option>";
			}
		echo "</select>";
		echo "<input class = 'giveButton' type = 'submit' name = 'toy_submit' value = 'Give!' ></input><BR>";
	echo "</form>";
	}
	function giftPrintNDelete($kidRef) {
	include("connectToDB.inc.php");
		$sql_3 = "SELECT * FROM sc_toys_delivered where kid_id = '" . $kidRef . "'";
		$result_3 = mysql_query($sql_3, $db);
		$c = 0;
		while ($deliveryrow = mysql_fetch_array($result_3)) {
			$itemArray[$c] = $deliveryrow['item_id'];
			$deliveryArray[$c] = $deliveryrow['delivery_id'];
			// echo "<BR>dID: " . $deliveryArray[$c];
			$c++;
		}
		$arrayCount = count($itemArray);
		echo "<BR><h3 class = 'gifted'>Gifts Recieved: </h3>"; 
		for ($i = 0; $i <= $arrayCount; $i++) {
			$sql_4 = "SELECT * FROM sc_toy_information where item_id = '" . $itemArray[$i] . "'";
			$result_4 = mysql_query($sql_4, $db);
			while ($printrow = mysql_fetch_array($result_4)) {
				echo "<BR>";
				echo $printrow['item_name'] . " | <a href='play-scrooge.php?delete=yes&selected_id=" . $deliveryArray[$i] . "'>DELETE</a>";
			}
		}
	}
?>
<?php
ob_start();
//INSERT CAPTURED TOY INFORMATION INTO DELIVERY DATABASE 
if ($_GET['toy_submit']) {
	$ogToyString = $_GET['id'];
	$dualArray = explode('for', $ogToyString);
	$itemId = $dualArray[0];
	$kidId = $dualArray[1];
	echo "Item ID: " . $itemId;
	echo "<BR>Kid ID: " . $kidId;
	
	//INSERT QUERY 
	$sql_insert = "INSERT INTO sc_toys_delivered (item_id, kid_id) VALUES ('$itemId', '$kidId')"; // THE MAGIC LINE
	$result_insert = mysql_query($sql_insert, $db);
	echo "<script type='text/javascript'>window.location.replace('play-scrooge.php');</script>";
}
mysql_close($db);
?>
</body>