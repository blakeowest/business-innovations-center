<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
</div>
    <section style="background-image: url(<?php echo the_post_thumbnail_url(); ?>)" class="container-fluid innerhero-section">
		<div class="row ih-1">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1><?php echo the_title(); ?></h1>
                    </div>
                </div>
            </div>
		</div>
	</section>
    <section class="container-fluid innerpage-section">
        <div class="row">
            <div class="container">
                <div class="row is-1">
                    <div class="col-xs-12">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>