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
                <h1>SIGN UP</h1>

                <p class="breadcrumbs">You are here: <a href="home">Home</a> &raquo;<strong>SIGN UP </strong></p>
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
    </div><!-- end intro -->

    <div class="wrap">

        <h1>&nbsp;</h1>

        <div id="main-navigation">
            <!-- end dd-menu -->

        </div><!-- end main-navigation -->


    </div><!-- end wrap -->
</div><!-- end header -->


<div id="content">


    <div class="wrap">
        <div class="c-12">

            <form enctype="multipart/form-data" method="post" action="php/mail.php" id="contactform">
                <div class="send-form">

                    <p>
                        <label>*USERNAME (MYKIDS CHILDREN):</label>
                        <input class="u-4" name="name" id="name"/>
                    </p>

                    <p>
                        <label>*PASSWORD:</label>
                        <input class="u-4" name="email" id="email"/>
                    </p>

                    <p>
                        <label>*RETYPE-PASSWORD</label>
                        <input class="u-4" name="website" id="website"/>
                    </p>

                    <p>&nbsp;</p>

                    <p>&nbsp;</p>

                    <p>
                        <input type="submit" name="" class="submit" value="Sign Up"/>
                        <input type="reset" name="" class="reset" value="Clear form"/>
                    </p>

                </div><!--  end book-table-form -->
            </form><!--  end entry -->

        </div>

    </div>

    <div id="footer">
        <div class="wrap">

            <div class="c-3">
                <h3 class="widget-title">Find US ON GOOGLE MAP</h3>

                <div class="google-map"><br>
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
                    <form id="loginForm" name="loginForm" onsubmit="return Validate()" method="post"
                          class="login active">
                        <h3>Log In</h3>

                        <div>
                            <label>Username:</label>
                            <input type="text" name="username" placeholder="Username"/>
                        </div>
                        <div>
                            <label>Password:</label>
                            <input type="password" name="password" placeholder="Password"/>
                        </div>
                        <div>
                            <label>Category : </label>
                            <select name="leveling" style="width:200px; font-size:14px; height:35px">
                                <option value="">Categories</option>
                                <option value="Admin">Admin</option>
                                <option value="Student">Student/ibubapa</option>
                            </select>
                            <br>
                        </div>
                        <div class="bottom">
                            <div class="remember">
                                <p>
                                    <input name="Submit" type="submit" onclick="return LoginCategory()" value="Log In"/>

                            </div>
                            <div class="clear"></div>
                        </div>
                    </form>
                </div>
                <!--  end widget -->
            </div>

        </div><!-- end wrap -->
        <img src="../../AGL_all/img/acdrule.gif" width="1358" height="8">

        <center>
            <p id="copyright">&copy;Tadika Kemas Pandan 1| (2016)</p></center>
    </div><!-- end wrap -->

</div><!-- end content --><!-- end footer -->

</body>
</html>