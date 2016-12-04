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
				<li><a href="" title="Subject">PENDAFTARAN</a>

					<ul>
						<li><a href="guru_registrationA.php" title="Add Teacher">PENDAFTARAN ANAK</a></li>
						<li><a href="guru_view_registerA.php" title="List of Teacher">SENARAI PENDAFTARAN</a></li>

					</ul>
				</li>

				<li><img src="../../AGL_all/img/devide.png" width="10" height="34"></li>
				<li>
					<a href="" title="Schedule">BAYARAN</a>
					<ul>
						<li><a href="guru_list1_paymentA.php" title="Add Teacher">Bayaran Bulanan</a></li>
						<li><a href="guru_list1_paymentB.php" title="List of Teacher">Bayaran Pendaftaran</a></li>

					</ul>
				</li>
				<li><img src="../../AGL_all/img/devide.png" width="10" height="34"></li>
				<li><a title="Teacher">KEDATANGAN</a>
					<ul>
						<li><a href="guru_view_attendance.php" title="Add Teacher">SENARAI KEDATANGAN </a></li>
						

					</ul>
				</li>
				<li><img src="../../AGL_all/img/devide.png" width="10" height="34"></li>
				<li>
					<a href="" title="Schedule">PENGUMUMAN</a>
                    
                    <ul>
						<li><a href="guru_add_annoucment.php" title="Add Teacher">TAMBAH PENGUMUMAN </a></li>
                        <li><a href="guru_list_annoucment.php" title="Add Teacher">SENARAI PENGUMUMAN </a></li>
						

					</ul>
				</li>

				</li>
				<li><img src="../../AGL_all/img/devide.png" width="10" height="34"></li>
				<li><a title="Result">LAIN</a>
					<ul>

						<li><a href="guru_home.php" title="Mid Term">PROFIL</a></li>
						
						<li><a href="guru_changepassword.php" title="Final Exam">TUKAR KATALALUAN</a></li>
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
			<h1>HOME</h1>

			<?php if (isset($_SESSION['user']) && ($_SESSION['user']['username'] != '')) {
				echo "<p class='breadcrumbs'>Hai {$_SESSION['user']['username']}, Anda berada dihalaman:<strong>Utama</strong></p>";
			} else {
				echo "<p class='breadcrumbs'>Anda berada dihalaman:<strong>Utama</strong></p>";
			} ?> &raquo; <a href="home">Sample
				Page</a> &raquo; <strong>About Full</strong></p>
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

<div id="content"><!-- end wrap -->

</div>

<div id="content">

	<div class="wrap">
		<div class="b8">
			<h3 class="title">KEMASKINI BAYARAN</h3>

			<p><span class="c-12">
               <?php
               include("dbase.php");
               $query = "SELECT * FROM  std_info WHERE std_id = '" . $_SESSION['SESS_USERNAME'] . "'";

               $result = mysql_query($query, $conn);


               $row = mysql_fetch_array($result, MYSQL_BOTH); // using numeric index or array index

               $std_id = $row['std_id'];
               $std_name = $row['std_name'];
               $standard = $row['standard'];
               $std_ic = $row['std_ic'];
               $phone_num = $row['phone_num'];
               $address = $row['address'];
               $parents = $row['parent_name'];
               $pnum = $row['parent_phone'];
               $emel = $row['email'];
               $sickness = $row['sickness'];

               @mysql_free_result($result);
               ?>
             </span></p>

			<div class="page">
				<table id="d03" width="1000px" border="1">
					<tr>
						<td><p>&nbsp;</p>

							<form action="parent_edit_profile_process.php?id=<?php echo $_SESSION['SESS_USERNAME']; ?>"
							      method="post" name="details">
								<center>
									<table id="d02" width="628" border="1" align="center">
										<tr style="text-align:left">
											<td width="247">NAMA</td>
											<td width="365"><input name="std_name" type="text" id="textfield"
											                       value="" size="50"></td>
										</tr>
										<tr>
											<td>MYKIDS</td>
											<td><input name="std_name" type="text" id="textfield"
											                       value="" size="50"></td>
										</tr>
										<tr>
											<td>KELAS</td>
											<td><select name="standard">
													<option disabled=disabled value="">KELAS</option>
													<option
														value="<?php echo $standard ?>"><?php echo $standard ?></option>
													<option disabled=disabled value="">KELAS</option>
													<option value="Standard 1">5 TAHUN</option>
													<option value="Standard 2">6 TAHUN</option>
																							</select></td>
										</tr>
										<tr>
											<td>UMUR</td>
											<td><input name="std_ic" type="text" id="textfield4"
											           value="" size="50"></td>
										</tr>
										<tr>
											<td>BAYARAN (RM)</td>
											<td><input name="phone_num" type="text" id="textfield5"
											           value="" size="50"></td>
										</tr>
										<tr>
											<td>STATUS</td>
											<td><input name="address" type="text" id="textfield6"
											           value="" size="50"></td>
										</tr>
										<tr>
											<td></td>
											<td align="right"><a href="guru_list4_paymentA.php?id=<?php echo $id; ?>"><input type="submit" name="button2" id="button2"
											                         value="Simpan">
												<input name="std_id" type="hidden" id="textfield3"
												       value="<?php echo $_SESSION['SESS_USERNAME']; ?>" size="50"></td>
										</tr>
									</table>
								</center>
							</form>
				</table>
			</div><!--  end page -->

		</div>
		<div class="b4 sidebar"></div><!-- end sidebar -->
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