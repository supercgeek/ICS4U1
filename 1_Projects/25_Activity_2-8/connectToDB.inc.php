<?php
// database configurations
$db_servername = "external-db.s205379.gridserver.com";
$db_username = "db205379";
$db_password = "5Kz/0o3Pn1s'qusk~r3.";
$db_databasename = "db205379_supercgeek";

//************************************************************************
// Connect to MySQL Database
//************************************************************************

$db = mysql_connect($db_servername, $db_username, $db_password);
if (!$db) {
    die('Could not connect to database: ' . mysql_error());
} else {
    mysql_select_db($db_databasename, $db);
    echo "Successfully connected to the database!"; // remove this in real scripts
}
?>