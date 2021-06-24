<?php if( have_rows('banner_section') ): ?>
<div class="banner-section">
<?php while( have_rows('banner_section') ): the_row();  ?>
<div class="banner-text">
	<?php the_sub_field('main_text'); ?>
	<div class="banner-search-box">
		<ul class="search-tab">
			<li>Residential</li>
			<li>Commercial</li>
		</ul>
		<div class="row search-box">
			<div class="col-lg-12 col-md-12">
				<ul>
					<li>
						<a href="">Location</a>
						<p>Dubai</p>
					</li>
					<li>
						<a href="">Buy/Rent</a>
						<p>Buy</p>
					</li>
					<li>
						<a href="">Completion Status</a>
						<p></p>
					</li>
					<li>
						<a href="">Completion</a>
						<p>Completed</p>
					</li>
					<li>
						<a href="">Property</a>
						<p>Duplex</p>
					</li>
					<li>
						<a href="">Minimum</a>
						<p>AED320,000</p>
					</li>
					<li>
						<a href="">Maximum</a>
						<p>AED820,000</p>
					</li>
					<li>
						<a href="">Bedroom</a>
						<p>3BHK</p>
					</li>
					<li><input type="submut" name="" value="Search" class="search-btn btn"></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="banner-image">
	<?php $img =  get_sub_field('banner_image'); ?>
	<img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" class="img-fluid">
</div>
<?php endwhile; ?>
</div>
<?php endif; ?>
</div>
</div>
</div>