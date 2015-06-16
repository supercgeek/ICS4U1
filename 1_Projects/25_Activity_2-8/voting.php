<!DOCTYPE HTML>
<html>
	<head>
		<title>Vote!"</title>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<!--STYLESHEET LOAD-->
		<link rel="stylesheet" type="text/css" href="styles_5.css">
	</head>
<body>
<h1>Vote!</h1><BR><BR>
<form action = "voting.php" method = "get">
<?php
include("connectToDB.inc.php");

$sql = "SELECT * FROM vote_table";
$result = mysql_query($sql, $db);
// echo "";

while ($row = mysql_fetch_array($result)) {
	echo "<div class = 'box'>
	<img src = '" . $row['image_filename'] .  "'>
	<h2>" . $row['name'] .  "</h2>
	<p class = 'price'><strong>" . $row['description'] .  "</strong></p>
	<p class = 'mono'>Number of Votes:</p>
	<p class = 'votes'>" . $row['num_votes'] . "</p>
	<form>
	<input class = 'button' type = 'submit' name = 'vote_" . $row['vote_id'] . "' value = 'VOTE'></div>
	</form>
	</div>";
	$cur = $row['vote_id'];
	$newVoteNumber[$cur] = $row['num_votes'];
}

if ($_GET['vote_1']) {
	echo "<div class = 'receipt'>
	<h3><a href = 'voting.php?refresh=yes'>Click Here to Refresh.</a></h3>
	</div>";
//	echo "1: " . $count1;
//	echo "<BR>2: " . $count2;
	$uppedVoteNumber = $newVoteNumber[1] + 1;
	$query = "UPDATE vote_table SET num_votes='" . $uppedVoteNumber . "' WHERE vote_id='1'"; 
	$result = mysql_query($query, $db);
}

if ($_GET['vote_2']) {
	echo "<div class = 'receipt'>
	<strong>Thanks for Voting!</strong><BR>
	<h3><a href = 'voting.php?refresh=yes'>Click Here to Refresh.</a></h3>
	</div>";
//	echo "1: " . $count1;
//	echo "<BR>2: " . $count2;
	$uppedVoteNumber = $newVoteNumber[2] + 1;
	$query = "UPDATE vote_table SET num_votes='" . $uppedVoteNumber . "' WHERE vote_id='2'"; 
	$result = mysql_query($query, $db);
}

if ($_GET['refresh'] == "yes") {
	echo "<script type='text/javascript'>
		 window.location.replace('voting.php');
		 </script>";
}
mysql_close($db);  // close connection to the database
?>
</body>