<h2><?php the_field( 'contact_heading' )?></h2>
				<h3><?php the_field( 'contact_us_descrition' )?></h3>
				<div class="wrapper-contact-form">

					<div class="information-column">
						<h4><?php the_field( 'information-column' )?></h4>
						<p><?php the_field( 'contact_person_position' )?></p>
						<a href="mailto: <?php the_field( 'contact_email' )?>" class="email"><i class="far fa-envelope"></i>  <?php the_field( 'contact_email' )?></a><br>
						<a href="tel:<?php the_field( 'contact_phone' )?>" class="phone"><i class="fas fa-phone"></i>  <?php the_field( 'contact_phone' )?></a><br>
						<span><?php the_field( 'register_charity_number' )?></span>
						<h4>Follow us on Social Media</h4>
						<div class="social-media">
							<a href="<?php the_field( 'social_media_facebook' )?>"><i class="fab fa-facebook-f"></i></a>
							<a href="<?php the_field( 'social_media_twitter' )?>"><i class="fab fa-twitter"></i></a>
							<a href="<?php the_field( 'social_media_instagram' )?>"><i class="fab fa-instagram"></i></a>
						</div>
					</div>
					<div class="form-column">
                        <?php echo do_shortcode( '[contact-form-7 id="119" title="Contact Us"]' ); ?>
					</div>
				</div>