<?php /* Template Name: About Us Page */ ?>
<?php get_header(); ?>
    
    <!-- About Us -->
	<section class="about-us-wrap">
        <div class="hero-picture">
            <img src="<?php the_field('picture_one'); ?>" alt="">
        </div>

    <!-- Page Navigation -->
        <div class="page-nav">
            <ul>
                <li class="page-nav-item"><a href="#section_one"><?php the_field( 'first_section_headline' ); ?></a></li>
                <li class="page-nav-item"><a href="#section_two"><?php the_field( 'headline_two' ); ?></a></li>
                <li class="page-nav-item"><a href="#section_three">Who We Are</a></li>
            </ul>
        </div>  

    <!-- First paragraph section -->

        <div class="first-compartment" id="section_one" style="background-image: url('<?php bloginfo( 'template_url' ); ?>/assets/img/_src/bg.svg');">
            <div class="compatrment-body">
                <h2><?php the_field( 'headline_one' ); ?></h2>
                <h3><?php the_field( 'sub_headline_one' ); ?></h3>
                <p><?php the_field( 'text_one' ); ?></p>
            </div>
        </div>

    <!-- Secon hero picture -->

        <div class="hero-picture-2">
            <img src="<?php the_field('picture_two'); ?>" alt="">
        </div>

    <!-- Second compartment -->

        <div class="second-compartment" id="section_two" style="background-image: url('<?php bloginfo( 'template_url' ); ?>/assets/img/_src/bg-copy-two.svg');">
            <div class="compatrment-body-second">
                <h2><?php the_field( 'headline_two' ); ?></h2>
                <h4><?php the_field( 'sub_headline_two' ); ?></h4>
                <p><?php the_field( 'text_two' ); ?></p>
                
            </div>
            <div class="links-on-about">
                <div class="wrapper-news-links">

                <?php
                    $args = array(
                    'post_type' => 'projects'
                        );
                    $projects = new WP_Query( $args );
                    if( $projects->have_posts() ) {
                    while( $projects->have_posts() ) {
                        $projects->the_post();
                        ?>

                            <a href="<?php echo get_post_permalink( )?>" class="link-item" style="background-image: url('<?php the_field('main_image'); ?>');">
						        <div class="article-name">
                                <img src="<?php the_field('image_of_the_source'); ?>" alt="">
							        <h3><?php the_title(); ?></h3>
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
        </div>

    <!-- Third compartment Carousel -->
        
        <div class="third-compartment" id="section_three">
                <!-- Carosuel -->
            <?php get_template_part( 'template-parts/carousel' );?>
        </div>
    </section>

<?php get_footer(); ?>