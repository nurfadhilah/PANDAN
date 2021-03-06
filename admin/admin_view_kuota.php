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
			<h1>KUOTA </h1>

			<p class="breadcrumbs"><?php if (isset($_SESSION['user']) && ($_SESSION['user']['username'] != '')) {
				echo "<p class='breadcrumbs'>Hai {$_SESSION['user']['username']}, Anda berada dihalaman:<strong>Utama</strong></p>";
			} else {
				echo "<p class='breadcrumbs'>Anda berada dihalaman:<strong>Utama</strong></p>";
			} ?></p>
		</div>

		<div class="c-4"></div>

	</div><!-- end wrap -->
</div><!-- end intro -->

<div id="content">
<!-- 	<<<<<<< HEAD	-->

	<div id="content">

		<div class="wrap">
			<div class="b8">
				<h3 class="title">KUOTA KELAS <a href="report_teac.php">(LAPORAN)</a></h3>

				<div class="page">
				  <div id="content">

		  <div class="wrap">
							<div class="b8">
								<h3 class="title">KUOTA KELAS <a href="report_teac.php">(LAPORAN)</a></h3>

								<div class="page"><br/>



									<center>
										<table id="d02" width="789" border="1">
											<tr>
												<th width="138">NO.</th>
												<th width="138">KELAS</th>
												<th width="357">GURU</th>
												<th width="357">KUOTA</th>

											</tr>

									<?php

									include("dbase.php");

									$query = "SELECT * FROM kuota";
									$result = mysql_query($query, $conn);

									while ($row = mysql_fetch_array($result))
									{
									$id = $row["id"];
									$kelas = $row["kelas"];
									$guru = $row["guru"];
									$kuota = $row["kuota"];

									?>

											<tr>
												<td align="center" style="color:#000"><?php echo $id; ?></td>

												<td background-color="#99CC33"><a href="admin_edit_kuota.php?id=<?php echo $kelas; ?>"><?php echo $kelas; ?></a>
												</td>

												<td bgcolor="#CC0033"><?php echo $guru; ?></td>
												<td bgcolor="#CC0033"><a href="admin_edit_kuota.php?id=<?php echo $id; ?>"><?php echo $kuota; ?></td>

															<?php } ?>
														</tr>
													</table>
												</center>
												<center></center>
								</div>
								<!--  end entry -->

							</div>
							<p>&nbsp;</p><!-- end sidebar -->
						</div><!-- end wrap -->

					</div><!-- end wrap -->

				</div><!-- end content -->

				<img src="../../AGL_all/img/acdrule.gif" width="1358" height="8"/>

				<div id="footer">
					<div class="wrap">


					</div><!-- end wrap -->
					<center>
						<p id="copyright">&copy;Tadika Kemas Pandan 1| (2016)</p>
					</center>
				</div>
				<center></center>
			</div><!-- end footer -->

</body>
</html>