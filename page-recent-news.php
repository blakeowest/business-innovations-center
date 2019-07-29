<?php /* Template Name: Recent News */ get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
</div>
<section class="innerpage-hero">
        <div class="content">
            <h1 class="white"><?php echo the_title(); ?></h1>
        </div>
    </section>
<section class="news-container">
    <div class="row">
        <div class="col-xs-12">
            <?php
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
                //Post loop
            $args = array (
                'post_type' => array( 'recent-news' ),
                'posts_per_page' => 12,
                'paged' => $paged,
                'orderby' => 'date',
                'order' => 'DESC',
            );
            $query = new WP_Query($args);
            if ($query->have_posts() ) :
                while ($query->have_posts() ) : $query->the_post();
                    ?>
                    <div class="news-article">
                        <a href="<?php echo rwmb_meta('our_article-url'); ?>"><h3><?php echo the_title(); ?></h3></a>
                        <p style="font-style: italic;"><?php echo the_date(); ?></p>
                        <p><?php echo the_content(); ?></p>
                        <p class="author">By: <?php echo rwmb_meta('our_author'); ?></p>
                        <p><a href="<?php echo rwmb_meta('our_article-url'); ?>">Click for full article</a></p>
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
    </div>
</section>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>