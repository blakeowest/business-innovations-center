<?php /* Template Name: Blog */ get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
</div>
<div class="blog">
    <section class="innerpage-hero">
        <div class="content">
            <h1 class="white"><?php echo the_title(); ?></h1>
        </div>
    </section>
    <section class="blog-container">
        <div class="row">
            <?php
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            //Post loop
            $args = array (
                'post_type' => array( 'post' ),
                'posts_per_page' => 12,
                'paged' => $paged,
                'orderby' => 'date',
                'order' => 'DESC',
            );
            $query = new WP_Query($args);
            if ($query->have_posts() ) :
            while ($query->have_posts() ) : $query->the_post();
            ?>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <article class="box">
                    <?php
                    if ( has_post_thumbnail() ) {
                    }
                    else {
                        echo '<div class="no-img"></div>';
                    }
                    ?>
                    <div class="img" style="background-image: url('<?php echo the_post_thumbnail_url(); ?>');"></div>
                    <div class="content">
                        <a href="<?php echo get_the_permalink(); ?>"><h4><?php echo the_title(); ?></h4></a>
                        <p><?php echo the_date(); ?></p>
                        <p><?php echo wp_trim_words( get_the_content(), 25, '...' ); ?></p>
                        <a href="<?php echo get_the_permalink(); ?>"><button class="btn-teal">Read More</button></a>
                    </div>
                </article>
            </div>
            <?php
            // End Loop
            endwhile;
            endif;
            wp_reset_postdata();
            ?>
            <?php if (function_exists("pagination")) {
                pagination($query->max_num_pages);
            } ?>
        </div>
    </section>
</div>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>