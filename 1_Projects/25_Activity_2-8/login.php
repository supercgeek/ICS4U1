<?
// start the session and register the session variables
session_start("ProtectVariables");

// get the command value (use request since both post and get are used
$cmd = $_REQUEST['cmd'];
$username = $_POST['user'];
$password = $_POST['pass'];

if ($cmd == "login") {   
	$_SESSION['valid_session'] = "false";   
	$message = "<span style='color: #ff0000;'>The username and/or password are incorrect!</span>";

	$password = md5($password);  // hash the password to check with database value
   
     // Connect to the database and select table
	include("connectToDB.inc.php");     

	$sql = "SELECT * FROM users WHERE username='" . $username . "'";
	$result = mysql_query($sql,$db);
	
	while ($myrow = mysql_fetch_array($result)) { 	 		
		if  ($username == $myrow['username'] && $password == $myrow['password'])  {
			$_SESSION['valid_session'] = "true";
			// autentication verified, simply load the page
			$landing_page = "secure-me.php"; // your page to go to when logging in
			echo "<script language='JavaScript'> window.location='" . $landing_page . "'; </script>";			
		}
	} 
	
	mysql_close($db);  // close db connection
}

// force the destruction of the session if you logout.
if ($cmd == "logout")  { 
   session_start("ProtectVariables");
   session_destroy(); 
   $message = "<span style='color: green;'>You have logged out.</span>";
}

// error messages
if ($cmd == "unauth") {
	// default unauth message
	$message = "<span style='color: #ff0000;'>Sorry, you do not have permission to access this page.</span>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Script</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<meta http-equiv="CACHE-CONTROL" content="no-store, no-cache, must-revalidate, post-check=0, pre-check=0">
</head>

<body>

<?
// display the message
if ($message) {
	echo "<p>" . $message . "</p>";
}

// print login page if logout, login, or an error occurs
echo "
Test with the following values...<BR>
username: supercgeek<BR>
password: testerflight<BR>
<h2>Login</h2>
	<form action='login.php' method='POST' style='display: inline-block; border: 1px solid #333333; padding: 20px;'>
	<input type='hidden' name='cmd' value='login'></input>
	Username: <input type='text' name='user' value='" . $_POST['user'] . "' maxlength='20' required></input><br />
	Password: <input type='password' name='pass' maxlength='15' required></input>
	<input type='submit' value='LOGIN'></input>
</form>
";
?>
</body>
</html>