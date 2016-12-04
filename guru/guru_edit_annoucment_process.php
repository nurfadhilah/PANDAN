<!--kemaskini.php-->
<!-- To update data of ubah.php into database-->
<?php
include("dbase.php");

extract($_POST);



$query="UPDATE kuota SET id='$id', kelas='$kelas', guru='$guru', kuota='$kuota', WHERE id='$id'";

$result=mysql_query($query,$conn)or die ("Could not execute query in this php");



if($result){
	
echo"<script type='text/javascript'> window.location='guru_list_annoucment.php'</script>";
}
?>