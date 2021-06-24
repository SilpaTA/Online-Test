<?php
function create_posttype() {
 
    register_post_type( 'sales',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Sales' ),
                'singular_name' => __( 'Sale' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'sales'),
            'show_in_rest' => true,
 
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );
?>