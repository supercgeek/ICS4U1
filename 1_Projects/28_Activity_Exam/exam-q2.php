<!DOCTYPE HTML>
<html>
<head>
    <title>Cameron Burgess | EXAM Q2</title>
    <meta name="author" content="Cameron Burgess">
</head>
<body>
<h1>EXAM Q2</h1>
<form action = "exam-q2.php" method = "GET">
<p>Click the below button to Flip 2 Coins:</p>
<input type = "submit" name = "submitButton" value = "Flip Em!"></input>

<?php
if ($_GET['submitButton']) {
	$firstFlip = rand(1, 2);
    $secondFlip = rand(1, 2);
    
    echo "<BR>1: " . $firstFlip;
    echo "<BR>2: " . $secondFlip;
    echo "<BR>";
    if ($firstFlip == 1) {echo "<img src = 'http://ics.actonhighschool.ca/images/quarter-tails.jpg'>";} //heads
    else {echo "<img src = 'http://ics.actonhighschool.ca/images/quarter-heads.jpg'>";} //tails
 if ($secondFlip == 1) {echo "<img src = 'http://ics.actonhighschool.ca/images/quarter-tails.jpg'>";} //heads
    else {echo "<img src = 'http://ics.actonhighschool.ca/images/quarter-heads.jpg'>";} //tails
    
}
?>
</body>
</html>