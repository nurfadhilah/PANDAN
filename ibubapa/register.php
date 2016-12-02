<?php

include("../admin/dbase.php");

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$password')";
	$result = mysql_query($sql, $conn) or die(mysql_error());

	if (mysql_affected_rows()) {
		echo "<script>alert('Pendaftaran Berjaya! ' +
 'Sila log masuk menggunakan email anda.')</script>";
		echo "<script>setTimeout(function(){window.location.href = 'index.php'}, 1000)</script>";
	}
}