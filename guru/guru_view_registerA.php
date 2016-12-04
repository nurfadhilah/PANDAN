<?php
include_once "../DB.php";
include_once "../vendor/phpqrcode/qrlib.php";

$qrcode_img = '';

if(isset($_POST['submit'])){
	$id = $_GET['id'];

	$toddlerModel = new DB('toddlers');
	$toddler = $toddlerModel->findOne($id);
	$toddler->status_id = $_POST['submit'];
	$toddlerModel->update($toddler);
	sendSMS('+60196896594', 'Pendaftaran anda telah diluluskan! -Tadika Kemas Pandan 1');

	header("Location: guru_view_qrcode.php?id=$toddler->id");
}
else
	$toddlers = (new DB('toddlers'))->findAll("status_id=1");

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
			<h1>MAKLUMAT KANAK-KANAK</h1>

			<?php if (isset($_SESSION['user']) && ($_SESSION['user']['username'] != '')) {
				echo "<p class='breadcrumbs'>Hai {$_SESSION['user']['username']}, Anda berada dihalaman:<strong>Utama</strong></p>";
			} else {
				echo "<p class='breadcrumbs'>Anda berada dihalaman:<strong>Utama</strong></p>";
			} ?>
		</div>

		<div class="c-4"></div>

	</div><!-- end wrap -->
</div><!-- end intro -->

<div class="wrap">
	<div class="c-12">
		<h3 class="title">SENARAI MENUNGGU PENGESAHAN PENDAFTARAN</h3>
		<p>&nbsp;</p>
		<center>

		  <table>
				<thead>
				<tr>
					<th>Bil</th>
					<th>Nama</th>
					<th>MyKID</th>
					<th>Umur</th>
					<th>Penjaga</th>
					<th>Tindakan</th>
				</tr>
				</thead>
				<tbody>
				<?php foreach ($toddlers as $i => $toddler): ?>
					<tr>
						<td><?= $i + 1 ?></td>
						<td><a href="guru_view_registerB.php?id=<?php echo $name; ?>"><?= $toddler->name ?></td>
						<td><?= $toddler->mykid ?></td>
						<td><?= ($toddler->standard == 1) ? 5 : 6 ?></td>
						<td><?= (new DB('users'))->findOne($toddler->parent_id)->username ?></td>
						<td>
							<form action="guru_view_registerA.php?id=<?=$toddler->id?>" method="post" enctype="multipart/form-data">
								<button type="submit" name="submit" value="2">Sah</button>
								<button type="submit" name="submit" value="1">Tidak Sah</button>
							</form>
						</td>
					</tr>
				<?php endforeach ?>
				</tbody>
			</table>
		</center>
	</div>
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