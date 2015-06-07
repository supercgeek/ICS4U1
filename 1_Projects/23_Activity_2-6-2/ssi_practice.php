<head>
<script src="http://use.edgefonts.net/lekton:n7,i4,n4:all.js"></script>
<style>
	body {
	/*BACKGROUND SETTINGS*/
	background: black;
	background-size: cover;
	/*FONT SETTINGS*/
	font-family: lekton, sans-serif;
	color: #cccccc;
	line-height: 35px;
	font-weight: bold;
}
a {
	color: #f018e0;
	font-weight: bold;
	line-height: 0.2;
}
h2 {
	color: #cccccc;
}
</style>
</head>
<body>
<h2>Working with Server Side Includes</h2>
<?php
if ($_GET['id'] == 1){include("navigation.php"); include("include_doc_1.php");}
else if ($_GET['id'] == 2){include("navigation.php");include("include_doc_2.php");}
else if ($_GET['id'] == 3){include("navigation.php");include("include_doc_3.php"); echo "<style>body{background: #11111b;
}</style>";}
else if ($_GET['id'] == 4){include("navigation.php");include("include_doc_4.php");}
else if ($_GET['id'] == 5){include("navigation.php");include("include_doc_5.php");}
else if ($_GET['id'] == 6){include("navigation.php");include("include_doc_6.php");}
else if ($_GET['id'] == 7){include("navigation.php");include("include_doc_7.php");}
else if ($_GET['id'] == 8){include("navigation.php");include("include_doc_8.php"); echo "<style>body{background: #202020;
}</style>";}
else if ($_GET['id'] == 9){include("navigation.php");include("include_doc_9.php");}
else {include("navigation.php");}
?>
</body>