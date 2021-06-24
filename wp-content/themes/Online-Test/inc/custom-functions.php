<?php

// Menu Register Code
    
    function wpb_custom_new_menu() {
        register_nav_menus(
            array(
                'main-menu' => __( 'Main Menu' ),
                'footer-menu-one' => __( 'First Footer Menu' ),
            )
        );
    }
    add_action( 'init', 'wpb_custom_new_menu' );

    function get_posts_by_post_type($post_type = "post", $post_per_page = -1, $offset = null)
    {
        $query = array('post_type' => $post_type, 'posts_per_page' => $post_per_page, 'post_status' => 'publish');

        if (!empty($post_per_page) and $post_per_page != -1 and !empty($offset)) {
            $query['offset'] = $offset;
        }

        return new WP_Query($query);
    }
?>