<?php

include("dbase.php");

extract($_POST);

// Dapatkan Tarikh Dan Masa Masuk
$tarikh = date("d-m-Y", time());
$masa = date("H:i:s", time());

$query = "UPDATE book SET id = '$id', kelas = '$kelas', " .
	"guru = '$guru', kuota = '$kuota' WHERE id = '$id'";

$result = mysql_query($query, $conn) or die ("Could not execute query in kemaskini.php");
if ($result) {
	echo "<script type='text/javascript'>window.location='papar.php' </script>";
}
?>