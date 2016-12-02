<title></title>
<!-- isikan.php -->
<!-- To insert data of masuk.php into database. -->

<?php

include("dbase.php");

// Dapatkan Tarikh Dan Masa Masuk
extract($_POST);
$tarikh = date("d-m-Y", time());
$masa = date("H:i:s", time());
$query = "INSERT INTO guru VALUES ('','$Name','$ic','$umur','$email','$notelefon','$tarikhlahir','$alamat')";
$result = mysql_query($query, $conn) or die ("Could not execute query in isikan.php");
if ($result) {
	echo "<script type='text/javascript'>window.location='admin_list_guru.php' </script>";
}
?>