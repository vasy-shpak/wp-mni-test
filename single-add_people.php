<?php /* Template Name: Person Post
Template Post Type: post, page, add_people
 */ ?>
<?php get_header(); ?>

<!-- Team Member Page -->
    <div class="wrap-team" style="background-image: url('<?php bloginfo( 'template_url' ); ?>/assets/img/_src/bg.svg');">
            <div class="wrap-team-member">
                <?php
                if( have_posts() ){
                    while( have_posts() ) {
                        the_post();
                        ?>
                        <div class="tm-picture">
                            <img src="<?php the_field( 'picture' ); ?>" alt="">
                        </div>
                        <div class="tm-info">
                            <h2><?php the_title(); ?></h2>
                            <h3><?php the_excerpt(); ?></h3>
                            <p><?php the_content(); ?></p>
                            </div>
                <?php
                    } 
                    }
                ?>
            </div>
<!-- Compartment Carousel -->
            <div class="third-compartment" id="who-we-are">
                <?php get_template_part( 'template-parts/carousel' );?>
            </div>
    </div>


<?php get_footer(); ?>