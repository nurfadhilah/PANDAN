<!-- dbaseStd.php -->
<!-- To connect between php scripting and database. -->
<?php

//To establish a connection to database and save in $conn
$conn = mysql_connect('localhost', 'root', '', 'pandan');
//if connection failed then display mysql error
if (!$conn) {
	die("Could not connect to database");
}

//To select one particular database to be used
mysql_select_db("pandan", $conn) or die("Could not open product database");

//set the default time zone to use in Malaysia
date_default_timezone_set('Asia/Kuala_Lumpur');
?>

