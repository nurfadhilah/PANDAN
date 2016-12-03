<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<title>Tadika Kemas Pandan 1</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="description" content="A small sentence describing your website's subject"/>
	<meta name="keywords" content="some, keywords, separated, by, comas"/>
	<meta name="Robots" content="index, follow"/>

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="favicon.png"/>

	<!-- Main CSS -->
	<link rel="stylesheet" type="text/css" media="screen" href="style.css"/>
	<link rel="stylesheet" type="text/css" media="screen" href="css/select_color.css"/>
	<link rel="stylesheet" type="text/css" media="screen" href="js/fancybox/jquery.fancybox-1.3.4.css"/>

	<!-- Skin CSS -->
	<link rel="stylesheet" type="text/css" media="screen" href="styles/Yellow-Orange/yellow-orange.css"
	      class="changeme"/>

	<!--[if IE 7]>
	<link rel="stylesheet" type="text/css" href="./css/ie7.css"/><![endif]-->
	<!--[if IE 8]>
	<link rel="stylesheet" type="text/css" href="./css/ie8.css"/><![endif]-->

	<!-- Scripts -->
	<script type="text/javascript" src="js/jquery-1.6.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.cycle.all.js"></script>
	<script type="text/javascript" src="js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<script type="text/javascript" src="js/jquery.cookie.js"></script>


	<!-- Main JS -->
	<script type="text/javascript" src="js/main.js"></script>

	<!-- COLOR NAVIGATOR -->
	<script type="text/javascript">
		var $j = jQuery.noConflict();
		if ($j.cookie("css")) {
			$j("link.changeme").attr("href", $j.cookie("css"));
		}
		$j(document).ready(function () {
			$j("#nav li a").click(function () {
				$j("link.changeme").attr("href", $j(this).attr('rel'));
				$j.cookie("css", $j(this).attr('rel'), {expires: 365, path: '/'});
				return false;
			});
		});
	</script>

</head>
<body>

<div id="header">
	<ul id="nav">
		<li><a class="Green-Blue" rel="styles/Green-Blue/green-blue.css" href="#"></a></li>
		<li><a class="Grey-Red" rel="styles/Grey-Red/grey-red.css" href="#"></a></li>
		<li><a class="Orange-Red" rel="styles/Orange-Red/orange-red.css" href="#"></a></li>
		<li><a class="Pink-Grey" rel="styles/Pink-Grey/pink-grey.css" href="#"></a></li>
		<li><a class="Purple-Brown" rel="styles/Purple-Brown/purple-brown.css" href="#"></a></li>
		<li><a class="Turquise-Black" rel="styles/Turquise-Black/turquise-black.css" href="#"></a></li>
		<li><a class="Turquise-Grey" rel="styles/Turquise-Grey/turquise-grey.css" href="#"></a></li>
		<li><a class="Turquise-Orange" rel="styles/Turquise-Orange/turquise-orange.css" href="#"></a></li>
		<li><a class="Yellow-Orange" rel="styles/Yellow-Orange/yellow-orange.css" href="#"></a></li>
		<li><a class="Yellow-Purple" rel="styles/Yellow-Purple/yellow-purple.css" href="#"></a></li>
	</ul>
	<div class="wrap">

		<h1>LOGO TADIKA</h1>

		<div id="main-navigation">
			<ul class="dd-menu">
				<li><img src="../../AGL_all/img/devide.png" width="10" height="34"></li>
				</li>
				<li><a href="admin_view_sub.php" title="Subject">HALAMAN UTAMA</a>
				</li>

				<li><img src="../../AGL_all/img/devide.png" width="10" height="34"></li>

				<li><a title="Teacher">GURU</a>
					<ul>
						<li><a href="admin_add_teacher.php" title="Add Teacher">Tambah Guru</a></li>
						<li><a href="admin_list_teacher.php" title="List of Teacher">Senarai Guru</a></li>

					</ul>
				</li>
				<li><img src="../../AGL_all/img/devide.png" width="10" height="34"></li>
				<li>
					<a href="admin_upload_schedule.php" title="Schedule">KUOTA</a>

				</li>
				<li><img src="../../AGL_all/img/devide.png" width="10" height="34"></li>
				<li><a title="Result">LAIN</a>
					<ul>
						<li><a href="admin_list_result_mid.php" title="Mid Term">Profil</a></li>
						<li><a href="admin_list_result_final.php" title="Final Exam">Tukar Katalaluan</a></li>
						<li><a href="admin_list_result.php" title="Full Result">Daftra Keluar</a></li>

					</ul>

				</li>
				<li><img src="../../AGL_all/img/devide.png" width="10" height="34"></li>
			</ul>
			<!-- end dd-menu -->

		</div><!-- end main-navigation -->


	</div><!-- end wrap -->
</div><!-- end header -->

<div id="intro">
	<div class="wrap">

		<div class="c-8">
			<h1>KUOTA</h1>

			<p class="breadcrumbs">Anda Disini :<strong>KEMASKINI KUOTA</strong></p>
		</div>

		<div class="c-4">
			<div class="widget widget-social">
				<ul>
					<li>
						<h3 class="widget-title">NAMA</h3></li>
					<li></li>
				</ul>
			</div>
		</div>

	</div><!-- end wrap -->
</div><!-- end intro -->

<div id="content">
  <div class="wrap">
  <div class="b8">
			<h3 class="title">KUOTA</h3>

			<p><span class="c-12">
               <?php
			  
			   
include ("dbase.php");

$idURL = $_GET['id']; 

$query = "SELECT * FROM  kuota WHERE id='$idURL'";

$result = mysql_query ($query,$conn); 


$row = mysql_fetch_array($result, MYSQL_BOTH); // using numeric index or array index

	             $id = $row['id'];
				 $kelas=$row['kelas'];
				 $guru=$row['guru'];
				 $kuota=$row['kuota'];
                
    @mysql_free_result ($result);
?>
             </span></p>

			<div class="page">
				<table id="d03" width="1000px" border="1">
					<tr>
						<td><p>&nbsp;</p>


							<form action="admin_edit_kuota_process.php" method="post" name="details">
								<center>
									<table id="d02" width="628" border="1" align="center">
										<tr>
											<td width="247">NO ID</td>
											<td width="365"><?php echo $id;?></td>
										</tr>
										<tr>
											<td>KELAS</td>
											<td><input name="kelas" type="text" id="kelas"
											           value="<?php echo $kelas; ?>" size="50"></td>
										</tr>
										<tr>
											<td>GURU</td>
											<td><input name="guru" type="text" id="guru"
											           value="<?php echo $guru; ?>" size="50"></td>
										</tr>
										<tr>
											<td>KUOTA</td>
											<td><input name="kuota" type="text" id="kuota"
											           value="<?php echo  $kuota; ?>" size="50"></td>
										</tr>
										<tr>
											<td height="72"></td>
										  <td align="right"><input type="submit" name="button2" id="button2"
											                         value="KEMASKINI">
												<input type="hidden" name="id" value="<?php echo $idURL; ?>"></td>
										</tr>
									</table>
								</center>
							</form>
				</table>
			</div><!--  end page -->

		</div>
		<div class="b4 sidebar"></div><!-- end sidebar -->
	</div><!-- end wrap -->

</div><!-- end content --><!-- end content -->

<div id="footer">
	<div class="wrap">


	</div><!-- end wrap -->
	<center>
	</center>
</div>
<img src="../../AGL_all/img/acdrule.gif" width="1358" height="8">

<center></center>
</div><!-- end footer -->

</body>
</html>