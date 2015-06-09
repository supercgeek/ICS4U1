<!DOCTYPE HTML>
<html>
	<head>
		<title>Activity 2.7 "Part C"</title>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />

		<!--STYLESHEET LOAD-->
		<link rel="stylesheet" type="text/css" href="styles-4.css">
		<script src="http://use.edgefonts.net/lekton:n7,i4,n4:all.js"></script>
	</head>
	<body>		
<?php
//DEPARTMENTS 
// ONE: SCIENCE
// TWO: MATH
// THREE: ENGLISH
// FOUR: DESIGN
// FIVE: LAW
// SIX: ART

//DEPARTMENT NAMES
$departmentName[0] = "Science";
$departmentName[1] = "Math";
$departmentName[2] = "English";
$departmentName[3] = "Design";
$departmentName[4] = "Law";
$departmentName[5] = "Art";

//SCIENCE DEPARTMENT
$departments['0'][0] = "Braun";
$departments['0'][1] = "LeBlanc";
$departments['0'][2] = "Warner";
$departments['0'][3] = "Anceriz";
$departments['0'][4] = "Jones";
$departments['0'][5] = "Kennedy";

//MATH DEPARTMENT
$departments['1'][0] = "Smith";
$departments['1'][1] = "Platnar";
$departments['1'][2] = "Braun";

//ENGLISH
$departments['2'][0] = "Ricardio";
$departments['2'][1] = "Sulivan";

//DESIGN
$departments['3'][0] = "Eames";
$departments['3'][1] = "Kim";
$departments['3'][2] = "Qunpineac";

//LAW
$departments['4'][0] = "Polver";
$departments['4'][1] = "Nero";
$departments['4'][2] = "Polver";
$departments['4'][3] = "Nero";

//ART
$departments['5'][0] = "Ali";
$departments['5'][1] = "Boneto";


// display the information in the array
echo "<h2>Working with Multi-dimensional Arrays</h2>";
echo "The array \"departments\" has " . count($departments) . " departments.";
echo "<br />In total there are " . count($departments, COUNT_RECURSIVE) . " teachers.";

//EXTENSIBLE MULTI-DIMENSIONAL ARRAY PRINTING
for ($e = 0; $e < (count($departments)); $e++) {
	echo "<p>The " . $departmentName[$e] . " deparment consists of the following teachers:</p>";
	echo "<ol>";
		for ($c = 0; $c < (count($departments[$e])); $c++) {
		echo "<li /> " . $departments[$e][$c];
		}
	echo "</ol>";
}		
?>
	</body>
</html>