<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Online Test
 * @since Online Test 1.0
 */

?>
<footer>
	<div class="container">
		<h4>Newsletter</h4>
		<div class="row newsletter-row">
			<div class="col-lg-6">
				<div class="newsletter-text">
					<p>Don’t see the property you were looking for? We will help you out by suggesting!</p>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="newsletter-form">
					<?php echo do_shortcode('[mc4wp_form id="23"]'); ?>
				</div>
			</div>
		</div>
		<div class="row contact-footer">
			<div class="col-lg-4">
				<p>Stock direct mailing seed money prototype network effects business to business paradigm shift growth hacking conversion. Validation twitter social media marketing pivot niche market responsive web design. Conversion marketing seed round client network effects stealth mode canvas beta.</p>
			</div>
			<div class="col-lg-2">
				<div class="footer-links">
					<h3>Properties</h3>
					<ul>
						<li><a href="">Link 1</a></li>
						<li><a href="">Link 1</a></li>
						<li><a href="">Link 1</a></li>
						<li><a href="">Link 1</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-2">
				<div class="footer-links">
					<h3>Links</h3>
					<ul>
						<li><a href="">Link 1</a></li>
						<li><a href="">Link 1</a></li>
						<li><a href="">Link 1</a></li>
						<li><a href="">Link 1</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-2">
				<div class="footer-links">
					<h3>Social</h3>
					<ul>
						<li><a href="">Link 1</a></li>
						<li><a href="">Link 1</a></li>
						<li><a href="">Link 1</a></li>
						<li><a href="">Link 1</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-2">
				<div class="footer-links">
					<h3>Contact Us</h3>
					<ul>
						<li>774 NE, NewYork 800 4656643 </li>
						<li><a href="mailto:info@dummysite.com">info@dummysite.com</a></li>
						
					</ul>
				</div>
			</div>
		</div>
		<p>© Copyright 2021 Dummy Site</p>
	</div>
</footer>
<?php wp_footer(); ?>

</body>
</html>