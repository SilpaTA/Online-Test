<div class="recently-added-wrapper">
	<div class="container">
	<div class="title-section">
		<div class="row">
			<div class="col-lg-6">
				<h2>Recently Added For Sale</h2>
				<p>Interaction design pivot product managementr termsheet deployment entrepreneur rockstar investor. Termsheet branding conversion web design paradigm.</p>
			</div>
			<div class="col-lg-6">
				<a href="#" class="btn more-btn">More about us</a>
			</div>
		</div>
	</div>
	<div class="content-section">
		<div class="row">
			<?php
			$sales = get_posts_by_post_type('sales');
			// var_dump($sales);

			// The Loop
			if ( $sales->have_posts() ) {
			    while ( $sales->have_posts() ) {
			        $sales->the_post();
			        get_the_title()
			    ?>
			<div class="col-lg-3">
				<div class="content-wapper">
					<div class="content-image">
						<img src="<?php echo get_field('image')['url']; ?>">
					</div>
					<div class="content-text">
						<h4><?php the_title();?> <br> <?php the_field('address'); ?></h4>
						<ul>
							<li>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bed.png">5
							</li>
							<li>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/baby-shower.png">3
							</li>
							<li>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bed.png">1450 Sq Ft
							</li>
							<li>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bed.png">APARTMENT
							</li>
						</ul>
						<p><?php the_field('amount'); ?></p>
					</div>
				</div>
			</div>
			<?php
			}
			}
			/* Restore original Post Data */
			wp_reset_postdata();
			?>
			
		</div>
	</div>
</div>
</div>