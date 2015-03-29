<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<title>Division Tags, CSS Properties, Classes & Ids</title>	
	
	<meta name="description" content="Division Tags, CSS Properties, Classes & Ids">
	<meta name="author" content="Author information goes here...">	
	
	<!-- styles - internal (not linked) -->
	<style>
	body {
		padding: 0;
		margin: 0;
		width: 100%;
		background: #ececec; 
		color: #333333;  /* font color */
		font-family: Calibri;
		background-image: url("http://funlava.com/wp-content/uploads/2013/03/cool-background-in-prince-of-persia_1024x768.jpg");
		background-size: cover;
		background-attachment: fixed;
	}	
	#container {
		position: absolute;
		display: inline-block;
		left: 0;
		right: 0;
		margin-top: 5%;
		margin-bottom: 5%;
		margin-left: auto;
		margin-right: auto;
		width: 90%;
		background: rgba(255,255,255,0.7);
		padding: 2%;
	}
	a#tab:link, a#tab:active, a#visited {
		position: absolute;
		top: 0;
		right: 0;
		padding: 1%;
		background: #ffff00;
		font-size: 1.2rem;
		text-transform: uppercase;
		text-decoration: none;
		color: #333333;
	}
	a#tab:hover {
		background: #333333;
		color: #ffffff;
	}
	.panel {
		position: relative;
		display: inline-block;
		padding: 1%;
		background: #ffffff;
		width: 200px;
		float: left;
		margin: 0 1% 1% 0;
	}
	</style>

</head>
<body>
	<!-- main content -->
	<div id="container">
		<a href="#" id="tab">The Tab</a>
		<h1>Division Tags</h1>
		<p>This text is inside the main container.  The panels below have a specified class and styles.</p>
		<div class="panel"><h2>Panel 1</h2><p>Proin commodo dolor vel tellus rutrum pellentesque. Curabitur sit amet ex sit amet nisi vulputate tincidunt sit amet eu augue. Curabitur ornare, sapien eu suscipit ultricies, sapien augue lacinia metus, non ornare nisl quam sed sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque interdum eros at libero dapibus convallis. Donec velit neque, pulvinar pulvinar pellentesque nec, ornare venenatis nisi. Sed vehicula diam eget mi efficitur, sit amet laoreet ante imperdiet.</p></div>
		<div class="panel"><h2>Panel 2</h2><p>Proin commodo dolor vel tellus rutrum pellentesque. Curabitur sit amet ex sit amet nisi vulputate tincidunt sit amet eu augue. Curabitur ornare, sapien eu suscipit ultricies, sapien augue lacinia metus, non ornare nisl quam sed sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque interdum eros at libero dapibus convallis. Donec velit neque, pulvinar pulvinar pellentesque nec, ornare venenatis nisi. Sed vehicula diam eget mi efficitur, sit amet laoreet ante imperdiet.</p></div>
		<div class="panel"><h2>Panel 3</h2><p>Proin commodo dolor vel tellus rutrum pellentesque. Curabitur sit amet ex sit amet nisi vulputate tincidunt sit amet eu augue. Curabitur ornare, sapien eu suscipit ultricies, sapien augue lacinia metus, non ornare nisl quam sed sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque interdum eros at libero dapibus convallis. Donec velit neque, pulvinar pulvinar pellentesque nec, ornare venenatis nisi. Sed vehicula diam eget mi efficitur, sit amet laoreet ante imperdiet.</p></div>
		<div class="panel"><h2>Panel 4</h2><p>Proin commodo dolor vel tellus rutrum pellentesque. Curabitur sit amet ex sit amet nisi vulputate tincidunt sit amet eu augue. Curabitur ornare, sapien eu suscipit ultricies, sapien augue lacinia metus, non ornare nisl quam sed sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque interdum eros at libero dapibus convallis. Donec velit neque, pulvinar pulvinar pellentesque nec, ornare venenatis nisi. Sed vehicula diam eget mi efficitur, sit amet laoreet ante imperdiet.</p></div>
	</div>
	<!-- /main content -->
	
	<!-- load jquery -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</body>
</html>