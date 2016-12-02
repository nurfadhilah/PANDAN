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
            <h1>ATTENDANCE</h1>

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

    <div id="content">

        <div class="wrap">
            <div class="b8">

                <h3 class="title">LIST OF ATTENDANCE<a href="report.php"> (REPORT)</a></h3>

                <p>&nbsp;</p>

                <p>/ = Hadir </p>

                <p>0 = Tidak Hadir</p>

                <p>s= Sakit</p>

                <p>&nbsp;</p>

                <p>&nbsp;</p>


                <div class="page">

                    <form id="Order" name="Order" onSubmit="return Validate()" method="post"
                          enctype="multipart/form-data">
                        <center>
                            <h3>SEARCH
                                : BULAN
                                <select name="OrderBy" onChange="javascript: submit()">
                                    <option value="">Select Categories</option>
                                    <option value="Standard 1">Standard1</option>
                                    <option value="Standard 2">Standard2</option>
                                    <option value="Standard 3">Standard3</option>
                                    <option value="Standard 4">Standard4</option>
                                    <option value="Standard 5">Standard5</option>
                                    <option value="Standard 6">Standard6</option>
                                </select>
                                TAHUN
                                <select name="OrderBy" onChange="javascript: submit()">
                                    <option value="">Select Categories</option>
                                    <option value="Standard 1">Standard1</option>
                                    <option value="Standard 2">Standard2</option>
                                    <option value="Standard 3">Standard3</option>
                                    <option value="Standard 4">Standard4</option>
                                    <option value="Standard 5">Standard5</option>
                                    <option value="Standard 6">Standard6</option>
                                </select></h3>
                        </center>
                    </form>
                    <p>&nbsp;</p>

                    <p><img src="images/parents attendance.PNG" alt="" width="919" height="619"/><br/>
                    </p>
                    <center></center>
                    <center></center>
                    <p>&nbsp;</p>
                    <center></center>
                    <p></p>
                    <center></center>
                    <p></p>
                    <center></center>
                    <p></p>
                    <center></center>
                    <p></p>

                    <p>&nbsp;</p>

                    <p>&nbsp;</p>

                    <p>&nbsp;</p>
                </div><!--  end entry -->

            </div>
            <p>&nbsp;</p><!-- end sidebar -->
        </div><!-- end wrap -->

    </div><!-- end wrap -->

</div><!-- end content -->

<div id="footer">
    <div class="wrap">


    </div><!-- end wrap -->
    <center>
        <p id="copyright">&copy;Tadika Kemas Pandan 1| (2016)</p>
    </center>
</div>
<!--  end widget --><img src="../../AGL_all/img/acdrule.gif" width="1358" height="8">

<center></center>
</div><!-- end footer -->

</body>
</html>