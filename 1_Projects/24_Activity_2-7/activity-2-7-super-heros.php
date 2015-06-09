<!DOCTYPE HTML>
<html>
	<head>
		<title>Activity 2.7 "Super Hero"</title>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />

		<!--STYLESHEET LOAD-->
		<link rel="stylesheet" type="text/css" href="styles-5.css">
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

// SUPER HEROS
$supers[0] = "Star Man";
$supers[1] = "Crash";
$supers[2] = "Holk";
$supers[3] = "Volt";
$supers[4] = "Zapito";
$supers[5] = "Dog Lady";
$supers[6] = "Bite";
$supers[7] = "Insect";
$supers[8] = "Cooper Man";
$supers[9] = "Bat Cat";


// SUPER PICTURES
$supersPicture[0] = "http://vector-magz.com/wp-content/uploads/2013/03/American-Captain-Hero-vector1.png";
$supersPicture[1] = "http://www.seeklogo.net/wp-content/uploads/2013/07/adobe-flash-8-eps-vector-logo.png";
$supersPicture[2] = "http://www.mobygames.com/images/i/18/09/448809.gif";
$supersPicture[3] = "http://www.seeklogo.net/wp-content/uploads/2013/01/flash-logo-superhero-logo-vector.png";
$supersPicture[4] = "https://s-media-cache-ak0.pinimg.com/736x/d5/6b/38/d56b38f2563e7df501fbc3227bb3f0f9.jpg";
$supersPicture[5] = "http://img5.visualizeus.com/thumbs/73/55/superhero,wonder_woman-7355c8529656c94023df754361c98ac0_h.jpg";
$supersPicture[6] = "http://static.c2w.com/uploads/question/image/01/38/82/00/N1388200/1280123669.gif";
$supersPicture[7] = "https://s-media-cache-ak0.pinimg.com/736x/31/be/15/31be151fae1dd592c85c61764282ac8e.jpg";
$supersPicture[8] = "http://static.comicvine.com/uploads/original/4/46646/1999092-cyborg_icon_flashpoint.jpg";
$supersPicture[9] = "http://img5.visualizeus.com/thumbs/3f/43/batman,superhero-3f4372e85f34a82025f25c7450f7d832_h.jpg";

// SUPER SKILL VALUES
$supersSkill[0] = 4;
$supersSkill[1] = 6;
$supersSkill[2] = 9;
$supersSkill[3] = 3;
$supersSkill[4] = 7;
$supersSkill[5] = 8;
$supersSkill[6] = 5;
$supersSkill[7] = 4;
$supersSkill[8] = 10;
$supersSkill[9] = 2;

//GENERATE SELECTED HEROS
$firstPick = rand(0,4);
$secondPick = rand(5,9);
//echo "firstPick: " . $firstPick;
//echo "<BR>secondPick: " . $secondPick;
// display the information in the array
echo "<table border='1'>";
echo "<tr><td>Team 1</td><td>Team 2</td></tr>";
for ($r = 0; $r < 5; $r++){
	// echo "<BR>" . $r;
//	echo "<tr><td>" . $supers[$r] . "</td><td>" .  $supers[($r + 5)]  . "</td></tr>";
	$selectedC1 = isSelect1($r, $firstPick);
	$selectedC2 = isSelect2($r, $secondPick);
//	echo "<BR>r: " . $r;
//	echo "<BR>----SC1: " . $selectedC1;
//	echo "<BR>----SC2: " . $selectedC2;
	echo "<tr><td><BR>" . $supers[$r] . "<BR><img src ='" . $supersPicture[$r] . "'><BR>" . $selectedC1 . "</td><td><BR>" . $supers[($r + 5)] . "<BR><img src ='" . $supersPicture[($r + 5)] . "'><BR>" . $selectedC2 . "</td></tr>";
}

if ($supersSkill[$firstPick] == $supersSkill[$secondPick]) {
	echo "<BR>Tie!!!<BR><BR>";
}
else if ($supersSkill[$firstPick] > $supersSkill[$secondPick]) {
	echo "Team 1 wins!<BR><BR>";
}
else {
	echo "Team 2 wins!<BR><BR>";
}

function isSelect1 ($r, $firstPick) {
		// echo "<BR>(S1)";
		// echo "<BR> -- R: " . $r;
		// echo "<BR> -- FIRST PICK: " . $firstPick;
		if ($r == $firstPick) {$selectedC1 = "selected";}
		else if ($r != $firstPick) {$selectedC1 = "";}
		// echo "<BR>TRUE: " . $selectedC1;
		return $selectedC1;
}
function isSelect2 ($r, $secondPick) {
		// echo "<BR>(S2)";
		// echo "<BR> -- (R+5): " . ($r + 5);
		// echo "<BR> -- SECOND PICK: " . $secondPick;
		if (($r + 5) == $secondPick) {$selectedC2 = "selected";}
		else if ($r != $secondPick) {$selectedC2 = "";}
		// echo "<BR>TRUE: " . $selectedC2;
		return $selectedC2;
}
?>
	</body>
</html>