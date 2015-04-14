<!DOCTYPE HTML>
<head>
	

</head>
<body>
	<p>Hello</p>
	<form name="test" method="get" action="a25f.php">
		<input name="building" type="text" value="">
		<input name="run" type="submit" value="Press This">
	</form>
	<?php 
	if ($_GET['run']) {
		echo "It works!";
	}


	 ?>

</body>


<?php

?>