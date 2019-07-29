<?php wp_footer(); ?>
<footer>
	<div class="top-bar">
		<p class="white"><strong><span>BUSINESS INNOVATION CENTER (BIC)</span></strong><a class="white" href="https://www.google.com/maps/place/5230+E+Hwy+98,+Panama+City,+FL+32401/@30.1567546,-85.6453231,17z/data=!3m1!4b1!4m5!3m4!1s0x8893819fe3567e3f:0xe37cd46b6dd8308b!8m2!3d30.1567546!4d-85.6431344" target="blank"><span>5230 WEST HIGHWAY 98</span></a><span>PANAMA CITY, FL 32401</span><a class="white" href="tel:850-913-2904"><span>850-913-2904</span></a><a class="white" href="mailto:BICPC@gulfcoast.edu"><span>BICPC@GULFCOAST.EDU</span></a></p>
	</div>
	<div class="bottom-bar">
		<div class="container-fluid">
			<div class="row">
				<div class="logo">
					<div class="col-xs-12 col-sm-6 left">
						<a href="<?php echo get_home_url(); ?>"><img src="/wp-content/uploads/2018/06/footer-logo.png" alt="BIC Logo"></a>
					</div>
					<div class="col-xs-12 col-sm-6 right">
						<a href="#"><img src="/wp-content/uploads/2018/06/gulfstate-cc-logo.png" alt="Gulf Coast State College Logo"></a>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-md-4">
					<div class="right-container">
						<div id="contact-us" class="contact-form">
							<h5 class="navy"><strong>Connect With Us</strong></h5>
							<?php echo do_shortcode('[contact-form-7 id="8" title="Contact Us"]'); ?>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-md-4">
					<div class="left-container">
						<div class="newsletter">
							<h5 class="navy"><strong>Sign Up For Our Newsletter</strong></h5>
							<?php echo do_shortcode('[contact-form-7 id="504" title="Newsletter Form"]'); ?>
						</div>
						<div class="social">
							<h5 class="navy"><strong>Get Social</strong></h5>
							<a href="https://www.facebook.com/BizInnoCtr/" target="blank"><img src="/wp-content/uploads/2018/06/facebook-footer.png" alt="Facebook Logo"></a>
							<a href="https://twitter.com/BizInnoCtr" target="blank"><img src="/wp-content/uploads/2018/06/twitter-footer.png" alt="Twitter Logo"></a>
							<a href="#"><img src="/wp-content/uploads/2018/06/google-footer.png" alt="Google Plus Logo"></a>
							<a href="https://www.linkedin.com/company/bicpc" target="blank"><img src="/wp-content/uploads/2018/06/linkedin-footer.png" alt="LinkedIn Logo"></a>
						</div>
						<div class="group-logo">
							<h5 class="navy"><strong>Member Of</strong></h5>
							<img src="/wp-content/uploads/2018/06/forward.jpg" alt="Northwest Florida Forward Logo">
							<img src="/wp-content/uploads/2018/06/INBIA.png" alt="INBIA Logo">
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-md-4">
					<div class="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3449.813258019868!2d-85.64532308488222!3d30.156754581841604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8893819fe3567e3f%3A0xe37cd46b6dd8308b!2s5230+E+Hwy+98%2C+Panama+City%2C+FL+32401!5e0!3m2!1sen!2sus!4v1532467510758" width="600" height="450" frameborder="0" style="border:0" title="Google Maps" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav id="primary-bootstrap-menu" class="footer-nav" role="navigation">
		<?php wp_nav_menu( array( 'menu'=> 'footer', 'theme_location' => 'footer', 'depth' => 2, 'container' => 'div', 'container_class' => '', 'container_id' => 'footer-navigation', 'menu_class' => 'footer-menu', 'fallback_cb' => 'wp_bootstrap_navwalker::fallback', 'walker' => new wp_bootstrap_navwalker()) ); ?>
	</nav>
</footer>
<!-- Adds JS for fancybox -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>

</body>

</html>
