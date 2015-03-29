<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!--IDENTIFYING IFORMATION-->
    <title>Activity 1-1 - Cameron Burgess</title>
    <meta name="description" content="Activity 1.1">
    <meta name="author" content="Cameron Burgess">
    <!--WEB FONTS LOAD-->
<script src="http://use.edgefonts.net/league-gothic:n4:all.js"></script>
    <!--Internal Stylesheet-->
    <style>
        body {
            padding: 10px 10px 10px 10px;
            background: url("http://ics.actonhighschool.ca/test/images/fence.jpg");
            color: #333333;
            /* font color */
            font-family: "Century Gothic", league-gothic,
            /* CenturyGothic, AppleGothic,*/
            sans-serif;
        }
        .h1 {
            font-weight: bold;
            font-size: 35px;
        }
        .para1 {
            font-family: "Papyrus";
            font-size: 1.4em;
            color: #0355fa;
            padding: 20px;
            background-color: #FFA500;
        }
        a:link,
        a:visited,
        a:active {
            color: #3e3e3e;
            text-decoration: underline;
        }
        a:hover {
            color: #ffffff;
            text-decoration: none;
            background-color: #9400d3;
        }
        .aboveTheFold {
            background: white;
            padding: 5px;
            font-family: sans-serif;
        }
        .h2 {
            font-weight: bold;
            font-size: 22px;
        }
        .red-text {
            color: #ff0000;
        }
        .blue-text {
            color: #0000ff;
        }
        .green-text {
            color: #00ff00;
        }
    </style>
</head>

<body>
    <!--The Intro Header // "Give the page a heading and then in the first paragraph tag perform the task given in the next section."-->
    <div class="aboveTheFold">
        <h1 class="aboveTheFold">The Activity 1.1 begins below:</h1> 
        <p>I used a 'Century Gothic' lookalike because 'Century Gothic' is not supported on OSX and 'Apple Gothic' does not have a bold face.</p>
    </div>
    <p> <span class="h1"><b>This is an h1 heading</b></span> 
        <br>
        <br> <span class="p"> This activity involves creating HTML code that will reproduce this output accurately. The body has a 10px padding around the whole thing and the font is "Century Gothic." There is a background-image: url("http://ics.actonhighschool.ca/test/images/fence.jpg");
as well. The default links have a link,
visited,
and active color of 3e3e3e and text-decoration underline. The hover state color is #ffffff (white),
no text-decoration and background-color of #9400d3.</span> 
        <hr> <span class="h2">HTML is Easy To Learn (h2 title)</span> 
        <hr> <span class="p">Welcome to the world of the <b> World Wide Web</b>. This is the first paragraph. While short it is still a paragraph!</span> 
        <br>
        <br> <span class="p">This is the second paragraph. It is also short and boring. Let's create a link to the <a href="http://www.w3schools.com/html/html_quick.asp">HTML Quick Reference List</a></span>
        <br>
        <br> <span class="p">In the third paragraph we'll try line breaks...<br>
 H<br> e<br> l<br> l<br> o<br> <br> </span> Let's create two different types of links.
        <br>» Link to <a href="http://google.com">google</a> 
        <br>» Create an e-mail (mailto) link to <a href="mailto:braunc@hdsb.ca">braunc@hdsb.ca</a> 
        <br>
        <br>
        <div class="para1">This paragraph has the font "Papyrus", font-size of 1.4em, and text color #0355fa. This paragraph has the class name of "para1". It also has a padding of 20px and a background-color of #FFA500 (orange).</div>
        <br>Different colours using the "span" tag: <span class="red-text"> class "red-text" and color #ff0000 - RED </span>-<span class="blue-text"> class "blue-text" and color #0000ff - BLUE </span> - <span class="green-text"> class "green-text" and color #00ff00 - GREEN</span> 
        <br>
        <br>Now to the good stuff. <i><b>Unordered Lists</b></i>!
        <ul>
            <l1>• List item 1</l1>
            <br>
            <l2>• List item 2</l2>
            <br>
            <l3>• List item 3</l3>
            <br>
        </ul>And <i><b>Ordered Lists</b></i>!
        <ol>
            <l1>1. List item 1</l1>
            <br>
            <l2>2. List item 2</l2>
            <br>
            <l3>3. List item 3</l3>
            <br>
        </ol>Finally, a basic table ￼￼￼
        <br>
        <br>
        <table style="width:25%" border="1">
            <tr>
                <td>Column 1</td>
                <td>Column 2</td>
                <td>Column 3</td>
            </tr>
            <tr>
                <td>sometext</td>
                <td>sometext</td>
                <td>sometext</td>
            </tr>
            <tr>
                <td>sometext</td>
                <td>sometext</td>
                <td>sometext</td>
            </tr>
        </table>
    </p>
    <!--JQUERY-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</body>

</html>