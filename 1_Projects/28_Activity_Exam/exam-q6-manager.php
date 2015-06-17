<!DOCTYPE HTML>
<html>
<head>
    <title>Math Marks Management</title>
    <meta name="author" content="Cameron Burgess">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<h1>Math Marks Management</h1>
<p></p>
<table>
<tr>
    <td>Student ID</td><td>Name</td><td>Test 1</td><td>Test 2</td><td>Test 3</td><td>Test 4</td><td>Course Average</td>
</tr>
<form>
<tr>
    <td>[N/A]</td><td><input type = "text" required name = "name" value = ""></td><td><input type = "number" min = "0" step = "any" name = "test1" value = ""></td><td><input type = "number" min = "0" step = "any" name = "test2" value = ""></td><td><input type = "number" min = "0" step = "any" name = "test3" value = ""></td><td><input type = "number" min = "0" step = "any" name = "test4" value = ""></td><td>[N/A]</td>
</tr>
</form>

<?php
include("DB.php");

?>
</body>
</html>