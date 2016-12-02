<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<title>Kid`s Voice School Single Post</title>
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
				<li><a href="home" title="Home Page">Home</a></li>
				<li><a href="about" title="About Us Page">About</a></li>
				<li>
					<a href="page-styles" title="Sample">Sample</a>
					<ul>
						<li><a href="gallery-2col" title="Gallery">Elements</a>
							<ul>
								<li><a href="#" title="Sub Item 1">Sub Item 1</a></li>
								<li><a href="#" title="Sub Item 2">Sub Item 2</a></li>
								<li><a href="#" title="Sub Item 3">Sub Item 3</a></li>
								<li><a href="#" title="Sub Item 4">Sub Item 4</a></li>
							</ul>
						</li>
						<li><a href="about-full" title="About Full">About Full</a></li>
						<li><a href="page-styles" title="Page Styles">Page Styles</a></li>
					</ul>
				</li>
				<li class="current-menu-item">
					<a href="blog-posts" title="Blog">Blog</a>
					<ul>
						<li><a href="blog-posts" title="Blog Posts">Blog Posts</a></li>
						<li><a href="single-post" title="Single Post">Single Post</a></li>
					</ul>
				</li>
				<li>
					<a href="gallery-2col" title="Gallery">Gallery</a>
					<ul>
						<li><a href="gallery-2col" title="">Gallery 2col</a></li>
						<li><a href="gallery-4col" title="">Gallery 4col</a></li>
						<li><a href="gallery-big-list" title="">Gallery big list</a></li>
					</ul>
				</li>
				<li><a href="contact" title="Contact">Contact</a></li>
			</ul><!-- end dd-menu -->

		</div><!-- end main-navigation -->


	</div><!-- end wrap -->
</div><!-- end header -->

<div id="intro">
	<div class="wrap">

		<div class="c-8">
			<h1>Single Post</h1>

			<?php if (isset($_SESSION['user']) && ($_SESSION['user']['username'] != '')) {
				echo "<p class='breadcrumbs'>Hai {$_SESSION['user']['username']}, Anda berada dihalaman:<strong>Utama</strong></p>";
			} else {
				echo "<p class='breadcrumbs'>Anda berada dihalaman:<strong>Utama</strong></p>";
			} ?> &raquo; <a href="home">Blog
				Posts</a> &raquo; <strong>Single Post</strong></p>
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
		<div class="c-8 divider">

			<div class="post-list">

				<div class="post">
					<h2 class="title">H2 Lorem ipsum dolor sit amet consect.</h2>

					<p class="meta">
						<span>Date: <a class="date" title="" href="#">15 Feb 2010</a></span>
						<span>Author: <a class="author" title="" href="#">admin</a></span>
                        <span class="categories">Categories: <a class="category" title="" href="#">Category1</a>, <a
		                        class="category" href="#">Category2</a></span>
						<span class="comments"><a title="" href="#">13 </a></span>
					</p>

					<p class="image">
						<a href="assets/slider_asset__0002_.jpg" rel="example_group">
							<img src="assets/post-thumb-large.jpg" width="628" height="181" alt="" title=""/>
						</a>
					</p>

					<p>Praesent massa lectus, vulputate sed, vestibulum eu, vestibulum eu, dolor. Integer ante. Proin ac
						odio in urna cursus ultricies. Quisque tincidunt lacus in ante. Donec adipiscing. Curabitur at
						enim at nulla iaculis feugiat. Ut semper, nisi vel suscipit venenatis, felis diam auctor mi,
						quis iaculis leo nulla vel sapien. Phasellus blandit nibh vel turpis. Curabitur commodo. </p>
					<blockquote><p>Suspendisse dictum suscipit odio. Nulla dui arcu, fermentum quis, mattis quis,
							ultricies id, justo. Nulla facilisi. Proin tortor sem vehicula vitae, facilisis vel,
							accumsan a,
							sapien. Vivamus convallis rutrum lorem.</p></blockquote>
					<p>Curabitur at enim at nulla iaculis feugiat. Ut semper, nisi vel suscipit venenatis, felis diam
						auctor mi, quis iaculis leo nulla vel sapien. Phasellus blandit nibh vel turpis. Curabitur
						commodo.</p>

					<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin
						neque velit, porttitor at, venenatis ac, pharetra at, purus. Aenean pulvinar nulla. Phasellus et
						erat eu erat vestibulum ornare. Sed imperdiet tellus. Praesent placerat feugiat odio. </p>

					<h3>H3 So the funkiest kids' music act known to man</h3>
					<ul class="bullets">
						<li>Suspendisse dictum suscipit odio.</li>
						<li>Nulla dui arcu, fermentum quis, mattis quis, ultricies id, justo.</li>
						<li>Proin tortor sem vehicula vitae.</li>
						<li>Facilisis vel, accumsan a, sapien.</li>
					</ul>
					<p>Suspendisse dictum suscipit odio. Nulla dui arcu, fermentum quis, mattis quis, ultricies id,
						justo. Nulla facilisi. Proin tortor sem vehicula vitae facilisis vel, accumsan a, sapien ivamus
						convallis rutrum lorem. Praesent massa lectus, vulputate sed, vestibulum eu, vestibulum eu,
						dolor. Integer ante.
						Donec imperdiet. Proin ac odio in urna cursus ultricies. Quisque tincidunt lacus in ante.
						Curabitur at enim at nulla iaculis feugiat. Ut semper, nisi vel suscipit venenatis, felis diam
						auctor mi, quis iaculis leo nulla vel sapien. Phasellus blandit nibh vel turpis. Curabitur
						commodo. </p>

					<p class="meta dashed">
                        <span class="tags">Tags: <a class="tag" title="" href="#">Tag 1</a>, <a class="category"
                                                                                                href="#">Tag
		                        2</a></span>
					</p>

				</div><!-- end post -->

				<div id="comments">
					<h2>2 Comments: "Lorem ipsum dolor sit amet consectetur"</h2>
					<ol>
						<li>
							<p class="image">
								<span class="polaroid-mask"></span>
								<img title="Avatar Image" alt="Avatar Name" src="assets/avatar.jpg" width="73"
								     height="60"/>
							</p>

							<p class="meta">
								<span>Published by: <a href="#">John Doe</a></span>
								<span>Date: <a href="#" title="" class="date">15 Feb 2010</a></span>
							</p>
							<a class="replay" href="#">Replay</a>

							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam vel dui eu tortor
								euismod faucibus. Ut scelerisque sodales eros.</p>

							<!-- comment replay -->

							<ol>
								<li>
									<p class="image">
										<span class="polaroid-mask"></span>
										<img title="Avatar Image" alt="Avatar Name" src="assets/avatar.jpg" width="73"
										     height="60"/>
									</p>

									<div class="comment-content">
										<p class="meta">
											<span>Published by: <a href="#">John Doe</a></span>
											<span>Date: <a href="#" title="" class="date">15 Feb 2010</a></span>
										</p>
										<a class="replay" href="#">Replay</a>

										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
									</div>
								</li>
								<li>
									<p class="image">
										<span class="polaroid-mask"></span>
										<img title="Avatar Image" alt="Avatar Name" src="assets/avatar.jpg" width="73"
										     height="60"/>
									</p>

									<div class="comment-content">
										<p class="meta">
											<span>Published by: <a href="#">John Doe</a></span>
											<span>Date: <a href="#" title="" class="date">15 Feb 2010</a></span>
										</p>
										<a class="replay" href="#">Replay</a>

										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
									</div>
								</li>
							</ol>
							<!-- end comment replay -->

						</li>
						<!-- end first comment -->

						<li>
							<p class="image">
								<span class="polaroid-mask"></span>
								<img title="Avatar Image" alt="Avatar Name" src="assets/avatar.jpg" width="73"
								     height="60"/>
							</p>

							<p class="meta">
								<span>Published by: <a href="#">John Doe</a></span>
								<span>Date: <a href="#" title="" class="date">15 Feb 2010</a></span>
							</p>
							<a class="replay" href="#">Replay</a>

							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam vel dui eu tortor
								euismod faucibus. Ut scelerisque sodales eros.</p>
						</li>
					</ol>
				</div>

				<div class="add-comment">

					<form id="commentform" method="post" action="php/mail.php">
						<p class="textarea">
							<label class="add-comment-heading" for="message">Leave a comment:</label>
							<textarea cols="1" rows="3" id="message" name="message" class="u-4"></textarea>
						</p>

						<p>
							<label for="name">Your name:</label>
							<input id="name" name="name" class="u-3"/>
						</p>

						<p>
							<label for="email">Your email:</label>
							<input id="email" name="email" class="u-3"/>
						</p>

						<p>
							<label for="website">Your website:</label>
							<input id="website" name="website" class="u-3"/>
						</p>

						<p>
							<input type="submit" value="Send Comment" class="submit" name="" style="display: none;"/>
						</p>
					</form>

				</div><!-- end add-comment -->

			</div><!-- end post-list -->

		</div>

		<div class="c-4 sidebar">
			<div class="widget widget-working-hours">
				<h3 class="widget-title">Working hours</h3>
				<ul>
					<li class="clock"><span>7 DAYS A WEEK</span><br/><strong>10:00 am - 1:30 pm</strong></li>
					<li><span class="devider"></span></li>
					<li class="phone"><span>CONTACT PHONE</span><br/><strong>+321 02121232133</strong></li>
				</ul>
			</div><!-- end widget-working-hours -->

			<div class="widget widget-recent">
				<h3 class="widget-title">Recent Posts</h3>
				<h4>LOREM IPSUM DOLOR SIT AMET</h4>
				<ul class="arrows">
					<li><a href="">Quis nostrud exercitation</a></li>
					<li><a href="">Vivamus convallis rutrum lorem</a></li>
					<li><a href="">Nulla dui arcu, fermentum quis</a></li>
					<li><a href="">Praesent massa lectus, vulputate sed</a></li>
					<li><a href="">Vivamus convallis rutrum lorem</a></li>
					<li><a href="">Quis nostrud exercitation</a></li>
					<li><a href="">Nulla dui arcu, fermentum quis</a></li>
				</ul>
			</div><!-- end widget-recent -->

			<div class="widget widget-archives">
				<h3 class="widget-title">Archives</h3>
				<h4>LOREM IPSUM DOLOR SIT AMET</h4>
				<ul class="arrows">
					<li><a href="">Jun | 2011</a></li>
					<li><a href="">May | 2011</a></li>
					<li><a href="">September | 2011</a></li>
					<li><a href="">October | 2011</a></li>
					<li><a href="">August | 2010</a></li>
					<li><a href="">August | 2010</a></li>
					<li><a href="">June | 2010</a></li>
					<li><a href="">June | 2010</a></li>
				</ul>
			</div><!-- end widget-archives -->

			<div class="widget widget-caregories">
				<h3 class="widget-title">Category</h3>
				<h4>LOREM IPSUM DOLOR SIT AMET</h4>
				<ul class="bullets">
					<li><a href="">Infants</a></li>
					<li><a href="">Pretoddlers</a></li>
					<li><a href="">Toddlers</a></li>
					<li><a href="">Preschool</a></li>
					<li><a href="">Pre-kindergarten</a></li>
					<li><a href="">Kindergarten</a></li>
				</ul>
			</div><!-- end widget-caregories -->

		</div><!-- end sidebar -->

	</div><!-- end wrap -->

</div><!-- end content -->

<div id="footer">
	<div class="wrap">

		<div class="c-3">
			<div class="widget widget-upcoming">
				<h3 class="widget-title">UPCOMING EVENTS</h3>
				<ul>
					<li>
						<h5>
	                           <span class="date">
		                            <span>APR</span>
		                            <span class="day">30</span>
	                            </span>
							<a href="#" title="PAYING PRIVATE SCHOOL TUTTION">PAYING PRIVATE SCHOOL TUTTION</a>
						</h5>

						<p>Suspendisse dictu m suscipit odio. Nylla dui arcu, fermentum quis,<br/>
							<span>The bookstore &gt;&gt; 10:00am - 4:00pm</span>
						</p>
					</li>
					<li>
						<h5>
	                           <span class="date">
		                            <span>APR</span>
		                            <span class="day">30</span>
	                            </span>
							<a href="#" title="PAYING PRIVATE SCHOOL TUTTION">PAYING PRIVATE SCHOOL TUTTION</a>
						</h5>

						<p>Suspendisse dictu m suscipit odio. Nylla dui arcu, fermentum quis,<br/>
							<span>The bookstore &gt;&gt; 10:00am - 4:00pm</span>
						</p>
					</li>
				</ul>
			</div>
		</div>
		<div class="c-3">
			<div class="widget widget-latest-news">
				<h3 class="widget-title">LATEST NEWS</h3>
				<ul>
					<li>
						<p class="meta"><span class="date">APR|10|2011</span></p>
						<h5><a href="#" title="">LONG TERM ACATEMIC ACHEVEMENT</a></h5>

						<p>Sed ut perspicia tercit pero error sit voluptatem accusantium dole laudatium, totam rem
							aperiam, eaque ipsa quae ab illo inventore quasi architecto.</p>
					</li>
					<li>
						<p class="meta"><span class="date">APR|10|2011</span></p>
						<h5><a href="#" title="">LONG TERM ACATEMIC ACHEVEMENT</a></h5>

						<p>Sed ut perspicia tercit pero error sit voluptatem accusantium dole laudatium, totam rem
							aperiam, eaque ipsa quae ab illo inventore quasi architecto.</p>
					</li>
				</ul>
			</div>
		</div>
		<div class="c-3">
			<div class="widget widget-latest-posts">
				<h3 class="widget-title">LATEST POSTS</h3>
				<ul>
					<li><h5><a href="#" title="">LONG TERM ACATEMIC ACHEVEMENT</a></h5></li>
					<li><h5><a href="#" title="">POSITIVE ATTITUDES AND BEHAVIOR</a></h5></li>
					<li><h5><a href="#" title="">MORE SUCCESSFUL PROGRAMS</a></h5></li>
					<li><h5><a href="#" title="">MORE EFFECTIVE SCHOOLS</a></h5></li>
					<li><h5><a href="#" title="">MORE EFFECTIVE SCHOOLS</a></h5></li>
					<li><h5><a href="#" title="">LONG TERM ACATEMIC ACHEVEMENT</a></h5></li>
					<li><h5><a href="#" title="">MORE EFFECTIVE SCHOOLS</a></h5></li>
					<li><h5><a href="#" title="">MORE EFFECTIVE SCHOOLS</a></h5></li>
				</ul>
			</div>
		</div>
		<div class="c-3">
			<div class="widget widget-contact">
				<h3 class="widget-title">CONTACT US</h3>

				<form enctype="multipart/form-data" method="post" action="php/mail.php" id="reservationform">
					<div class="send-form">

						<p>
							<label>*Your Name:</label>
							<input class="u-3" name="name" id="name1"/>
						</p>

						<p>
							<label>*Your E-mail:</label>
							<input class="u-3" name="email" id="email1"/>
						</p>

						<p>
							<label>Your Message:</label>
							<textarea class="u-3" name="message" id="message1" cols="80" rows="3"></textarea>
						</p>

						<p>
							<input type="submit" name="" class="submit" value="Contact Us"/>
						</p>

					</div><!--  end send-form -->
				</form>
			</div><!--  end widget -->
		</div>

	</div><!-- end wrap -->

	<div id="sub-footer" class="clearfix">

		<p id="copyright">&copy; 2011 Nurfadhilahdesign</p>
		<ul class="subfooter-menu">
			<li><a href="" title="">Terms &amp; Conditions</a></li>
			<li><a href="" title="">Copyrights</a></li>
			<li><a href="" title="">Site Map</a></li>
		</ul>

	</div><!-- end sub-footer -->

</div><!-- end footer -->

</body>
</html>