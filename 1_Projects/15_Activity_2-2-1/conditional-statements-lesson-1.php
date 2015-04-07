<!DOCTYPE HTML>
<html>

<head>
	<title>User Input & Conditional Statements Lesson</title>
	<!--STYLESHEET LOAD-->
	<link rel="stylesheet" type="text/css" href="styles.css">
	<!--FONT LOAD-->
	<script src="//use.typekit.net/oyg0jqn.js"></script>
	<script>
		try {
			Typekit.load();
		} catch (e) {}
	</script>
</head>

<body>
	<h1>Making the Grade!</h1>
	<p>This is a mock student report generator.</p>
	<br>

	<!--FORM-->
	<div class="formArea">
		<form class="answer" name="studentInfo" action="conditional-statements-lesson-1.php" method="post">
			<!-- PROMPT -->
			<p style="width: 300px" class="question">INPUT THE STUDENT'S INFORMATION</p>
			<!--NAME-->
			<input class="question-field" type="text" name="name" value="" placeholder="FIRST NAME" required></input>
			<!--MARK-->
			<input class="question-field" type="number" name="mark" value="" placeholder="CLASS MARK" required></input>
			<!-- NOTICE -->
			<p class="notice">Note: Please input the number digits from the percentage mark in the format xx%, so 82% would be '82' or 100% would be '100'.</p>
			<!-- SUBMIT BUTTON-->
			<input type="submit" name="SUBWAY" value="SUBMIT"></input>
		</form>
	</div>
	<div class="reportArea">
<?
// using if statements to automatically set the grade and comment
if ($_POST['SUBWAY']) {
	// store the posted values from the form in variables
	$name = $_POST['name'];
	$mark = $_POST['mark'];
	/*
	This code is unneeded because I'm using built-in browser checking.
	if ($stu_name == "" OR $stu_mark == "") {
		// show error statement if fields are left empty (simple error checking)
		echo "<p class='error'>You must include a name and mark!</p>";
	*/	
	//VARIOUS MARK RANGES
		if ($mark < 0 OR $mark > 100) {
			echo "<p class='error'><i>ERROR</i></p>";
			echo "<hr>";
			echo "<p class='reportText'>The student's mark must be between 0 and 100 percent.</p>";
			echo '<style type="text/css"> .reportArea {display: inherit;} </style>';
		}
		else if ($mark >= 0 AND $mark < 50) {
			$letter = "F";
			$comment = "You have failed the course.";
			reportCall($name, $mark, $letter, $comment);
		}
		else if ($mark >= 50 AND $mark < 55) {
			$letter = "D-";
			$comment = "Not doing great.";
			reportCall($name, $mark, $letter, $comment);
		} 
		else if ($mark == 55) {
			$letter = "D";
			$comment = "Pretty awful, not gonna' lie.";
			reportCall($name, $mark, $letter, $comment);
		} 
		else if ($mark > 55 AND $mark < 60) {
			$letter = "D+";
			$comment = "Still really bad.";
			reportCall($name, $mark, $letter, $comment);
		}
		else if ($mark >= 60 AND $mark < 65) {
			$letter = "C-";
			$comment = "Getting There. Nose down.";
			reportCall($name, $mark, $letter, $comment);
		}
		else if ($mark == 65) {
			$letter = "C";
			$comment = "Keep trying. You can do better.";
			reportCall($name, $mark, $letter, $comment);
		} 
		else if ($mark > 65 AND $mark < 70) {
			$letter = "C+";
			$comment = "Not bad budd.";
			reportCall($name, $mark, $letter, $comment);
		}
		else if ($mark >= 70 AND $mark < 75) {
			$letter = "B-";
			$comment = "Keep on Climbing the latter. All the wayyyyy.";
			reportCall($name, $mark, $letter, $comment);
		}
		else if ($mark == 75) {
			$letter = "B";
			$comment = "A beautful B, just kidding. Work Harder.";
			reportCall($name, $mark, $letter, $comment);
		}
		else if ($mark > 75 AND $mark < 80) {
			$letter = "B+";
			$comment = "Fly Birdie, Fly away from the center of the normal distribtuon. YOU CAN DO IT!";
			reportCall($name, $mark, $letter, $comment);
		}
		
	
	}
	function reportCall($name, $mark, $letter, $comment) {
			//HEADER
			echo "<p class='reportHeader'><i>REPORT</i></p>";
			echo "<hr>";
			echo "<p class='reportText'>Student's Name: <b>" . $name . "</b></p>";
			echo "<p class='reportText'>Student's Mark: <b>" . $mark . "%</b></p>";
			echo "<p class='reportText'>Student's Letter Grade: <b>" . $letter . "</b></p>";
			echo "<p class='reportText'>Comment: <b>" . $comment . "</b></p>";
			if ($mark >= 95) {
				echo "<p class='superStar'><b>You're a superstar!</b></p>";
			}
			//CSS CHANGE
			echo '<style type="text/css"> .reportArea {display: inherit;} </style>';
	}
?>
<!--


		Student's Name: </b> <? echo $stu_name; ?><br />
		Student's Mark: </b> <? echo $stu_mark ?><br />
		Letter Grade: </b> <? echo $letter_grade; ?><br />
		Comment: </b> <? echo $comment; ?><br />
		Special Comment: </b> <? echo $special_comment; ?></p>

echo "<p><i>Your input has been reprinted below</i></p>";
	echo "<hr>";
	echo "<p>You're having a good day? <b>$happyness</b></p>";
	echo "<p>Your emotional state ranks <b>$feeling out of 100</b></p>"; 
	echo "<p>You ate the following meals: <b> $meal1 $meal2 $meal3</b></p>"; 
	echo "<p>You live on: <b>$where</b></p>";
	echo "<p>The worst part of your day was: <b>$badPart</b></p>";
	echo '<style type="text/css">
        .reportArea {
            display: inherit;
        }
        </style>'; 
	}
		?>
-->
</div>
</body>
</html>