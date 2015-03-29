<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">

	<title>CSS Tips & Tricks Practice</title>

	<meta name="description" content="More about CSS">
	<meta name="author" content="Author information goes here...">

	<!-- FONT LOAD-->
	<script src="http://use.edgefonts.net/abril-fatface:n4,i4:all.js"></script>
	<script src="http://use.edgefonts.net/abril-fatface:n4,i4:all;paytone-one:n4:all.js"></script>
	<!-- styles - internal (not linked) -->
	<style>
		body {
			padding: 20px 20px 20px 20px;
			color: #333333;
			/* font color */
			
			font-family: Calibri;
			/* css backgrounds...http://lea.verou.me/css3patterns/ */
			
			background-color: gray;
			background-image: linear-gradient(90deg, transparent 50%, rgba(255, 255, 255, .5) 50%);
			background-size: 50px 50px;
		}
		
		a.teacher-button:link,
		a.teacher-button:visited,
		a.teacher-button:active {
			position: relative;
			display: inline-block;
			padding: 1%;
			margin: 2%;
			/* 2px around the outside of the link */
			
			background-image: linear-gradient(to top right, #f06d06, #ffffff);
			color: #333333;
			font-size: 2.1em;
			/* 210% of normal size */
			
			text-decoration: none;
			/* underline or none */
			
			font-family: Calibri;
			border-radius: 0 0.2em 0 0.2em;
			/*Top/Right/Botton/Left */
			
			-moz-border-radius: 0.3em 0.3em 0.3em 0.3em;
			-webkit-border-radius: 0.3em 0.3em 0.3em 0.3em;
		}
		
		a.teacher-button:hover {
			background: #ffffff;
			color: #f06d06;
			box-shadow: 5px 5px 5px #222222;
			-webkit-box-shadow: 5px 5px 5px #222222;
			-moz-box-shadow: 5px 5px 5px #222222;
		}
		/* style the paragraph */
		
		p.norm {
			position: relative;
			display: inline-block;
			padding: 5px;
			background: rgba(0, 0, 0, 0.7);
			color: #ffffff;
		}
		/* your button styles */
		/* FIRST LINK */
		
		.link-1 {
			width: 75%;
			background-color: white;
			padding: 50px;
			margin: 25px;
		}
		
		a.my-button1:link,
		a.my-button1:visited,
		a.my-button1:active {
			display: inline-block;
			position: relative;
			padding: 2%;
			margin: 4px;
			background-image: repeating-linear-gradient(90deg, rgb(26, 40, 204) 10%, rgb(26, 198, 204) 20%, rgb(100, 100, 100) 30%);
			color: white;
			font-size: 3em;
			font-family: abril-fatface, sans-serif;
			text-decoration: underline;
			-moz-border-radius: 0.1em 0.1em 0.1em 0.1em;
			-webkit-border-radius: 0.1em 0.1em 0.1em 0.1em;
		}
		
		a.my-button1:hover {
			background-image: repeating-linear-gradient(90deg, rgb(26, 40, 204) 5%, rgb(26, 198, 204) 10%, rgb(100, 100, 100) 15%);
			box-shadow: 2px 4px 3px 2px #222222;
			text-shadow: 10px 10px 10px 10px #222222;
			text-decoration: line-through;
			text-transform: uppercase;
		}
		/* SECOND LINK */
		
		.link-2 {
			width: 40%;
			height: 400px;
			background-image: url(http://36.media.tumblr.com/2d2aab861a24d742bb1611c4cbdf8377/tumblr_nhhses1xD81qlq9poo1_500.jpg);
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;
			padding: 50px;
			margin: 25px;
			text-align: center;
			vertical-align: middle;
		}
		
		a.my-button2:link,
		a.my-button2:visited,
		a.my-button2:active {
			font-family: paytone-one, sans-serif;
			color: rgba(255, 255, 255, 0.89);
			font-size: 5em;
			text-decoration: none;
			text-shadow: 0px 5px 0px #e8df00, 5px 10px 0px #002de8, 10px 15px 0px #e800aa, 15px 20px 0px #e8bb00;
		}
		
		a.my-button2:hover {
			text-decoration: line-through;
			text-decoration: overline;
			text-decoration: underline;
		}
		/* THIRD LINK */
		
		.link-3 {
			width: 550px;
			height: 550px;
			background-image: radial-gradient(farthest-corner at 0px 25px, #c7b8b8 0%, #7c8153 100%);
			padding: 35px;
			margin: 15px;
			text-align: center;
			vertical-align: middle;
		}
		
		a.my-button3:link,
		a.my-button3:visited,
		a.my-button3:active {
			font-weight: 1000;
			font-size: 10em;
			/* SPECIAL TEXT SETTINGS */
			-webkit-background-clip: text;
			-webkit-text-fill-color: rgba(208, 208, 208, 0.2);
			background-size: cover;
			background-position: center;
			background-image: url(http://33.media.tumblr.com/019825b65c44298aa5eadaec29b5dc98/tumblr_nljsadpNWI1rdravzo1_540.gif);
		}
		
		a.my-button3:hover {
			-webkit-text-fill-color: rgba(240, 109, 6, 0.46);

		}
	</style>

</head>

<body>
	<!-- main content -->
	<!-- Intro Content -->
	<h1>Styling Links &amp; Other Cool Stuff</h1>

	<p class="norm">In this activity you will create at least one other link style with a defined class. From this point forward all of your links on your activities must be styled. You may want to research other css properties to further understand the cool styles you can add.
	</p>

	<h2>Teacher's Link</h2>
	<a href="#" class="teacher-button">TEACHER'S LINK</a>
	<br />
	<h2>My Links</h2>

	<!--MY STYLED LINKS-->
	<div class="link-1">
		<a href="#" class="my-button1">Super Link</a>
	</div>

	<div class="link-2">
		<br></br>
		<br>
		<br></br>
		<br>
		<br>
		<a href="#" class="my-button2">Click <br>Me</a>
	</div>

	<div class="link-3">
		<br></br>
		<br></br>
		<br></br>
		<br>
		<br>
		<a href="#" class="my-button3">THINK</a>
	</div>


	<!-- /main content -->

	<!-- load jquery -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</body>

</html>