<?php /* Template Name: Event Page */ get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
</div>
<section class="innerpage-hero">
    <div class="content">
        <h1 class="white"><?php echo the_title(); ?></h1>
    </div>
</section>
<section class="container-fluid innerpage-section">
    <div class="container no-padding">
        <div class="row is-1">
            <div class="intro-content"><?php echo the_content(); ?></div>
            <?php
            //Post loop
            $args = array (
                'post_type' => array( 'event' ),
                'posts_per_page' => 999,
                'orderby' => 'date',
                'order' => 'DESC',
            );
            $query = new WP_Query($args);
            if ($query->have_posts() ) :
                while ($query->have_posts() ) : $query->the_post();
                    ?>
                    <div class="col-xs-12 col-sm-6 no-padding">
                        <div class="event-tile box">
                            <?php the_post_thumbnail(); ?>
                            <a href="<?php echo rwmb_meta('our_event-URL'); ?>"><h3><?php echo the_title(); ?></h3></a>
                            <p style="font-style: italic;"><?php echo rwmb_meta('our_event-date'); ?></p>
                            <div class="content">
                                <p><?php echo the_content(); ?></p>
                                <a href="<?php echo rwmb_meta('our_event-url'); ?>"><button class="btn-yellow"><?php echo rwmb_meta('our_event-btn'); ?></button></a>
                            </div>
                        </div>
                    </div>
                    <?php
                    // End Loop
                endwhile;
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>