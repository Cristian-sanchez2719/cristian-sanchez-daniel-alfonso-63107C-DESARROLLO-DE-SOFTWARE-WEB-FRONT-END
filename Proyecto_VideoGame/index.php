<?php
session_start();


if(!isset($_SESSION['usuario'])){
    echo '
    <script>
        alert("please, log in");
        window.location= "FORMULARIO/index.php";
    </script>
    ';
    session_destroy();
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  	<title>Inicio</title>
  	<meta charset="utf-8">
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">    
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/demo.css">
    <script src="js/jquery-1.7.1.min.js"></script>
    <script src="js/script.js"></script>
<!--[if lt IE 8]>
   <div style=' clear: both; text-align:center; position: relative;'>
     <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
       <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
    </a>
  </div>
<![endif]-->
<!--[if lt IE 9]>
	<script src="js/html5.js"></script>
	<link rel="stylesheet" href="css/ie.css"> 
<![endif]-->
</head>
<body id="page1">
<!--==============================header=================================-->
    <header>
    <div class="head-box1">
    	<div class="main">
            <nav>
              <ul class="sf-menu">
                  <li><a class="active" href="index.html">Inicio</a>

                  </li>
                  <li><a href="index-1.html">Reseñas</a></li>
                  <li><a href="index-2.html">Nuevo</a></li>
                  <li><a href="index-3.html">Videos</a></li>
                  <li><a href="index-4.html">Blog</a></li>
                  <li><a href="index-5.html">Contacto</a></li>
              </ul>
          </nav>
          <div class="head-inner1">
            <a class="button1 fright" href="more.html">Acceso</a>
            <a class="button1 fright p6" href="more.html">Registro</a>
            <a class="button1 fright p6" href="FORMULARIO/php_datos_db/cerrar_sesion.php">Cerrar Sesión</a>
            <span>¿Aún no te has registrado?</span>
          </div>
          <div class="clear"></div>
      </div>
    </div>
    	<div class="main">
        	<h1><a class="logo" href="index.html">logo</a></h1>
            <a href="more.html"><figure class="page1-img1"><img src="images/head-img1.jpg" alt=""></figure></a>
            <div class="clear"></div>
        </div>
    </header>
    
	<!--==============================content================================-->
    <section id="content">
    	<div class="content-box1">
              <div class="main2">
              <ul class="sf-menu2">
                  <li><a href="more.html">PC</a>
                  	<ul>
                        <li><a href="more.html">Reviews</a></li>
                        <li><a href="more.html">Previews</a></li>
                        <li><a href="more.html">New Releases</a></li>
                        <li><a href="more.html">Top Games</a></li>
                        <li><a href="more.html">All Games</a></li>
                        <li class="last1"><a href="more.html">Videos</a></li>                        
                    </ul>
                  </li>
                  <li><a href="more.html">XBOX 360</a></li>
                  <li><a href="more.html">Wii</a></li>
                  <li><a href="more.html">PS2</a></li>
                  <li><a href="more.html">PS3</a></li>
                  <li><a href="more.html">PSP</a></li>
                  <li><a href="more.html">Mobile</a></li>
              </ul>
              <div class="search-box">
              	<form id="search" action="search.php" method="GET">
                    <input type="text" name="s">                                  
                        <a onClick="document.getElementById('search').submit()" class="button2">Search</a>
                        <div class="clear"></div>
                </form>
              </div>
              <div class="clear"></div>
              </div>
        </div>
        <div class="content-box2">
        	<div class="slider">
                <ul class="items">
                    <li><img src="images/slide-1.jpg" alt="" />
                        <div class="banner">
                        	<span></span><a href="more.html">Lorem ipsum dolor sit amet</a>
                        </div>
                    </li>
                    <li><img src="images/slide-2.jpg" alt="" />
                        <div class="banner">
                        	<span></span><a href="more.html">Lorem ipsum dolor sit amet</a>
                        </div>
                    </li>
                    <li><img src="images/slide-3.jpg" alt="" />
                        <div class="banner">
                        	<span></span><a href="more.html">Lorem ipsum dolor sit amet</a>
                        </div>
                    </li>
                    <li><img src="images/slide-4.jpg" alt="" />
                        <div class="banner">
                        	<span></span><a href="more.html">Lorem ipsum dolor sit amet</a>
                        </div>
                    </li>
                </ul>
                <div class="banner-bg"></div>
                <a href="#" class="prev"></a> <a href="#" class="next"></a>
            </div>
        </div>
        <div class="main p7">
            <div class="container_12">
                <div class="wrapper">
                    <article class="grid_9">
                   	 <h4 class="title1">latest <span>news</span></h4>
                    	<div id="pager">
                        <div>
                        <div class="page1-box1">
                        	<div class="inner1">
                            <figure class="page1-img2"><img src="images/page1-img1.jpg" alt=""></figure>
                            <span>Excepteur sint occaecat cupidatat non proident</span>
                            </div>
                            <div class="inner2">
                            	<div class="inner3">
                                	BY ADMIN, <span>APRIL 9, 2011</span>
                                </div>
                                <div class="inner4">
                                	<a class="link1" href="more.html">PS3,</a> 
                                     <a class="link1" href="more.html">XBOX 360</a>
                                    <span class="comment"><a class="link2" href="more.html">07</a></span>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="inner5">
                            	<p class="p8">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.  <a class="link3" href="more.html">Read more <span></span></a></p>
                            </div>
                        </div>
                        <div class="page1-box1">
                        	<div class="inner1">
                            <figure class="page1-img2"><img src="images/page1-img2.jpg" alt=""></figure>
                            <span>Lorem ipsum dolor sit amet </span>
                            </div>
                            <div class="inner2">
                            	<div class="inner3">
                                	BY ADMIN, <span>APRIL 9, 2011</span>
                                </div>
                                <div class="inner4">
                                	<a class="link1" href="more.html">PS3,</a> 
                                     <a class="link1" href="more.html">XBOX 360</a>
                                    <span class="comment"><a class="link2" href="more.html">07</a></span>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="inner5">
                            	<p class="p8">Dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.    <a class="link3" href="more.html">Read more <span></span></a></p>
                            </div>
                        </div>
                        </div>
                        <div>
                        <div class="page1-box1">
                        	<div class="inner1">
                            <figure class="page1-img2"><img src="images/page1-img2.jpg" alt=""></figure>
                            <span>Excepteur sint occaecat cupidatat non proident</span>
                            </div>
                            <div class="inner2">
                            	<div class="inner3">
                                	BY ADMIN, <span>APRIL 9, 2011</span>
                                </div>
                                <div class="inner4">
                                	<a class="link1" href="more.html">PS3,</a> 
                                     <a class="link1" href="more.html">XBOX 360</a>
                                    <span class="comment"><a class="link2" href="more.html">07</a></span>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="inner5">
                            	<p class="p8">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.  <a class="link3" href="more.html">Read more <span></span></a></p>
                            </div>
                        </div>
                        <div class="page1-box1">
                        	<div class="inner1">
                            <figure class="page1-img2"><img src="images/page1-img1.jpg" alt=""></figure>
                            <span>Lorem ipsum dolor sit amet </span>
                            </div>
                            <div class="inner2">
                            	<div class="inner3">
                                	BY ADMIN, <span>APRIL 9, 2011</span>
                                </div>
                                <div class="inner4">
                                	<a class="link1" href="more.html">PS3,</a> 
                                     <a class="link1" href="more.html">XBOX 360</a>
                                    <span class="comment"><a class="link2" href="more.html">07</a></span>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="inner5">
                            	<p class="p8">Dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.    <a class="link3" href="more.html">Read more <span></span></a></p>
                            </div>
                        </div>
                        </div>
                        <div>
                        <div class="page1-box1">
                        	<div class="inner1">
                            <figure class="page1-img2"><img src="images/page1-img1.jpg" alt=""></figure>
                            <span>Excepteur sint occaecat cupidatat non proident</span>
                            </div>
                            <div class="inner2">
                            	<div class="inner3">
                                	BY ADMIN, <span>APRIL 9, 2011</span>
                                </div>
                                <div class="inner4">
                                	<a class="link1" href="more.html">PS3,</a> 
                                     <a class="link1" href="more.html">XBOX 360</a>
                                    <span class="comment"><a class="link2" href="more.html">07</a></span>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="inner5">
                            	<p class="p8">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.  <a class="link3" href="more.html">Read more <span></span></a></p>
                            </div>
                        </div>
                        <div class="page1-box1">
                        	<div class="inner1">
                            <figure class="page1-img2"><img src="images/page1-img2.jpg" alt=""></figure>
                            <span>Lorem ipsum dolor sit amet </span>
                            </div>
                            <div class="inner2">
                            	<div class="inner3">
                                	BY ADMIN, <span>APRIL 9, 2011</span>
                                </div>
                                <div class="inner4">
                                	<a class="link1" href="more.html">PS3,</a> 
                                     <a class="link1" href="more.html">XBOX 360</a>
                                    <span class="comment"><a class="link2" href="more.html">07</a></span>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="inner5">
                            	<p class="p8">Dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.    <a class="link3" href="more.html">Read more <span></span></a></p>
                            </div>
                        </div>
                        </div>
                        </div>
                        <div class="nav"></div>
                    </article>
                    <article class="grid_3">
                    	<h4 class="title2">Latest Reviews</h4>
                        <div class="page1-box2">
                        	<figure class="page1-img3"><img src="images/page1-img3.jpg" alt=""></figure>
                            <div class="extra-wrap">
                            	<span class="date">April 9, 2011 </span>
                                <a href="more.html">Lorem ipsum dolor sit amet conse</a>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="page1-box2">
                        	<figure class="page1-img3"><img src="images/page1-img4.jpg" alt=""></figure>
                            <div class="extra-wrap">
                            	<span class="date">April 9, 2011 </span>
                                <a href="more.html">Ipsum dolor sit amet conse </a>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="page1-box2 last2">
                        	<figure class="page1-img3"><img src="images/page1-img5.jpg" alt=""></figure>
                            <div class="extra-wrap">
                            	<span class="date">April 9, 2011 </span>
                                <a href="more.html">Lorem ipsum dolor sit amet</a>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <a class="link3 p9" href="more.html">See all Reviews<span></span></a>
                        <h4 class="title3">Latest videos</h4>
                        <div class="page1-box2">
                        	<figure class="page1-img3"><img src="images/page1-img6.jpg" alt=""></figure>
                            <div class="extra-wrap">
                            	<span class="date">April 9, 2011 </span>
                                <a href="more.html">Lorem ipsum dolor sit amet</a>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="page1-box2">
                        	<figure class="page1-img3"><img src="images/page1-img7.jpg" alt=""></figure>
                            <div class="extra-wrap">
                            	<span class="date">April 9, 2011 </span>
                                <a href="more.html">Ipsum dolor sit amet</a>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="page1-box2 last2">
                        	<figure class="page1-img3"><img src="images/page1-img8.jpg" alt=""></figure>
                            <div class="extra-wrap">
                            	<span class="date">April 9, 2011 </span>
                                <a href="more.html">Lorem ipsum dolo</a>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <a class="link3 p9" href="more.html">See all videos<span></span></a>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <aside>
    	<div class="main">
        	<div class="container_12">
            	<div class="wrapper">
                	<article class="grid_3">
                    	<h6>From the Blog</h6>
                        <div class="page1-box3">
                        	<figure class="page1-img4 img-bot"><img src="images/page1-img9.jpg" alt=""></figure>
                            <div class="extra-wrap">
                            <a class="date1" href="more.html">April 9, 2011</a>
                                <p class="p10">Ipsum dolor sit amet conse ctetur adipisicing </p>
                            </div>
                        </div>
                        <div class="page1-box3 p9">
                        	<figure class="page1-img4 img-bot"><img src="images/page1-img10.jpg" alt=""></figure>
                            <div class="extra-wrap">
                            <a class="date1" href="more.html">April 9, 2011</a>
                                <p class="p10">Lorem ipsum <br />dolor sit amet conse ctetur  </p>
                            </div>
                        </div>
                        <a class="link4" href="more.html">See all<span></span></a>
                    </article>
                    <article class="grid_3">
                    	<h6 class="title">Recent Tweets</h6>
                        <div class="tweet"></div>
                        <a class="link4" href="more.html">See all<span></span></a>
                    </article>
                    <article class="grid_3">
                    	<h6>Archive</h6>
                        <ul class="list1">
                            <li><a href="#">July 2011</a></li>
                            <li><a href="#">May 2011</a></li>
                            <li><a href="#">April 2011</a></li>
                            <li><a href="#">March 2011</a></li>
                            <li><a href="#">February 2011</a></li>
                            <li class="last1"><a href="#">January 2011</a></li>
                        </ul>
                    </article>
                    <article class="grid_3">
                    	<h6 class="indent-bot">Links</h6>
                        <div class="page1-box4">
                        	<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit</p>
                            <a class="link5" href="more.html">Tempor incididunt ut</a>
                        </div>
                        <div class="page1-box4">
                        	<p>Ipsum dolor sit amet conse ctetur adipisicing elit</p>
                            <a class="link5" href="more.html">Tempor incididunt ut</a>
                        </div>
                        <div class="page1-box4">
                        	<p>Set magna dolor sit amet conse ctetur adipisicing elit</p>
                            <a class="link5" href="more.html">Tempor incididunt ut</a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </aside>
	<!--==============================footer=================================-->
    <footer>
        <div class="main">
        <div class="foot-page1">
        	GUESON COMPANY &copy; 2024     <a href="index-6.html"> política de privacidad</a>
        </div>
       <div class="foot"> <!-- {%FOOTER_LINK} --></div>
       <div class="clear"></div>
        </div>
    </footer>
</body>
</html>