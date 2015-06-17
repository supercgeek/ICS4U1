<!DOCTYPE HTML>
<html>
<head>
    <title>Cameron Burgess | EXAM Q4</title>
    <meta name="author" content="Cameron Burgess">
</head>
<body>
<h1>EXAM Q4</h1>
<form action = "exam-q4.php" method = "GET">
<p>Please enter the amount of Gold and/or silver you have in ounces.</p>

<!-- speed limit -->
Gold: <input type = "number" min = "0" step = "any" name = "goldAmt" value = ""></input>

<!-- car speed -->
<BR>Silver: <input type = "number" step = "any" min = "0" name = "silverAmt" value = ""></input>
    
<BR><input type = "submit" name = "submitButton" value = "Calculate Value"></input><BR><BR>

<?php
if ($_GET['submitButton']) {
    $goldAmt = $_GET['goldAmt'] + 0;
    $silverAmt = $_GET['silverAmt'] + 0;
    
    echo "You own " . $goldAmt . " oz of gold @ $1323.00 per oz and " . $silverAmt . " oz of silver @ $20.00 per oz.";
    
    echo " That is worth a total of " . calcWorth($goldAmt, $silverAmt) . ".";



}
function calcWorth ($goldAmt, $silverAmt) {
    $totalMoney = ($goldAmt * 1323.00) + ($silverAmt * 20.00);
    if (is_int($totalMoney) == true) {
        $returner = "$" . $totalMoney . ".00";
        return $returner;
    } else {
        $totalMoney = round($totalMoney, 1);
        $returner = "$" . $totalMoney . "0";
        return $returner;
    }
}
?>
</body>
</html>