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
	<link rel="stylesheet" type="text/css" media="screen" href="css/style.css"/>

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
				<li><a href="admin_home.php" title="Subject">HALAMAN UTAMA</a>
				</li>

				<li><img src="../../AGL_all/img/devide.png" width="10" height="34"></li>

				<li><a title="Teacher">GURU</a>
					<ul>
						<li><a href="admin_add_guru.php" title="Add Teacher">Tambah Guru</a></li>
						<li><a href="admin_list_guru.php" title="List of Teacher">Senarai Guru</a></li>

					</ul>
				</li>
				<li><img src="../../AGL_all/img/devide.png" width="10" height="34"></li>
				<li>
					<a href="admin_view_kuota.php" title="Schedule">KUOTA</a>

				</li>
				<li><img src="../../AGL_all/img/devide.png" width="10" height="34"></li>
				<li><a title="Result">LAIN</a>
					<ul>
						<li><a href="admin_home.php" title="Mid Term">Profil</a></li>
						<li><a href="admin_change_password.php" title="Final Exam">Tukar Katalaluan</a></li>
						<li><a href="index.php" title="Full Result">Daftra Keluar</a></li>

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
			<h1>Halaman utama</h1>

			<p class="breadcrumbs">Anda Disini</p>
		</div>

		<div class="c-4">
			<div class="widget widget-social">
				<ul>
					<li>
						<h3 class="widget-title">NAMA </h3></li>
				</ul>
			</div>
		</div>

	</div><!-- end wrap -->
</div><!-- end intro -->

<div id="content"><!-- end wrap -->

</div>

<div id="content">

	<div id="content">
		<div class="wrap">
			<center><h3>TUKAR KATA LALUAN</h3></center>
			<div class="b8">
				<h1>
					<center>
                <span class="content_resize">
                  <?php
                  include("dbase.php");
                  $query = //"SELECT * FROM student WHERE matric_id = '$idURL'";
	                  "SELECT  * 	FROM login WHERE username= '" . $_SESSION['SESS_USERNAME'] . "' ";


                  $result = mysql_query($query, $conn) or die("Could not execute query");
                  $row = mysql_fetch_array($result, MYSQL_BOTH); // using numeric index or array index

                  $password = $row['password'];

                  @mysql_free_result($result);
                  ?>
                </span>
					</center>
				</h1>

				<table id="d03" border="1" width="999">
					<tr>
						<td>
							<center>
								<form name="add" method="post" action="changePassword_process.php">
									<table width="322" id="password" style="background:#FFFFFF">
										<tr bgcolor="#FFFFFF">
											<td width="166" height="26" valign="top" bgcolor="white"><strong>&nbsp;Kata
													Laluan Lama</strong></td>
											<td width="144" valign="top" bgcolor="white">&nbsp;
												<input name="student_matric" type="password" size="10"/>
												<input type="hidden" name="student_matric3"
												       value="<?php echo $row['password']; ?>"/></td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td height="27" valign="top" bgcolor="white"><strong>Kata Laluan
													Baru</strong></td>
											<td bgcolor="white">&nbsp;
												<input name="student_name" type="password" size="10"/></td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td height="26" valign="top" bgcolor="white"><strong>Sahkan Kata
													laluan</strong></td>
											<td align="left" valign="top" bgcolor="white">&nbsp;
												<input name="student_name2" type="password" size="10"/></td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td colspan="2" height="36" valign="top" bgcolor="white"><input
													align="center" name="add2" type="submit" value="SIMPAN"
													onClick="return Submit()"/></td>
										</tr>
									</table>
								</form>
							</center>
						</td>
					</tr>
				</table>

				<p></p>
				<!--  end page -->

			</div>
			<div class="b4 sidebar"></div><!-- end sidebar -->
		</div><!-- end wrap -->

	</div><!-- end wrap -->

</div><!-- end content -->

<div id="footer">
	<div class="wrap">


	</div><!-- end wrap -->
	<center>
		<p id="copyright">&copy;Tadika Kemas Pandan 1| (2016)</p>
	</center>
</div>
<img src="../../AGL_all/img/acdrule.gif" width="1358" height="8">

<center></center>
</div><!-- end footer -->

</body>
</html>