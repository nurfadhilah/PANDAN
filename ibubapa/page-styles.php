<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<title>Kid`s Voice School Page Styles</title>
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
				<li class="current-menu-item">
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
				<li>
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
			<h1>Page Styles</h1>

			<p class="breadcrumbs">You are here: <a href="home">Home</a> &raquo; <a href="home">Sample
					Page</a> &raquo; <strong>Page Styles</strong></p>
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
		<div class="c-6">
			<code>&lt;h1&gt;</code>,
			<code>&lt;h2&gt;</code>,
			<code>&lt;h3&gt;</code>,
			<code>&lt;h4&gt;</code>,
			<code>&lt;h5&gt;</code>,
			<code>&lt;h6&gt;</code>
		</div>
		<div class="c-6 styles post">
			<h1>This is header H1</h1>

			<h2>This is header H2</h2>

			<h3>This is header H3</h3>
			<h4>This is header H4</h4>
			<h5>This is header H5</h5>
			<h6>This is header H6</h6>
		</div>
		<div class="example"></div>
	</div><!-- end wrap -->

	<div class="wrap">
		<div class="c-6">
			<code>&lt;ol class="list"&gt;</code>
		</div>
		<div class="c-6 styles post">
			<ol class="list">
				<li>Suspendisse dictum suscipit odio.</li>
				<li>Nulla dui arcu, fermentum quis, mattis quis, ultricies id, justo.</li>
				<li>Proin tortor sem vehicula vitae.</li>
				<li>Facilisis vel, accumsan a, sapien.</li>
			</ol>
		</div>
		<div class="example"></div>
	</div><!-- end wrap -->

	<div class="wrap">
		<div class="c-6">
			<code>&lt;ul class="bullets"&gt;</code>
		</div>
		<div class="c-6 styles post">
			<ul class="bullets">
				<li>Suspendisse dictum suscipit odio.</li>
				<li>Nulla dui arcu, fermentum quis, mattis quis, ultricies id, justo.</li>
				<li>Proin tortor sem vehicula vitae.</li>
				<li>Facilisis vel, accumsan a, sapien.</li>
			</ul>
		</div>
		<div class="example"></div>
	</div><!-- end wrap -->

	<div class="wrap">
		<div class="c-6">
			<code>&lt;ul class="stars"&gt;</code>
		</div>
		<div class="c-6 styles post">
			<ul class="stars">
				<li>Suspendisse dictum suscipit odio.</li>
				<li>Nulla dui arcu, fermentum quis, mattis quis, ultricies id, justo.</li>
				<li>Proin tortor sem vehicula vitae.</li>
				<li>Facilisis vel, accumsan a, sapien.</li>
			</ul>
		</div>
		<div class="example"></div>
	</div><!-- end wrap -->

	<div class="wrap">
		<div class="c-6">
			<code>&lt;ul class="arrows"&gt;</code>
		</div>
		<div class="c-6 styles post">
			<ul class="arrows">
				<li>Suspendisse dictum suscipit odio.</li>
				<li>Nulla dui arcu, fermentum quis, mattis quis, ultricies id, justo.</li>
				<li>Proin tortor sem vehicula vitae.</li>
				<li>Facilisis vel, accumsan a, sapien.</li>
			</ul>
		</div>
		<div class="example"></div>
	</div><!-- end wrap -->

	<div class="wrap">
		<div class="c-6">
			<code>&lt;ul class="checklist"&gt;</code>
		</div>
		<div class="c-6 styles post">
			<ul class="checklist">
				<li>Suspendisse dictum suscipit odio.</li>
				<li>Nulla dui arcu, fermentum quis, mattis quis, ultricies id, justo.</li>
				<li>Proin tortor sem vehicula vitae.</li>
				<li>Facilisis vel, accumsan a, sapien.</li>
			</ul>
		</div>
		<div class="example"></div>
	</div><!-- end wrap -->

	<div class="wrap">
		<div class="c-6">
			<code>&lt;p class=&quot;message success&quot;&gt;</code> &hellip;
			<br/>
			<code>&lt;p class=&quot;message info&quot;&gt;</code> &hellip;
			<br/>
			<code>&lt;p class=&quot;message warning&quot;&gt;</code> &hellip;
			<br/>
			<code>&lt;p class=&quot;message error&quot;&gt;</code> &hellip;
		</div>
		<div class="c-6 styles post">
			<p class="message success">Success message</p>

			<p class="message info">Info message</p>

			<p class="message warning">Warning message</p>

			<p class="message error">Error message</p>
		</div>
		<div class="example"></div>
	</div><!-- end wrap -->

	<div class="wrap">
		<div class="c-6">
			<code>&lt;blockquote&gt;</code> &hellip;

		</div>
		<div class="c-6 styles post">
			<p>
				Sed accumsan interdum malesuada.
				Mauris sit amet mi sit amet ligula sagittis vestibulum quis vel ligula.
				Nunc ac ante turpis. Maecenas massa ante, sollicitudin eget mattis eu, pellentesque in augue.
			</p>
			<blockquote>
				<p>
					Risus felis, luctus non pharetra eget, commodo at tortor.
					Praesent urna enim, fringilla a ultrices id, pretium id justo.
					Integer in est vel eros lacinia pretium non eget ligula.
				</p>
			</blockquote>
			<p>
				Donec cursus odio non nunc eleifend quis convallis massa luctus.
				Mauris imperdiet molestie nulla a malesuada. Ut id aliquet ante.
				Nulla convallis vehicula ligula et pellentesque. Donec pretium consequat libero.
			</p>

		</div>
		<div class="example"></div>
	</div><!-- end wrap -->

	<div class="wrap">
		<div class="c-6">
			<code>&lt;span class="pullquote left"&gt;</code>
			<br/>
			<code>&lt;span class="pullquote right"&gt;</code>
		</div>
		<div class="c-6 styles post">
			<p>
				Sed accumsan interdum malesuada.
				Mauris sit amet mi sit amet ligula sagittis vestibulum quis vel ligula.
				Nunc ac ante turpis. Maecenas massa ante, sollicitudin eget mattis eu, pellentesque in augue.
				Sed accumsan interdum malesuada.
				Mauris sit amet mi sit amet ligula sagittis vestibulum quis vel ligula.
				Nunc ac ante turpis. Maecenas massa ante, sollicitudin eget mattis eu, pellentesque in augue.
                    <span class="pullquote left">
                        Risus felis, luctus non pharetra eget, commodo at tortor.
                        Praesent urna enim, fringilla a ultrices id, pretium id justo.
                    </span>
				Sed accumsan interdum malesuada.
				Mauris sit amet mi sit amet ligula sagittis vestibulum quis vel ligula.
				Nunc ac ante turpis. Maecenas massa ante, sollicitudin eget mattis eu, pellentesque in augue.
				Donec cursus odio non nunc eleifend quis convallis massa luctus.
				Mauris imperdiet molestie nulla a malesuada. Ut id aliquet ante.
				Nulla convallis vehicula ligula et pellentesque. Donec pretium consequat libero.
				Sed accumsan interdum malesuada.
				Mauris sit amet mi sit amet ligula sagittis vestibulum quis vel ligula.
				Nunc ac ante turpis. Maecenas massa ante, sollicitudin eget mattis eu, pellentesque in augue.
                    <span class="pullquote right">
                        Risus felis, luctus non pharetra eget, commodo at tortor.
                        Praesent urna enim, fringilla a ultrices id, pretium id justo.
                    </span>
				Sed accumsan interdum malesuada.
				Mauris sit amet mi sit amet ligula sagittis vestibulum quis vel ligula.
				Nunc ac ante turpis. Maecenas massa ante, sollicitudin eget mattis eu, pellentesque in augue.
				Donec cursus odio non nunc eleifend quis convallis massa luctus.
				Mauris imperdiet molestie nulla a malesuada. Ut id aliquet ante.
				Nulla convallis vehicula ligula et pellentesque. Donec pretium consequat libero.
				Sed accumsan interdum malesuada.
				Mauris sit amet mi sit amet ligula sagittis vestibulum quis vel ligula.
				Nunc ac ante turpis. Maecenas massa ante, sollicitudin eget mattis eu, pellentesque in augue.
			</p>
		</div>
		<div class="example"></div>
	</div><!-- end wrap -->

	<div class="wrap">
		<div class="c-6">
			<code>&lt;span class="mark"&gt;</code>
		</div>
		<div class="c-6 styles post">
			<p>
				Sed accumsan interdum malesuada.
                    <span class="mark">
                        Mauris sit amet mi sit amet ligula sagittis vestibulum quis vel ligula.
                    </span>
				Sed accumsan interdum malesuada.
				Mauris sit amet mi sit amet ligula sagittis vestibulum quis vel ligula.
				Nunc ac ante turpis. Maecenas massa ante, sollicitudin eget mattis eu, pellentesque in augue.
			</p>
		</div>
		<div class="example"></div>
	</div><!-- end wrap -->

	<div class="wrap">
		<div class="c-6">
			<code>&lt;img class="alignleft"/&gt;</code>
			<br/>
			<code>&lt;img class="alignright"/&gt;</code>
			<br/>
			<code>&lt;img class="aligncenter"/&gt;</code>
		</div>
		<div class="c-6 styles post">
			<p>Curabitur at enim at nulla iaculis feugiat. Ut semper, nisi vel suscipit venenatis, felis diam auctor mi,
				quis iaculis leo nulla vel sapien. Phasellus blandit nibh vel turpis. Curabitur commodo.
				<a href="assets/slider_asset__0006_.jpg" rel="example_group">
					<img class="alignleft" src="assets/post-image-large.jpg" width="281" height="229" alt="" title=""/>
				</a>
				Suspendisse dictum suscipit odio. Nulla dui arcu, fermentum quis, mattis quis, ultricies id, justo.
				Nulla facilisi. Proin tortor sem vehicula vitae. facilisis vel, accumsan a, sapien. Vivamus convallis
				rutrum lorem.
				Praesent massa lectus, vulputate sed, vestibulum eu, vestibulum eu, dolor. Integer ante. Proin ac odio
				in urna cursus ultricies. Quisque tincidunt lacus in ante. Donec adipiscing.
				Curabitur at enim at nulla iaculis feugiat. Ut semper, nisi vel suscipit venenatis, felis diam auctor
				mi, quis iaculis leo nulla vel sapien. Phasellus blandit nibh vel turpis. Curabitur commodo.
				<img class="alignright" src="assets/post-image-assets-small.jpg" width="196" height="149" alt=""
				     title=""/>
				Suspendisse dictum suscipit odio. Nulla dui arcu, fermentum quis, mattis quis, ultricies id, justo.
				Nulla facilisi. Proin tortor sem vehicula vitae. facilisis vel, accumsan a, sapien. Vivamus convallis
				rutrum lorem.
				Praesent massa lectus, vulputate sed, vestibulum eu, vestibulum eu, dolor. Integer ante. Proin ac odio
				in urna cursus ultricies. Quisque tincidunt lacus in ante. Donec adipiscing.
				Curabitur at enim at nulla iaculis feugiat. Ut semper, nisi vel suscipit venenatis, felis diam auctor
				mi, quis iaculis leo nulla vel sapien. Phasellus blandit nibh vel turpis. Curabitur commodo.
				<img class="aligncenter" src="assets/post-image-large.jpg" width="281" height="229" alt="" title=""/>
				Suspendisse dictum suscipit odio. Nulla dui arcu, fermentum quis, mattis quis, ultricies id, justo.
				Nulla facilisi. Proin tortor sem vehicula vitae. facilisis vel, accumsan a, sapien. Vivamus convallis
				rutrum lorem.
				Praesent massa lectus, vulputate sed, vestibulum eu, vestibulum eu, dolor. Integer ante. Proin ac odio
				in urna cursus ultricies. Quisque tincidunt lacus in ante. Donec adipiscing.
				Curabitur at enim at nulla iaculis feugiat. Ut semper, nisi vel suscipit venenatis, felis diam auctor
				mi, quis iaculis leo nulla vel sapien. Phasellus blandit nibh vel turpis. Curabitur commodo.
			</p>
		</div>
		<div class="example"></div>
	</div><!-- end wrap -->

	<div class="wrap">
		<div class="c-6">
			<code>&lt;table&gt;</code>
		</div>
		<div class="c-6 styles post">
			<table>
				<thead>
				<tr>
					<th>th</th>
					<th>th</th>
					<th>th</th>
					<th>th</th>
					<th>th</th>
					<th>th</th>
				</tr>
				</thead>
				<tbody>
				<tr class="odd">
					<td>odd td</td>
					<td>odd td</td>
					<td>odd td</td>
					<td>odd td</td>
					<td>odd td</td>
					<td>odd td</td>
				</tr>
				<tr class="even">
					<td>even td</td>
					<td>even td</td>
					<td>even td</td>
					<td>even td</td>
					<td>even td</td>
					<td>even td</td>
				</tr>
				<tr class="odd">
					<td>odd td</td>
					<td>odd td</td>
					<td>odd td</td>
					<td>odd td</td>
					<td>odd td</td>
					<td>odd td</td>
				</tr>
				<tr class="even">
					<td>even td</td>
					<td>even td</td>
					<td>even td</td>
					<td>even td</td>
					<td>even td</td>
					<td>even td</td>
				</tr>

				</tbody>
			</table>

		</div>
		<div class="example"></div>
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