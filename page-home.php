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
							<a href="#contact">Contact Us</a>
						</button>
				</div>
    <!-- Wrapper with 3 features -->
                <?php
                    $slides = carbon_get_the_post_meta( 'crb_slides' );
                    echo '<div class="wrapper-features owl-carousel">';
                    foreach ( $slides as $key => $slide ) {
                        echo '<div class="item" data-for="' . $key . '">';
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
                    foreach ( $values as $key => $value ) {
                        echo '<div class="features-expo ' . $key . '">';
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

    <!-- Carosuel -->

        <?php get_template_part( 'template-parts/carousel' );?>

	<!-- Media Links Gallery -->

			<div class="wrapper-media-coverage">

				<h2><?php the_field('media_coverage_headline'); ?></h2>
                <h3><?php the_field('media_coverage_description'); ?></h3>
                
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

                            <a href="<?php echo get_post_permalink( )?>" class="link-item" style="background-image: url('<?php the_field('background_image'); ?>');">
						        <div class="article-name">
                                    <?php the_post_thumbnail( 'full' ); ?>  
							        <h3><?php the_excerpt(); ?></h3>
						        </div>
					        </a>

                    <?php
                    }
                    }
                    else {
                    echo 'Oh ohm no posts!';
                    }
                    wp_reset_postdata();
                ?>


				</div>
			</div>

	<!-- Links to Prof Networks -->

			<div class="wrapper-prof-net">
				<h2><?php the_field('professional_networks'); ?></h2>
				<h3><?php the_field('professional_networks_description'); ?></h3>
				<div class="networks-container">
                <?php
                        $args = array(
                        'post_type' => 'add_network'
                        );
                        $networks = new WP_Query( $args );
                        if( $networks->have_posts() ) {
                        while( $networks->have_posts() ) {
                            $networks->the_post();
                            ?>
                            <a href="<?php echo get_post_permalink( )?>" class="network-item">
                                <?php the_post_thumbnail( 'full' ); ?>
					        </a>
                            <?php
                        }
                        }
                        else {
                        echo 'Oh ohm no products!';
                        }
                        wp_reset_postdata();
                    ?>
				</div>
			</div>

	<!-- Contact Us Section -->

			<div class="wrapper-contac-us" id="contact">
                <?php get_template_part( 'template-parts/contact' );?>
			</div>

		</div>

		<?php get_footer(); ?>