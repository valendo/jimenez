<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
<!-- viewport meta to reset iPhone inital scale -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title( ' | ', true, 'right' ); ?></title>
<!-- css3-mediaqueries.js for IE8 or older -->
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script> 
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.slicknav.js"></script> 

</head>

<body>
<!-- header-->
<header>
  <div class="headwrap"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png"></a>
    <p class="call">QUESTIONS? CALL <span class="numb"> 866-835-9301</span></p>
  </div>
</header>
<!-- navi-->
<div class="navi">
<!--
  <div class="rmm">

  
    <ul>
      <li><a href='index.html' class="active">Home</a></li>
      <li><a href='about.html'>About </a></li>
      <li><a href='getaquote.html'> get quote </a></li>
      <li><a href='insurance.html'>insurance product</a></li>
      <li><a href='partners.html'>Partners </a></li>
      <li><a href='#sitemap'>blog</a></li>
      <li><a href='contact.html'>contact us</a></li>
    </ul>
    

  </div>
  
  -->
  <?php wp_nav_menu( array( 'theme_location' => 'main-menu','container_class' => 'rmm', 'menu_class' => '' ) ); ?>

</div>