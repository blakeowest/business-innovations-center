<?php /* Template Name: Home */ get_header(); ?>
<section class="hero-section">
	<div class="container">
		<div class="content">
			<div class="line-container">
				<div class="line-one">
					<h2 class="navy"><?php echo rwmb_meta('our_hero-head') ?></h2>
				</div>
			</div>
			<div class="line-container">
				<div class="line-two">
					<h2 class="white"><?php echo rwmb_meta('our_hero-subhead') ?></h2>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="sec-2">
	<div class="inner-container text-center">
		<h1 class="navy"><?php echo rwmb_meta('our_sec1-head1') ?></h1>
		<h3 class="teal"><?php echo rwmb_meta('our_sec1-subhead') ?></h3>
		<div style="width: 200px;height: 2px;background-color: teal;margin-left: auto;margin-right: auto;margin-top: 50px;"></div>
		<h1 class="navy"><?php echo rwmb_meta('our_sec1-head2') ?></h1>
		<p><?php echo rwmb_meta('our_sec1-content') ?></p>
		<a href="/about"><button class="btn-teal">Learn More</button></a>
	</div>
</section>
<section class="sec-3">
	<div class="container">
		<div class="col-xs-12 col-md-4">
			<div class="inner-container tile box">
				<img src="/wp-content/uploads/2018/06/planning-tile-img.png" alt="Planning">
				<?php echo rwmb_meta('our_sec2-tile1') ?>
				<a href="/planning"><button class="btn-teal">Learn More</button></a>
			</div>
		</div>
		<div class="col-xs-12 col-md-4">
			<div class="inner-container tile box">
				<img src="/wp-content/uploads/2018/06/education-tile-img.png" alt="Education">
				<?php echo rwmb_meta('our_sec2-tile2') ?>
				<a href="https://www.gulfcoast.edu/community/continuing-education/index.html" target="blank"><button class="btn-teal">Learn More</button></a>
			</div>
		</div>
		<div class="col-xs-12 col-md-4">
			<div class="inner-container tile box">
				<img src="/wp-content/uploads/2018/06/network-tile-img.png" alt="Networking">
				<?php echo rwmb_meta('our_sec2-tile3') ?>
				<a href="/events"><button class="btn-teal">Learn More</button></a>
			</div>
		</div>
	</div>
</section>
<section class="sec-4">
	<div class="overlay"></div>
	<div class="container">
		<div class="content">
			<?php echo rwmb_meta('our_sec3-content') ?>
			<a href="/community"><button class="btn-yellow">Learn More</button></a>
		</div>
	</div>
</section>
<section class="sec-5">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-lg-6">
				<div class="content">
					<?php echo rwmb_meta('our_sec4-content') ?>
					<a href="/videos"><button class="btn-teal">See More</button></a>
				</div>
			</div>
			<div class="col-xs-12 col-lg-6">
				<div class="video-wrapper">
					<div class="takeover">
						<img src="/wp-content/uploads/2018/06/close.png" alt="Exit">
					</div>
					<img class="video-placeholder" src="/wp-content/uploads/2018/07/bic-placeholder.png" alt="Video Placeholder">
					<img class="play-btn" src="/wp-content/uploads/2018/06/play-btn.png" alt="Play Button">
					<?php echo rwmb_meta("our_sec4-video") ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>