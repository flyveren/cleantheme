<!doctype html>
<head>
  <meta charset="utf-8">
  <title><?php wp_title('&laguo', true, 'right');?> <?php bloginfo('name'); ?></title>
  	
    <meta name="description" content="" />

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="device-width, initial-scale=1, maximum-scale=1">
	
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">

	<!--link rel="apple-touch-icon" href="">
	<link rel="apple-touch-icon" sizes="72x72" href="">
	<link rel="apple-touch-icon" sizes="114x114" href="">
	<link rel="apple-touch-icon" sizes="144x144" href=""-->
		
	<!-- CSS
	================================================== -->
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/skeleton.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/base.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/flexslider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/nav.css" type="text/css" media="screen" />
	
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>" type="text/css" media="screen" />
	

	<!-- Javascript
	================================================== -->
	 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script> 	 
	 <script src="<?php bloginfo('template_url'); ?>/js/jquery.flexslider.js" type="text/javascript"></script>
	 <script src="<?php bloginfo('template_url'); ?>/js/nav.js" type="text/javascript"></script> 	 
	 <script src="<?php bloginfo('template_url'); ?>/js/enquire.min.js" type="text/javascript"></script> 	 
	 
	 
	 <script src="<?php bloginfo('template_url'); ?>/js/scripts.js" type="text/javascript"></script> 	 
	 
	 <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	
	<div id="header">
		<div class="container">
			<div class="sixteen columns">
				<div id="navigationToggle"></div>
				<div id="navigation">
						
					<?php wp_nav_menu( array( 'menu' => 'header', 'container_class' => 'menu-header' ) ); ?> 
					<div class="clear"></div>
				</div>
			</div>
		</div>
	</div>