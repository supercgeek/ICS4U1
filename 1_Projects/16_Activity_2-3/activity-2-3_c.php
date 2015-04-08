<!DOCTYPE HTML>
<html>

<head>
	<title>CYOA Text-based Game: Simple</title>
	<!--STYLESHEET LOAD-->
	<link rel="stylesheet" type="text/css" href="styles_c.css"></link>
	<script src="http://use.edgefonts.net/bigshot-one:n4:all.js"></script>
	<script src="http://use.edgefonts.net/bigshot-one:n4:all;vt323:n4:all.js"></script>
</head>

<body>
	<div class="all">
		<h1>APIXELOCALYPSE</h1>
		<p class="description">THE GAME</p>
		<br>
	</div>
<?
	$option = $_GET['option'];
	
	if ($option == "") {
		echo "<p class='status'>You are standing at the end of the world. You see someone to your left and a small object on the floor. What will you investigate first?
		<br>
		<a href='/1_Projects/16_Activity_2-3/activity-2-3_c.php?option=1'>PERSON TO LEFT</a> | <a href='/1_Projects/16_Activity_2-3/activity-2-3_c.php?option=2'>SMALL OBJECT</a></p>";
	}
	//PERSON TO THE LEFT
	else if ($option == "1") {
		//PERSON TO THE LEFT — 1
		echo "<p class='status'>You see a weird figure in the distance. Dash toward him in attack or run away?<br>
		<br><img src='http://fc01.deviantart.net/fs70/f/2014/300/3/7/day4_by_valenberg-d84bw5s.gif'><br>
		<a href='/1_Projects/16_Activity_2-3/activity-2-3_c.php?option=5'>DASH TOWARDS</a> | <a href='/1_Projects/16_Activity_2-3/activity-2-3_c.php?option=5'>RUN AWAY</a></p>";
	}
	else if ($option == "5") {
		//PERSON TO THE LEFT, DASH TOWARDS & RUN AWAY [DEAD] — 6
		echo "<p class='status'>He fired a laser blaster.
		<br><br><img src='http://38.media.tumblr.com/14d495ae09fb008a6819d7f49775e45b/tumblr_nf3wl1YY9a1tvppquo1_1280.gif'><br>
		<br>You are dead!<br><br>
		<a href='/1_Projects/16_Activity_2-3/activity-2-3_c.php'>PLAY AGAIN</a></p>";
	}

	//OBJECT CHOICE
	else if ($option == "2") {
		//OBJECT CHOICE — 2
		echo "<p class='status'>This is the object. Remove the stone covering its eyes or eat the music note above its head?
		<br><img src='http://38.media.tumblr.com/2245a2889be2075bf7f8f400b5679ab4/tumblr_nly6whLrRd1tvppquo1_500.gif'><br>
		<a href='/1_Projects/16_Activity_2-3/activity-2-3_c.php?option=3'>REMOVE STONE</a> | <a href='/1_Projects/16_Activity_2-3/activity-2-3_c.php?option=4'>EAT MUSIC NOTE</a></p>";
	}
	else if ($option == "3") {
		//OBJECT CHOICE, LASER EYES [DEATH]— 3
		echo "<p class='status'>Uncovering the stone revealed deathly laser eyes.
		<br><br><img src='http://fc06.deviantart.net/fs70/f/2014/248/d/1/fixed_by_valenberg-d7y1f51.gif'><br>
		<br>You are dead!<br><br>
		<a href='/1_Projects/16_Activity_2-3/activity-2-3_c.php'>PLAY AGAIN</a></p>";
	}
	else if ($option == "4") {
		//OBJECT CHOICE, EAT MUSIC NOTE [WIN]— 3
		echo "<p class='status'>You have been transported to a beautful alternate reality.
		<br><br><img src='http://31.media.tumblr.com/c961c072919cee2fca9811a8897dca48/tumblr_nk2fniAYLl1tvppquo1_1280.gif'><br>
		<br>You Win!<br><br>
		<a href='/1_Projects/16_Activity_2-3/activity-2-3_c.php'>PLAY AGAIN</a></p>";
	}
	else {
		echo "<p>You have made an invalid selection!</p>";                
    }
?>
</body>

</html>