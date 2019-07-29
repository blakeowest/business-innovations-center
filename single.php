<?php
/**
 * The template for displaying all single posts.
 *
 * @package our
 */

get_header(); ?>
<div class="inner-container">
<?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'content', 'single' ); ?>
    <?php the_post_navigation(); ?>
   

<?php endwhile; // end of the loop. ?>
</div>
<?php get_footer(); ?>
