<!DOCTYPE HTML>
<html>

<head>
	<title>User Input & Conditional Statements Lesson</title>
	<!--STYLESHEET LOAD-->
	<link rel="stylesheet" type="text/css" href="styles_a.css"></link>
	<script src="http://use.edgefonts.net/bigshot-one:n4:all.js"></script>
	<script src="http://use.edgefonts.net/bigshot-one:n4:all;vt323:n4:all.js"></script>
</head>

<body>
	<div class="all">
		<h1>What Day Anyway?</h1>
		<br>
		<div class="selected">
			<form class="answer" name="yourDay" action="activity-2-3a.php" method="post">

				<select class="selecter" name="location">
					<option value="">Pick Any Day</option>
					<option value="MONDAY">Monday</option>
					<option value="TUESDAY">Tuesday</option>
					<option value="WEDNESDAY">Wednesday</option>
					<option value="THURSDAY">Thursday</option>
					<option value="FRIDAY">Friday</option>
					<option value="SATURDAY">Saturday</option>
					<option value="SUNDAY">Sunday</option>
				</select>
				<br></br>
				<input type="submit" name="goButton" value="SUBMIT"></input>
			</form>
		</div>
	</div>
</body>

</html>