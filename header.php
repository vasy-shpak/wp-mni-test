<!DOCTYPE html>
<html lang="eg">

<head>

	<meta charset="utf-8">
	<!-- <base href="/"> -->

	<title>MNI</title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Template Basic Images Start -->
	<meta property="og:image" content="path/to/image.jpg">
	<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon-180x180.png">
	<!-- Template Basic Images End -->
	
	<!-- Custom Browsers Color Start -->
	<meta name="theme-color" content="#000">
	<!-- Custom Browsers Color End -->


	<?php wp_head(); ?>

</head>

<body>

	<div class="home">
	<!-- Navigation -->
		<header>
			<div class="container-navigation">
				<button class="hamburger hamburger--collapse" type="button">
					<span class="hamburger-box">
					  <span class="hamburger-inner"></span>
				  </button>
				</span>
			<div class="topnav">
				<a class="navbar-brand" href="#">
					<img src="wp-content/themes/mni/assets/img/_src/mni-logo-blue.svg" alt="">
				</a>
				<?php
					wp_nav_menu(
						array(
							'menu' => 'primary',
							'container' => '',
							'theme_location' => 'primary'
							
						)
						);
				?>

				<span class="nav-content">
				
					<!-- <a class="nav-home" href="#home">Home</a>
					<a class="nav-who" href="#news">Who we Are</a>
					<a class="nav-about" href="#contact">About Us</a>
					<a class="nav-work" href="#">Our Work</a> -->
			</span>
			</div>
		</div>
		</header>
	<!-- Navigation -->