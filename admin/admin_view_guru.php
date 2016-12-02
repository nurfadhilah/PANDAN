<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<title>Kid`s Voice School About Full</title>
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
			<h1>GURU </h1>

			<p class="breadcrumbs">Anda Disini :<strong> PAPARAN GURU</strong></p>
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
		<div class="c-12">


			<h3 class="title">PAPARAN GURU</h3>

			<?php
			include("dbase.php");

			$query = "SELECT * FROM guru";
			$result = mysql_query($query, $conn);

			while ($row = mysql_fetch_array($result))

			{
			$id_guru = $row["id_guru"];
			$Name = $row["Name"];
			$ic = $row["ic"];
			$umur = $row["umur"];
			$email = $row["email"];
			$notelefon = $row["notelefon"];
			$tarikhlahir = $row["tarikhlahir"];
			$alamat = $row["alamat"];

			?>

			<center>
				<table id="d03" width="1000px" border="1">
					<tr>
						<td><p>&nbsp;</p>

							<form>
								<center>
									<table id="contact" width="527" border="1" align="center">
										<tr style="text-align:left">
											<td width="183">NAMA</td>
											<td width="328"><?php echo $Name; ?></td>
										</tr>
										<tr>
											<td>KAD PENGENALAN</td>
											<td><?php echo $ic; ?></td>
										</tr>
										<tr>
											<td>UMUR</td>
											<td><?php echo $umur; ?></td>
										</tr>
										<tr>
											<td>EMAIL</td>
											<td><?php echo $email; ?></td>
										</tr>
										<tr>
											<td>NO. TELEFON</td>
											<td><?php echo $notelefon; ?></td>
										</tr>
										<tr>
											<td>TARIKH LAHIR</td>
											<td><?php echo $tarikhlahir; ?></td>
										</tr>
										<tr>
											<td>ALAMAT</td>
											<td><?php echo $alamat; ?></td>
										</tr>
										<tr>
											<td>Action</td>
											<td>
												<a href="admin_list_guru.php?id=<?php echo $ic; ?>"><input type="submit"
												                                                           name="button"
												                                                           id="button"
												                                                           value="Kembali">
											</td>


										</tr>
									</table>
								</center>


							</form>

							<?php
							}
							?>

				</table>


			</center>
			</ul>
		</div>
	</div>

	<!-- end wrap -->

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