<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="<?php bloginfo("charset") ?>">
	<title><?php bloginfo("title") ?></title>
	<meta name="description" content="Free Html5 Templates and Free Responsive Themes Designed by Kimmy | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php //echo get_template_directory_uri()?>
    
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/zerogrid.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/responsive.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/responsiveslides.css" />
	<link rel="stylesheet" href="<?php get_stylesheet_uri()?>">

	
	<link href='./images/favicon.ico' rel='icon' type='image/x-icon'/>
	<script src="<?php echo get_template_directory_uri()?>/js/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri()?>/js/responsiveslides.js"></script>
	<script>
		$(function () {
		  $("#slider").responsiveSlides({
			auto: true,
			pager: false,
			nav: true,
			speed: 500,
			maxwidth: 962,
			namespace: "centered-btns"
		  });
		});
	</script>
	<?php wp_head()?>
</head>
<body <?php body_class();?>>
	<!--------------Header--------------->
<header>
	<div class="wrap-header zerogrid">
		<div id="logo"><?php echo get_custom_logo(); ?></div>
		
		<div id="search">
			<?php  get_search_form()?>
			<!-- <div class="button-search"></div>
			<input type="text" value="Search..." onfocus="if (this.value == &#39;Search...&#39;) {this.value = &#39;&#39;;}" onblur="if (this.value == &#39;&#39;) {this.value = &#39;Search...&#39;;}"> -->
		</div>
	</div>
</header>
<div class="wrap-nav zerogrid">
	<?php 
		//echo news_ticker();
		if(function_exists('news_ticker')){
		echo news_ticker();
	};
	?>
</div>
<nav>
	<div class="wrap-nav zerogrid">
		<div class="menu">
			<!-- <ul>
				<li><a href="index.html">Home</a></li>
				<li class="current"><a href="blog.html">Blog</a></li>
				<li><a href="gallery.html">Gallery</a></li>
				<li><a href="single.html">About</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul> -->

			<?php 
				wp_nav_menu(array(
					'menu'				=> "",
					'menu_class'		=> "",
					'menu_id'			=> "",
					'container'			=> "",
					'container_class'	=> "",
					'container_id'		=> "",
					'theme_location'	=> "primary_menu"
				) );
			?>
		</div>
		
		<div class="minimenu">
			<div>MENU</div>
			<!-- <select onchange="location=this.value">
				<option></option>
				<option value="index.html">Home</option>
				<option value="blog.html">Blog</option>
				<option value="gallery.html">Gallery</option>
				<option value="single.html">About</option>
				<option value="contact.html">Contact</option>
			</select> -->
			<?php 
				wp_nav_menu(array(
					'menu'				=> "",
					'menu_class'		=> "",
					'menu_id'			=> "",
					'container'			=> "",
					'container_class'	=> "",
					'container_id'		=> "",
					'theme_location'	=> "mini_menu"
				) );
			?>
		</div>		
		</div>		
	</div>
</nav>