<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <!--IDENTIFYING IFORMATION-->
    <title>Activity 1.2 - Cameron Burgess</title>
    <meta name="description" content="Activity 1.2">
    <meta name="author" content="Cameron Burgess">

    <!--OUTSIDE LOAD/INSTALLS-->
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <!--MAIN-->
    <h1>Manipulating Images</h1>

    <!--MAIN TABLE-->
    <table style="width:5%" border="1" cellpadding="0" cellspacing="0">
        <tr>
            <td>
		<!--CELL ONE-->
		<img alt="Be Careful" title="Be Careful" id="one" src="http://fc09.deviantart.net/fs70/i/2010/343/5/e/be_careful_by_antontang-d2nq7yy.jpg">
		<p>This is the original image.</p>
            </td>
            <td>
        <!--CELL TWO-->
		<img alt="Be Careful" title="Be Careful" id="two" src="http://fc09.deviantart.net/fs70/i/2010/343/5/e/be_careful_by_antontang-d2nq7yy.jpg">
		<p>This image is 100px by 100px.</p>
            </td>

        </tr>
        <tr>
            <td>
               <!--CELL THREE-->
		<img alt="Be Careful" title="Be Careful" id="three" src="http://fc09.deviantart.net/fs70/i/2010/343/5/e/be_careful_by_antontang-d2nq7yy.jpg">
		<p>This image is scaled to have a fixed width of 100px.</p>
            </td>
            <td>
                <!--CELL FOUR-->
		<img alt="Be Careful" title="Be Careful" id="four" src="http://fc09.deviantart.net/fs70/i/2010/343/5/e/be_careful_by_antontang-d2nq7yy.jpg">
		<p>This image is scaled to have a fixed height of 100px.</p>
            </td>

        </tr>
        <tr>
            <td>
              <!--CELL FIVE-->
			<img src="http://fwrd.io/2_Assets/1_Images/Satilite.JPG" title="This is Satilite" alt="It went to space." style="width: 300px; height: auto;" />
		<p>This is a US Satilite.</p>
            </td>
            <td>
                <!--CELL SIX-->
			<img src="http://fwrd.io/2_Assets/1_Images/LEAKED.JPG" title="LEAKED Graphic" alt="Looks like it leaked." style="width: auto; height: 200px;" />
		<p>This is a graphic I made in <a href="http://pixelmator.com" target="_blank"> Pixelmator</a>.</p>
            </td>

        </tr>
    </table>
    <!--JQUERY-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</body>

</html>