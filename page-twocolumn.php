<?php /*Template Name: Two Column */ get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

    <section style="background-image: url(<?php echo the_post_thumbnail_url(); ?>)" class="container-fluid innerhero-section">
        <div class="row ih-1">
            <h1><?php echo the_title(); ?></h1>
        </div>
    </section>
    <section class="container-fluid innerpage-section twocolumn-section">
        <div class="row">
            <div class="container">
                <div class="row is-1">
                    <div class="col-xs-12 col-sm-6 left">
                        <?php echo do_shortcode(rwmb_meta('cmg_tco-c1')) ?>
                    </div>
                    <div class="col-xs-12 col-sm-6 right">
                        <?php echo do_shortcode(rwmb_meta('cmg_tco-c2')) ?>
                    </div>
                </div>
                <div class="row is-2">
                    <div class="col-xs-12">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>