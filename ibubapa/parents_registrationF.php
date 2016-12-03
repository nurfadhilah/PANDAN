<?php include("../admin/dbase.php") ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
			<h1>DOKUMEN</h1>

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
					<li><h3 class="widget-title">Kids voice social</h3></li>
					<li><a class="twitter-intro" title="" href="#"></a></li>
					<li><a class="facebook-intro" title="" href="#"></a></li>
					<li><a class="social-intro" title="" href="#"></a></li>
					<li><a class="rss-intro" title="" href="#"></a></li>
				</ul>
			</div>
		</div>

	</div><!-- end wrap -->
</div>
<p><!-- end intro --></p>

<p>&nbsp; </p>

<div class="wrap">

	<div class="b8">
		<h3>E. DOKUMEN</h3></div>
</div>
<center>
	<table width="690" id="noborder" style="border-style:none">
		<tr>
			<td width="680">
				<form action="admin_upload_schedule_process.php" method="POST" enctype="multipart/form-data">

					<p>Image:
						<input type="file" name="image"/>
						<select name="standard" id="select">
							<option value="Standard 1">Standard 1</option>
							<option value="Standard 2">Standard 2</option>
							<option value="Standard 3">Standard 3</option>
							<option value="Standard 4">Standard 4</option>
							<option value="Standard 5">Standard 5</option>
							<option value="Standard 6">Standard 6</option>
						</select>
						<input type="submit" name="button2" id="button2" value="Submit"/>
					</p>
				</form>
			</td>
		</tr>
	</table>
	<p class="image"><a href="img/slider_asset__0001_.jpg" rel="example_group"> <span class="gallery-4col-mask"></span></a>
	</p>
	<table width="200" border="0" style="border-style:none" id="noborder">
		<tr>
			<td>STANDARD 1 <a href="print1.php">(Print)</a></td>
			<td>STANDARD 2 <a href="print2.php">(Print)</a></td>
			<td>STANDARD 3 <a href="print3.php">(Print)</a></td>
			<td>&nbsp;</td>

		</tr>
		<tr>
			<td>
				<ul class="portfolio-menu">
					<li class="c-13 four-column">

						<p class="image">
							<a href="standard1.php " target="_blank">
								<span class="gallery-4col-mask"></span>
								<img height="157" width="194" title="" alt="" src="images/gallery-4-col-assets-1.jpg"/>
							</a>
						</p>
					</li>
				</ul>
			</td>
			<td>
				<ul class="portfolio-menu">
					<li class="c-13 four-column">

						<p class="image">
							<a href="standard1.php " target="_blank">
								<span class="gallery-4col-mask"></span>
								<img height="157" width="194" title="" alt="" src="images/gallery-4-col-assets-1.jpg"/>
							</a>
						</p>
					</li>
				</ul>
			</td>
			<td>
				<ul class="portfolio-menu">
					<li class="c-13 four-column">

						<p class="image">
							<a href="standard2.php " target="_blank">
								<span class="gallery-4col-mask"></span>
								<img height="157" width="194" title="" alt="" src="images/gallery-4-col-assets-1.jpg"/>
							</a>
						</p>
					</li>
				</ul>
			</td>


		</tr>
		<tr>
			<td>STANDARD 4 <a href="print4.php">(Print)</a></td>
			<td>STANDARD 5 <a href="print5.php">(Print)</a></td>
			<td>STANDARD 6 <a href="print6.php">(Print)</a></td>

		</tr>
		<tr>
			<td>
				<ul class="portfolio-menu">
					<li class="c-13 four-column">

						<p class="image">
							<a href="standard4.php " target="_blank">
								<span class="gallery-4col-mask"></span>
								<img height="157" width="194" title="" alt="" src="images/gallery-4-col-assets-1.jpg"/>
							</a>
						</p>
					</li>
				</ul>
			</td>
			<td>
				<ul class="portfolio-menu">
					<li class="c-13 four-column">

						<p class="image">
							<a href="standard5.php " target="_blank">
								<span class="gallery-4col-mask"></span>
								<img height="157" width="194" title="" alt="" src="images/gallery-4-col-assets-1.jpg"/>
							</a>
						</p>
					</li>
				</ul>
			</td>
			<td>
				<ul class="portfolio-menu">
					<li class="c-13 four-column">

						<p class="image">
							<a href="standard6.php " target="_blank">
								<span class="gallery-4col-mask"></span>
								<img height="157" width="194" title="" alt="" src="images/gallery-4-col-assets-1.jpg"/>
							</a>
						</p>
					</li>
				</ul>
			</td>

		</tr>

		<tr>
			<td>STANDARD 7 <a href="print7.php">(Print)</a></td>


		</tr>
		<tr>
			<td>
				<ul class="portfolio-menu">
					<li class="c-13 four-column">

						<p class="image">
							<a href="standard4.php " target="_blank">
								<span class="gallery-4col-mask"></span>
								<img height="157" width="194" title="" alt="" src="images/gallery-4-col-assets-1.jpg"/>
							</a>
						</p>
					</li>
				</ul>
			</td>


		</tr>
	</table>
	<p class="image"><a href="img/gallery-2-col-assets-1.jpg" rel="example_group"><span
				class="gallery-4col-mask"></span></a></p>
</center>

<p><!-- end content -->

</p>

<div id="footer">
	<div class="wrap">


	</div><!-- end wrap -->
	<img src="img/zig-zag-divider.png" width="4192" height="25">
	<center>
		<p id="copyright">&copy;Tadika Kemas Pandan 1| (2016)</p>
	</center>
</div><!-- end sub-footer -->

</div><!-- end footer -->

</body>
</html>