<?php /* Template Name: Event Page */ get_header(); ?>
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
    <div class="container">
        <div class="row is-1">
            <?php
            //Post loop
            $args = array (
                'post_type' => array( 'event' ),
                'posts_per_page' => 999,
                'orderby' => 'menu_order',
                'order' => 'ASC',
            );
            $query = new WP_Query($args);
            if ($query->have_posts() ) :
                while ($query->have_posts() ) : $query->the_post();
                    ?>
                    <div class="col-xs-12 col-md-6">
                        <div class="event-tile">
                            <img src="">
                            <h3><? echo the_title(); ?></h3>
                            <div class="content">
                                <p><?php echo the_content(); ?></p>
                                <a href="#"><button class="btn-teal">Learn More</button></a>
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