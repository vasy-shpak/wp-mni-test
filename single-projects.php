<?php /* Template Name: Our Work Post
Template Post Type: post, page, add_people
 */ ?>
<?php get_header(); ?>

        <div class="wrap-post" style="background-image: url('<?php bloginfo( 'template_url' ); ?>/assets/img/_src/bg.svg'), url('<?php bloginfo( 'template_url' ); ?>/assets/img/_src/bg-copy-two.svg');">

        <?php
                if( have_posts() ){
                    while( have_posts() ) {
                        the_post();
                        ?>
                        <div class="post-body">
                            <h4><?php the_date(); ?></h4>
                            <h2><?php the_title(); ?></h2>
                            <img src="<?php the_field( 'main_image' ); ?>" alt="">
                            <div class="post-text">
                                <h4><?php the_excerpt(); ?></h4>
                                <p><?php the_content(); ?></p>
                            </div>
                        </div>
                <?php
                    } 
                    }
                ?>
        </div>

<?php get_footer(); ?>