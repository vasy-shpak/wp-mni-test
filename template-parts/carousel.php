<!-- Carousel -->
<div class="who-we-are">
				<h2><?php the_field('who_we_are_headline'); ?></h2>
                <p><?php the_field('who_we_are_description'); ?></p>
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
                                <a href="<?php echo get_post_permalink()?>">
                                <?php the_post_thumbnail( 'full' )?>
                                <h3><?php the_title()?></h3>
                                <p><?php the_excerpt()?></p>
                                </a>
                            </div>
                            <?php
                        }
                        }
                        else {
                        echo 'Oh ohm no nobody!';
                        }
                        wp_reset_postdata();
                    ?>
					</div>
				</div>
			</div>