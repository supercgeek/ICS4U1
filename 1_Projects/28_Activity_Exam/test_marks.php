<!DOCTYPE HTML>
<html>
<head>
    <title>Math Marks</title>
    <meta name="author" content="Cameron Burgess">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<h1>Math Marks</h1>
    <p>You can see all the students here and go to add more students here... <a href="exam-q6-manager.php">LINK</a> [partially functioning]</p>
<table>
<tr>
    <td>Student ID</td><td>Name</td><td>Test 1</td><td>Test 2</td><td>Test 3</td><td>Test 4</td><td>Course Average</td>
</tr>



<?php
include("DB.php");

	$query = "SELECT * FROM test_marks";
	$result = mysql_query($query, $db);
	while ($myrow = mysql_fetch_array($result))  {
        
        $marksAdded = ($myrow['test1'] + $myrow['test2'] + $myrow['test3'] + $myrow['test4']);
        $currentAverage = ($marksAdded/4);
        echo "<tr>
    <td>" . $myrow['student_id'] . "</td><td>" . $myrow['students_name'] . "</td><td>" . $myrow['test1'] . "</td><td>" . $myrow['test2'] . "</td><td>" . $myrow['test3'] . "</td><td>" . $myrow['test4'] . "</td><td>" . $currentAverage . "% | " . letterGrade($currentAverage) . "</td>
</tr>";
$test1Array['student_id'] = $myrow['test1'];
$test2Array['student_id'] = $myrow['test2'];
$test3Array['student_id'] = $myrow['test3'];
$test4Array['student_id'] = $myrow['test4'];
}

//$query = "SELECT SUM(test1) FROM test_marks";
//$result = mysql_query($query, $db);
//while($row = mysql_fetch_array($result)){
//   $test1Avg = $row['SUM(column_name)'];
//}


//echo $test1Avg;

//echo array_sum($test1Array);
$test1Avg = (array_sum($test1Array))/(5); // (34+89+78+65+76)/5
$test2Avg = (array_sum($test2Array))/(5); // (34+89+78+65+76)/5
$test3Avg = (array_sum($test3Array))/(5); // (34+89+78+65+76)/5
$test4Avg = (array_sum($test4Array))/(5); // (34+89+78+65+76)/5

echo "<BR><BR><table><tr><td></td><td>Test 1</td><td>Test 2</td><td>Test 3</td><td>Test 4</td></tr>";
echo "<tr><td>Avgs: </td><td>" . $test1Avg . " | " . letterGrade($test1Avg) . "</td><td>" . $test2Avg . " | " . letterGrade($test2Avg) . "</td><td>" . $test3Avg . " | " . letterGrade($test3Avg) . "</td><td>" . $test4Avg . " | " . letterGrade($test4Avg) . "</td></tr>";

//for ($i=0; $i <= 3; $i++) {
//echo "<tr><td>Avgs: </td><td>" . $test1Array[$i] . "</td><td>" . $test2Array[$i] . "</td><td>" . $test3Array[$i] . "</td><td>" . $test4Array[$i] . "</td></tr>";
//}
//echo "</table>";

echo "</table>";
function letterGrade ($currentAverage) {
	if ($currentAverage < 50) {
		$letter = "F";
		return $letter;
	} else 
	if ($currentAverage >= 50 && $currentAverage < 55) {
		$letter = "D-";
		return $letter;
	} else 
	if ($currentAverage == 55) {
		$letter = "D";
		return $letter;
    }
    if ($currentAverage > 55 && $currentAverage < 60) {
		$letter = "D+";
		return $letter;
	}
    if ($currentAverage >= 60 && $currentAverage < 65) {
		$letter = "C-";
		return $letter;
	}
    if ($currentAverage == 65) {
		$letter = "C";
		return $letter;
    }
    if ($currentAverage > 65 && $currentAverage < 70) {
		$letter = "C+";
		return $letter;
	}
    if ($currentAverage >= 70 && $currentAverage < 75) {
		$letter = "B-";
		return $letter;
	}
     if ($currentAverage == 75) {
		$letter = "B";
		return $letter;
    }
    if ($currentAverage > 75 && $currentAverage < 80) {
		$letter = "B+";
		return $letter;
	}
    if ($currentAverage >= 80 && $currentAverage < 90) {
		$letter = "A-";
		return $letter;
	}
    if ($currentAverage == 90) {
		$letter = "A";
		return $letter;
    }
    if ($currentAverage > 90) {
		$letter = "A+";
		return $letter;
	}
}
?>
</body>
</html>