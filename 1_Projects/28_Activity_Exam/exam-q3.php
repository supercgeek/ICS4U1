<!DOCTYPE HTML>
<html>
<head>
    <title>Cameron Burgess | EXAM Q3</title>
    <meta name="author" content="Cameron Burgess">
</head>
<body>
<h1>EXAM Q3</h1>
<form action = "exam-q3.php" method = "GET">
<p>Please enter the current speed limit and the car's driving speed.</p>

<!-- speed limit -->
Speed Limit: <input type = "number" min = "0" required name = "speedLim" value = ""></input>

<!-- car speed -->
<BR>Car Speed: <input type = "number" min = "0" required name = "carSpeed" value = ""></input>
    
<BR><input type = "submit" name = "submitButton" value = "Compute"></input><BR><BR>

<?php
if ($_GET['submitButton']) {
    $speedLim = $_GET['speedLim'];
    $carSpeed = $_GET['carSpeed'];
    $differential = $speedLim - $carSpeed;
    
    if ($differential < 0) {
        $ticketCost = 20 + ((abs($differential)) * 5);
        echo "The car was speeding " . (abs($differential)) . "km/h over the speed limit of " . $speedLim . "km/h.";
        echo "<BR>In addition to a base fine of $20, drivers are charged $5 per every kilometer over the speed limit.<BR> You have been cahrged $" . $ticketCost . ".";
    } else {
        echo "Car was not speeding, no ticket issued.";
    }
}
?>
</body>
</html>