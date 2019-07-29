<?php /*Template Name: Staff Members */ get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

    <section style="background-image: url(<?php echo the_post_thumbnail_url(); ?>)" class="container-fluid innerhero-section">
        <div class="row ih-1">
            <h1><?php echo the_title(); ?></h1>
        </div>
    </section>
    <section class="container-fluid innerpage-section staffmembers-section">
        <div class="row">
            <div class="container">
                <div class="row is-1">
                    <?php
                    //Staff Member loop
                    $args = array (
                        'post_type' => array( 'staff-member' ),
                        'posts_per_page' => 999,
                        'orderby' => 'title',
                        'order' => 'DESC',
                    );
                    $query = new WP_Query($args);
                    ?>
                    <?php
                    if ($query->have_posts() ) :
                    while ($query->have_posts() ) : $query->the_post();
                    ?>
                    <div class="col-xs-12 col-sm-4 single-member" data-toggle="modal" data-target="#<?php echo the_ID(); ?>">
                        <div class="member-overlay"></div>
                        <div style="background-image: url('<?php echo the_post_thumbnail_url(); ?>');" class="inner-container">
                            <h4><?php echo the_title(); ?></h4>
                            <h5><?php echo rwmb_meta('cmg_smo-smd'); ?></h5>
                        </div>
                    </div>
                    <?php
                    // Adding each loop
                    $counter++;

                    //Checking if 3
                    if ($counter === 3) {
                        print '</div><div class="row">';
                        $counter = 0;
                    }
                    endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </section>

<?php endwhile; // end of the loop. ?>
<?php
//Staff Member loop
$args = array (
    'post_type' => array( 'staff-member' ),
    'posts_per_page' => 999,
    'orderby' => 'title',
    'order' => 'DESC',
);
$query = new WP_Query($args);
?>
<?php
if ($query->have_posts() ) :
while ($query->have_posts() ) : $query->the_post();
?>
<!-- Staff Member Modal -->
<div class="modal fade staffmember-modal" id="<?php echo the_ID(); ?>" tabindex="-1" role="dialog" aria-labelledby="staffmember">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body">
                <h3><?php echo the_title(); ?></h3>
                <h5><?php echo rwmb_meta('cmg_smo-smd'); ?></h5>
                <hr />
                <h6>Biography:</h6>
                <?php echo rwmb_meta('cmg_smo-smb'); ?>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
<?php
endwhile;
endif;
wp_reset_postdata();
?>
<?php get_footer(); ?>