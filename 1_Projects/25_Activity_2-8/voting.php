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
	if ($row['vote_id'] = 1) {
		$count1 = $row['num_votes'];
		// echo $count1;
	} else {
		$count2 = $row['num_votes'];
		// echo $count2;
	}
}
echo "1: " . $count1;

echo "<BR>2: " . $count2;

if ($_GET['vote_1']) {
	echo "<div class = 'receipt'>
	<strong>Thanks for Voting!</strong><BR>
	<h3>The results have been refreshed!</h3>
	</div>";
	echo "1: " . $count1;
	echo "<BR>2: " . $count2;
	$query = "UPDATE vote_table SET num_votes='" . (77) . "' WHERE vote_id='1'"; 
	$result = mysql_query($query, $db);
}


mysql_close($db);  // close connection to the database
?>
</body>