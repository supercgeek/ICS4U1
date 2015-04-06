<!doctype html>
<html>
<head>
	<title>User Input & Conditional Statements Lesson</title>
	<!--STYLESHEET LOAD-->
	<link rel="stylesheet" type="text/css" href="styles.css">
	<!--FONT LOAD-->
	<script src="//use.typekit.net/oyg0jqn.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
</head>
<body>
	<div id="reportContainer">
	
<?
// using if statements to automatically set the grade and comment
if ($_POST['subBtn']) {
	// store the posted values from the form in variables
	$stu_name = $_POST['theName'];
	$stu_mark = $_POST['theMark'];
	
	if ($stu_name == "" OR $stu_mark == "") {
		// show error statement if fields are left empty (simple error checking)
		echo "<p class='error'>You must include a name and mark!</p>";
	} else  {	
		// conditions for displaying grade and comment
		if ($stu_mark <= 100 AND $stu_mark > 90) {
			$letter_grade = "A+";
			$comment = "Great work, keep it up!";
		} else if ($stu_mark == 90) {
			$letter_grade = "A";
			$comment = "Good efforts.";
		} else {
			$letter_grade = "<p class='error'>Invalid mark entered - must be between 0 and 100.</p>";
		}
	}
}
?>
		<h1>"Making the Grade!"</h1>
		<p>This is a mock student report.<br />
		
		<!-- add user input form here-->		
		<form action="conditional-statements-lesson-1.php" method="post">
			<!-- add user input fields  YOU MUST DO THIS FOR YOURSELF -->
		</form>
		
		Student's Name: </b> <? echo $stu_name; ?><br />
		Student's Mark: </b> <? echo $stu_mark ?><br />
		Letter Grade: </b> <? echo $letter_grade; ?><br />
		Comment: </b> <? echo $comment; ?><br />
		Special Comment: </b> <? echo $special_comment; ?></p>
	
</div>

</body>
</html>