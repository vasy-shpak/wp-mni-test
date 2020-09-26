<!DOCTYPE html>
<html lang="eg">

<head>

	<meta charset="utf-8">

	<title><?php echo wp_get_document_title(); ?></title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

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
					<?php the_custom_logo(); ?>
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
					<?php 
						$slug = get_page_template_slug();
						$pos = strrpos($slug, 'home');
						if(!$pos){ 
							?>
							<div class="nav-contact-button">
									<button type="button">
										<a href="#">Contact Us</a>
									</button>
								</div>
								<?php
						}
					?>
				</span>
			</div>
		</div>
		</header>
