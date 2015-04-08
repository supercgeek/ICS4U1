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
			<p><a href="http://en.wikipedia.org/wiki/Electromagnet">Wiki Article</a></p>
	
		<iframe width="560" height="315" src="https://www.youtube.com/embed/hajIIGHPeuU" frameborder="0" allowfullscreen></iframe>
		<div class="selected">
			<form class="answer" name="calculator" action="electromagnet-calculator.php" method="POST">
				mu <input class="selecter" type="mu" value=""></input>
				N <input class="selecter" type="N" value=""></input>
				I <input class="selecter" type="I" value=""></input>
				L <input class="selecter" type="L" value=""></input>
				B <input class="selecter" type="B" value=""></input>
				<br><input type="submit" name="GO" value="SUBMIT"></input>
			</form>
		</div>
	</div>
<?php
//THE MAGIC
if ($_POST['GO']) {
	//Assignment
	$mu = $_POST['mu'];
	$N = $_POST['N'];
	$I = $_POST['I'];
	$L = $_POST['L'];
	$B = $_POST['B'];
	$check = "0"; /*Special Var*/
	//Conditions
	
		
	
		if ($mu == null){
			$check = $check + 1;
			echo "$check<br>";
		}
		if (empty($N) == TRUE){
			$check = $check + 1;
			echo "$check<br>";
		}
		if (empty($I) == TRUE){
			$check = $check + 1;
			echo "$check<br>";
		}
		if (empty($L) == TRUE){
			$check = $check + 1;
			echo "$check<br>";
		}
		if (empty($B) == TRUE){
			$check = $check + 1;
			echo $check;
		}
		
		if ($check > 1) {
			echo "<p class='description'>Please input 4 of the 5 variables.</p>";
			 
		} else {
		//VARIABLE COMPUTE
			if ($mu == "") {
				//Formula isolated for $mu
				
				printMethod($mu, $N, $I, $L, $B);
			}
			else if ($N == "") {
				//Formula isolated for $N
				
				printMethod($mu, $N, $I, $L, $B);
			}
			else if ($I == "") {
				//Formula isolated for $I
				
				printMethod($mu, $N, $I, $L, $B);
			}
			else if ($L == "") {
				//Formula isolated for $L
				
				printMethod($mu, $N, $I, $L, $B);
			}
			else {
				//Formula isolated for $B
				$B = (($mu * $N * $I)/($L));
				printMethod($mu, $N, $I, $L, $B);
			} 
		}

	function printMethod($mu, $N, $I, $L, $B) {
	echo "<p class='description'>magnetic permeability = <b><i>$mu</b></i> H/m</p>";
	echo "<p class='description'>number of turns/coils = <b><i>$N</b></i></p>";
	echo "<p class='description'>current = <b><i>$I</b></i> Amps</p>";
	echo "<p class='description'>length of coiled wired = <b><i>$L</b></i> meters</p>";
	echo "<p class='description'>magnetic field strength = <b><i>$B</b></i> Tesla</p>";
	}
}

?>
</body>

</html>