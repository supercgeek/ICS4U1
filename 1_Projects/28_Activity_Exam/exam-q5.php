<!DOCTYPE HTML>
<html>
<head>
    <title>Cameron Burgess | EXAM Q5</title>
    <meta name="author" content="Cameron Burgess">
</head>
<body>
<h1>EXAM Q5</h1>
<!--<form action = "exam-q5.php" method = "GET">-->
<?php
$catZone = rand(0, 4);
echo "Cat Zone: " . $catZone;
for ($r = 0; $r <= 4; $r++)  {
    echo "<BR>r: " . $r;
    if ($catZone == $r) {
        $box = [$r = "Cat"];
    }
    else if  ($catZone != $r) {
         $box = [$r = "NoCat"];
    }
    echo "<BR>Stat: " . $box[$r];
}
?>
</body>
</html>