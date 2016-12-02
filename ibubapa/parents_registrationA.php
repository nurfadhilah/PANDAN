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

		<h1><a href="home" title=""></a></h1>

		<div id="main-navigation">
			<ul class="dd-menu">
				<li><img src="../../AGL_all/img/devide.png" width="10" height="34"></li>
				</li>
				<li><a href="admin_view_sub.php" title="Subject">Home</a>
				</li>

				<li><img src="../../AGL_all/img/devide.png" width="10" height="34"></li>
				<li>
					<a href="admin_upload_schedule.php" title="Schedule">Registration</a>

				<li><img src="../../AGL_all/img/devide.png" width="10" height="34"></li>
				<li><a title="Teacher">Payment</a>
					<ul>
						<li><a href="admin_add_teacher.php" title="Add Teacher">Registration fee</a></li>
						<li><a href="admin_list_teacher.php" title="List of Teacher">Monthly fee</a></li>

					</ul>
				</li>
				<li><img src="../../AGL_all/img/devide.png" width="10" height="34"></li>
				<li>
					<a href="admin_upload_schedule.php" title="Schedule">Attendance</a>

				</li>
				<li><img src="../../AGL_all/img/devide.png" width="10" height="34"></li>
				<li><a title="Result">Others</a>
					<ul>
						<li><a href="admin_list_result_mid.php" title="Mid Term">View Profile</a></li>
						<li><a href="admin_list_result_final.php" title="Final Exam">Change Password</a></li>
						<li><a href="admin_list_result.php" title="Full Result">Log Out</a></li>

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
			<h1>MAKLUMAT KANAK-KANAK</h1>

			<p class="breadcrumbs">You are here: <a href="home">Home</a> &raquo; <a href="home">Sample
					Page</a> &raquo; <strong>About Full</strong></p>
		</div>

		<div class="c-4">
			<div class="widget widget-social">
				<ul>
					<li><h3 class="widget-title">Kids voice social</h3></li>
					<li><a class="twitter-intro" title="" href="#"></a></li>
					<li><a class="facebook-intro" title="" href="#"></a></li>
					<li><a class="social-intro" title="" href="#"></a></li>
					<li><a class="rss-intro" title="" href="#"></a></li>
				</ul>
			</div>
		</div>

	</div><!-- end wrap -->
</div><!-- end intro -->

<div id="content">

	<div class="wrap">
		<div class="b8">
			<h3>A.MAKLUMAT KANAK-KANAK</h3>

			<div class="page">

				<form action="admin_add_student_process.php" method="post" enctype="multipart/form-data" name="add"
				      id="add">
					<table id="d01" width="636" border="1">
						<tr>
							<td width="130">Name Kanak-Kanak:</td>
							<td width="428">

								<input name="name" type="text" class="tab" id="name"/>

							</td>
						</tr>
						<tr>
							<td background-color="#99CC33">Tarikh Lahir :</td>
							<td bgcolor="#CC0033"><input name="idnum" type="text" class="tab" id="idnum"/></td>
						</tr>
						<tr>
							<td>Umur :</td>
							<td align="left"><select name="standard" id="select">
									<option value="Standard 1">5 Tahun</option>
									<option value="Standard 2">6 Tahun</option>

								</select></td>
						</tr>
						<tr>
							<td>Temapt Lahir :</td>
							<td><input name="icnum" type="text" class="tab" id="icnum"/></td>
						</tr>
						<tr>
							<td>No.Surat Beranak :</td>
							<td><input name="icnum" type="text" class="tab" id="icnum"/></td>
						</tr>
						<tr>
							<td>NO.Mykid :</td>
							<td><input name="icnum" type="text" class="tab" id="icnum"/></td>
						</tr>
						<tr>
							<td>Bilangan Adik-Beradik :</td>
							<td><input name="icnum" type="text" class="tab" id="icnum"/></td>
						</tr>
						<tr>
							<td>Anak ke :</td>
							<td><input name="icnum" type="text" class="tab" id="icnum"/></td>
						</tr>
						<tr>
							<td>Alamat Surat Menyurat :</td>
							<td>
								<textarea name="address" id="address" cols="50" rows="5"></textarea></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td style="text-align:right"><input type="reset" name="reset" id="button" value="Reset"/>
								<input type="submit" name="button" id="button" value="Submit"
								       onClick="return Validate()"/></td>
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
<img src="../../AGL_all/img/acdrule.gif" width="1358" height="8">

<center></center>
</div><!-- end footer -->

</body>
</html>