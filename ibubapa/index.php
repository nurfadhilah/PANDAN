<?php

include("../admin/dbase.php");

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM users WHERE email='$email'";
	$results = mysql_query($sql);
	while ($row = mysql_fetch_assoc($results)) {
		if ($row['email'] == $email && $row['password'] == md5($password)) {
			session_start();
			$_SESSION['user'] = $row;
			echo "<script>alert('Selamat datang {$_SESSION['user']['username']}!')</script>";
			echo "<script>setTimeout(function(){window.location.href = 'about_Parents.html'}, 1000)</script>";
		} else {
			echo "<script>alert('Tiada maklumat ditemui!')</script>";
		}
	}
}

?>

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
		<h1><a href="../../AGL_all/index.php" title=""></a></h1><!-- logo -->

		<!-- ---------------------------------------------MENU--------------------------------------------------- -->
		<div id="main-navigation">
			<ul class="dd-menu">
				<li><img src="../../AGL_all/img/devide.png" width="10" height="34"></li>
				<li class="current-menu-item"><a href="../../AGL_all/index.php" title="Home Page">Home</a></li>
				<li><img src="../../AGL_all/img/devide.png" width="10" height="34"></li>
				<li><a href="../../AGL_all/about.php" title="About">About Us</a></li>
				<li><img src="../../AGL_all/img/devide.png" width="10" height="34"></li>
				<li><a href="../../AGL_all/contact.php" title="Contact">Contact Us</a></li>
				<li><img src="../../AGL_all/img/devide.png" width="10" height="34"></li>
				<li><a href="#loginForm" title="Log In">Log In</a></li>
				<li><img src="../../AGL_all/img/devide.png" width="10" height="34"></li>

				<li><a href="#loginForm" title="Log In">Sign Up</a></li>
				<li><img src="../../AGL_all/img/devide.png" width="10" height="34"></li>

			</ul><!-- end dd-menu// -->
		</div><!-- end main-navigation -->
	</div>
	<div id="intro">
		<div class="wrap">

			<div class="c-8">
				<h1>HOME </h1>

				<p class="breadcrumbs">You are here:<strong>Home</strong></p>
			</div>

			<div class="c-4">
				<div class="widget widget-social">
					<ul>
						<li><a class="twitter-intro" title="" href="#"></a></li>
						<li><a class="facebook-intro" title="" href="#"></a></li>
						<li><a class="social-intro" title="" href="#"></a></li>
						<li><a class="rss-intro" title="" href="#"></a></li>
					</ul>
				</div>
			</div>

		</div><!-- end wrap -->
	</div>


	<div class="wrap">

		<h1>&nbsp;</h1>

		<div id="main-navigation"><!-- end dd-menu -->

		</div><!-- end main-navigation -->

	</div><!-- end wrap -->
</div><!-- end header -->

<div id="content" class="home">

	<div id="slider">
		<div class="wrap">

			<div class="c-8">
				<div id="big-slider">
					<ul id="slider-items">
						<li>
							<img src="assets/slider_asset__0000_.jpg" width="650" height="293" alt="Slider Image"
							     title=""/>
						</li>
						<li>
							<img src="assets/slider_asset__0001_.jpg" width="650" height="293" alt="Slider Image"
							     title=""/>
						</li>
						<li>
							<img src="assets/slider_asset__0002_.jpg" width="650" height="293" alt="Slider Image"
							     title=""/>
						</li>
						<li>
							<img src="assets/slider_asset__0003_.jpg" width="650" height="293" alt="Slider Image"
							     title=""/>
						</li>
						<li>
							<img src="assets/slider_asset__0004_.jpg" width="650" height="293" alt="Slider Image"
							     title=""/>
						</li>
					</ul>

					<!-- This list is populated by jQuery Cycle -->
					<div id="pagination-container">
						<span class="previous"></span>
						<span id="slider-pagination"></span>
						<span class="next"></span>
					</div>
				</div><!-- END big-slider -->
			</div>

			<div class="c-4">
				<div id="cat-slider">
					<h2>OUR PROGRAM</h2>
					<span class="devider"></span>

					<div id="scroller">
						<ul>
							<li><h3><a href="#" title="Infant">Infant</a></h3>Lorem ipsum dolor sit amet sit amet</li>
							<li><h3><a href="#" title="Infant">Pre-toddlers</a></h3>Lorem ipsum dolor sit amet</li>
							<li><h3><a href="#" title="Infant">Toddlers</a></h3>Lorem ipsum dolor sit amet</li>
						</ul>
						<ul>
							<li><h3><a href="#" title="Infant">Infant 1</a></h3>Lorem ipsum dolor sit amet sit amet</li>
							<li><h3><a href="#" title="Infant">Pre-toddlers 1</a></h3>Lorem ipsum dolor sit amet</li>
							<li><h3><a href="#" title="Infant">Toddlers 1</a></h3>Lorem ipsum dolor sit amet</li>
						</ul>
						<ul>
							<li><h3><a href="#" title="Infant">Infant 2</a></h3>Lorem ipsum dolor sit amet sit amet</li>
							<li><h3><a href="#" title="Infant">Pre-toddlers 2</a></h3>Lorem ipsum dolor sit amet</li>
							<li><h3><a href="#" title="Infant">Toddlers 2</a></h3>Lorem ipsum dolor sit amet</li>
						</ul>
					</div><!-- END scroller -->

					<span class="up-arrow" title="Next"></span>
					<span class="down-arrow" title="Previous"></span>

				</div> <!-- end cat-slider -->
			</div>

		</div><!-- end wrap --><!-- END slider-bg // ljulja, togodan, vepak // pronunced by my son Luka :) -->

	</div><!-- end slider-->

	<div id="featured">
		<div class="wrap">

			<div class="c-8">
				<div class="wrap">
					<div class="b8">
						<div class="page">
							<h2>ABOUT ANGEL TUITION CENTRE</h2>

							<p>Angel tuition centre was founded by Angel a/p Mariadass in 2015 through FSKKP UMP
								Department licence. The mission of Angel Tuition Centre is to provide primary school
								student and their parents with the best possible care while providing enough facilities
								from aspect education, knowledge and learning environment. Our goal also to allow
								children enhance their development through interaction and exploration by incorporation
								developmentally an appropriate curriculum. Our teachers are dedicated and know exactly
								how to guide student to fulfill their maximum learning potential with enough
								facilities.</p>
							<a class="read-more"><span class="circle-arrow"></span></a>
						</div><!-- end page-->
					</div><!-- end b8-->

					<!-- end b4-->

				</div>
			</div>
		</div><!-- end wrap -->
	</div><!-- END featured -->

	<div id="container-middle">
		<div class="wrap">

			<div class="c-4">
				<h3>OUR TIMETABLE</h3>
				<h4>LOREM IPSUM DOLOR SIT AMET</h4>

				<div class="mask">
					<a title="" href="assets/slider_asset__0000_.jpg" rel="example_group">
						<span class="middle-frame-mask"></span>
						<img src="assets/slider_asset__0000_300x135.jpg" alt="" title=""/>
					</a>
				</div>
				<p>Lorem ipsum dolor sit amet, ie et dolore magna aliqua. Forem pero Ut enim ad minim veniam, quis
					nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>

			<div class="c-4">
				<h3>FOOD TIMETABLE</h3>
				<h4>LOREM IPSUM DOLOR SIT AMET</h4>

				<div class="mask">
					<a title="" href="assets/slider_asset__0001_.jpg" rel="example_group">
						<span class="middle-frame-mask"></span>
						<img src="assets/slider_asset__0001_300x135.jpg" alt="" title=""/>
					</a>
				</div>
				<p>Lorem ipsum dolor sit amet, ie et dolore magna aliqua. Forem pero Ut enim ad minim veniam, quis
					nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>

			<div class="c-4">
				<h3>ACTIVITY TIMETABLE</h3>
				<h4>LOREM IPSUM DOLOR SIT AMET</h4>

				<div class="mask">
					<a title="" href="assets/slider_asset__0002_.jpg" rel="example_group">
						<span class="middle-frame-mask"></span>
						<img src="assets/slider_asset__0002_300x135.jpg" alt="" title=""/>
					</a>
				</div>
				<p>Lorem ipsum dolor sit amet, ie et dolore magna aliqua. Forem pero Ut enim ad minim veniam, quis
					nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>

		</div><!-- end wrap -->
	</div> <!-- end container-middle -->

</div><!-- end content -->

<div id="footer">
	<div class="wrap">

		<div class="c-3">
			<h3 class="widget-title">Find US ON GOOGLE MAP</h3>

			<div class="google-map">
				<div id="google-map-location">
					<p></div>
				<br>
			</div>

		</div>
		<div class="c-1">
			<img src="../../AGL_all/img/devide.png" width="8" height="330">
		</div>
		<div class="c-3">
			<h3 class="widget-title">CONTACT US</h3>

			<div class="widget widget-working-hours">
				<ul>
					<li class="add"><span>ADDRESS</span><br/>
						Angel's Tuition Centre,<br>
						1342 Gambang Damai,<br>
						26600 Pekan,<br>
						Pahang Darul Makmur.<br>
						<br>
					</li>
					<li>

					</li>
					<li class="phone"><span>CONTACT PHONE</span><br/>
						+609 424 5000
						<br>
						<br>
						<br>
					</li>
					</li>
					<br>
					<li class="fax"><span>FAX</span><br/>
						+609 424 5555<br>
						<br>
						<span class="phone"> </span></li>
					<li><br>

					</li>
					<li class="emel"><span>Email</span><br/>
						agl@gmail.com
					</li>
				</ul>
			</div>
			<p>&nbsp;</p>
			<ul>
				<br>
				<br>
			</ul>
		</div>
		<div class="c-1">
			<img src="../../AGL_all/img/devide.png" width="8" height="330">
		</div>
		<div class="c-3">
			<div id="form_wrapper" class="form_wrapper">
				<form id="loginForm" name="loginForm" method="post" class="login active" action="index.php">
					<h3>Log In</h3>

					<div>
						<label>Username:</label>
						<input type="email" name="email" placeholder="Email"/>
					</div>
					<div>
						<label>Password:</label>
						<input type="password" name="password" placeholder="Password"/>
					</div>
					<div>
						<label>Category : </label>
						<select name="leveling" style="width:200px; font-size:14px; height:35px">
							<option value="">Categories</option>
							<option value="Admin">Guru</option>
							<option value="Student">Ibu Bapa/Pelajar</option>
						</select>
						<br>
					</div>
					<div class="bottom">
						<div class="remember">
							<p>
								<input name="Submit" type="submit" value="Log In"/>

						</div>
						<div class="clear"></div>
					</div>
				</form>

				<h3><a href="parents_registration">Tiada Akaun? Daftar disini...</a></h3>
			</div>
			<!--  end widget -->
		</div>

	</div><!-- end wrap -->
	<img src="../../AGL_all/img/acdrule.gif" width="1358" height="8">

	<center>
		<p id="copyright">&copy;Tadika Kemas Pandan 1| (2016)</p></center>
</div><!-- end footer -->

</body>
</html>