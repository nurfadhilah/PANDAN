<?php include("../admin/dbase.php") ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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

		<h1>&nbsp;</h1>

		<div id="main-navigation">
			<ul class="dd-menu">
				<li><img src="../../AGL_all/img/devide.png" width="10" height="34"></li>
				</li>
				<li><a href="parents_home.php" title="Subject">HALAMAN UTAMA</a>
				</li>

				<li><img src="../../AGL_all/img/devide.png" width="10" height="34"></li>
				<li>
					<a href="parents_registrationA.php" title="Schedule">PENDAFTARAN</a>

				<li><img src="../../AGL_all/img/devide.png" width="10" height="34"></li>
				<li><a title="Teacher">BAYARAN</a>
					<ul>
						<li><a href="parent_bayaranpendaftaran.php" title="Add Teacher">PENDAFTARAN</a></li>
						<li><a href="parents_bayaranbulanan.php" title="List of Teacher">YURAN BULANAN</a></li>

					</ul>
				</li>
				<li><img src="../../AGL_all/img/devide.png" width="10" height="34"></li>
				<li>
					<a href="parents_attendanceA.php" title="Schedule">KEDATANGAN</a>

				</li>
				<li><img src="../../AGL_all/img/devide.png" width="10" height="34"></li>
				<li><a title="Result">LAIN</a>
					<ul>
						<li><a href="parents_home.php" title="Mid Term">PROFIL</a></li>
						<li><a href="parents_changepassword.php" title="Final Exam">TUKAR PASSWORD</a></li>
						<li><a href="index.php" title="Full Result">KELUAR</a></li>

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
			<h1>MAKLUMAT AM </h1>

			<?php if (isset($_SESSION['user']) && ($_SESSION['user']['username'] != '')) {
				echo "<p class='breadcrumbs'>Hai {$_SESSION['user']['username']}, Anda berada dihalaman:<strong>Utama</strong></p>";
			} else {
				echo "<p class='breadcrumbs'>Anda berada dihalaman:<strong>Utama</strong></p>";
			} ?>
		</div>

		<div class="c-4"></div>

	</div><!-- end wrap -->
</div><!-- end intro -->

<div id="content">

	<div class="wrap">
		<div class="b8">
			<h3>D.MAKLUMAT AM KANAK-KANAK</h3>

			<div class="page">

				<form action="admin_add_student_process.php" method="post" enctype="multipart/form-data" name="add"
				      id="add">
					<table id="d01" width="636" border="1">
						<tr>
							<td width="130">Jenis Permainan Digemari :</td>
							<td width="428">

								<input name="name" type="text" class="tab" id="name"/>

							</td>
						</tr>
						<tr>
							<td background-color="#99CC33">Kerja-Kerja Rumah Digemari:</td>
							<td bgcolor="#CC0033"><input name="idnum" type="text" class="tab" id="idnum"/></td>
						</tr>

						<tr>
							<td background-color="#99CC33">Makanan Yang Disukai:</td>
							<td bgcolor="#CC0033"><input name="idnum" type="text" class="tab" id="idnum"/></td>
						</tr>

						<tr>
							<td background-color="#99CC33">Masalah makanan:</td>
							<td bgcolor="#CC0033"><input name="idnum" type="text" class="tab" id="idnum"/></td>
						</tr>
						<tr>
							<td>Masalah Khas :</td>
							<td align="left"><select name="standard" id="select">
									<option value="Standard 1">Diri-Takut</option>
									<option value="Standard 2">Diri-Tidak Takut</option>
									<option value="Standard 2">Kesihatan-Baik</option>
									<option value="Standard 2">Kesihatan-Tidak</option>

								</select></td>
						</tr>
						<tr>
							<td>Kecacatan(Jika Ada) :</td>
							<td><input name="icnum" type="text" class="tab" id="icnum"/></td>
						</tr>
						<tr>
							<td>Pengalaman Khas :</td>
							<td><input name="icnum" type="text" class="tab" id="icnum"/>
								(Pernah tinggal di hospital/tidak)
							</td>
						</tr>
						<tr>
							<td colspan="2">Orang Yang Boleh Dihubungi Jika Berlaku Kecemasan :</td>
						</tr>
						<tr>
							<td>Nama :</td>
							<td><input name="icnum" type="text" class="tab" id="icnum"/></td>
						</tr>
						<tr>
							<td>Alamat :</td>
							<td><input name="icnum" type="text" class="tab" id="icnum"/></td>
						</tr>

						<tr>
							<td>Telefon :</td>
							<td><input name="icnum" type="text" class="tab" id="icnum"/></td>
						</tr>

						<tr>
							<td colspan="2">Orang Yang Bertanggungjawab mengambil dan menghantar balik:</td>
						</tr>
						<tr>
							<td>Nama :</td>
							<td><input name="icnum" type="text" class="tab" id="icnum"/></td>
						</tr>
						<tr>
							<td>Alamat :</td>
							<td><input name="icnum" type="text" class="tab" id="icnum"/></td>
						</tr>

						<tr>
							<td>Telefon :</td>
							<td><input name="icnum" type="text" class="tab" id="icnum"/></td>
						</tr>
						<tr>
							<td>Jenis dan No Kenderaan :</td>
							<td><input name="parents" type="text" class="tab" id="parents"/></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td style="text-align:right"><input type="reset" name="reset" id="button" value="Reset"/>
								<a href="parents_registrationF.php?id=<?php echo $id; ?>"><input type="submit" name="submit" id="button" value="SIMPAN" /></td>
						</tr>
					</table>
				</form>

			</div>
		</div>
		<p>&nbsp;</p><!-- end sidebar -->
	</div><!-- end wrap -->

</div><!-- end content -->

<div id="footer">
	<div class="wrap">


	</div><!-- end wrap -->
	<center>
		<p id="copyright">&copy;Tadika Kemas Pandan 1| (2016)</p>
	</center>
</div>
<!--  end widget -->
</div>

</div><!-- end wrap -->
c<img src="../../AGL_all/img/acdrule.gif" width="1358" height="8">

<center></center>
</div><!-- end footer -->

</body>
</html>