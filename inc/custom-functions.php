<?php

add_filter( 'rwmb_meta_boxes', 'our_register_meta_boxes' );
function our_register_meta_boxes( $meta_boxes ) {
    $prefix = 'our_';

    /**
     * Home Page
    **/
    $meta_boxes[] = array(
        'id'         => 'home-options',
        'title'      => __( 'Home Options', 'textdomain' ),
        'post_types' => array( 'page' ),
        // Register this meta box for posts matched below conditions
        'include' => array(
            // With all conditions below, use this logical operator to combine them. Default is 'OR'. Case insensitive. Optional.
            'relation'        => 'AND',
            // List of page templates. Can be array or comma separated. Optional.
            'template'        => array( 'page-home.php' ),
        ),
        'context'    => 'normal',
        'priority'   => 'high',
        'fields' => array(
            array(
                'name'     => __( 'Hero Heading', 'textdomain' ),
                'id'       => $prefix . 'hero-head',
                'desc'  => 'Input hero heading.',
                'type'     => 'text',
            ),
            array(
                'name'     => __( 'Hero Sub-heading', 'textdomain' ),
                'id'       => $prefix . 'hero-subhead',
                'desc'  => 'Input hero sub-heading.',
                'type'     => 'text',
            ),
            array(
                'name'     => __( 'Section 1 First Heading', 'textdomain' ),
                'id'       => $prefix . 'sec1-head1',
                'desc'  => 'Input section 1 first heading.',
                'type'     => 'text',
            ),
            array(
                'name'     => __( 'Section 1 Sub-heading', 'textdomain' ),
                'id'       => $prefix . 'sec1-subhead',
                'desc'  => 'Input hero sub-heading.',
                'type'     => 'text',
            ),
            array(
                'name'     => __( 'Section 1 Second Heading', 'textdomain' ),
                'id'       => $prefix . 'sec1-head2',
                'desc'  => 'Input section 1 second heading.',
                'type'     => 'text',
            ),
            array(
                'name'     => __( 'Section 1 content', 'textdomain' ),
                'id'       => $prefix . 'sec1-content',
                'desc'  => 'Input section 1 content.',
                'type'     => 'textarea',
            ),
            array(
                'name'     => __( 'Section 2 First Tile', 'textdomain' ),
                'id'       => $prefix . 'sec2-tile1',
                'desc'  => 'Input text for section 2 first tile.',
                'type'     => 'wysiwyg',
            ),
            array(
                'name'     => __( 'Section 2 Second Tile', 'textdomain' ),
                'id'       => $prefix . 'sec2-tile2',
                'desc'  => 'Input text for section 2 second tile.',
                'type'     => 'wysiwyg',
            ),
            array(
                'name'     => __( 'Section 2 Third Tile', 'textdomain' ),
                'id'       => $prefix . 'sec2-tile3',
                'desc'  => 'Input text for section 2 third tile.',
                'type'     => 'wysiwyg',
            ),
            array(
                'name'     => __( 'Section 3 Content', 'textdomain' ),
                'id'       => $prefix . 'sec3-content',
                'desc'  => 'Input text for section 3.',
                'type'     => 'wysiwyg',
            ),
            array(
                'name'     => __( 'Section 4 Content', 'textdomain' ),
                'id'       => $prefix . 'sec4-content',
                'desc'  => 'Input text for section 4.',
                'type'     => 'wysiwyg',
            ),
            array(
                'name'     => __( 'Section 4 Video', 'textdomain' ),
                'id'       => $prefix . 'sec4-video',
                'desc'  => 'Input video for section 4 Youtube URL.',
                'type'     => 'text',
            ),
        )
    );

    /**
     * About Page
    **/
    $meta_boxes[] = array(
        'id'         => 'about-options',
        'title'      => __( 'About Options', 'textdomain' ),
        'post_types' => array( 'page' ),
        // Register this meta box for posts matched below conditions
        'include' => array(
            // With all conditions below, use this logical operator to combine them. Default is 'OR'. Case insensitive. Optional.
            'relation'        => 'AND',
            // List of page templates. Can be array or comma separated. Optional.
            'template'        => array( 'page-about.php' ),
        ),
        'context'    => 'normal',
        'priority'   => 'high',
        'fields' => array(
            array(
                'name'     => __( 'About Heading', 'textdomain' ),
                'id'       => $prefix . 'about-head',
                'desc'  => 'Input about heading.',
                'type'     => 'text',
            ),
            array(
                'name'     => __( 'About Content', 'textdomain' ),
                'id'       => $prefix . 'about-content',
                'desc'  => 'Input about content.',
                'type'     => 'wysiwyg',
            ),
            array(
                'name'     => __( 'About FAQ Heading', 'textdomain' ),
                'id'       => $prefix . 'faq-head',
                'desc'  => 'Input about faq heading.',
                'type'     => 'text',
            ),
            array(
                'name'     => __( 'About FAQ Sub-Heading', 'textdomain' ),
                'id'       => $prefix . 'faq-subhead',
                'desc'  => 'Input about faq sub-heading.',
                'type'     => 'text',
            ),
            array(
                'name'     => __( 'About FAQ content', 'textdomain' ),
                'id'       => $prefix . 'faq-content',
                'desc'  => 'Input about faq content.',
                'type'     => 'wysiwyg',
            ),
        )
    );

    /**
     * Planning Page
    **/
    $meta_boxes[] = array(
        'id'         => 'planning-options',
        'title'      => __( 'Planning Options', 'textdomain' ),
        'post_types' => array( 'page' ),
        // Register this meta box for posts matched below conditions
        'include' => array(
            // With all conditions below, use this logical operator to combine them. Default is 'OR'. Case insensitive. Optional.
            'relation'        => 'AND',
            // List of page templates. Can be array or comma separated. Optional.
            'template'        => array( 'page-planning.php' ),
        ),
        'context'    => 'normal',
        'priority'   => 'high',
        'fields' => array(
            array(
                'name'     => __( 'Planning Hero Content', 'textdomain' ),
                'id'       => $prefix . 'plan-content',
                'desc'  => 'Input planning hero content.',
                'type'     => 'wysiwyg',
            ),
            array(
                'name'     => __( 'Planning Section 1 Heading', 'textdomain' ),
                'id'       => $prefix . 'plan-sec1-head',
                'desc'  => 'Input section 1 heading.',
                'type'     => 'text',
            ),
            array(
                'name'     => __( 'Planning Section 1 Sub-Heading', 'textdomain' ),
                'id'       => $prefix . 'plan-sec1-subhead',
                'desc'  => 'Input section 1 sub-heading.',
                'type'     => 'text',
            ),
            array(
                'name'     => __( 'Planning Section 1 content', 'textdomain' ),
                'id'       => $prefix . 'plan-sec1-content',
                'desc'  => 'Input section 1 content.',
                'type'     => 'wysiwyg',
            ),
            array(
                'name'     => __( 'Planning Section 3 Heading', 'textdomain' ),
                'id'       => $prefix . 'plan-sec3-head',
                'desc'  => 'Input section 3 heading.',
                'type'     => 'text',
            ),
            array(
                'name'     => __( 'Planning Section 3 Sub-Heading', 'textdomain' ),
                'id'       => $prefix . 'plan-sec3-subhead',
                'desc'  => 'Input section 3 sub-heading.',
                'type'     => 'text',
            ),
            array(
                'name'     => __( 'Planning Section 3 content', 'textdomain' ),
                'id'       => $prefix . 'plan-sec3-content',
                'desc'  => 'Input section 3 content.',
                'type'     => 'wysiwyg',
            ),
        )
    );

    /**
     * Community Page
    **/
    $meta_boxes[] = array(
        'id'         => 'community-options',
        'title'      => __( 'Community Options', 'textdomain' ),
        'post_types' => array( 'page' ),
        // Register this meta box for posts matched below conditions
        'include' => array(
            // With all conditions below, use this logical operator to combine them. Default is 'OR'. Case insensitive. Optional.
            'relation'        => 'AND',
            // List of page templates. Can be array or comma separated. Optional.
            'template'        => array( 'page-community.php' ),
        ),
        'context'    => 'normal',
        'priority'   => 'high',
        'fields' => array(
            array(
                'name'     => __( 'Community Hero Content', 'textdomain' ),
                'id'       => $prefix . 'community-content',
                'desc'  => 'Input community hero content.',
                'type'     => 'wysiwyg',
            ),
            array(
                'name'     => __( 'Community Section 1 Heading', 'textdomain' ),
                'id'       => $prefix . 'community-sec1-head',
                'desc'  => 'Input section 1 heading.',
                'type'     => 'text',
            ),
            array(
                'name'     => __( 'Community Section 1 Sub-Heading', 'textdomain' ),
                'id'       => $prefix . 'community-sec1-subhead',
                'desc'  => 'Input section 1 sub-heading.',
                'type'     => 'text',
            ),
            array(
                'name'     => __( 'Community Section 1 content', 'textdomain' ),
                'id'       => $prefix . 'community-sec1-content',
                'desc'  => 'Input section 1 content.',
                'type'     => 'wysiwyg',
            ),
            array(
                'name'     => __( 'Community Section 5 Heading', 'textdomain' ),
                'id'       => $prefix . 'community-sec5-head',
                'desc'  => 'Input section 5 heading.',
                'type'     => 'text',
            ),
            array(
                'name'     => __( 'Community Section 5 content', 'textdomain' ),
                'id'       => $prefix . 'community-sec5-content',
                'desc'  => 'Input section 5 content.',
                'type'     => 'wysiwyg',
            ),
            array(
                'name'     => __( 'Community Section 7 Heading', 'textdomain' ),
                'id'       => $prefix . 'community-sec7-head',
                'desc'  => 'Input section 7 heading.',
                'type'     => 'text',
            ),
            array(
                'name'     => __( 'Community Section 7 Sub-Heading', 'textdomain' ),
                'id'       => $prefix . 'community-sec7-subhead',
                'desc'  => 'Input section 7 sub-heading.',
                'type'     => 'text',
            ),
            array(
                'name'     => __( 'Community Section 7 content', 'textdomain' ),
                'id'       => $prefix . 'community-sec7-content',
                'desc'  => 'Input section 7 content.',
                'type'     => 'wysiwyg',
            ),
        )
    );

    
    /**
     * Events 
    **/
    $meta_boxes[] = array(
        'id'         => 'event-options',
        'title'      => __( 'Event Options', 'textdomain' ),
        'post_types' => array( 'event' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'fields' => array(
            array(
				'name'     => __( 'Event Date', 'textdomain' ),
				'id'       => $prefix . 'event-date',
                'desc'  => 'Input date of event.',
				'type'     => 'text',
			),
            array(
				'name'     => __( 'Event URL', 'textdomain' ),
				'id'       => $prefix . 'event-url',
                'desc'  => 'Input event URL.',
				'type'     => 'text',
			),
            array(
                'name'     => __( 'Event Button Text', 'textdomain' ),
                'id'       => $prefix . 'event-btn',
                'desc'  => 'Input event button text.',
                'type'     => 'text',
            ),
        )
    );

    /**
     * Recent News 
    **/
    $meta_boxes[] = array(
        'id'         => 'recent-news-options',
        'title'      => __( 'Recent News Options', 'textdomain' ),
        'post_types' => array( 'recent-news' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'fields' => array(
            array(
                'name'     => __( 'Author', 'textdomain' ),
                'id'       => $prefix . 'author',
                'desc'  => 'Input author of article.',
                'type'     => 'text',
            ),
            array(
                'name'     => __( 'Full Article URL', 'textdomain' ),
                'id'       => $prefix . 'article-url',
                'desc'  => 'Input article URL.',
                'type'     => 'text',
            ),
        )
    );

    /**
     * Video Page
    **/
    $meta_boxes[] = array(
        'id'         => 'video-options',
        'title'      => __( 'Video Options', 'textdomain' ),
        'post_types' => array( 'page' ),
        // Register this meta box for posts matched below conditions
        'include' => array(
            // With all conditions below, use this logical operator to combine them. Default is 'OR'. Case insensitive. Optional.
            'relation'        => 'AND',
            // List of page templates. Can be array or comma separated. Optional.
            'template'        => array( 'page-videos.php' ),
        ),
        'context'    => 'normal',
        'priority'   => 'high',
        'fields' => array(
            array(
                'name' => __( 'Video Section', 'textdomain' ),
                'id'   => $prefix . 'video-section-options',
                'type' => 'group',
                // Clone whole group?
                'clone'  => true,
                //Limit
                'max_clone' => 99,
                // Drag and drop clones to reorder them?
                'sort_clone' => true,
                //List of fields
                'fields' => array(
                    array(
                        'name'     => __( 'Embed URL', 'textdomain' ),
                        'id'       => $prefix . 'embed-url',
                        'desc'  => 'Input Embed URL.',
                        'type'     => 'text',
                    ),
                    array(
                        'name'     => __( 'Video Short Description', 'textdomain' ),
                        'id'       => $prefix . 'video-desc',
                        'desc'  => 'Input video short description.',
                        'type'     => 'textarea',
                    ),
                ),
            ),
        )
    );
    
    return $meta_boxes;
}