<!DOCTYPE html>
<head>

    <style>
    h1 {
    font-family: "comic sans ms";
    font-size: 40px;
    
    }
    p {
        font-family: "comic sans ms";
        
    }
    img {
    width: 50%;
    }
    </style>
    
</head>

<body>
    <h1>Hello</h1>
    <p>Kevin is learning right now.</p>
    
    
<form name="nice" action="test.php" method="get">
<!--INPUT BOX-->
<input type="" name="shitZone" value=""></input>
<!--BUTTON-->
<input type="submit" name="go" value="shit"></input>

</form>

<?php
if ($_GET['go']) {
$shitVar = $_GET['shitZone'];
$shitVar = strtolower($shitVar);
  
    if ($shitVar == "shit"){
    
    echo "<p>Correct, you get shit!</p>";
    echo "<img src='https://triangulations.files.wordpress.com/2012/03/pile_of_shit.jpg'>";
    } 
    else {
    echo "<p>You fail, no shit.</p>";
    }
}


?>

</body>