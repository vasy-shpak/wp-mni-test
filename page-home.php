<?php /* Template Name: Home Page */ ?>
<?php get_header(); ?>
	
	<!-- Top Section -->
		<div class="top-part" style="background-image: url('wp-content/themes/mni/assets/img/_src/bg.svg'), url('wp-content/themes/mni/assets/img/_src/bg-copy.svg');">
				<div class="header-capcha">
					<h3><?php the_field('header-capcha')?></h3>
				</div>
				<div class="header-text"> 
					<h1><?php the_field('header-text')?></h1>
				</div>
				<div class="main-text">
					<p>
                        <?php the_field('main-text')?>
					</p>
				</div>
				<div class="contact-button">
						<button type="button">
							<a href="#">Contact Us</a>
						</button>
				</div>
    <!-- Wrapper with 3 features -->
                <?php
                    $slides = carbon_get_the_post_meta( 'crb_slides' );
                    echo '<div class="wrapper-features owl-carousel">';
                    foreach ( $slides as $slide ) {
                        echo '<div class="item">';
                        echo wp_get_attachment_image( $slide['image'] );
                        echo '<br>';
                        echo '<span>' . $slide['title'] . '</span>';
                        echo '</div>';
                    }
                    echo '</div>';
                ?>
		</div>

		<div class="wrapper">

	<!-- Features expo -->
                <?php
                    $values = carbon_get_the_post_meta( 'crb_slides' );
                    foreach ( $values as $value ) {
                        echo '<div class="features-expo">';
                        echo '<div class="feature-img">';
                        echo '<img src="' . wp_get_attachment_image_url( $value['description-image'], 'full' ) . '"/>';
                        echo '</div>';
                        echo '<div class="feature-text">';
                        echo '<h2>' . $value['description-title'] . '</h2>';
                        echo '<p>' . $value['description_text'] . '</p>';
                        echo '</div>';
                        echo '</div>';
                    }
                ?>

	<!-- Carousel -->
			<div class="who-we-are">
				<h2><?php the_field('who_we_are_headline')?></h2>
                <p><?php the_field('who_we_are_description')?></p>
				<div class="s-carousel">
					<div class="owl-carousel carousel-people">
                    <?php
                        $args = array(
                        'post_type' => 'add_people'
                        );
                        $persons = new WP_Query( $args );
                        if( $persons->have_posts() ) {
                        while( $persons->have_posts() ) {
                            $persons->the_post();
                            ?>
                            <div class="carousel-person-item">
                                <a href="<?php echo get_post_permalink( )?>">
                                <?php the_post_thumbnail( 'full' ); ?>
                                <h3><?php the_title() ?></h3>
                                <p><?php the_excerpt() ?></p>
                                </a>
                            </div>
                            <?php
                        }
                        }
                        else {
                        echo 'Oh ohm no products!';
                        }
                    ?>
					</div>
				</div>
			</div>

	<!-- Media Links Gallery -->

			<div class="wrapper-media-coverage">
				<h2>Media Coverage</h2>
				<h3>Be aware of our latest news</h3>
				<div class="wrapper-news-links">

                <?php
                    $args = array(
                    'post_type' => 'add_media'
                        );
                    $articles = new WP_Query( $args );
                    if( $articles->have_posts() ) {
                    while( $articles->have_posts() ) {
                        $articles->the_post();
                        ?>

                            <a href="<?php echo get_post_permalink( )?>" class="link-item" style="background-image: url('wp-content/themes/mni/assets/img/_src/bitmap.png');">
						        <div class="article-name">
                                    <?php the_post_thumbnail( 'full' ); ?>  
							        <h3><?php the_excerpt() ?></h3>
						        </div>
					        </a>

                    <?php
                    }
                    }
                    else {
                    echo 'Oh ohm no products!';
                    }
                ?>

					<!-- <a href="" class="link-item" style="background-image: url('wp-content/themes/mni/assets/img/_src/bitmap.png');">
						<div class="article-name">
							<img src="wp-content/themes/mni/assets/img/_src/paper.png" alt="">
							<h3>Meditation classes will help TDs to handle work pressures</h3>
						</div>
					</a>
					<a href="" class="link-item" style="background-image: url('wp-content/themes/mni/assets/img/_src/bitmap1.png');">
						<div class="article-name">
							<img src="wp-content/themes/mni/assets/img/_src/paper1.png" alt="">
							<h3>Meditation classes will help TDs to handle work pressures</h3>
						</div>
					</a>
					<a href="" class="link-item" style="background-image: url('wp-content/themes/mni/assets/img/_src/bitmap2.png');">
						<div class="article-name">
							<img src="wp-content/themes/mni/assets/img/_src/paper.png" alt="">
							<h3>Meditation classes will help TDs to handle work pressures</h3>
						</div>
					</a>
					<a href="" class="link-item" style="background-image: url('wp-content/themes/mni/assets/img/_src/bitmap3.png');">
						<div class="article-name">
							<img src="wp-content/themes/mni/assets/img/_src/paper2.png" alt="">
							<h3>Meditation classes will help TDs to handle work pressures</h3>
						</div>
					</a>
					<a href="" class="link-item" style="background-image: url('wp-content/themes/mni/assets/img/_src/bitmap4.png');">
						<div class="article-name">
							<img src="wp-content/themes/mni/assets/img/_src/paper3.png" alt="">
							<h3>Meditation classes will help TDs to handle work pressures</h3>
						</div>
					</a> -->

				</div>
			</div>

	<!-- Links to Prof Networks -->

			<div class="wrapper-prof-net">
				<h2>Professional Networks</h2>
				<h3>Go to the link to learn more about professional network</h3>
				<div class="networks-container">
					<a href="" class="network-item">
						<img src="wp-content/themes/mni/assets/img/_src/group-12.png" alt="">
					</a>
					<a href="" class="network-item">
						<img src="wp-content/themes/mni/assets/img/_src/group-13.svg" alt="">
					</a>
				</div>
			</div>

	<!-- Contact Us Section -->

			<div class="wrapper-contac-us">
				<h2>Contact Us</h2>
				<h3>Tell us about your work</h3>
				<div class="wrapper-contact-form">

					<div class="information-column">
						<h4>Mary Lovegrove</h4>
						<p>Director & Co-Founder</p>
						<a href="mailto: mindfulnationireland@gmail.com" class="email"><i class="far fa-envelope"></i>  mindfulnationireland@gmail.com</a><br>
						<a href="tel:+353 86 823 9502" class="phone"><i class="fas fa-phone"></i>  +353 86 823 9502</a><br>
						<span>Register charity number: 20204553</span>
						<h4>Follow us on Social Media</h4>
						<div class="social-media">
							<a href=""><i class="fab fa-facebook-f"></i></a>
							<a href=""><i class="fab fa-twitter"></i></a>
							<a href=""><i class="fab fa-instagram"></i></a>
						</div>
					</div>

					<div class="form-column">
						<form action="/action_page.php">
							<input class="form-item" type="text" id="fname" name="fname" value="Name"><br>
							<input class="form-item" type="text" id="email" name="email" value="Email"><br><br>
							<textarea class="form-item" id="message" name="message" rows="4" cols="30">Message
								</textarea><br>
							<input class="form-button" type="submit" value="Send message">
						  </form>

					</div>
				</div>
			</div>

		</div>


		<?php get_footer(); ?>