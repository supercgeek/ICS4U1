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
		<p class="description">Choose a day, what could happen, anyway?</p>

		<div class="selected">
			<form class="answer" name="yourDay" action="activity-2-3_a.php" method="get">
				<select class="selecter" name="THEDAY">
					<option value="RETRY">Pick Any Day</option>
					<option value="MONDAY">Monday</option>
					<option value="TUESDAY">Tuesday</option>
					<option value="WEDNESDAY">Wednesday</option>
					<option value="THURSDAY">Thursday</option>
					<option value="FRIDAY">Friday</option>
					<option value="SATURDAY">Saturday</option>
					<option value="SUNDAY">Sunday</option>
				</select>
				<br></br><br><br>
				<input type="submit" name="GO" value="SUBMIT"></input>
			</form>
		</div>
	</div>
<?php
//THE MAGIC
if ($_GET['GO']) {
	$day = $_GET['THEDAY'];
	
	if ($day == "RETRY"){
		echo "<br></br><p class='description'><img class='image' src='http://media.giphy.com/media/t0pbPOdu6hoCk/giphy.gif'></br>Please select a day of the week!</p>";
	}
	else if ($day == "MONDAY"){
		echo "<br></br><p class='description'><img class='image' src='http://media.giphy.com/media/10QDnTeWjie8cE/giphy.gif'></br>Nooo, Nooo! I'm not ready...</p>";
	}
	else if ($day == "TUESDAY"){
		echo "<br></br><p class='description'><img class='image' src='http://media0.giphy.com/media/VLZPJ7CzxD8mk/giphy.gif'></br>Soo, it's really starting - Darn.</p>";
	}
	else if ($day == "WEDNESDAY"){
		echo "<br></br><p class='description'><img class='image' src='http://media.giphy.com/media/4vTwUtFxuTH6o/giphy.gif'></br>I'm on my game nowww, things are starting to get goood!!</p>";
	}
	else if ($day == "THURSDAY"){
		echo "<br></br><p class='description'><img class='image' src='http://media.giphy.com/media/aqFQtm3NZ50Qw/giphy.gif'></br>Call function chillMode(), I'm now #WinningHard</p>";
	}
	else if ($day == "FRIDAY"){
		echo "<br></br><p class='description'><img class='image' src='http://media.giphy.com/media/2XsHRy5G950E47BVuww/giphy.gif'></br>We're done here..</p>";
	}
	else if ($day == "SATURDAY"){
		echo "<br></br><p class='description'><img class='image' src='http://media.giphy.com/media/awlUMtxAsQFsQ/giphy.gif'></br>Ahhhh.. Where's my lemonade at?</p>";
	}
	else {
		echo "<br></br><p class='description'><img class='image' src='http://media.giphy.com/media/mPj34NhvklZHG/giphy.gif'></br>I DIDN'T DO ANY HOMEWORK ALL WEEKEND, NOOOOOO!!!</p>";
	}
}

/*
NO DAY: http://media.giphy.com/media/t0pbPOdu6hoCk/giphy.gif
MONDAY: http://media.giphy.com/media/10QDnTeWjie8cE/giphy.gif
TUESDAY: http://media0.giphy.com/media/VLZPJ7CzxD8mk/giphy.gif
WEDNESDAY: http://media.giphy.com/media/4vTwUtFxuTH6o/giphy.gif
THURSDAY: http://media.giphy.com/media/aqFQtm3NZ50Qw/giphy.gif
FRIDAY: http://media.giphy.com/media/2XsHRy5G950E47BVuww/giphy.gif
SATURDAY: http://media.giphy.com/media/awlUMtxAsQFsQ/giphy.gif
SUNDAY: http://media.giphy.com/media/mPj34NhvklZHG/giphy.gif

*/
?>
</body>

</html>