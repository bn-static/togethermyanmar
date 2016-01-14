<?php include __DIR__ . '/config.php'; ?>
<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
  <meta charset="utf-8">
	<title>Together Myanmar</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- Mobile Specific Metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="<?php site_url(); ?>/css/base.css">
	<link rel="stylesheet" href="<?php site_url(); ?>/css/main.css">
   <link rel="stylesheet" href="<?php site_url(); ?>/css/media-queries.css">
   <link rel="stylesheet" href="<?php site_url(); ?>/css/cssgram.min.css">
   <link rel="stylesheet" href="<?php site_url(); ?>/css/justifiedGallery.min.css">
   <link rel="stylesheet" href="<?php site_url(); ?>/css/swipebox.min.css">
   <style type="text/css">
   body,p,h1,h2,h3,h4,h5,h6,a {
    font-family: Tharlon !important;
   }
   .brick {
        width: 350px;
      }
      .info {
        padding: 15px;
        color: #333;
      }
      .brick img {
        margin: 0px;
        padding: 0px;
        display: block;
      }
      </style>         

   <!-- Script
   =================================================== -->
	<script src="<?php site_url(); ?>/js/modernizr.js"></script>

   <!-- Favicons
	=================================================== -->
	<link rel="shortcut icon" href="favicon.png" >

</head>

<body class="homepage">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=195310000651099";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
   

   <!-- Header
   =================================================== -->
   <header id="main-header">

   	<div class="row header-inner">

	      <div class="logo">
	         <a class="smoothscroll" href="<?php site_url(); ?>/my">Together Myanmar.</a>
	      </div>

	      <nav id="nav-wrap">         
	         
	         <a class="mobile-btn" href="#nav-wrap" title="Show navigation">
	         	<span class='menu-text'>Show Menu</span>
	         	<span class="menu-icon"></span>
	         </a>
         	<a class="mobile-btn" href="#" title="Hide navigation">
         		<span class='menu-text'>Hide Menu</span>
         		<span class="menu-icon"></span>
         	</a>         

	         <ul id="nav" class="nav">
	            <li><a class="smoothscroll" href="<?php site_url(); ?>/my/index.php">မူလစာမျက်နှာ.</a></li>
              <li><a class="smoothscroll" href="<?php site_url(); ?>/my/services.php">ဝန်ဆောင်မှုများ.</a></li>
	            <li><a class="smoothscroll" href="<?php site_url(); ?>/my/works.php">အလုပ်အပ်သူများ.</a></li>
	            <li><a class="smoothscroll" href="<?php site_url(); ?>/my/about.php">ကျွန်ုပ်တို့ အကြောင်း.</a></li>
              <li><a class="smoothscroll" href="<?php site_url(); ?>/my/contact.php">ဆက်သွယ်ရန်.</a></li>
	            <li>
                <select onchange="if (this.value) window.location.href=this.value">
                  <option>ဘာသာစကား</option>
                  <option value="<?php site_url(); ?>/my">Myanmar</option>
                  <option value="<?php site_url(); ?>/en">English</option>
                </select></li>
	         </ul> 

	      </nav> <!-- /nav-wrap -->	      

	   </div> <!-- /header-inner -->

   </header> 