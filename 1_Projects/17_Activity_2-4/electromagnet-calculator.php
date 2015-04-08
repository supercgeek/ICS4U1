<!DOCTYPE HTML>
<html>

<head>
	<title>User Input & Conditional Statements Lesson</title>
	<!--STYLESHEET LOAD-->
	<link rel="stylesheet" type="text/css" href="styles.css"></link>
	<script src="http://use.edgefonts.net/crete-round:n4,i4:all.js"></script>
</head>

<body>
	<div class="all">
		<h1>Electromagnet Calculator </h1>
		<p class="description">
			mu = magnetic permeability<br>
			N = number of turns/coils<br>
			I = current<br>
			L = length of coiled wired<br>
			B = magnetic field strength<br><br>
		</p>
		<div class="selected">
			<form class="answer" name="calculator" action="electromagnet-calculator.php" method="get">
				mu <input class="selecter" type="number" name="mu" value=""></input>
				N <input class="selecter" type="number" name="N" value=""></input>
				I <input class="selecter" type="number" name="I" value=""></input>
				L <input class="selecter" type="number" name="L" value=""></input>
				B <input class="selecter" type="number" name="B" value=""></input>
				<input type="submit" name="GO" value="SUBMIT"></input>
			</form>
		</div>
	</div>
<?php
//THE MAGIC
if ($_GET['GO']) {
	//Assignment
	$mu = $_GET['mu'];
	$N = $_GET['N'];
	$I = $_GET['I'];
	$L = $_GET['L'];
	$B = $_GET['B'];
	$check = "0"; /* Special Var */
	
	//Function Assertion
	function printMethod($mu, $N, $I, $L, $B) {
	echo "<p class='description'>magnetic permeability = <b><i>$mu</b></i> H/m</p>";
	echo "<p class='description'>number of turns/coils = <b><i>$N</b></i></p>";
	echo "<p class='description'>current = <b><i>$I</b></i> Amps</p>";
	echo "<p class='description'>length of coiled wired = <b><i>$L</b></i> meters</p>";
	echo "<p class='description'>magnetic field strength = <b><i>$B</b></i> Tesla</p>"; }
	
	/*
	echo "$mu<br>";
	echo "$N<br>";
	echo "$I<br>";
	echo "$L<br>";
	echo "$B<br>";
	echo "$check<br>";
	*/
	
		//Conditions 
		if ($mu == null) {$check = $check + 1;}
		if ($N == null) {$check = $check + 1;}
		if ($I == null) {$check = $check + 1;}
		if ($L == null) {$check = $check + 1;}
		if ($B == null) {$check = $check + 1;}

		if ($check > 1) {
			echo "<p class='description'>Please input 4 of the 5 variables.</p>";
			 
		} else {
		//VARIABLE COMPUTE
			if ($mu == "") {
				//Formula isolated for $mu
				$mu = (($B * $L)/($N * $P)); 
				printMethod($mu, $N, $I, $L, $B);
			}
			else if ($N == "") {
				//Formula isolated for $N
				$N = (($B * $L)/($mu * $I));
				printMethod($mu, $N, $I, $L, $B);
			}
			else if ($I == "") {
				//Formula isolated for $I
				$I = (($B * $L)/($mu * $N));
				printMethod($mu, $N, $I, $L, $B);
			}
			else if ($L == "") {
				//Formula isolated for $L
				$L = abs((($mu * $N * $I)/($B))); /* Never took Pyhsics, but obviously can't have negative length, still not sure if this is a correct procedure or okay thing to do */
				printMethod($mu, $N, $I, $L, $B);
			}
			else {
				//Formula isolated for $B
				$B = (($mu * $N * $I)/($L));
				printMethod($mu, $N, $I, $L, $B);
			} 
		}

	

}

?>
<!--eOTHER JUNK-->
<br><br><p><a href="http://en.wikipedia.org/wiki/Electromagnet">Wiki Article</a></p>
	
		<iframe width="560" height="315" src="https://www.youtube.com/embed/hajIIGHPeuU" frameborder="0" allowfullscreen></iframe>
</body>

</html>