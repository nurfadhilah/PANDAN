<?php

include("dbase.php");

// Dapatkan Tarikh Dan Masa Masuk
extract ( $_POST );
$tarikh = date("d-m-Y",time());
$masa = date("H:i:s", time());

$query = "INSERT INTO pengumuman VALUES ('','$tarikh','$tajuk','$pengumuman')";
$result = mysql_query($query, $conn) or die ("Could not execute query in isikan.php");
if($result)
{
 echo "<script type='text/javascript'>window.location='guru_list_annoucment.php' </script>";
}
?>