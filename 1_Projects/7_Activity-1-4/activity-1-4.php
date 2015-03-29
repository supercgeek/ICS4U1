<!DOCTYPE html>
<html>
<html lang="en">
<meta charset="utf-8">

<title>Big Mac Attack!</title>

<meta name="description" content="Big Mac Attack! Table Formatting">
<meta name="author" content="Cameron Burgess">

<link rel="shortcut icon" href="http://bit.ly/14jpviZ" />

<!-- styles - internal (not linked) -->
<style>
	body {
		padding: 20px 20px 20px 20px;
		background: url("http://actonhighschool.ca/ics/test/images/fastfood.jpg");
		background-size: cover;
		background-attachment: fixed;
		color: #ffffff;
		/* font color */
		
		font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
	}
	
	#wrapper {
		position: relative;
		margin-left: auto;
		margin-right: auto;
		width: 700px;
		padding: 20px;
		background: rgba(0, 0, 0, 0.4);
		text-align: center
		/* options are: left, center, right, justify */
	}
	
	#blue {
		background-color: #3498db;
	}
	
	#red {
		background-color: #c0392b;
	}
	
	#yellow {
		background-color: #f1c40f;
	}
	
	#gray {
		background-color: #7f8c8d;
	}
	
	#orange {
		background-color: #f39c12;
	}
	
	#dark-blue {
		background-color: #2c3e50;
	}
</style>

</head>

<body>
	<!-- main content -->
	<div id="wrapper">
		<h1>Big Mac Attack!</h1>
		<h2>Table Formatting Activity</h2>
		<table border="1" cellspacing="0" cellpadding="0" width="600" height="500" align="center">

			<!--ROW ONE-->
			<tr>
				<td id="blue" align="left">
					<img src="http://actonhighschool.ca/ics/test/images/big-mac.png">
				</td>
				<td id="red" width="150px" align="right" valign="top">
					<img src="http://actonhighschool.ca/ics/test/images/big-mac.png">
				</td>
				<td id="yellow" valign="bottom">
					<img src="http://actonhighschool.ca/ics/test/images/big-mac.png">
				</td>
			</tr>

			<!--ROW TWO-->
			<tr>
				<td id="gray" colspan="3">
					<img src="http://actonhighschool.ca/ics/test/images/big-mac.png">
				</td>
			</tr>

			<!--ROW THREE-->
			<tr>
				<td id="orange" align="left" valign="bottom">
					<img src="http://actonhighschool.ca/ics/test/images/big-mac.png">
				</td>
				<td id="dark-blue" colspan="2" align="right" valign="top">
					<img src="http://actonhighschool.ca/ics/test/images/big-mac.png">
				</td>
			</tr>
		</table>
	</div>

	<!-- load jquery -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</body>

</html>