<!DOCTYPE HTML>
<html>
<head>
<title>This is Title</title>
    
<style>
    body {
    color: blue;
    }
    p {
    font-family: sans-serif;
        color: red;

    }
    h1 {
    font-family: sans-serif;
    }  
</style>
</head>

<body>

    <h1>YO</h1>
    <p>Hello</p>
    <form name="saver" action="test_test.php" method="get">
    Name: <input type="text" name="yourName" value=""><br>
        NUmber: <input type="number" name="numb" value="">
    <input type="submit" name="now">
    </form>


</body>

<?php
$name = $_GET['yourName'];
$number = $_GET['numb'];

$number = $number * 2;

echo "<br>";
echo $name;
echo "<br>";
echo $number;
    
    
?>
</html>