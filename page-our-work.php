<?php /* Template Name: Our Work Page */ ?>
<?php get_header(); ?>

    <!-- Archieve Our Work -->
    <div class="wrap-work" style="background-image: url('<?php bloginfo( 'template_url' ); ?>/assets/img/_src/bg.svg');">
            <div class="wrap-archieve">
            <?php
                    $args = array(
                    'post_type' => 'projects',
                    'meta_key'   => 'number',
                    'orderby'    => 'meta_value_num',
                    'order'      => 'ASC',
                    'meta_query' => [
                            'key'     => 'number',
                            'value'   => [ 1 ],
                            'compare' => 'IN',
                        ]
                        );
                    $projects = new WP_Query( $args );
                    if( $projects->have_posts() ) {
                    while( $projects->have_posts() ) {
                        $projects->the_post();
                        ?>
                        <div class="hero-archieve">
                            <a class="hero-archieve-pic" href="<?php echo get_post_permalink( )?>">
                                <img src="<?php the_field( 'main_image' ); ?>" alt=""></a>
                            <div class="hero-archieve-info">
                                <span><?php the_date(); ?></span><br>
                                <a href="<?php echo get_post_permalink( )?>"><?php the_title(); ?></a>
                                <p><?php the_content(); ?></p>
                                <div class="archieve-button">
                                    <button type="button">
                                        <a href="<?php echo get_post_permalink( )?>">Read More</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    }
                    else {
                    echo 'Oh ohm no posts!';
                    }
                    wp_reset_postdata();
                ?>
        
                <div class="archieve-tile">


                <?php
                    $args = array(
                    'post_type' => 'projects',
                    'meta_key'   => 'number',
                    'orderby'    => 'meta_value_num',
                    'order'      => 'ASC',
                    'meta_query' => [
                            'key'     => 'number',
                            'value'   => [ 2, 3, 4 ],
                            'compare' => 'IN',
                        ]
                        );
                    $projects = new WP_Query( $args );
                    if( $projects->have_posts() ) {
                    while( $projects->have_posts() ) {
                        $projects->the_post();
                        ?>
                        <a class="archieve-item" href="<?php echo get_post_permalink( )?>">
                            <img src="<?php the_field( 'main_image' ); ?>" alt="">
                            <h2><?php the_title(); ?></h2>
                            <h4><?php the_date(); ?></h4>
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



<?php get_footer(); ?>