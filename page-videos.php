<?php /* Template Name: Video Page */ get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
</div>
<section class="innerpage-hero">
    <div class="content">
        <h1 class="white"><?php echo the_title(); ?></h1>
    </div>
</section>
<section class="video-section innerpage-section">
    <div class="container">
        <div class="row is-1">
            <div class="col-xs-12">
                <p><?php echo the_content(); ?></p>
            </div>
            <?php
            $items = rwmb_meta('our_video-section-options');
            if ( !empty( $items ) ) {
             foreach ( $items as $item ) {
              echo '<div class="col-xs-12 col-sm-6 box video">';
              echo $item["our_embed-url"];
              echo '<p>'. $item['our_video-desc'] .'</p>';
              echo '</div>';
          }
      }
      ?>
  </div>
</div>
</section>
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>