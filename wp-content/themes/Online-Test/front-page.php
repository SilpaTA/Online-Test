<?php get_header(); 

get_template_part( 'template-parts/banner');?>

<div class="area-guid">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="area-guid-content">
					<h2>Area Guid</h2>
					<div class="row">
						<div class="col-lg-4 box-1">
							<div class="area-box">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Image.png">
								<div class="text-box">
									<h3>Downtown Dubai</h3>
									<p>Miona specializes in creating objects and spaces that emphasize the now process of construction.</p>
								</div>
							</div>
						</div>
							<div class="col-lg-4 box-2">
							<div class="area-box">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Image.png">
								<div class="text-box">
									<h3>Dubai Marina</h3>
									<p>Miona specializes in creating objects and spaces that emphasize the now process of construction.</p>
								</div>
							</div>
						</div>
							<div class="col-lg-4 box-3">
							<div class="area-box">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Image.png">
								<div class="text-box">
									<h3>Palm Jumeira</h3>
									<p>Miona specializes in creating objects and spaces that emphasize the now process of construction.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!--area-guid-->
<div class="about-us">
	<div class="row">
		<div class="col-lg-6">
			<div class="about-img">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about.png">
				<a href="#" class="btn about-btn">More about us</a>
			</div>
			
		</div>
		<div class="col-lg-6">
			<div class="about-box">
				<h2>About Us</h2>
				<p>It is a long established fact that a reader will be distracted by the readabl content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, Content here content here making it look like readable English. Today we have more than 150 people in London, Hong Kong and Sydney providing architecture interior and urban design services.</p>
			</div>
		</div>
	</div>
</div>

<?php 
get_template_part( 'template-parts/our-service'); 
get_template_part( 'template-parts/recently-added');
get_template_part( 'template-parts/partners');
?>

<?php get_footer(); ?>