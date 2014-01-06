<!DOCTYPE html>
<!--[if lt IE 7]>	   <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>		   <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    	 <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>	   <html class="no-js"> <!--<![endif]-->
<!--[if lte IE 7]><script src="<?php bloginfo('template_url'); ?>/js/vendor/lte-ie7.js"></script><![endif]-->    
<head>
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
  <meta name="Matthew Bush Portfolio" content="Matthew Bush, Matthew, Bush, Portfolio" />    
  <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/vendor/modernizr-2.6.1.min.js"></script>

  <!-- WP HEAD -->
  <?php wp_head(); ?>

</head>
    
<body>
  
  <!--[if lt IE 7]>
    <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade 		your browser today</a> or 
    <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
  <![endif]-->

  <!-- MAIN CONTENT -->
  
  <!-- HEADER -->
  
  <div class="main">
    <div id="home">
     <header> 
      <div id="top-bar">
        <ul>
        	<li><a href="http://www.twitter.com/MTTHWBSH" target="_blank"><span aria-hidden="true" class="icon-twitter"></span></a></li>
        	<li><a href="http://www.linkedin.com/in/matthewallenbush" target="_blank"><span aria-hidden="true" class="icon-linkedin"></span></a></li>
        	<li><a href="http://www.github.com/MTTHWBSH" target="_blank"><span aria-hidden="true" class="icon-github"></span></a></li>
        	<li><a href="mailto:bushmat4@gmail.com" target="_blank"><span aria-hidden="true" class="icon-mail"></span></a></li>
        </ul>
      		
      	<?php get_search_form(); ?>
 	
 	  </div><!-- TOP-BAR -->
	   		 
	   		 <div class="intro">
          <a href="http://mtthwbsh.com"><span class="icon-logo hidden-lg"></span></a>
	   		 	<h1><a href="<?php echo home_url(); ?>">MATTHEW<span>BUSH</span></a></h1>
        		<hr class="hidden-med hidden-sm"/>
        		<h3 class="hidden-sm hidden-med">I'm an <span>interface designer</span> and <span>developer</span>. Currently practicing both as a <span>product designer</span> at <span><a href="https://www.trunkclub.com" target="_blank">Trunk Club</a></span>.</h3>
    		</header><!-- HEADER -->
    		
      		<?php if (is_front_page()) { ?>
      		<nav id="nav">
      		<ul class="nav">
        		<li><a href="#work">work</a></li>
        		<li><a href="#resume">resume</a></li>
        		<li class="home"><a href="#home" class="home"><span class="icon-logo"></span></a></li>
        		<li><a href="#blog">blog</a></li>
       		 	<li><a href="#contact">contact</a></li>
      		</ul>
      		</nav><!-- NAV -->
      		<?php } ?>
      		<?php if (is_front_page()) { } else { ?>
      		<nav id="nav">
      		<ul class="nav">
        		<li><a href="http://mtthwbsh.com/#work">work</a></li>
        		<li><a href="http://mtthwbsh.com/#resume">resume</a></li>
        		<li class="home"><a href="<?php echo home_url(); ?>" class="home"><span class="icon-logo"></span></a></li>
        		<li><a href="http://mtthwbsh.com/#blog">blog</a></li>
       		 	<li><a href="http://mtthwbsh.com/#contact">contact</a></li>
      		</ul>
      		</nav><!-- NAV -->
      		<?php } ?>
      		
      		<!-- Mobile Menu -->
      		      		
      		<a id="menu" href= "#sidr"><span aria-hidden="true" class="icon-menu"></a> 
      		
      		<div id="sidr">
      		<?php if (is_front_page()) { ?>
      		<nav>
      		<ul>
        		<li><a href="#work">work</a></li>
        		<li><a href="#resume">resume</a></li>
           		<li><a href="#blog">blog</a></li>
       		 	<li><a href="#contact">contact</a></li>
      		</ul>
      		</nav><!-- NAV -->
      		<?php } ?>
      		<?php if (is_front_page()) { } else { ?>
      		<nav>
      		<ul>
        		<li><a href="http://mtthwbsh.com/#work">work</a></li>
        		<li><a href="http://mtthwbsh.com/#resume">resume</a></li>
          		<li><a href="http://mtthwbsh.com/#blog">blog</a></li>
       		 	<li><a href="http://mtthwbsh.com/#contact">contact</a></li>
      		</ul>
      		</nav><!-- NAV -->
      		<?php } ?>
      		<?php get_search_form(); ?>
      		<a href="#home" class="top"><span aria-hidden="true" class="icon-top"></a>
      		</div>
  		
	</div><!-- HOME -->